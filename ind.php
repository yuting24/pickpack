<?php 
session_start();
$con=mysqli_connect("localhost","root","1234","pickpack");
$pid = $_GET["pid"];
$result = mysqli_query($con,"Select * From article where article_id ='$pid' ") or die("Error");
if($row = mysqli_fetch_array ($result)){  
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
  <script src="https://kit.fontawesome.com/2f6089dc24.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
  <script src="script.js"></script>
  <link rel="stylesheet" href="st.css">
  <link rel="stylesheet" href="le.css">
  <title>文章</title>
  <style type="text/css" media="screen">
    .head{
      margin-top: -200px;
      z-index: 4;
      height: 130px;
      background: #C27F78;
      width: 100%;
      position: fixed;
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
    .writee{
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

    i{
      font-size: 35px;
      margin-left: 7%;
      margin-top: 10px;
    }
    i:hover{
      class:;
    }

    input.input {padding:5px 15px; 
                 background:white; 
                 border:0 none;
                 cursor:pointer;
                 -webkit-border-radius: 5px;
                 border-radius: 5px; 
               } 

    textarea {padding:5px 20px; 
              background:white; 
              border:0 none;
              cursor:pointer;
              -webkit-border-radius: 5px;
              border-radius: 5px; 
            }                     

    .input{
      font-size:20px;
      margin-top: -45px;
      margin-left: 80px;
      /*resize: none;
      outline: none;*/
    }
    label.a{font-size:20px; 
            font-weight: bold; 
            color:black; 
          }
      #btn
  {
    position: relative;
    left: 450px;

  }

    .button{font-size: 15px; 
            text-align: center; 
            font-weight: bold; 
            background-color: white; 
            border: 1px solid #9D8189;
            word-spacing: 20px; 
            padding: 6px; 
            border-radius: 5px;
            width:  12%;
            color:  #9D8189;
          }
    .button:hover{
      background-color: #9D8189;
      color:  white;
    }
    .butt{
      text-align: right;
      margin-right: 30%;
    }
    .star{
      width: 10%
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
               echo '<a href="write.php"><img src="img/write.png" class="writee"></a>';
               echo '<a href="member_center.php"><img src="img/user.png" class="user"></a>';
            }
            else if($_SESSION['people']['identify']=='公司員工'){
             echo '<img src="img/write.png" class="writee" data-toggle="modal" data-target="#manual">';
             echo '<a href="member_center.php"><img src="img/user.png" class="user"></a>';
         }
      }else if(isset($_SESSION['people']['company_id'])){?>
      <?php
    ?></div><?php
    echo '<img src="img/write.png" class="writee" data-toggle="modal" data-target="#manual">';
    echo '<a href="company_center.php"><img src="img/user.png" class="user"></a>';
    
    }
    echo '<a href="logout_out.php"><img src="img/logout.png" class="logout"></a>';
    
    }else{
    echo '<a href="register.php"><img src="img/add.png" class="add"></img></a>';
    echo '<a href="login.php"><img src="img/login.png" class="login"></img></a>';
    }
    ?>
  </div>
  <div class="ti">
  <div class="cont">
    
      <?php echo $row['title'],'<br>';?>
      </div>
      <div class="lect_type">美妝
      <a href="fansadd.php?pid=<?php echo $row['article_id'] ?>&&title=<?php echo $row['title'] ?>"> <img src="img/heart.png" width="30px"> </a></div>

      <div class="lect2">
          <div class="title_right">
              
              <div class="lect_date"><?php echo $row['time'],'<br>';?></div>
          </div>
          <div class="title_left">
             
             <div class="author_name">
              <?php
               $pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234');
               $sql=$pdo->prepare('select * from member where member_name=?');
               $sql->execute([$row['write_name']]);
               $data=$sql->fetchAll();
                if($data){
                            $_SESSION['m_article']=$row['write_id'];
                            echo'<a href="personal.php?personal=',$row['write_name'],'">
                          <img src="img/person.png" class="author_img mr-3" /></a>';
                            echo $row['write_name'],'<br>';
                      }else{
                        echo'<a href="personal.php?personal=',$row['write_name'],'">
                         <img src="img/person.png" class="author_img" /></a>';
                          echo $row['write_name'];
                          echo '<img src="img/crown.png" width="30px" height="30px" class="mr-3">','<br>';}?>
                     
             </div>
          </div>
      </div>
      <div>
        <?php if($row['mark']=='一般貼文'){
            echo '商品評分：';
              for($i=1;$i<=$row['good_rate'];$i++){
                 echo '<img src="img/star01.png"  width="20px" height="20px">';
              }
        }else if($row['mark']=='廠商貼文'){
                echo '<a href="',$row['google_name'],'">表單連結</a>';
        }
      ?>
        <p class="text"><?php echo $row['content'],'<br>';?></p> 

        <img class="cp" src="display_ind.php?id=1" alt="" width="200px"/>
        <img class="cp" src="display_ind.php?id=2" alt="" width="200px"/>
        <img class="cp" src="display_ind.php?id=3" alt="" width="200px"/>
        <img class="cp" src="display_ind.php?id=4" alt="" width="200px"/>
        <img class="cp" src="display_ind.php?id=5" alt="" width="200px"/>
        <?php $_SESSION['article_id']=$row['article_id'];?>

     
      </div>
	  <?php } ?>
<hr class="text_hr" width="72%" align="left">
<?php if(isset($_SESSION['people'])){?>
<form name="form1" method="post" action="articlereply.php?pid=<?php echo $row['article_id'];?>">
<div class="b">
<label class="a">
<span>留言：</span><br>
<textarea class="input"  name="rate_content" placeholder="留言......." rows="1" cols="70"></textarea>
</label><p>


<div class="butt">
  <input type="submit" class="button" value="送出" />
  <input type="reset" class="button" value="清除" />
</div>
</div>
</form>
<?php }?>
<?php 
 $pid = $_GET["pid"];
    $result2 = mysqli_query($con,"Select * From rate where article_id ='$pid' order by time desc") or die("Error");
    $result4 = mysqli_query($con,"Select * From reply where article_id ='$pid'") or die("no");
	$row3 = mysqli_fetch_array ($result2);
    $data_nums = mysqli_num_rows($result2); //統計總比數
    $per = 5; //每頁顯示項目數量
    $pages = ceil($data_nums/$per); //取得不小於值的下一個整數
    if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
        $page=1; //則在此設定起始頁數
    } else {
        $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
    }
    $start = ($page-1)*$per; //每一頁開始的資料序號
   $result3 = mysqli_query($con,"Select * From rate where article_id ='$pid' order by time desc".' LIMIT '.$start.', '.$per) or die("Error");

while ($row2 = mysqli_fetch_array ($result3))
{?>

<hr class="text_hr" width="72%" align="left"></div>
<div class="S2-wbox"><!-- 留言板開始 -->

              <!-- 一個留言開始 *********************************-->
              <div class="message_BOX">
                <div class="message_top">
                  <div></div>
                  <div class="FX_M">
                    <div class="message_name">
                     <a href="personal.php?personal=<?php echo $row2['word_name'];?>">
                      <img src="img/person.png" class="author_img" /></a>
                       <?php
               $pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234');
               $sql=$pdo->prepare('select * from member where member_name=?');
               $sql->execute([$row2['word_name']]);
               $data=$sql->fetchAll();
                    if($data){
                             foreach($data as $rows){
                        if($rows['identify']=='公司員工'){
                          echo $row2['word_name'];
                          echo '<img src="img/name.png" width="20px" height="20px">','<br>';  
                          }else{
                            echo $row2['word_name'],'<br>';
                          }
                         }
                      }else{
                          echo $row2['word_name'];
                          echo '<img src="img/crown.png" width="30px" height="30px">','<br>';}?></div>
                     
             <!--<div class="author_id"><?php echo $row2['word_id'],'<br>';?><br></div>-->
                          <div class="message_star">
                      
                      
                    </div>
                  </div>
                  <div class="message_like"><!-- 一個愛心的開始 -->
                    
                  </div><!-- 一個愛心的結尾 -->
                </div>
                <div class="message_bottom">
                  <div class="message_w">
                    <?php echo $row2['rate_content'];?>
                  </div>
                  <div class="message_w2">
                    <?php echo $row2['time'];?>
                  </div>
                </div>
			
              </div><!-- 一個留言結尾 ****************************************************-->
       <?php if(isset($_SESSION['people'])){?>       
              <form name="form2" method="post" action="articlereply2.php?pid=<?php echo $pid?>&&id=<?php echo $row3['id']?>">
留言者：<?php if(isset($_SESSION['people']['member_id'])){

                      if($_SESSION['people']['identify']=='公司員工'){
                          echo $_SESSION['people']['member_name'];
                          echo '<img src="img/name.png" width="20px" height="20px">','<br>';  
                          }else{
                            echo $_SESSION['people']['member_name'],'<br>';
                          }
                 
              }else if(isset($_SESSION['people']['company_id'])){
                echo $_SESSION['people']['company_name'];
                echo '<img src="img/crown.png" width="30px" height="30px">';
                }?><br>
評價內容：<textarea class="input"  name="reply_content" placeholder="留言......." rows="1" cols="69"></textarea><br>
<div class="butt" style="margin-right:7% !important;">
<input type="submit" class="button" value="送出" />
<input type="reset" class="button" value="清除" />
</div>
</form>
<?php }?>
<?php
			if($row = mysqli_fetch_array ($result4))
{
          $pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234');
               $sql=$pdo->prepare('select * from member where member_name=?');
               $sql->execute([$row['reply_name']]);
               $data=$sql->fetchAll();
                    if($data){
                             foreach($data as $rows){
                        if($rows['identify']=='公司員工'){
                            echo '回復人:';
                            echo $row['reply_name'];
                             echo '<img src="img/name.png" width="20px" height="20px">','<br>';  
                            echo '內容:';
                            echo $row['reply_content'],'<br>';
                            echo '時間:';
                            echo $row['reply_time'],'<br>';
                            echo '</p>';
                           
                          }else{
                              echo '回復人:';
                              echo $row['reply_name'],'<br>';
                              echo '內容:';
                              echo $row['reply_content'],'<br>';
                              echo '時間:';
                              echo $row['reply_time'],'<br>';
                              echo '</p>';
                          }
                         }
                      }else{
                              echo '回復人:';
                              echo $row['reply_name'];
                              echo '<img src="img/crown.png" width="30px" height="30px">','<br>';
                              echo '內容:';
                              echo $row['reply_content'],'<br>';
                              echo '時間:';
                              echo $row['reply_time'],'<br>';
                              echo '</p>';
                         }
                     



}}
   echo '共 '.$data_nums.' 筆-在 '.$page.' 頁-共 '.$pages.' 頁';
    echo "<br /><a href=?page=1&&pid=".$pid.">首頁</a> ";
    echo "第 ";
    for( $i=1 ; $i<=$pages ; $i++ ) {
        if ( $page-3 < $i && $i < $page+3 ) {
            echo "<a href=?page=".$i."&&pid=".$pid.">".$i."</a> ";
        }
    } 
    echo " 頁 <a href=?page=".$pages."&&pid=".$pid.">末頁</a><br /><br />";?>

            </div><!-- 留言板結尾 -->

          </div><!--整個評論版結尾-->
        </section><!-- 第二部分結尾 -->
<?php}

?>
	
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
