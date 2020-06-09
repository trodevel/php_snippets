<?php

// $Revision: 13215 $ $Date:: 2020-06-09 #$ $Author: serge $

namespace utils\hex_codec;

    function decode( $hex )
    {
        return pack('H*', $hex);
    }

    function encode( $str )
    {
        $inter =  unpack('H*', $str);
        return array_shift( $inter );
    }

function has_non_ascii( $str )
{
    for( $i = 0; $i < strlen( $str ); $i++ )
    {
        $c = $str[$i];

        $code = ord( $c );

        if( $code < 33 || $code > 126 || $c == '=' || $c == '&' )
        {
            return true;
        }
    }

    return false;
}

?>
