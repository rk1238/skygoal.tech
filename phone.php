<?php
include 'textlocal.class.php';

if(isset($_POST['submitophone']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

	$alldatatophone="name: ".$name.	"\r\nemail:".$email."\r\nsubject:".$subject."\r\nmessage:".$message;
	$alldatatophon=urlencode($alldatatophone);

	smsToTheUser($alldatatophone);
}





function smsToTheUser($alldatatophone)
{
	$numbers="919666733835,916301517016";
	$Textlocal = new Textlocal(false, false, 'STVxzw8oWsI-yki0sGygDut6IMluJEL0j9GcqICl97');
	$numbers = array($numbers);
	$sender = 'TXTLCL';
 	try
 	{
	$response = $Textlocal->sendSms($numbers, $alldatatophone, $sender);
	#setcookie('otp',$otp);
	echo 'sucessfullysentotptoyourmobile';
	}
	catch(Exception $e)
	{
		die('could not connect'.$e);
	}
}




?>