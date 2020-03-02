<?php
	$sql="select * from news where n_seq='".$_GET["look"]."'";
	$ro=mysqli_query($link,$sql);
	$row=mysqli_fetch_assoc($ro);
	
	$tp="";
	$ti="";
	$co="";
	$mo="";
	
	if(isset($_POST["title"])){
		$ti = " n_title = '".htmlentities($_POST["title"],ENT_QUOTES)."'";
	}
	if(isset($_POST["content"])){
		$co = " n_con = '".htmlentities($_POST["content"],ENT_QUOTES)."'";
	}
	if(isset($_POST["money"])){
		$mo = " n_mon = '".htmlentities($_POST["money"],ENT_QUOTES)."'";
	}
	if(!empty($_FILES["tpic"]["name"])){
		list($tpic_name,$check)=new_file("tpic");
		if($check==1){exit("標題縮圖的檔案格式錯誤");}
		rename("new_pic/".$row["n_pic1"] ,"new_pic/xxx".$row["n_pic1"]);
		copy($_FILES["tpic"]["tmp_name"],"new_pic/".$tpic_name);
		$tp =" , n_pic1 = '".$tpic_name."'";
	}
	if(isset($_POST["title"])){
		$sql="update news set ".$ti." , ".$co.$tp.",".$mo." where n_seq='".$_GET["look"]."'";
		echo$sql;
		mysqli_query($link,$sql);
		?><script>document.location.href="index.php?g=new"</script><?php
	}
	
	
?>
<form method="post" enctype="multipart/form-data">
<style>
input{
	width:450px;
	margin:10px 0 10px 0;
}
textarea{
	width:450px;
	margin:10px 0 10px 0;
}
</style>

<table width="800" align="center" border="1">
	<tr>
		<td width="300" align="center">標題縮圖</td>
		<td align="center">
		<img src="new_pic/<?=$row["n_pic1"]?>" width="300">
		<br><input type="file" name="tpic" >
		</td>
	</tr>
	<tr>
		<td align="center">標題文字</td>
		<td align="center"><input name="title" value="<?=$row["n_title"]?>"></td>
	</tr>
	<tr>
		<td align="center">內容文字</td>
		<td align="center">
			<textarea name="content" style="height:130px;" ><?=$row["n_con"]?></textarea>
		</td>
	</tr>
	<tr>
		<td align="center">金額</td>
		<td align="center"><input name="money" value="<?=$row["n_mon"]?>"></td>
	</tr>
	<tr>
		<td align="center" colspan="2"><input type="submit" value="送出"></td>
	</tr>
</table>
</form>