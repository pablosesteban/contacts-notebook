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
        return $this->user;
    }
    
    function setUser(User $user) {
        $this->user = $user;
    }
    
    function login() {
        $this->viewCalling("login", null);
    }
    
    function isLogged() {
        $userArray = $this->userModel->searchUserByName(new User($_REQUEST['name'], $_REQUEST['password']));
        
        if (!$userArray) {
            return false;
        }else {
            $this->user = new User($_REQUEST['name'], $_REQUEST['password']);
            
            session_start();
            
            $_SESSION['user']['userId'] = $userArray[0];
            $_SESSION['user']['userName'] = $_REQUEST['name'];
            $_SESSION['user']['userRol'] = $userArray[3];
            
            return true;
        }
    }
    
    function getSession() {
        $session = [];
        
        if (!isset($_SESSION['user'])) {
            session_start();
        }
        
        if (isset($_SESSION['user'])) {
            $session['user']['userId'] = $_SESSION['user']['userId'];
            $session['user']['userName'] = $_SESSION['user']['userName'];
            $session['user']['userRol'] = $_SESSION['user']['userRol'];
            
            return $session['user'];
        }
        
        return $session;
    }
    
    function quit() {
        session_start();
        
        session_unset();
        
        session_destroy();
        
        setcookie(session_name(), '', 0, '/');
    }
}

?>