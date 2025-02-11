<?php

// For OTP, creation ensure to meet the ff:
//1. Gmail Account is set to have 2 auth password
//2. Generate a 12 charaction app password from this gmail site: https://myaccount.google.com/u/7/apppasswords?rapt=AEjHL4NkK1lPpJvqCtjJeanzYXIBwEL8hCULchiN9GOA3Gmhl8E7mzlrgj3TPHksKj42amTXPMNKJUiycYzefPA1UD8WhqgucsA7EblgKCcY0rx40qrPsBA
//3. Reuse this code
//4. for debugging purpose, set this to 2, instead of zero $mail->SMTPDebug = 2;

$root = $_SERVER['DOCUMENT_ROOT'];

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

// Set timezone and generate OTP
date_default_timezone_set('Asia/Manila');
$date_time = date("Y-m-d H:i:s A"); // 24-hour format
$otp = mt_rand(100000, 999999);

$_SESSION['date_time'] = $date_time;
$_SESSION['otp'] = $otp;

// Import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/vendor/autoload.php';

// Create PHPMailer instance
$mail = new PHPMailer(true);

try {
    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'noreply.eassave@gmail.com';  // Your Gmail username
    $mail->Password = 'lcgrqmtqkxjilysq';  // Use App Password instead of real password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    
    // Remove debug mode in production
    $mail->SMTPDebug = 0;

    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);




    // Email Recipients
    $mail->setFrom("noreply.eassave@gmail.com", 'Eassave');
    $mail->addAddress("sonnybanzon090997@gmail.com");
    $mail->addReplyTo('noreply.eassave@gmail.com');

    // Email Content
    $mail->isHTML(true);
    $mail->Subject = 'Your One-Time Password (OTP) - Eassave';
    $mail->Body = "
        Dear User,<br><br>
        Thank you for using our service. Your one-time password (OTP) is:<br><br>
        <strong>OTP: $otp</strong><br><br>
        This OTP is valid for 5 minutes and can only be used once.<br><br>
        If you did not request this OTP, please ignore this email.<br><br>
        Best regards,<br>
        Eassave & Protech Innovation Group
    ";
    $mail->AltBody = "Your OTP is: $otp. This OTP is valid for 5 minutes.";

    // Send Email
    $mail->send();
    
    echo json_encode(["message" => "success"]);
    //echo '<script>alert("Message has been sent! \nNote: If you did not receive this email, please check your spam folder.");</script>';
    
} catch (Exception $e) {
    echo json_encode(["message" => "error"]);
    ///echo "Message could not be sent. Error: {$mail->ErrorInfo}";
}
?>
