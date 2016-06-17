<?php

require_once './Model.php';

class ContactModel extends Model {
    function __construct() {
        parent::__construct();
    }
    
    protected function createConnection() {
        return $connection = mysqli_connect(parent::getHost(), parent::getUser(), parent::getPassword(), parent::getDatabase(), parent::getPort());
        // or die ("Could not conntect to MySQL." . PHP_EOL . "Debug ERRNO: " . mysqli_connect_errno() . "." . PHP_EOL . "Debug ERROR: " . mysqli_connect_error() . "." . PHP_EOL)
    }
    
    protected function closeConnection($connection) {
        return mysqli_close($connection);
    }
    
    function insertContact(Contact $contact) {
        $connection = $this->createConnection();
        
        $query = "INSERT INTO contacto VALUES ('" .
                $contact->getName() . "', '" .
                $contact->getLastName() . "', '" .
                $contact->getAddress() . "', '" .
                $contact->getPhoneNum() . "', '" .
                $contact->getMail() . "', '" .
                $contact->getImage() . "', '" .
                $contact->getVisits() . "')";
        
        $result = mysqli_query($connection, $query);
        
        $this->closeConnection($connection);
        
        return $result;
    }
    
    function removeContact(Contact $contact) {
        
    }
    
    function updateContact(Contact $contact) {
        
    }
    
    function getContacts() {
        
    }
    
    function searchContact(Contact $contact) {
        
    }
}

?>