<?php

// $Revision: 1830 $ $Date:: 2015-06-10 #$ $Author: serge $

function get_client_ip_simple()
{
    $ipaddress = '';
    if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

?>