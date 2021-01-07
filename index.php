<?php
include("includes/common.php");
if($_GET['r'] == ''){
include 'includes/header.php';
?>

  <!--==========================
   简介部分
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
            <!-- side 1-->
            <div class="carousel-item active" style="background-image: url('<?=$conf['bgurl'];?>');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2><?=$conf['Title']?></h2>
                <p><?=$conf['Description'];?></p>
                <a href="#footer"  class="btn-get-started scrollto">关于我们</a>
              </div>
            </div>
          </div>
          <!-- side 2-->
          <div class="carousel-item" style="background-image: url('<?=$conf['bgurl'];?>');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>成员查询</h2>
                <a href="#team" class="btn-get-started scrollto">查看成员</a>
              </div>
            </div>
          </div>
          <!-- side 3-->
          <div class="carousel-item" style="background-image: url('<?=$conf['bgurl'];?>');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>你想要加入我们吗？</h2>
                <p>点击下方填写信息即可加入</p>
                <a href="?r=join" class="btn-get-started scrollto">Join now</a>
              </div>
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
<main id="main">
    <!--==========================
      服务特点栏
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>特点</h3>
          <p>不忘初心，方得始终.</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="#"><?php $b=fuwu(1); echo $b["Name"]?></a></h4>
            <p class="description"><?=$b['Page']?></p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="#"><?php $b=fuwu(2); echo $b["Name"]?></a></h4>
            <p class="description"><?=$b['Page']?></p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="#"><?php $b=fuwu(3); echo $b["Name"]?></a></h4>
            <p class="description"><?=$b['Page']?></p>
          </div>
        </div>
      </div>
    </section><!-- #服务 -->
    
<section id="portfolio" class="portfolio section-bg" >
<div class="container">
  <header class="section-header wow fadeInUp">
    <h3>旗下站点</h3>
    <p>开发更好的服务</p>
  </header>
  <div class="row">
    <div class="col-lg-12 d-flex justify-content-center">
      <ul id="portfolio-flters">
        <!--<li data-filter="*" class="filter-active">所有</li>
        <li data-filter=".filter-web">网页</li>
        <li data-filter=".filter-app">程序</li>-->
      </ul>
    </div>
  </div>
  <div class='row'>
  <?php 
  AI::site();
  ?>
    </div>
</div>
</section>
    <!--==========================
     成员介绍
    ============================-->
 <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>成员</h3>
		  <p>为数个站点运营提供服务</p>
        </div>

        <div class="row">
        
        <?php AI::team(); ?>
        </div>
    </div>
    </section><!-- #成员介绍 -->  
    
    <section id="info" class="info section-bg">
<div class="container">
  <header class="section-header wow fadeInUp">
    <br><br><h3>团队消息</h3>
    <p>实时跟进团队最新消息</p>
  </header>
<div class="row">
    <ul class="list-group"></ul>
         <?php
         AI::info();
        ?>
    

</div>
</div>
</section>

<section id="about">
<div class="container">
  <header class="section-header wow fadeInUp">
    <br><br><h3>反馈</h3>
    <p>您的反馈使我们前进的动力</p>
  </header>
<div class="row">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4><?=$conf["Title"];?></h4>
        </div>
            <div class="card-body">
            
            <?=$conf["comment"];?>
            
            </div>
        </div>
    </div>
<!-- 评论 -->
<div class="col-lg-6">
      <div class="card">
        <div class="card-body">
            
      <form action="?r=comment" method="post" >
            <div class="form-group col-md-6">
              <label for="Name">您的名称</label>
              <input type="text" class="form-control" id="Name" name="Name" value="" placeholder="您的名称.." required/>
            </div>
            <div class="form-group col-md-6">
              <label for="qq">QQ</label>
              <input type="text" class="form-control" id="qq" name="qq" value="" placeholder="您的QQ.." required/>
            </div>
            <div class="form-group col-md-12">
              <label for="comment">反馈内容</label>
              <textarea class="form-control" id="comment" name="comment" value="" placeholder="您要反馈的内容.." required></textarea>
            </div>
            <div class="form-group col-md-12">
                <?php
                if($_COOKIE['comment'] == ""){
                ?>
              <button type="submit" class="btn btn-primary btn-label ajax-post" target-form="add-form"><label><i class="mdi mdi-checkbox-marked-circle-outline"></i></label>点击提交</button>
                <?php
                }elseif($_COOKIE['comment'] != ""){
                ?>
                <button class="btn btn-danger btn-label" disabled><label><i class="mdi mdi-checkbox-marked-circle-outline"></i></label>您最近已经反馈过了</button>
                <?php
                }
                ?>
            </div>
          </form>
          </div>
  </div>
  </div>
  </div>
  <!--END评论-->
  </div>
  </section>

</main>
<?php
include("footer.php");
?>
</body>
 </html>

 <?php
 $AT->close();
}elseif($_GET['r'] == "comment"){
    if(strlen($_POST['Name']) < 4 && strlen($_POST['qq']) < 4 && strlen($_POST['comment'] < 20) && strlen($_POST['qq'] > 10)){
        exit("<script type='text/javascript'>alert('长度有误！');window.location.href='./index.php';</script>");
    }
    if($_COOKIE['comment'] == "true"){
        exit("<script type='text/javascript'>alert('禁止反复提交！');window.location.href='./index.php';</script>");
    }
    $AT->query("INSERT INTO `autive_comments`(`Uid`, `Name`, `QQ`, `content`) VALUES (0, '".$_POST['Name']."', '".$_POST['qq']."', '".$_POST['comment']."')");
    setcookie("comment","true",time() + 7200);
    echo("<script>alert('您的反馈已提交！我们会努力改善的！');
    window.location.href='./index.php';
    </script>");
 }elseif ($_GET['r'] == 'join') {
     include('includes/join.php');
 }else {
     echo('Are you sure? 你在非法访问呢？');
 }
 ?>