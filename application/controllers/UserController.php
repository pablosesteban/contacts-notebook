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
        $newUser = new User($_POST['name'], $_POST['password'], $_POST['rol']);
        
        $this->userModel->insertUser($newUser);
        
        $this->viewCalling("show_messages", null);
    }
    
    function removeUser($id) {
        $this->userModel->removeUser(new User("", "", "", $id));
        
        $this->viewCalling("show_messages", null);
    }
    
    function listUsers() {
        $users['users'] = $this->userModel->getUsers();
        
        $this->viewCalling("list_users", $users);
    }
}

?>