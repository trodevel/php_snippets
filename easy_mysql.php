<?php

// $Revision: 2062 $ $Date:: 2015-07-03 #$ $Author: serge $

function easy_mysql_connect__( $server, $username, $password, $database, & $connection, & $error )
{
    $connection = @mysql_connect( $server, $username, $password );

    if( !$connection )
    {
        $error = "cannot connect to mysql";
        return false;
    }

    $db = mysql_select_db( $database, $connection );

    if( !$db )
    {
        mysql_close( $connection );
        $error = "cannot open database '$database'";
        return false;
    }

    return true;
}

function easy_mysql_query( $server, $username, $password, $database, $query, & $error )
{
    $connection = null;

    if( !easy_mysql_connect__( $server, $username, $password, $database, $connection, $error ) )
    {
        return false;
    }

    $res    = mysql_query( $query, $connection );

    mysql_close( $connection );

    if( $res )
        return true;

    return false;
}
function easy_mysql_fetch_assoc( $server, $username, $password, $database, $query, & $res, & $error )
{
    $connection = null;

    if( !easy_mysql_connect__( $server, $username, $password, $database, $connection, $error ) )
    {
        return false;
    }

    $ses_sql    = mysql_query( $query, $connection );
    $res        = mysql_fetch_assoc( $ses_sql );

    mysql_close( $connection );

    return true;
}

function easy_mysql_num_rows( $server, $username, $password, $database, $query, & $res, & $error )
{
    $connection = null;

    if( !easy_mysql_connect__( $server, $username, $password, $database, $connection, $error ) )
    {
        return false;
    }

    $ses_sql    = mysql_query( $query, $connection );

    $res        = mysql_num_rows( $ses_sql );

    mysql_close( $connection );

    return true;
}

?>
