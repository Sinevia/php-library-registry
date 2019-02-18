//============================= START OF CLASS ==============================//
// CLASS: Registry                                                           //
//===========================================================================//
/**
 * The Registry class provides a safe implementation of global registry.
 * This acts like an alternative of the the global variable $GLOBALS, which
 * references all variables available in global scope, but can be already
 * being used by anothe library.
 * <code>
 * \Sinevia\Registry::set('admin_email','admin@domain.com');
 * 
 * if (\Sinevia\Registry::has('admin_email')) {
 *     echo \Sinevia\Registry::get('admin_email');
 * }
 * 
 * \Sinevia\Registry::remove('admin_email');
 * </code>
 */
class Registry {

    private static $registry = array();

    //private final function __construct(){}

    public static function set($key, $value) {
        self::$registry[$key] = $value;
    }

    public static function get($key, $default = null) {
        if (self::has($key)) {
            return self::$registry[$key];
        }
        return $default;
    }

    public static function has($key) {
        return (isset(self::$registry[$key])) ? true : false;
    }

    public static function remove($key) {
        if (self::has($key) == true) {
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
