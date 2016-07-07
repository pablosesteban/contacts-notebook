<?php

class UserModel extends Model {
    function __construct() {
        parent::__construct();
    }
    
    function insertUser(User $user) {
        parent::openConnection();
        
        $query = "INSERT INTO user (id, name, password, rol) VALUES ('" .
                $user->getId() . "', '" .
                md5($user->getName() . USER_SALT) . "', '" .
                md5($user->getPassword() . PASSWORD_SALT) . "', '" .
                $user->getRol() . "')";
        
        $result = mysqli_query($this->getConnection(), $query);
        
        if (!$result) {
            throw new Exception("Insertion error: ", $this->getConnection()->error);
        }
        
        parent::closeConnection();
        
        return $result;
    }
    
    function removeUser(User $user) {
        parent::openConnection();
        
        $query = "DELETE FROM user WHERE id=" . $user->getId();
        
        $result = mysqli_query($this->getConnection(), $query);
        
        if (!$result) {
            throw new Exception("Deletion error: ", $this->getConnection()->error);
        }
        
        parent::closeConnection();
        
        return $result;
    }
    
    function getUsers() {
        parent::openConnection();
        
        $query = "SELECT * FROM user";
        
        $result =  mysqli_query($this->getConnection(), $query);
        
        if ($result->num_rows == 0) {
            return false;
        }
        
        $users = [];
        $index = 0;
        while (($row = mysqli_fetch_row($result)) != null) {
            $users[$index] = new User($row[1], $row[2], $row[3], $row[0]);
            
            $index++;
        }
        
        parent::closeConnection();
        
        return $users;
    }
    
    function searchUserById(User $user) {
        parent::openConnection();
        
        $query = "SELECT * FROM user WHERE id=" . $user->getId();
        
        $result =  mysqli_query($this->getConnection(), $query);
        
        parent::closeConnection();
        
        if ($result->num_rows == 0) {
            return false;
        }
        
        return mysqli_fetch_row($result);
    }
    
    function searchUserByName(User $user) {
        parent::openConnection();
        
        $query = "SELECT * FROM user WHERE name='" . md5($user->getName() . USER_SALT) . "' AND password='" . md5($user->getPassword() . PASSWORD_SALT) . "'";
        
        $result =  mysqli_query($this->getConnection(), $query);
        
        parent::closeConnection();
        
        if ($result->num_rows == 0) {
            return false;
        }
        
        return mysqli_fetch_row($result);
    }
}

?>