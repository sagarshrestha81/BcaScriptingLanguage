<?php
ini_set('SMTP', 'smtp.zoho.com');
ini_set('smtp_port', 465);
ini_set('sendmail_from', 'tempsagar284@gmail.com');
$to = 'sagarcrestha81@gmail.com';
$subject = 'Test for title';
$message = 'Message to send';
$headers = 'From: tempsagar284@gmail.com\r\nReply-To: sagarcrestha81@gmail.com';
$mail_sent = mail($to, $subject, $message, $headers);


mail($to, $subject, $message, $headers);

echo $mail_sent ? "Mail sent" : "Mail failed";