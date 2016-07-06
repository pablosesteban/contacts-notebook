<?php

require_once MODELS . '/UserModel.php';

class UserController {
    private $userModel;
    private $sessionController;
    
    function __construct(SessionController $sessionController) {
        $this->sessionController = $sessionController;
        $this->userModel = new UserModel();
    }
    
    private function viewCalling($view, $data) {
        $data['user'] = $this->sessionController->getSession();
        
        ob_start();
        
        if (!empty($data)) {
            extract($data);
        }
        
        require VIEWS . "/$view.php";
        
        ob_end_flush();
    }
    
    function insertUserForm() {
        $this->viewCalling("insert_user", []);
    }
    
    function insertUser() {
        
    }
    
    function removeUser() {
        
    }
    
    function listUsers() {
        $users['users'] = $this->userModel->getUsers();
        
        $this->viewCalling("list_users", $users);
    }
}

?>