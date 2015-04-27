<html>
<head>
	<title>Test for Course Listing</title>
</head>
<body>
	<?php
		
		$dbhost="localhost";
		$dbpassword="Yzz6QBv6PpzeTYY3";
		$dbuser="mql";
		$conn = new mysqli($dbhost,$dbuser,$dbpassword);
		if($conn->connect_error)
		{
			die ("connection error".$conn->error);
		}
		echo "connected<br>";
		/*
		$sl = "CREATE DATABASE DB_CALCOUNTER";
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
		}
		*/
		$conn->select_db("DB_CALCOUNTER");
		
		$tbname = "USERINFO";
		$username = $_POST["username"];

		$userpas  = md5($_POST["password01"]);
		$usermail = $_POST["email"];
		$secureq  = $_POST["securityq"];
		$securea  = $_POST["securitya"];
		echo "$username<br>";
		echo "$userpas<br>";
		echo "$usermail<br>";
		echo "$secureq<br>";
		echo "$securea<br>";
		/*
		if(!($conn->query($tbname)))
		{
			$sl = "CREATE TABLE USERINFO(".
				  "LOGINID INT NOT NULL AUTO_INCREMENT, ".
				  "LOGINNAME VARCHAR(100) NOT NULL, ".
				  "LOGINPASS VARCHAR(300) NOT NULL, ".
				  "LOGINMAIL VARCHAR(100) NOT NULL, ".
				  "SECUREQ VARCHAR(200) NOT NULL, ".
				  "SECUREA VARCHAR(200) NOT NULL, ".
				  "PRIMARY KEY(LOGINID));";
			$result = $conn->query($sl);
			if(!$result)
			{
				die("<br> error creating ".$conn->error);
			}
			echo "<br>succes";
		}*/
		
		if(isset($username,$userpas,$usermail,$secureq,$securea))
		{
			$sql = "INSERT INTO USERINFO ".
				   "(loginname,loginpass,loginmail,secureq,securea) ".
				   "VALUES ".
				   "('$username','$userpas','$usermail','$secureq','$securea')";
			$result=$conn->query($sql);
			if(!$result)
			{
				die("error inserting".$conn->error);
			}
			else {
				header("location:login_html.php");
			}
			$result->free($sql);
		}
		$conn->close();
	?>
</body>
</html>
