<?php
	require_once("user.php");
	$user 	= new User();
	if(isset($_POST['login'])){
		$user->logIn();
	}
	else if(isset($_POST['signUp'])){
		$user->newUser();
	}
	else if(isset($_POST['reset'])){
		$user->resetAccount();
	}
	else{
		header('Location:index.php');
	}
?>