
<?php
session_start();
unset($_SESSION['people']);

if($_POST['radio']=='member'){

		if($_REQUEST['account']=='12345@gmail.com'&&$_REQUEST['password']=='12345'){
					echo '<meta http-equiv="refresh" content="0;url=back.php">';
		}else{

		$pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234'); 
		$sql=$pdo->prepare('select * from member where account=? and password=?');
		$sql->execute([$_REQUEST['account'],$_REQUEST['password']]);
		foreach($sql->fetchAll() as $row){
			
				$_SESSION['people']=['member_id'=>$row['member_id'],'member_name'=>$row['member_name'],
					'account'=>$row['account'],'password'=>$row['password'],'identify'=>$row['identify'],'identifycode'=>$row['identifycode'],'picture'=>$row['picture']];

		}
		if(isset($_SESSION['people'])){
			echo '<meta http-equiv="refresh" content="0;url=index.php">';
		}
		else{
			echo "輸入錯誤";
		}
	}
}
if($_POST['radio']=='company'){
	$pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234'); 
	$sql=$pdo->prepare('select * from company where account=? and password=?');
	$sql->execute([$_REQUEST['account'],$_REQUEST['password']]);
	foreach($sql->fetchAll() as $row){
		
	$_SESSION['people']=['company_id'=>$row['company_id'],'company_name'=>$row['company_name'],'res_name'=>$row['res_name'],
				'phone'=>$row['phone'],'identify_code'=>$row['identify_code'],'account'=>$row['account'],
				'password'=>$row['password'],'number'=>$row['number'],'picture'=>$row['picture'],'identify'=>"廠商"];

	}
	if(isset($_SESSION['people'])){
		echo '<meta http-equiv="refresh" content="0;url=index.php">';
	}
	else{
		echo "輸入錯誤";
	}
}


?>

