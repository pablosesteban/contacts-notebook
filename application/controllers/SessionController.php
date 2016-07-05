<?php

require_once CLASSES . '/User.php';
require_once MODELS . '/UserModel.php';

class SessionController {
    private $userModel;
    private $user;
    
    function __construct() {
        $this->userModel = new UserModel();
    }
    
    private function viewCalling($view, $data) {
        ob_start();
        
        if (!empty($data)) {
            extract($data);
        }
        
        require VIEWS . "/$view.php";
        
        ob_end_flush();
    }
    
    function getUser() {
        
    }
    
    function setUser(User $user) {
        
    }
    
    function login() {
        $this->viewCalling("login", null);
    }
    
    function isLogged() {
        $userArray = $this->userModel->searchUserByName(new User($_REQUEST['name'], $_REQUEST['password']));
        
        if (!$userArray) {
            $this->user = null;
            
            return false;
        }else {
            $this->user = new User($userArray[1], $userArray[2]);
            
            session_start();
            
            $_SESSION['user']['userName'] = $userArray[1];
            $_SESSION['user']['userRol'] = $this->user->getRol();
            
            return true;
        }
    }
    
    function getSession() {
        
    }
    
    function quit() {
        
    }
}

?>