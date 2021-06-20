<?php
session_start();
$pass=($_POST['password']);
if(isset($_SESSION['people'])){
$pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234'); 
$sql=$pdo->prepare("update company set company_name=?,password=? where company_id = '{$_SESSION['people']['company_id']}'");
$sql->execute([$_REQUEST['company_name'],$pass]);


$pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234'); 
$sql=$pdo->prepare('select * from company where company_name=?');
$sql->execute([$_REQUEST['company_name']]);
foreach($sql->fetchAll() as $row){
		
	$_SESSION['people']=['company_id'=>$row['company_id'],'company_name'=>$row['company_name'],'res_name'=>$row['res_name'],'phone'=>$row['phone'],'identify_code'=>$row['identify_code'],'account'=>$row['account'],'password'=>$row['password'],'number'=>$row['number'],'picture'=>$row['picture'],'identify'=>"廠商"];

	}
	echo "修改成功";
	echo "<script>self.location=document.referrer</script>";
}
?>