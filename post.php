<?php

if($_COOKIE['token'] !=null && $_COOKIE['secret'] !=null){

	include 'HTTP/OAuth/Consumer.php';
	include "consumer.php";
	include "server_data.php";
	
	
	$consumer = new HTTP_OAuth_Consumer($C_key, $C_secret);
	$consumer->setToken($_COOKIE['token'] );
	$consumer->setTokenSecret($_COOKIE['secret']);
	
	$count=$_GET['count'];
	$coment="(＾p＾)くぎゅうううう";
	for($i=0;$i<$count;$i++){
		$coment.="う";
		$response = $consumer->sendRequest("http://twitter.com/statuses/update.xml", array('status' => $coment."ぅぅぅぅ"), "POST");
	}
	
	header('Location: '.$root);
}




?>