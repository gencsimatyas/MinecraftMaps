<?php

	if ($_SESSION['user'] == "admin")
		{
			
			echo '
	
<table width="978" border="1" align="center" class="tabla" background="Pictures/(.png">
 					<td width="192" align="center" class="iras4">Add News</td>
  			</table>

	<br/>

 <table border="1" align="center">
  <tr><td>
	<table align="center" background="pics/minecraft_background___grass___by_jabjabjab-d30egxg.png" border="0">
      <form action="addNewsSql.php" method="get">
      
      	<tr>
        	<td colspan="2" align="center"> Add News </td>
        </tr>
      
    	<tr>
        	<td> Title: </td>
            <td> <input name="title" type="text"> </td>
        </tr>
        
        <tr>
        	<td> News: </td>
            <td> <textarea name="news" cols="50" rows="20"></textarea> </td>
        </tr>
        
        <tr>
        	<td colspan="2" align="center"> <input name="submit" type="submit" value="Add News!"> </td>
        </tr>
        
      </form>
    
    </table>
   </td></tr>
  </table>
  
  ';
		} else header ("location:index.php");
		?>