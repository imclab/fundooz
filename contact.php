<?php
	require_once 'Mail.php';
	$name = $_POST['nam'];
	$email = $_POST['email'];
	$message = $_POST['wazzup'];
	$to = "abhijeetgoel77@gmail.com";
	$subject = "Contact from Website";	
	echo $name." ".$email." ".$message;
	$headers = "From:" . $name;
	echo imap_mail($to,$subject,$message,$headers);
	
	echo "We have contact you shortly!!<br>";
	echo "<a href='.'><< Back</a>";
?>