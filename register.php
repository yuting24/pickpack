
<?php
header("Content-Type:text/html; charset=utf8");
$member_id=$member_name=$account=$password=$identify=$identifycode=$picture='';
$company_name=$account=$password=$number=$phone=$res_name=$identify_code=$picture='';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
    <div class="row w-75 mx-auto mt-5">
        <div class="card col-4 px-0">
          <div class="card-header text-center">
            會員註冊
          </div>
          <div class="card-body">
              <form action="register_member.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="account">姓名</label>
                    <input type="text" class="form-control" name="member_name" value="<?php $member_name?>">
                  </div>
                <div class="form-group">
                  <label for="account">帳號(Email)</label>
                  <input type="text" class="form-control" name="account" value="<?php $account?>">
                </div>
                <div class="form-group">
                  <label for="password">密碼</label>
                  <input type="password" class="form-control" name="password" value="<?php $password?>">
                </div>
                <div class="form-group">
                  <label for="identity">身分</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="identify" value="一般會員" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        一般會員
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="identify" value="公司員工">
                    <label class="form-check-label" for="exampleRadios2">
                        公司員工
                    </label>
                  </div>
                </div>
                <div class="form-group">
                    <label for="identifycode">驗證碼</label>
                    <input type="text" class="form-control"  name="identifycode" value="<?php $identifycode?>">
                </div>
                <div class="form-group">
                  <div class="form-group">
                            <label for="identifycode">上傳大頭照</label>
                            <div class="input-group">
                              <div class="input-group">
                            <input type="file" name="image" onchange="openFile(event)" class="form-control" id="company_file_name">
                            <div class="input-group-append">
                             <img id="output" height="200" >
                     </div>
                    </div>
                  </div>
                </div>
                </div>
                <button type="submit" class="btn btn-primary">註冊</button>
              </form>
          </div>
        </div>
        <div class="card col-8 px-0">
            <div class="card-header text-center">
              廠商註冊
            </div>
            <div class="card-body">
                <form action="register_company.php" method="post" id="image-form" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-6">
                          
                            <div class="form-group">
                                <label for="account">公司名稱</label>
                                <input type="text" class="form-control" name="company_name" value="<?php $company_name?>">
                            </div>
                            <div class="form-group">
                              <label for="mail">帳號Email</label>
                              <input type="email" class="form-control" name="account" value="<?php $account?>">
                          </div>
                            <div class="form-group">
                                <label for="password">公司密碼</label>
                                <input type="password" class="form-control" name="password" value="<?php $password?>">
                            </div>
                            <div class="form-group">
                                <label for="number">統編</label>
                                <input type="text" class="form-control" name="number" value="<?php $number?>">
                            </div>
                            <div class="form-group">
                                <label for="phone">電話</label>
                                <input type="text" class="form-control" name="phone" value="<?php $phone?>">
                            </div>
                            
                            
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="res_name">負責人</label>
                                <input type="text" class="form-control" name="res_name" value="<?php $res_name?>">
                            </div>
                            <div class="form-group">
                                <label for="identifycode">驗證碼</label>
                                <?php
                                $identify_code =  randnum();
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
                                 }
                                 echo '<input type="text" class="form-control"  name="identify_code" value="',$identify_code,'"readonly>';
                                 echo '<input type="hidden" name="identify_code" value="',$identify_code,'">';
                                ?>
                            </div>
                            <div class="form-group">
                              <label for="identifycode">上傳大頭照</label>
                              <div class="input-group">
                                 <div class="input-group">
                                <input type="file" name="image" onchange="openFile(event)" class="form-control" id="company_file_name">
                                <div class="input-group-append">
                                 <img id="output" height="200" >
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                  <button type="submit" class="btn btn-primary ">註冊</button>
                </form>
            </div>
          </div>
      
    </div>
  </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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


	


