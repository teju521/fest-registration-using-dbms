<?php
	$con = mysql_connect("localhost","root","") or die(mysql_error());
	
	mysql_select_db("DBname",$con) or die("Cannot select the DB:".mysql_error());

	$viva=$_POST['name'];
$fi="SELECT * FROM `event` WHERE vvitid='$viva'";
$a="select * from reg where vvitid='$viva'";
 ?>
 <html>
 <head>
 <link rel="stylesheet" href="first.css"></link>
 <title>Test</title>
 </head>
 <body>
 <div id="head">
 <br><h1 style="color:white;font-family:Algerian" align="center">FEST<h1>
</div>
<div id="midle">
<br><br><br><br>
 <table width="900" border="1" align="center">
 <?php
$re = mysql_query($a);
$ro=mysql_fetch_assoc($re);
echo "<tr><td>Name:-</td><td>".$ro['name'];
echo "<tr><td>Clg Id:-</td><td>".$ro['id'];
echo "<tr><td>Branch:-</td><td>".$ro['branch'];
echo "<tr><td>Clg Name:-</td><td>".$ro['clg'];
echo "<tr><td>Mail Id:-</td><td>".$ro['email'];
echo "<tr><td>Phn no:-</td><td>".$ro['ph'];

?>
</table>
<table width="900" border="1" align="center">
<tr><td>Events :-</td>
<?php
$res = mysql_query($fi);
$row=mysql_fetch_assoc($res);
if($row['st']==1)
{
	echo "<tr><td>Story Telling";
}
if($row['cr']==1)
{
	echo "<td>,Creative Writing";
}
if($row['wap']==1)
{
	echo "<td>,Walk Parlament";
}

if($row['gd']==1)
{
	echo "<td>,Group Discussion";
}

if($row['cf']==1)
{
	echo "<td>,Cross Fire";
}
if($row['shn']==1)
{
	echo "<td>,Shannik";
}
if($row['mrvvit']==1)
{
	echo "<td>,Mr&Ms AFOSEC";
}

if($row['pt']==1)
{
	echo "<td>,Padhya Thoranam";
}
if($row['ap']==1)
{
	echo "<td>,Amaravathi Pratistithyam";
}
if($row['tsp']==1)
{
	echo "<td>,TShirt paint";
}
if($row['face']==1)
{
	echo "<td>,Face Painting";
}
if($row['theme']==1)
{
	echo "<td>,Theme Painting";
}
if($row['phexb']==1)
{
	echo "<td>,Photo Exhibition";
}
if($row['sha']==1)
{
	echo "<td>,Short Animation";
}
if($row['spa']==1)
{
	echo "<td>,Spot Animation";
}
if($row['sf']==1)
{
	echo "<td>,Short Film";
}
if($row['vocal']==1)
{
	echo "<td>,vocal";
}
if($row['intr']==1)
{
	echo "<td>,Instrumental";
}
if($row['skit']==1)
{
	echo "<td>,skit";
}
if($row['mim']==1)
{
	echo "<td>,Mimicri ";
}
if($row['omv']==1)
{
	echo "<td>,One Minute Video ";
}
if($row['quiz']==1)
{
	echo "<td>,quiz ";
}
if($row['elocution']==1)
{
	echo "<td>,Elecution ";
}
if($row['cse']==1)
{
	echo "<td>,Project Exebition ";
}
if($row['ece']==1)
{
	echo "<td>,Project Exebition ";
}
if($row['eee']==1)
{
	echo "<td>,Project Exebition ";
}
if($row['mca']==1)
{
	echo "<td>,Project Exebition ";
}
if($row['it']==1)
{
	echo "<td>,Project Exebition ";
}
if($row['civil']==1)
{
	echo "<td>,Project Exebition ";
}
if($row['mech']==1)
{
	echo "<td>,Project Exebition ";
}
if($row['cse1']==1)
{
	echo "<td>,Paper Presentation ";
}
if($row['ece1']==1)
{
	echo "<td>,Paper Presentation ";
}
if($row['mca1']==1)
{
	echo "<td>,Paper Presentation ";
}
if($row['eee1']==1)
{
	echo "<td>,Paper Presentation ";
}
if($row['it1']==1)
{
	echo "<td>,Paper Presentation ";
}
if($row['civil1']==1)
{
	echo "<td>,Paper Presentation ";
}
if($row['mech1']==1)
{
	echo "<td>,Paper Presentation ";
}
if($row['s100']==1)
{
	echo "<td>,100 mt Sprint";
}
if($row['s400']==1)
{
	echo "<td>,400mt Sprint";
}
if($row['lg']==1)
{
	echo "<td>,Long Jump";
}
if($row['sp']==1)
{
	echo "<td>,Shortput";
}
if($row['ches']==1)
{
	echo "<td>,chess";
}
if($row['carroms']==1)
{
	echo "<td>,Carroms";
}
if($row['tt']==1)
{
	echo "<td>,Table Tennis";
}
if($row['dt']==1)
{
	echo "<td>,Disk Throw ";
}
if($row['vb']==1)
{
	echo "<td>,Volly Ball ";
}
if($row['kk']==1)
{
	echo "<td>,Kho-Kho";
}
if($row['tb']==1)
{
	echo "<td>,Throw Ball ";
}
if($row['tenni']==1)
{
	echo "<td>,Tennicoit ";
}
if($row['tenni']==1)
{
	echo "<td>,Tennicoit ";
}
if($row['class']==1)
{
	echo "<td>,Classical ";
}
if($row['folk']==1)
{
	echo "<td>,Folk ";
}
if($row['solo']==1)
{
	echo "<td>,Solo ";
}
if($row['nt']==1)
{
	echo "<td>,Non-Theme ";
}
if($row['wes']==1)
{
	echo "<td>,Westran </td>";
}
?>
</table>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>  
<a href="first.html"><button type="button" class="btn btn-info">Go to Home</button></a> 


</div>
<div id="footer">
</div>
 <?php

  mysql_close($con);
  ?>