<?php
	include('login_success.php');
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
	$username=$_POST['username'];
	$userpass=md5($_POST['userpass']);
	if (isset($_POST['usermail']))
	{
		$usermail=stripslashes($_POST['usermail']);
	}
	
	$username=$conn->real_escape_string($username);
	$userpass=$conn->real_escape_string($userpass);
	$usermail=$conn->real_escape_string($usermail);
	echo "{$userpass} <br>";

	#-------------------------------------------------
	#"SELECT loginname,loginpass,loginmail FROM userlogin WHERE loginname='" . $username . "' AND loginpass='" . $userpass . "' AND loginmail='" . $usermail . "';";
	$sql="SELECT * FROM USERINFO WHERE loginname='$username' && loginpass='$userpass' && loginmail='$usermail';";
	//$sql="SELECT * FROM userlogin;";
	echo $sql;
	$result = $conn->query($sql);
	$count = $result->num_rows;

	echo $count;

	if ($count == 1)
	{
		//session_register($username);
		//session_register($userpass);
		//session_register($usermail);
		session_start();
		$_SESSION['username']= $username;
		header("location:user_main_html.php");
	}
	else {
		$err = "Invalid username or password";
		header("location:login_html_error_password.php");
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
