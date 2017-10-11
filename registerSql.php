<?php

	

	$myUsername = $_POST['myUsername'];
	$myPassword1 = $_POST['myPassword1'];
	$myPassword2 = $_POST['myPassword2'];
	$email = $_POST['email'];

	
	if (($myUsername != "")&&($myPassword1 != "")&&($myPassword2 != "")&&($email != "")&&(strlen($myUsername)>5)&&(strlen($myUsername)<21)&&(strlen($myPassword1)>5)&&(strlen($myPassword1)<21)&&(strlen($email)<31)&&(strlen($email)>7))
	 {
		if ($myPassword1 == $myPassword2)
		{
			$host="mysql.hostinger.ro";
            $username="u245448304_craft";
            $password="pepsi888pepsi";
            $db_name="u245448304_craft";
    
    
            mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
            mysql_select_db("$db_name") or die("Cannot select the database!");
			
			$sql = "SELECT `username` FROM `members`";
			$result = mysql_query($sql);
			
			$usernameExists = '0';
				while ($dbUsername = mysql_fetch_array($result))
				{
					if ($dbUsername['username'] == $myUsername)
					{
						$usernameExists = '1';
					}
				}
			
				if ($usernameExists == '0')
				{
					$sql = "INSERT INTO `members`(`regdate`,`id`, `username`, `password`, `email`) VALUES ('".time()."',0 ,'$myUsername', md5('$myPassword1'), '$email');";
					mysql_query($sql);
					header("location:index.php?menu=login");
				}
				else
				{
					echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
					echo "<p align='center' style='font-size:38px'>This username already exists! Please choose another one.</p>";
					echo "<hr/>";
				}
					mysql_close();
		}
		else
		{
					echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
					echo "<p align='center' style='font-size:38px'>The passwords do not match!</p>";
					echo "<hr/>";
		}
		
	 }
	 else
	 {
		
			 
		 if (($myUsername == "")&&($myPassword1 == "")&&($myPassword2 == "")&&($email == ""))
		 {
			 echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
			 echo "<p align='center' style='font-size:38px'>You didn't fill in a required field!</p>";
			 echo "<hr/>";
		 }
			else
			 if (($myUsername == "")&&($myPassword1 != "")&&($myPassword2 != "")&&($email != ""))
			 {
				 echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
				 echo "<p align='center' style='font-size:38px'>You didn't fill in a required field!</p>";
				 echo "<hr/>";
			 }
			else
			 if (($myUsername != "")&&($email != "")&&($myPassword1 == "")||($myPassword2 == ""))
			 {
				 echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
				 echo "<p align='center' style='font-size:38px'>You didn't fill in a required field!</p>";
				 echo "<hr/>";
			 }
			 else
			 if (($myUsername != "")&&($myPassword1 != "")&&($myPassword2 != "")&&($email == ""))
			 {
				 echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
				 echo "<p align='center' style='font-size:38px'>You didn't fill in a required field!</p>";
				 echo "<hr/>";
			 }
			 else
			 if (($myUsername != "")&&(strlen($myUsername)<5)||(strlen($myUsername)>21))
			 {
				 echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
				 echo "<p align='center' style='font-size:38px'>Username too short!</p>";
				 echo "<hr/>";
				 
			 }
			 else
			 if (($myPassword1 != "")&&(strlen($myPassword1)<5)||(strlen($myPassword1)>21))
			 {
				 echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
				 echo "<p align='center' style='font-size:38px'>Password too short!</p>";
				 echo "<hr/>";
			 }
			 else
			 if (($email != "")&&(strlen($email)>31)||(strlen($email)<7))
			 {
				 echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
				 echo "<p align='center' style='font-size:38px'>E-mail too short!</p>";
				 echo "<hr/>"; 
			 }
			 
			
		 
	 }
	 
	
?>

</body>

</html>