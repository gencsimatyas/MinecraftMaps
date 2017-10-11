

  
<?php
echo'
<table width="978" border="1" align="center" class="tabla" background="Pictures/(.png">

 			<td width="192" align="center" class="iras4">Register</td>
            

  	</table>

	<br/><br/>

		<table width="610" border="1" align="center" cellpadding="0" cellspacing="1" background="Pictures/122.png">
		<tr>
			<form name="form1" method="post" action="registerSql.php">
                <td width="608">
                    <table width="100%" border="0" cellpadding="3" cellspacing="1" background="Pictures/122.png">
                        <tr>
                        	<td colspan="3" align="center"><strong>Register</strong></td>
                        </tr>
                        <tr>
                            <td width="264">Username (min 6, max 20 chars)</td>
                            <td width="7">:</td>
                            <td width="315"><input name="myUsername" type="text" id="myUsername" width="300"></td>
                        </tr>
                            <tr>
                            <td>Password (min 6, max 20 chars)</td>
                            <td>:</td>
                            <td><input name="myPassword1" type="password" id="myPassword1" width="300"></td>
                        </tr>
                        <tr>
                            <td>Password again</td>
                            <td>:</td>
                            <td><input name="myPassword2" type="password" id="myPassword2" width="300"></td>
                        </tr>
                        <tr>
                            <td>E-mail address (min 8, max 30 chars)</td>
                            <td>:</td>
                            <td><input name="email" type="text" id="email" width="300"></td>
                        </tr>
                        <tr>
                        	<td colspan="3" align="center"><input type="submit" name="submit" value="Register!"></td>
                        </tr>
                    </table>
                </td>
			</form>
        </tr>
    </table>

';
?>