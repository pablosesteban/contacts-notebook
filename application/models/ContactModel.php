<?php

require_once MODELS . '/Model.php';

class ContactModel extends Model {
    function __construct() {
        parent::__construct();
    }
    
    protected function createConnection() {
        return mysqli_connect(parent::getHost(), parent::getUser(), parent::getPassword(), parent::getDatabase(), parent::getPort());
        // or die ("Could not conntect to MySQL." . PHP_EOL . "Debug ERRNO: " . mysqli_connect_errno() . "." . PHP_EOL . "Debug ERROR: " . mysqli_connect_error() . "." . PHP_EOL)
    }
    
    protected function closeConnection($connection) {
        return mysqli_close($connection);
    }
    
    function insertContact(Contact $contact) {
        $connection = $this->createConnection();
        if (!$connection) {
            echo "Error: No se pudo conectar a MySQL." . "<br />";
            echo "errno de depuración: " . mysqli_connect_errno() . "<br />";
            echo "error de depuración: " . mysqli_connect_error() . "<br />";
            exit;
        }
        echo "Información del host: " . mysqli_get_host_info($connection) . "<br />";
        
        $query = "INSERT INTO contacto (nombre, apellidos, direccion, telefono, email, imagen, contador_visitas) VALUES ('" .
                $contact->getName() . "', '" .
                $contact->getLastName() . "', '" .
                $contact->getAddress() . "', '" .
                $contact->getPhoneNum() . "', '" .
                $contact->getMail() . "', '" .
                $contact->getImage() . "', '" .
                $contact->getVisits() . "')";
        
        echo "QUERY: ", $query, "<br />";
        
        $result = mysqli_query($connection, $query);
        if (!$result) {
            echo "Insert error: ", $connection->error, "<br />";
        }
        
        echo "Close connection: ", $this->closeConnection($connection), "<br />";
        
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