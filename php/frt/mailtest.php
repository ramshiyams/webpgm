<?php
$to="ramshiya2020@gmail.com";
$subject="test mail";
$message="hello,this is test email from php";
$headers="from:shiyaramshi@gmail.com";
if(mail($to,$subject,$message,$headers))
{
	echo"email sent successfully";
}else
{
	echo"failed to send email.";
}
?>