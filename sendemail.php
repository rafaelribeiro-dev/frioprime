<?php
    $name       = @trim(stripslashes($_POST['name'])); 
    $from       = @trim(stripslashes($_POST['email'])); 
    $subject    = @trim(stripslashes($_POST['subject'])); 
    $message    = @trim(stripslashes($_POST['message'])); 
    $to   		= 'teste@frioprime.com.br';//replace with your email

    $headers   = array();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "From: {$name} <{$from}>\r\n";
    $headers .= "Reply-To: <{$from}>\r\n";
    $headers .= "Subject: {$subject}\r\n";
    $headers .= "X-Mailer: PHP/".phpversion()."\r\n";

    mail($to, $subject, $message, $headers);

    die;
?> 