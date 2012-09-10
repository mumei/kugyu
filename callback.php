<?php

	include 'HTTP/OAuth/Consumer.php';
	include "consumer.php";


	$verifier	= $_GET['oauth_verifier'];
	$rq_token	= $_COOKIE['r_token'];
	$rq_token_s	= $_COOKIE['r_secret'];
	if($verifier!=null){
		$consumer = new HTTP_OAuth_Consumer($consumer_key, $consumer_secret);
		session_start();
		$consumer->setToken($rq_token);
		$consumer->setTokenSecret($rq_token_s);
		$consumer->getAccessToken('http://api.twitter.com/oauth/access_token', $verifier);
		$_SESSION['access_token'] = $consumer->getToken();
		$ac_token=$_SESSION['access_token'];
		$_SESSION['access_token_secret'] = $consumer->getTokenSecret();
		$ac_token_s=$_SESSION['access_token_secret'];
		
		if( $ac_token != null && $ac_token_s != null){
		
			setcookie('r_token' , null, 0 , '/kugyu/' ,'www.mumei-himazin.info');
			setcookie('r_secret' , null, 0 , '/kugyu/' ,'www.mumei-himazin.info');
		
			setcookie('token' ,$ac_token , time()+60*60*24*30 , '/kugyu/' ,'www.mumei-himazin.info');
			setcookie('secret' , $ac_token_s , time()+60*60*24*30 , '/kugyu/' ,'www.mumei-himazin.info');
		}
	}
	header('Location: http://www.mumei-himazin.info/kugyu/index.php');
?>