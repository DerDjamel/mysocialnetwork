<?php
class Login extends Controller {
    private $userModel;
    
    public function __construct() {
        $this->userModel = $this->getModel('User'); 
    }

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
     
    
    public function logUserIn(){
        if(Request::isPost()){
            $sanatizedEmail = Sanatize::email($_POST['email']);
            $validatedEmail = Validate::email($sanatizedEmail);
            
            if(Validate::password($_POST['password'])){
                $user = $this->userModel::getUser($validatedEmail, $_POST['password']);
                if($user === FALSE){
                  //set the user logged in status
                  
                }
                Session::put('user_id', );
            }
        }
    }
    
    
    
    
}

