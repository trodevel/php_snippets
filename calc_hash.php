<?php

/*

Simple wrapper to calculate blowfish hashes.

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

// $Revision: 2057 $ $Date:: 2015-07-03 #$ $Author: serge $

// based on: http://security.stackexchange.com/questions/17111/php-crypt-or-phpass-for-storing-passwords

require 'phpass/PasswordHash.php';

function calc_hash( $password )
{
    $pwdHasher = new PasswordHash( 8, FALSE );

    // $hash is what you would store in your database
    $hash = $pwdHasher->HashPassword( $password );

    return $hash;
}

function is_hash_equal( $password, $hash )
{
    $pwdHasher = new PasswordHash( 8, FALSE );

    // $hash would be the $hashed stored in your database for this user
    $checked = $pwdHasher->CheckPassword( $password, $hash );

    if( $checked )
        return true;

    return false;
}

?>

