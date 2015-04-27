<?php;
	include('login_success.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Test</title>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js">
	</script>
	<script>
		$(document).ready(function(){
			document.body.style.background = " url(icecreamball.jpg) no-repeat center";
		});
	</script>
	</head>
	<body>
	<center>
		<p><font face="Geneva, Arial, Helvetica" size="105" color="brown">CalCounter</font></p>
		<p><font color="blue" size="4">Welcome Valued User</font>
		<UL TYPE="square" color="blue">
			<form action="login.php" method="POST"> 

				<p><input style="width: 300px; height:25px" type="text" color="blue" value="" placeholder="Username" name='username' id="location" > 
				</input></p>
				<p><input style="width: 300px;height:25px"  type="password" color="blue" value="" placeholder="Password (minimum 8 characters)"
					id="location" name='userpass'></input></p>
				<p><input style="width:300px; height: 25px" type="text" color="blue" value="" placeholder="Email Address" id="location" color="blue"
				name='usermail' ></input></p>
				<p><input type="submit"></input></p>
				<p><font size="25" color="yellow">Error Please reenter</font></p>
			</form>
				<font face="Geneva, Arial, Helvetica,sans-serif" size="15" color="brown">Basic Calorie</font>
				<font size = "6" color="white"> </font>
				<p><input style="width:500px; height:50px" type="text" size="50" value="" 
					placeholder="TRY-OUT Calcounter by input food names here eg.chicken curry, chicken soup,etc..."
					id="location" onKeydown="if (event.keyCode==13){ url()};" ></input></p>
				<p><font size = "4.5" color="white"></font></p>
				<font size="4"><p id="weather"></p></font>
			<div style="height:122px"></div>
		</center>		
		</UL>
		</center>
		<div style="height:-200px;width:100px"></div>
	</body>
</html>
