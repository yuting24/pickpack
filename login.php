<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <div class="container-fluid">
    <div class="row">
      <main role="main" class="col-md px-4">
        <div class="card w-25 mx-auto login">
          <div class="card-header text-center">
            登入
          </div>
          <div class="card-body">
              <form action="login_in.php" method="post">
                <div class="form-group">
                  <label for="account">帳號</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="account">
                  
                </div>
                <div class="form-group">
                  <label for="password">密碼</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <div class="form-group">
                  <label for="identity">身分</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" value="member"checked>
                    <label class="form-check-label" for="exampleRadios1">
                      會員(員工)
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" value="company">
                    <label class="form-check-label" for="exampleRadios2">
                      廠商
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">登入</button>
              </form>
          </div>
        </div>
      </main>
    </div>
  </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
	


