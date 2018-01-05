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
    $mail->Password = 'RangeRover2015$'; // SMTP password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587; // TCP port to connect to
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
        ),
    );

    //Recipients
    $mail->setFrom('johomb@gmail.com', 'Cinetron');
    $mail->addAddress('johomb@gmail.com', 'Joe Homb'); // Add a recipient
    $mail->addReplyTo('johomb@gmail.com', 'Jo Homb');

    //Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    /* $mail->send();
echo 'Message has been sent'; */
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php include "./meta_head.php"?>

        <body class="w3-light-grey" ng-app="" ng-cloak>
            <div class=" w3-card-4 w3-white" id="contactUs">
                <div class="w3-container w3-blue w3-padding-16 w3-center">
                    <h1>Contact Us</h1>
                </div>
                <div class="w3-container w3-padding-32 ">
                    <form name="form" method="post" action="contact-us.php" novalidate>
                        <p>
                            <label>Name*</label>
                            <br>
                            <input class="w3-input w3-hover-border-blue" name="name" ng-model="name" type="text" required>
                        </p>
                        <span ng-show="form.name.$dirty" class="w3-text-red">
                            <span ng-show="form.name.$error.required">Your name is required</span>
                        </span>
                        <p>
                            <label>Email*</label>
                            <br>
                            <input class="w3-input w3-hover-border-blue" name="email" ng-model="email" type="email" required>
                        </p>
                        <span ng-show="form.email.$dirty && form.email.$invalid" class="w3-text-red">
                            <span ng-show="form.email.$error.required">The email is required</span>
                            <span ng-show="form.email.$error.email">The email is invalid</span>
                        </span>
                        <p>
                            <label>Subject*</label>
                            <br>
                            <input class="w3-input w3-hover-border-blue" name="subject" ng-model="subject" type="text" required>
                            <span ng-show="form.subject.$dirty" class="w3-text-red">
                                <span ng-show="form.subject.$error.required">The subject is required</span>
                            </span>
                        </p>
                        <p>
                            <label>Message*</label>
                            <br>
                            <textarea class="w3-input w3-hover-border-blue" rows="3" cols="50" name="message" ng-model="message" type="text" required></textarea>
                            <span ng-show="form.message.$dirty" class="w3-text-red">
                                <span ng-show="form.message.$error.required">The message is required</span>
                            </span>
                        </p>
                        <p>
                            <input class="w3-btn w3-blue w3-block" ng-disabled="form.name.$dirty && form.name.$invalid || form.subject.$dirty && form.subject.$invalid || form.email.$dirty && form.email.$invalid || form.message.$dirty && form.message.$invalid || form.email.$pristine || form.name.$pristine || form.subject.$pristine || form.message.$pristine || form.message.invalid"
                                type="submit" value="Send">
                        </p>

                    </form>

                </div>
            </div>
            <div class="w3-center w3-margin">
                <a href="./index.php">Return to Cinetron</a>
            </div>

        </body>

    </html>