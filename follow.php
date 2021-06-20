<?php 
session_start();
$p['fans_id']=null;
if(isset($_REQUEST['member_id'])){
$pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234');
$sql=$pdo->prepare('select * from fans where track_id=?');
$sql->execute([$_REQUEST['member_id']]);
foreach($sql->fetchAll() as $p){
		$p['fans_id'];
}
if($p['fans_id']==$_SESSION['people']['member_id']){
$sql=$pdo->prepare('delete from fans where track_id = ? and fans_id = ?');
	$sql->execute([$_REQUEST['member_id'],$_SESSION['people']['member_id']]);
	echo "<script>alert('取消追蹤');</script>";
	echo "<script>self.location=document.referrer</script>";
}
else{
$sql=$pdo->prepare('insert into fans value(?,?,?,?,null)');
$sql->execute([$_REQUEST['member_id'],$_REQUEST['member_name'],$_SESSION['people']['member_id'],$_SESSION['people']['member_name']]);
	echo "<script>alert('追蹤成功');</script>";
	echo "<script>self.location=document.referrer</script>";
}
}else{
	echo "<script>alert('廠商無追蹤功能');</script>";
	echo "<script>self.location=document.referrer</script>";
}
?>