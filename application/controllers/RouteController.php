<?php

require_once CONTROLLERS . '/ContactController.php';
require_once CONTROLLERS . '/UserController.php';
require_once CONTROLLERS . '/SessionController.php';

class RouteController {
    private $contactController;
    private $userController;
    private $sessionController;
    
    function __construct() {
        $this->contactController = new ContactController();
        $this->sessionController = new SessionController();
        $this->userController = new UserController($this->sessionController);
    }
    
    function manageRoute() {
        if (isset($_REQUEST['action'])) {
            switch($_REQUEST['action']) {
                case "insertContact":
                    $this->contactController->insertContact();
                    break;
                case "insertContactView":
                    $this->contactController->insertContactForm();
                    break;
                case "edit":
                    $this->contactController->editContact($_REQUEST['id']);
                    break;
                case "editView":
                    $this->contactController->editContactForm($_REQUEST['id']);
                    break;
                case "remove":
                    $this->contactController->removeContact($_REQUEST['id']);
                    break;
                case "listContacts":
                    $this->contactController->listContacts();
                    break;
                case "show":
                    $this->contactController->showContact($_REQUEST['id']);
                    break;
                case "main":
                    $this->contactController->mainPage();
                    break;
                case "login":
                    if ($this->sessionController->isLogged()) {
                        $this->contactController->mainPage();
                    }else {
                        $this->sessionController->login();
                    }
                    
                    break;
                case "quit":
                    $this->sessionController->quit();
                    $this->sessionController->login();
                    break;
                case "listUsers":
                    $this->userController->listUsers();
                    break;
            }
        }else {
            $this->sessionController->login();
        }
    }
}

?>