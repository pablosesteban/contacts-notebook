<?php

class User {
    private $id;
    private $name;
    private $password;
    private $rol;
    
    function __construct($name, $password, $rol = "guest", $id = 0) {
        $this->id = $id;
        $this->name = $name;
        $this->password = $password;
        $this->rol = $rol;
    }
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getPassword() {
        return $this->password;
    }

    function getRol() {
        return $this->rol;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setRol($rol = "guest") {
        $this->rol = $rol;
    }
    
    function __toString() {
        return "ID: " . $this->id . "<br />" .
                "Name: " . $this->name . "<br />" .
                "Password: " . $this->password . "<br />" .
                "Rol: " . $this->rol . "<br />";
    }
}

?>