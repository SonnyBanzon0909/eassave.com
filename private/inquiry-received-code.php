<?php

// Start output buffering to prevent unwanted output
ob_start();

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Ensure session variables exist
if (!isset($_SESSION['recipient-full-name']) || 
    !isset($_SESSION['recipient-last-name']) || 
    !isset($_SESSION['recipient-email']) || 
    !isset($_SESSION['recipient-contact']) || 
    !isset($_SESSION['recipient-subject']) || 
    !isset($_SESSION['recipient-message'])) {

    /////////////echo json_encode(["message" => "session-error"]);
    exit;
}

// Get session values
$full_name = $_SESSION['recipient-full-name'];
$last_name = $_SESSION['recipient-last-name'];
$email = $_SESSION['recipient-email'];
$contact = $_SESSION['recipient-contact'];
$subject = $_SESSION['recipient-subject'];
$message = $_SESSION['recipient-message'];

// Import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'auth/phpmailer/vendor/autoload.php';

// Create PHPMailer instance
$mail = new PHPMailer(true);

try {
    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'noreply.eassave@gmail.com';  // Your Gmail username
    $mail->Password = 'lcgrqmtqkxjilysq';  // Use App Password
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
    $mail->setFrom("noreply.eassave@gmail.com", 'Eassave');
    $mail->addAddress($email);
    $mail->addReplyTo('noreply.eassave@gmail.com');

    // Email Content
    $mail->isHTML(true);
    $mail->Subject = 'Email Acknowledgement';
    $mail->Body    = "
    Dear $full_name,<br><br>
    Your email has been successfully received. Thank you for reaching out to us. We will review your inquiry and respond as soon as possible.<br><br>
    <strong>Summary of your submission:</strong><br>
    <strong>Name:</strong> $full_name $last_name<br>
    <strong>Email:</strong> $email<br>
    <strong>Contact:</strong> $contact<br>
    <strong>Subject:</strong> $subject<br>
    <strong>Message:</strong> $message<br><br>
    We appreciate your patience, and we will get back to you shortly.<br><br>
    Best regards,<br>
    Eassave & Protech Innovation Group
    ";
    $mail->AltBody = "Dear $full_name,\n\nThank you for reaching out. This email is to acknowledge that we have received your inquiry. We will respond as soon as possible.\n\nBest regards,\nEassave & Protech Innovation Group";

    // Send Email
    $mail->send();

    // Clear any output and send a success response
    ob_end_clean();
    /////////echo json_encode(["message" => "success"]);
    exit;

} catch (Exception $e) {
    // Clear any output and send an error response
    ob_end_clean();
    // ////echo json_encode(["message" => "error", "error" => $mail->ErrorInfo]);
    exit;
}
?>
