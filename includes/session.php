<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Session {
    
    private $logged_in = false;
    public $user_id;
    
    function __construct() {
        session_start();
        $this->check_login();
    }
    
    public function is_logged_in(){
        return $this->logged_in;
    }
    
    public function login($user){
        if($user):
        $this->user_id = $_SESSION['user_id'] = $user->id;
        $this->logged_in=true;
        endif;
    }

    private function check_login(){
        if(isset($_SESSION['user_id'])):
            $this->user_id = $_SESSION['user_id'];
            $this->logged_in = true;
        else :
            unset($this->user_id);
            $this->logged_in = FALSE;
        endif;
    }
}

$session = new Session();
?>
