<?php
require_once __DIR__."/../../app/exception/IllegalArgumentException.php";
require_once __DIR__."/../../app/exception/DatabaseException.php";
require_once __DIR__ ."/../Database.php";

/**
 * Created by PhpStorm.
 * User: rikesh
 * Date: 11/15/16
 * Time: 4:03 PM
 */
abstract class Table
{
    protected $connection;

    /**
     * Table constructor.
     */
    public function __construct()
    {
        $this->connection = Database::getInstance()->open();
    }

    public abstract function insert($object);
    
    public abstract function update($object);

    public abstract function find($id);

    public abstract function getAll();

    public abstract function delete($id);

    public abstract function parseObject($row);

}