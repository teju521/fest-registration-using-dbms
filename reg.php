<?php
  $con=mysql_connect("localhost","root","");//or die["error",mysql_error[]];
  mysql_select_db("DBname",$con);//or die["false1",mysql_error[]];
 // if(isset($_POST['name'])!=""&& isset($_POST['ph'])>0)
	 if($_POST['name'] != "")
  {
	  $name=$_POST['name'];
	  $id=$_POST['id'];
	  $branch=$_POST['branch'];
	  $email=$_POST['email'];
	  $ph=$_POST['ph'];
	  $clgname=$_POST['clg'];
	  $sql="insert into reg(name,id,clg,branch,email,ph) values('$name','$id','$clgname','$branch','$email','$ph')";
      mysql_query($sql)or die('error');		  
	  $s="select vvitid from reg where vvitid in(select max(vvitid) from reg)";
     $res= mysql_query($s)or die('error');
    $a=mysql_fetch_array($res);
    echo "FEST ID IS ----> ";
	echo $a['vvitid'];	
  $idd=$a['vvitid'];
     include "events.html"; 
  }
  else
	  echo "false";
    mysql_close($con);
  ?>