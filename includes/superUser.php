<?php
	
require_once('database.php');
require_once('user.php');

// superuser inherits all the functionality of the user class
class SuperUser extends User{

	
	//function to send email notification to the user.
	public function sendEmailNotification(){

	}

	// function to add events in the events database
	public function addEvent(){

	}

	// function to remove an event
	public function removeEvent(){

	}
	
}

?>