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
    
    function getHost() {
        return $this->host;
    }

    function getUser() {
        return $this->user;
    }

    function getPassword() {
        return $this->password;
    }

    function getDatabase() {
        return $this->database;
    }
    
    function getPort() {
        return $this->port;
    }
    
    function setHost($host) {
        $this->host = $host;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setDatabase($database) {
        $this->database = $database;
    }
    
    function setPort($port) {
        $this->port = $port;
    }
    
    abstract protected function createConnection();
    abstract protected function closeConnection($connection);
}

?>