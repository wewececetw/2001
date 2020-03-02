<?php
	include_once("setdb.php");
	
	if(!empty($_GET["id"])){
		if(!empty($_GET["pw"])){
			if(!empty($_GET["nm"])){
				if(!empty($_GET["add"])){
					if(!empty($_GET["em"])){
						if(!empty($_GET["ph"])){
							$sql="select * from player where p_id ='".$_GET["id"]."'";
							$ro=mysqli_query($link,$sql);
							$tt=mysqli_num_rows($ro);
							if($tt<1){
								$sql="insert into player value(null,'".$_GET["id"]."','".$_GET["pw"]."','".$_GET["nm"]."','".$_GET["add"]."','".$_GET["em"]."','".$_GET["ph"]."',0)";
								mysqli_query($link,$sql);
								web_log($sql);
								echo"註冊完成，歡迎加入";
							}else{echo "帳號重複";}
						}else{ echo "不可空白";}	
					}else{ echo "不可空白";}	
				}else{ echo "不可空白";}		
			}else{ echo "不可空白";}
		}else{ echo "不可空白";}
	}else{ echo "不可空白";}
?>