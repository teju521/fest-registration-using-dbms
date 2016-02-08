<?php
error_reporting(0);
  $con=mysql_connect("localhost","root","");//or die["error",mysql_error[]];
  mysql_select_db("DBname",$con);
    $vvitid=$_POST['vvitid']; 
  $st=$_POST['st'];
  if($st==1)
  {
	  $a="update event set st=1 where vvitid=$vvitid";
	  mysql_query($a) or die("error");
  }
  $cr=$_POST['cr'];
   if($cr==1)
  {
	  $b="update event set cr=1 where vvitid=$vvitid";
	  mysql_query($b) or die("error");
  }
  $wap=$_POST['wap'];
   if($wap==1)
  {
	  $c="update event set wap=1 where vvitid=$vvitid";
	  mysql_query($c) or die("error");
  }
  $gd=$_POST['gd'];
   if($gd==1)
  {
	  $d="update event set gd=1 where vvitid=$vvitid";
	  mysql_query($d) or die("error");
  }
  $cf=$_POST['cf'];
   if($cf==1)
  {
	  $e="update event set cf=1 where vvitid=$vvitid";
	  mysql_query($e) or die("error");
  }
  $shn=$_POST['shn'];
   if($shn==1)
  {
	  $f="update event set shn=1 where vvitid=$vvitid";
	  mysql_query($f) or die("error");
  }
  $mrvvit=$_POST['mrvvit'];
   if($mrvvit==1)
  {
	  $g="update event set mrvvit=1 where vvitid=$vvitid";
	  mysql_query($g) or die("error");
  }
  $pt=$_POST['pt'];
   if($pt==1)
  {
	  $h="update event set pt=1 where vvitid=$vvitid";
	  mysql_query($h) or die("error");
  }
  $ap=$_POST['ap'];
   if($ap==1)
  {
	  $i="update event set ap=1 where vvitid=$vvitid";
	  mysql_query($i) or die("error");
  }
  $tsp=$_POST['tsp'];
   if($tsp==1)
  {
	  $j="update event set tsp=1 where vvitid=$vvitid";
	  mysql_query($j) or die("error");
  }
  $face=$_POST['face'];
   if($face==1)
  {
	  $k="update event set face=1 where vvitid=$vvitid";
	  mysql_query($k) or die("error");
  }
  $theme=$_POST['theme'];
   if($theme==1)
  {
	  $l="update event set theme=1 where vvitid=$vvitid";
	  mysql_query($l) or die("error");
  }
  $phexb=$_POST['phexb'];
   if($phexb==1)
  {
	  $m="update event set phexb=1 where vvitid=$vvitid";
	  mysql_query($m) or die("error");
  }
  $sha=$_POST['sha'];
   if($sha==1)
  {
	  $n="update event set sha=1 where vvitid=$vvitid";
	  mysql_query($n) or die("error");
  }
  $spa=$_POST['spa'];
   if($spa==1)
  {
	  $o="update event set spa=1 where vvitid=$vvitid";
	  mysql_query($o) or die("error");
  }
  $sf=$_POST['sf'];
   if($sf==1)
  {
	  $p="update event set sf=1 where vvitid=$vvitid";
	  mysql_query($p) or die("error");
  }
  $vocal=$_POST['vocal'];
   if($vocal==1)
  {
	  $q="update event set vocal=1 where vvitid=$vvitid";
	  mysql_query($q) or die("error");
  }
  $intr=$_POST['intr'];
   if($intr==1)
  {
	  $r="update event set intr=1 where vvitid=$vvitid";
	  mysql_query($r) or die("error");
  }
  $skit=$_POST['skit'];
   if($skit==1)
  {
	  $s="update event set skit=1 where vvitid=$vvitid";
	  mysql_query($s) or die("error");
  }
  $mim=$_POST['mim'];
   if($mim==1)
  {
	  $t="update event set mim=1 where vvitid=$vvitid";
	  mysql_query($t) or die("error");
  }
  $omv=$_POST['omv'];
   if($omv==1)
  {
	  $u="update event set omv=1 where vvitid=$vvitid";
	  mysql_query($u) or die("error");
  }
  $quiz=$_POST['quiz'];
   if($quiz==1)
  {
	  $v="update event set quiz=1 where vvitid=$vvitid";
	  mysql_query($v) or die("error");
  }
  $elocution=$_POST['elocution'];
   if($elocution==1)
  {
	  $w="update event set elocution=1 where vvitid=$vvitid";
	  mysql_query($w) or die("error");
  }
  $cse=$_POST['cse'];
   if($cse==1)
  {
	  $x="update event set cses=1 where vvitid=$vvitid";
	  mysql_query($x) or die("error");
  }
  $ece=$_POST['ece'];
   if($ece==1)
  {
	  $y="update event set ece=1 where vvitid=$vvitid";
	  mysql_query($y) or die("error");
  }
  $eee=$_POST['eee'];
   if($eee==1)
  {
	  $z="update event set eee=1 where vvitid=$vvitid";
	  mysql_query($z) or die("error");
  }
  $it=$_POST['it'];
   if($it==1)
  {
	  $a1="update event set it=1 where vvitid=$vvitid";
	  mysql_query($a1) or die("error");
  }
  $civil=$_POST['civil'];
   if($civil==1)
  {
	  $a2="update event set civil=1 where vvitid=$vvitid";
	  mysql_query($a2) or die("error");
  }
  $mech=$_POST['mech'];
   if($mech==1)
  {
	  $a3="update event set mech=1 where vvitid=$vvitid";
	  mysql_query($a3) or die("error");
  }
  $mca=$_POST['mca'];
    if($mca==1)
  {
	  $mca4="update event set mca=1 where vvitid=$vvitid";
	  mysql_query($mca4) or die("error");
  }
  $cse1=$_POST['cse1'];
   if($cse1==1)
  {
	  $a4="update event set cse1=1 where vvitid=$vvitid";
	  mysql_query($a4) or die("error");
  }
  $ece1=$_POST['ece1'];
   if($ece1==1)
  {
	  $a5="update event set ece1=1 where vvitid=$vvitid";
	  mysql_query($a5) or die("error");
  }
  $eee1=$_POST['eee1'];
   if($eee1==1)
  {
	  $a6="update event set eee1=1 where vvitid=$vvitid";
	  mysql_query($a6) or die("error");
  }
  $it1=$_POST['it1'];
   if($it1==1)
  {
	  $a7="update event set it1=1 where vvitid=$vvitid";
	  mysql_query($a7) or die("error");
  }
  $civil1=$_POST['civil1'];
   if($civil1==1)
  {
	  $a8="update event set civil1=1 where vvitid=$vvitid";
	  mysql_query($a8) or die("error");
  }
  $mech1=$_POST['mech1'];
   if($mech1==1)
  {
	  $a9="update event set mech1=1 where vvitid=$vvitid";
	  mysql_query($a9) or die("error");
  }
  $mca1=$_POST['mca1'];
    if($mca1==1)
  {
	  $mca5="update event set mca1=1 where vvitid=$vvitid";
	  mysql_query($mca5) or die("error");
  }
  $s100=$_POST['100s'];
   if($s100==1)
  {
	  $b1="update event set s100=1 where vvitid=$vvitid";
	  mysql_query($b1) or die("error");
  }
  $s400=$_POST['400s'];
   if($s400==1)
  {
	  $b2="update event set s400=1 where vvitid=$vvitid";
	  mysql_query($b2) or die("error");
  }
  $lg=$_POST['lg'];
   if($lg==1)
  {
	  $b3="update event set lg=1 where vvitid=$vvitid";
	  mysql_query($b3) or die("error");
  }
  $sp=$_POST['sp'];
   if($sp==1)
  {
	  $b4="update event set sp=1 where vvitid=$vvitid";
	  mysql_query($b4) or die("error");
  }
  $ches=$_POST['ches'];
   if($ches==1)
  {
	  $b5="update event set ches=1 where vvitid=$vvitid";
	  mysql_query($b5) or die("error");
  }
  $carroms=$_POST['carroms'];
   if($carroms==1)
  {
	  $b6="update event set carroms=1 where vvitid=$vvitid";
	  mysql_query($b6) or die("error");
  }
  $tt=$_POST['tt'];
   if($tt==1)
  {
	  $b7="update event set tt=1 where vvitid=$vvitid";
	  mysql_query($b7) or die("error");
  }
  $dt=$_POST['dt'];
   if($dt==1)
  {
	  $b8="update event set dt=1 where vvitid=$vvitid";
	  mysql_query($b8) or die("error");
  }
  $vb=$_POST['vb'];
   if($vb==1)
  {
	  $b9="update event set vb=1 where vvitid=$vvitid";
	  mysql_query($b9) or die("error");
  }
  $kk=$_POST['kk'];
   if($kk==1)
  {
	  $c1="update event set kk=1 where vvitid=$vvitid";
	  mysql_query($c1) or die("error");
  }
  $tb=$_POST['tb'];
   if($tb==1)
  {
	  $c2="update event set tb=1 where vvitid=$vvitid";
	  mysql_query($c2) or die("error");
  }
  $tenni=$_POST['tenni'];
   if($tenni==1)
  {
	  $c3="update event set tenni=1 where vvitid=$vvitid";
	  mysql_query($c3) or die("error");
  }
  $class=$_POST['class'];
   if($class==1)
  {
	  $c4="update event set class=1 where vvitid=$vvitid";
	  mysql_query($c4) or die("error");
  }
  $folk=$_POST['folk'];
   if($folk==1)
  {
	  $c5="update event set folk=1 where vvitid=$vvitid";
	  mysql_query($c5) or die("error");
  }
  $solo=$_POST['solo'];
   if($solo==1)
  {
	  $c6="update event set solo=1 where vvitid=$vvitid";
	  mysql_query($c6) or die("error");
  }
  $nt=$_POST['nt'];
   if($nt==1)
  {
	  $c7="update event set nt=1 where vvitid=$vvitid";
	  mysql_query($c7) or die("error");
  }
  $wes=$_POST['wes'];
   if($wes==1)
  {
	  $c8="update event set wes=1 where vvitid=$vvitid";
	  mysql_query($c8) or die("error");
  }
 
  echo"Ignore notice ......Sucessfully Done..............................................";
 ?> <a href="first.html"><input type="button" value="got to home" /></a>
 <?php

  mysql_close($con);
  ?>