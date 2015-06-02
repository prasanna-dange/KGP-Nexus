<?php
	require_once('database.php');
	$hash=$_GET['x'];
	$email=$_GET['email'];
	$query="SELECT * FROM users WHERE active='".$hash."' AND email='".$email."' ";
	$database=new Database();
	$result=$database->performQuery($query);
	if(mysql_num_rows($result)==1){
		$query="UPDATE users SET active='active' WHERE email='".$email."' ";
		$result=$database->performQuery($query);
	}
	else{
		header('Location:index.php');
	}
?>