<?php
   session_start();
   if(isset($_SESSION['people']['member_id'])){
    	$id=$_SESSION['people']['member_id'];
    	  //從資料庫取得圖片
		  $conn=mysqli_connect("localhost","root","1234","pickpack");       
		                    
		  $sql=sprintf("select * from member where member_id=$id;");
		            
		  $result=mysqli_query($conn,$sql);        
		    
		   //顯示圖片
		while ($row = mysqli_fetch_array ($result))
		{
				header("Content-type: image/jpeg"); 
				  
			    echo $row['picture'];
		} 
		    mysqli_close($conn);

   }else if(isset($_SESSION['people']['company_id'])){

    	$id=$_SESSION['people']['company_id'];
	    //從資料庫取得圖片
	    $conn=mysqli_connect("localhost","root","1234","pickpack");       
	                    
	    $sql=sprintf("select * from company where company_id=$id;");
	            
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
