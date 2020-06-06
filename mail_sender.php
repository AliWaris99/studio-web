
<?php

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;



require 'src/Exception.php';

require 'src/PHPMailer.php';

require 'src/SMTP.php';
//main area
// edit info 
// smtp config
$smtpUsername = "smtp mail";

$smtpPassword = "pass";
// smtp end config



// to whom
$emailTo = "kis ko dena ha";

$emailToName = "name kia ho";

//end main area

// edit info 


$emailFrom = $_REQUEST['email'];

$emailFromName = $_REQUEST['name'];



$subject = $_REQUEST['subject'];

$msg = $_REQUEST['message'];



$mail = new PHPMailer;

$mail->isSMTP(); 

$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages


// edit info 

// host smtp
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
// host smtp



$mail->Port = 587; // TLS only

$mail->SMTPSecure = 'tls'; // ssl is depracated
// edit end info 
$mail->SMTPAuth = true;

$mail->Username = $smtpUsername;

$mail->Password = $smtpPassword;

$mail->setFrom($emailFrom, $emailFromName.

"-".$emailFrom);

$mail->addAddress($emailTo, $emailToName);

$mail->Subject = $subject;

$mail->msgHTML($msg); //$mail->msg


