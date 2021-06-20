<?php
    $pid=$_REQUEST['pid'];
        //從資料庫取得圖片

      $conn=mysqli_connect("localhost","root","1234","pickpack");       
                        
      $sql=sprintf("select * from article where article_id='$pid' ");

                
      $result=mysqli_query($conn,$sql);        
        
       //顯示圖片
    while ($row = mysqli_fetch_array ($result))
    {
       header("Content-type: image/jpeg");
       // echo $pname ;

         echo $row['p1'];
    } 
        mysqli_close($conn);
 

?>
