<?php

/*

Converts Epoch to date/time string.

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

// $Revision: 2745 $ $Date:: 2015-10-23 #$ $Author: serge $

function epoch_to_date( $epoch )
{
    $dt = new DateTime( "@$epoch" );
    return $dt->format( 'Y-m-d' );
}

function epoch_to_time( $epoch )
{
    $dt = new DateTime( "@$epoch" );
    return $dt->format( 'H:i:s' );
}

function epoch_to_date_time( $epoch )
{
    $dt = new DateTime( "@$epoch" );
    return $dt->format( 'Y-m-d H:i:s' );
}

?>

