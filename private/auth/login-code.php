<?php
$root = $_SERVER['DOCUMENT_ROOT'];



if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

require_once '../config.php'; // Database config
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die(json_encode(["message" => "Database connection failed."]));
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"] ?? '';
    $password = $_POST["password"] ?? '';
    $csrfToken = $_POST["csrf_token"] ?? '';
    $rememberMe = isset($_POST["remember_me"]) ? $_POST["remember_me"] : false;

    // Validate CSRF token
    if (!isset($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $csrfToken)) {
        echo json_encode(["message" => "Invalid CSRF token."]);
        exit;
    }

    // Validate email and password
    if (empty($email) || empty($password)) {
        echo json_encode(["message" => "Please fill in all fields."]);
        exit;
    }

    // Check if the user exists in the database
    $stmt = $conn->prepare("SELECT id, password_hash FROM users WHERE email = ? and is_active = 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($userId, $hashedPassword);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashedPassword)) {
            // Successful login
            $_SESSION['user_id'] = $userId;
 

            // If "Remember Me" is checked, create a persistent cookie
            if ($rememberMe) {
                // Generate a unique token
                $token = bin2hex(random_bytes(32)); // Generate a random token
                setcookie('remember_me', $token, time() + (86400 * 30), "/"); // Set cookie for 30 days
                
                // Store token in database (update with token)
                $stmt = $conn->prepare("UPDATE users SET remember_token = ? WHERE id = ?");
                $stmt->bind_param("si", $token, $userId);
                $stmt->execute();
            }

            echo json_encode(["message" => "success"]);
        } else {
            echo json_encode(["message" => "Incorrect password."]);
        }
    } else {
        echo json_encode(["message" => "User not found."]);
    }

    $stmt->close();
}
$conn->close();
?>
