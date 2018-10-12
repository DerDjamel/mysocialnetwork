<?php
class Login extends Controller {
  
    public function index(){
        // check if user is already logged in
        $user_id = filter_input(INPUT_SESSION, 'user_id', FILTER_VALIDATE_INT);
        if(!($user_id === FALSE || $user_id === NULL)){
            Redirect::to('Profile/index');
        }
        // if the user in not logged in show the login page
        $this->getView($view);
    }
}

