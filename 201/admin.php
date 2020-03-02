<?php
	if(!empty($_POST["mypw"][0])){
		for($i=0;$i<count($_POST["mypw"]);$i++){
			$sql="update player set p_pw='".$_POST["mypw"][$i]."',p_name='".$_POST["myname"][$i]."',p_address='".$_POST["myadd"][$i]."',p_mail='".$_POST["mymail"][$i]."',p_phone='".$_POST["myph"][$i]."' WHERE p_seq='".$_POST["myid"][$i]."'";
			mysqli_query($link,$sql);
	}
}
	$sql="select * from player where p_del=0";
	$ro=mysqli_query($link,$sql);
	$row=mysqli_fetch_assoc($ro);
?>
<table width="100%" border="1">
	<tr>
		<td align="center" colspan="7"><a href="?g=ad_add">新增</a></td>
	</tr>
	<tr>
		<td align="center" width="10%">帳號</td>
		<td align="center" width="10%">密碼</td>
		<td align="center" width="10%">姓名</td>
		<td align="center" width="30%">地址</td>
		<td align="center" width="15%">信箱</td>
		<td align="center" width="10%">電話</td>
		<td align="center" width="15%">操作</td>
	</tr>
	<form method="post">
<?php
do{
?>	
	<tr>
		<td align="center"><?=$row["p_id"]?></td>
		<td align="center"><input name="mypw[]" value="<?=$row["p_pw"]?>"></td>
		<td align="center"><input name="myname[]" value="<?=$row["p_name"]?>"></td>
		<td align="center"><input name="myadd[]" value="<?=$row["p_address"]?>"></td>
		<td align="center"><input name="mymail[]" value="<?=$row["p_mail"]?>"></td>
		<td align="center"><input name="myph[]" value="<?=$row["p_phone"]?>"></td>
		<td align="center"><a href="?g=ad_del&no=<?=$row["p_seq"]?>">刪除</a></td>
	</tr>
	<input name="myid[]" value="<?=$row["p_seq"]?>" type="hidden">
<?php }while($row=mysqli_fetch_assoc($ro));?>
	<tr>
		<td align="center" colspan="7"><input type="submit" value="修改" ></td>
	</tr>
	</form>
</table>