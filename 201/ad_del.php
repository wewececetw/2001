<?php
	if(!empty($_GET["no"])){
		$sql="update player set p_del=1 where p_seq='".$_GET["no"]."'";
		mysqli_query($link,$sql);
	}

?>
<script>
document.location.href="index.php?g=admin";
</script>