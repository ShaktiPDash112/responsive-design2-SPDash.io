<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New form submission';

$email_boby = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Subject: $subject.\n".
                "User Meassage: $message.\n";

$to = 'dashshakti1@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_boby,$headers);

header("Location: contact.html");
?>



