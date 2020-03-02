<?php
	if(!empty($_POST["m_t"])){
		session_start();
		$link=mysqli_connect("localhost","s1070210","s1070210","s1070210");
		mysqli_query($link,"set names utf8")or die("資料庫GG惹");
		$nt=strtotime("+7hour");
		$time= date("Y-m-d H:i:s",$nt);
		$sql="select * from player where p_id='".$_SESSION["id"]."'";
		$ro=mysqli_query($link,$sql);
		$row=mysqli_fetch_assoc($ro);
		$sq2="insert into service_log value(null,'".$_SESSION["qa"]."','".$row["p_seq"]."','".$_POST["m_t"]."','".$time."')";
		mysqli_query($link,$sq2);
		$sq3="update service set s_time='".$time."' , s_id='".$row["p_seq"]."' where s_no = '".$_SESSION["qa"]."'";
		mysqli_query($link,$sq3);
	}
header("location:index.php?g=phone");
?>