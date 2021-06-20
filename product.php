<?php 
$con=mysqli_connect("localhost","root","1234","pickpack");
$pid = $_GET["pid"];
$a=[1,2,3,4,5];
$result = mysqli_query($con,"Select * From article where product_name ='$pid' order by time desc") or die("Error");

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
  <title>產品</title>
	<style type="text/css" media="screen">
    	.header{
      		z-index: 1;
      		height: 130px;
      		background: #C27F78;
      		width: 100%;
      		position: fixed;
          margin-top: -230px;
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
    
      .pt{
        margin-top: 230px;
        margin-left: 15%;

      }
      .prod{
        width: 17%;
      }
      .p_name{
        margin-left: 20%;
        margin-top: -90px;
        font-size: 25px;
      }
      .hr1{
        margin-top: 80px;
        size: 10;
      }
      .u_img{
        width: 50px;
        height: 50px;
        background-color:#9D8189; 
        border-radius: 100%;
        display: inline-block;
        margin-top: 50px;
      }
      .ptitle{
        margin-top: -45px;
        margin-left: 6%;
        font-size: 20px;
      }
      .ul{
        margin-top: -55px;
        margin-left: 60%;
      }
      .ul_img{
        width: 30%;
      }
      .prod{width:17%;}
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
	<div class="header">
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
  <div class="pt">
    <div>
      <img src="pro1.jpg" alt="" class="prod">
    </div>
    <div class="p_name" style="padding-left:100px">
      <?php 
  $row = mysqli_fetch_array ($result);
      echo $row['product_name']?>
    </div>
    <div id="chartContainer" style="height: 370px; width: 50%;margin-left:100px"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <?php

$dataPoints = array();
    
    $pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234'); 

    $sql=$pdo->prepare('select title,good_rate,count(good_rate),product_name from article where product_name=? group by good_rate');
    $sql->execute([$row['product_name']]);

    foreach($sql->fetchAll() as $row01)
          {

            $data1 = array_push($dataPoints,array("y"=>intval($row01['count(good_rate)']),"label"=>intval($row01['good_rate'])));
               
          }
     

  
?>



 <?php


    $pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234'); 

    $sql=$pdo->prepare('select avg(good_rate) from article where product_name=?');
    $sql->execute([$row['product_name']]);

    foreach($sql->fetchAll() as $row01)
          {

            $avg1= $row01['avg(good_rate)']; 

               
          }
     

  
?>
<div class="card" style="width: 11rem; float:right; margin-right: 20%; margin-top: -300px;">
  <img src="img/score.png" class="card-img-top" alt="..." style="width: 125px;margin-left:20px;">
  <div class="card-body">
    <h5 class="card-title">平均評價星數</h5>
    <p class="card-text" style="font-size: 25px;margin-left:40px;"><?php  echo floor($avg1*100)/100;?></p>
    
  </div>
</div>   

	
<div>
  <hr class="hr1" width="72%" align="left"/>
  <div class="u_img"><img src="img/logo2.png" alt="logo" width="55"></div>
  <div class="ptitle">
    <a href="ind.php?pid=<?php echo $row['article_id'] ?>"><?php echo $row['title']?></a>
    <?php
    if($row['mark']=='廠商貼文'){?>
    <img src="img/crown.png" width="30px" height="30px">
    <?php }?>
  </div>
  
  
  <?php
  while ($row = mysqli_fetch_array ($result)){

   ?>
  <div class="u_img"><img src="img/logo2.png" alt="logo" width="55"></div>
  <div class="ptitle">
    <a href="ind.php?pid=<?php echo $row['article_id'] ?>"><?php echo $row['title']?></a>
      <?php if($row['mark']=='廠商貼文'){?>
    <img src="img/crown.png" width="30px" height="30px">
    <?php }?>
  </div>
  <?php } ?>
</div>

<?php

$result2 = mysqli_query($con,"Select product_name From article where product_name ='$pid'") or die("Error");
$row = mysqli_fetch_array ($result2);
//echo $row["product_name"];
$search =$row["product_name"];
$search = rawurlencode($search);
$url_dcard = "https://www.dcard.tw/search?query=".$search;
$url_youtube = "https://www.youtube.com/results?search_query=".$search;

$html_dcard = file_get_contents($url_dcard);
$html_youtube = file_get_contents($url_youtube);

$dcard = array();
$youtube = array();


//抓取dcard資料
preg_match_all('!<h2 class="tgn9uw-2 cKeNdI"><a class=".*?" href="\/f\/.*?\/p\/.*?"><span>(.*?)<\/span><\/a><\/h2>!',$html_dcard,$match);
$dcard['title'] = $match[1];

preg_match_all('!<a class="tgn9uw-3 .*?" href="(.*?)">!',$html_dcard,$match);
$dcard['URL'] =$match[1];

//抓取youtube資料
preg_match_all('!{"url":".*?","width":.*?,"height":.*?}]},"title":{"runs":\[{"text":"(.*?)"}\],"accessibility":{"accessibilityData":{"label":".*?"}}}!',$html_youtube,$match);
$youtube['title'] = $match[1];

preg_match_all('!"viewCountText":{"simpleText":".*?"},"navigationEndpoint":{"clickTrackingParams":".*?","commandMetadata":{"webCommandMetadata":{"url":"(.*?)","webPageType":"WEB_PAGE_TYPE_WATCH","rootVe":3832}}!',$html_youtube,$match);
$youtube['URL'] = $match[1];




for($i=0;$i<count($dcard['title']);$i++){
    
    for($j=$i;$j<=$i;$j++)
    {
        echo '<div class="u_img"></div>';
        echo '<div class="ptitle"><a href="https://www.dcard.tw',$dcard['URL'][$j],'">',$dcard['title'][$j],'</a></div>';
        echo '<div class="ul">';
        echo '<img class="ul_img" src="" alt="">';
        echo '</div><br>';
        echo '<div class="u_img"></div>';
        echo '<div class="ptitle"><a href="https://www.youtube.com',$youtube['URL'][$j],'">',$youtube['title'][$j],'</a></div>';
        echo '<div class="ul">';
        echo '<img class="ul_img" src="" alt="">';
        echo '</div><br>';
        
    }

}
// for($a=0;$a<count($youtube['title']);$a++){
    
//     for($b=$a;$b<=$a;$b++)
//     {
//         echo '<tr>';
//         echo '<td><a href="https://www.youtube.com',$youtube['URL'][$b],'">',$youtube['title'][$b],'</td>';
//         echo '</tr>';
//     }

// }
echo '</table>';

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
</body>

<div class="modal fade" id="uploadpic" tabindex="-1" aria-labelledby="uploadpicLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="uploadpicLabel">圖片搜尋</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="mb-3 form-inline">
                <input class="form-control px-0 py-1 w-75" type="file" id="formFile" style="margin-right: 0 !important;">
                <button type="button" class="btn btn-primary ml-2">上傳</button>
              </div>
              <img src="img/4.jpg" class="img-fluid" alt="...">
              <input type="hidden" name="辨識後文字" value="">
            </div>
            <div class="modal-footer">
              
              <button type="button" class="btn btn-primary">開始搜索</button>
            </div>
          </div>
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
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  exportEnabled: true,
  theme: "light1", // "light1", "light2", "dark1", "dark2"
  title:{
    text: "聲量"
  },
  data: [{
    type: "column", //change type to bar, line, area, pie, etc  
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}
</script>