<?php
class Database {
    // get these configs from Config class -LATER-
    private $HOST       = '127.0.0.1'; // PHP7 Don't accept localhost
    private $USER       = 'root';
    private $PASS       = '';
    private $DB_NAME    = 'SocialNetwork';
    //this is an error somehow !
    //private $DNS        = 'mysql:host=' . $this->HOST . ';dbname=' . $this->DB_NAME; 
    
    
    private static $pdo;
    private $pdoStatement;
    private $result;
    private $rowCount;
    private $error;
    
    public function __construct() {
        try{
            if(isset($this->pdo)){
                return $this->pdo;
            } else {
                $dsn = 'mysql:host=' . $this->HOST . ';dbname=' . $this->DB_NAME;
                self::$pdo = new PDO($dsn, $this->USER, $this->PASS, 
                                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
                        );//end of PDO construct
            }
        }catch(PDOException $e){
            // echo the error message
            echo $e->getMessage();
            
        }//end of try catch statement
    } // end of construct
    
    
    public function prepareQuery($query){
        try {
            $this->pdoStatement = self::$pdo->prepare($query);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    
    public function bind($param ,$value){
        $this->pdoStatement->bindValue($param, $value);
    }
    
    public function execute(){
        $this->pdoStatement->execute();
        $this->rowCount     = $this->pdoStatement->rowCount();
        $this->result       = $this->pdoStatement->fetchAll(PDO::FETCH_OBJ);
        $this->pdoStatement->closeCursor();
        return $this->result;
    }
    
    public function getRowCount(){
	return $this->rowCount;
    }
    
    public function getResult(){
	return $this->result;
    }
        
    public function lastInsertId(){
	return self::$pdo->lastInsertId();
    }
    
    //close database connection 
    public function closeConnection(){
        $this->pdoStatement = null;
        self::$pdo          = null;
    }
    
  
} // end of Database class

