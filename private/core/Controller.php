<?php
class Controller {
    
    public function getModel($model){
        require_once '../private/models/' . $model . '.php';
        return new $model();
    }
    
    public function getView($view){
        if(file_exists('../private/views/'. $view. '.php')){
            require_once '../private/views/'. $view. '.php';
        } else {
            exit('No such View');
      }
    }
    
}// end of Controller class

