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
  <title>??????</title>
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
      if($_SESSION['people']['identify']=='????????????'){
               echo '<a href="write.php"><img src="img/write.png" class="writee"></a>';
               echo '<a href="member_center.php"><img src="img/user.png" class="user"></a>';
            }
            else if($_SESSION['people']['identify']=='????????????'){
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
      <div class="lect_type">??????
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
        <?php if($row['mark']=='????????????'){
            echo '???????????????';
              for($i=1;$i<=$row['good_rate'];$i++){
                 echo '<img src="img/star01.png"  width="20px" height="20px">';
              }
        }else if($row['mark']=='????????????'){
                echo '<a href="',$row['google_name'],'">????????????</a>';
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
<span>?????????</span><br>
<textarea class="input"  name="rate_content" placeholder="??????......." rows="1" cols="70"></textarea>
</label><p>


<div class="butt">
  <input type="submit" class="button" value="??????" />
  <input type="reset" class="button" value="??????" />
</div>
</div>
</form>
<?php }?>
<?php 
 $pid = $_GET["pid"];
    $result2 = mysqli_query($con,"Select * From rate where article_id ='$pid' order by time desc") or die("Error");
    $result4 = mysqli_query($con,"Select * From reply where article_id ='$pid'") or die("no");
	$row3 = mysqli_fetch_array ($result2);
    $data_nums = mysqli_num_rows($result2); //???????????????
    $per = 5; //????????????????????????
    $pages = ceil($data_nums/$per); //????????????????????????????????????
    if (!isset($_GET["page"])){ //??????$_GET["page"]?????????
        $page=1; //???????????????????????????
    } else {
        $page = intval($_GET["page"]); //????????????????????????????????????
    }
    $start = ($page-1)*$per; //??????????????????????????????
   $result3 = mysqli_query($con,"Select * From rate where article_id ='$pid' order by time desc".' LIMIT '.$start.', '.$per) or die("Error");

while ($row2 = mysqli_fetch_array ($result3))
{?>

<hr class="text_hr" width="72%" align="left"></div>
<div class="S2-wbox"><!-- ??????????????? -->

              <!-- ?????????????????? *********************************-->
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
                        if($rows['identify']=='????????????'){
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
                  <div class="message_like"><!-- ????????????????????? -->
                    
                  </div><!-- ????????????????????? -->
                </div>
                <div class="message_bottom">
                  <div class="message_w">
                    <?php echo $row2['rate_content'];?>
                  </div>
                  <div class="message_w2">
                    <?php echo $row2['time'];?>
                  </div>
                </div>
			
              </div><!-- ?????????????????? ****************************************************-->
       <?php if(isset($_SESSION['people'])){?>       
              <form name="form2" method="post" action="articlereply2.php?pid=<?php echo $pid?>&&id=<?php echo $row3['id']?>">
????????????<?php if(isset($_SESSION['people']['member_id'])){

                      if($_SESSION['people']['identify']=='????????????'){
                          echo $_SESSION['people']['member_name'];
                          echo '<img src="img/name.png" width="20px" height="20px">','<br>';  
                          }else{
                            echo $_SESSION['people']['member_name'],'<br>';
                          }
                 
              }else if(isset($_SESSION['people']['company_id'])){
                echo $_SESSION['people']['company_name'];
                echo '<img src="img/crown.png" width="30px" height="30px">';
                }?><br>
???????????????<textarea class="input"  name="reply_content" placeholder="??????......." rows="1" cols="69"></textarea><br>
<div class="butt" style="margin-right:7% !important;">
<input type="submit" class="button" value="??????" />
<input type="reset" class="button" value="??????" />
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
                        if($rows['identify']=='????????????'){
                            echo '?????????:';
                            echo $row['reply_name'];
                             echo '<img src="img/name.png" width="20px" height="20px">','<br>';  
                            echo '??????:';
                            echo $row['reply_content'],'<br>';
                            echo '??????:';
                            echo $row['reply_time'],'<br>';
                            echo '</p>';
                           
                          }else{
                              echo '?????????:';
                              echo $row['reply_name'],'<br>';
                              echo '??????:';
                              echo $row['reply_content'],'<br>';
                              echo '??????:';
                              echo $row['reply_time'],'<br>';
                              echo '</p>';
                          }
                         }
                      }else{
                              echo '?????????:';
                              echo $row['reply_name'];
                              echo '<img src="img/crown.png" width="30px" height="30px">','<br>';
                              echo '??????:';
                              echo $row['reply_content'],'<br>';
                              echo '??????:';
                              echo $row['reply_time'],'<br>';
                              echo '</p>';
                         }
                     



}}
   echo '??? '.$data_nums.' ???-??? '.$page.' ???-??? '.$pages.' ???';
    echo "<br /><a href=?page=1&&pid=".$pid.">??????</a> ";
    echo "??? ";
    for( $i=1 ; $i<=$pages ; $i++ ) {
        if ( $page-3 < $i && $i < $page+3 ) {
            echo "<a href=?page=".$i."&&pid=".$pid.">".$i."</a> ";
        }
    } 
    echo " ??? <a href=?page=".$pages."&&pid=".$pid.">??????</a><br /><br />";?>

            </div><!-- ??????????????? -->

          </div><!--?????????????????????-->
        </section><!-- ?????????????????? -->
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
                   <li><a href="sub_category_new.php">??????</a></li>
                    <li><a href="sub.php">??????</a></li>
                    <li><a href="sub01.php">3c</a></li>
                    <li><a href="sub02.php">??????</a></li>
                    <li><a href="sub03.php">??????</a></li>
                    <li><a href="sub04.php">??????</a></li>
                    
                </ul>
            </div>
        </div> 
</body>
<div class="modal fade" id="manual" tabindex="-1" aria-labelledby="manualLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title" id="manualLabel">??????????????????</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <h5><b>????????? ?????????????????????</b></h5>
      <h5><b>????????? ?????????????????????????????????</b></h5>
      <h5><b>????????? ??????????????????</b></h5>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;???google??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
      <h5><b>????????? ??????????????????</b></h5>
      <h5><b>????????? ?????????????????????????????????</b></h5>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;???????????????????????????????????????????????????????????????????????????</p>
      <h5 style="color:#aa5b52";><b>????????????????????????????????????????????????????????????</b></h5>
    </div>
    <div class="modal-footer">
      
      <a href="company_write.php"><button type="button" class="btn btn-primary">????????????????????????</button></a>
    </div>
  </div>
</div>
</div>
</html>
