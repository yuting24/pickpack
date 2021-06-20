
<?php
session_start();
$con=mysqli_connect("localhost","root","1234","pickpack");
$article_id=($_GET['pid']);
$id=$_SESSION['people']['member_id'];//先死的,要登入控制
$title=($_GET['title']);
$insertSql="INSERT INTO my_lover(member_id,article_id,title)VALUES('$id','$article_id','$title')";
//呼叫query方法(SQL語法)
$result = mysqli_query($con,$insertSql);
 
if ($result){
    echo "<script>alert('收藏成功');</script>";
	echo "<script>self.location=document.referrer</script>";
} else {
    echo "錯誤: " . $insertSql . "<br>" . $con->error;
}
?>

