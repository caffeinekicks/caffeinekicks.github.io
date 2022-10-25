<?php
// Get data from form 
$name = $_POST['email'];
$email= $_POST['subject'];
$message= $_POST['body'];
 
$to = "anand.bit10@gmail.com";
$subject = "This is the subject line";
 
// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message
$txt ="Name = ". $name . "\r\n  Email = "
    . $email . "\r\n Message =" . $message;
 
$headers = "From: noreply@demosite.com" . "\r\n" .
            "CC: somebodyelse@example.com";

    mail($to, $subject, $txt, $headers);

 
// Redirect to
header("Location:index.html");
?>
