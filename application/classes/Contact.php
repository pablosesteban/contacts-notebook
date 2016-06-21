<?php

class Contact {
    private $id;
    private $name;
    private $lastName;
    private $address;
    private $phone;
    private $email;
    private $image;
    private $visits;
    
    function __construct($name = "", $lastName = "", $address = "", $phone = "", $email = "", $image = "", $id = 0, $visits = 0) {
        $this->id = $id;
        $this->name = $name;
        $this->lastName = $lastName;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
        $this->image = $image;
        $this->visits = $visits;
    }
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getLastName() {
        return $this->lastName;
    }

    function getAddress() {
        return $this->address;
    }

    function getPhone() {
        return $this->phone;
    }

    function getEmail() {
        return $this->email;
    }

    function getImage() {
        return $this->image;
    }

    function getVisits() {
        return $this->visits;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    function setAddress($address) {
        $this->address = $address;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setImage($image) {
        $this->image = $image;
    }

    function setVisits($visits) {
        $this->visits = $visits;
    }

    function addVisit() {
        $this->visits++;
    }
    
    function __toString() {
        return "ID: " . $this->id . "<br />" .
                "Name: " . $this->name . "<br />" .
                "Last Name: " . $this->lastName . "<br />" .
                "Address: " . $this->address . "<br />" .
                "Phone: " . $this->phone . "<br />" .
                "E-mail: " . $this->email . "<br />" .
                "Image: " . $this->image . "<br />" .
                "Visits: " . $this->visits . "<br />";
    }
}

?>