<?php
	if(!empty($_GET["no"])){
		$sql="delete from menu where m_seq='".$_GET["no"]."'";
		mysqli_query($link,$sql);
	}
?>
<script>
	document.location.href="index.php?g=menu";
</script>