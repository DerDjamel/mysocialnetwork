<?php
define('ROOT_PATH', __DIR__); // in windows => C:\xampp\htdocs\mysocialnetwork\private 
define('SITE_URL', 'http://localhost/mysocialnetwork');

spl_autoload_register(function ($className) {
      require_once 'core/'. $className . '.php';
 });