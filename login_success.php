<? php
	session_start();
	if(!session_is_registered(myusername)){
		header("location:login_html.php");
	}
?>
<html>
<body>
Login Successful
</body>
</html>