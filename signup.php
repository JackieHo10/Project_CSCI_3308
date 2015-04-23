<html>
<head>
	<title>Test for Course Listing</title>
</head>
<!--php for the signup page that connect to our mysql database-->
<body>
	<?php
		//connecting to database		
		$dbhost="localhost";
		$dbpassword="Yzz6QBv6PpzeTYY3";
		$dbuser="mql";
		$conn = new mysqli($dbhost,$dbuser,$dbpassword);
		if($conn->connect_error)
		{
			die ("connection error".$conn->error);
		}
		echo "connected<br>";
		//below is the original code that we use to create the file, we preserve it incase we need it to create other database
		/*$sl = "CREATE DATABASE DB_CALCOUNTER";
		if (!$conn->select_db("DB_CALCOUNTER"))
		{
			$conn->query($sl);
			$conn->select_db("DB_CALCOUNTER)");
			echo "new database DB_CALCOUNTER<br>";
		}
		else
		{
			$conn->select_db("DB_CALCOUNTER");
			echo "has database already! DB_CALCOUNTER<br>";
		}*/
		$conn->select_db("DB_CALCOUNTER");
		
		$tbname = "USERLOGIN";
		$username = $_POST["username"];

		$userpas  = $_POST["abc"];
		$usermail = $_POST["email"];
		$secureq  = $_POST["securityq"];
		$securea  = $_POST["securitya"];
		echo "$username<br>";
		echo "$userpas<br>";
		echo "$usermail<br>";
		echo "$secureq<br>";
		echo "$securea<br>";
		//inserting into the databse, checking  if the user info is set
		if(isset($username,$userpas,$usermail,$secureq,$securea))
		{
			$sql = "INSERT INTO USERLOGIN ".
				   "(loginname,loginpass,loginmail,secureq,securea) ".
				   "VALUES ".
				   "('$username','$userpas','$usermail','$secureq','$securea')";
			$result=$conn->query($sql);
			if(!$result)
			{
				die("error inserting".$conn->error);
			}
			echo "successfully inserting";
			$result->free($sql);
		}
		$conn->close();
	?>
</body>
</html>
