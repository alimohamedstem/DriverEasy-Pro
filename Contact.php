<?php
$name = $_POST['name'];
$phone_number = $_POST['phone'];
$visitor_email = $_POST['email'];
$message = $_POST['Message'];

$email_from = 'web.message@stemexplorer.org';

$email_subject = 'Message From Contact Form';

$email_body = "User Name: $name.\n".
              "User number: $phone_number.\n".
              "User Email: $visitor_email.\n".
              "User Message: $message.\n".\;

$to = 'ali.kotb2004@gmail.com';

$headers = "From: $email_from \r\n";
$headers . = "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body,  $headers);

header("Location: Contact.html");
?>