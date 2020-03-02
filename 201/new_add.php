<?php
	$error = 0;
	if(empty($_FILES["tpic"]["name"])){$error=1;}
	if(empty($_POST["title"])){$error=1;}
	if(empty($_POST["content"])){$error=1;}
	if(empty($_POST["money"])){$error=1;}
	if($error==0){
		list($tpic_name,$check)=new_file("tpic");
		if($check==1){exit("標題縮圖的檔案格式錯誤");}
		copy($_FILES["tpic"]["tmp_name"],"new_pic/".$tpic_name);
		$sql="insert into news value(null,'".$_POST["title"]."','".$tpic_name."','".$_POST["content"]."','".$time."','".$_POST["money"]."')";
		mysqli_query($link,$sql);
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
		<td align="center"><input type="file" name="tpic" required="required"></td>
	</tr>
	<tr>
		<td align="center">標題文字</td>
		<td align="center"><input name="title" required="required"></td>
	</tr>
	<tr>
		<td align="center">內容文字</td>
		<td align="center">
			<textarea name="content" style="height:130px;" required="required"></textarea>
		</td>
	</tr>
	<tr>
		<td align="center">金額</td>
		<td align="center"><input name="money" required="required"></td>
	</tr>
	<tr>
		<td align="center" colspan="2"><input type="submit" value="送出"></td>
	</tr>
</table>
</form>