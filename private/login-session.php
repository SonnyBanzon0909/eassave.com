<?php
$root = $_SERVER['DOCUMENT_ROOT'];


if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Include database config
require_once 'config.php'; // Database config
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check if the database connection is successful
if ($conn->connect_error) {
    die(json_encode(["message" => "Database connection failed."]));
}

// Check if the user is logged in from the session
if (isset($_SESSION['user_id'])) {
    $_SESSION['is_login'] = true;
} elseif (isset($_COOKIE['remember_me'])) {
    // Check "remember me" cookie
    $rememberMeToken = $_COOKIE['remember_me'];

    // Check the token in the database
    $stmt = $conn->prepare("SELECT id FROM users WHERE remember_token = ?");
    $stmt->bind_param("s", $rememberMeToken);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Token is valid, log the user in
        $stmt->bind_result($userId);
        $stmt->fetch();

        $_SESSION['user_id'] = $userId; // Set the session user ID
        $_SESSION['is_login'] = true;
    }

    $stmt->close();
}

// Close the connection
$conn->close();


?>
