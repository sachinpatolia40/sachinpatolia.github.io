<?php

$name = $_POST['name'];
$email = $_POST['fromEmail'];
$message = $_POST['message'];
// recipient email address
$to = "sachinpatolia40@gmail.com";

// email subject
$subject = "Portfolio Site Email";

// email message
$message = $Message;

// sender email address
$from = $email;

// headers
$headers = "From:" . $from;

// send email
if(mail($to,$subject,$message,$headers)) {
    echo "Email sent successfully.";
} else {
    echo "Email sending failed.";
}
?>
