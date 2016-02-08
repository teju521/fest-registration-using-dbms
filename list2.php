<?php
	$con = mysql_connect("localhost","root","") or die(mysql_error());
	
	mysql_select_db("vvit",$con) or die("Cannot select the DB:".mysql_error());
	$event=$_POST['id'];
    echo $event;
 $fi="select * from reg where vvitid in(select vvitid from event where $event=1)";
 ?>
 <a href="select.html"><marquee ><b>Press me to go back to home</marquee></a> 
 <br><table width="900" border="1" align="center">
 <tr style="color:red"><td>SNO</td><td>Name</td><td>Phn no</td><td>FEST id</td><td>Clg Id</td><td>Branch</td><td>Email</td><td>Clg Name</td></tr>
 <?php
			
			
			   $sno=1;
				$res = mysql_query($fi);
				if( mysql_num_rows($res)>0 )
				{
					while($ro=mysql_fetch_assoc($res)) 
					{
						echo "<tr><td> ".$sno; 
						echo "<td> " .$ro['name']; 
						echo "<td>".$ro['ph']; 
						echo "<td>".$ro['vvitid'];
						echo "<td>".$ro['id'];
						echo "<td>".$ro['branch'];
						echo "<td>".$ro['email'];
						echo "<td>".$ro['clg'];
                           $sno++;
						}
					}
				
				
?>

<?php

mysql_close($con)		
		?>