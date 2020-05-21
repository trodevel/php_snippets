<?php

// $Revision: 13112 $ $Date:: 2020-05-21 #$ $Author: serge $

namespace utils\nonascii_hex_codec;

require_once 'hex_codec.php';

function decode( & $str )
{
    $res = "";

    $size = strlen( $str );

    //echo "dec: size = $size\n"; // DEBUG

    if( $size == 1 )
    {
        // empty string
        if( $str == "=" )
            return $res;
    }

    for( $i = 0; $i < $size; $i++ )
    {
        $c = $str[$i];

        //echo "c=$c i=$i\n"; // DEBUG

        if( $c == '=' &&  ( $i + 3 <= $size ) )
        {
            $res .= \utils\hex_codec\decode( substr( $str, $i + 1, 2 ) );
            $i += 2;
        }
        else
            $res .= $c;
    }

    return $res;
}


function encode( & $str )
{
    if( $str === '' )
    {
        // empty string
        return "=";
    }

    $res = "";

    for( $i = 0; $i < strlen( $str ); $i++ )
    {
        $c = $str[$i];

        $code = ord( $c );

        if( $code < 33 || $code > 126 || $c == '=' )
        {
            $res .= "=" . \utils\hex_codec\encode( $c );
        }
        else
            $res .= $c;
    }

    return $res;
}

?>
