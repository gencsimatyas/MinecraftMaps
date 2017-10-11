<table width="978" border="1" align="center" class="tabla" background="Pictures/(.png">
 			<td width="192" align="center" class="iras4">News</td>
  	</table>
    
    <br/>



<?php

						$host2="mysql.hostinger.ro";
						$username2="u245448304_craft";
						$password2="pepsi888pepsi";
						$db_name2="u245448304_craft";
    			
    
           mysql_connect("$host2", "$username2", "$password2") or die("Cannot connect to the mySql database!");
           mysql_select_db("$db_name2") or die("Cannot select the database!");
		   
		   $sql = "SELECT * FROM news ORDER BY time desc";
		   $result = mysql_query($sql);
		   
		   $count = mysql_num_rows($result);
		   
		   if ($count > 0)
		   
		   {
		   
		   session_start();
		   
		   while ($sor = mysql_fetch_array($result))
		   {
			   echo '<p align="center" style="font-size:32px; color:#FFF; ">'.$sor['title'].'</p>';
			   echo '<p align="center" style="font-size:22px; color:#FFF; ">'.$sor['news'].'</p><br/>';
			   if ($_SESSION['user'] == "admin") echo '<p align="right"> <a href="deleteNews.php?tit='.$sor['title'].'" > <img src="Pictures/vendeg.png" width="40" /> </a> </p> <hr/>' ;
			   else echo '<hr/>';
		   }
		   
		   }
		   
		   else
		   {
			   echo '<p align="center" style="font-size:32px; color:#FFF; ">No News!</p>';
		   }
			
			mysql_close();
?>