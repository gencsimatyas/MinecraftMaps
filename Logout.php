<?php

	session_start();
	session_destroy();
	
	$_SESSION['user'] = "";
	header("location:index.php");

?>