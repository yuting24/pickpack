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

.container {
  position: relative;
  width: 255px;
  margin-right:120px;
  margin-top:3%;
  float:left;
}

.image {
  display: block;
  width: 350px;
  height:250px;

}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: auto;
  width: 350px;
  opacity: 0;
  transition: .5s ease;
  background-color: #01814A;

}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}


</style>
</head>
<body>


<div id="main">

  <span style="font-size:30px;cursor:pointer;float:left;margin:10px;color:white;" onclick="openNav()">&#9776; </span>
  <div class="topdiv"></div>
<a href="beauty.php">
  <div class="container"style="margin-left:100px;">
  <img src="img/b1.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">美妝</div>
  </div>
</div>
</a>

 <div class="container">
  <img src="img/b2.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">衣服</div>
  </div>
</div>

 <div class="container">
  <img src="img/b3.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">美食</div>
  </div>
</div>
 <div class="container" style="margin-left:300px;">
  <img src="img/b4.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">旅遊</div>
  </div>
</div>
 <div class="container">
  <img src="img/b5.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">3c</div>
  </div>
</div>

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


</script>
   
</body>
</html> 
