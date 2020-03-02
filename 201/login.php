<?php
	if(!empty($_SESSION["qq"])){
		?><script>document.location.href="index.php";</script><?php
	}
	if(!empty($_POST["myid"])){
		if($_POST["myid"]=="admin"){
			if($_POST["mypw"]=="1234"){
				$_SESSION["qq"]="admin";
				?><script>document.location.href="index.php";</script><?php
			}else{
				?><script>alert("密碼輸入錯誤");</script><?php
			}
		}else{
			?><script>alert("帳號輸入錯誤");</script><?php
		}
	}
?>
<form method="post">
<table width="30%" align="center" border="1">
	<tr>
		<td width="30%" height="40" align="center">帳號</td>
		<td align="center"><input name="myid" ></td>
	</tr>
	<tr>
		<td height="40" align="center">密碼</td>
		<td align="center"><input name="mypw" type="password"></td>
	</tr>
	<tr>
		<td height="40" colspan="2" align="center"><input type="submit" value="登入"></td>
	</tr>	
</table>
</form>