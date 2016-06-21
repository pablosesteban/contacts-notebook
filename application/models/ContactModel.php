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
        
        echo "QUERY: ", $query, "<br />";
        
        $result = mysqli_query($this->getConnection(), $query);
        
        if (!$result) {
            throw new Exception("Insertion error: ", $this->getConnection()->error);
        }
        
        parent::closeConnection();
        
        return $result;
    }
    
    function removeContact(Contact $contact) {
        $query = "DELETE FROM contact WHERE id=" . $contact->getId();
        echo $query;
    }
    
    function updateContact(Contact $contact) {
        $query = "UPDATE contact SET name='" . $contact->getName() . "', lastName='" . $contact->getLastName() . "', address='" . $contact->getAddress() . "', phone='" . $contact->getPhone() . "', email='" . $contact->getEmail() . "', image='" . $contact->getImage() . "' WHERE id=" . $contact->getId();
        echo $query;
    }
    
    function getContacts() {
        $query = "SELECT * FROM contact";
        
        
    }
    
    function searchContact(Contact $contact) {
        $query = "SELECT * FROM contact WHERE id=" . $contact->getId();
        echo $query;
    }
}

?>