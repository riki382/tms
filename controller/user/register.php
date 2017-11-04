<?php

    $userTable =  new UserTable();

    if(isset($_POST['register']))
    {
        try {
            $firstName = sanitize($_POST['fname']);
            $lastName = sanitize($_POST['lname']);
            $username = sanitize($_POST['uname']);
            $email = sanitize($_POST['email']);
            $password = sanitize(sha1($_POST['password']));
            $cpassword = sanitize(sha1($_POST['cpassword']));
            $role = "C";

            $detail = UserDetail::newInstance('', $firstName, $lastName, $email, $role, '');
            $user = User::newInstance('', $username, $password, $detail);
            if($password == $cpassword)
            {
                $result = $userTable->insert($user);
                if(!$result)
                {
                    throw new Exception("Failed to insert new user.");
                } else {
                    //successfully inserted
                    redirectTo(BASE_URL."view/admin/user/login.php");
                }
            } else {
                throw new Exception("Username already exists.");
            }
        } catch (Exception $e) {
            $errMsg = $e->getMessage();
            return $errMsg;
        }
    }