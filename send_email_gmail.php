<?php

// $Revision: 1834 $ $Date:: 2015-06-11 #$ $Author: serge $

require 'send_email.php';

function send_email_gmail( $from, $from_name, $to, $subject, $body, $pwd, & $error )
{
    return send_email(
        'tls://smtp.gmail.com:587', true,
        $from, $pwd, 'tls', $from, $from_name, $to, $to, $subject, $body, $error );
}
