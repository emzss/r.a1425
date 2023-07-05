<?php
$name = $_POST['name']; 
$visitor = $_email['email']; 
$subject = $_POST['subject']; 
$message = $_POST['message']; 

$_email_from = 'info@yourwebsite.com';

$_email_subject = 'New form submission';

$_email_body = "User Name: $name.\n ".
               "User Email: $visitor_email.\n".
               "Subject: $subject.\n".
               "User Message: $visitor.\n";

$to = 'delgadomarygold28@gmail.com';

$headers = "form: $_email_form \r\n";

$header .= "Reply-To: $visitor_email \r\n";


mail($to,$_email_subject,$_email_body,$headers);

header("Location: contact.html");
?>