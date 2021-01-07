<?php
include 'head.php';
include 'menu.php';
include 'header.php';
$admin = admin($_COOKIE['Autive']);
?>
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(../../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h3 class="display-3 text-white">你好 <?=$admin['name'];?></h3>
            <p class="text-white mt-0 mb-5">从这里来修改你的个人信息吧！让我们从这里打开你的AicTeam之旅！</p>
            <a href="#!" class="btn btn-neutral">修改信息</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="https://q1.qlogo.cn/g?b=qq&nk=<?=$admin['qq'];?>&s=100" alt="<?=$admin['user'];?>" title="<?=$admin['name'];?>">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="https://im.qq.com" class="btn btn-sm btn-info  mr-4 ">更换头像</a>
                <a href="list.php?list=system"class="btn btn-sm btn-default float-right">管理账号</a>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center">
                    <div>
                      <span class="heading"><?=$admin['user'];?></span>
                      <span class="description">账号</span>
                    </div>
                    <div>
                      <span class="heading"><?=$admin['name'];?></span>
                      <span class="description">名称</span>
                    </div>
                    <!--<div>
                      <span class="heading"></span>
                      <span class="description"></span>
                    </div>-->
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h5 class="h3">
                  <span class="font-weight-light" id="nowtime"><?php echo $showtime=date("Y-m-d H:i:s");?></span>
                </h5>
                <div class="h5 font-weight-300">

                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>
    <p id="hitokoto">
      :D 获取中...
    </p>
    <script src="https://v1.hitokoto.cn/?encode=js&amp;select=%23hitokoto" defer=""></script>
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>
                </div>
              </div>
            </div>
          </div>
          <!-- Progress track -->
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <!-- Title -->
              <h5 class="h3 mb-0">感谢</h5>
            </div>
            <!-- Card body -->
            <div class="card-body">
              <!-- List group -->
				<ul class="list-group" style="margin-bottom: 0px;">
					                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <a href="#" class="avatar rounded-circle">
                        <img alt="Image placeholder" src="https://q1.qlogo.cn/g?b=qq&nk=2232142736&s=100">
                      </a>
                    </div>
                    <div class="col ml--2">
                      <h4 class="mb-0">
                        <a href="https://www.chazhiwl.cn">茶栀</a></h4>
                        <?php $QS = qq_status("2232142736"); if($QS == 1):?>
                      <span class="text-success">●</span>
                      <small>在线</small>
                      <?php elseif($QS == 2): ?>
                      <span class="text-danger">●</span>
                      <small>离线</small>
                      <?php elseif($QS = 3 || $QS = 0): ?>
                      <span class="text-secondary">●</span>
                      <small>未知状态</small>
                      <?php endif;?>
                      
                    </div>
                    <div class="col-auto">
                      <a type="button" class="btn btn-sm btn-primary text-white" href="tencent://message/?uin=2232142736&Site=Them&Menu=yes">QQ联系</a>
                    </div>
                  </div>
                  <div class="col ml--2">
                  	茶栀提供个人设置的界面UI！
                  </div>
				</ul>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="row">
            <div class="col-lg-6">
              <div class="card bg-gradient-info border-0">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0 text-white">成员数量</h5>
                      <span class="h2 font-weight-bold mb-0 text-white"><?=lista("member");?>名</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card bg-gradient-danger border-0">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0 text-white">当前用户</h5>
                      <span class="h2 font-weight-bold mb-0 text-white"><?=$admin['user'];?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                        <i class="ni ni-spaceship"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">个人设置 </h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form action="?uid=<?=$admin['uid'];?>" method="post">
                <h6 class="heading-small text-muted mb-4">用户设置</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
						<label for="user">账号</label>
              <input class="form-control" type="text" id="user" name="user" value="<?php echo $admin['user'];?>">
                      </div>
                      <div class="form-group">
						<label for="name">昵称</label>
              <input class="form-control" type="text" id="name" name="name" value="<?php echo $admin['name'];?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
						<label for="pass">密码</label>
              <input class="form-control" type="text" id="pass" name="pass" value="">
              <small>不修改则不填</small>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Address -->

                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
						<label for="qq">QQ</label>
            			<input class="form-control" type="text" id="qq" name="qq" value="<?php echo $admin['qq'];?>">

                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">保存</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
					
              <input class="btn btn-primary btn-block" type="submit" id="submit" name="submit" value="保存">

                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
<?php
if(!empty($_POST['submit'])){
    if(!empty($_POST['user'])){
        $user=$_POST['user'];
        adminset($_GET['uid'],"user",$user);
        setcookie("Autive","",time() - 17200);
    }
    if(!empty($_POST['pass'])){
        $pass=$_POST['pass'];
        adminset($_GET['uid'],"pass",md5($pass));
        setcookie("Autive","",time() - 17200);
    }
    if(!empty($_POST['qq'])){
        $qq=$_POST['qq'];
        adminset($_GET['uid'],"qq",$qq);
    }
    if(!empty($_POST['name'])){
        $name=$_POST['name'];
        adminset($_GET['uid'],"name",$name);
    }
    exit("<script type='text/javascript'>window.location.href='system.php';</script>");
}

?>
 <?php include 'footer.php';?>     
</body>

</html>