<?php
	
	$sql="select * from news";
	$ro=mysqli_query($link,$sql);
	$row=mysqli_fetch_assoc($ro);
	$totle=mysqli_num_rows($ro);
	if(!empty($_POST["n_d"][0])){
		for($i=0;$i<count($_POST["n_d"]);$i++){
			$sql="delete  from news where n_seq='".$_POST["n_d"][$i]."'";
			mysqli_query($link,$sql);
		}
	?><script>document.location.href="index.php?g=new"</script><?php
	}
?>
<form method="post">

<table width="960" border="1">
	<tr>
		<td align="center" colspan="5"><a href="?g=new_add">新增</a></td>
	</tr>	
	<tr>
		<td width="100" align="center">縮圖</td>
		<td width="400" align="center">標題</td>
		<td width="200" align="center">時間</td>
		<td width="100" align="center">刪除</td>
		<td width="100" align="center">操作</td>
	</tr>
<?php
if($totle>0){
do{
?>	
	<tr>
		<td align="center"><img src="new_pic/<?=$row["n_pic1"]?>" width="200px"></td>
		<td align="center"><?=$row["n_title"]?></td>
		<td align="center"><?=$row["n_date"]?></td>
		<td align="center"><input type="checkbox" value="<?=$row["n_seq"]?>" name="n_d[]"></td>
		<td align="center">
			<a href="?g=new_up&look=<?=$row["n_seq"]?>">修改</a>
		</td>
	</tr>
<?php
}while($row=mysqli_fetch_assoc($ro));
?>
	<tr>
		<td align="center" colspan="5"><input type="submit" value="刪除"></td>
	</tr>
<?php
}else{
?>	
	<tr>
		<td align="center" colspan="4">查無資料</td>
	</tr>	
<?php	
}
?>	
</table>
</form>