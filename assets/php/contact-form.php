<?php

	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$message = trim($_POST['message']);
	
	$emailTo = 'bartoszlis87@gmail.com'; //Put your own email address here
	if (empty($subject)) {
	    $subject = 'Wiadomość ze strony www.bartoszlis.pl';
	}
	$body = "Name: $name \n\nEmail: $email \n\nMessage:\n$message";
	$headers = 'From: '.$email."\r\n" .
        'Reply-To: '.$email."\r\n";

	mail($emailTo, $subject, $body, $headers);
	$emailSent = true;
	echo ('SEND');
	
?>
