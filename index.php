<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="st.css">
    <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick-theme.css">
    <title>首頁</title>
    <style type="text/css" media="screen">
    .head{
    
    z-index: 4;
    height: 130px;
    background: #C27F78;
    width: 100%;
    position:fixed;
    }
    .logo{
    height: 110px;
    margin-top: 10px;
    position: fixed;
    }
    .ti{
    text-align: center;
    font-size: 35px;
    padding-top: 210px;
    margin-left: 10%;
    position: relative;
    }
    .add{
    margin-left: 87%;
    margin-top: -103px;
    width: 35px;
    }
    .login{
    margin-left: 90%;
    margin-top: -152px;
    width: 34px;
    }
    .wel{
    margin-left: 68%;
    margin-top: 85px;
    color: white;
    font-size: 20px;
    position: fixed;
    }
    .write{
    margin-left: 2%;
    margin-top: -30px;
    width: 2%;
    position: fixed;
    }
    .user{
    margin-left: 5%;
    margin-top: -30px;
    width: 2%;
    position: fixed;
    }
    .logout{
    margin-left: 8%;
    margin-top: -30px;
    width: 2%;
    position: fixed;
    }
    .adplay{
    margin-top: 80px;
    }
    * {
    box-sizing: border-box;
    }
    .slider {
    width: 60%;
    margin: 100px auto;
    margin-top: 30px;
    margin-left: 380px;
    }
    .slick-slide {
    margin: 0px 20px;
    }
    .slick-slide img {
    width: 100%;
    }
    .slick-prev:before,
    .slick-next:before {
    color: black;
    }
    .slick-slide {
    transition: all ease-in-out .3s;
    opacity: .2;
    will-change: transform;
    }
    
    .slick-active {
    opacity: .5;
    }
    .slick-current {
    opacity: 1;
    }
    .center_slider{margin-top:0px;}
    .search-container {
    float: right;
    margin-right: 22%;
    margin-top: 70px;
    }
    input[type=text] {
    
    background: none;
    border-style: none;
    padding: 6px;
    margin-top: 8px;
    margin-right: 0;
    font-size: 17px;
    color: white;
    border-bottom: 1px solid white;
    }
    .search-container button {
    float: right;
    padding: 6px 10px;
    margin-top: 8px;
    margin-right: 16px;
    background: #C27F78;
    font-size: 17px;
    border: none;
    cursor: pointer;
    }
    .fa-search{
    color: white;
    }
    .addpic{
    margin-left: 77%;
    width: 2%;
    margin-top: -50px;
    }
    </style>
  </head>
  <body style="background-image: url('img/back.png')!important;" >
    <div class="head">
      <a href="index.php"><img src="img/logo.png" alt="logo" class="logo"></a>
      <div class="search-container">
        <form action="search_action.php" method="post">
          <input type="text" class="mr-2" placeholder="Search.." name="pname" id="pname" >
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
      <a href="searchpic.php"><img src="img/addpic.png" class="addpic"  data-toggle="modal"></a>
      
      <?php if(isset($_SESSION['people'])){?>
      <div class="wel">
        <?php if(isset($_SESSION['people']['member_id'])){
      ?></div><?php

      			if($_SESSION['people']['identify']=='一般會員'){
      				 echo '<a href="write.php"><img src="img/write.png" class="write"></a>';
      				 echo '<a href="member_center.php"><img src="img/user.png" class="user"></a>';
      			}
      			else if($_SESSION['people']['identify']=='公司員工'){
				     echo '<img src="img/write.png" class="write" data-toggle="modal" data-target="#manual">';
				     echo '<a href="member_center.php"><img src="img/user.png" class="user"></a>';
				 }
      }else if(isset($_SESSION['people']['company_id'])){?>
      <?php
    ?></div><?php
    echo '<img src="img/write.png" class="write" data-toggle="modal" data-target="#manual">';
    echo '<a href="company_center.php"><img src="img/user.png" class="user"></a>';
    
    }
    echo '<a href="logout_out.php"><img src="img/logout.png" class="logout"></a>';
    
    }else{
    echo '<a href="register.php"><img src="img/add.png" class="add"></img></a>';
    echo '<a href="login.php"><img src="img/login.png" class="login"></img></a>';
    }
    ?>
  </div>
  <div class="ti">熱門文章</div>
  
  <div class="center_play">
    <section class="center slider">
      <?php
         


      $con=mysqli_connect("localhost","root","1234","pickpack");
      $result = mysqli_query($con,"Select * From article where kind ='1' group by product_name order by time desc") or die("Error");
      $row = mysqli_fetch_array ($result);
      for($i=0;$i<=6;$i++){
       $pid=rand(321565204,321565224);  

      ?>
      <div>
        <a href="ind.php?pid=<?php echo $pid?>">
          <img src="display_index.php?pid=<?php echo $pid?>" class="cp" height="250px">
        </a>
      </div>
      <?php } ?>
    </section>
  </div>
  <div class="adplay">
    <section class="lazy slider" data-sizes="50vw">
      <div>
        <img src="img/ad1.jpg">
      </div>
      <div>
        <img src="img/ad1.jpg">
      </div>
      <div>
        <img src="img/ad1.jpg">
      </div>
      <div>
        <img src="img/ad1.jpg">
      </div>
      <div>
        <img src="img/ad1.jpg">
      </div>
      
    </section>
  </div>
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="slick-1.8.1/slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
  
  $(".center").slick({
  dots: true,
  infinite: true,
  centerMode: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000
  });
  $(".lazy").slick({
  lazyLoad: 'ondemand', // ondemand progressive anticipated
  infinite: true,
  autoplay: true,
  autoplaySpeed: 4000
  });
  
  
  </script>
  <span class="toggle-button">
    <div class="menu-bar menu-bar-top"></div>
    <div class="menu-bar menu-bar-middle"></div>
    <div class="menu-bar menu-bar-bottom"></div>
  </span>
  <div class="menu-wrap">
    <div class="menu-sidebar">
      <ul class="menu">
        <li><a href="sub_category_new.php">美妝</a></li>
        <li><a href="sub.php">服飾</a></li>
        <li><a href="sub01.php">3c</a></li>
        <li><a href="sub02.php">旅遊</a></li>
        <li><a href="sub03.php">美食</a></li>
        <li><a href="sub04.php">其他</a></li>
        
      </ul>
    </div>
  </div>
</body>

<div class="modal fade" id="manual" tabindex="-1" aria-labelledby="manualLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title" id="manualLabel">企業徵文說明</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <h5><b>第一步 確認徵文之產品</b></h5>
      <h5><b>第二步 輸入文章標題及產品名稱</b></h5>
      <h5><b>第三步 創建招募表單</b></h5>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;至google問卷頁面創建表單，讓用戶閱讀文章後若有興趣，可前往填寫表單，以供企業挑選合適開箱人選</p>
      <h5><b>第四步 選擇產品分類</b></h5>
      <h5><b>第五步 輸入產品介紹及插入圖片</b></h5>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;讓用戶了解詳細產品資訊，包含產品外觀、性質、用途等</p>
      <h5 style="color:#aa5b52";><b>最後點選送出按鈕便成功刊登產品徵文文章！</b></h5>
    </div>
    <div class="modal-footer">
      
      <a href="company_write.php"><button type="button" class="btn btn-primary">已閱讀，開始發文</button></a>
    </div>
  </div>
</div>
</div>
</html>