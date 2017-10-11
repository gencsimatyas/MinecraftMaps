<?php

function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

?>
<?php

	if (($_POST['myUsername'] != "")&&($_POST['myPassword'] != ""))
		{
			session_start();
			
			$host="mysql.hostinger.ro";
            $username="u245448304_craft";
            $password="pepsi888pepsi";
            $db_name="u245448304_craft";
    
    
            mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
            mysql_select_db("$db_name") or die("Cannot select the database!");
			
			$myUsername=$_POST['myUsername'];
            $myPassword=$_POST['myPassword'];
			
			$sql = "SELECT * FROM `members` WHERE username='$myUsername' and password='".md5($myPassword)."'";
            $result = mysql_query($sql);
			
			$count=mysql_num_rows($result);
			
			 if($count==1)
			 {
            
            $_SESSION['user'] = $myUsername;
			
			$date = time();
			$ip = getRealIpAddr();
			$ip2 = getenv ("REMOTE_ADDR");
			
			$sql2 = "INSERT INTO `log`(`date`, `username`, `ip`, `ip2`) VALUES ('$date','$myUsername','$ip','$ip2')";
			mysql_query($sql2);
			
            header("location:index.php");
            }
            else {
                    echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
                    echo "<p align='center' style='font-size:38px'>Wrong username or password!</p>";
                    echo "<hr/>"; 
                 }
		}
		else
		{
				if (($_POST['myUsername'] == "")&&($_POST['myPassword'] != ""))
				{
				    echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
                    echo "<p align='center' style='font-size:38px'>You didn't  fill the fields!</p>";
                    echo "<hr/>"; 
				}
				else
				if (($_POST['myUsername'] == "")&&($_POST['myPassword'] == ""))
				{
				    echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
                    echo "<p align='center' style='font-size:38px'>You didn't  fill the fields!</p>";
                    echo "<hr/>"; 
				}
				else
				if (($_POST['myUsername'] != "")&&($_POST['myPassword'] == ""))
				{
				    echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>";
                    echo "<p align='center' style='font-size:38px'>You didn't  fill the fields!</p>";
                    echo "<hr/>"; 
				}
			
			
			
			
			mysql_close();

		}
?>