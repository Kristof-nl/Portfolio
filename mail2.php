<?php
    $name = $_Post['name'];
    $visitor_email = $_Post['email'];
    $subject = $_Post['subject'];
    $message = $_Post['message'];

    $email_from = "hermaszewski.nl"

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "Subject: $subject.\n".
                    "User message: $message.\n";

    $to = "hermaszewski.krzysztof@gmail.com";

    $headers = "From $email_from r\n";

    $headers .= "Replay-To $visitor_email r\n";

    mail($to, $email_subject,$email_body,$headers);

    header("Location: index.html");