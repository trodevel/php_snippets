<?php

// $Revision: 12435 $ $Date:: 2019-12-07 #$ $Author: serge $

function https_post( $host, $port, $msg, & $res, & $error_msg )
{
    $error_msg = "";
    $res = "";

    $ch = curl_init();

    curl_setopt( $ch, CURLOPT_URL, $host);
    curl_setopt( $ch, CURLOPT_PORT , $port );
    curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false );
    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
    curl_setopt( $ch, CURLOPT_POST, 1 );
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $msg );

    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    
    $res = curl_exec( $ch );

    if( curl_error( $ch ) )
    {
        $error_msg = curl_error( $ch );
        
        curl_close( $ch );        
        
        return false;
    }

    curl_close( $ch );

    return true;
}

?>

