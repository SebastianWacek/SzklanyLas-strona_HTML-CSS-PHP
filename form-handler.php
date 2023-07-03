<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$email_from = 'info@szklanylas.pl';
$email_subject = 'Nowa wiadomość od użytkownika';
$email_body = "Zapytanie od: $name\n".
                "Email: $visitor_email \n".
                "Nr telefonu: $phone\n".
                "Treść: $message\n";


$to = 'sebwacek@gmail.com';

$headers="From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>