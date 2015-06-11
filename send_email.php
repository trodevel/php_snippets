<?php

// $Revision: 1835 $ $Date:: 2015-06-11 #$ $Author: serge $

require 'PHPMailer/PHPMailerAutoload.php';

function send_email( $host, $is_auth, $username, $pwd, $sec_type, $from, $from_name, $to, $to_name, $subject, $body, & $error )
{
    $mail = new PHPMailer;

    $mail->isSMTP();                // Set mailer to use SMTP
    $mail->Host = $host;            // Specify main and backup SMTP servers
    $mail->SMTPAuth = $is_auth;     // Enable SMTP authentication
    $mail->Username = $username;    // SMTP username
    $mail->Password = $pwd;         // SMTP password
    $mail->SMTPSecure = $sec_type;  // Enable encryption, 'ssl' also accepted
    //$mail->SMTPDebug = true;

    $mail->From = $from;
    $mail->FromName = $from_name;
    $mail->addAddress( $to, $to_name );             // Add a recipient
    //$mail->addAddress('ellen@example.com');       // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    //$mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = $subject;
    $mail->Body    = $body;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if( !$mail->send() )
    {
        $error = $mail->ErrorInfo;
        return false;
    }

    return true;
}
