<?php

include "page_default.php";
include "consumer.php";

print $header;

if($_COOKIE['token'] ==null || $_COOKIE['secret'] ==null){
	print "<a href=./OAuth.php>認証！</a>";
}else{
	
	print '<br><br><br><br><form method=get action=./post.php>';
	print '<input type=number name=count value=1>';
	print '<input type=submit value=(＾p＾)くぎゅうううう>';
	print '</form>';
	
	print '<br><br><br><br><form method=get action=./intro.php>';
	print '<br><input type=submit value=布教するよー(＾p＾)くぎゅうううう>';
	print '</form>';
	
	print '<br><br><br><br><a href=./logout.php>ろぐあうと</a>';
}

print $footer;

?>