<?php
	if(empty($_SESSION["id"])){
		?><script>alert("請登入會員");
		document.location.href="index.php";</script><?php
	}
	$sql="select * from menu where m_id='".$_SESSION["id"]."'";
	$ro=mysqli_query($link,$sql);
  $row=mysqli_fetch_assoc($ro);
  $time=array("尚未配送中請稍後","配送中請稍後","已送達請取貨");
?>
<style>
.AA{
	margin-top:35px;
	width:75%;
    background-color:#ffffff;
    color:#000 ;
}
</style>
<table class="AA">
    <tr>
      <th width="5%" scope="col" align="center">#</th>
      <th width="15%" scope="col" align="center">商品名稱</th>
      <th width="10%" scope="col" align="center">價錢</th>
      <th width="10%" scope="col" align="center">數量</th>
	  <th width="20%" scope="col" align="center">購買時間</th>
	  <th width="15%" scope="col" align="center">預計送達時間</th>
    </tr>
  <tbody>

<?php
$i=0;
do{
$i++;	 
 ?> 
    <tr>
      <th scope="row" ><?=$i?></th>
      <td><?=$row["m_name"]?></td>
      <td><?=$row["m_money"]?></td>
      <td><?=$row["m_many"]?></td>
	  <td><?=$row["m_time"]?></td>
	  <td><?=$time[$row["m_go"]]?></td>
    </tr>
<?php
 }while($row=mysqli_fetch_assoc($ro));
 ?>	
  </tbody>
</table>	