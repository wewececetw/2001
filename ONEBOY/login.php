<?php
	if(!empty($_SESSION["id"])){
		?><script>document.location.href="index.php";</script><?php
	}
	if(!empty($_POST["myid"])){
		if(!empty($_POST["mypw"])){
			$sql="select * from player where p_id ='".$_POST["myid"]."'";
			$ro=mysqli_query($link,$sql);
			$tt=mysqli_num_rows($ro);
			if($tt<1){
				$sql="insert into player value(null,'".$_POST["myid"]."','".$_POST["mypw"]."','".$_POST["myname"]."','".$_POST["myadd"]."','".$_POST["myem"]."','".$_POST["myph"]."',0)";
				mysqli_query($link,$sql);
				?><script>alert("帳號註冊成功");</script>
				<script>document.location.href="index.php";</script><?php
			}else{ ?><script>alert("帳號重複");</script> <?php }
		}	
	}
?>
<form method="post">
	<div class="form-group">
		<label for="exampleInputEmail1"></label>
	</div>
	<div class="form-group">
		<h3>會員註冊</h3>
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">帳號</label>
		<input type="account" class="form-control" id="exampleInputEmail1" name="myid" aria-describedby="emailHelp" placeholder="Enter account">
		<small id="emailHelp" class="form-text text-muted">請輸入帳號密碼</small>
	</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">密碼</label>
      <input type="password" class="form-control" id="inputPassword4" name="mypw" placeholder="Password">
    </div>
	<div class="form-group col-md-6">
      <label for="inputEmail4">信箱</label>
      <input type="email" class="form-control" id="inputEmail4" name="myem" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">地址</label>
    <input type="text" class="form-control" id="inputAddress" name="myadd" placeholder="1234 Main St">
  </div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">電話</label>
      <input type="phone" class="form-control" id="inputCity" name="myph" placeholder="0000000000">
    </div>
	<div class="form-group col-md-6">
      <label for="inputEmail4">姓名</label>
      <input type="name" class="form-control" id="inputEmail4" name="myname" placeholder="XXX">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">註冊</button>
  <div class="form-group">
		<label for="exampleInputEmail1"></label>
	</div>
</form>