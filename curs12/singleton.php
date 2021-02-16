<?php
//https://acs.ase.ro/Media/Default/documents/cts/curs/Curs%20CTS%20%20Design%20Patterns%202016.pdf
class DataBase { 
                  
    private static $conn; 
                  
    private  function __construct() { 
        echo __CLASS__ . " initialize only once \n"; 
    } 
      
    public static function getConnect() { 
        if (!isset(self::$conn)) { 
            self::$conn = new DataBase(); 
        } 
          
        return self::$conn; 
    } 
} 
  
$obj1 = DataBase::getConnect(); 
$obj2 = DataBase::getConnect();

var_dump($obj1);
var_dump($obj2);