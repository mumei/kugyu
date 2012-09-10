<?php

if($_COOKIE['token'] !=null && $_COOKIE['secret'] !=null){

	include 'HTTP/OAuth/Consumer.php';
	include "consumer.php";
	
	
	
	$consumer = new HTTP_OAuth_Consumer($C_key, $C_secret);
	$consumer->setToken($_COOKIE['token'] );
	$consumer->setTokenSecret($_COOKIE['secret']);
	$coment="くぎゅうううううしたい時に使ってね～  http://www.mumei-himazin.info/kugyu/";
	$response = $consumer->sendRequest("http://twitter.com/statuses/update.xml", array('status' => $coment), "POST");
	
	header('Location: http://www.mumei-himazin.info/kugyu/index.php');
}




?>