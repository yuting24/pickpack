<?php
session_start();
$title=($_REQUEST['title']);
$kind=($_REQUEST['kind']);
$pro_name=($_REQUEST['product_name']);
$small_kind=($_REQUEST['small_kind']);
$content=($_REQUEST['content']);
$member_id =($_SESSION['people']['member_id']);
$member_name =($_SESSION['people']['member_name']);
$rate=($_REQUEST['rate']);
$mark="一般貼文";

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


$conn=mysqli_connect("localhost","root","1234","pickpack");
$insertSql="INSERT INTO article(kind,small_kind,title,content,write_id,write_name,mark,good_rate,product_name,p1,p2,p3,p4,p5)VALUES('$kind','$small_kind','$title','$content','$member_id','$member_name','$mark','$rate','$pro_name','$perfile[0]','$perfile[1]','$perfile[2]','$perfile[3]','$perfile[4]')";

mysqli_query($conn,$insertSql);
echo '<meta http-equiv="refresh" content="0;url=index.php">';


?>