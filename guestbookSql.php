<?php

						$host="mysql.hostinger.ro";
						$username="u245448304_craft";
						$password="pepsi888pepsi";
						$db_name="u245448304_craft";
				
				
						mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
						mysql_select_db("$db_name") or die("Cannot select the database!");
						
						if (isset($_POST['submit']))
						{
							session_start();
							$from = $_SESSION['user'];
							$date = time();
							$subject = $_POST['subject'];
							$message = $_POST['message'];
							
							$sql = "INSERT INTO `guestbook`(`date`, `from`, `subject`, `message`) VALUES ('$date','$from','$subject','$message')";
							mysql_query ($sql);
							
							mysql_close();
							
							header("location:index.php?menu=guestbook&page=1");
						}

?>