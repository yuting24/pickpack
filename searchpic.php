<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
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
    <title>??????</title>
    <style type="text/css" media="screen">
    .head{
    
    z-index: 2;
    height: 130px;
    background: #C27F78;
    width: 100%;
    position:relative;
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
<body style="background-image: url('img/back.png')!important;">
<div class="head">
      <a href="index.php"><img src="img/logo.png" alt="logo" class="logo"></a>
      <div class="search-container">
        <form action="search_action.php" method="post">
          <input type="text" class="mr-2" placeholder="Search.." name="pname" id="pname" >
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
      <img src="img/addpic.png" class="addpic"  data-toggle="modal" data-target="#uploadpic">
      
      <?php if(isset($_SESSION['people'])){?>
      <div class="wel">
        <?php if(isset($_SESSION['people']['member_id'])){
      ?></div><?php
				if($_SESSION['people']['identify']=='????????????'){
      				 echo '<a href="write.php"><img src="img/write.png" class="write"></a>';
      				 echo '<a href="member_center.php"><img src="img/user.png" class="user"></a>';
      			}
      			else if($_SESSION['people']['identify']=='????????????'){
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
    <div class="card w-50 " style="margin-left: 25%; margin-top:5%;">
        <div class="card-header">
            <h5 class="card-title">????????????</h5>
        </div>
        <div class="card-body">
            <form enctype="multipart/form-data" action="" method="POST">      
            <div class="mb-3 form-inline">                          
                 <input name="image" type="file" onchange="openFile(event)" />
                <button type="submit" class="btn btn-primary ml-2"  data-bs-toggle="modal" data-bs-target="#stsearch">??????</button>                     
            </div>
           
               
               
                
        </form>
         <img id="output"  height="200" float="left">
        
<?php
$url = "https://vision.googleapis.com/v1/images:annotate?key=AIzaSyBWfH_MyGfJh7BtcIbPM-eCbuAhz6Puh6A";
$detection_type = "TEXT_DETECTION";
$image_validation = array('image/jpeg','image/png','image/gif');

if($_FILES){

 // validate uploaded file for allowed mime type
 if(in_array($_FILES['image']['type'],$image_validation)){      

  // base64 encode image
     $image = file_get_contents($_FILES['image']['tmp_name']);
  $image_base64 = base64_encode($image);

  $json_request ='{
      "requests": [
     {
     "image": {
         "content":"' . $image_base64. '"
       },
       "features": [
           {
            "type": "' .$detection_type. '",
            "maxResults": 200
           }
       ]
     }
    ]
   }';

  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $json_request);
  $json_response = curl_exec($curl);
  $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
  curl_close($curl);

  // verify if we got a correct response
  if ( $status != 200 ) {
   die("Something when wrong. Status code: $status" );
  }
  
  // create an image identifier for the uploaded file
  switch($_FILES['image']['type']){
   case 'image/jpeg':
    $im = imagecreatefromjpeg($_FILES['image']['tmp_name']);
    break;
   case 'image/png':
    $im = imagecreatefrompng($_FILES['image']['tmp_name']);
    break;
   case 'image/gif':
    $im = imagecreatefromgif($_FILES['image']['tmp_name']);
    break;
  }

  // transform the json response to an associative array
  $response = json_decode($json_response, true);   
  // display the first text annotation

 //print_r($response['responses'][0]['textAnnotations'][0]['description']);

  $a=$response['responses'][0]['textAnnotations'][0]['description'];
 echo "<img src='img/Loading.gif' height='200'>";
    }
    else{
     echo 'File type not allowed';
    }

 }
?>
     </div>   
        <div class="card-footer">
            <form id="form1" name="form1" method="post" action="search_action.php">
            <input type="text" id="pname" name="pname" id="pname" value="<?php echo $a;?>" />
            <button type="submit" class="btn btn-primary" style="float:right;">??????</button>
             </form>
        </div>

    </div>





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

    
</body>
</html>

<script>
function openFile(event){
  var input = event.target; //??????????????????
  var reader = new FileReader(); //??????FileReader??????

  reader.readAsDataURL(input.files[0]); //???.readAsDataURL????????????????????????base64??????

  reader.onload = function(){ //FileReader???????????????????????????????????????
    var dataURL = reader.result; //????????????dataURL??????????????????base64??????
   
    $('#output').attr('src', dataURL).show();//???img???src?????????dataURL?????????

    
  };
}
</script>