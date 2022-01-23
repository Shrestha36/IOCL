<?php
 $visitors_email = $_POST['email'];
$phone_number = $_POST['phone'];
$amount = $_POST['amount'];

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                      "User Message: $message.\n";
$to = "shresthagoswami36@gmail.com";
$header = "From: $email_form \r\n";
$header = "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");
?>
