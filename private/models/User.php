<?php
class User {
    private $DB; 
    public function __construct() {
        $this->DB = new Database();
    }
    
    public static function getUser($email, $password){
        $this->DB->prepareQuery("SELECT * FROM USERS WHERE U_EMAIL = :email AND U_PASSWORD = :password");
        $this->DB->bind(':email', $email);
        $this->DB->bind(':password', $password);
        $this->DB->execute();
        
        if(!($this->DB->getRowCount() > 0)){
            return false;
        }
        return $this->DB->getResult()[0];
    }
    
    
}

