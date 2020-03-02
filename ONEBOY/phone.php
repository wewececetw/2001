<?php
	if(empty($_SESSION["id"])){
		unset($_SESSION["qa"]);
		?><script>alert("請登入會員");
		document.location.href="index.php";</script><?php
	}
	if(!empty($_GET["open"])){
		if( empty($_SESSION["qa"]) ){
			$nqa = date("YmdHis",$nt);
			$nqa1 = rand(100000,999999);
			$_SESSION["qa"] = $nqa.$nqa1;
			$sql = "insert into service value(null,'".$nqa.$nqa1."','0000-00-00 00:00:00','0')";
			mysqli_query($link,$sql);
			?><script>document.location.href="index.php?g=phone"</script><?php
		}	
	}
	if(!empty($_GET["close"])){
		if( !empty($_SESSION["qa"]) ){
			unset($_SESSION["qa"]);
		}?><script>document.location.href="index.php?g=phone"</script><?php
	}
	if(!empty($_SESSION["qa"])){
		$sql="select * from service_log where s_l_no='".$_SESSION["qa"]."'";
		$ro=mysqli_query($link,$sql);
		$row=mysqli_fetch_assoc($ro);
	}

?>
<style>
.AA{
	margin-top:35px;
	width:75%;
    background-color:#ffffff;
    color:#000 ;
}
#ca{
	color:red;
	font-size:20px;
	text-align:left;
}
#ba{
	color:green;
	font-size:20px;
	text-align:right;
}

</style>
<form method="post" action="phone_api.php" class="AA">
<table class="AA">
	<tr>
		<td align="center" width="50%">問答內容</td>
		<td align="center" width="25%">時間</td>
	</tr>
	
<?php
if(empty($_SESSION["qa"])){
?>	
	<tr>
		<td align="center" colspan="2"><a href="?g=phone&open=1"><input type="button" value="開始問答"></a>
		</td>
	</tr>
<?php }else{ ?>
<?php do{  ?>	
	<tr>
		
		<?php  if($row["s_l_to"]==0){ ?><td id="ca"><?=$row["s_l_con"]?></td>
		<?php }else{ ?>
		<td id="ba"><?=$row["s_l_con"]?></td>
		<?php } ?>
		<td align="center"><?=$row["s_l_time"]?></td>
	</tr>
<?php }while($row=mysqli_fetch_assoc($ro)); ?>	
	<tr>
		<td align="center" colspan="2"><textarea name="m_t" style="width:600px;height:150px;"></textarea></td>
		<td></td>
	</tr>
	<tr>	
		<td align="center" colspan="2">
		<input type="submit" value="送出按鈕">
		<a href="?g=phone&close=1"><input type="button" value="結束問答"></a>
		</td>
	</tr>
<?php } ?>
</table>
</form>
