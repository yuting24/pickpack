<?php
header("Content-Type:text/html; charset=utf8");
session_start();
if($_POST['identify']=='一般會員'){

//取得上傳檔案資訊
    $filename=$_FILES['image']['name'];
    $tmpname=$_FILES['image']['tmp_name'];
    $filetype=$_FILES['image']['type'];
    $filesize=$_FILES['image']['size'];    
    $file=NULL;
    
    if(isset($_FILES['image']['error'])){    
        if($_FILES['image']['error']==0){                                    
            $instr = fopen($tmpname,"rb" );
            $file = addslashes(fread($instr,filesize($tmpname)));        
        }
    }
    
    //新增圖片到資料庫
    $conn=mysqli_connect("localhost","root","1234","pickpack");      
    $sql=sprintf("insert into member values(null,%s,%s,%s,%s,null,%s)","'".$_REQUEST['member_name']."'","'".$_REQUEST['account']."'","'".$_REQUEST['password']."'","'".$_REQUEST['identify']."'","'".$file."'");
            
    mysqli_query($conn,$sql); 
    mysqli_set_charset($conn,"utf8");   
    mysqli_close($conn);
    
	echo '<meta http-equiv="refresh" content="0;url=index.php">';

}
else if($_POST['identify']=='公司員工'){
	$pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234'); 
	$sql=$pdo->prepare('select * from company where identify_code=?');
	$sql->execute([$_REQUEST['identifycode']]);
	foreach($sql->fetchAll() as $row){
		
			$_SESSION['employee']=['company_id'=>$row['company_id'],'company_name'=>$row['company_name'],
				'account'=>$row['account'],'password'=>$row['password']];

}
	if(isset($_SESSION['employee'])){
	//取得上傳檔案資訊
    $filename=$_FILES['image']['name'];
    $tmpname=$_FILES['image']['tmp_name'];
    $filetype=$_FILES['image']['type'];
    $filesize=$_FILES['image']['size'];    
    $file=NULL;
    
    if(isset($_FILES['image']['error'])){    
        if($_FILES['image']['error']==0){                                    
            $instr = fopen($tmpname,"rb" );
            $file = addslashes(fread($instr,filesize($tmpname)));        
        }
    }
    
    //新增圖片到資料庫
    $conn=mysqli_connect("localhost","root","1234","pickpack");      
    $sql=sprintf("insert into member values(null,%s,%s,%s,%s,%s,%s)","'".$_REQUEST['member_name']."'","'".$_REQUEST['account']."'","'".$_REQUEST['password']."'","'".$_REQUEST['identify']."'","'".$_REQUEST['identifycode']."'","'".$file."'");
            
    mysqli_query($conn,$sql); 
    mysqli_set_charset($conn,"utf8");   
    mysqli_close($conn);
    
	 echo '<meta http-equiv="refresh" content="0;url=index.php">';

	}else{
		echo "註冊/輸入錯誤";
	}
	unset($_SESSION['identify']);
}else{
	echo "註冊/輸入錯誤";
}
?>