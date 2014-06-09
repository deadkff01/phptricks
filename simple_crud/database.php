<?php

 class Database
{
   private static $dbName = 'simple_crud' ;
    private static $dbHost = 'localhost' ;
    private static $dbUsername = 'root';
    private static $dbUserPassword = '';
	
	private static $conn = null;
	
	public function  __construct()
	{
	die("error to connect with database...");
	}
	
	public static function connect()
	{
	if(null == self::$conn)
	  {
		try
		 {
		self::$conn = new PDO ("mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword );
        echo "<B>Connected...</B><BR>";
		}catch(PDOException $e)
		   {
		
		 die($e->getMessage()); 
		   }
	  }
	  return self::$conn ;
	  
	}
	
	public function disconnect(){
	self::$conn = null;
	}
	
	
}

?>