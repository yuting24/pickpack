<?php
$id=$_REQUEST['id'];
$pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234'); 
	$sql=$pdo->prepare("delete from company where company_id =?");
	$sql->execute([$id]);
	echo "刪除成功";
	
 ?>