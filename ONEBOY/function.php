<?php

	if(empty($_SESSION["id"])){
		$go_login='<a href="?g=root" class="nav-link"><span id="login2">登入</span></a>';
		return $go_login;
		
	}else{
		$go_login='<a class="nav-link" href="?g=out&close=1"><span id="login2">登出</span></a>';
		return $go_login;
	}

?>