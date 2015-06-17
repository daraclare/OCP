<?php

	if($_POST)
	{
	   $email = $_POST['email'];
	   $youremail = "test@test.com"; /** change email address to your own **/
	   $subject = "New Subscriber"; /** enter email subject **/
	   $bodytext = "You have a new subcriber: " . $email; /** enter email body text **/
	   mail($youremail, $subject, $bodytext, "From:" . $email);
	}
	
?>