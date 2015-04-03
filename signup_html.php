<!DOCTYPE html>
<html>
  <head>
    <title>Test</title>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js">
    </script>
    <script>
	$(document).ready(function(){
		document.body.style.background = " url(pic.jpg) no-repeat center";
	});
    </script>
    <script>
    $(document).ready(function(){
      document.body.style.background = " url(icecreamball.jpg) no-repeat center";
    });
  </script>
  </head>
  <body>
    <center>
     <UL TYPE="square" color="blue">
      <h3><font face="Geneva, Arial, Helvetica,sans-serif" size="15" color="brown">CalCounter</font></h3>
      <form action="signup.php" method="post">
      <p><font size="6" color="red">SignUp</font></p>
        
        <font size="4">Username:</font>
        <p><input type="text" size="40 10" id="location" value="" placeholder="Username" name="username"></input></p>
        <p><font size = "4.5" color="white"></font></p>
        
        <font size="4">abc:</font>
        <p><input type="text" size="40 10" id="location" value="" placeholder="abc" name="abc"></input></p>
        <p><font size = "4.5" color="white"></font></p>
        
        <font size="4">cde:</font>
        <p><input type="text" size="40 10" id="location" value=""placeholder="s" name="cde" ></input></p>
        <p><font size = "4.5" color="white"></font></p>
        
        <font size="4">Email Address:</font>
        <p><input type="text" size="40 10" id="location" value=""placeholder="Email Address" name="email"></input></p> 
        <p><font size = "4.5" color="white"></font></p>
        
        <font size="4">Security Question:</font>
        <p><input type="text" size="40 10" id="location" value=""placeholder="Security Question" name="securityq" ></input></p>
        <p><font size = "4.5" color="white"></font></p>
        
        <font size="4">Security Answer:</font>
        <p><input type="text" size="40 10" id="location"value="" placeholder="Answer to Your Security Question" name="securitya" ></input></p>
        <p><font size = "4.5" color="white"></font></p>
        <input type="submit"></input>
      
      </form>
     </UL>
   </center>
  </body>
</html>
