<?php
class Validate {
    public static function email($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    
    public static function int($int, $info = array()){
        if(!empty($info)){
            $options = array(
                'options' => array()
            );
            if(isset($info['min'])){ $options['options']['min_range'] = $info['min']; }
            if(isset($info['max'])){ $options['options']['max_range'] = $info['max']; }
            return  filter_var($int, FILTER_VALIDATE_INT, $options);
        }
        return  filter_var($int, FILTER_VALIDATE_INT);
    }
    
    public static function url($url){
        return filter_var($url, FILTER_VALIDATE_URL);
    }

}

