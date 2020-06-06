<!-- 
    if (isset($_post['submit'])) {
        $name = $_post['name'];
        $subject = $_post['mail'];
        $mailfrom = $_post['name'];
        $message = $_post['message'];

       $mailTo = "aliwaris99pk@gmail.com";
       $headers = "from: ".$mailfrom;
       $txt = "you have received an e-mail from ".$name."./n/n".$message;

       mail($mailTo, $subject, $txt, $headers);
       header("location: index.php?mailsend");
       



    mail()

     -->

     From Computer Guide to Everyone:  11:04 AM
<?php

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;



require 'src/Exception.php';

require 'src/PHPMailer.php';

require 'src/SMTP.php';



$smtpUsername = "Aliwaris99pk@gmail.com";

$smtpPassword = "022aliwaris275";



$emailTo = "ulhaqwahaj@gmail.com";

$emailToName = "Aliweb";





$emailFrom = $_REQUEST['email'];

$emailFromName = $_REQUEST['name'];



$subject = $_REQUEST['subject'];

$msg = $_REQUEST['message'];



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

