<?php
class Sanatize {
    public static function email($email){
        return filter_var($email, FILTER_SANITIZE_EMAIL);
    }
    
    public static function int($int){
        return filter_var($int, FILTER_SANITIZE_NUMBER_INT);
    }
    
    public static function specialChars($str){
        return filter_var($str, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    
    public static function str($str){
        return filter_var($str, FILTER_SANITIZE_STRING);
    }

    public static function encodeUrl($url){
        return filter_var($url, FILTER_SANITIZE_ENCODED);
    }
    
    public static function url($url){
        return filter_var($url, FILTER_SANITIZE_URL);
    }
     
} // end of Sanatize class
