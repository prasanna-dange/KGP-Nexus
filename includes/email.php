<?php
	require_once('database.php');
// this class is used to handle all the email related stuff
class Email{

	private $fromAddress='webmaster@kgpnexus.swgiitkgp.in';

	// function to send email with variable content
	public function sendEmail($to,$subject,$content){
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: <';
		$headers.=$this->fromAddress;
		$headers.='>' . "\r\n"; 	
		//echo 'EMAIL:'.$to.' ';           ;
	    if( mail($to, $subject, $content, $headers)  )  
	    {  
			return true; 
	    } 
	    else 
	    { 
	        return false;
	    }

	}

	public function setFromAddress($address){
		$this->fromAddress 	= $address;
	}

	

}

?>