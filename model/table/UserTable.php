<?php
require_once __DIR__."/Table.php";
/**
 * Created by PhpStorm.
 * User: riki
 * Date: 11/4/17
 * Time: 3:07 PM
 */

class UserTable extends Table
{
    public static $TABLE_NAME = "tms_users";
    public static $TABLE_USER_DETAIL = "tms_user_details";
    public function insert($user)
    {
        if($user instanceof User)
        {
            $username = $user->getUsername();
            $password = $user->getPassword();

            $firstName = $user->getDetails()->getFirstName();
            $lastName = $user->getDetails()->getLastName();
            $email = $user->getDetails()->getEmail();
            $role = $user->getDetails()->getRole();

            $sql = "INSERT INTO ".UserTable::$TABLE_NAME." (username, password) VALUES ('$username', '$password')";
            $result = mysqli_query($this->connection, $sql);

            if(!$result)
            {
                throw new DatabaseException("Username already in use");
            } else {
                $lastInsertedId = mysqli_insert_id($this->connection);

                $sql = "INSERT INTO ".UserTable::$TABLE_USER_DETAIL." (firstname, lastname, email, role, user_id)
                        VALUES ('$firstName', '$lastName', '$email', '$role', '$lastInsertedId')";

                $result = mysqli_query($this->connection, $sql);

                if($result)
                {
                    return $lastInsertedId;
                } else {
                    $this->delete($lastInsertedId);
                    throw new DatabaseException("Email already in use");
                }
            }
        } else {
            throw new IllegalArgumentException("Illegal data object passed. Need User object!");
        }
    }

    public function update($object)
    {
        // TODO: Implement update() method.
    }

    public function find($id)
    {
        // TODO: Implement find() method.
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function parseObject($row)
    {
        $userDetail = UserDetail::newInstance($row['id'], $row['firstname'], $row['lastname'], $row['email'], $row['role'], $row['user_id']);
        $user = User::newInstance($row['id'], $row['username'], $row['password'], $userDetail);
        return $user;
    }

    public function login($user)
    {
        if($user instanceof User)
        {
            $username = $user->getUsername();
            $password = $user->getPassword();

            $query = "SELECT * FROM ".UserTable::$TABLE_NAME." as u
                      INNER JOIN ".UserTable::$TABLE_USER_DETAIL." as ud
                      ON u.id=ud.user_id WHERE username='$username' and password='$password'";
            $result = mysqli_query($this->connection, $query);
            if(!$result)
            {
                return false;
            } else {
                if(mysqli_num_rows($result) > 0){
                    return $this->parseObject(mysqli_fetch_assoc($result));
                }
            }
        }
        return false;
    }

}