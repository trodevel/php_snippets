<?php

// $Revision: 13107 $ $Date:: 2020-05-21 #$ $Author: serge $

    function hex2str( $hex )
    {
        return pack('H*', $hex);
    }

    function str2hex( $str )
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

        if( $code < 33 || $code > 126 )
        {
            return true;
        }
    }

    return false;
}

?>
