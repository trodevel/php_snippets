<?php

/*

Snippets to generate nested DIVs.

Copyright (C) 2015 Sergey Kolevatov

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.

*/

// $Revision: 2003 $ $Date:: 2015-06-28 #$ $Author: serge $

require 'html_elems.php';      // get_div()

function get_styled_div( $str, $class=NULL, $id=NULL )
{
    return get_div( $class, $id, $str );
}

function get_styled_span( $str, $style )
{
    return
    '<span class="' . $style . '">'. $str . '</span>';
}

function get_div_div_container( $class_outer, $id_outer, $class_inner, $id_inner, $el1=NULL, $el2=NULL, $el3=NULL, $el4=NULL, $el5=NULL, $el6=NULL, $el7=NULL, $el8=NULL )
{
    $body = "";

    if( $el1 != NULL )
        $body = $body . get_styled_div( $el1, $class_inner, $id_inner );

    if( $el2 != NULL )
        $body = $body . get_styled_div( $el2, $class_inner, $id_inner );

    if( $el3 != NULL )
        $body = $body . get_styled_div( $el3, $class_inner, $id_inner );

    if( $el4 != NULL )
        $body = $body . get_styled_div( $el4, $class_inner, $id_inner );

    if( $el5 != NULL )
        $body = $body . get_styled_div( $el5, $class_inner, $id_inner );

    if( $el6 != NULL )
        $body = $body . get_styled_div( $el6, $class_inner, $id_inner );

    if( $el7 != NULL )
        $body = $body . get_styled_div( $el7, $class_inner, $id_inner );

    if( $el8 != NULL )
        $body = $body . get_styled_div( $el8, $class_inner, $id_inner );

    $res = get_styled_div( $body, $class_outer, $id_outer );

    return $res;
}

function get_div_vertical( $id_outer, $id_inner1, $id_inner2, $el1=NULL, $el2=NULL, $el3=NULL, $el4=NULL, $el5=NULL, $el6=NULL )
{
    $body = "";

    if( $el1 != NULL )
        $body = $body . get_styled_div( $el1, NULL, $id_inner1 );

    if( $el2 != NULL )
        $body = $body . get_styled_div( $el2, NULL, $id_inner2 );

    if( $el3 != NULL )
        $body = $body . get_styled_div( $el3, NULL, $id_inner2 );

    if( $el4 != NULL )
        $body = $body . get_styled_div( $el4, NULL, $id_inner2 );

    if( $el5 != NULL )
        $body = $body . get_styled_div( $el5, NULL, $id_inner2 );

    if( $el6 != NULL )
        $body = $body . get_styled_div( $el6, NULL, $id_inner2 );

    $res = get_styled_div( $body, NULL, $id_outer );

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

