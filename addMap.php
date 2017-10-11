<?php

						if ($_SESSION['user'] == "admin")
						{
							$kategoria = $_POST['kategoria'];
							$mapname = $_POST['mapname'];
							$description = $_POST['desc'];
							$size = $_POST['size']." ".$_POST['meret'];
							$link = $_POST['link'];
							$author = $_POST['author'];
							
							$paths= "pics";
							 
							$filep=$_FILES['userfile']['tmp_name'];
							 
							$ftp_server= "minecraftmaps.p.ht";
							 
							$ftp_user_name= "u245448304";
							 
							$ftp_user_pass= "pepsi888pepsi";
							 
							$name=$_FILES['userfile']['name'];
							
							
						$conn_id = ftp_connect($ftp_server);
						$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
						 
						 
						$upload = ftp_put($conn_id, $paths.'/'.$name, $filep, FTP_BINARY);

						 ftp_close($conn_id);
						 
						 $kep = "pics/".$name;
						 
						
						
						
						$host="mysql.hostinger.ro";
						$username="u245448304_craft";
						$password="pepsi888pepsi";
						$db_name="u245448304_craft";
				
				
						mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
						mysql_select_db("$db_name") or die("Cannot select the database!");
						
						$sql = "
							
							INSERT INTO `maps`(`time`, `category`, `name`, `description`, `pic`, `size`, `downloadlink`, `downloads`, `author`) VALUES ('".time()."','$kategoria','$mapname','$description','$kep','$size','$link',0,'$author');
							
							";
							mysql_query ($sql);
							
							mysql_close();
							
							header("location:index.php?menu=members");
							
							
							
						}
						else header ("location:index.php");
?>