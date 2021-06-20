<?php
session_start();
$con=mysqli_connect("localhost","root","1234","pickpack");
$pid = $_GET["pid"];
$id = $_GET["id"];
$reply_content =($_POST['reply_content']);
if(isset($_SESSION['people']['member_id'])){
	$member_id =($_SESSION['people']['member_id']);
	$member_name =($_SESSION['people']['member_name']);
    $insertSql="INSERT INTO reply(article_id,reply_name,reply_content)VALUES('$pid','$member_name','$reply_content')";
  }else if(isset($_SESSION['people']['company_id'])){
  	$company_id =($_SESSION['people']['company_id']);
  	$company_name =($_SESSION['people']['company_name']);
   $insertSql="INSERT INTO reply(article_id,reply_name,reply_content)VALUES('$pid','$company_name','$reply_content')";
    }

//呼叫query方法(SQL語法)
$result = mysqli_query($con,$insertSql);
if ($result){
     echo "<script>alert('新增成功')</script>";
     echo "<script>history.go(-1)</script>";
} else {
    echo "錯誤: " . $insertSql . "<br>" . $con->error;
}
?>