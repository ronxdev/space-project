<?php

	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'ronclive@gmail.com';

	$email_subject = "new form submission";

	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n".
					"User Message: $message.\n";

	$to = "freegeniussociety@gmail.com";

	$headers = "Form: $email_from \r\n";

	$headers .="Reply-To: $visitor_email \r\n";

	mail($to, $email_subject, $email_body, $headers);

	header("Location: index.html");


?> 