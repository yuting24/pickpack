<?php
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
  <title>撰寫</title>
	<style type="text/css" media="screen">
    	.header{
      		z-index: 1;
      		height: 130px;
      		background: #C27F78;
      		width: 100%;
      		position: fixed;
          margin-top: -250px;
    	}
    	.logo{
		    height: 110px;
		    margin-top: 10px;
		    position: fixed;
    	}
      .wlect{
        background-color: #D8E2DC;
        margin-left: 20%;
        height: 1000px;
        width: 65%;
        padding-top: 3%;
        margin-top: 250px;
      }
      .title{
        display: block;
        background: none;
        border-style: none;
        cursor: text;
        white-space: pre-wrap;
        width: auto;
        resize: none;
        outline: none;
        font-size: 30px;
        margin-left: 5%;
        margin-top: 2%;
      }
      .pn{
        display: block;
        background: none;
        border-style: none;
        margin-left: 10%;
        margin-top: -27px;
      }

      .ty{

        font-size: 20px;
        margin-left: 5%;
        margin-top: 2%;
      }
      .a{
        font-size: 20px;
        margin-left: 5%;
        margin-top: 2%;
      }
      .select_type{
        width: 15%;
        margin-left: 1%;
      }
      .select_type{
        border-radius:5px;
        font-size: 18px;
        background-color: #D8E2DC;
      }
      .cont{
        display: block;
        background: none;
        border-style: none;
        cursor: text;
        white-space: pre-wrap;
        width: 90%;
        resize: none;
        outline: none;
        font-size: 18px;
        margin-left: 5%;
        margin-top: 2%;
      }
      .button{
        font-size: 15px; 
        text-align: center; 
        font-weight: bold; 
        background-color: #D8E2DC; 
        border: 1px solid #9D8189;
        word-spacing: 20px; 
        padding: 6px; 
        border-radius: 5px;
        width:  7%;
        color:  #9D8189;
        position: fixed;
        right: 18%; 
        bottom: 4%
      }
    .button:hover{
      background-color: #9D8189;
      color:  white;
    }
    .img_button{
        font-size: 25px; 
        text-align: center; 
        font-weight: bold; 
        background-color: #D8E2DC; 
        border: 1px solid #9D8189;
        word-spacing: 20px; 
        padding: 10px; 
        border-radius: 100%;
        width:  4%;
        height: 8%;
        color:  #9D8189;
        position: fixed;
        left: 23%; 
        bottom: 4%
    }
    .img_button:hover{
      background-color: #9D8189;
      color:  white;
    }
    .rating {
        font-size: 0;
        display: table;
        margin-top: -4%;
        margin-left: 15%;
    }

    .rating > label {
        color: white;
        float: right;
    }

    .rating > label:before {
        padding: 5px;
        font-size: 24px;
        line-height: 1em;
        display: inline-block;
        content: "★";
    }

    .rating > input:checked ~ label,
    .rating:not(:checked) > label:hover,
    .rating:not(:checked) > label:hover ~ label {
        color: #FEDC1F;
    }

    .rating > input:checked ~ label:hover,
    .rating > label:hover ~ input:checked ~ label,
    .rating > input:checked ~ label:hover ~ label {
        opacity: 0.5;
    }

    </style>
    
  
</head>
<body style="background-image: url('img/back.png')!important;">
	<div class="header">
		<a href="index.php"><img src="img/logo.png" alt="logo" class="logo"></a> 
	</div>
  
  <div class="wlect">
  <form name="form1" method="post" action="articleadd.php" accept-charset="utf-8" enctype="multipart/form-data">
    <textarea rows="1" class="title" name="title" placeholder="請輸入標題"></textarea>
	 <div class="ty">產品名稱:<input type="text" name="product_name" class="pn" placeholder="請輸入產品名稱"></textarea></div>
    <div class="ty">選擇分類:
	<select name="kind" id="kind-list" onchange="changeKind(this.selectedIndex)" class="select_type"></select>
	<select name="small_kind" id="small-list" class="select_type"></select>
<script>
var kind=['請選擇分類','美妝','服飾','3c','旅遊','美食','其他'];
var kindSelect=document.getElementById("kind-list");
var inner="";
    for(var i=0;i<kind.length;i++){ 
        //inner第一行就會像是 <option value=0>商學院</option>
        inner=inner+'<option value='+i+'>'+kind[i]+'</option>';
    }
    //innerHTML 賦值inner給這element屬性
    kindSelect.innerHTML=inner;
	var small=new Array();
	small[0]=['請先選擇種類再選擇細項分類']
	small[1]=['底妝 ',' 眼妝' ,' 唇妝' ];
	small[2]=['上衣男 ','上衣女 ',' 下著男' ,' 下著女' ,' 外罩','連身'];
	small[3]=['筆電 ',' 桌電' ,' 手機','攝材'];
	small[4]=['景點 ',' 住宿'];
	small[5]=['中式 ','西式 ','日式' ,' 小吃' ,'飲品'];
	small[6]=['食 ','衣' ,'住','行' ];
    //sectors[0]=...  陣列很長，要完整的code我上面有github連結
    //動到"college-list"這select元素後呼叫此方法
    function changeKind(index){
        //跟剛剛一樣，製造一個字串，以html的語法填入系所的陣列
        var Sinner="";
        for(var i=0;i<small[index].length;i++){
            Sinner=Sinner+'<option value='+i+'>'+small[index][i]+'</option>';
        }
        //抓到"sector-list"這select元素，修改其值
        var smallSelect=document.getElementById("small-list");
        smallSelect.innerHTML=Sinner;
    }
	changeKind(document.getElementById("kind-list").selectedIndex);
</script>
</div>

   <p>
   <div>
    <label class="a">商品評分：</label>
                  <div class="rating">
                     <input type="radio" id="star5"  name="rate" value="5" hidden/>
                     <label for="star5"></label>
                     <input type="radio" id="star4"  name="rate" value="4" hidden/>
                     <label for="star4"></label>
                     <input type="radio" id="star3"  name="rate" value="3" hidden/>
                     <label for="star3"></label>
                     <input type="radio" id="star2"  name="rate" value="2" hidden/>
                     <label for="star2"></label>
                     <input type="radio" id="star1"  name="rate" value="1" hidden/>
                     <label for="star1"></label>
                  </div><p>
				  </div>
    <textarea class="cont" name="content" placeholder="內文........"></textarea>
	 <input type="submit" name="submit" class="button" value="送出">
    <label class="img_button">+<input type="file" name='my_file[]' style="display: none;" multiple/></label>
  </form>
   
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
</html>