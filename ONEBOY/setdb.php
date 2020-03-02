<?php
	session_start();
	$link=mysqli_connect("localhost","s1070210","s1070210","s1070210");
	mysqli_query($link,"set names utf8")or die("資料庫GG惹");
	$nt=strtotime("+7hour");
	$time= date("Y-m-d H:i:s",$nt);
	include_once("function.php");
		if($_SERVER["QUERY_STRING"]=="g=root"){
			if(!empty($_SESSION["id"])){
				?><script>document.location.href="index.php";</script><?php
			}else{}
		}
	
?>