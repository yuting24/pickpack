<!DOCTYPE html>
<html>
<head>
 <title>Tips & tricks for text detection from images using Google Vision API</title>
</head>
<body style="background-image: url('img/back.png')!important;">

 <form enctype="multipart/form-data" action="" method="POST">
  Choose an image to upload: <input name="image" type="file" /><br />
  <input type="submit" value="Upload Document" />
 </form>

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
  echo'<pre>';
  print_r($response['responses'][0]['textAnnotations'][0]['description']);
  echo'</pre>';
  $a=$response['responses'][0]['textAnnotations'][0]['description'];
    }
    else{
     echo 'File type not allowed';
    }

 }
?>
<form id="form1" name="form1" method="post" action="search_action.php">
  <p>產品名稱：
    <input name="pname" type="text" id="pname" value="<?php echo $a;?>" />
  </p>
  <input type="submit" name="submit" class="button" value="搜尋">
</form>
</body>
</html>