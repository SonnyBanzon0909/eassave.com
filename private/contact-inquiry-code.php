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
    // Sanitize input data
    $full_name = htmlspecialchars(trim($_POST["name"]));
    $last_name = htmlspecialchars(trim($_POST["Last-Name"]));
    $email = filter_var($_POST["Email"], FILTER_SANITIZE_EMAIL);
    $contact = htmlspecialchars(trim($_POST["Contact"]));
    $subject = htmlspecialchars(trim($_POST["Subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));

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

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO contact_inquiry (full_name, last_name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $full_name, $last_name, $email, $contact, $subject, $message);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "success"]);
    } else {
        echo json_encode(["status" => "error", "message" => "failed"]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request."]);
}
?>
