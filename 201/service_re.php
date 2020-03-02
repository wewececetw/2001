<?php
	$total=0;
	if(!empty($_GET["to"])){
		$sql="select * from service_log where s_l_no='".$_GET["to"]."'";
		$ro=mysqli_query($link,$sql);
		$row=mysqli_fetch_assoc($ro);
		$total=mysqli_num_rows($ro);
	}
	$sq2="select * from player";
	$ro1=mysqli_query($link,$sq2);
	$row1=mysqli_fetch_assoc($ro1);
	$pp[0]="客服人員";
	do{
		$pp[$row1["p_seq"]]=$row1["p_id"];
	}while($row1=mysqli_fetch_assoc($ro1));
	
	if(!empty($_POST["content"])){
		$sql="insert into service_log value(null,'".$_GET["to"]."',0,'".$_POST["content"]."','".$time."')";
		mysqli_query($link,$sql);
		$sq2="update service set s_time='".$time."',s_id=0 where s_no = '".$_GET["to"]."'";
		mysqli_query($link,$sq2);
		?><script>document.location.href='?g=service';</script><?php
		exit();
	}
	
?>
<table width="1024" align="center" border="1">
	<tr>
		<td align="center" width="300">案件編號</td>
		<td align="center" colspan="2"><?=$row["s_l_no"]?></td>
	</tr>
		<td align="center" width="200">問答內容</td>
		<td align="center" width="124">時間</td>
		<td align="center" width="100">回覆者的帳號</td>
		
	
<?php do{ 
?>	<form method="post">
	<tr>
		
		<td align="center"><?=$row["s_l_con"]?></td>
		<td align="center"><?=$row["s_l_time"]?></td>
		<td align="center"><?=$pp[$row["s_l_to"]]?></td>
	</tr>
		
	
	<?php }while($row = mysqli_fetch_assoc($ro));?>	
	<tr>
		<td align="center" colspan="3"><textarea style="height:100px;width:300px" name="content"></textarea></td>
	</tr>	
	<tr>
	<td align="center" colspan="3"><input type="submit"  value="送出"></td>
	</tr>
	</form>

</table>