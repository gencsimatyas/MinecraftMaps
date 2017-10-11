
	<?php

	if ($_SESSION['user'] == "admin")
		{
			echo '
	<table width="978" border="1" align="center" class="tabla" background="Pictures/(.png">

 			<td width="192" align="center" class="iras4">Administrator Panel</td>
            

  	</table>
		';
		}
 ?>

 <br /><br />
 
 	<?php
        if ($_SESSION['user'] == "admin")
		{
			echo '
        	<table width="417" height="64" border="1" align="center" background="Pictures/(.png">
            	<form action="" method="post"></form>
                    <tr>
                    
                            <td height="52" align="center"> <a href="index.php?menu=admin&amp;almenu=users"> <input name="usere" type="button" value="Users on the Website!" /> </a> </td>
                            <td align="center"> <a href="index.php?menu=admin&amp;almenu=log"> <input name="log" type="button" value="Log!" /> </a> </td>
                            <td align="center"> <a href="index.php?menu=admin&amp;almenu=addnews"> <input name="news" type="button" value="Add News!" /> </a> </td>
                    
                    </tr>
            	</form>
            </table>  ';
		}
         ?>   
              <?php
			  
					 echo "<br/><br/>";
					if ($_SESSION['user'] == "admin")
					{
						 if(isset($_REQUEST['almenu']))
							 switch($_REQUEST["almenu"])
							 {
							  case 'users' : include "users.php";break;
							  case 'log' : include "log.php";break;
							  case 'addnews' : include "addNews.php";break;
							 }
					}
 			  ?>
          
          
