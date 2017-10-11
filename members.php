

<table width="978" border="1" align="center" class="tabla" background="Pictures/(.png">

 			<td width="192" align="center" class="iras4">Members</td>

  	</table>
    
    
      
    
     <br /><br /><br/>

	<?php
	
		session_start();
		
		if ($_SESSION['user'] == "")   //NON-USER
		echo '
		
			<p align="center"> <img src="Pictures/tumblr_mioh8uh1wa1rpm29co2_400.gif" / > </p>
		
			<p style="text-align:center; color:#FFF; font-size:22px;"> Hello Guest! Read the informations about the website, in the About category! </p>
			<br/><hr/><br/>
               
				';
				
				
				if ($_SESSION['user'] == "admin")  //ADMIN
				{
					

				echo'
					
					<p align="center" style="color:#FFF; font-size:28px;">Upload a Map!</p>
					
					<table align="center" background="pics/minecraft_background___grass___by_jabjabjab-d30egxg.png" border="1">
            		<tr><td>
                    	<table align="center" background="pics/minecraft_background___grass___by_jabjabjab-d30egxg.png" border="0">
                        	<form action="addMap.php" method="post" enctype="multipart/form-data">
                        	<tr>
                            	<td colspan="3" align="center"><strong>Add a new map!</strong></td>
                        	</tr>
                            
                            <tr>
                            	<td>Category: </td>
                                <td><select name="kategoria">
									  <option value="">Select...</option>
                                      <option value="adventure">Adventure Map</option>
                                      <option value="survival">Survival Map</option>
                                      <option value="puzzle">Puzzle Map</option>
                                      <option value="parkour">Parkour Map</option>
                                      <option value="creation">Creation Map</option>
                                      <option value="game">Game Map</option>
									  <option value="sch">Schematics</option>
                                      </select>
                                </td>
                            </tr>
                            
                            <tr>
                            	<td>Name: </td>
                                <td><input name="mapname" type="text"  /></td>
                            </tr>
                            
                            <tr>
                            	<td>Description: </td>
                                <td><textarea name="desc" cols="40" rows="10"></textarea></td>
                            </tr>
                            <tr>
                            	<td>Picture: </td>
                                <td><input name="userfile" type="file"/></td>
                            </tr>
                            <tr>
                            	<td>Size: </td>
                                <td> <input name="size" type="text" /> 
                                     
                                    		  <select name="meret">
                                              <option value="">Select...</option>
											  <option value="Byte">Byte</option>
                                              <option value="KB">KB</option>
                                              <option value="MB">MB</option>
                                              <option value="GB">GB</option>
                                              </select>
                                    </td>
                            </tr>
                            <tr>
                            	<td>Download Link: </td>
                                <td><input name="link" type="text" /></td>
                            </tr>
                            <tr>
                            	<td>Author Name: </td>
                           		<td><input name="author" type="text" /></td>
                            </tr>
                            <tr>
                            	<td colspan="3" align="center"><input name="submit" type="submit" value="Upload!" /></td>
                            </tr>
                        </form>
                        </table>
                        </td></tr>
                    </table>
					
					
					
					
					
					';
					
					
					//SUBMIT TABLE
					
						$host2="mysql.hostinger.ro";
						$username2="u245448304_craft";
						$password2="pepsi888pepsi";
						$db_name2="u245448304_craft";
    		
			echo '<br/><hr/>';		
    
           mysql_connect("$host2", "$username2", "$password2") or die("Cannot connect to the mySql database!");
           mysql_select_db("$db_name2") or die("Cannot select the database!");
			
			$sql2 = "SELECT count(*) as c from `submit` WHERE status = 'no' ";
			$result2 = mysql_query($sql2);
			$sor2 = mysql_fetch_array($result2);

			$peroldal = 5;

			
			$oldalakszama = ceil  ($sor2['c'] / $peroldal);
			$oldal = $_REQUEST['page'] - 1;
			
			mysql_close();
			?>
            <?php
						$host="mysql.hostinger.ro";
						$username="u245448304_craft";
						$password="pepsi888pepsi";
						$db_name="u245448304_craft";
						
						 mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
            			 mysql_select_db("$db_name") or die("Cannot select the database!");
			
			
			
			$sql = "SELECT  `username`, `category`,`name`, `description`, `pic`, `size`, `downloadlink`,  `authors` FROM `submit` WHERE status = 'no' ";
			$result = mysql_query($sql);
			$count=mysql_num_rows($result);
			
			mysql_close();
			
						$host3="mysql.hostinger.ro";
						$username3="u245448304_craft";
						$password3="pepsi888pepsi";
						$db_name3="u245448304_craft";
						
						 mysql_connect("$host3", "$username3", "$password3") or die("Cannot connect to the mySql database!");
            			 mysql_select_db("$db_name3") or die("Cannot select the database!");
			
			$sql5 = "SELECT  `username`, `category`,`name`, `description`, `pic`, `size`, `downloadlink`,  `authors` FROM `submit` WHERE status = 'no' limit " .($oldal * $peroldal).",".$peroldal;
			$result5 = mysql_query($sql5);
		
			
			echo '<br/>';
		
			if ($count > 0)
			{
				
				
				
					echo '<p align="center" style="color:#FFF; font-size:28px;">Maps waiting for upload!</p>';
					
					
		echo ' <table align="center" bgcolor="#FFFFFF"> ';
			echo '<tr><td align="center">Page</td></tr>';
			echo ' <tr> ';
			
			if ($oldal + 1 != 1)
		echo  ' <td align="center"><a href="index.php?menu=members&amp;page='.($oldal).'">Previous</a></td>';
		
		for ($i = 1; $i <= $oldalakszama; $i++)
		{
			echo ' <td align="center"><a href="index.php?menu=members&amp;page='.$i.'">'.$i.'</a></td> ';
		} 
		
		
		
		if ($oldal + 1 != $oldalakszama)
		echo  ' <td align="center"><a href="index.php?menu=members&amp;page='.($oldal + 2).'">Next</a></td>';
		
		echo '</tr>';
		echo '</table>';
		
		
		echo '<br/>';
			
			echo '<table border="1" align="center" width="1200">';
			echo '
					
						<tr align="center">
							<td style="font-size:20px; color:#FFF;" >Username</td>
							<td style="font-size:20px; color:#FFF;" >Category</td>
							<td style="font-size:20px; color:#FFF;" >Name</td>
							<td style="font-size:20px; color:#FFF;">Description</td>
							<td style="font-size:20px; color:#FFF;">Picture</td>
							<td style="font-size:20px; color:#FFF;">Size</td>
							<td style="font-size:20px; color:#FFF;">Download</td>
							<td style="font-size:20px; color:#FFF;">Author</td>
							<td style="font-size:20px; color:#FFF;">Uploaded!</td>
						</tr>
					
					';	
			
			while ($sor = mysql_fetch_array($result5))
			{
					echo '

						<tr align="center">
							<td style="font-size:20px; color:#FFF;">'.$sor['username'].'</td>
							<td style="font-size:20px; color:#FFF;">'.$sor['category'].'</td>
							<td style="font-size:20px; color:#FFF;">'.$sor['name'].'</td>
							<td style="font-size:20px; color:#FFF;"> <a href="description.php?desc='.$sor['description'].'" target="new" style="color:#FFF;"> Click Here for Description! </a> </td>
							<td style="font-size:20px; color:#FFF;"><a href="'.$sor['pic'].'" target="new"><img src="'.$sor['pic'].'" width="200" /></a></td>
							<td style="font-size:20px; color:#FFF;">'.$sor['size'].'</td>
							<td style="font-size:20px; color:#FFF;">'.$sor['downloadlink'].'</td>
							<td style="font-size:20px; color:#FFF;">'.$sor['authors'].'</td>
							<td> <a href="uploaded.php?map='.$sor['name'].'&amp;link='.$sor['downloadlink'].'"> <img src="Pictures/ok.png" width="40"/> </a> </td>
						</tr>
					
					';	
			}
			
			echo '</table>';
			
			}
			else
			{
				echo '<p align="center" style="color:#FFF; font-size:28px;">There are no user submitted maps!</p>';

			}
			
			echo '<br/><hr/>';
			
			
			
			mysql_close();
					
				}
				
				//FELHASZNÁLÓKNAK
				
				if (($_SESSION['user'] != "")&&($_SESSION['user'] != "admin"))
				{
					
					echo '
					
					<p align="center"> <img src="Pictures/tumblr_mj160gJ9bm1rpm29co2_400.gif" /> </p>
					
					<p align="center" style="color:#FFF; font-size:28px;">Submit Your Map!</p>
					
				
					
					<p align="center" style="color:#FFF; font-size:28px;"><u>Map uploading</u></p>
					<p align="center" style="color:#FFF; font-size:20px;">1. Select your maps Category.</p>
					<p align="center" style="color:#FFF; font-size:20px;">2. Type your maps name.</p>
					<p align="center" style="color:#FFF; font-size:20px;">3. Write a short description about your map.</p>
					<p align="center" style="color:#FFF; font-size:20px;">4. Make a screenshot of your map, and upload it. (using the browse button)</p>
					<p align="center" style="color:#FFF; font-size:20px;">5. Type your maps size, and select the type. (not the compressed file size!)</p>
					<p align="center" style="color:#FFF; font-size:20px;">6. Compress your map folder. (*.rar,*.zip...)</p>
					<p align="center" style="color:#FFF; font-size:20px;">7. Upload the compressed file (*.rar,*.zip...) to a file sharing website. (eg <a href="http://www.mediafire.com/" target="new">MediaFire</a> )</p>
					<p align="center" style="color:#FFF; font-size:20px;">8. Copy your file link, and paste it to the Download Link field.</p>
					<p align="center" style="color:#FFF; font-size:20px;">9. Type the author name.</p>
					<p align="center" style="color:#FFF; font-size:20px;">10. Press the Submit button.</p>
					
					<table align="center" background="pics/minecraft_background___grass___by_jabjabjab-d30egxg.png" border="1">
            		<tr><td>
                    	<table align="center" background="pics/minecraft_background___grass___by_jabjabjab-d30egxg.png" border="0">
                        	<form action="submit.php" method="post" enctype="multipart/form-data">
                        	<tr>
                            	<td colspan="3" align="center"><strong>Submit Your Map!</strong></td>
                        	</tr>
                            
                            <tr>
                            	<td>Category: </td>
                                <td><select name="kategoria">
									  <option value="">Select...</option>
                                      <option value="adventure">Adventure Map</option>
                                      <option value="survival">Survival Map</option>
                                      <option value="puzzle">Puzzle Map</option>
                                      <option value="parkour">Parkour Map</option>
                                      <option value="creation">Creation Map</option>
                                      <option value="game">Game Map</option>
                                      </select>
                                </td>
                            </tr>
                            
                            <tr>
                            	<td>Name: </td>
                                <td><input name="mapname" type="text"  /></td>
                            </tr>
                            
                            <tr>
                            	<td>Description: </td>
                                <td><textarea name="desc" cols="40" rows="10"></textarea></td>
                            </tr>
                            <tr>
                            	<td>Picture: </td>
                                <td><input name="userfile" type="file"/></td>
                            </tr>
                            <tr>
                            	<td>Size: </td>
                                <td> <input name="size" type="text" /> 
                                     
                                    		  <select name="meret">
                                              <option value="">Select...</option>
                                              <option value="KB">KB</option>
                                              <option value="MB">MB</option>
                                              <option value="GB">GB</option>
                                              </select>
                                    </td>
                            </tr>
                            <tr>
                            	<td>Download Link: </td>
                                <td><input name="link" type="text" /></td>
                            </tr>
                            <tr>
                            	<td>Author Name: </td>
                           		<td><input name="author" type="text" /></td>
                            </tr>
                            <tr>
                            	<td colspan="3" align="center"><input name="submit" type="submit" value="Submit!" /></td>
                            </tr>
                        </form>
                        </table>
                        </td></tr>
                    </table>
					
					<br/>
					
					<p align="center" style="color:#FFF; font-size:28px;"><u>Submitted Maps</u></p>
					
					';
					
						$host3="mysql.hostinger.ro";
						$username3="u245448304_craft";
						$password3="pepsi888pepsi";
						$db_name3="u245448304_craft";
						
						 mysql_connect("$host3", "$username3", "$password3") or die("Cannot connect to the mySql database!");
            			 mysql_select_db("$db_name3") or die("Cannot select the database!");
						 
			$user = $_SESSION['user'];
			
			$sql6 = "SELECT  `category`, `name`, `description`, `pic`, `size`, `downloadlink`,  `authors`, `status` FROM `submit` WHERE `username` = '".$user."' " ;
			$result6 = mysql_query($sql6);
			
			$count2 = mysql_num_rows($result6);
			
			echo '<br/>';
		
			if ($count2 > 0)
			{
					
					echo '<table border="1" align="center" width="1300">';
			echo '
					
						<tr align="center">
							<td style="font-size:20px; color:#FFF;" >Category</td>
							<td style="font-size:20px; color:#FFF;" >Name</td>
							<td style="font-size:20px; color:#FFF;">Description</td>
							<td style="font-size:20px; color:#FFF;">Picture</td>
							<td style="font-size:20px; color:#FFF;">Size</td>
							<td style="font-size:20px; color:#FFF;">Download</td>
							<td style="font-size:20px; color:#FFF;">Author</td>
							<td style="font-size:20px; color:#FFF;">Status</td>
						</tr>
					
					';	
			
			while ($sor = mysql_fetch_array($result6))
			{
				if ($sor['status'] == "no")
				{
					$status = "<p style='color:#F00;'>Not uploaded yet, Administrator has too approve it first!</p>";
				}
				
				if ($sor['status'] == "yes")
				{
					$status = "<p style='color:#060;'>Map Uploaded!</p>";
				}
					echo '

						<tr align="center">
							<td style="font-size:20px; color:#FFF;">'.$sor['category'].'</td>
							<td style="font-size:20px; color:#FFF;">'.$sor['name'].'</td>
							<td style="font-size:20px; color:#FFF;"> <a href="description.php?desc='.$sor['description'].'" target="new" style="color:#FFF;"> Click Here for Description! </a> </td>
							<td style="font-size:20px; color:#FFF;"><a href="'.$sor['pic'].'" target="new"><img src="'.$sor['pic'].'" width="200" /></a></td>
							<td style="font-size:20px; color:#FFF;">'.$sor['size'].'</td>
							<td style="font-size:20px; color:#FFF;">'.$sor['downloadlink'].'</td>
							<td style="font-size:20px; color:#FFF;">'.$sor['authors'].'</td>
							<td style="font-size:20px; color:#FFF;"> '.$status.' </td>
						</tr>
					
					';	
			} //while
			
			echo '</table>';
			
			}//if
				
			else
			{
				echo "<p align='center' style='color:#FFF; font-size:28px;'>You don't have submitted maps!</p>";

			}
				mysql_close();	
				}
				
				
				?>
                