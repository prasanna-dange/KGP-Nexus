<?php
	require_once('superuser.php');
	require_once('email.php');
	require_once('database.php');
	class Master extends SuperUser{

		// function to show all normal user on the portal
		public function showAllUser(){

		}

		// function to remove normal users from the portal
		public function deleteUser($email){

		}

		// function to add SuperUser to the portal
		public function addSuperUser(){

		}

		// function to remove superusers from the portal
		public function removeSuperUser($superUserID){

		}

		//function to update the vp's credentials 
		public function updateVPCredential(){

		}

		// function to update Superuser credentials
		public function updateSuperUserCredentials(){

		}
	}
?>