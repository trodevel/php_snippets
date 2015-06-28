<?php

/*

Snippets to generate standard HTML elements.

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

// $Revision: 2004 $ $Date:: 2015-06-28 #$ $Author: serge $

function get_html_standards( $name=NULL, $class=NULL, $id=NULL )
{
    $res = '';

    if( $name )
        $res = $res . " name=\"$name\"";

    if( $class )
        $res = $res . " class=\"$class\"";

    if( $id )
        $res = $res . " id=\"$id\"";

    return $res;
}

function get_div( $class, $id, $str )
{
    return '<div' . get_html_standards( NULL, $class, $id ) . ">\n". $str . "\n</div>\n";
}

function get_html_label( $str, $name=NULL, $class=NULL, $id=NULL, $for_elem=NULL )
{
    return '<label' . get_html_standards( $name, $class, $id ) . ( $for_elem ? " for=\"$for_elem\"" : "" ) . '>' .$str . '</label>' . "\n";
}

function get_html_input_text( $name=NULL, $class=NULL, $id=NULL, $value=NULL, $placeholder=NULL )
{
    return '<input type="text"' . get_html_standards( $name, $class, $id ) . ( $value ? " value=\"$value\"" : "" ) .
        ( $placeholder ? " placeholder=\"$placeholder\"" : "" ) . '/>' . "\n";
}

function get_html_input_submit( $name=NULL, $class=NULL, $id=NULL, $value=NULL )
{
    return '<input type="submit"' . get_html_standards( $name, $class, $id ) . ( $value ? " value=\"$value\"" : "" ) . '/>' . "\n";
}

function get_html_form( $name, $class, $id, $method, $action=NULL, $body=NULL )
{
    return '<form' . get_html_standards( $name, $class, $id ) . ' method="' . $method . '" action="' . $action . '">' . "\n" . $body . '</form>' . "\n";
}

function get_html_select( $name, $values, $selected )
{
    $res = '<select name="' . $name . '">';

    $i = 0;

    foreach( $values as $x )
    {
        $selected_text = ($i == $selected) ? ' selected="selected"' : '';

        $res = $res . '<option value="'. $x . '"' . $selected_text . '>'. $x .'</option>';

        $i++;
    }

    $res = $res . '</select>';

    return $res;
}


?>

