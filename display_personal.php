<?php




if(isset($_REQUEST['mper'])){
//從資料庫取得圖片
$mper=$_REQUEST['mper'];
$conn=mysqli_connect("localhost","root","1234","pickpack");

$sql=sprintf("select * from member where member_id=$mper;");

  $result=mysqli_query($conn,$sql);

//顯示圖片
      while ($row = mysqli_fetch_array ($result))
    {
    header("Content-type: image/jpeg");

    echo $row['picture'];
    }
  mysqli_close($conn);
}



if(isset($_REQUEST['cper'])){
$cper=$_REQUEST['cper'];
//從資料庫取得圖片
$conn=mysqli_connect("localhost","root","1234","pickpack");

$sql=sprintf("select * from company where company_id=$cper;");

$result=mysqli_query($conn,$sql);

//顯示圖片
while ($row = mysqli_fetch_array ($result))
{
header("Content-type: image/jpeg");

echo $row['picture'];
}
mysqli_close($conn);
}
?>
