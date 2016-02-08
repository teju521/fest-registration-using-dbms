<?php
	$con = mysql_connect("localhost","root","") or die(mysql_error());
	
	mysql_select_db("vvit",$con) or die("Cannot select the DB:".mysql_error());

	$viva=$_POST['name'];
	$event=$_POST['id'];

 $sq="SELECT * from reg where vvitid='$viva'";
 $fi="select * from event where $event=1 and vvitid='$viva'";
 ?>
<table width="900" border="1" align="center">
 <tr style="color:red"><td>Name</td><td>Phn no</td><td>viva id</td><td>conformation</td></tr>
 <?php
				$result = mysql_query($sq);
				$res = mysql_query($fi);
				if(mysql_num_rows($result)>0 && mysql_num_rows($res)>0 )
				{
					while($row=mysql_fetch_assoc($result)) 
					{
						if($ro=mysql_fetch_assoc($res))
						{
						echo "<tr><td> " .$row['name']; 
						echo "<td>".$row['ph']; 
						echo "<td>".$ro['vvitid'];
							echo "<td>".$ro[$event];
						echo "</td></tr>";
						}
					}
				}
				
?><a href="check.html"><marquee ><b>Press me to go back to home</marquee></a> 

<?php

mysql_close($con)		
		?>