<?php
session_start();
if(isset($_SESSION['people'])){
$pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234'); 
$sql=$pdo->prepare("update member set member_name=?,password=? where member_id = '{$_SESSION['people']['member_id']}'");
$sql->execute([$_REQUEST['member_name'],$_REQUEST['password']]);

$pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234'); 
	$sql=$pdo->prepare('select * from member where member_name=?');
	$sql->execute([$_REQUEST['member_name']]);
	foreach($sql->fetchAll() as $row){
	$_SESSION['people']=['member_id'=>$row['member_id'],'member_name'=>$row['member_name'],
				'account'=>$row['account'],'password'=>$row['password'],'identify'=>$row['identify'],'identifycode'=>$row['identifycode'],'picture'=>$row['picture']];


	}
 
	echo "修改成功";
	echo "<script>self.location=document.referrer</script>";
}
?>