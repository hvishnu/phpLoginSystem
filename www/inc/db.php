<?php


  
class db{
  
    protected static $con;
    private function __construct(){
        
        try{
        
          self::$con= new  PDO('mysql:charset=utf8mb4;host:localhost;dbname=php_login;','vishnu','123456789');
          

        self::$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
          self::$con->setAttribute(PDO::ATTR_PERSISTENT,false);
          
        }
        catch(PDOException $e){
            echo "connection failed".$e->getMessage();
        }
        
    }
        
        public static function getConnection (){
            
            if(!self::$con){
                new db();
            }
            
            return self::$con;
            
        }
    }
    



?>