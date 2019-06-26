<?php 
	if(!isset($_SESSION)) {
		session_start();
	}
	if(isset($_SESSION)) {
		session_destroy();
		header("location: ../login.php");
	}
	else {
		header("location: ../login.php");
	}

?>