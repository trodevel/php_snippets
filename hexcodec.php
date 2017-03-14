<?php

// $Revision: 5995 $ $Date:: 2017-03-13 #$ $Author: serge $

    function hex2str( $hex )
    {
        return pack('H*', $hex);
    }

    function str2hex( $str )
    {
        $inter =  unpack('H*', $str);
        return array_shift( $inter );
    }

?>
