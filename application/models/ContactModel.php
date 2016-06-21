<?php

require_once MODELS . '/Model.php';

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
    
    function updateContact(Contact $contact) {
        parent::openConnection();
        
        $query = "UPDATE contact SET name='" . $contact->getName() . "', lastName='" . $contact->getLastName() . "', address='" . $contact->getAddress() . "', phone='" . $contact->getPhone() . "', email='" . $contact->getEmail() . "', image='" . $contact->getImage() . "' WHERE id=" . $contact->getId();
        
        $result = mysqli_query($this->getConnection(), $query);
        
        if (!$result) {
            throw new Exception("Update error: ", $this->getConnection()->error);
        }
        
        parent::closeConnection();
        
        return $result;
    }
    
    function getContacts() {
        $query = "SELECT * FROM contact";
        
        
    }
    
    function searchContact(Contact $contact) {
        parent::openConnection();
        
        $query = "SELECT * FROM contact WHERE id=" . $contact->getId();
        
        $result =  mysqli_fetch_fields(mysqli_query($this->getConnection(), $query));
        
        if (count($result) == 0) {
            throw new Exception("Search error: ", $this->getConnection()->error);
        }
        
        parent::closeConnection();
        
        print_r($result);
//        $returnedContact = new Contact();
//        for ($index = 0; $index < count($result); $index++) {
//            echo $result[$index], "<br />";
//            
//        }
        
        return $result;
    }
}

?>