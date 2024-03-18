<?php
$receiving_email_address = 'info@torre-estevez.com';

$from_name = $_POST['name'];
$from_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$headers = "From: $from_name <$from_email>\r\n";
$headers .= "Reply-To: $from_email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

if(mail($receiving_email_address, $subject, $message, $headers)) {
  echo 'Message has been sent';
} else {
  echo 'Message could not be sent.';
}