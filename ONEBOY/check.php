<?php
	if(!empty($_SESSION["id"])){
		?><script>document.location.href="index.php?g=change";</script><?php
	}else{
		?><script>document.location.href="index.php?g=login";</script><?php
	}
?>