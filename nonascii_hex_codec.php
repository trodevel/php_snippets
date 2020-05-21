<?php

// $Revision: 12435 $ $Date:: 2019-12-07 #$ $Author: serge $

namespace utils\nonascii_hex_codec;

require_once 'hexcodec.php';

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
            $res .= \hex2str( substr( $str, $i + 1, 2 ) );
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
            $res .= "=" . \str2hex( $c );
        }
        else
            $res .= $c;
    }

    return $res;
}

?>
