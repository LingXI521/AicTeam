<?php
include("../includes/common.php");
if(!empty($_POST['submit'])) {
	if($_POST['yzm'] != $_POST['yzmyz']) {
		exit("<script type='text/javascript'>alert('验证码输入错误');window.location.href='./index.php';</script>");
	}
	$user = $_POST["username"];
	$pass = $_POST['password'];
	$w = atdl($user,$pass);
	if($w == "false") {
		echo("<script type='text/javascript'>alert('账号或密码错误，请重试！');window.location.href='./login.php';</script>");
	} else {
		echo("<script type='text/javascript'>alert('登录成功！');</script>");
		setcookie("Autive",$user,time() + 7200);
		echo("<script type='text/javascript'>window.location.href='./index.php';</script>");
	}
} elseif(isset($_GET['logout'])) {
	setcookie("Autive", "", time() - 3600);
	@header('Content-Type: text/html; charset=UTF-8');
	exit("<script language='javascript'>window.location.href='./login.php';</script>");
} elseif(!empty($_COOKIE['Autive'])) {
	echo("<script type='text/javascript'>alert('您已登录！');</script>");
	echo("<script type='text/javascript'>window.location.href='./index.php';</script>");
}
?>
<html lang="zh-CN">
 <head> 
  <meta charset="utf-8" /> 
  <title>登录到Aicteam后台</title> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" /> 
  <meta content="Coderthemes" name="author" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- App favicon --> 
  <!-- App css --> 
  <link href="ass/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> 
  <link href="ass/css/icons.min.css" rel="stylesheet" type="text/css" />
  <link href="ass/css/app.min.css" rel="stylesheet" type="text/css" />
  <link rel="icon" href="https://autive.cn/favicon.ico" type="image/ico" /> 
 </head> 
 <body> 
  <div class="account-pages my-5"> 
   <div class="container"> 
    <div class="row justify-content-center"> 

      <div class="card"> 
       <div class="card-body"> 
        <div class="row"> 
             <div class="col-xl-12"> 
          <div class="mx-auto mb-5"> 
           <a><img src="ass/picture/logo.png" alt="" height="24" /></a> 
           <h3 class="d-inline align-middle ml-1 text-logo"> <a>Aicteam</a> </h3> 
          </div> 
          <div class="limiter"> 
           <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54"> 
            <form class="login100-form validate-form" action="?" method="post" role="form"> 
             <label class="form-control-label">账号</label> 
             <div class="input-group input-group-merge"> 
              <div class="input-group-prepend"> 
               <span class="input-group-text"><i class="icon-dual" data-feather="mail"></i></span> 
              </div>
              <input class="form-control" type="text" name="username" placeholder="请输入用户名" autocomplete="off" required="" /> 
             </div> 
             <label class="form-control-label">密码</label> 
             <div class="input-group input-group-merge"> 
              <div class="input-group-prepend"> 
               <span class="input-group-text"><i class="icon-dual" data-feather="lock"></i></span> 
              </div>
              <input class="form-control" type="password" name="password" placeholder="请输入密码" required="" /> 
             </div> 

             <label class="form-control-label">验证码</label>
            <div class="input-group input-group-merge">
             <div class="input-group-prepend">
              <span class="input-group-text"><i class="icon-dual" data-feather="lock"></i></span>
             </div>
             <input type="text" class="form-control" id="yzm" name="yzm" placeholder="请输入验证码" />
             <input type="yzmyz" class="form-control" id="yzmyz" name="yzmyz" value="<?=mt_rand(1000,9999)?>" readonly="readonly"/>
            </div>
           </div>
           
             <div class="container-login100-form-btn"> 
              <div class="wrap-login100-form-btn"> 
               <div class="form-group mb-4"> 
                <div class="custom-control custom-checkbox"> 
                </div> 
               </div> 
               <div class="form-group mb-0 text-center"> 
                <input class="btn btn-primary btn-block" type="submit" id="submit" name="submit" value="登 录" /> 
                <!--<div class="login100-form-bgbtn"></div>--> 
               </div> 
              </div>  
              </div>
            </form> 
                    <div class="py-3 text-center">
          </div>
         </div>
         </div>
       <!-- end card-body -->
      </div>
      </div>
      <!-- end card -->
      <div class="row mt-3">
       <div class="col-12 text-center">
        <p class="text-muted">Copyright © 2020 <a href="" class="text-primary font-weight-bold ml-1">Aicteam</a></p>
       </div>
       <!-- end col -->
      </div>
      <!-- end row -->
     </div>
     <!-- end col -->
    </div>
    <!-- end row -->
   </div>
   <!-- end container -->
  </div>
  <!-- end page -->
    <!-- Vendor js -->
  <script src="ass/js/vendor.min.js"></script>
  <!-- App js -->
  <script src="ass/js/app.min.js"></script>
 </body>
</html>