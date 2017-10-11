<?php

			$host="mysql.hostinger.ro";
            $username="u245448304_craft";
            $password="pepsi888pepsi";
            $db_name="u245448304_craft";
			$link = $_REQUEST['down'];
    
    
            mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
            mysql_select_db("$db_name") or die("Cannot select the database!");
			
			$sql = "UPDATE `maps` SET `downloads`=`downloads` + 1 WHERE downloadlink = '".$link."'";
			mysql_query($sql);

	
	
			mysql_close();
	
			header("location:http://$link");
		

?>