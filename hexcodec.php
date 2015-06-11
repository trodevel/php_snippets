<?php

// $Revision: 1829 $ $Date:: 2015-06-10 #$ $Author: serge $

    function hex2str( $hex )
    {
        return pack('H*', $hex);
    }

    function str2hex( $str )
    {
        return array_shift( unpack('H*', $str) );
    }

?>