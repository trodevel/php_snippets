<?php

// $Revision: 13109 $ $Date:: 2020-05-21 #$ $Author: serge $

namespace utils\hex_codec;

    function encode( $hex )
    {
        return pack('H*', $hex);
    }

    function decode( $str )
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

        if( $code < 33 || $code > 126 || $code == '=' || $code == '$' )
        {
            return true;
        }
    }

    return false;
}

?>
