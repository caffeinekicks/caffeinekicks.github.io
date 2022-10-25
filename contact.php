<?php
// Get data from form 
$name = $_POST['subject'];
$email= $_POST['email'];
$message= $_POST['body'];
 
$to = "anand.bit10@gmail.com";
$subject1 = "This is the subject line";
 
// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message
$txt ="Name = ". $name . "\r\n  Email = "
    . $email . "\r\n Message =" . $message;
 
$headers = "From: noreply@demosite.com" . "\r\n" .
            "CC: somebodyelse@example.com";

    mail($to, $subject1, $txt, $headers);

 
// Redirect to
header("Location:index.html");
?>
