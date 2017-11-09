<?php
include("mailgo.php");
mailgo("defectiveseth@gmail.com","Test Message","Test Subject");

include("class.email.php");

$mail=new Mail("ytd.sethcoder.com","defectiveseth@gmail.com","Test Subject","Test Message");
$mail->MailSend();

