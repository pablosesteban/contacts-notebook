<?php

abstract class Model {
    private $host;
    private $user;
    private $password;
    private $database;
    private $port;
    
    protected function __construct() {
        $this->host = HOST;
        $this->user = USER;
        $this->password = PASSWORD;
        $this->database = DATABASE;
    }
    
    protected function getHost() {
        return $this->host;
    }

    protected function getUser() {
        return $this->user;
    }

    protected function getPassword() {
        return $this->password;
    }

    protected function getDatabase() {
        return $this->database;
    }
    
    protected function getPort() {
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
    
    abstract protected function createConnection();
    abstract protected function closeConnection($connection);
}

?>