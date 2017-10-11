<?php


						$host="mysql.hostinger.ro";
						$username="u245448304_craft";
						$password="pepsi888pepsi";
						$db_name="u245448304_craft";
				
				
						mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
						mysql_select_db("$db_name") or die("Cannot select the database!");
						
						$date = $_REQUEST['time'];
						$user = $_REQUEST['from'];
						
						$sql = "DELETE FROM `guestbook` WHERE date = '$date' and `from` = '$user'";
						 mysql_query($sql);
						 
						 mysql_close();
						 
						 header("location:index.php?menu=guestbook&page=1");



?>