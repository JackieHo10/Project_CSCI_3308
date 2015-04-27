

<!DOCTYPE html> 
<html>
     <head>
     	
	<!-- this a main page for user after login into our website-->
		
		<script>
		$(document).ready(function(){
			document.body.style.background = " url(icecreamball.jpg) no-repeat center";
		});
		function logout(){
			var x;
			if (confirm("Do You Want to Logout")){
				window.location.replace("login_html.php");
			}
			else {
				window.location.replace("user_main_html.php");
			}
			
		}
	</script>
		<center>
			<p><font size="35" color="blue"><?php
			session_start();
			$var_value = $_SESSION['username'];
			echo "Welcome {$var_value}";
			?></font></p>
			<div style="height:30px"></div>
			<p><font face="Geneva, Arial, Helvetica" size="105" color="brown">CalCounter</font></p>
			<!-- Put Ray API in here   -->
			<center>
				<script src="http://platform.fatsecret.com/js?key=8e6d9c349428497d93b054d131d67bb7&auto_load=true"></script>

				<!--<div style="height:200px"></div>
				<input style="width:380px; height:30px" type="text" name="food bar" value= "" placeholder="Enter food here Eg.chicken soup, salad,..." id="location" onKeydown="if (event.keyCode==13){ print(input)};" ></input> 
				<div style="height:-100px"></div>-->
			<center>
			
			<div style="height:150px"></div>		
			<button color="black" size="45" style="height=30px;width=500px" onclick="logout();">LOGOUT</button>
		<center>
</html>
<div style="position: aboslute; top:0;right:100%;width:100%;text-align:right;"><font color="red" size="5">#PZMRJ-Production</font></div>
