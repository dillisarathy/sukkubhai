<?php
$to='official@sukkubhaibiryani.com'; //change to ur mail address
$subject=$_POST['subject'];
$message = "Dear Sukkubhai,<br>  ".$_POST['msg'];
$message .= '<table><tr><td>Name</td><td>Email Id</td><td>Mobile Number</td></tr>
            <tr><td>'.$_POST['name'].'</td><td>'.$_POST['emailId'].'</td><td>'.$_POST['mobNum'].'</td></tr></table>';
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

$clientHeaders .= "From: Sukkubhai Biryani<official@sukkubhaibiryani.com> \r\n";
$clientHeaders .= "Reply-To: official@sukkubhaibiryani.com \r\n"; 
$clientHeaders .= "X-Mailer: PHP/".phpversion(); 
$response = mail($clientTo, $clientSubject, $clientMessage, $clientHeaders);

if(!$response)
    return false;
else
    return true;
?>