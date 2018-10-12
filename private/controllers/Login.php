<?php
class Login extends Controller {
    
    public function __construct() {}

    public function index(){
        // get the models here 
        
        // check if user is already logged in
        if(isset($_SESSION['user_id'])){
            $user_id = filter_var($_SESSION['user_id'], FILTER_VALIDATE_INT);
        }
        // if user is logged in, redirect to profile page
        if(!(empty($user_id))){
            Redirect::to('Profile/index');
        }
        //if the user in not logged in, show the login page
        $this->getView('Login/index');
    }
}

