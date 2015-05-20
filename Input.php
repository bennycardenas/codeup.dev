<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        
        if (isset($_REQUEST[$key]))
            {
                return true;
            }
                return false;
    }  
    

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    
    public static function get($key, $default = null)
    {
        if (isset($_REQUEST[$key]))
            {
                return ($_REQUEST[$key]);
            }

                return $default;
    }

    public static function getString($key)
    {
        
        $result = self::get($key);

        if (is_string($result) && !is_numeric($result) ){
            return trim($result);
        } else if ($result == null) {
            throw new EXCEPTION("The string $key does not exist");
        } else {
            throw new EXCEPTION("$key must be a non-numeric string");
        }


        // if !is_string($key) {
        //     throw new InvalidArgumentException();
        // }

    }

    public static function getNumber($key)
    {
        
        $result = trim(self::get($key));

        if(is_numeric($result)){
            return $result;
        } else if ($result == null) {
            throw new EXCEPTION("The number $key does not exist");
        } else {
            throw new EXCEPTION("Key must be a number");
        }


        // if (!is_numeric($min) || !is_numeric($max)){
        //     throw new InvalidArgumentException();
        // }

    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}

}
