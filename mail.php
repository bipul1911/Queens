<?php

$name=$_REQUEST['name'];

$mail=$_REQUEST['mail'];

$mobile=$_REQUEST['mobile'];

$message=$_REQUEST['message'];



//echo $txtemail;

//echo $txtname;

//die;



$to = "bipul.1911@gmail.com";

$subject = "user feedback";

$message ="

<html>

<head>

<title>User Message</title>

</head>

<body>

<table width='100%' cellpadding='3' cellspacing='0px' bordercolor='#CCCCCC'>



	<tr><td>Name :</td><td>'".$name."'</td></tr>

	<tr><td>Mail :</td><td>'".$mail."'</td></tr>

	<tr><td>Mobile :</td><td>'".$mobile."'</td></tr>

	<tr><td>Message :</td><td>'".$message."'</td></tr>
	



</table>

</body>

</html>";



// Always set content-type when sending HTML email

$headers = "MIME-Version: 1.0" . "\r\n";

$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";



// More headers

$headers .= 'From:bipul.1911@gmail.com'. "\r\n";

$headers .= 'Cc:bipul.1911@gmail.com'. "\r\n";



if(mail($to,$subject,$message,$headers))

{

	echo "<script>alert('Mail Sent Successfully.')</script>";

}

else

{

	echo "<script>alert('Mail Not Sent')</script>";	

}



echo '<script>window.location.href="contact.html";</script>';



?>

