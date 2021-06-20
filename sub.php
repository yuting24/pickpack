<?php 
$con=mysqli_connect("localhost","root","1234","pickpack");
$result = mysqli_query($con,"Select * From article where kind ='2' order by time desc") or die("Error");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/web.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="st.css">
  <link rel="stylesheet" href="css/all.css">
    <title>Document</title>
    <style type="text/css" media="screen">
      .header{
          z-index: 1;
          height: 130px;
          background: #C27F78;
          width: 100%;
          position: fixed;
          margin-top: 0px;
      }
      .logo{
        height: 110px;
        margin-top: 10px;
        position: fixed;
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
<body style="background-image: url('img/back.png')!important;">
  <div class="header" style="position: fixed; top:0;">
    <a href="index.php"><img src="img/logo.png" alt="logo" class="logo"></a>

    <div class="search-container">
       <form action="search_action.php" method="post">
          <input type="text" class="mr-2" placeholder="Search.." name="pname" id="pname">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
      <a href="searchpic.php"><img src="img/addpic.png" class="addpic"  data-toggle="modal"></a>
   <?php if(isset($_SESSION['people'])){?>
    <div class="wel">
    <?php if(isset($_SESSION['people']['member_id'])){?></div><?php
            if($_SESSION['people']['identify']=='一般會員'){
               echo '<a href="write.php"><img src="img/write.png" class="write"></a>';
               echo '<a href="member_center.php"><img src="img/user.png" class="user"></a>';
            }
            else if($_SESSION['people']['identify']=='公司員工'){
             echo '<img src="img/write.png" class="write" data-toggle="modal" data-target="#manual">';
             echo '<a href="member_center.php"><img src="img/user.png" class="user"></a>';
            }
  }else if(isset($_SESSION['people']['company_id'])){?></div><?php
     echo '<a href="company_write.php"><img src="img/write.png" class="write"></a>';
    echo '<a href="company_center.php"><img src="img/user.png" class="user"></a>';

      
    }
    echo '<a href="logout_out.php"><img src="img/logout.png" class="logout"></a>';
    
  }else{
      echo '<a href="register.php"><img src="img/add.png" class="add"></img></a>';
      echo '<a href="login.php"><img src="img/login.png" class="login"></img></a>';
  }
   
   ?> 
  </div>
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
<div class="" style="margin-top: 13%; margin-bottom: 3%;">
    <h2 class="text-center active" onclick="productType('all')">服飾</h2>
      <ul class="nav justify-content-center" id="myTab" role="tablist">
    <?php $small=array("上衣男","上衣女","下著男","下著女","連身裙","外套");
  for($i=0;$i<count($small);$i++){
  ?>
  
  
        <li class="nav-item" role="presentation">
  <a href="sub_01.php?beauty=<?php echo $i;?>"class="nav-link"><h5><?php echo $small[$i];?></h5></a>
        </li>
      <?php }?>
      </ul>
  </div>
  
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="allitem" role="tabpanel" aria-label ledby="allitem-tab">
      <div class="row w-75 mx-auto container">
    <?php 
    while ($row = mysqli_fetch_array ($result)){?>
        <div class="col-3 item <?php echo $row['small_kind'] ?>">
            <div class="card" style="width: 12rem;">
              <?php
              $pname=$row['product_name'];
              ?>

              <img src="display_sub.php?pname=<?php echo $pname?>" class="card-img-top" alt="" height="180px">
              <div class="card-body px-1">
              <h5 class="card-title text-center"><a href="product.php?pid=<?php echo $row['product_name']?>"><?php echo $row['product_name']?></a></h5>
                </h5></a>
              </div>
            </div>
        </div>
    <?php
}?>
  </div>
  </div>
  </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
  productType("all")
  function productType(c) {
    var x, i;
    x = document.getElementsByClassName("item");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
      removeProduct(x[i], "show");
      if (x[i].className.indexOf(c) > -1)
        addProduct(x[i], "show");
    }
  }
  function addProduct(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) {
        element.className += " " + arr2[i];
      }
    }
  }
  function removeProduct(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
      }
    }
    element.className = arr1.join(" ");
  }
  </script>
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