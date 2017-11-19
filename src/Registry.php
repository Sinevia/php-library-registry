<?php

// ========================================================================= //
// SINEVIA CONFIDENTIAL                                  http://sinevia.com  //
// ------------------------------------------------------------------------- //
// COPYRIGHT (c) 2008-2017 Sinevia Ltd                   All rights reserved //
// ------------------------------------------------------------------------- //
// LICENCE: All information contained herein is, and remains, property of    //
// Sinevia Ltd at all times.  Any intellectual and technical concepts        //
// are proprietary to Sinevia Ltd and may be covered by existing patents,    //
// patents in process, and are protected by trade secret or copyright law.   //
// Dissemination or reproduction of this information is strictly forbidden   //
// unless prior written permission is obtained from Sinevia Ltd per domain.  //
//===========================================================================//

namespace Sinevia;

//============================= START OF CLASS ==============================//
// CLASS: Registry                                                           //
//===========================================================================//
/**
 * The Registry class provides a safe implementation of global registry.
 * This acts like an alternative of the the global variable $GLOBALS, which
 * references all variables available in global scope, but can be already
 * being used by anothe library.
 * <code>
 * Registry::set('admin_email','admin@domain.com');
 * 
 * if (Registry::has('admin_email')) {
 *     echo Registry::get('admin_email');
 * }
 * 
 * Registry::remove('admin_email');
 * </code>
 */
class Registry {

    private static $registry = array();

    //private final function __construct(){}

    public static function set($key, $value) {
        self::$registry[$key] = $value;
    }

    public static function get($key) {
        if (isset(self::$registry[$key]) == true) {
            return self::$registry[$key];
        }
        throw new \RuntimeException('No entry exists for $key' . $key);
    }

    public static function has($key) {
        return (isset(self::$registry[$key])) ? true : false;
    }

    public static function remove($key) {
        if (isset(self::$registry[$key]) == true) {
            unset(self::$registry[$key]);
        }
    }

    public static function clear() {
        self::$registry = array();
    }

    public static function fromArray($array) {
        self::$registry = $array;
    }

    public static function mergeArray($array) {
        self::$registry = array_merge(self::$registry, $array);
    }

    public static function toArray() {
        return self::$registry;
    }

}

//===========================================================================//
// CLASS: Registry                                                           //
//============================== END OF CLASS ===============================//
