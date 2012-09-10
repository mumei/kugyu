<?php
	
	include 'HTTP/OAuth/Consumer.php';
	include "consumer.php";
	include "server_data.php";
	
	
	$consumer = new HTTP_OAuth_Consumer($C_key, $C_secret);
	session_start();
	$consumer->getRequestToken('http://api.twitter.com/oauth/request_token',$callback);
	$_SESSION['request_token'] = $consumer->getToken();
	$rq_token=$_SESSION['request_token'];
	$_SESSION['request_token_secret'] = $consumer->getTokenSecret();
	$rq_secret=$_SESSION['request_token_secret'];
	$auth_url = $consumer->getAuthorizeUrl('http://api.twitter.com/oauth/authorize');
	
	setcookie('r_token' , $rq_token , time()+30*60 , $path ,$domain);
	setcookie('r_secret' , $rq_secret , time()+30*60 , $path ,$domain);
	
	header('Location: '.$auth_url);
	
?>