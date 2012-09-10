<?php
	
	include "server_data.php";
	
	setcookie('token' , null, 0 , $path ,$domain);
	setcookie('secret' , null, 0 , $path ,$domain);

	header('Location: '.$root);

?>