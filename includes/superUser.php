<?php
	
require_once('database.php');
require_once('user.php');

// superuser inherits all the functionality of the user class
class SuperUser extends user{

	// function to view all the registered users
	public function showAllUsers(){

	}

	// function to remove a registerd user
	public function removeUser(){

	}
	
}

?>