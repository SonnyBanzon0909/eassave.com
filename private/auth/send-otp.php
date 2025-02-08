
<?php
$root = $_SERVER['DOCUMENT_ROOT'];


 
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

//$_SESSION['user_email'] = $email;

date_default_timezone_set('Asia/Manila');
$date_time = date("Y-m-d h:i:s A"); // A for AM/PM indicator
//Generate OTP
$otp = mt_rand(1000, 9999);
$_SESSION['date_time'] = $date_time;
$_SESSION['otp'] = $otp;

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'phpmailer/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


 
try {

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'noreply.eassave@gmail.com';  // Your Gmail username
$mail->Password = 'eassavepassword';  // Your Gmail password or app-specific password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Using STARTTLS
$mail->Port = 587;

$mail->SMTPDebug = 2;  // Enable verbose debug output

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

// 
    // $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    // $mail->Username   = 'sangregoriomagnochurch@gmail.com';      //SMTP username
    // $mail->Password   = 'osntdckzynpsqfwl';                      //SMTP password
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;             //Enable implicit TLS encryption
    // $mail->Port       = 465; 
// 
                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom( "noreply.eassave@gmail.com", 'San Gregorio Magno');
    $mail->addAddress("sonnybanzon090997@gmail.com");            //Add a recipient
    $mail->addReplyTo('noreply.eassave@gmail.com');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Your One-Time Password (OTP) - San Gregorio Magno Church';

    $mail->Body    = 'Dear User,<br><br>

    Thank you for using our service. As requested, please find your one-time password (OTP) below:<br><br>

    OTP: ' . $otp . '<br><br>

    This OTP is valid for 5 Minutes and can only be used once. Please enter the OTP code on our website/app to complete the login/sign-up process.<br><br>

    If you did not request an OTP, please ignore this email and contact us immediately if you suspect any unauthorized activity on your account.<br><br>

    Best regards,<br>
    Admin<br>
    Parokya ni San Gregorio Magno<br><br>
    ';

    $mail->AltBody = 'Your OTP is: ' . $otp . '. This OTP is valid for 5 Minutes and can only be used once. Please enter the OTP code on our website/app to complete the login/sign-up process.';

    $mail->send();

    echo '<script>alert("Message has been sent! \nNote: If you did not receive this email, please check your spam folder.");</script>';





} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}



///

?>