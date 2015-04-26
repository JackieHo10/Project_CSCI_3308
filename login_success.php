<? php
	session_start();
	if(!session_is_registered(myusername)){
		header("location:login_html.php");
	}
?>
<html>
<a href="user_main_html.php?username=<?php echo $var_value ?>">user_main_html</a>:
<script>
$(document).ready(function(){
	window.location.replace("http://localhost/Project_CalorieTracker/user_main_html.php");
});
</script>
<body>
</body>
</html>
