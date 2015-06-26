<?php

require_once 'db_connect.php'

Class Model
{

    private $attributes = [];
    protected static $table = 'db';


    public static function getTableName()
    {
        return static::$table;
    }

    // Setter
    public function __set($name, $value)
    {
        //create key/value pairs in $attributes
        $this->attributes[$name] = $value;
    }

    public function __get($name)
    {
        // retrieve values from $attributes based on 
        // key name if the key exists

        if(array_key_exists($name, $this->attributes)){
            return $this->attributes[$name];    
        }

        return null;
    }


    

}

// $model = new Model();
// $model->test = 'Isaac';

// echo $model->test;

