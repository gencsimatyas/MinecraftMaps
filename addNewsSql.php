<?php

		if ($_SESSION['user'] == "admin")
		{
		
						$host2="mysql.hostinger.ro";
						$username2="u245448304_craft";
						$password2="pepsi888pepsi";
						$db_name2="u245448304_craft";
    			
    
           mysql_connect("$host2", "$username2", "$password2") or die("Cannot connect to the mySql database!");
           mysql_select_db("$db_name2") or die("Cannot select the database!");
		   
		   $title = $_REQUEST['title'];
		   $new = $_REQUEST['news'];
		   
		   $sql = " INSERT INTO `news`(`time`, `title`, `news`) VALUES ('".time()."' ,'".$title."', '".$new."' ) ";
		   mysql_query($sql);
		   
		   mysql_close();
		   
		   header("location:index.php?menu=news");
		   
		   }
		else header ("location:index.php");

?>