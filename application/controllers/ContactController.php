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
        $contact = new Contact($_POST['name'], $_POST['lastName'], $_POST['address'], $_POST['phone'], $_POST['email'], $_POST['image']);
        
        if ($this->model->insertContact($contact)) {
            $this->viewCalling("show_messages", []);
        }
    }
    
    function insertContactForm() {
        $this->viewCalling("insert_contact", []);
    }
    
    function editContact($id) {
        $contact = new Contact($_POST['name'], $_POST['lastName'], $_POST['address'], $_POST['phone'], $_POST['email'], $_POST['image'], $_POST['visits'], $id);
        
        if ($this->model->updateContact($contact)) {
            $this->viewCalling("show_messages", []);
        }
    }
    
    function editContactForm($id) {
        $contact = new Contact();
        $contact->setId($id);
        
        $contacts['contact'] = $this->model->searchContact($contact);
        
        $this->viewCalling("edit_contact", $contacts);
    }
    
    function removeContact($id) {
        $contact = new Contact();
        $contact->setId($id);
        
        if ($this->model->removeContact($contact)) {
            $this->viewCalling("show_messages", []);
        }
    }
    
    function listContact() {
        $data['contacts'] = $this->model->getContacts();
        
        $this->viewCalling("list_contacts", $data);
    }
    
    function showContact($id) {
        $contact = new Contact();
        $contact->setId($id);
        
        $contactArr = $this->model->searchContact($contact);
        
        $updateContact = new Contact($contactArr[1], $contactArr[2], $contactArr[3], $contactArr[4], $contactArr[5], $contactArr[6], $contactArr[7], $contactArr[0]);
        $updateContact->addVisit();
        
        $this->model->updateContact($updateContact);
        
        $contactArr[7] = $updateContact->getVisits();
        $contacts['contact'] = $contactArr;
        
        $this->viewCalling("show_contact", $contacts);
    }
}

?>