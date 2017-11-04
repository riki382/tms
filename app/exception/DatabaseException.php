<?php

/**
 * Created by yogesh on 11/20/16.
 *
 * This class will handle the exceptions for any database and mysql error.
 */
class DatabaseException extends Exception
{

    function __construct($message)
    {
        parent::__construct("DatabaseException : ".$message);
    }
}