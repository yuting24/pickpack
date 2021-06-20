<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234'); 
	$sql=$pdo->prepare('delete from member where member_id = ? and member_name = ?');
	$sql->execute([$_SESSION['employee']['member_id'],$_SESSION['employee']['member_name']]);
	echo "刪除成功";
	unset($_SESSION['employee']);
 ?>