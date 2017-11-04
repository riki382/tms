<?php

/**
 * Created by yogesh on 11/20/16.
 *
 * This class will handle the illegal data passed to the methods.
 */
class IllegalArgumentException extends Exception
{
    function __construct($message)
    {
        parent::__construct("IllegalArgumentException : ".$message);
    }

}