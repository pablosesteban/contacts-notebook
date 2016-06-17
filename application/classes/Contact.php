<?php

class Contact {
    private $id;
    private $name;
    private $lastName;
    private $address;
    private $phoneNum;
    private $mail;
    private $image;
    private $visits;
    
    function __construct($name = "", $lastName = "", $address = "", $phoneNum = "", $mail = "", $image = "", $id = 0, $visits = 0) {
        $this->id = $id;
        $this->name = $name;
        $this->lastName = $lastName;
        $this->address = $address;
        $this->phoneNum = $phoneNum;
        $this->mail = $mail;
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

    function getPhoneNum() {
        return $this->phoneNum;
    }

    function getMail() {
        return $this->mail;
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

    function setPhoneNum($phoneNum) {
        $this->phoneNum = $phoneNum;
    }

    function setMail($mail) {
        $this->mail = $mail;
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
                "Phone Number: " . $this->phoneNum . "<br />" .
                "E-mail: " . $this->mail . "<br />" .
                "Image: " . $this->image . "<br />" .
                "Visits: " . $this->visits . "<br />";
    }
}

?>