<?php
echo'
<table width="978" border="1" align="center" class="tabla" background="Pictures/(.png">

 			<td width="192" align="center" class="iras4">Login</td>
            

  	</table>

	<br/><br/>

 <table width="300" border="2" align="center" cellpadding="0" cellspacing="1" background="Pictures/122.png">
                        <tr>
                                <form name="form1" method="post" action="checklogin.php">
                                    <td>
                                        <table width="100%" border="0" cellpadding="3" cellspacing="1" background="Pictures/122.png">
                                            <tr>
                                            	<td colspan="3" align="center"><strong>Login</strong></td>
                                            </tr>
                                            
                                            <tr>
                                                <td width="78">Username</td>
                                                <td width="6">:</td>
                                                <td width="294"><input name="myUsername" type="text" id="myUsername"></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Password</td>
                                                <td>:</td>
                                                <td><input name="myPassword" type="password" id="myPassword"></td>     
                                            </tr>
                                            <tr>
                                            	<td colspan="3" align="center"><input type="submit" name="Submit" value="Login"></td>
                                            </tr>
                                        </table>
                                    </td>
                                </form>
                        </tr>
                </table>
';
?>