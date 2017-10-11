<?php

						$host3="mysql.hostinger.ro";
						$username3="u245448304_craft";
						$password3="pepsi888pepsi";
						$db_name3="u245448304_craft";
						
						 mysql_connect("$host3", "$username3", "$password3") or die("Cannot connect to the mySql database!");
            			 mysql_select_db("$db_name3") or die("Cannot select the database!");
						 
						 $map = $_REQUEST['map'];
						 $link = $_REQUEST['link'];
						 $status = "yes";
						 
						 $sql = " UPDATE `submit` SET `status` = '".$status."' WHERE name = '".$map."' and downloadlink = '".$link."' ";
						 mysql_query($sql);
						 
						 mysql_close();
						 
						 header("location:index.php?menu=members&page=1");

?>