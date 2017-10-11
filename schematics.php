<?php

			$host="mysql.hostinger.ro";
            $username="u245448304_craft";
            $password="pepsi888pepsi";
            $db_name="u245448304_craft";
    
    
            mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
            mysql_select_db("$db_name") or die("Cannot select the database!");
			
			$sql2 = "SELECT count(*) as c from `maps` WHERE category = 'sch'"; //atiras
			$result2 = mysql_query($sql2);
			$sor2 = mysql_fetch_array($result2);
			$peroldal = 10; //ertekbeallitas
			$oldalakszama = ceil  ($sor2['c'] / $peroldal);
			$oldal = $_REQUEST['page'] - 1;
			
			$sql = "SELECT  `name`, `description`, `pic`, `size`, `downloadlink`, `downloads`, `author` FROM `maps` WHERE category = 'sch' ORDER BY time desc limit ".$oldal * $peroldal.",".$peroldal; //atiras
			$result = mysql_query($sql);
			
			
			
			
		
			
			echo '<br/><hr/>';
			echo '<p class="iras6">Schematics</p>'; //atiras
			
			echo ' <table align="center" bgcolor="#000"> ';
			echo '<tr align="center"><td align="center"><p style="color:#FFF;">Page</p></td></tr>';
			echo ' <tr> ';
			
			if ($oldal + 1 != 1)
		echo  ' <td align="center"><a href="index.php?menu=categories&amp;amenu=sch&amp;page='.($oldal).'" class="glink">Previous</a></td>';//ai
		
		for ($i = 1; $i <= $oldalakszama; $i++)
		{
			echo ' <td align="center"><a href="index.php?menu=categories&amp;amenu=sch&amp;page='.$i.'"> | '.$i.' | </a></td> ';//ai
		} 
		
		
		
		if ($oldal + 1 != $oldalakszama)
		echo  ' <td align="center"><a href="index.php?menu=categories&amp;amenu=sch&amp;page='.($oldal + 2).'" class="glink">Next</a></td>';//ai
		
		echo '</tr>';
		echo '</table>';
		
		echo '<br/>';
			
			echo '<table border="1" align="center" width="1200">';
			echo '
					
						<tr align="center">
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
					echo '

						<tr align="center">
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