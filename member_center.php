<?php
session_start();
$member_id=$identify=$identifycode='';
$member_name=$_SESSION['people']['member_name'];
$id=$_SESSION['people']['member_id'];
$identify=$_SESSION['people']['identify'];
$account=$_SESSION['people']['account'];
$password=$_SESSION['people']['password'];
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
    <title>Document</title>
    <style type="text/css" media="screen">
    .head{
    
    z-index: 4;
    height: 130px;
    background: #C27F78;
    width: 100%;
    position:fixed;
    margin-top:-11% ;
    }
      .logo{
    height: 110px;
    margin-top: 10px;
    position: fixed;
    }
    .login{
    margin-left: 90%;
    margin-top: -63px;
    width: 34px;
    }
    .wel{
    margin-left: 72%;
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
    </style>
  </head>
  <body style="background-image: url('img/back.png')!important;">
   <div class="head">
      <a href="index.php"><img src="img/logo.png" alt="logo" class="logo"></a>
     
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
    <div class="container-fluid" style="margin-top: 11%;">
      <h2 class="mx-auto w-75 mb-4 px-3">會員中心</h2>
      <div class="row mx-auto w-75">
        <div class="col-5">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                  <img src="display.php" class="img-thumbnail" height="200px" width="200px" />
                </div>
                <div class="col-6 align-self-end">
                   <?php $pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234');
                  $sql=$pdo->prepare('select count(fans_id) from fans where track_id=?');
                  $sql->execute([$_SESSION['people']['member_id']]);
                  $num=$sql->fetchColumn();?>
                   <p style="font-size: 20px; cursor: pointer;" data-toggle="modal" data-target="#followers">粉絲 : <?php echo $num;?></p>
                <div class="modal fade" id="followers" tabindex="-1" aria-labelledby="followersLabel" aria-hidden="true">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="followersLabel">粉絲</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body py-0 px-1">
                       <?php   
                       $pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234'); 
                        $sql=$pdo->prepare('select * from fans where track_id=?');
                        $sql->execute([$_SESSION['people']['member_id']]);
                        foreach($sql->fetchAll() as $row){?>
                           
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">  
                            <img src="img/person.png" class="avatar">
                            <span class="my-auto"><?php echo$row['fans_name'];?></span>
                          </li>
                        <?php }?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>



                   <?php 
                  $pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234');
                  $sql=$pdo->prepare('select count(track_id) from fans where fans_id=?');
                  $sql->execute([$_SESSION['people']['member_id']]);
                  $num=$sql->fetchColumn();?>
                 <p style="font-size: 20px; cursor: pointer;" data-toggle="modal" data-target="#following">追蹤中 : <?php echo $num;?></p>
                <div class="modal fade" id="following" tabindex="-1" aria-labelledby="followingLabel" aria-hidden="true">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="followingLabel">追蹤中</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body py-0 px-1">
                        <?php 
                      $pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234'); 
                      $sql=$pdo->prepare('select * from fans where fans_id=?');
                      $sql->execute([$_SESSION['people']['member_id']]);
                      foreach($sql->fetchAll() as $row){?>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">  
                            <img src="img/person.png" class="avatar">
                            <span class="my-auto"><?php echo$row['track_name'];?></span>
                          </li>
                              <?php }?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  
                  
                 
                 
                  <form action="revise_member.php" method="post">
                    <button type="submit" class="btn btn-primary btn-block">儲存</button>
                </div>
                <div class="col mt-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">會員身分</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="identify" value="<?php echo$identify?>" readonly>
                      </div>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">姓名</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" name="member_name" value="<?php echo $member_name?>" aria-describedby="inputGroup-sizing-default">
                      </div>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="account" value="<?php echo$account?>" readonly>
                      </div>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">密碼</span>
                        </div>
                          
                        <input type="text" class="form-control" name="password" value="<?php echo $password?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                      </div>
                    </div>
                  </div>
                </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-7">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="myarticle-tab" data-toggle="tab" href="#myarticle" role="tab" aria-controls="myarticle" aria-selected="true">個人貼文</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="mycollect-tab" data-toggle="tab" href="#mycollect" role="tab" aria-controls="mycollect" aria-selected="false">我的收藏</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="analysis-tab" data-toggle="tab" href="#analysis" role="tab" aria-controls="analysis" aria-selected="false">數據分析</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            
            <div class="tab-pane fade show active" id="myarticle" role="tabpanel" aria-labelledby="myarticle-tab">
              <?php
              $con=mysqli_connect("localhost","root","1234","pickpack");
              $id=$_SESSION['people']['member_id'];
              $result2 = mysqli_query($con,"Select * From article where write_id=$id and mark='一般貼文'") or die("Error");
              while ($row3 = mysqli_fetch_array($result2))
              {?>
              <div class="row my-3 mx-auto border-bottom align-items-center">
                <div class="col-8">
                  <h4><a href="ind.php?pid=<?php echo $row3['article_id'] ?>"><?php echo $row3['title']?></a> </h4>
                </div>
                
                <div class="col px-0">
                  <img src="img/bookmark.png" class="img-fluid mx-auto d-block" alt="收藏數" width="35px" height="35px">
                <?php $con=mysqli_connect("localhost","root","1234","pickpack");
              $aid=$row3['article_id'];
              $result3 = mysqli_query($con,"Select count(member_id),article_id From my_lover group by article_id having article_id='$aid'") or die("Error");
              while ($row4 = mysqli_fetch_array($result3))
              {?>
                  <p class="m-0 text-center"><?php echo $row4['count(member_id)']?></p>
               
                <?php }?>
                 </div>
              </div>
              <?php
              }
              ?>
            </div>
            
            <div class="tab-pane fade" id="mycollect" role="tabpanel" aria-labelledby="mycollect-tab">
              <?php
              $con=mysqli_connect("localhost","root","1234","pickpack");
              $id=$_SESSION['people']['member_id'];
              $result = mysqli_query($con,"Select * From my_lover where member_id=$id") or die("Error");
              while ($row2 = mysqli_fetch_array($result))
              {?>
              <div class="row my-3 mx-auto border-bottom ">
                <div class="col-8 align-self-end">
                  <h4><a href="ind.php?pid=<?php echo $row2['article_id'] ?>"><?php echo $row2['title']?></a></h4>
                </div>
                
              </div>
              <?php
              }
              ?>
            </div>
            <div class="tab-pane fade" id="analysis" role="tabpanel" aria-labelledby="analysis-tab">
              <div id="chartContainer" style="height: 370px; width: 50%;"></div>
              <?php
              ini_set("error_reporting","E_ALL & ~E_NOTICE");
              $dataPoints = array();
              
              $pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234');
              $sql=$pdo->prepare('select EXTRACT(DAY FROM time),count(fans_id),track_id from fans where track_id=? group by EXTRACT(DAY FROM time)');
              $sql->execute([$_SESSION['people']['member_id']]);
              foreach($sql->fetchAll() as $row)
              {
              
              array_push($dataPoints,array("y"=>intval($row['count(fans_id)']),"label"=>$row['EXTRACT(DAY FROM time)']));
              
              }
              
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  </body>
</html>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
title: {
text: "粉絲日成長數"
},
axisY: {
title: "Fnas"
},
axisX: {
title: "日期"
},
data: [{
type: "line",
dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK);?>
}]
});
chart.render();

}
</script>