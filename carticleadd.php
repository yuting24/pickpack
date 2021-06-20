<?php
session_start();
$title=($_REQUEST['title']);
$kind=($_POST['kind']);
$pro_name=($_REQUEST['product_name']);
$small_kind=($_REQUEST['small_kind']);
$content=($_REQUEST['content']);
$google_name=($_REQUEST['google_name']);
$mark="廠商貼文";

$perfile=array("","","","",""); 
    $fileCount = count($_FILES['my_file']['name']);
    for ($i = 0; $i < $fileCount; $i++) {
      # 檢查檔案是否上傳成功
      if ($_FILES['my_file']['error'][$i] === UPLOAD_ERR_OK){}
        $filename=$_FILES['my_file']['name'][$i];
        $tmpname=$_FILES['my_file']['tmp_name'][$i];                         
          $instr = fopen($tmpname,"rb" );
          $perfile[$i] = addslashes(fread($instr,filesize($tmpname))); 
    }


    if($_SESSION['people']['identify']=='公司員工'){

   			$pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234'); 
			$sql=$pdo->prepare('select * from company where identify_code=?');
			$sql->execute([$_SESSION['people']['identifycode']]);
			foreach($sql->fetchAll() as $row){
				$c1=$row['company_id'];
				$c2=$row['company_name'];

				$conn=mysqli_connect("localhost","root","1234","pickpack");

				$insertSql="INSERT INTO article(kind,small_kind,title,content,write_id,write_name,mark,product_name,p1,p2,p3,p4,p5,google_name)VALUES('$kind','$small_kind','$title','$content','$c1','$c2','$mark','$pro_name','$perfile[0]','$perfile[1]','$perfile[2]','$perfile[3]','$perfile[4]','$google_name')";

				mysqli_query($conn,$insertSql);

				echo "新增成功";

			}  
}else{

	$company_id =($_SESSION['people']['company_id']);
	$company_name =($_SESSION['people']['company_name']);

$conn=mysqli_connect("localhost","root","1234","pickpack");

$insertSql="INSERT INTO article(kind,small_kind,title,content,write_id,write_name,mark,product_name,p1,p2,p3,p4,p5,google_name)VALUES('$kind','$small_kind','$title','$content','$company_id','$company_name','$mark','$pro_name','$perfile[0]','$perfile[1]','$perfile[2]','$perfile[3]','$perfile[4]','$google_name')";

mysqli_query($conn,$insertSql);

echo "新增成功";}




echo '<meta http-equiv="refresh" content="2;url=index.php">';
    

?>