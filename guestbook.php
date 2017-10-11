<?php

						$host="mysql.hostinger.ro";
						$username="u245448304_craft";
						$password="pepsi888pepsi";
						$db_name="u245448304_craft";
				
				
						mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
						mysql_select_db("$db_name") or die("Cannot select the database!");
							
							$sql2 = "SELECT count(*) as c from `guestbook`";
							$result2 = mysql_query($sql2);
							$sor2 = mysql_fetch_array($result2);
							$peroldal = 10;	
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
						
						
							$sql = "SELECT * FROM `guestbook` ORDER BY date desc limit " .($oldal * $peroldal).",".$peroldal;
							$result = mysql_query($sql);
						
						echo '<table width="978" border="1" align="center" class="tabla" background="Pictures/(.png">
									<td width="192" align="center" class="iras4">GuestBook</td>
							 </table>';
						
						session_start();
						
						if($_SESSION['user'] == "")
						{
							echo '<p align="center" style="color:#FFF; font-size:28px;">You need to be a member to wirte in the GuestBook. :)</p>';
							
						}
						
						if($_SESSION['user'] != "")
						{
							echo '<p align="center" style="color:#FFF; font-size:28px;">Write something in the GuestBook. :)</p>';
							
							echo '
							
								<table align="center" border="1" ">
									 <tr><td>
										<table align="center" bgcolor="#FFFFFF" background="Pictures/(.png">
											<form action="guestbookSql.php" method="post">
											  <tr>
												<td><strong>Subject: </strong></td>
												<td><input name="subject" type="text" /></td>
											  </tr>
											  
											  <tr>
												<td><strong>Message: </strong></td>
												<td><textarea name="message" cols="40" rows="10"></textarea></td>
											  </tr>
											  
											  <tr>
												<td align="center" colspan="3"><input name="submit" type="submit" value="Send!" /></td>
											  </tr>
											</form>
										</table>
									 </td></tr>
									</table>
							
							';
						}
						
						echo '<br/><br/>';
						
						echo '<table align="center" background="pics/minecraft_background___grass___by_jabjabjab-d30egxg.png" border="1" width="1000">
							  <tr><td>
								
									';
									echo '<br/>';
									echo '<table align="center" bgcolor="#000000" width="400"
									<tr><td>
									';
												echo ' <table align="center" bgcolor="#000"> ';
						echo ' <tr> ';
						
				//oldalazas		
						
						if ($oldal + 1 != 1)
					echo  ' <td align="center"><a href="index.php?menu=guestbook&amp;page='.($oldal).'" class="glink">Previous</a></td>';
					
					for ($i = 1; $i <= $oldalakszama; $i++)
					{
						echo ' <td align="center"><a href="index.php?menu=guestbook&amp;page='.$i.'" class="glink">| '.$i.' |</a></td> ';
					} 
					
					
					
					if ($oldal + 1 != $oldalakszama)
					echo  ' <td align="center"><a href="index.php?menu=guestbook&amp;page='.($oldal + 2).'" class="glink">Next</a></td>';
					
					echo '</tr>';
					echo '</table>';
					
					echo '</td></tr></table>';
					
					echo '<br/>';
					
					//oldalazas end
						
						while ($sor = mysql_fetch_array($result))
						{
							echo '
							<table align="center" bgcolor="#FFFFFF" border="1" width="900">
										<tr><td>
										<table>
												<tr>
													<td>Date: </td>
													<td>'.date("Y.M.D h:i:s",$sor['date']).'</td>
												</tr>
												
												<tr>
													<td>From: </td>
													<td>'.$sor['from'].'</td>
												</tr>
												
												<tr>
													<td>Subject: </td>
													<td>'.$sor['subject'].'</td>
												</tr>
												
												<tr>
													<td>Message: </td>
													<td>'.$sor['message'].'</td>
												</tr>
												
									    </table>
										';
										
										if ($_SESSION['user'] == "admin")
												{
													echo '
													<tr>
														<td align="right"> <a href="deleteGuest.php?time='.$sor['date'].'&amp;from='.$sor['from'].'"> <img src="Pictures/vendeg.png" width="40" /> </a> </td>
													</tr>
													
													';
												}
										
										echo'
										</td></tr>
										</table>
										<br/>
									
							
							';
								}
								
								echo '
								
							  </td></tr>
							</table>';

?>