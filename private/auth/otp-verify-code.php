<?php





session_start();
header("Content-Type: application/json");

// Database connection
require_once '../config.php';

// Establish connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    echo json_encode(["message" => "errorCon", "errorCon" => "Database connection failed."]);
    exit;
}

// Check if email exists in session
if (!isset($_SESSION['email'])) {
    echo json_encode(["message" => "errorEmail", "errorEmail" => "Session expired. Please register again."]);
    exit;
}

$email = $_SESSION['email'];

$user_otp = ($_POST['otp-1'] ?? '') . 
            ($_POST['otp-2'] ?? '') . 
            ($_POST['otp-3'] ?? '') . 
            ($_POST['otp-4'] ?? '') . 
            ($_POST['otp-5'] ?? '') . 
            ($_POST['otp-6'] ?? '');

// Retrieve OTP from database
$stmt = $conn->prepare("SELECT otp, otp_expiration FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();
$stmt->close();

// Check if OTP exists
if (!$data) {
    echo json_encode(["message" => "errorOTP", "errorOTP" => "No OTP found."]);
    exit;
}

$db_otp = $data['otp'];
$otp_expiration = $data['otp_expiration'];

// Check if OTP matches
if ($user_otp !== $db_otp) {
    echo json_encode(["message" => "errorMATCH".$user_otp."|||".$db_otp, "errorMATCH" => "Invalid OTP."]);
    exit;
}

// Check if OTP has expired
if (strtotime($otp_expiration) < time()) {
    echo json_encode(["message" => "errorEXP", "errorEXP" => "OTP has expired."]);
    exit;
}

// OTP is valid: Update `is_active`, clear OTP, and remove expiration
$stmt = $conn->prepare("UPDATE users SET otp_expiration = NULL, is_active = 1 WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->close();

// Unset session email
//////unset($_SESSION['email']);

echo json_encode(["message" => "success"]);
?>
