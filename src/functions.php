<?php

namespace ptahdunbar\Utils;

/**
 * Determines if SSL is used.
 *
 * @wordpress 4.6.0
 *
 * @return bool True if SSL, otherwise false.
 */
function is_ssl()
{
    if ( isset( $_SERVER['HTTPS'] ) ) {

        if ( 'on' == strtolower( $_SERVER['HTTPS'] ) ) {
            return true;
        }

        if ( '1' == $_SERVER['HTTPS'] ) {
            return true;
        }

    } elseif ( isset($_SERVER['SERVER_PORT'] ) && ( '443' == $_SERVER['SERVER_PORT'] ) ) {
        return true;
    }

    return false;
}