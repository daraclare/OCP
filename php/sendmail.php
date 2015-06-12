<?php
$send_to = "your_email_email_address_here";  /* Your email address here */
$subject = "Email from your site"; /* Subject of message here */


$error_open='<div class="alert-warning">';
$error_close='</div>';
							
function ABdevFW_email_validation($email){
	$regex = '/([a-z0-9_.-]+)'.'@'.'([a-z0-9.-]+){2,255}'.'.'.'([a-z]+){2,10}/i';
	if($email == '') 		
		return false;
	else
		$eregi = preg_replace($regex, '', $email);
	return empty($eregi) ? true : false;
}

$error = array();


if($_POST['contact-message']=='')
	$error[] = 'contact-message';
if($_POST['contact-name']=='')
	$error[] = 'contact-name';
if($_POST['contact-web']=='')
	$error[] = 'contact-web';
if(!ABdevFW_email_validation($_POST['contact-email']))
	$error[] = 'contact-email';

$error = implode($error,',');

if ($error != ''){
	echo $error;
}
else {
	// everything ok - send mail
	$name = htmlentities($_POST['contact-name']);
	$web = htmlentities($_POST['contact-web']);
	$message = "Name: $name\nWeb: $web\nEmail: ".$_POST['contact-email']."\n"."Sent you a message: \n".htmlentities($_POST['contact-message']);
	mail($send_to, $subject, $message);

	echo 'OK';
}
