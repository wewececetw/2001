<?php
	if(!empty($_POST["mymon"][0])){
		for($i=0;$i<count($_POST["mymon"]);$i++){
			$sql="update menu set m_money='".$_POST["mymon"][$i]."',m_many='".$_POST["myman"][$i]."',m_go='".$_POST["mygo"][$i]."' WHERE m_seq='".$_POST["myid"][$i]."'";
			mysqli_query($link,$sql);
	}
}
	$sql="select * from menu";
	$ro=mysqli_query($link,$sql);
	$row=mysqli_fetch_assoc($ro);
?>
<table width="100%" border="1">
	<tr>
		<td align="center" width="10%">買家</td>
		<td align="center" width="15%">商品名稱</td>
		<td align="center" width="10%">價錢</td>
		<td align="center" width="10%">數量</td>
		<td align="center" width="20%">購買時間</td>
		<td align="center" width="20%">送達時間</td>
		<td align="center" width="15%">操作</td>
	</tr>
	<form method="post">
<?php
do{
?>	
	<tr>
		<td align="center"><?=$row["m_id"]?></td>
		<td align="center"><?=$row["m_name"]?></td>
		<td align="center"><input name="mymon[]" value="<?=$row["m_money"]?>"></td>
		<td align="center"><input name="myman[]" value="<?=$row["m_many"]?>"></td>
		<td align="center"><?=$row["m_time"]?></td>
		<td align="center"><input name="mygo[]" value="<?=$row["m_go"]?>"></td>
		<td align="center"><a href="?g=menu_del&no=<?=$row["m_seq"]?>">刪除</a></td>
	</tr>
	<input name="myid[]" value="<?=$row["m_seq"]?>" type="hidden">
<?php }while($row=mysqli_fetch_assoc($ro));?>
	<tr>
		<td align="center" colspan="7"><input type="submit" value="修改" ></td>
	</tr>
	</form>
</table>