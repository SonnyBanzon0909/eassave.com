<?php
session_start();
$root = $_SERVER['DOCUMENT_ROOT'];
require_once '../config.php'; // Secure database connection

// Function to prevent direct access
function blockDirectAccess() {
    if (basename($_SERVER['PHP_SELF']) === basename(__FILE__)) {
        http_response_code(403);
        header("Location: ../auth/login.php");
        die(json_encode(["status" => "error", "message" => "Direct access not allowed"]));
    }
}
blockDirectAccess();

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(403);
    echo json_encode(["status" => "error", "message" => "Unauthorized request"]);
    exit;
}

// Validate CSRF Token
$json = file_get_contents("php://input");
$data = json_decode($json, true);

if (!isset($data['csrf_token']) || !isset($_SESSION['csrf_token']) || $data['csrf_token'] !== $_SESSION['csrf_token']) {
    http_response_code(403);
    echo json_encode(["status" => "error", "message" => "Invalid CSRF token"]);
    exit;
}

// Remove remember_me cookie securely
if (isset($_COOKIE['remember_me'])) {
    setcookie('remember_me', '', time() - 3600, '/', '', true, true); // Secure flag

    // Remove token from the database
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
    if ($conn->connect_error) {
        http_response_code(500);
        echo json_encode(["status" => "error", "message" => "Database error"]);
        exit;
    }

    $stmt = $conn->prepare("UPDATE users SET remember_token = NULL WHERE remember_token = ?");
    $stmt->bind_param("s", $_COOKIE['remember_me']);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

// Destroy session securely
$_SESSION = [];
session_unset();
session_destroy();

// Return JSON response
echo json_encode(["status" => "success", "message" => "Logged out successfully"]);
exit;
?>
