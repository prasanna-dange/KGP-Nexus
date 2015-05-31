<?php
	
require_once('email.php');
require_once('database.php');

class User{

	// constructer for the user class
	public function __construct(){
		session_start();
		//echo " User object created.<br/>";
	}

	// this function is used to register a new user
	public function newUser(){
		$username = strtoupper($_POST['username']);
		$password = $_POST['password'];
		$email 	  = $_POST['email'];
		$fname 	  = strtoupper($_POST['fname']);
		$lname 	  = strtoupper($_POST['lname']);
		$result	  = $this->checkUser($username,$password);
		if(!isset($result)){
			$query="INSERT INTO users VALUES ( '".$username."','".$password."','".$fname."','".$lname."','".$email."','' )";
			$database = new Database();
			$result=$database->performQuery($query);
			if(!$result){
				die("3".mysql_error());
			}
			else{
				$this->logIn();
			}
		}
		else if(mysql_num_rows($result)==1){
			echo 2;
		}
	}

	// function to check if a user is already registered or not
	function checkUser($username,$password){		
		$query=" SELECT * FROM users WHERE rollNumber='".$username."' AND password='".$password."' ";
		$database = new Database();
		$result=$database->performQuery($query);
		$num=mysql_num_rows($result);
		if($num==1){
			echo 1;
			return $result;
		}
		else{
			echo 0;
			//echo $result;
		}
	}

	// function to login the user
	public function logIn(){
		$username=strtoupper($_POST['username']);
		$password=$_POST['password'];	
		$result=$this->checkUser($username,$password);
		if($result){
			//echo "successful login";
			$row=mysql_fetch_array($result);
			$_SESSION['username']=$username;
			$_SESSION['userId']=$row['userID'];
			$_SESSION['firstName']=$row['firstName'];
			$_SESSION['lastName']=$row['lastName'];
			$_SESSION['email']=$row['email'];
		}
	}

	// function to log the user out
	public function logOut(){
		session_start();
		$_SESSION=array();
		if(isset($_COOKIE[session_name()])){
			setcookie(session_name,'',time()-4200);
		}
		session_destroy();
		header('Location:index.php');

	}

	// function to send verification email to the new user
	private function verifyEmail(){

	}

	//function to send email notification to the user.
	public function sendEmailNotification(){

	}

	// function to authenticate a user
	public function authenticate(){

	}

	//function in case user forgets password
	public function resetAccount(){
		$email=$_POST['email'];
		$query="SELECT * FROM users WHERE email='".$email."' ";
		$database = new Database();
		$result=$database->performQuery($query);
		if(mysql_num_rows($result)!=1){
			echo "25";
		}
		else{
			echo "24";
			$this->sendResetEmail($email);
		}
	}

	// function to send the account reset email to the user
	private function sendResetEmail($email){

	}

}

?>