<?php	
	if(empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['reputation']) && strlen($_POST['reputation']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0)
	{
		return false;
	}
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$reputation = $_POST['reputation'];
	$message = $_POST['message'];
	
	$to = 'c.i.s.carpentras@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message provenant du site La Panthère";
	$email_body = "Vous avez reçu un nouveau message. \n\n".
				  "Nom: $name \nEmail: $email \nReputation: $reputation \nMessage: $message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@agencelapanthere.com\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>