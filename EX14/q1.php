<?php 

// write a program for sending and reciving plain text message (e-mail)


$to = "suyogschavan03@gmail.com";
$subject = "Email by PHP";

$message = "This mail was sent through PHP ";

$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Suyog Chavan <suyogschavan03@gmail.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

$retval = mail($to, $subject, $message, $headers);

if ($retval == true){
    echo "Email sent successfully !!!";
}else {
    echo "email not sent";
}


?>