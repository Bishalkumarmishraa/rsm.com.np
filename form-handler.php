<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['phonenumber'];
$message = $_POST['message'];

$email_from = 'bishalmishra9000@gmail.com';

$email_phnumber = 'New Form Submission';

$email_body = "User Name: $name.\n".
            "User Email: $visitor_email.\n".
            "Phone Number: $phone_number.\n".
            "User Message: $message.\n";

$to = 'info@rsm.com.np';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_phone_number,$email_body,$headers);

header("Location: contact.html");
?>
