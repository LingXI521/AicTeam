<?php
include('includes/common.php');
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>加入我们 - <?=$conf["Title"]?> </title>
    <link rel="icon" href="favicon.ico" type="image/ico">
    <meta content='<?=$conf["keywords"]?>' name="keywords">
    <meta name="description" content='<?=$conf["Description"]?>'>
    <meta name="author" content="yinqi">
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

  <!-- 主题CSS样式文件 -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- 光年组件 -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="admin/css/style.min.css" rel="stylesheet">
    <link href="assets/alertify.css" rel="stylesheet">
</head>

<body>
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
          <li><a href="#demand">加入需求</a></li>
          <li><a href="#join">填写信息</a></li>
        </ul>
      </nav><!-- #菜单兼容 -->
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
                <h2><?=$conf['Title']?></h2>
                <p><?=$conf['Description'];?></p>
                <a href="#join"  class="btn-get-started scrollto">加入我们！</a>
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
  <section id="demand">
<div class="container">
  <header class="section-header wow fadeInUp">
    <br><br><h3>要求</h3>
    <p>加入我们的要求哦！</p>
  </header>
  <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <?=conf('demand');?>
                </div>
                </div>
                </div>
                </div>
  </div>
  </section>
  
<section id="join" class="join section-bg">
    <div class="container">
  <header class="section-header wow fadeInUp">
    <br><br><h3>填写信息</h3>
    <p>填写信息即可加入！</p>
  </header>

<div class="container-fluid p-t-15">
<br><br><br>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"><h4>加入向导</h4></div>
                <div class="card-body">

                    <form action="?r=join" method="post" class="guide-box" data-navigateable="true">
                        <ul class="nav-step step-dots">
                            <li class="nav-step-item active">
                                <span>团队中名称</span>
                                <a class="active" data-toggle="tab" href="#step-1"></a>
                            </li>

                            <li class="nav-step-item">
                                <span>你的QQ</span>
                                <a data-toggle="tab" href="#step-2"></a>
                            </li>

                            <li class="nav-step-item">
                                <span>技能介绍</span>
                                <a data-toggle="tab" href="#step-3"></a>
                            </li>

                        </ul>
                        <!--对应内容-->
                        <div class="nav-step-content">
                            <div class="nav-step-pane hidden active" id="step-1">
                                <div class="form-group">
                                    <label>姓名</label>
                                    <input class="form-control" type="text" name="user" id="user" required/>
                                </div>
                            </div>

                            <div class="nav-step-pane hidden" id="step-2">
                                <div class="form-group">
                                    <label>QQ</label>
                                    <input class="form-control" type="text" name="qq" id="qq" required/>
                                </div>
                            </div>

                            <div class="nav-step-pane hidden" id="step-3">
                                <div class="form-group">
                                    <label>职业技能</label>
                                    <input class="form-control" type="text" name="jianjie" id="jianjie" required/>
                                    
                                </div>
                                <div class="form-group">
                                    <label>验证码</label>
                                    <input class="form-control" type="text" name="yzm" id="yzm" required/>
                                    <input type="yzmyz" class="form-control" id="yzmyz" name="yzmyz" value="<?=mt_rand(1000,9999)?>" readonly="readonly"/>
                                </div>
                            </div>

                        </div>
                        <!--End 对应内容-->
                        <hr>
                        <div class="nav-step-button">
                            <button class="btn btn-secondary disabled" data-wizard="prev" type="button">上一步</button>
                            <button class="btn btn-secondary" data-wizard="next" type="button">下一步</button>
                            <input class="btn btn-primary hidden" data-wizard="finish" type="submit" id="submit" name="submit">
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

</div>
  </div>
</section>
<?php
include('footer.php');
?>

<!--向导插件-->
<script type="text/javascript" src="ly/js/jquery.bootstrap.wizard.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.guide-box').bootstrapWizard({
        'tabClass': 'nav-step',
        'nextSelector': '[data-wizard="next"]',
        'previousSelector': '[data-wizard="prev"]',
        'finishSelector': '[data-wizard="finish"]',
        'onTabClick': function(e, t, i) {
            if (!$('.guide-box').is('[data-navigateable="true"]')) return ! 1
        },
        'onTabShow': function(e, t, i) {
            t.children(":gt(" + i + ").complete").removeClass("complete");
            t.children(":lt(" + i + "):not(.complete)").addClass("complete");
        },
        'onFinish': function(e, t, i) {
            
        }
    });
});
</script>
</body>
</html>
<?php
if(!empty($_POST['submit'])){
    if(!empty($_COOKIE['Lengque'])){
        echo("<script type='text/javascript'>alert('禁止反复提交！！！');</script>");
        exit();
    }
    if($_POST['yzm'] != $_POST['yzmyz']){
        echo("<script type='text/javascript'>alert('验证码输入错误！！');</script>");
        exit();
    }
    if(empty($_POST['user'])){
    echo("<script type='text/javascript'>alert('确保每项都不能空！！');</script>");
    exit();
    }
    if (empty($_POST['qq'])) {
    echo("<script type='text/javascript'>alert('确保每项都不能空！！');</script>");
    exit();
    }
    if (empty($_POST['jianjie'])) {
    echo("<script type='text/javascript'>alert('确保每项都不能空！！');</script>");
    exit();
    }
$AT->query("INSERT INTO `autive_member` (`Uid`, `Name`, `QQ`, `jieshao`, `active`) VALUES ('0', '".$_POST['user']."', '".$_POST['qq']."', '".$_POST['jianjie']."', 'false')");
echo("<script type='text/javascript'>alert('您的请求已提交，等待管理员审核！');</script>");
setcookie("Lengque","true",time() + 7200);
exit("<script language='javascript'>window.location.href='index.php';</script>");


}


?>