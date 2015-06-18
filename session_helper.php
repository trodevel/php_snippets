<?php

// $Revision: 1866 $ $Date:: 2015-06-16 #$ $Author: serge $

function init_var_from_session( $key, & $val )
{
    if( isset( $_SESSION[ $key ] ) )
    {
        $val = $_SESSION[ $key ];

        return true;
    }

    return false;
}

function is_var_in_session( $key )
{
    if( isset( $_SESSION[ $key ] ) )
        return true;

    return false;
}

function store_var_in_session( $key, $val )
{
    $_SESSION[ $key ]   = $val;
}

?>
