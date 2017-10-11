<?php

	function admin ()
	{
		$user = $_SESSION['user'];
		
		if ($user != "admin")
		{
			header ("location:index.php");
		}
	}


?>