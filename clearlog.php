<?php

	
						$host2="mysql.hostinger.ro";
						$username2="u245448304_craft";
						$password2="pepsi888pepsi";
						$db_name2="u245448304_craft";
    			
    
           mysql_connect("$host2", "$username2", "$password2") or die("Cannot connect to the mySql database!");
           mysql_select_db("$db_name2") or die("Cannot select the database!");
		   
		   
		   $sql = "DELETE FROM `log`";
		   mysql_query($sql);
		   
		   mysql_close();
		   header("location:index.php?menu=admin&almenu=log");

?>