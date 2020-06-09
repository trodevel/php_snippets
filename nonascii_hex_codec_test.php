<?php

/*

Test of Non-ASCII hex codec.

Copyright (C) 2017 Sergey Kolevatov

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

// $Revision: 13217 $ $Date:: 2020-06-09 #$ $Author: serge $

require 'nonascii_hex_codec.php';

function test( $str )
{
    $encoded = \utils\nonascii_hex_codec\encode( $str );
    $decoded = \utils\nonascii_hex_codec\decode( $encoded );
    return "$encoded, decoded '$decoded'";
}

echo "1: " . test( "привет" ) . "\n";
echo "2: " . test( "Müller" ) . "\n";
echo "3: " . test( "" ) . "\n";
echo "4: " . test( "Hello world" ) . "\n";
echo "5: " . test( "=" ) . "\n";
echo "6: " . test( "= " ) . "\n";

$s = "=D0=92=D1=81=D1=82=D1=80=D0=B5=D1=87=D0=B0=20=D1=81=20=D0=B4=D0=BE=D0=BA=D1=82=D0=BE=D1=80=D0=BE=D0=BC";
echo "7: " . \utils\nonascii_hex_codec\decode( $s ) . "\n";

echo "8: " . test( "& " ) . "\n";
echo "9: " . test( "&value=" ) . "\n";
?>

