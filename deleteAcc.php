<html>
	<body>
    
    <?php
 
 	if ($_SESSION['user'] == "admin")
		{
 
 	echo '
    
    
    <table width="317" border="1" align="center" background="Pictures/(.png">
      <tr><td width="307">
        <table border="0" align="center" background="Pictures/(.png">
        	
            
            <tr><td colspan="3" align="center"><strong>Are you sure?</strong></td></tr>
            
            <tr>
            
            	<td width="148" align="center"><form action="torles.php" method="post"> <input name="" type="submit" value="Yes!"> </form></td>
                <td width="149" align="center"><form action="nem.php" method="post"> <input name="" type="submit" value="No!"> </form></td>
            
            </tr>
        
        	
        </table>
       </td></tr>
    </table>
	
	';
	
			}
		else header ("location:index.php");
          ?>
    
	</body>
</html>