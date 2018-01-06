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
                <form name="form" method="post" action="sendmail.php" novalidate>
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