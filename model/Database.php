<?php
require_once __DIR__ . "/../app/config/config.php";

/**
 * This class handles the database connection and the database parameters
 */
class Database{
    //our single database instance
    private static $db = null;

    //the database connection
    private $connection;
    /**
     * Database constructor.
     * Initialize the database connection attribute.
     */
    private function __construct()
    {
        global $database;
        $this->connection= mysqli_connect($database['host'],$database["user"],$database["pass"],$database["name"])
        or die("Cannot connect to database!!!");

        //set the time zone to the database in case the time zone is offset
        $SET_TIME_ZONE = "SET time_zone = ".TIME_ZONE.";";
        mysqli_query($this->connection,$SET_TIME_ZONE);
        
    }

    /**
     * Gets instance of the database.
     * @return Database
     */
    public static function getInstance(){
        if(Database::$db == null){
            Database::$db = new Database();
        }
        return Database::$db;
    }

    /**
     * Opens database connection.
     *
     * @return mixed
     */
    public function open()
    {
        return $this->connection;
    }

    /**
     * Closes database connection.
     */
    public function close(){
        $this->connection->close();
    }

}

