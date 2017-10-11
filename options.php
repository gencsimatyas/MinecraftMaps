<?php

		if ($_SESSION['user'] == "admin")
		{
	echo '
	<table width="978" border="1" align="center" class="tabla" background="Pictures/(.png">

 			<td width="192" align="center" class="iras4">Options</td>
            

  	</table>

 <br /><br />
        
        	<table width="417" height="64" border="1" align="center" background="Pictures/(.png">
            	<form action="" method="post"></form>
                    <tr>
                    
                            <td height="52" align="center"> <a href="index.php?menu=options&amp;almenu=password"> <input name="password" type="button" value="Change Your Password!" /> </a> </td>
                            <td align="center"> <a href="index.php?menu=options&amp;almenu=delete"> <input name="delete" type="button" value="Delete Your Account!" /> </a> </td>
                    
                    </tr>
            	</form>
            </table>
            ';
			
		} else header ("location:index.php");
		
		?>
              <?php
			  
			  	if ($_SESSION['user'] == "admin")
		{
			  
					 echo "<br/><br/>";
					
					 if(isset($_REQUEST['almenu']))
					 switch($_REQUEST["almenu"])
					 {
					  case 'password' : include "password.php";break;
					  case 'delete' : include "deleteAcc.php";break;
					 }
					 
					 }
		else header ("location:index.php");
 			  ?>
          
          
