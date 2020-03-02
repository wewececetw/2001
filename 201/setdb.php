<?php
	session_start();
	$link=mysqli_connect("localhost","s1070210","s1070210","s1070210");
	mysqli_query($link,"set names utf8")or die("資料庫連結發生錯誤");
	$nt=strtotime("+7hour");
	$time=date("Y-m-d H:i:s",$nt);
	
	$go_login='<a href="?g=login"><span id="login2">登入</span></a>';
	
	include_once("function.php");
	
	if($_SERVER["QUERY_STRING"]=="g=login"){
		}else{
		$go_login=check_login();
		}

?>