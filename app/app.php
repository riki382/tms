<?php
session_start();
/**
 * Created by yogesh on 11/20/16.
 *
 * This file will load up all the essential files and classes for the application to run
 *
 * The file will first load up the app files.
 * config.php
 * functions.php
 * routes.php
 *
 * Then it will load up the exception classes inside app/exception
 *
 * And finally the model classes
 *
 */
require_once __DIR__."/config/config.php";
/*
 * we also load up all the files in the app folder
 */
$appPath = BASE_PATH."/app/config/";
$files = scandir($appPath);
foreach ($files as $key => $file) {
    if($key > 1){
        include_once $appPath.$file;
    }
}

/*
 * Load the exception classes
 */
$appPath = BASE_PATH."/app/exception/";
$files = scandir($appPath);
foreach ($files as $key => $file) {
    if($key > 1){
        include_once $appPath.$file;
    }
}
/* 
 * now load up the database model objects and tables
 */
$modelPath = BASE_PATH."/model/";
include_once $modelPath."Database.php";
$objectPath = $modelPath."/object/";
includeFiles($objectPath);
$tablePath = $modelPath."/table/";
includeFiles($tablePath);




