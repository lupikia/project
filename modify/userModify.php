<?php

class User_pasword{

private $user_email;
private $request_type;
private $newPassword;

function _construc(){

	$user_email=$_POST['email'];
	$request_type=$_POST['type'];

//first of all we find what the user is requesting

	if($request_type=="recover"){
		find_email($user_email);

	}
	
	else if($request_type=="rest"){
	
		$newPassword=$_POST['newPassword'];
		password_rest($user_email,$newPassword);
	
	

	}
}


function password_recovery()
	{
	//this function will get the password and email it to the customer


	}

function password_rest()
	{


	}

function find_email($email)
	{

	//mysql statements to find the email in data base64_decode

	password_recovery();


	}





}




?>