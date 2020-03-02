<?php
	if(!empty($_SESSION["id"])){
		unset($_SESSION["id"]);
	}
	
?>
<script>document.location.href="index.php";</script>