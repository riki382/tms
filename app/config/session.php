<?php
require_once __DIR__."/../../model/table/UserTable.php";

//get the user if he is logged in
if(isset($_SESSION['userId'])) {
    //declare the global user, so that the user can be available anywhere

    global $USER;

    //get the userId from the session
    $userId = $_SESSION['userId'];

    //now initialize the user table, the user object and the tables will have been included in the app.php file.
    //for more info see app/app.php
    $userTable = new UserTable();

    //find the user with that userId
    $USER = $userTable->find($userId);


    if (!$USER) {
        //the user with that id was not found, redirect to the login page
        redirectTo(BASE_URL);
    }
}
?>