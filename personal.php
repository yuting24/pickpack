<?php
session_start();
$per=$_GET["personal"];
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
    <title>個人</title>
    <style type="text/css" media="screen">
    .head{
    
    z-index: 4;
    height: 130px;
    background: #C27F78;
    width: 100%;
    position:fixed;
    }
    .add{
    margin-left: 87%;
    margin-top: 85px;
    width: 35px;
    }
    .logo{
      height: 110px;
      margin-top: 10px;
      position: fixed;
    }
    .pimg{
    width: 160px;
    height: 160px;
    background-color:#9D8189;
    border-radius: 100%;
    display: inline-block;
    margin-top: 250px;
    margin-left: 20%;
    }
    hr{
    margin-top: -35px;
    border-top:2px solid black;
    }
    .r{
    margin-top: -130px;
    margin-left: 32%;
    }
    .name{
    font-size: 30px;
    }
    .introd{
    margin-top: 20px;
    }
    .l{
    margin-top: -75px;
    margin-left: 70%;
    }
    .likep{
    font-size: 20px;
    }
    .button{
    font-size: 15px;
    text-align: center;
    font-weight: bold;
    background-color: white;
    border: 1px solid #9D8189;
    word-spacing: 20px;
    padding: 6px;
    border-radius: 5px;
    width:  20%;
    color:  #9D8189;
    margin-top: 15px;
    }
    .button:hover{
    background-color: #9D8189;
    color:  white;
    }
    .con{
    margin-top: 8%;
    margin-left: 20%;
    }
    .ti{
    margin-top: 7%;
    font-size: 25px;
    }
    .limg{
    margin-left: 0px;
    margin-top: 1%;
    }
    .p1{
    float: left;
    width: 18%;
    padding: 20px;
    }
    .p2{
    float: left;
    width: 18%;
    padding: 20px;
    }
    .p3{
    float: left;
    width: 18%;
    padding: 20px;
    }
    .p4{
    float: left;
    width: 18%;
    padding: 20px;
    }
    .p5{
    float: left;
    width: 18%;
    padding: 20px;
    }
    .wel{
    margin-left: 68%;
    margin-top: 85px;
    color: white;
    font-size: 20px;
    position: fixed;
    }
    .write{
    margin-left: 84%;
    margin-top: 80px;
    width: 2%;
    position: fixed;
    }
    .user{
    margin-left: 87%;
    margin-top: 80px;
    width: 2%;
    position: fixed;
    }
    .logout{
    margin-left: 90%;
    margin-top: 80px;
    width: 2%;
    position: fixed;
    }
    .login{
    margin-left: 90%;
    margin-top: -63px;
    width: 34px;
    }
    </style>
    
    
  </head>
  <body style="background-image: url('img/back.png')!important;">
    <div class="head">
      <a href="index.php"><img src="img/logo.png" alt="logo" class="logo"></a>
      <?php if(isset($_SESSION['people'])){?>
      <div class="wel">
        <?php if(isset($_SESSION['people']['member_id'])){
      echo "親愛的",$_SESSION['people']['member_name'],"您好";?></div><?php
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
    echo "親愛的",$_SESSION['people']['company_name'],"您好";?></div><?php
    echo '<a href="write.php"><img src="img/write.png" class="write"></a>';
    echo '<a href="company_center.php"><img src="img/user.png" class="user"></a>';
    
    }
    echo '<a href="logout_out.php"><img src="img/logout.png" class="logout"></a>';
    
    }else{
    echo '<a href="register.php"><img src="img/add.png" class="add"></img></a>';
    echo '<a href="login.php"><img src="img/login.png" class="login"></img></a>';
    }
    ?>
  </div>
  <form action="follow.php" method="post">
    <?php
    $pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234');
    $sql=$pdo->prepare('select * from member where member_name=?');
    $sql->execute([$per]);
    $data=$sql->fetchAll();
    if($data){
    foreach($data as $rows){
    $member_id=$rows['member_id'];?>
    <img src="display_personal.php?mper=<?php echo $member_id ?>" class="pimg"/>
    <hr>
    <div class="r">'
      <div class="name"><?php echo $rows['member_name']?>
      </div>
    </div>
    
    
    <?php
    echo '<input type="hidden" name="member_id" value="',$rows['member_id'],'">';
    echo '<input type="hidden" name="member_name" value="',$rows['member_name'],'">';
    }
    ?>
    <div class="l">
      
      <?php
      $pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234');
      $sql=$pdo->prepare('select count(fans_id) from fans where track_name=?');
      $sql->execute([$_GET["personal"]]);
      $num=$sql->fetchColumn();
      echo '<p style="font-size: 20px;">','粉絲:',$num,'</p>';
      $p['fans_id']=null;
      $sql=$pdo->prepare('select * from fans where track_name=?');
      $sql->execute([$_GET["personal"]]);
      foreach($sql->fetchAll() as $p){
      $p['fans_id'];
      }
      if(isset($_SESSION['people'])){
      if(isset($_SESSION['people']['company_id'])){
      }else if($p['fans_id']==$_SESSION['people']['member_id']){
      echo'<input class="button" type="submit" value="-取消追蹤"/></div></form>';
      }
      else{echo '<input class="button" type="submit" value="+開始追蹤"/></div></form>';}
      }
      else{
      $pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234');
      $sql=$pdo->prepare('select * from company where company_name=?');
      $sql->execute([$_GET["personal"]]);
      foreach($sql->fetchAll() as $rows){ ?>
      <img src="display_personal.php?cper=<?php echo $rows['company_id']?>" class="pimg"/><hr>
      <div class="r">
      <div class="name"><?php echo $rows['company_name']?></div>
      </div>
      
     <?php }
      }
        }
      ?>
    </div>
  </form>
  
      
      <div class="con">
        <div class="ti mb-4">個人貼文</div>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="allitem" role="tabpanel" aria-label ledby="allitem-tab">
            <div class="row w-75 container">
              <?php
              $con=mysqli_connect("localhost","root","1234","pickpack");
              $result = mysqli_query($con,"Select * From article where write_name='$per'") or die("Error");
              while ($row = mysqli_fetch_array ($result)){?>
              <div class="col-3 item mb-5 <?php echo $row['small_kind'] ?>">
                <div class="card" style="width: 12rem;">
                  
                  
                  <img src="display_particle.php?wid=<?php echo $row['article_id']?>" class="card-img-top" alt="" height="180px">
                  <div class="card-body px-1">
                    <a href="ind.php?pid=<?php echo $row['article_id']?>"><h5 class="card-title text-center">
                      <?php
                    echo $row['title'];?></h5></a>
                  </div>
                </div>
              </div>
              <?php
              }?>
            </div>
          </div>
        </div>
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
    </body>
  </html>