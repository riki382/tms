<?php
$userTable = new UserTable();
if(isset($_POST['submit']))
{
    try {
        $username = sanitize($_POST['uname']);
        $password = sha1(sanitize($_POST['password']));
        $user = new User($username, $password);

        $result = $userTable->login($user);

        if(!$result)
        {
            throw new Exception("Incorrect Username or password");
        } else {
            $userId = $_SESSION['userId'] = $result->getId();

            redirectTo(BASE_URL);
        }
    } catch (Exception $e)
    {
        $errMsg = $e->getMessage();
        return $errMsg;
    }
}