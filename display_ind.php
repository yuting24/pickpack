<?php
session_start();
$aid=$_SESSION['article_id'];
$id=$_REQUEST['id'];
		  $conn=mysqli_connect("localhost","root","1234","pickpack");       
		                    
		  $sql=sprintf("Select * From article where article_id =$aid;");
		            
		  $result=mysqli_query($conn,$sql);        
		    
		   //顯示圖片

		 if($id=='1') {
		while ($row = mysqli_fetch_array ($result))
		{		
					if($row['p1']!=null){
						header("Content-type: image/jpeg");
							echo $row['p1'];
						}else{
							unset($_SESSION['article_id']);
						}
				
								
			
		} 
	
	}

		 if($id=='2') {
		while ($row = mysqli_fetch_array ($result))
		{		
					if($row['p2']!=null){
						header("Content-type: image/jpeg");
							echo $row['p2'];
						}else{
							unset($_SESSION['article_id']);
						}
				
								
			
		} 
	
	}

		 if($id=='3') {
		while ($row = mysqli_fetch_array ($result))
		{		
					if($row['p3']!=null){
						header("Content-type: image/jpeg");
							echo $row['p3'];
						}else{
							unset($_SESSION['article_id']);
						}
				
								
			
		} 
	
	}

		 if($id=='4') {
		while ($row = mysqli_fetch_array ($result))
		{		
					if($row['p4']!=null){
						header("Content-type: image/jpeg");
							echo $row['p4'];
						}else{
							unset($_SESSION['article_id']);
						}
				
								
			
		} 
	
	}

		 if($id=='5') {
		while ($row = mysqli_fetch_array ($result))
		{		
					if($row['p5']!=null){
						header("Content-type: image/jpeg");
							echo $row['p5'];
						}else{
							unset($_SESSION['article_id']);
						}
				
								
			
		} 
	
	}
		    mysqli_close($conn);


?>
