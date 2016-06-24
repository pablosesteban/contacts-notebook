<?php

require_once CONTROLLERS . '/ContactController.php';

class RouteController {
    private $controller;
    
    function __construct() {
        $this->controller = new ContactController();
    }
    
    function manageRoute() {
        if (isset($_REQUEST['action'])) {
            switch($_REQUEST['action']) {
                case "insert":
                    $this->controller->insertContact();
                    break;
                case "insertView":
                    $this->controller->insertContactForm();
                    break;
                case "edit":
                    $this->controller->editContact();
                    break;
                case "editView":
                    $this->controller->editContactForm();
                    break;
                case "remove":
                    $this->controller->removeContact();
                    break;
                case "list":
                    $this->controller->listContact();
                    break;
                case "show":
                    $this->controller->showContact($_REQUEST['id']);
                    break;
            }
        }else {
            $this->controller->mainPage();
        }
    }
}

?>