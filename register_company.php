<?php
header("Content-Type:text/html; charset=utf8");
session_start();

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
    $sql=sprintf("insert into company values(null,%s,%s,%s,%s,%s,%s,%s,%s)","'".$_REQUEST['company_name']."'","'".$_REQUEST['account']."'","'".$_REQUEST['password']."'","'".$_REQUEST['number']."'","'".$_REQUEST['phone']."'","'".$_REQUEST['res_name']."'","'".$_REQUEST['identify_code']."'","'".$file."'");
            
    mysqli_query($conn,$sql); 
    mysqli_set_charset($conn,"utf8");   
    mysqli_close($conn);
    
	 echo '<meta http-equiv="refresh" content="0;url=index.php">';

?>