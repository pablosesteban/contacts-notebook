<?php

class Model {
    private $host;
    private $user;
    private $password;
    private $database;
    private $port;
    private $connection;
    
    public function __construct() {
        $this->host = HOST;
        $this->user = USER;
        $this->password = PASSWORD;
        $this->database = DATABASE;
    }
    
    public function getHost() {
        return $this->host;
    }

    public function getUser() {
        return $this->user;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getDatabase() {
        return $this->database;
    }
    
    public function getPort() {
        return $this->port;
    }
    
    protected function setHost($host) {
        $this->host = $host;
    }

    protected function setUser($user) {
        $this->user = $user;
    }

    protected function setPassword($password) {
        $this->password = $password;
    }

    protected function setDatabase($database) {
        $this->database = $database;
    }
    
    protected function setPort($port) {
        $this->port = $port;
    }
    
    protected function openConnection() {
        $connection = mysqli_connect($this->getHost(), $this->getUser(), $this->getPassword(), $this->getDatabase(), $this->getPort());
        
        if ($connection->connect_errno) {
            exit($connection->connect_errno);
        }
        
        $this->connection = $connection;
    }
    
    protected function closeConnection() {
        
    }
}

?>