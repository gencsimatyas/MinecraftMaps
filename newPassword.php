<?php

				
						if (($_POST['myPassword'] != "")&&($_POST['newPassword'] != "")&&($_POST['newPassword2'] != "")&&(strlen($_POST['newPassword']) > 5)&&(strlen($_POST['newPassword2']) > 5)&&(strlen($_POST['newPassword']) < 21)&&(strlen($_POST['newPassword2']) < 21))
					{
						session_start();
								
						$host="mysql.hostinger.ro";
						$username="u245448304_craft";
						$password="pepsi888pepsi";
						$db_name="u245448304_craft";
				
				
						mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
						mysql_select_db("$db_name") or die("Cannot select the database!");
						
					
					$myUsername = $_SESSION['user'];
					$myPassword = $_POST['myPassword'];
			
			
					$sql="SELECT * FROM `members` WHERE username='$myUsername' and password='".md5($myPassword)."'";
					$result=mysql_query($sql);
			
					$count=mysql_num_rows($result);
			
					if ($_POST['newPassword'] == $_POST['newPassword2'])
					{
						$newPass = $_POST['newPassword'];
						if($count==1){
						
								$sql2 = "UPDATE `members` SET `password`='".md5($newPass)."' WHERE username= '$myUsername' ";
								if (isset($_POST['submit']))
								{
									mysql_query ($sql2);
								}
								header("location:index.php");
						
						}
						else
						{
							echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
							echo "<p align='center' style='font-size:38px'>Wrong old password!</p>";
							echo "<hr/>"; 
						}
					}
					else
					{
						echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
						echo "<p align='center' style='font-size:38px'>New Passwords don't match!</p>";
						echo "<hr/>"; 
					}
				}
				else
				if(($_POST['newPassword'] == "")&&($_POST['newPassword2'] == "")&&($_POST['myPassword'] == ""))
				
				{
						echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
						echo "<p align='center' style='font-size:38px'>You didn't  fill the fields!</p>";
						echo "<hr/>"; 
				}
				else
				if(($_POST['newPassword'] == "")&&($_POST['newPassword2'] == "")&&($_POST['myPassword'] != ""))
				
				{
						echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
						echo "<p align='center' style='font-size:38px'>You didn't  fill the fields!</p>";
						echo "<hr/>"; 
				}
				else
				if(($_POST['newPassword'] == "")&&($_POST['newPassword2'] != "")&&($_POST['myPassword'] == ""))
				
				{
						echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
						echo "<p align='center' style='font-size:38px'>You didn't  fill the fields!</p>";
						echo "<hr/>"; 
				}
				else
				if(($_POST['newPassword'] != "")&&($_POST['newPassword2'] == "")&&($_POST['myPassword'] == ""))
				
				{
						echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
						echo "<p align='center' style='font-size:38px'>You didn't  fill the fields!</p>";
						echo "<hr/>"; 
				}
				else
				if(($_POST['newPassword'] != "")&&($_POST['newPassword2'] != "")&&($_POST['myPassword'] == ""))
				
				{
						echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
						echo "<p align='center' style='font-size:38px'>You didn't  fill the fields!</p>";
						echo "<hr/>"; 
				}
				else
				if(($_POST['newPassword'] != "")&&($_POST['newPassword2'] == "")&&($_POST['myPassword'] != ""))
				
				{
						echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
						echo "<p align='center' style='font-size:38px'>You didn't  fill the fields!</p>";
						echo "<hr/>"; 
				}
				else
				if(($_POST['newPassword'] == "")&&($_POST['newPassword2'] != "")&&($_POST['myPassword'] != ""))
				
				{
						echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
						echo "<p align='center' style='font-size:38px'>You didn't  fill the fields!</p>";
						echo "<hr/>"; 
				}
				else
				if (($_POST['newPassword'] != "")&&($_POST['myPassword'] != "")&&($_POST['newPassword2'] != "")&&(strlen($_POST['newPassword']) < 5)||(strlen($_POST['newPassword']) > 21)&&(strlen($_POST['newPassword2']) < 5)||(strlen($_POST['newPassword2']) > 21))
				{
						echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
						echo "<p align='center' style='font-size:38px'>New Password too short!</p>";
						echo "<hr/>"; 
				}
				
			?>

