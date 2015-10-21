<?php

/*

Simple wrapper to convert CSV string into array.

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

// $Revision: 2735 $ $Date:: 2015-10-20 #$ $Author: serge $

if( !defined( 'CONVERT_CSV_TO_ARRAY' ) )
{

define( 'CONVERT_CSV_TO_ARRAY', 1 );

require_once( 'parsecsv-for-php/parsecsv.lib.php' );

function convert_csv_to_array( $str, $heading = false, $delimiter = ";" )
{
    $csv = new parseCSV();

    $csv->delimiter = $delimiter;
    $csv->heading   = $heading;

    $csv->parse( $str );

    return $csv->data;
}

}

?>
