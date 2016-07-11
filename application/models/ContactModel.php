<?php

require_once MODELS . '/Model.php';
require_once CLASSES . '/Contact.php';

class ContactModel extends Model {
    function __construct() {
        parent::__construct();
    }
    
    private function existsContact(Contact $contact) {
        parent::openConnection();
        
        $query = "SELECT id FROM contact WHERE name='" . $contact->getName() . "' AND lastName='" . $contact->getLastName() . "' AND address='" . $contact->getAddress() . "' AND phone='" . $contact->getPhone() . "' AND email='" . $contact->getEmail() . "' AND image='" . $contact->getImage() . "'";
        
        $result =  mysqli_query($this->getConnection(), $query);
        
        parent::closeConnection();
        
        if ($result->num_rows == 0) {
            return false;
        }
        
        return mysqli_fetch_row($result)[0];
    }
    
    private function existsContactUser($userId, $contactId) {
        parent::openConnection();
        
        $query = "SELECT * FROM contact_user WHERE userId='" . $userId . "' AND contactId='" . $contactId . "'";
        
        $result = mysqli_query($this->getConnection(), $query);
        
        parent::closeConnection();
        
        if ($result->num_rows == 0) {
            return false;
        }
        
        return true;
    }
    
    function insertContact(Contact $contact) {
        session_start();
        
        $id = $this->existsContact($contact);
        
        if (!$id) {
            parent::openConnection();
            
            $query = "INSERT INTO contact (name, lastName, address, phone, email, image, visits) VALUES ('" .
                $contact->getName() . "', '" .
                $contact->getLastName() . "', '" .
                $contact->getAddress() . "', '" .
                $contact->getPhone() . "', '" .
                $contact->getEmail() . "', '" .
                $contact->getImage() . "', '" .
                $contact->getVisits() .
            "')";
            
            $result = mysqli_query($this->getConnection(), $query);
            
            if (!$result) {
                throw new Exception("Contact insertion error: " . mysqli_error($this->getConnection()));
            }
            
            parent::closeConnection();
            
            $id = $this->existsContact($contact);
        }
        
        if(!$this->existsContactUser($_SESSION['user']['userId'], $id)) {
            parent::openConnection();
            
            $query = "INSERT INTO contact_user (userId, contactId) VALUES ('" . $_SESSION['user']['userId'] . "', '" . $id . "')";
            
            $result = mysqli_query($this->getConnection(), $query);
            
            if (!$result) {
                throw new Exception("Contact-User insertion error: " . mysqli_error($this->getConnection()));
            }
            
            parent::closeConnection();
        }
        
        return true;
    }
    
    //Buscar por la PK!
    function removeContact(Contact $contact) {
        parent::openConnection();
        
        $query = "SELECT userId FROM contact_user WHERE contactId='" . $contact->getId() . "'";
        
        $userIds = mysqli_query($this->getConnection(), $query);
        
        if ($userIds->num_rows > 1) {
            if(!isset($_SESSION['user'])) {
                session_start();
            }
            
            $query = "DELETE FROM contact_user WHERE userId='" . $_SESSION['user']['userId'] . "' AND contactId='" . $contact->getId() . "'";
        }else {
            $query = "DELETE FROM contact WHERE id=" . $contact->getId();
        }
        
        $result = mysqli_query($this->getConnection(), $query);
        
        if (!$result) {
            throw new Exception("Deletion error: " . mysqli_error($this->getConnection()));
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
    
    public function getUserContacts() {
        if (!isset($_SESSION['user'])) {
            session_start();
        }
        
        parent::openConnection();
        
        $query = "SELECT contactId FROM contact_user WHERE userID='" . $_SESSION['user']['userId'] . "'";
        
        $contactIds = mysqli_query($this->getConnection(), $query);
        
        if ($contactIds->num_rows == 0) {
            return false;
        }
        
        $contacts = [];
        for ($i = 0; $i < $contactIds->num_rows; $i++) {
            $query = "SELECT * FROM contact WHERE id='" . mysqli_fetch_row($contactIds)[0] . "'";
            
            $contact = mysqli_query($this->getConnection(), $query);
            
            $row = mysqli_fetch_row($contact);
            
            $contacts[$i] = new Contact($row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[0]);
        }
        
        parent::closeConnection();
        
        return $contacts;
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