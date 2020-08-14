<?php
$to='info@massbunk.in'; //change to ur mail address
$subject=$_POST['subject'];
$message = "Dear Sukkubhai,<br>  ".$_POST['msg'];
$headers = 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
#$headers .= "Bcc: official@massbunk.in \r\n";
$headers .= "From: ".$_POST['emailId']."\r\n";
$headers .= "Reply-To: ".$_POST['emailId']."\r\n"; 
$headers .= "X-Mailer: PHP/".phpversion(); 
$response = mail($to, $subject, $message, $headers);

$clientTo = $_POST['emailId'];
$clientSubject = "Thank you for your interaction";
$clientMessage = '<div>
<img src="https://product.massbunk.in/sukkubhai/img/successMsg.png" style="position:relative;left:25%">
</div>';    

$clientHeaders .= "From: info@massbunk.in \r\n";
$clientHeaders .= "Reply-To: info@massbunk.in \r\n"; 
$clientHeaders .= "X-Mailer: PHP/".phpversion(); 
$response = mail($clientTo, $clientSubject, $clientMessage, $clientHeaders);

if(!$response)
    return false;
else
    return true;
?>