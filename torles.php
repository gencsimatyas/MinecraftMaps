<?php
session_start();
?>
<?php
                    
	
								
						$host="mysql.hostinger.ro";
						$username="u245448304_craft";
						$password="pepsi888pepsi";
						$db_name="u245448304_craft";
				
				
						mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
						mysql_select_db("$db_name") or die("Cannot select the database!");
			
					$myUsername = $_SESSION['user'];
			
					$sql="DELETE FROM `members` WHERE username = '$myUsername';";
					mysql_query($sql);
					
					session_destroy();
					$_SESSION['user'] = "";
					
					
					header("location:index.php");
					
					mysql_close();
					
?>