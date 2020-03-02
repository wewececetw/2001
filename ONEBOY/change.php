<?php
	if(empty($_SESSION["id"])){
		?><script>document.location.href="index.php";</script><?php
	}
	$sql="select * from player where p_id='".$_SESSION["id"]."'";
	$ro=mysqli_query($link,$sql);
	$row=mysqli_fetch_assoc($ro);
	if(!empty($_POST["mypw"])){
		$sql="update player set p_pw='".$_POST["mypw"]."',p_name='".$_POST["myname"]."',p_address='".$_POST["myadd"]."',p_mail='".$_POST["myem"]."',p_phone='".$_POST["myph"]."' WHERE p_id='".$_SESSION["id"]."'";
		mysqli_query($link,$sql);
		?><script>document.location.href="index.php?g=change";</script><?php
	}

?>
<form method="post">
	<div class="form-group">
		<label for="exampleInputEmail1"></label>
	</div>
	<div class="form-group">
		<h3>會員資料修改</h3>
	</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">密碼</label>
      <input type="text" class="form-control" id="inputPassword4" name="mypw" value="<?=$row["p_pw"]?>">
    </div>
	<div class="form-group col-md-6">
      <label for="inputEmail4">信箱</label>
      <input type="email" class="form-control" id="inputEmail4" name="myem" value="<?=$row["p_mail"]?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">地址</label>
    <input type="text" class="form-control" id="inputAddress" name="myadd" value="<?=$row["p_address"]?>">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">電話</label>
      <input type="phone" class="form-control" id="inputCity" name="myph" value="<?=$row["p_phone"]?>">
    </div>
	<div class="form-group col-md-6">
      <label for="inputEmail4">姓名</label>
      <input type="name" class="form-control" id="inputEmail4" name="myname" value="<?=$row["p_name"]?>">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">修改</button>
  <div class="form-group">
		<label for="exampleInputEmail1"></label>
	</div>
</form>