
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
			<p><font size="35"><?php
			session_start();
			$var_value = $_SESSION['username'];
			echo "Welcome {$var_value}";
			?></font></p>
			<div style="height:50px"></div>
			<p><font face="Geneva, Arial, Helvetica" size="105" color="brown">CalCounter</font></p>
			<!-- Put Ray API in here
			
			<input style="width:380px; height:30px" type="text" name="food bar" value= "" placeholder="Enter food here Eg.chicken soup, salad,..." id="location" onKeydown="if (event.keyCode==13){ print(input)};" ></input> 
			<div style="height:-100px"></div>
			<div style="height:100px"></div>
			
			-->
			<button color="black" size="45" style="height=30px;width=500px" onclick="logout();">LOGOUT</button>
		<center>
</html>
<div style="position: aboslute; top:0;right:100%;width:100%;text-align:right;"><font color="red" size="5">#PZMRJ-Production</font></div>
