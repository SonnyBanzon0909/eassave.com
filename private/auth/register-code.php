<?php
$root = $_SERVER['DOCUMENT_ROOT'];

// Start the session
session_start();

// Example: Database connection
require_once '../config.php'; // Database configuration

// Establish database connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check the connection
if ($conn->connect_error) {
    die(json_encode(["message" => "Database connection failed."]));
}

// Function to validate CSRF token
function isValidCsrfToken($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// Function to validate strong passwords
function isStrongPassword($password) {
    return preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&.,\-_])[A-Za-z\d@$!%*?&.,\-_]{8,}$/', $password);
}

function registerUser($email, $phone, $password, $confirmPassword, $termsAccepted) {
    global $conn;

    // Sanitize and validate inputs
    $email = trim(filter_var($email, FILTER_SANITIZE_EMAIL));
    $phone = trim(filter_var($phone, FILTER_SANITIZE_NUMBER_INT));
    $password = trim($password);
    $confirmPassword = trim($confirmPassword);
    $termsAccepted = $termsAccepted ? 1 : 0; // Convert terms to a boolean (1 for accepted, 0 for not)

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "invalid-email";
    }

    if (!preg_match('/^\d{10,15}$/', $phone)) {
        return "phone-error";
    }

    if ($password !== $confirmPassword) {
        return "password-match";
    }

    if (!isStrongPassword($password)) {
        return "password-req";
    }

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Check if email already exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->close();
        return "email-error";
    }
    $stmt->close();

    // Insert user into the database, including the terms acceptance
    $stmt = $conn->prepare("INSERT INTO users (email, phone, password_hash, terms_accepted) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $email, $phone, $hashedPassword, $termsAccepted);

    if ($stmt->execute()) {
        $stmt->close();
        return "success";
    } else {
        $error = $stmt->error;
        $stmt->close();
        return "error: " . $error;
    }
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"] ?? '';
    $phone = $_POST["phone"] ?? '';
    $password = $_POST["password"] ?? '';
    $confirmPassword = $_POST["confirm-password"] ?? '';
    $csrfToken = $_POST["csrf_token"] ?? '';
    $terms = isset($_POST["terms"]) ? $_POST["terms"] : ''; // Get the terms checkbox value

    // Validate CSRF token
    if (!isValidCsrfToken($csrfToken)) {
        echo json_encode(["message" => "Invalid CSRF token."]);
        exit;
    }

    $message = registerUser($email, $phone, $password, $confirmPassword, $terms);
    echo json_encode(["message" => $message]);
    exit; // End the script to prevent further output
}

?>
