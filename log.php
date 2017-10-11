<?php

	if ($_SESSION['user'] == "admin")
		{

		echo '
		
			<table width="978" border="1" align="center" class="tabla" background="Pictures/(.png">
 					<td width="192" align="center" class="iras4">Log</td>
  			</table>
			
			<br/>
			
			<p align="center"> <a href="clearlog.php"> <input name="" type="button" value="Clear Log!" /> </a> </p>
			
		
		';
		
						$host2="mysql.hostinger.ro";
						$username2="u245448304_craft";
						$password2="pepsi888pepsi";
						$db_name2="u245448304_craft";
    			
    
           mysql_connect("$host2", "$username2", "$password2") or die("Cannot connect to the mySql database!");
           mysql_select_db("$db_name2") or die("Cannot select the database!");
		   
		   $sql = "SELECT * FROM log ORDER BY date desc";
		   $result = mysql_query($sql);
		   $count=mysql_num_rows($result);
		   
		   if ($count > 0)
		   {
		   
		   echo '
		   
		   	<br/>
		  		 <table align="center" bgcolor="#FFFFFF" border="1" width="600">
				 <tr align="center">
				 	<td>Date</td>
					<td>Username</td>
					<td>Ip1</td>
					<td>Ip2</td>
				 </tr>
		   
		   ';
		   
		   while ($sor = mysql_fetch_array($result))
		   {
			   echo '
			   
			   			
						<tr align="center">
								<td>'.date("Y.M.D h:i:s",$sor['date']).'</td>
								<td>'.$sor['username'].'</td>
								<td>'.$sor['ip'].'</td>
								<td>'.$sor['ip2'].'</td>
						 </tr>
						
			   
			   ';
		   }
		   
		   echo ' </table> ';
		   }
		   else
		   {
			  echo'<p align="center" style="color:#FFF; font-size:28px;">The Log is empty!</p>';
		   }
		
		mysql_close();
		
		}
		else header ("location:index.php");
?>