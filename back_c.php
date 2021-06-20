<?php 
$con=mysqli_connect("localhost","root","1234","pickpack");
$result = mysqli_query($con,"Select * From company") or die("Error");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
  background-color:#FFEDCC;
  margin:0px;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
 
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

/* Style the sidenav links and the dropdown button */
.dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

.topdiv{
  background-color: #262626;
  height:55px;
  margin:0px;
}
.p {border:5px solid;
border-color:#262626;
height:auto;
margin:2%;
font-size:30px;
padding:10px;}

.slogan{
	font-family:微軟正黑體;
	font-size:50px;
    margin-left:5%;
	margin-top:2%;
	margin-bottom:0;

}
</style>
</head>
<body>


<div id="main">

  <span style="font-size:30px;cursor:pointer;float:left;margin:10px;color:white;" onclick="openNav()">&#9776; </span>
  <div class="topdiv"></div>
  <p class="slogan">廠商列表</p>
 <div class="p">
 <?php 
	  while ($row = mysqli_fetch_array ($result)){
		  echo '<li>';
	  echo $row['company_name'];
	  ?>
 <button style="float:right;width:100px;height:30px;margin:5px;"onclick="deletem('<?php echo $row['company_id'] ?>')" type="button">註銷此公司</button>
 <hr>
 <?php } ?>
 </div>
	  

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="back_a.php">文章管理</a>
  <a href="back_c.php">廠商管理</a>
  <a href="back_m.php">會員管理</a>

</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
function deletem(id) {
if(confirm("確定刪除" + id + "這個公司帳號?"))
location.href="delc.php?id=" + id;
}


</script>
   
</body>
</html> 
