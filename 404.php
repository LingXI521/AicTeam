<?php
include('includes/common.php');
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title><?php echo conf("Title")?> - 你要的页面找不到了啦</title>
    <link rel="icon" href="favicon.ico" type="image/ico">
    <meta content=<?php echo conf("keywords")?> name="keywords">
    <meta name="description" content=<?php echo conf("Description")?>>
    <meta name="author" content="yinqi">
    <!-- 谷歌字体文件 -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- 引导CSS文件 -->
  <link href="<?=conf("url");?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- 支持库和CSS文件 -->
  <link href="<?=conf("url");?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?=conf("url");?>assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?=conf("url");?>assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?=conf("url");?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?=conf("url");?>assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- 主题CSS样式文件 -->
  <link href="<?=conf("url");?>assets/css/style.css" rel="stylesheet">
    
</head>

<body>
<header id="header">
    <div class="container-fluid">

<div id="logo" class="pull-left">
        <img src="<?php echo conf('logo')?>" height="32" width="32" />
        
        <!-- Uncomment below if you prefer to use an image logo -->
      </div>
        <div id="title" class="pull-left">
            <h4 style="color:white"><?php echo conf('Title')?></h4>
        </div>
    </div>
  </header><!-- #头部 -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
            <!-- side 1-->
            <div class="carousel-item active" style="background-image: url('https://api.ixiaowai.cn/api/api.php');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2><?php echo conf('Title')?></h2>
                <p>你要的页面找不到啦！</p>
                <a href="<?=conf('url');?>"  class="btn-get-started scrollto">返回主页</a>
              </div>
            </div>
          </div>
          
        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #简介 -->
  


<!-- js支持库引导 -->
  <script src="<?=conf("url");?>assets/lib/jquery/jquery.min.js"></script>
  <script src="<?=conf("url");?>assets/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?=conf("url");?>assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=conf("url");?>assets/lib/easing/easing.min.js"></script>
  <script src="<?=conf("url");?>assets/lib/superfish/hoverIntent.js"></script>
  <script src="<?=conf("url");?>assets/lib/superfish/superfish.min.js"></script>
  <script src="<?=conf("url");?>assets/lib/wow/wow.min.js"></script>
  <script src="<?=conf("url");?>assets/lib/waypoints/waypoints.min.js"></script>
  <script src="<?=conf("url");?>assets/lib/counterup/counterup.min.js"></script>
  <script src="<?=conf("url");?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?=conf("url");?>assets/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?=conf("url");?>assets/lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?=conf("url");?>assets/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- js目录引导 -->
  <script src="<?=conf("url");?>assets/contactform/contactform.js"></script>

  <!-- js库加载 -->
  <script src="<?=conf("url");?>assets/js/main.js"></script>
</body>
</html>