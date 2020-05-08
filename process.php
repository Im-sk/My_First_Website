<?php

   if( isset($_POST['submit']) ){

	   
	  $subject = $_POST['subject'];
	    echo $subject;
	   
	   
//	   $to = "singhsaurav645@gmail.com";
//       $subject = $_POST['subject'];
//	   $email =  $_POST['email'];
//	   $txt = $_POST['message'];
//	   $header = "From : " .$email . "\r\n" .
//	   
//	   mail($to, $subject, $message, $header);
//	   
//	   header("Location :  contact.html");
	  
$to = "singhsaurav645@gmail.com";
$subject = "subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);

   }
  






?>

	
	
	
