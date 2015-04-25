<? php
	session_start();
	$err = '';
	if(!session_is_registered(myusername)){
		header("location:login_html.php");
	}
?>
<html>
<script>
$(document).ready(function(){
	window.location.replace("http://localhost/Project_CalorieTracker/user_main_html.php");
});
</script>
<body>
</body>
</html>
