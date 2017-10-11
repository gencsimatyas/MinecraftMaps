<?php

			$host="mysql.hostinger.ro";
            $username="u245448304_craft";
            $password="pepsi888pepsi";
            $db_name="u245448304_craft";
    
    
            mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
            mysql_select_db("$db_name") or die("Cannot select the database!");
			
			
			$sql = "SELECT  `category` ,`name`, `description`, `pic`, `size`, `downloadlink`, `downloads`, `author` FROM `maps` ORDER BY downloads desc limit 1, 10";
			$result = mysql_query($sql);
			
			
			
			
		
			
			echo '<br/><hr/>';
			echo '<p class="iras6">Hot Maps</p>'; //atiras
		
		
		echo '<br/>';
			
			echo '<table border="1" align="center" width="1200">';
			echo '
					
						<tr align="center">
							<td style="font-size:20px; color:#FFF;" >Category</td>
							<td style="font-size:20px; color:#FFF;" >Name</td>
							<td style="font-size:20px; color:#FFF;">Description</td>
							<td style="font-size:20px; color:#FFF;">Picture</td>
							<td style="font-size:20px; color:#FFF;">Size</td>
							<td style="font-size:20px; color:#FFF;">Download</td>
							<td style="font-size:20px; color:#FFF;">Downloads</td>
							<td style="font-size:20px; color:#FFF;">Author</td>
						</tr>
					
					';	
			
			while ($sor = mysql_fetch_array($result))
			{
				switch ($sor['category'])
				{
					case 'creation': $cat = "Creation Map";break;
					case 'adventure': $cat = "Adventure Map";break;
					case 'survival': $cat = "Survival Map";break;
					case 'puzzle': $cat = "Puzzle Map";break;
					case 'game': $cat = "Game Map";break;
					case 'parkour': $cat = "Parkour Map";break;
				}
					echo '

						<tr align="center">
							<td style="font-size:20px; color:#FFF;">'.$cat.'</td>
							<td style="font-size:20px; color:#FFF;">'.$sor['name'].'</td>
							<td style="font-size:20px; color:#FFF;"> <a href="description.php?desc='.$sor['description'].'" target="new" style="color:#FFF;"> Click Here for Description! </a> </td>
							<td style="font-size:20px; color:#FFF;"><a href="'.$sor['pic'].'" target="new"><img src="'.$sor['pic'].'" width="200" /></a></td>
							<td style="font-size:20px; color:#FFF;">'.$sor['size'].'</td>
							<td style="font-size:20px; color:#FFF;"> <a href="download.php?down='.$sor['downloadlink'].'" target="new"> Download </a> </td>
							<td style="font-size:20px; color:#FFF;">'.$sor['downloads'].'</td>
							<td style="font-size:20px; color:#FFF;">'.$sor['author'].'</td>
						</tr>
					
					';	
			}
			
			echo '</table>';
			
			
			
			mysql_close();

?>