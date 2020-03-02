<?php
	$sql = "select * from service group by s_no desc";
	$ro = mysqli_query($link,$sql);
	$row = mysqli_fetch_assoc($ro);
	
	$sq2 = "select * from player ";
	$ro1 = mysqli_query($link,$sq2);
	$row1 = mysqli_fetch_assoc($ro1);
	$pp[0]="客服人員";
	do{
		$pp[$row1["p_seq"]]=$row1["p_id"];
	}while($row1 = mysqli_fetch_assoc($ro1));
	
?>
<table width="1024" align="center" border="1">
	<tr>
		<td align="center" width="600">案件編號</td>
		<td align="center" width="200">最後時間</td>
		<td align="center" width="124">最後回覆帳號</td>
		<td align="center" width="100">操作</td>
	</tr>
<?php do{	
?>	
	<tr>
		<td align="center"><?=$row["s_no"]?></td>
		<td align="center"><?=$row["s_time"]?></td>
		<td align="center"><?=$pp[$row["s_id"]]?></td>
		<td align="center"><a href="?g=service_re&to=<?=$row["s_no"]?>">回覆</a></td>
	</tr>
<?php }while($row = mysqli_fetch_assoc($ro));
?>	
</table>	