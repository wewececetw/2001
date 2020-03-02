<?php
	include_once("setdb.php");
	
	include_once("array.php");
	include_once("url.php");
?>
<link href="admin.css" rel="stylesheet" type="text/css">
<style type="text/css">
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>
<head>
<link href="./home_files/css.css" rel="stylesheet" type="text/css">
<script src="./home_files/jquery-1.9.1.min.js"></script>
<script src="./home_files/js.js"></script>
</head>
<div class="content2">
	<div id="aa"></div>
	<div id="login"><?=$go_login?></div>
</div>
<div class="content">
	<div id="title">
		<div id="logo"></div>
		<div id="gogo"><marquee>歡迎來到游媽媽手作蛋糕後台!</marquee></div>
	</div>
<!-----------------------------Title------------------------------>	
	<div id="menu">
		<div id="menu_list">
			<a href="?g=admin"><div class="mymenu">會員管理</div></a>
			<a href="?g=menu"><div class="mymenu">管理訂單</div></a>
			<a href="?g=service"><div class="mymenu">客服系統</div></a>
			<a href="?g=new"><div class="mymenu">商品管理</div></a>
		</div>
	</div>
<!-----------------------------menu------------------------------->		
	<div id="banner"><?php include_once($gogo);?></div>
<!-----------------------------banner----------------------------->		
	<div id="new">
	</div>
</div>