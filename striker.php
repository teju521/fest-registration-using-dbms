<?php
$s=new HTTP_Request2('http://www.smsstriker.com/API/sms.php?username=vvit999&password=vvssbpmsk&from=VVITGT&to=9573575607&msg=hi testing&type=1',HTTP_Request2::METH_GET);
try{
	$s->send();
	if($s->getResponseCode()==200)
	{
		echo "sucess";
	}
}
catch(HttpException $ex)
{
	echo $ex;
}

?>