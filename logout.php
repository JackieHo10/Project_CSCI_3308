<?php
	'''logout php '''
	session_start();
	$_SESSION = array();
	if (ini_get("session.use_cookie")) {
	   $params = session_get_cookie_params();
	   setcookie(session_name(), '', time() -42000,
		$params["path"], $params["domain"],
		$params["secure"], $params["httponly"]
		);
}
session_destroy();
?>
