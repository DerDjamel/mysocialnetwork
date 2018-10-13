<?php
class Redirect {
    public static function to($destination){
        header('Location : ' . SITE_URL . '/'. $destination);
        exit();
    }
}

