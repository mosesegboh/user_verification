<?php

require_once 'vendor/autoload.php';
require_once 'config/constants.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername(EMAIL)
  ->setPassword(PASSWORD);

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);




function sendVerificationEmail($userEmail, $token){
	global $mailer;
				$body = 
				'<!DOCTYPE html>
					<html>
					<head>
					<title>Verify Your Email</title>
					</head>
					<body>
					<div class = "wrapper">
					<p>
						Thank you for signing up on our website.
						Please click on the link to veirify your
						email: 
					</p>
					<a href="http://localhost/user_verification/index.php?token=' . $token . '">Verify Here!</a>
					</div>
					</body>
					</html>';
					$subject= 'Email Verification';
	// Create a message
		$message = (new Swift_Message('Email Verification'))
	  ->setFrom(EMAIL)
	  ->setTo($userEmail)
	  ->setBody($body,'text/html');



	  // Send the message
$result = $mailer->send($message);

}

function sendPasswordResetLink($userEmail,$token){
global $mailer;
				$body = 
				'<!DOCTYPE html>
					<html>
					<head>
					<title>Verify Your Email</title>
					</head>
					<body>
					<div class = "wrapper">
					<p>
						Hello,
						Kindly click on the link below to reset your password: 
					</p>
					<a href="http://localhost/user_verification/index.php?password-token=' . $token . '">Reset your password</a>
					</div>
					</body>
					</html>';
					$subject= 'Email Verification';
	// Create a message
		$message = (new Swift_Message('Reset your password'))
	  ->setFrom(EMAIL)
	  ->setTo($userEmail)
	  ->setBody($body,'text/html');



	  // Send the message
$result = $mailer->send($message);


}

