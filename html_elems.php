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

// $Revision: 2849 $ $Date:: 2015-11-25 #$ $Author: serge $

function __get_html_opt_value( $key, $value=NULL )
{
    $res = '';

    if( $value )
        $res = $res . " $key=\"$value\"";

    return $res;
}

function get_html_standards( $name=NULL, $class=NULL, $id=NULL )
{
    $res = __get_html_opt_value( 'name', $name ) .
        __get_html_opt_value( 'class', $class ) .
        __get_html_opt_value( 'id', $id );

    return $res;
}

function get_html_value( $value=NULL )
{
    $res = __get_html_opt_value( 'value', $value );

    return $res;
}

function get_div( $class, $id, $str )
{
    return '<div' . get_html_standards( NULL, $class, $id ) . ">\n". $str . "\n</div>\n";
}

function get_html_label( $str, $name=NULL, $class=NULL, $id=NULL, $for_elem=NULL )
{
    return '<label' . get_html_standards( $name, $class, $id ) . __get_html_opt_value( 'for', $for_elem ) . '>' .$str . '</label>' . "\n";
}

function get_html_input_text( $name=NULL, $class=NULL, $id=NULL, $value=NULL, $placeholder=NULL )
{
    return '<input type="text"' . get_html_standards( $name, $class, $id ) . get_html_value( $value ) .
        __get_html_opt_value( 'placeholder', $placeholder ) . '/>' . "\n";
}

function get_html_input_submit( $name=NULL, $class=NULL, $id=NULL, $value=NULL )
{
    return '<input type="submit"' . get_html_standards( $name, $class, $id ) . get_html_value( $value ) . '/>' . "\n";
}

function get_html_input_radio( $name=NULL, $class=NULL, $id=NULL, $value=NULL, $is_checked=false, $is_enabled=true )
{
    return '<input type="radio"' . get_html_standards( $name, $class, $id ) . get_html_value( $value ) . 
        ( $is_checked ?  ' checked="checked"' : '' ) .
        ( $is_enabled ?  '' : ' disabled="disabled"' ) .
        '/>' . "\n";
}

function get_html_form( $name, $class, $id, $method, $action=NULL, $body=NULL )
{
    return '<form' . get_html_standards( $name, $class, $id ) . ' method="' . $method . '" action="' . $action . '">' . "\n" . $body . '</form>' . "\n";
}

function get_html_table_th( $body )
{
    $res = '<th>' . $body . '</th>';

    return $res;
}

function get_html_table_td( $body )
{
    $res = '<td>' . $body . '</td>';

    return $res;
}

function get_html_table_tr( $body )
{
    $res = '<tr>' . $body . '</tr>';

    return $res;
}

function get_html_table_elems( $values, $is_header = true )
{
    $res = '';

    foreach( $values as $x )
    {
        if( $is_header )
            $res = $res . get_html_table_th( $x );
        else
            $res = $res . get_html_table_td( $x );
    }

    return $res;
}

function get_html_table_header_elems( $values )
{
    return get_html_table_elems( $values, true );
}

function get_html_table_data_elems( $values )
{
    return get_html_table_elems( $values, false );
}

function get_html_table_row_header( $values )
{
    return get_html_table_tr( get_html_table_header_elems( $values ) );
}

function get_html_table_row_data( $values )
{
    return get_html_table_tr( get_html_table_data_elems( $values ) );
}

function get_html_table( $name, $class, $id, $options=NULL, $body=NULL )
{
    return '<table' . get_html_standards( $name, $class, $id ) . ( $options ?  ' $options ' : '' ) . '>' . "\n" . ( $body ? " $body" : '' ) . '</table>' . "\n";
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

