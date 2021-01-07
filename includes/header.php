<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title><?=$conf["Title"]." - ".$conf['Title2'] ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="<?=$conf['Keywords'] ;?>" name="keywords">
  <meta content="<?=$conf['Description']?>" name="description">
  <meta name="author" content="<?=$conf['Title']?>" />

  <embed src="<?=$conf['music']?>" hidden="true" autostart="true" loop="true" title="Music" />
 
  <!-- 图标 -->
  <link href="<?=$conf['ico']?>" rel="icon" type="image/x-icon">
  <link href="<?=$conf['ico']?>" rel="apple-touch-icon">

  <!-- 谷歌字体文件 -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
 
  <!-- 引导CSS文件 -->
  <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- 支持库和CSS文件 -->
  <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <!-- 自定义团队Divcss文件 -->
  <link href="assets/css/div.css" rel="stylesheet">
  <link href="assets/css/inter.css" rel="stylesheet">
  
  <!-- 主题CSS样式文件 -->
  <link href="assets/css/style.css" rel="stylesheet">
  
  <!-- 光年组件 -->
  <link href="ly/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="ly/css/style.min.css" rel="stylesheet">
  
  <link href="assets/alertify.css" rel="stylesheet">
  <?=$conf['header'];?>
</head>
<body>

  <!--==========================
    头部
  ============================-->
  <header id="header">
    <div class="container-fluid">

<div id="logo" class="pull-left">
        <img src="<?=$conf['logo']?>" height="32" width="32" />
        
        <!-- Uncomment below if you prefer to use an image logo -->
      </div>
        <div id="title" class="pull-left">
            
            <h4 style="color:white"><?=$conf['Title']?></h4>
        </div>
            <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">首页</a></li>
          <li><a href="#services">特点</a></li>
          <li><a href="#portfolio">旗下站点</a></li>
          <li><a href="#team">成员</a></li>
          <li><a href="#info">团队信息</a></li>
          <li><a href="#footer">联系我们</a></li>
        </ul>
      </nav><!-- #菜单兼容 -->
    </div>
  </header><!-- #头部 -->
