<!DOCTYPE html>
<html>
	<!-- this is a html code that take login input -->
	<head>
		<title>Test</title>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js">
	</script>
	<!-- Basically the script below is to set a background for the login page, center with no repeat -->
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
			<!--the action below will take the login.php and connect php and html-->
			<form><action="login.php" method="post"> 
				<!--we have inputs and these inputs will be sent to the php and will be stored in our database-->
				<p><input style="width: 300px; height:25px" type="text" color="blue" value="" placeholder="Username" name="username" id="location" > 
				</input></p>
				<p><input style="width: 300px;height:25px"  type="text" color="blue" value="" placeholder="Password (minimum 8 characters)"
					id="location" name="userpass"></input></p>
				<p><input style="width:300px; height: 25px" type="text" color="blue" value="" placeholder="Email Address" id="location" color="blue"
				name="usermail" ></input></p>
				<p><input type="submit"></input></p>
			</form>
				<font face="Geneva, Arial, Helvetica,sans-serif" size="15" color="brown">Basic Calorie</font>
				<font size = "6" color="white"> </font>
				<!--this is a basic demo for our product for customer who doesn't want to login-->
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
