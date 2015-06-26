<?php

require_once 'parks_login.php';

Class Model 

{

    protected static $dbc;
    protected static $table;

    public $attributes = array();

    /*
     * Constructor
     */
    public function __construct()
    {
        self::dbConnect();
    }

    /*
     * Connect to the DB
     */
    private static function dbConnect()
    {
        // If the static poperty $dbc has not been set yet, then assign it
        if (!self::$dbc)
        {

            // @TODO: Connect to database
            self::$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' .DB_NAME, DB_USER, DB_PASS);
            // Throw errors
            self::$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo 'You are connected to the database';
        }
    }

    /*
     * Get a value from attributes based on name
     */
    public function __get($name)
    {
        // @TODO: Return the value from attributes with a matching $name, if it exists
        if(array_key_exists($name, $this->attributes)) {
            
            return $this->attributes[$name];
        }

        return null;

    }

    /*
     * Set a new attribute for the object
     */
    public function __set($name, $value)
    {
        // @TODO: Store name/value pair in attributes array
        $this->attributes[$name] = $value;

    }

    /*
     * Persist the object to the database
     */
    
    public function save()
    {

        if(!empty($this->attributes)){

            if (!isset($this->id)){
                $this->insert();
            } else {
                $this->update();
            }
        }

        // @TODO: Ensure there are attributes before attempting to save

        // @TODO: Perform the proper action - if the `id` is set, this is an update, if not it is a insert

        // @TODO: Ensure that update is properly handled with the id key

        // @TODO: After insert, add the id back to the attributes array so the object can properly reflect the id

        // @TODO: You will need to iterate through all the attributes to build the prepared query

        // @TODO: Use prepared statements to ensure data security

    /*
     * Find a record based on an id
     */
    }

    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        // @TODO: Create SELECT statement using prepared statements
        $stmt = self::$dbc->prepare("SELECT * FROM" . static::$table . " WHERE id = :id;");
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        // @TODO: Store the result set in a variable named $result
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


        // The following code will set the attributes on the calling object based on the result variable's contents
        $instance = null;
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }

    /*
     * Find all records in a table
     */
    public static function all()
    {
        self::dbConnect();

        // @TODO: Learning from the previous method, return all the matching records
    }

}

$model = new Model();


?>