<?php
function check_login(){
	if(empty($_SESSION["qq"])){
		header("location:index.php?g=login");
	}else{
		$go_login="管理者".'<a href="?g=out"><span id="login2">登出</span></a>';
		return $go_login;
	}
}
function web_log($log){
	$link = mysqli_connect("localhost","s1070210","s1070210","s1070210");
	mysqli_query($link,"set names utf8");
	$nt = strtotime("+7hour");
	$time = date("Y-m-d H:i:s",$nt);
	$sql = 'insert into web_log value(null,"'.$_SESSION["qq"].'","'.$log.'","'.$time.'")';
	mysqli_query($link,$sql);
}
function new_file($fname){
	$nt=strtotime("+7hour");
	$new_file_name = date("YmdHis",$nt);
	$f_file_name=1;
	if($_FILES[$fname]["type"] == "image/jpeg"){$f_file_name=".jpg";}
	if($_FILES[$fname]["type"] == "image/png"){$f_file_name=".png";}
	
	return array($new_file_name.$f_file_name,$f_file_name);
}
?>