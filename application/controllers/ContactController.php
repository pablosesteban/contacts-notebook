<?php

require_once MODELS . '/ContactModel.php';

class ContactController {
    private $model;
    private $sessionController;
    
    function __construct() {
        $this->model = new ContactModel();
        $this->sessionController = new SessionController();
    }
    
    //$data: datos que requiere la vista
    //$view: vista que se va a llamar
    private function viewCalling($view, $data) {
        $data['user'] = $this->sessionController->getSession();
        
        ob_start();
        
        if (!empty($data)) {
            extract($data);
        }
        
        require VIEWS . "/$view.php";
        
        ob_end_flush();
    }
    
    private function photoUpload() {
        $imageName;
        
        if ($_FILES['image']['name']) {
            if ($_FILES['image']['error'] != 0) {
                throw new Exception("Upload photo error: " + $_FILES['image']['error']);
            }
            
            $imageName = md5_file($_FILES['image']['tmp_name']);
            
            if (!$imageName) {
                throw new Exception("Upload photo error: calculating md5");
            }
            
            if (!move_uploaded_file($_FILES['image']['tmp_name'], IMAGES_DATA . "/$imageName")) {
                throw new Exception("Upload photo error: moving file");
            }
        }else {
            $imageName = "tux01.jpg";
        }
        
        return $imageName;
    }
    
    function mainPage() {
        $data['contacts'] = $this->model->getUserContacts();
        
        $this->viewCalling("main_page", $data);
    }
    
    function insertContact() {
        $contact = new Contact($_POST['name'], $_POST['lastName'], $_POST['address'], $_POST['phone'], $_POST['email'], $this->photoUpload());
        
        $this->model->insertContact($contact);
        
        $msg['message'] = "Contact inserted successfully";
        
        $this->viewCalling("show_messages", $msg);
    }
    
    function insertContactForm() {
        $this->viewCalling("insert_contact", null);
    }
    
    function editContact($id) {
        $contact = new Contact($_POST['name'], $_POST['lastName'], $_POST['address'], $_POST['phone'], $_POST['email'], $this->photoUpload(), $_POST['visits'], $id);
        
        if ($this->model->updateContact($contact)) {
            $msg['message'] = "Contact edited successfully";
            
            $this->viewCalling("show_messages", $msg);
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
            $msg['message'] = "Contact removed successfully";
            
            $this->viewCalling("show_messages", $msg);
        }
    }
    
    function listContacts() {
//        $data['contacts'] = $this->model->getContacts();
        $data['contacts'] = $this->model->getUserContacts();
        
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