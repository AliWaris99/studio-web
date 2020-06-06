
<?php

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;



require 'src/Exception.php';

require 'src/PHPMailer.php';

require 'src/SMTP.php';
//main area

$smtpUsername = "smtp mail";

$smtpPassword = "pass";



$emailTo = "kis ko dena ha";

$emailToName = "name kia ho";

//end main area




$emailFrom = $_REQUEST['email'];






$mail = new PHPMailer;

$mail->isSMTP(); 

$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages

$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6

$mail->Port = 587; // TLS only

$mail->SMTPSecure = 'tls'; // ssl is depracated

$mail->SMTPAuth = true;

$mail->Username = $smtpUsername;

$mail->Password = $smtpPassword;

$mail->setFrom($emailFrom, $emailFromName.

"-".$emailFrom);

$mail->addAddress($emailTo, $emailToName);

$mail->Subject = $subject;

$mail->msgHTML($msg); //$mail->msg


