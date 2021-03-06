<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;

//Load composer's autoloader
require 'vendor/autoload.php';

$name = $email = $subject = $message = "";

function validate_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // A session is required
    if (!session_id()) {
        @session_start();
    }

    // Instantiate the class
    $msg = new \Plasticbrain\FlashMessages\FlashMessages();

    $msg->setCloseBtn('<button type="button" class="close"
                        data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;
                    </button>');
    $msg->setMsgCssClass('alert');

    if (empty($_POST["name"])) {
        $nameErr = "Your name is required.";
    } else {
        $name = validate_data($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "The email is required.";
    } else {
        $email = validate_data($_POST["email"]);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    }

    if (empty($_POST["subject"])) {
        $subjectErr = "The subject is required.";
    } else {
        $subject = validate_data($_POST["subject"]);
    }

    if (empty($_POST["message"])) {
        $messageErr = "The message is required.";
    } else {
        $message = validate_data($_POST["message"]);
    }

    $mail = new PHPMailer(true); // Passing `true` enables exceptions
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
    $mail->addReplyTo($email, $name);

    //Content
    $emailText = "<b>You have a new message from your Cinetron form.</b><br><br>";
    $emailText .= "<b>Name:</b> $name<br><br>";
    $emailText .= "<b>Message:</b> $message<br>";

    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body = $emailText;
    $mail->AltBody = strip_tags($emailText);

    if (!$mail->send()) {
        // Error message
        $msg->error('There was an error while submitting the form. Please try again later.');
        $msg->display();

    } else {
        // Success message
        $msg->success('Your message has been sent successfully. Thank you, we will get back to you soon!');
        $msg->display();
    }

}
?>

    <!DOCTYPE html>

    <html lang="en">

    <head>
        <?php include "./meta_head.php"?>

        <body class="w3-light-grey" ng-app="" ng-cloak>
            <div class=" w3-card-4 w3-white" id="contactUs">
                <div id="statusSendMail" class="w3-margin w3-center">
                    <!-- <p> <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!$mail->send()) {
        echo 'There was an error while submitting the form. Please try again later.';
    } else {
        echo "Your message has been sent successfully. Thank you, we will get back to you soon!";
    }
}
?>
                    </p> -->
                </div>
                <div class="w3-container w3-blue w3-padding-16 w3-center">
                    <h1>Contact Us</h1>
                </div>
                <div class="w3-container w3-padding-32 ">
                    <form name="form" method="post" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]); ?>" novalidate>
                        <p>
                            <label>Name*</label>
                            <br>
                            <input class="w3-input w3-hover-border-blue" name="name" ng-model="name" type="text" required>
                        </p>
                        <span ng-show="form.name.$dirty" class="w3-text-red">
                            <span ng-show="form.name.$error.required">Your name is required</span>
                            <span>
                                <?php echo $nameErr; ?>
                            </span>
                        </span>
                        <p>
                            <label>Email*</label>
                            <br>
                            <input class="w3-input w3-hover-border-blue" name="email" ng-model="email" type="email" required>
                        </p>
                        <span ng-show="form.email.$dirty && form.email.$invalid" class="w3-text-red">
                            <span ng-show="form.email.$error.required">The email is required</span>
                            <span ng-show="form.email.$error.email">The email is invalid</span>
                            <span>
                                <?php echo $emailErr; ?>
                            </span>
                        </span>
                        <p>
                            <label>Subject*</label>
                            <br>
                            <input class="w3-input w3-hover-border-blue" name="subject" ng-model="subject" type="text" required>
                            <span ng-show="form.subject.$dirty" class="w3-text-red">
                                <span ng-show="form.subject.$error.required">The subject is required</span>
                                <span>
                                    <?php echo $subjectErr; ?>
                                </span>
                            </span>
                        </p>
                        <p>
                            <label>Message*</label>
                            <br>
                            <textarea class="w3-input w3-hover-border-blue" rows="3" cols="50" name="message" ng-model="message" type="text" required></textarea>
                            <span ng-show="form.message.$dirty" class="w3-text-red">
                                <span ng-show="form.message.$error.required">The message is required</span>
                                <span>
                                    <?php echo $messageErr; ?>
                                </span>
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

        <script>
            $(function () {
                $(".close").on('click', function () {
                    $('.alert').hide();
                });
            });
        </script>

    </html>