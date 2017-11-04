<?php
/**
 * **************************************************************************************
 * ******* Configuration For The Application ********************************************
 * **************************************************************************************
 *
 * This file will contain the configurations for the application.
 * The Base Path, Base url, Time zone and the database connections.
 *
 */

/**
 * Set the base path for our application.
 * This will be the path of your project folder
 */
if(!defined("BASE_PATH")){
    define("BASE_PATH", __DIR__ . "/../../");
}
/**
 * Set the base user for the application
 */
if(!defined("BASE_URL")){
    define("BASE_URL",$_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME']."/tms/");
}

/**
 * Set the time zone parameter
 */
if(!defined("TIME_ZONE")){
    define("TIME_ZONE",'Asia/Kathmandu');
}
//set the time zone for the php to use
date_default_timezone_set(TIME_ZONE);

/**
 * Set the environment of the application.
 * DEV for development environment
 * PRO for production environment
 */
if(!defined("ENV")){
    define("ENV","DEV");
}
if(ENV == "DEV"){
    //enable $error reporting
    error_reporting(E_ALL);
    ini_set("display_errors",1);
}else{
    //disable $error reporting
    error_reporting(E_DEPRECATED);
    ini_set("display_errors",0);
}

if(!defined("UPLOAD_URL")){
    define("UPLOAD_URL",BASE_URL."");
}


//define the app upload size
define("MAX_FILE_SIZE",ini_get("upload_max_filesize"));

/**
 * Define the database parameters.
 */
global $database;
$database = [
    "host" => "localhost", //the database host, e.g localhost
    "user" => "root", //the database user
    "pass" => "root", //the database password
    "name" => "tms"//the database name
    ];
