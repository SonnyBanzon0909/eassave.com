<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'config.php'; // Database configuration
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check for DB connection errors
if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Database connection failed."]));
}

// Process only POST requests
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // CSRF Protection
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        echo json_encode(["status" => "error", "message" => "Invalid CSRF token."]);
        exit();
    }

    // Prevent frequent submissions (Rate Limiting)
    if (isset($_SESSION['last_submission']) && time() - $_SESSION['last_submission'] < 30) {
        echo json_encode(["status" => "error", "message" => "You are submitting too frequently."]);
        exit();
    }

    // Store the submission time
    $_SESSION['last_submission'] = time();

    // Sanitize input data
    $full_name = htmlspecialchars(trim($_POST["name"]));
    $last_name = htmlspecialchars(trim($_POST["Last-Name"]));
    $email = filter_var($_POST["Email"], FILTER_SANITIZE_EMAIL);
    $contact = htmlspecialchars(trim($_POST["Contact"]));
    $subject = htmlspecialchars(trim($_POST["Subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));
    $honeypot = trim($_POST["honeypot"]); // Hidden field for spam bots

    // Validate required fields
    if (empty($full_name) || empty($last_name) || empty($email) || empty($contact) || empty($subject)) {
        echo json_encode(["status" => "error", "message" => "Please fill in all required fields."]);
        exit();
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status" => "error", "message" => "Invalid email format."]);
        exit();
    }

    // Check if honeypot field is filled (spam detection)
    if (!empty($honeypot)) {
        // Insert into spam table
        $stmt_spam = $conn->prepare("INSERT INTO spam (name, email, ip_address, is_spam) VALUES (?, ?, ?, ?)");
        $ip_address = $_SERVER['REMOTE_ADDR']; // Get the IP address
        $is_spam = 1; // Mark as spam
        $stmt_spam->bind_param("ssss", $full_name, $email, $ip_address, $is_spam);
        $stmt_spam->execute();
        $stmt_spam->close();

        echo json_encode(["status" => "error", "message" => "Spam detected."]);
        exit();
    }

    // Check for spam using reCAPTCHA (optional, but recommended)
    $recaptcha_secret = "6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe"; // Replace with your reCAPTCHA secret key
    $recaptcha_response = $_POST['g-recaptcha-response'] ?? '';

    $recaptcha_url = "https://www.google.com/recaptcha/api/siteverify";
    $recaptcha_data = [
        'secret'   => $recaptcha_secret,
        'response' => $recaptcha_response,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ];
    
    $recaptcha_options = [
        'http' => [
            'method'  => 'POST',
            'header'  => 'Content-Type: application/x-www-form-urlencoded',
            'content' => http_build_query($recaptcha_data)
        ]
    ];
    
    $recaptcha_context  = stream_context_create($recaptcha_options);
    $recaptcha_verify   = file_get_contents($recaptcha_url, false, $recaptcha_context);
    $recaptcha_response_data = json_decode($recaptcha_verify);

    if (!$recaptcha_response_data->success) {
        echo json_encode(["status" => "error", "message" => "reCAPTCHA verification failed."]);
        exit();
    }

    // Prepare and bind SQL statement for valid inquiry
    $stmt = $conn->prepare("INSERT INTO contact_inquiry (full_name, last_name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $full_name, $last_name, $email, $contact, $subject, $message);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "success"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed"]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request."]);
}
?>
