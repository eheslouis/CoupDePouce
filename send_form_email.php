<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="description" content="Coup de Pouce">
        <meta name="author" content="Elodie Heslouis">
        <!-- <link rel="icon" href="../../favicon.ico"> -->
        <title>Coup de Pouce</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/ie-emulation-modes-warning.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
        <!-- Custom styles for this template -->
        <link href="css/main.css" rel="stylesheet">
        <link href="css/navbar.css" rel="stylesheet">
        <link href="css/leftColumn.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <?php
                include "common/nextAgenda.php";
            ?>
            <?php
                include "common/navbar.php";
            ?>

            <div class="row">
            	<div class="col-md-1"></div>
                <div class="col-md-10">
					<?php

					if(isset($_POST["email"]))
					{
						$email_to = "coupdepoucevietnam@gmail.com";
						$email_subject = "Message du site internet";

						function died($error)
						{
							echo "we are very sorry, but there were error(s) found with the form you submitted.";
							echo "These errors appear below.<br /><br />";
							echo $error."<br /><br />";
							echo "Please go back and fix these errors.<br /><br />";
							die();
						}

					// validation expected data exists
						if(!isset($_POST['name']) ||
							!isset($_POST['email']) ||
							!isset($_POST['message'])) {
								died('We are sorry, but there appears to be a problem with the form you submitted.');
						}
						$name = $_POST['name'];
						$email_from = $_POST['email'];
						$message = $_POST['message'];

						$error_message = "";
						$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
						if(!preg_match($email_exp,$email_from))
						{
							$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
						}
						$string_exp = "/^[A-Za-z .'-]+$/";
						if(strlen($message) < 2)
						{
							$error_message .= 'The message you entered do not appear to be valid.<br />';
						}

						if(strlen($error_message) > 0)
						{
								died($error_message);
						}

						function clean_string($string)
						{
							$bad = array("content-type","bcc:","to:","cc:","href");
							return str_replace($bad,"",$string);
						}

						$email_message = "Nom: ".clean_string($name)."\n";
						$email_message .= "Email: ".clean_string($email_from)."\n";
						$email_message .= "Message: ".clean_string($message)."\n";

						$headers = 'From: webmaster@coupdepoucevn.org' . "\r\n" . 'Reply-To: '.$email_from . "\r\n" . 'X-Mailer: PHP/' . phpversion();
						$return = @mail($email_to, $email_subject, $email_message, $headers);
						if ($return == true)
						{
							echo 'Merci pour votre message. Nous vous contacterons très vite.';
						}
					}
					?>
				</div>
            </div>
        </div>
<!-- Bootstrap core JavaScript ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/format-google-calendar.min.js"></script>
    <script src="common/nextAgenda.js"></script>
    </body>
</html>