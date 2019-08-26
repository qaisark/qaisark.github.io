<?php

if(isset($_GET['link']))
{
$doc="182.180.96.180//abs//dispatchPDF//".$_GET['link'].".pdf";
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->setFrom('store@abs.com', 'Store Keeper');
//$mail->addReplyTo('abs.ghanii@gmail.com', 'Design Office');
$mail->addAddress("mzsabir@gmail.com", "Zeeshan");
$mail->Subject = "Please Approve Dispatch List";
//$mail->msgHTML('Please approve following Dispatch Document <a href="#">Document</a>');
$mail->msgHTML("<h1><a >Approve</a> ---- OR ----  <a >Reject</a></h1>");
$mail->AltBody = "HTML is not Supported";
//$mail->addAttachment('images/phpmailer_mini.png');
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Dispatch List Send to Incharge(mzsabir@gmail.com) for approval. Please wait until you are confirmed.";
}
}
?>
<div><a href="http://182.180.96.180/abs/btd_index.php">GO Back</a></div>


