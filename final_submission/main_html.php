<!DOCTYPE html>
<html>
  <head>
    <title>CalCounter</title>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js">
    </script>
     <!--- set the background-->
     <script>
	$(document).ready(function(){
		document.body.style.background = "#CED8F6 url('icecreamball.jpg') center no-repeat";
	});
    </script>
  
  </head>
  <!--- script below will relocate to login page when clicked-->
  <script>
	function loginpage(){
		window.location.replace("http://localhost/Project_CalorieTracker/login_html.php");
	}
  function signuppage(){
    window.location.replace("http://localhost/Project_CalorieTracker/signup_html.php");
  }
  </script>
  <div style="position: aboslute; top:0;right:100%;width:100%;text-align:left;"><button color="black" size="45" onclick="signuppage();">Sign Up !</button></div>
  <center>
      <div style="height:180px"></div>
      <div style="position: aboslute; top:0;right:40%;width:50%;text-align:left;"><button color="black" size="45" onclick="loginpage();" >User Login !</button></div><font face="Geneva, Arial, Helvetica,sans-serif" size="80" color="brown">CalCounter</font>
      <p><input type="text" size="50 50" id="location" onKeydown="if (event.keyCode==13){ print(input)};" ></input></p>
      <p><font size = "4.5" color="white"></font></p>
      <font size="4"><p id="weather"> </p></font>
      <div style="height:122px"></div>
    </center>
    <div style="height:-100px"></div>
  </body>
</html>
<div style="position: aboslute; top:0;right:100%;width:100%;text-align:right;"><font color="red" size="5">#PZMRJ-Production</font></div>
