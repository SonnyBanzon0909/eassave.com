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
    // if (isset($_SESSION['last_submission']) && time() - $_SESSION['last_submission'] < 30) {
    //     echo json_encode(["status" => "error", "message" => "You are submitting too frequently."]);
    //     exit();
    // }

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

    // Check for spam using honeypot field
    if (!empty($honeypot)) {
        // If the honeypot field is filled, insert into spam table
        $ip_address = $_SERVER['REMOTE_ADDR'];
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        
        // Insert into spam table
        $stmt = $conn->prepare("INSERT INTO spam (name, email, ip_address, is_spam, created_at) VALUES (?, ?, ?, ?, NOW())");
        $is_spam = 1; // Mark as spam
        $stmt->bind_param("ssss", $full_name, $email, $ip_address, $is_spam);
        $stmt->execute();
        echo json_encode(["status" => "error", "message" => "Spam detected."]);
        exit();
    }

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

    // Get the real IP address (considering proxies or load balancers)
    $ip_address = $_SERVER['REMOTE_ADDR'];
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }

    // Prepare and bind SQL statement for regular contact_inquiry table
    $stmt = $conn->prepare("INSERT INTO contact_inquiry (full_name, last_name, email, phone, subject, message, ip_address) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $full_name, $last_name, $email, $contact, $subject, $message, $ip_address);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "success"]);


// Store email in session with a unique key

        // Store sanitized input data in session variables with "recipient-" prefix
        $_SESSION['recipient-full-name'] = $full_name;
        $_SESSION['recipient-last-name'] = $last_name;
        $_SESSION['recipient-email'] = $email;
        $_SESSION['recipient-contact'] = $contact;
        $_SESSION['recipient-subject'] = $subject;
        $_SESSION['recipient-message'] = $message;

// Redirect to inquiry-received.php
        include 'inquiry-received-code.php';
        
 
    } else {
        echo json_encode(["status" => "error", "message" => "Failed"]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request."]);
}
?>
