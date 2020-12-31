<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  .container{
      width: 500 px;
      height: 500 px;
  }
  </style>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
if(isset($this->css)){//load array css
	foreach($this->css as $css){
		echo "<link rel='stylesheet' type='text/css' href='".__SITE_PATH."public/css/".$css.".css' />";
	}
}
if(isset($this->js)){//load array js
	foreach($this->js as $js){
		echo "<script type='text/javascript' charset='utf-8' src='".__SITE_PATH."public/js/".$js.".js' ></script>";
	}
}
?>
</head>
<body>
<ul id="menu">
<?php
        
        echo "<a href='".__SITE_PATH."views/user/login.php'><button style='font-size: 15'>LOGIN</button></a>";
        ?>
       
    </ul>
<div class="container">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSsGacdMf2yzDCewIDmLqVUrw4SdBc2tPa2hl8x4nYbmJOWOpGj&usqp=CAU" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTnGhnYvM4fqcnbcf-n-gw-ucgmy0Qg8zcxK3bwmG1n9AG2nUd2&usqp=CAU" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQQsfXoGPgi7W-zu9U1Z2ZBkxWRSdUJM53cwzX1Y1TSDCOFEeVT&usqp=CAU" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</div>

</body>
</html>
