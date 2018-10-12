<?php
class Request {
    public static function isPost(){
        $method = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
        return $method === 'POST';
    }
    
    public static function isGet(){
        $method = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
        return $method === 'GET';
    }
}

