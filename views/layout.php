
<!DOCTYPE html>
<html>

<head>
    <style>
      .navbar {
  overflow: hidden;
  background-color: red;
  position: fixed;
  top: 0;
  width: 100%;}
    </style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/vendor/font-awesome/css/font-awesome.min.css">
  <!-- Fontastic Custom icon font-->
  <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/css/fontastic.css">
  <!-- Google fonts - Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  <!-- jQuery Circle-->
  <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/css/grasp_mobile_progress_circle-1.0.0.min.css">
  <!-- Custom Scrollbar-->
  <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/css/style.default.premium.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/img/favicon.ico">
  <!-- Tweaks for older IEs-->

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        
</head>

<body>
  <!-- Side Navbar -->
  <nav class="side-navbar">
    <div class="side-navbar-wrapper">
      <!-- Sidebar Header    -->
      <div class="sidenav-header d-flex align-items-center justify-content-center">
        <!-- User Info-->
        <div class="sidenav-header-inner text-center"><a href="pages-profile.html"><img src="https://elticenter.files.wordpress.com/2015/05/english-language-learning-english-language-learners-1e0au9v.jpg" alt="person" class="img-fluid rounded-circle"></a>
          <h2 class="h5">English</h2><span>Web Developer</span>
        </div>
        <!-- Small Brand information, appears on minimized sidebar-->
        <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
      </div>
      <!-- Sidebar Navigation Menus-->
      <div class="main-menu">
        <h5 class="sidenav-heading">Main</h5>
        <ul id="side-main-menu" class="side-menu list-unstyled">
          <li><a href="http://localhost/copy/home/autoload"> <i class="icon-home"></i>Home </a></li>
          <li><a href="http://localhost/copy/topic/autoload"> <i class="icon-home"></i>Vocabulary Base </a></li>
          <li><a href="http://localhost/copy/unit/autoload/LOWER-INTERMEDIATE"> <i class="icon-home"></i>Lower Intermediate </a></li>
          <li><a href="#formsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-form"></i>200 Questions </a>
              <ul id="formsDropdown" class="collapse list-unstyled ">
                <li><a href="http://localhost/copy/part/getdata/part1/1">Part 1</a></li>
                <li><a href="http://localhost/copy/part/getdata/part2/2">Part 2</a></li>
                <li><a href="http://localhost/copy/part/getdata/part3/3">Part 3</a></li>
                <li><a href="http://localhost/copy/part/getdata/part4/4">Part 4</a></li>
                
              </ul>
            </li>
            <li><a href="http://localhost/copy/lesson/autoload"> <i class="icon-home"></i> 6 Minute English </a></li>  
        </ul>
      </div>
      
    </div>
  </nav>
  <div class="page">
    <!-- navbar-->
    <header class="header" >
      <nav class="navbar" >
      <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a>
              <a href="index.html" class="navbar-brand">
                <div class="brand-text d-none d-md-inline-block"><span> </span><strong class="text-primary"></strong></div>
              
              </a>
            </div>
      </nav>
    </header>

    <section style="padding-top: 50px">
     <?php 
     if(isset($_GET['url'])){
        $url=rtrim($_GET['url'],"/");
        
        $url=explode('/',$url);
        
        if(isset($url[4])){
            $c=$url[4];
            
            include("$c.php");
        }
        else
        {
            $c=$url[0];
            if($c!=null){
                include("$c.php");
            }
        }
        
     }    
     ?>

    </section>
    <!-- Counts Section -->
            
    <footer class="main-footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <p>Your company &copy; 2017-2020</p>
          </div>
          <div class="col-sm-6 text-right">
            <p>Version 1.4.7</p>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <div id="style-switch" class="collapse">
    <h5 class="mb-3">Select theme colour</h5>
    <form class="mb-3">
      <select name="colour" id="colour" class="form-control">
        <option value="">select colour variant</option>
        <option value="default.premium">green</option>
        <option value="red.premium">red</option>
        <option value="violet.premium">violet</option>
        <option value="pink.premium">pink</option>
        <option value="sea.premium">sea</option>
        <option value="blue.premium">blue</option>
      </select>
    </form>
    <p><img src="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/img/template-mac.png" alt="" class="img-fluid"></p>
    <p class="text-muted text-small">Stylesheet switching is done via JavaScript and can cause a blink while page loads. This will not happen in your production code.</p>
  </div>
  <!-- JavaScript files-->
  <script src="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/vendor/jquery/jquery.min.js"></script>
  <script src="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
  <script src="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/vendor/jquery.cookie/jquery.cookie.js"> </script>
  <script src="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/vendor/chart.js/Chart.min.js"></script>
  <script src="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/vendor/jquery-validation/jquery.validate.min.js"></script>
  <script src="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/js/charts-home.js"></script>
  <!-- Notifications-->
  <script src="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/vendor/messenger-hubspot/build/js/messenger.min.js"> </script>
  <script src="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/vendor/messenger-hubspot/build/js/messenger-theme-flat.js"> </script>
  <script src="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/js/home-premium.js"> </script>
  <!-- Main File-->
  <script src="https://d19m59y37dris4.cloudfront.net/dashboard-premium/1-4-7/js/front.js"></script>
</body>

</html>