<?php
		
		if ($_SESSION['user'] == "admin")
		{
		
		echo '
		
			<table width="978" border="1" align="center" class="tabla" background="Pictures/(.png">
 					<td width="192" align="center" class="iras4">Users</td>
  			</table>
			
			';
		
						$host2="mysql.hostinger.ro";
						$username2="u245448304_craft";
						$password2="pepsi888pepsi";
						$db_name2="u245448304_craft";
    			
    
           mysql_connect("$host2", "$username2", "$password2") or die("Cannot connect to the mySql database!");
           mysql_select_db("$db_name2") or die("Cannot select the database!");
		   
		   $sql = "SELECT * FROM members ORDER BY regdate desc";
		   $result = mysql_query($sql);
		   $count=mysql_num_rows($result);
		   
		   if ($count > 0)
		   {
		   
		   echo '
		   
		   	<br/>
		   
		   <p align="center" style="color:#FFF; font-size:28px;">Users on the website: '.$count.'</p>
		   <p align="center" style="color:#FFF; font-size:28px;">Users on the website without admin and gencsi2008: '.($count - 2).'</p>
		   
		   
		   	<br/>
		  		 <table align="center" bgcolor="#FFFFFF" border="1" width="600">
				 <tr align="center">
					<td>Username</td>
					<td>Email</td>
					<td>Delete User</td>
				 </tr>
		   
		   ';
		   
		   while ($sor = mysql_fetch_array($result))
		   {
			   echo '
			   
			   			
						<tr align="center">
								<td>'.$sor['username'].'</td>
								<td>'.$sor['email'].'</td>
								<td> <a href="deleteUser.php?user='.$sor['username'].'"> <img src="Pictures/vendeg.png" width="40" /> </a> </td>
						 </tr>
						
			   
			   ';
		   }
		   
		   echo ' </table> ';
		   }
		   else
		   {
			  echo'<p align="center" style="color:#FFF; font-size:28px;">There are no users on the page!</p>';
		   }
		
		mysql_close();
		}
		else header ("location:index.php");
?>