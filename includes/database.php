<?php
	
class Database{
	// change these variables before uploading

	// constructer that initializes the connection with the database server
	public function __construct(){
		$DbServer 		= "localhost";
		$DbPassword 	= "";
		$DbUser 		= "root";
		$DbName 	 	= "webportal";
		$con;
		$con = mysql_connect($DbServer,$DbUser,$DbPassword);
		if(!$con){
			die("Failed to connect to database Server. Cause: ".mysql_error());
		}
		$db=mysql_select_db($DbName);
		if(!$db){
			die("Failed to select database. Cause: ".mysql_error());
		}
	}

	// destructor for the database class. It closes the database connection
	public function __destruct(){
		
	}

	// this function is used to perform a database query
	public function performQuery($query){
		//$query 	= mysql_real_escape_string($query);
		$result	= mysql_query($query);
		if(!$result){
			die(mysql_error());
		}
		return $result;
	}

}
?>