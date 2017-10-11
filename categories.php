<?php

						$host="mysql.hostinger.ro";
						$username="u245448304_craft";
						$password="pepsi888pepsi";
						$db_name="u245448304_craft";
				
				
						mysql_connect("$host", "$username", "$password") or die("Cannot connect to the mySql database!");
						mysql_select_db("$db_name") or die("Cannot select the database!");
						
						$sql0 = "SELECT count(*) as c from `maps` WHERE category = 'sch'";
						$result0 = mysql_query($sql0);
						$sor0 = mysql_fetch_array($result0);
						$sch = $sor0['c'];
						
						$sql = "SELECT count(*) as c from `maps` WHERE category = 'survival'";
						$result = mysql_query($sql);
						$sor = mysql_fetch_array($result);
						$survival = $sor['c'];
						
						$sql2 = "SELECT count(*) as c from `maps` WHERE category = 'adventure'";
						$result2 = mysql_query($sql2);
						$sor2 = mysql_fetch_array($result2);
						$adventure = $sor2['c'];
						
						$sql3 = "SELECT count(*) as c from `maps` WHERE category = 'creation'";
						$result3 = mysql_query($sql3);
						$sor3 = mysql_fetch_array($result3);
						$creation = $sor3['c'];
						
						$sql4 = "SELECT count(*) as c from `maps` WHERE category = 'puzzle'";
						$result4 = mysql_query($sql4);
						$sor4 = mysql_fetch_array($result4);
						$puzzle = $sor4['c'];
						
						$sql5 = "SELECT count(*) as c from `maps` WHERE category = 'game'";
						$result5 = mysql_query($sql5);
						$sor5 = mysql_fetch_array($result5);
						$game = $sor5['c'];
						
						$sql6 = "SELECT count(*) as c from `maps` WHERE category = 'parkour'";
						$result6 = mysql_query($sql6);
						$sor6 = mysql_fetch_array($result6);
						$parkour = $sor6['c'];
						
						mysql_close();

?>


<link href="style.css" rel="stylesheet" type="text/css" />





<table width="978" border="1" align="center" class="tabla" background="Pictures/(.png">

 			<td width="192" align="center" class="iras4">Categories</td>
                   
</table>

	<table border="1" background="Pictures/(.png" align="center" width="400">
     <form action="" method="post" name="a">
    	<tr><td>
    	<table border="0" align="center" width="380">
        	<tr align="center">
            	<td>Search for maps: 
               
            	  <input name="text" type="text" />
            	  <a href="index.php?menu=categories&amp;amenu=search"> <input name="submit" type="submit" value="Search" /> </a>
           	  
              </td>
            </tr>
        </table>
      </tr></td>
           </form>
    </table>

	<br/><br/>
    
    <table width="1000" border="0" align="center" >
    
    	<tr align="center">
        
        	<td width="340"> <a href="index.php?menu=categories&amp;amenu=new"> <img src="Pictures/label_new.png" width="60" /> </a> </td>
            <td width="354"> <a href="index.php?menu=categories&amp;amenu=hot"> <img src="Pictures/red.png" width="40" /> </a> </td>
            <td width="292"> <a href="index.php?menu=categories&amp;amenu=sch&amp;page=1"> <img src="Pictures/blueprint_130.png" width="60" /> </a> </td>
        
        </tr>
        
        <tr align="center">
        
        	<td style="font-size:18px"> <a href="index.php?menu=categories&amp;amenu=new" class="iras5"> New Maps </a> </td>
            <td style="font-size:18px"> <a href="index.php?menu=categories&amp;amenu=hot" class="iras5"> Hot Maps </a> </td>
            <td style="font-size:18px"> <a href="index.php?menu=categories&amp;amenu=sch&amp;page=1" class="iras5"> Schematics </a> </td>
            
        </tr>
        
         <tr style="color:#FFF" align="center">

			 <td></td>
			 <td></td>
 			 <td class="iras5"><?php echo $sch. " Schematics"; ?></td>

  	   </tr>
    
    </table>

<br/><br/>

 <table width="1000" border="0" align="center" >

 		<tr align="center">

  			<td width="340"><a href="index.php?menu=categories&amp;amenu=adv&amp;page=1"><img src="Pictures/adv.png" /></a></td>

 			<td width="354"><a href="index.php?menu=categories&amp;amenu=surv&amp;page=1"><img src="Pictures/surv.png" /></a></td>

  			<td width="292"><a href="index.php?menu=categories&amp;amenu=puzz&amp;page=1"><img src="Pictures/puz.png" /></a></td>

 		</tr>

 

 	    <tr style="color:#FFF" align="center">

   			 <td style="font-size:18px"><a href="index.php?menu=categories&amp;amenu=adv&amp;page=1" class="iras5">Adventure Maps</a></td>

    		 <td style="font-size:18px"><a href="index.php?menu=categories&amp;amenu=surv&amp;page=1" class="iras5">Survival Maps</a></td>

   			 <td style="font-size:18px"><a href="index.php?menu=categories&amp;amenu=puzz&amp;page=1" class="iras5">Puzzle Maps</a></td>

 	    </tr>

  

 	    <tr style="color:#FFF" align="center">

 			 <td class="iras5"><?php echo $adventure. " Maps"; ?></td>

 			 <td class="iras5"><?php echo $survival. " Maps"; ?></td>

 			 <td class="iras5"><?php echo $puzzle. " Maps"; ?></td>

 	    </tr>

        

  </table>

 <br /><br />

  

  <table width="1000" border="0" align="center">

   

   		<tr align="center">

 			 <td width="340"><a href="index.php?menu=categories&amp;amenu=park&amp;page=1" ><img src="Pictures/park.png" /></a></td>

		     <td width="354"><a href="index.php?menu=categories&amp;amenu=creat&amp;page=1" ><img src="Pictures/misc.png" /></a></td>

 			 <td width="292"><a href="index.php?menu=categories&amp;amenu=game&amp;page=1"><img src="Pictures/game.png" /></a></td>

 		</tr>

  

  		<tr style="color:#FFF" align="center">

   			 <td style="font-size:18px"><a href="index.php?menu=categories&amp;amenu=park&amp;page=1" class="iras5">Parkour Maps</a></td>

		     <td style="font-size:18px"><a href="index.php?menu=categories&amp;amenu=creat&amp;page=1" class="iras5">Creation Maps</a></td>

  		    <td style="font-size:18px"><a href="index.php?menu=categories&amp;amenu=game&amp;page=1" class="iras5">Game Maps</a></td>

 	    </tr>

  

       <tr style="color:#FFF" align="center">

 			 <td class="iras5"><?php echo $parkour. " Maps"; ?></td>

  			 <td class="iras5"><?php echo $creation. " Maps"; ?></td>

  			 <td class="iras5"><?php echo $game. " Maps"; ?></td>

  	   </tr>

  

</table>

			<?php
			
				if (isset($_REQUEST['amenu']))
				{
					switch ($_REQUEST['amenu'])
					{
						case 'adv' : include 'adventure.php';break;
						case 'puzz' : include 'puzz.php';break;
						case 'game' : include 'game.php';break;
						case 'creat' : include 'creat.php';break;
						case 'park' : include 'park.php';break;
						case 'surv' : include 'surv.php';break;
						case 'new' : include 'newMaps.php';break;
						case 'hot' : include 'hotMaps.php';break;
						case 'sch' : include 'schematics.php';break;
						case 'search' : include 'search.php';break;
						
					}
				}
				
				
			
			?>


