<?php
session_start();
if(isset($_SESSION['people'])){
	unset($_SESSION['people']);
	echo "<script>alert('η»εΊζε');</script>";
	echo '<meta http-equiv="refresh" content="0.5;url=index.php">';
}
?>