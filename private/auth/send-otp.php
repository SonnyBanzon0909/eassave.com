<?php

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Ensure session variables exist
if (!isset($_SESSION['otp']) || !isset($_SESSION['email'])) {
    ob_clean();
    echo json_encode(["message" => "session-error"]);
    exit;
}

$otp = $_SESSION['otp'];
$email = $_SESSION['email'];

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
    $mail->Password = 'bdmsenjahuwpixfr';//lcgrqmtqkxjilysq';  // Use App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->SMTPDebug = 0;

    // Fix SSL options
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    // Email Recipients
    $mail->setFrom("noreply.eassave@gmail.com", 'Eassave | Your Smart Digital Card');
    $mail->addAddress($email);
    $mail->addReplyTo('noreply.eassave@gmail.com');

    // Load email signature from file
    $email_signature = file_get_contents('../email-signature.html');

    // Email Content
    $mail->isHTML(true);
    $mail->Subject = 'Your One-Time Password (OTP) - Eassave';
    $mail->Body = "
    <div style='width: 100%; text-align: center;'>
    <table width='800' border='0' cellspacing='0' cellpadding='0' align='center' style='
    background-color: #ffffff;
    border: 1px solid #dddddd;
    border-radius: 8px;
    padding: 20px;
    font-family: Arial, sans-serif;
    '>
    <tr>
    <td style='text-align: left;'>
    <p>Dear User,</p>
    <p>Your OTP is: <strong>$otp</strong></p>
    <p>This OTP is valid for 5 minutes.</p>
    <p>Best regards,<br>Eassave & Protech Innovation Group</p>

    <br>
    <br>
    
    </td>
    </tr>

    $email_signature

    </table>
    </div>
    ";

    $mail->AltBody = "Your OTP is: $otp. This OTP is valid for 5 minutes.";

    // Send Email
    $mail->send();

    ob_clean();
    echo json_encode(["message" => "success"]);
    exit;

} catch (Exception $e) {
    ob_clean();
    echo json_encode(["message" => "error", "error" => $mail->ErrorInfo]);
    exit;
}
?>
