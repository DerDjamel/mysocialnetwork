<?php
class App {
    private $controller = 'Login';
    private $method     = 'index';
    private $params     = array();
    
    
    
    public function __construct() {
        // get the components of the url
        $url = $this->parseUrl();
        
        /***
         * SETTING THE CONTROLLER
         ***/
        if(isset($url[0])){
            // set the controller att to the url value if file exist
            if(file_exists('../private/controllers/' . ucfirst($url[0]) . '.php')){
                $this->controller = ucfirst($url[0]);
            }
            unset($url[0]); // remove it from the url array
        }
        
        //require the controller
        require_once '../private/controllers/' . $this->controller .'.php';
        $this->controller = new $this->controller;
        /***
         * SETTING THE METHOD
         ***/
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
            }
            unset($url[1]); // remove it from the url array
        }
        
        /***
         * GETTING THE PARAMATERS IF THERE IS ANY
         ***/
        //$this->params = $url ? array_values($url) : array();
        
        // Call the method of the current controller
        call_user_func_array(array($this->controller, $this->method), $this->params);

    }
    
    
    
    
    // function that gets the url variable in GET and returns an array with it's components
    public function parseUrl(){
        $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
        if(!($url === FALSE || $url === NULL)){
            $url = explode('/', trim($url));
            return $url;
        }
    }
    
    
    
}
