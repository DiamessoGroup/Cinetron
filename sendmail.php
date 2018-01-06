<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true); // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0; // Enable verbose debug output
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'johomb@gmail.com'; // SMTP username
    $mail->Password = 'hupnhcgszucvyuly'; // SMTP password
    $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465; // TCP port to connect to
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
        ),
    );

    //Recipients
    $mail->setFrom('info@cinetron.com', 'Cinetron');
    $mail->addAddress('johomb@gmail.com', 'Jo'); // Add a recipient
    $mail->addReplyTo($_POST["email"], $_POST["name"]);

    //Content
    $emailText = "<b>You have a new message from your Cinetron form.</b><br><br>";
    $emailText .= "<b>Name:</b> $_POST[name]<br><br>";
    $emailText .= "<b>Message:</b> $_POST[message]<br>";

    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = $_POST["subject"];
    $mail->Body = $emailText;
    $mail->AltBody = $emailText;

    $mail->send();
    echo 'Your message has been sent successfully. Thank you, we will get back to you soon!';
} catch (Exception $e) {
    echo 'There was an error while submitting the form. Please try again later.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
