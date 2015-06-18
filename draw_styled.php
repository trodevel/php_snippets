<?php

// $Revision: 1894 $ $Date:: 2015-06-18 #$ $Author: serge $

function get_styled_div( $str, $class=NULL, $style=NULL )
{
    $res = '<div';

    if( $class != NULL )
        $res = $res .' class="' . $class .'"';
    if( $style != NULL )
        $res = $res .' id="' . $style .'"';
    $res = $res . ">\n". $str . "\n</div>\n";

    return $res;
}

function get_styled_span( $str, $style )
{
    return
    '<span class="' . $style . '">'. $str . '</span>';
}

function get_div_vertical( $container_name, $element_name_mask, $el1=NULL, $el2=NULL, $el3=NULL, $el4=NULL, $el5=NULL, $el6=NULL )
{
    $body = "";

    if( $el1 != NULL )
        $body = $body . get_styled_div( $el1, NULL, $element_name_mask . '1' );

    if( $el2 != NULL )
        $body = $body . get_styled_div( $el2, NULL, $element_name_mask . '2' );

    if( $el3 != NULL )
        $body = $body . get_styled_div( $el3, NULL, $element_name_mask . '3' );

    if( $el4 != NULL )
        $body = $body . get_styled_div( $el4, NULL, $element_name_mask . '4' );

    if( $el5 != NULL )
        $body = $body . get_styled_div( $el5, NULL, $element_name_mask . '5' );

    if( $el6 != NULL )
        $body = $body . get_styled_div( $el6, NULL, $element_name_mask . '6' );

    $res = get_styled_div( $body, NULL, $container_name );

    return $res;
}


function draw_styled_div( $str, $style )
{
    echo get_styled_div( $str, NULL, $style );
}

function draw_styled_span( $str, $style )
{
    echo get_styled_span( $str, $style );
}


?>

