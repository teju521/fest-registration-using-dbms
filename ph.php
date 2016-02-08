<?php
	$con = mysql_connect("localhost","root","") or die(mysql_error());
	
	mysql_select_db("vvit",$con) or die("Cannot select the DB:".mysql_error());
	$event=$_POST['id'];
    echo $event;
 $fi="select ph from reg where vvitid in(select vvitid from event where $event=1)";
 ?>
 <a href="select.html"><marquee ><b>Press me to go back to home</marquee></a> 
 <br><table width="1080" border="0" align="center">Phn No:-
 <?php
			
				$res = mysql_query($fi);
				if( mysql_num_rows($res)>0 )
				{
					while($ro=mysql_fetch_assoc($res)) 
					{   
				        
						 ?> <tr><td><?php echo $ro['ph'];  ?>,</td></tr><?php

						}
					}
				
				
?>
</table>
<?php

mysql_close($con)		
		?>