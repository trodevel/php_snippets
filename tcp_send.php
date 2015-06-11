<?php
    // $Revision: 1829 $ $Date:: 2015-06-10 #$ $Author: serge $

    function submit_to_fp( $fp, $command )
    {
        $res = "";

        fwrite( $fp, $command );

        while ( !feof( $fp ) )
        {
            $res .= fgets( $fp, 4096 );
        }

        return $res;
    }

    function tcp_send( $host, $port, $msg, & $res, & $error_msg )
    {
        $error_msg = "";
        $res = "";

        $fp = fsockopen( $host, $port, $errno, $errstr );
        if( !$fp )
        {
            $error_msg = "$errno - $errstr";
            return false;
        }
        else
        {
           $res = submit_to_fp( $fp, $msg );
           fclose( $fp );
        }

        return true;
    }

?>
