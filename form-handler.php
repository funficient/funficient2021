<?php

    $name = $_POST['name'];
    $sender_email = $_POST['email'];
    $message = $_POST['message'];

    $from_email = 'kate.funficient@gmail.com';
    $email_subject = "New form submission";
    $email_body = "Sender name: $name.\n".
                  "Sender email: $sender_email.\n".
                  "Sender message: $message.\n";

    $to = "kate.funficient@gmail.com";
    
    $headers = "From: $from_email \r\n";

    $headers .= "Reply to: $sender_email \r\n";

    mail($to, $email_subject, $email_body,$headers);

    header("Location: index.html");
?>