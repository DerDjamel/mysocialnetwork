<?php
class Session {
    
    //sets the $var_name variable in seesion array to $data
    public static function put($var_name, $data){
        $_SESSION[$var_name] = $data;
    }
    
    // get the data in the $var_name variable in session array
    // return $data if set or FALSE in failure
    public static function get($var_name){
        return isset($_SESSION[$var_name]) ? $_SESSION[$var_name] : FALSE;
    }
    
    // same as put , but used for semantics in code
    public static function flash($msg_name, $msg){
        self::put($msg_name, $data);
    }
    
}

