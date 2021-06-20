<?php
session_start();
if(isset($_SESSION['people'])){
	unset($_SESSION['people']);
	echo "<script>alert('登出成功');</script>";
	echo '<meta http-equiv="refresh" content="0.5;url=index.php">';
}
?>