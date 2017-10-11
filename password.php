<html>
	<body>
 <?php
 
 	if ($_SESSION['user'] == "admin")
		{
 
 	echo '
     
    <table width="445" border="0" align="center" cellpadding="0" cellspacing="1" background="Pictures/(.png">
		<tr>
			<form name="form1" method="post" action="newPassword.php">
                <td width="419">
                    <table width="100%" border="0" cellpadding="3" cellspacing="1"  background="Pictures/(.png">
                        <tr>
                        	<td colspan="3" align="center"><strong>Change Your Password</strong></td>
                        </tr>
                        <tr>
                            <td width="152">Old Password</td>
                            <td width="7">:</td>
                            <td width="262"><input name="myPassword" type="password" id="myPassword" width="250"></td>
                        </tr>
                         <tr>
                            <td>New Password (min 6, max 20 chars)</td>
                            <td>:</td>
                            <td width="262"><input name="newPassword" type="password" id="newPassword" width="250"></td>
                        </tr>
                        <tr>
                            <td>New Password Again</td>
                            <td>:</td>
                            <td width="262"><input name="newPassword2" type="password" id="newPassword2" width="250"></td>
                        </tr>
                        <tr>
                        	<td colspan="3" align="center"><input type="submit" name="submit" value="Ok!"></td>
                        </tr>
                    </table>
              </td>
			</form>
        </tr>
    </table>
    
    			
    
</body>
</html>
	';
	
			}
		else header ("location:index.php");
          ?>