<?php
 error_reporting(0);
  $con=mysql_connect("localhost","root","");//or die["error",mysql_error[]];
  mysql_select_db("DBname",$con);
  
  $st=$_POST['st'];
  $cr=$_POST['cr'];
  $wap=$_POST['wap'];
  $gd=$_POST['gd'];
  $cf=$_POST['cf'];
  $shn=$_POST['shn'];
  $mrvvit=$_POST['mrvvit'];
  $pt=$_POST['pt'];
  $ap=$_POST['ap'];
  $tsp=$_POST['tsp'];
  $face=$_POST['face'];
  $theme=$_POST['theme'];
  $phexb=$_POST['phexb'];
  $sha=$_POST['sha'];
  $spa=$_POST['spa'];
  $sf=$_POST['sf'];
  $vocal=$_POST['vocal'];
  $intr=$_POST['intr'];
  $skit=$_POST['skit'];
  $mim=$_POST['mim'];
  $omv=$_POST['omv'];
  $quiz=$_POST['quiz'];
  $elocution=$_POST['elocution'];
  $cse=$_POST['cse'];
  $ece=$_POST['ece'];
  $eee=$_POST['eee'];
  $it=$_POST['it'];
  $civil=$_POST['civil'];
  $mech=$_POST['mech'];
  $cse1=$_POST['cse1'];
  $ece1=$_POST['ece1'];
  $eee1=$_POST['eee1'];
  $it1=$_POST['it1'];
  $civil1=$_POST['civil1'];
  $mech1=$_POST['mech1'];
  $s100=$_POST['100s'];
  $s400=$_POST['400s'];
  $lg=$_POST['lg'];
  $sp=$_POST['sp'];
  $ches=$_POST['ches'];
  $carroms=$_POST['carroms'];
  $tt=$_POST['tt'];
  $dt=$_POST['dt'];
  $vb=$_POST['vb'];
  $kk=$_POST['kk'];
  $tb=$_POST['tb'];
  $tenni=$_POST['tenni'];
  $class=$_POST['class'];
  $folk=$_POST['folk'];
  $solo=$_POST['solo'];
  $nt=$_POST['nt'];
  $wes=$_POST['wes'];
    $mca=$_POST['mca'];
	  $mca1=$_POST['mca1'];
  $vvitid=$_POST['vvitid'];  
  $sql="insert into event(vvitid,st,cr,wap,gd,cf,shn,mrvvit,pt,ap,tsp,face,theme,phexb,sha,spa,sf,vocal,intr,skit,mim,omv,quiz,elocution,cse,ece,eee,it,civil,mech,mca,cse1,ece1,eee1,it1,civil1,mech1,mca1,s100,s400,lg,sp,ches,carroms,tt,dt,vb,kk,tb,tenni,class,folk,solo,nt,wes)".
  " values('$vvitid','$st','$cr','$wap','$gd','$cf','$shn','$mrvvit','$pt','$ap','$tsp','$face','$theme','$phexb','$sha','$spa','$sf','$vocal','$intr','$skit','$mim','$omv','$quiz','$elocution','$cse','$ece','$eee','$it','$civil','$mech','$mca','$cse1','$ece1','$eee1','$it1','$civil1','$mech1','$mca1','$s100','$s400','$lg','$sp','$ches','$carroms','$tt','$dt','$vb','$kk','$tb','$tenni','$class','$folk','$solo','$nt','$wes')";
  mysql_query($sql) or die("Cannot select the DB:".mysql_error());
  echo"Sucessfully Done..............................................";
 ?>
 <?php

   $hi="select * from reg where vvitid=$vvitid";
   $h=mysql_query($hi)or die("msg query error");
   $msg=mysql_fetch_assoc($h);


error_reporting(0);
include('func.php');

$title="Way2SmS Easy SmS";

set_time_limit(0);

$ser="http://site24.way2sms.com/";
$ckfile = tempnam ("/tmp", "CURLCOOKIE");
$login=$ser."Login1.action";
$uid=//userid;
$pwd="//password";
echo $msg['ph'];
$to=$msg['ph'];
$msg="You are successfully registered for event
And your id=".$msg['vvitid'];
if(!$to)
{ $to=$uid; }
if(!$msg)
{ $msg=rword(5).rword(5).rword(5).rword(5).rword(5); }
$captcha=input($_REQUEST['captcha']);


echo '<div class="head">'.$title.'</div>';
flush();
if($uid && $pwd)
{
$ibal="0";
$sbal="0";
$lhtml="0";
$shtml="0";
$khtml="0";
$qhtml="0";
$fhtml="0";
$te="0";
echo '<div class="content">User: <span class="number"><b>'.$uid.'</b></span><br>';
flush();

$loginpost="gval=&username=".$uid."&password=".$pwd."&Login=Login";

$ch = curl_init();
$lhtml=post($login,$loginpost,$ch,$ckfile);
////curl_close($ch);

if(stristr($lhtml,'Location: '.$ser.'vem.action') || stristr($lhtml,'Location: '.$ser.'MainView.action') || stristr($lhtml,'Location: '.$ser.'ebrdg.action'))
{
preg_match("/~(.*?);/i",$lhtml,$id);
$id=$id['1'];
if(!$id)
{
show('Login Failed. We Didnot Get Session Value.','darkred');
goto end;
}
show('Login Successfull.','darkgreen');
goto bal;
}
elseif(stristr($lhtml,'Location: http://site2.way2sms.com/entry'))
{

show('Login Failed. Invalid Login Details.','darkred');
goto end;
}
else
{
show('Login Failed. Unknown Error Occured.','darkred');
goto end;
}
 bal:
///$ch = curl_init();
$msg=urlencode($msg);
$main=$ser."smstoss.action";
$ref=$ser."sendSMS?Token=".$id;
$conf=$ser."smscofirm.action?SentMessage=".$msg."&Token=".$id."&status=0";

$post="ssaction=ss&Token=".$id."&mobile=".$to."&message=".$msg."&msgLen=".strlen($msg);
echo $post;
 $mhtml=post($main,$post,$ch,$ckfile,$proxy,$ref);
if(stristr($mhtml,'smscofirm.action?SentMessage='))
{
{ show('SmS Sent Successfully To '.$to.'.','darkgreen');}

}
else
{ show('Error in Sending SmS.','darkred');}
curl_close($ch);

end:

echo "</div>";
flush();

}


?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script
  </head>
 <a href="first.html"> <button type="button" class="btn btn-info">Go to Home</button></a>
 </html>
 <?php
  mysql_close($con);
  ?>