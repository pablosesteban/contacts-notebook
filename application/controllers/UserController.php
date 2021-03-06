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
        $this->viewCalling("insert_user", null);
    }
    
    function insertUser() {
        $newUser = new User($_POST['name'], $_POST['password'], $_POST['rol']);
        
        if(!$this->userModel->searchUserByName($newUser)) {
            $this->userModel->insertUser($newUser);
            
            $msg['message'] = "User inserted successfully";
        }else {
            $msg['message'] = "User already exists";
        }
        
        $this->viewCalling("show_messages", $msg);
    }
    
    function removeUser($id) {
        $session = $this->sessionController->getSession();
        
        if ($session['userId'] != $id) {
            $this->userModel->removeUser(new User("", "", "", $id));
            
            $message['message'] = "User removed successfully";
        }else {
            $message['message'] = "Cannot remove current user";
        }
        
        $this->viewCalling("show_messages", $message);
    }
    
    function listUsers() {
        $users['users'] = $this->userModel->getUsers();
        
        $this->viewCalling("list_users", $users);
    }
}

?>