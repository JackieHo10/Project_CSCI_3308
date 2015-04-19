<?php
	'''we are checking our connection to the database and we try to pull our information based on user input'''
	$dbhost="localhost";
	$dbuser="mql";
	$dbpassword="Yzz6QBv6PpzeTYY3";

	$conn = new mysqli($dbhost,$dbuser,$dbpassword);
	if($conn->connect_error)
	{
		die ("connection error unable to link".$conn->error);
	}

	$db = "db_calcounter";
	$conn->select_db($db);
	#protecting mysql injection--------------------
	$username=stripslashes($_POST["username"]);
	$userpass=stripslashes($_POST["userpass"]);
	$usermail=stripslashes($_POST["usermail"]);
	$username=$conn->real_escape_string($username);
	$userpass=$conn->real_escape_string($userpass);
	$usermail=$conn->real_escape_string($usermail);

	#-------------------------------------------------

	$sql="SELECT * FROM USERLOGIN WHERE LOGINNAME=$username AND LOGINPASS=$userpass AND LOGINMAIL=$usermail";
	$result = $conn->query($sql);
	

	$count = $result->num_rows;
	'''if it is correct then login success.php else we want the user to reenter password'''	
	if($count == 1)
	{
		session_register($username);
		session_register($userpass);
		session_register($usermail);
		header("location:login_success.php");
	}
	else{
		echo "WRONG USERNAME OR PASSWORD OR EMAIL ADDRESS! PLEASE REENTER";
	}
	$result->free($sql);
	$conn->close();

	/*
	$dbuser="mql";
	$dbhost="localhost";
	$dbpassword="Yzz6QBv6PpzeTYY3";

	$conn = new mysqli("$dbuser,$dbhost,$dbpassword");
	if(!$conn)
	{
		die ("connection errors unable to link {$dbuser}".$conn->error);
	}

	$dblogin="user_info";
	$conn->select_db("user_info");
	$username=$_POST["username"];
	$userpass=$_POST["userpass"];
	$usermail=$_POST["useremail"];
	$sl = "SELECT User_Name,Password,Email FROM user_info WHERE User_Name='$username' AND Password='$userpassword' AND Email='$usermail'"; 
	$bool = $conn->query($sl);
	if(!$bool)
	{
		die ("Sorry please Re-Enter Your Login Info").$conn->error;
	}
	echo "Directing Your Entry.....";
	*/
?>
