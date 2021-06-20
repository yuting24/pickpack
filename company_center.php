<?php
session_start();
$company_id=$account=$number=$phone=$mail=$res_name=$identify_code='';
$company_name=$_SESSION['people']['company_name'];
$id=$_SESSION['people']['company_id'];
$identify=$_SESSION['people']['identify'];
$account=$_SESSION['people']['account'];
$password=$_SESSION['people']['password'];
$identify_code=$_SESSION['people']['identify_code'];
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
      
    </style>
</head>
<body style="background-image: url('img/back.png')!important;"> 
  <div class="header" style="position: fixed; top:0;">
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
    <h2 class="mx-auto w-75 mt-5 mb-4 px-3">會員中心</h2>
    <div class="row mx-auto w-75">
      <div class="col-5">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-6">
                <img src="display.php?id=<?php echo $id;?>" class="img-thumbnail" />
              </div>
              <div class="col-6 align-self-end">
                <!-- <p style="font-size: 20px;">追蹤中 : 50</p>
                <p style="font-size: 20px;">粉絲 : 100</p> -->
             <form action="revise_company.php" method="post">   
                <button type="submit" class="btn btn-primary btn-block">儲存</button>
              </div>
              <div class="col mt-3">
                <div class="card">
                  <div class="card-body">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">會員身分</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="identify" value="<?php echo $identify?>" readonly>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">姓名</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="company_name" value="<?php echo $company_name?>">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="account" value="<?php echo$account?>" readonly>
                    </div>
                     <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">密碼</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="password" value="<?php echo $password?>">
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">驗證碼</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Sizing example input" name="identify_code" value="<?php echo$identify_code?>" aria-describedby="inputGroup-sizing-default" readonly>
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
            <a class="nav-link active" id="myarticle-tab" data-toggle="tab" href="#myarticle" role="tab" aria-controls="myarticle" aria-selected="true">徵文文章</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="mycollect-tab" data-toggle="tab" href="#mycollect" role="tab" aria-controls="mycollect" aria-selected="false">員工管理</a>
          </li>
          
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="myarticle" role="tabpanel" aria-labelledby="myarticle-tab">
              <?php
              $con=mysqli_connect("localhost","root","1234","pickpack");
              $id=$_SESSION['people']['company_id'];
              $result2 = mysqli_query($con,"Select * From article where write_id=$id and mark='廠商貼文' ") or die("Error");
              while ($row3 = mysqli_fetch_array($result2))
              {?>
              <div class="row my-3 mx-auto border-bottom align-items-center">
                <div class="col-8">
                  <h4><a href="ind.php?pid=<?php echo $row3['article_id'] ?>"><?php echo $row3['title']?></a> </h4>
                </div>
                 <div class="col px-0">
                  <img src="img/bookmark.png" class="img-fluid  mx-auto d-block" alt="收藏數" width="35px" height="35px">
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
            <table class="table table-striped text-center">
              <thead>
              <tr>
                <th>ID</th>
                <th>姓名</th>
                <th>信箱</th>
                <th>會員管理</th>
                <th class="no-sort"></th>
              </tr>
            </thead>
           
            <?php
            $pdo = new PDO('mysql:host=localhost;dbname=pickpack;charset = utf8','root','1234'); 
              $sql=$pdo->prepare('select * from member where identifycode=?');
              $sql->execute([$_SESSION['people']['identify_code']]);
              foreach($sql->fetchAll() as $row){
                  echo' <tbody>';
                  echo '<td>',$row['member_id'],'</td>';
                  echo '<td>',$row['member_name'],'</td>';
                  echo '<td>',$row['account'],'</td>';
                  $_SESSION['employee']=['member_id'=>$row['member_id'],'member_name'=>$row['member_name']];
                  echo'<td>';
                   echo '<button id="" class="btn btn-danger btn-sm mx-1" onclick="" value=""><a href="delete.php">刪除</a></button>';
                   echo'</tbody>';
                        
            }
            ?>
           
            </table>
          </div>
          
        </div>
      </div>
    </div>
  </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
function openFile(event){
  var input = event.target; //取得上傳檔案
  var reader = new FileReader(); //建立FileReader物件

  reader.readAsDataURL(input.files[0]); //以.readAsDataURL將上傳檔案轉換為base64字串

  reader.onload = function(){ //FileReader取得上傳檔案後執行以下內容
    var dataURL = reader.result; //設定變數dataURL為上傳圖檔的base64字串
    $('#output').attr('src', dataURL).show(); //將img的src設定為dataURL並顯示
  };
}
</script>


<?
function randnum()
{
    $code_len = 5;
    $num = '';

    $word = '123456789';
    $len = strlen($word);

    for ($i = 0; $i < $code_len; $i++) {
        $num .= $word[rand() % $len];
    }

    return $num;
}?>


