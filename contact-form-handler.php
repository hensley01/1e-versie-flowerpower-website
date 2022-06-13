<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'hensleyhubert084@gmail.com';
$email_subject = "Nieuwe formulier verzonden";
$email_body = "naam gebruiker: $name.\n".
    "gebruikers email: $visitor_email.\n".
    "gebruikers bericht: $message.\n";

$to = "hhuber@roc-dev.com";

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email\r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.php");

?>