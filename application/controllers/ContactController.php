<?php

require_once MODELS . '/ContactModel.php';

class ContactController {
    private $model;
    
    function __construct() {
        $this->model = new ContactModel();
    }
    
    //$data: datos que requiere la vista
    //$view: vista que se va a llamar
    private function viewCalling($view, $data) {
        ob_start();
        
        if (!empty($data)) {
            extract($data);
        }
        
        require VIEWS . "/$view.php";
        
        ob_end_flush();
    }
    
    function photoUpload() {
        
    }
    
    function mainPage() {
        $data['contacts'] = $this->model->getContacts();
        
        $this->viewCalling("main_page", $data);
    }
    
    function insertContact() {
        
    }
    
    function insertContactForm() {
        
    }
    
    function editContact() {
        
    }
    
    function editContactForm() {
        
    }
    
    function removeContact() {
        
    }
    
    function listContact() {
        
    }
    
    function showContact() {
        
    }
}

?>