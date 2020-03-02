<?php
	if(!empty($_POST["myid"])) {
        $sql = "select * from player where p_id='" . $_POST["myid"] . "' and p_pw='" . $_POST["mypw"] . "' and p_del=0";
        $ro = mysqli_query($link, $sql);
        $tt = mysqli_num_rows($ro);
        if ($tt == 1) {
            $_SESSION["id"] = $_POST["myid"];
            ?>
            <script>document.location.href = "index.php";</script><?php
        } else { ?>
            <script>alert("帳號密碼錯誤");</script><?php }
    }
?>
<form method="post">
	<div class="form-group">
		<label for="exampleInputEmail1"></label>
	</div>
  <div class="form-group">
    <label for="exampleInputEmail1">帳號</label>
    <input type="account" class="form-control" id="exampleInputEmail1" name="myid" aria-describedby="emailHelp" placeholder="Enter account">
    <small id="emailHelp" class="form-text text-muted">請放心輸入帳號密碼</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">密碼</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="mypw" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-primary">送出</button>　|　<a href="?g=login">註冊</a>
  <div class="form-group">
		<label for="exampleInputEmail1"></label>
	</div>
	</form>


