<?php 
	if(!isset($_SESSION["id"])){
		?><script>alert("請註冊會員");
		document.location.href="index.php";</script><?php
	}
	$sql="select * from news where n_seq='".$_GET["go"]."'";
	$ro=mysqli_query($link,$sql);
	$row=mysqli_fetch_assoc($ro);
	if(!empty($_POST["many"])){
		$mo=$_POST["mon"];
		$ma=$_POST["many"];
		$money=$mo*$ma;
		$sql='insert into menu value(null,"'.$_SESSION["id"].'","'.$_POST["nm"].'","'.$money.'","'.$_POST["many"].'","'.$time.'",0)';
		mysqli_query($link,$sql);
		?><script>alert("訂購成功");
		document.location.href="index.php";</script><?php
	}
?>
<style>
.aa{
	
}
</style>
<form method="post">
<div class="aa">
	<div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
		<img class="d-block img-fluid" src="../201/new_pic/<?=$row["n_pic1"]?>">	
	</div>
<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">品名</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" name="nm" value="<?=$row["n_title"]?>">
    </div>
</div>
<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">價錢</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" name="mon" value="<?=$row["n_mon"]?>">
    </div>
</div>
		
<div class="form-group">
    <label for="exampleFormControlSelect1">購買數量</label>
    <select class="form-control" id="exampleFormControlSelect1" name="many">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
	    <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">送出</button>
  <div class="form-group">
		<label for="exampleInputEmail1"></label>
	</div>
</div>	
</form>