<?php
class Controller {
    
    public function getModel($model){
        require_once '../models/' . $model . '.php';
        return new $model();
    }
    
    public function getView($view){
        if(file_exists('../views/'. $view. '.php')){
            require_once '../views/'. $view. '.php';
        } else {
            exit('No such View');
      }
    }
    
}// end of Controller class

