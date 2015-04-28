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
<center>
<div style="height:20px"></div>
<div style="position: aboslute; top:0;right:40%;width:50%;text-align:left;">
</div><font face="Geneva, Arial, Helvetica,sans-serif" size="80" color="brown">CalCounter</font>
<div style="height:20px"></div>
<p><button style="height: 30px; width: 500px" color="black" size="45" onclick="signuppage();">Sign Up !</button></p>   
<button style="height: 30px; width: 500px" color="black" size="45" onclick="loginpage();" >User Login !</button>
<p><font size = "4.5" color="white"></font></p>
<font size="4"><p id="weather"> </p></font>
<div style="height:20px"></div>
</center>
</body>
<center>
<video width="500" height="200" controls>
<source src="CalCounter.mp4" type="video/mp4">
</video>
</center>
</html>
<div style="position: aboslute; top:0;right:100%;width:100%;text-align:right;"><font color="red" size="5">#PZMRJ-Production</font></div>
