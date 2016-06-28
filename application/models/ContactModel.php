<?php

require_once MODELS . '/Model.php';
require_once CLASSES . '/Contact.php';

class ContactModel extends Model {
    function __construct() {
        parent::__construct();
    }
    
    function insertContact(Contact $contact) {
        parent::openConnection();
        
        $query = "INSERT INTO contact (name, lastName, address, phone, email, image, visits) VALUES ('" .
                $contact->getName() . "', '" .
                $contact->getLastName() . "', '" .
                $contact->getAddress() . "', '" .
                $contact->getPhone() . "', '" .
                $contact->getEmail() . "', '" .
                $contact->getImage() . "', '" .
                $contact->getVisits() . "')";
        
        $result = mysqli_query($this->getConnection(), $query);
        
        if (!$result) {
            throw new Exception("Insertion error: ", $this->getConnection()->error);
        }
        
        parent::closeConnection();
        
        return $result;
    }
    
    //Buscar por la PK!
    function removeContact(Contact $contact) {
        parent::openConnection();
        
        $query = "DELETE FROM contact WHERE id=" . $contact->getId();
        
        $result = mysqli_query($this->getConnection(), $query);
        
        if (!$result) {
            throw new Exception("Deletion error: ", $this->getConnection()->error);
        }
        
        parent::closeConnection();
        
        return $result;
    }
    
    //Buscar por la PK!
    function updateContact(Contact $contact) {
        parent::openConnection();
        
        $query = "UPDATE contact SET name='" . $contact->getName() . "', lastName='" . $contact->getLastName() . "', address='" . $contact->getAddress() . "', phone='" . $contact->getPhone() . "', email='" . $contact->getEmail() . "', image='" . $contact->getImage() . "', visits='" . $contact->getVisits() . "' WHERE id=" . $contact->getId();
        
        $result = mysqli_query($this->getConnection(), $query);
        
        if (!$result) {
            throw new Exception("Update error: ", $this->getConnection()->error);
        }
        
        parent::closeConnection();
        
        return $result;
    }
    
    function getContacts() {
        parent::openConnection();
        
        //contactos ordenados por numero de visitas
        $query = "SELECT * FROM contact ORDER BY visits DESC";
        
        $result =  mysqli_query($this->getConnection(), $query);
        
        if (!$result) {
            throw new Exception("Get contacts error: ", $this->getConnection()->error);
        }
        
        $contacts = [];
        $index = 0;
        while (($row = mysqli_fetch_row($result)) != null) {
            $contacts[$index] = new Contact($row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[0]);
            
            $index++;
        }
        
        parent::closeConnection();
        
        return $contacts;
    }
    
    //Buscar por la PK!
    function searchContact(Contact $contact) {
        parent::openConnection();
        
        $query = "SELECT * FROM contact WHERE id=" . $contact->getId();
        
        $result =  mysqli_query($this->getConnection(), $query);
        
        if (!$result) {
            throw new Exception("Search error: ", $this->getConnection()->error);
        }
        
        parent::closeConnection();
        
        return mysqli_fetch_row($result);
    }
}

?>