
<form>
<table width="500" align="center" border="1">
	<tr>
		<td width="150" align="center">帳號</td>
		<td width="350" align="center"><input id="myid"></td>
	</tr>
	<tr>
		<td align="center">密碼</td>
		<td align="center"><input id="mypw"></td>
	</tr>
	<tr>
		<td align="center">姓名</td>
		<td align="center"><input id="myname"></td>
	</tr>
	<tr>
		<td align="center">地址</td>
		<td align="center"><input id="myaddress"></td>
	</tr>
	<tr>
		<td align="center">信箱</td>
		<td align="center"><input id="mymail"></td>
	</tr>
	<tr>
		<td align="center">電話</td>
		<td align="center"><input id="myphone"></td>
	</tr>
	<tr>
		<td align="center" colspan="2"><input type="button" value="註冊" onclick="add_player()"></td>
	</tr>
</table>
</form>
<script>
function add_player(){
	id=document.getElementById("myid").value;
	pw=document.getElementById("mypw").value;
	nm=document.getElementById("myname").value;
	add=document.getElementById("myaddress").value;
	em=document.getElementById("mymail").value;
	ph=document.getElementById("myphone").value;
	$.get("ad_add_api.php",{ id, pw, nm, add, em, ph},function(o){
		alert(o);            
		document.location.href="index.php?g=admin";                     
	});    
}                  
</script>                    
                             