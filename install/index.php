<?php
error_reporting(0);
session_start();
@header('Content-Type: text/html; charset=UTF-8');
$do=isset($_GET['do'])?$_GET['do']:'0';
if(file_exists('install.lock')){
	$installed=true;
	$do='0';
}

function checkfunc($f,$m = false) {
	if (function_exists($f)) {
		return '<font color="green">可用</font>';
	} else {
		if ($m == false) {
			return '<font color="black">不支持</font>';
		} else {
			return '<font color="red">不支持</font>';
		}
	}
}

function checkclass($f,$m = false) {
	if (class_exists($f)) {
		return '<font color="green">可用</font>';
	} else {
		if ($m == false) {
			return '<font color="black">不支持</font>';
		} else {
			return '<font color="red">不支持</font>';
		}
	}
}

function clearpack() {
	$array=glob('../daishua_release_*');
	foreach($array as $dir){
		unlink($dir);
	}
	$array=glob('../daishua_update_*');
	foreach($array as $dir){
		unlink($dir);
	}
}

function random($length, $numeric = 0) {
	$seed = base_convert(md5(microtime().$_SERVER['DOCUMENT_ROOT']), 16, $numeric ? 10 : 35);
	$seed = $numeric ? (str_replace('0', '', $seed).'012340567890') : ($seed.'zZ'.strtoupper($seed));
	$hash = '';
	$max = strlen($seed) - 1;
	for($i = 0; $i < $length; $i++) {
		$hash .= $seed{mt_rand(0, $max)};
	}
	return $hash;
}
?>
<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>AicTeam安装向导</title>
<link rel="icon" href="../favicon.ico" type="image/ico">
<meta name="author" content="yinqi">
<link href="../ly/css/bootstrap.min.css" rel="stylesheet">
<link href="../ly/css/materialdesignicons.min.css" rel="stylesheet">
<link href="../ly/css/style.min.css" rel="stylesheet">
</head>
  
<body>
    <header class="card">
        <div class="card-header">
            <h3>AicTeam安装向导</h3>
        </div>
        <!--<div class="card-body">
            
        </div>-->
    </header>
<div class="container-fluid p-t-15" style="margin-top:0%;">
  
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header"><h4>安装向导</h4>
        
        </div>
        <div class="card-body">
<?php if($do=='0'){
$_SESSION['checksession']=1;
?>
<ul class="nav-step step-dots">
    <li class="nav-step-item active">
        <span>介绍</span>
            <a class="active" data-toggle="tab"></a>
    </li>

              <li class="nav-step-item">
                <span>检查环境</span>
                <a data-toggle="tab"></a>
              </li>

              <li class="nav-step-item">
                <span>填写数据库</span>
                <a data-toggle="tab"></a>
              </li>

              <li class="nav-step-item">
                <span>保存数据库</span>
                <a data-toggle="tab"></a>
              </li>
              <li class="nav-step-item">
                <span>开始安装</span>
                <a data-toggle="tab"></a>
              </li>
              <li class="nav-step-item">
                <span>安装完成</span>
                <a data-toggle="tab"></a>
              </li>
            </ul>
<br/>
<div class="form-group">
    <p><iframe src="https://autive.cn/aicteam.html" style="width:100%;height:500px;"></iframe></p>
		<?php include("../includes/authcode.php");if($installed){ ?>
		<div class="alert alert-warning">您已经安装过，如需重新安装请删除<font color=red> install/install.lock </font>文件后再安装！</div>
		<?php }else{?>
		<p align="center"><a class="btn btn-primary" href="?do=1">开始安装</a></p>
		<?php }?>
	</div>
<?php }elseif($do=='1'){?>
<ul class="nav-step step-dots">
    <li class="nav-step-item active">
        <span>介绍</span>
            <a class="active" data-toggle="tab"></a>
    </li>

              <li class="nav-step-item active">
                <span>检查环境</span>
                <a class="active" data-toggle="tab"></a>
              </li>

              <li class="nav-step-item">
                <span>填写数据库</span>
                <a data-toggle="tab"></a>
              </li>

              <li class="nav-step-item">
                <span>保存数据库</span>
                <a data-toggle="tab"></a>
              </li>
              <li class="nav-step-item">
                <span>开始安装</span>
                <a data-toggle="tab"></a>
              </li>
              <li class="nav-step-item">
                <span>安装完成</span>
                <a data-toggle="tab"></a>
              </li>
            </ul>
            <br/>
<div class="form-group">
    <table class="table table-striped">
	<thead>
		<tr>
			<th style="width:20%">函数检测</th>
			<th style="width:15%">需求</th>
			<th style="width:15%">当前</th>
			<th style="width:50%">用途</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>PHP 5.6+</td>
			<td>必须</td>
			<td><?php echo version_compare(PHP_VERSION, '5.6.0', '>')?'<font color="green">'.PHP_VERSION.'</font>':'<font color="red">'.PHP_VERSION.'</font>'; ?></td>
			<td>PHP版本支持</td>
		</tr>
		<tr>
			<td>curl_exec()</td>
			<td>必须</td>
			<td><?php echo checkfunc('curl_exec',true); ?></td>
			<td>抓取网页</td>
		</tr>
		<tr>
			<td>file_get_contents()</td>
			<td>必须</td>
			<td><?php echo checkfunc('file_get_contents',true); ?></td>
			<td>读取文件</td>
		</tr>
		<tr>
			<td>session</td>
			<td>必须</td>
			<td><?php echo $_SESSION['checksession']==1?'<font color="green">可用</font>':'<font color="red">不支持</font>'; ?></td>
			<td>PHP必备功能</td>
		</tr>
	</tbody>
</table>
<p><span><a class="btn btn-primary" href="?do=0"><<上一步</a></span>
<span style="float:right"><a class="btn btn-primary" href="?do=2" align="right">下一步>></a></span></p>
</div>
<?php }elseif($do=='2'){?>
<ul class="nav-step step-dots">
    <li class="nav-step-item active">
        <span>介绍</span>
            <a class="active" data-toggle="tab"></a>
    </li>

              <li class="nav-step-item active">
                <span>检查环境</span>
                <a class="active" data-toggle="tab"></a>
              </li>

              <li class="nav-step-item active">
                <span>填写数据库</span>
                <a class="active" data-toggle="tab"></a>
              </li>

              <li class="nav-step-item">
                <span>保存数据库</span>
                <a data-toggle="tab"></a>
              </li>
              <li class="nav-step-item">
                <span>开始安装</span>
                <a data-toggle="tab"></a>
              </li>
              <li class="nav-step-item">
                <span>安装完成</span>
                <a data-toggle="tab"></a>
              </li>
            </ul>
            <br/>
<div class="form-group">
<form action="?do=3" class="form-sign" method="post">
		<label for="name">数据库地址:</label>
		<input type="text" class="form-control" name="at_host" value="localhost">
		<label for="name">数据库端口:</label>
		<input type="text" class="form-control" name="at_port" value="3306">
		<label for="name">数据库用户名:</label>
		<input type="text" class="form-control" name="at_user">
		<label for="name">数据库密码:</label>
		<input type="text" class="form-control" name="at_pwd">
		<label for="name">数据库名:</label>
		<input type="text" class="form-control" name="at_name">
		<!--label for="name">数据表前缀:</label>
		<input type="text" class="form-control" name="at_qz" value="shua"-->
		<br><input type="submit" class="btn btn-primary btn-block" name="submit" value="保存配置">
		</form><br/>
		（如果已事先填写好config.php相关数据库配置，请 <a href="?do=3&jump=1">点击此处</a> 跳过这一步！）
		</div>
<?php }elseif($do=='3'){?>
<ul class="nav-step step-dots">
    <li class="nav-step-item active">
        <span>介绍</span>
            <a class="active" data-toggle="tab"></a>
    </li>

              <li class="nav-step-item active">
                <span>检查环境</span>
                <a class="active" data-toggle="tab"></a>
              </li>

              <li class="nav-step-item  active">
                <span>填写数据库</span>
                <a class="active" data-toggle="tab"></a>
              </li>

              <li class="nav-step-item  active">
                <span>保存数据库</span>
                <a class="active" data-toggle="tab"></a>
              </li>
              <li class="nav-step-item">
                <span>开始安装</span>
                <a data-toggle="tab"></a>
              </li>
              <li class="nav-step-item">
                <span>安装完成</span>
                <a data-toggle="tab"></a>
              </li>
            </ul>
            <br/>
<div class="form-group">
    <?php
require './db.class.php';
if(defined("SAE_ACCESSKEY") || $_GET['jump']==1){
	include_once '../includes/config.php';
	if(!$atconfig['User']||!$atconfig['Pass']||!$atconfig['SQLName']) {
		echo '<div class="alert alert-danger">请先填写好数据库并保存后再安装！<hr/><a href="javascript:history.back(-1)"><< 返回上一页</a></div>';
	} else {
		if(!$con=DB::connect($atconfig['IP'],$atconfig['User'],$atconfig['Pass'],$atconfig['SQLName'],$atconfig['Port'])){
			if(DB::connect_errno()==2002)
				echo '<div class="alert alert-warning">连接数据库失败，数据库地址填写错误！</div>';
			elseif(DB::connect_errno()==1045)
				echo '<div class="alert alert-warning">连接数据库失败，数据库用户名或密码填写错误！</div>';
			elseif(DB::connect_errno()==1049)
				echo '<div class="alert alert-warning">连接数据库失败，数据库名不存在！</div>';
			else
				echo '<div class="alert alert-warning">连接数据库失败，['.DB::connect_errno().']'.DB::connect_error().'</div>';
		}else{
			echo '<div class="alert alert-success">数据库配置文件保存成功！</div>';
			if(DB::query("select * from ".$atconfig['dbqz']."_user where 1")==FALSE)
				echo '<p align="right"><a class="btn btn-primary btn-block" href="?do=4">创建数据表>></a></p>';
			else
				echo '<div class="list-group-item list-group-item-info">系统检测到你已安装过AicTeam</div>
				<div class="list-group-item">
					<a href="?do=5" class="btn btn-block btn-info">跳过安装</a>
				</div>
				<div class="list-group-item">
					<a href="?do=4" onclick="if(!confirm(\'全新安装将会清空所有数据，是否继续？\')){return false;}" class="btn btn-block btn-warning">强制全新安装</a>
				</div>';
		}
	}
}else{
	$at_host=isset($_POST['at_host'])?$_POST['at_host']:NULL;
	$at_port=isset($_POST['at_port'])?$_POST['at_port']:NULL;
	$at_user=isset($_POST['at_user'])?$_POST['at_user']:NULL;
	$at_pwd=isset($_POST['at_pwd'])?$_POST['at_pwd']:NULL;
	$at_name=isset($_POST['at_name'])?$_POST['at_name']:NULL;
	$at_qz=isset($_POST['at_qz'])?$_POST['at_qz']:'autive';

	if($at_host==null || $at_port==null || $at_user==null || $at_pwd==null || $at_name==null || $at_qz==null){
		echo '<div class="alert alert-danger">保存错误,请确保每项都不为空<hr/><a href="javascript:history.back(-1)"><< 返回上一页</a></div>';
	} else {
		$config="<?php
/*数据库配置*/
\$atconfig=array(
	'IP' => '{$at_host}', //数据库服务器
	'Port' => {$at_port}, //数据库端口
	'User' => '{$at_user}', //数据库用户名
	'Pass' => '{$at_pwd}', //数据库密码
	'SQLName' => '{$at_name}', //数据库名
	'dbqz' => '{$at_qz}' //数据表前缀
);
?>";
		if(!$con=DB::connect($at_host,$at_user,$at_pwd,$at_name,$at_port)){
			if(DB::connect_errno()==2002)
				echo '<div class="alert alert-warning">连接数据库失败，数据库地址填写错误！</div>';
			elseif(DB::connect_errno()==1045)
				echo '<div class="alert alert-warning">连接数据库失败，数据库用户名或密码填写错误！</div>';
			elseif(DB::connect_errno()==1049)
				echo '<div class="alert alert-warning">连接数据库失败，数据库名不存在！</div>';
			else
				echo '<div class="alert alert-warning">连接数据库失败，['.DB::connect_errno().']'.DB::connect_error().'</div>';
		}elseif(file_put_contents('../includes/config.php',$config)){
			echo '<div class="alert alert-success">数据库配置文件保存成功！</div>';
			if(DB::query("select * from ".$at_qz."_user where 1")==FALSE)
				echo '<p align="right"><a class="btn btn-primary btn-block" href="?do=4">创建数据表>></a></p>';
			else
				echo '<div class="list-group-item list-group-item-info">系统检测到你已安装过AicTeam</div>
				<div class="list-group-item">
					<a href="?do=5" class="btn btn-block btn-info">跳过安装</a>
				</div>
				<div class="list-group-item">
					<a href="?do=4" onclick="if(!confirm(\'全新安装将会清空所有数据，是否继续？\')){return false;}" class="btn btn-block btn-warning">强制全新安装</a>
				</div>';
		}else
			echo '<div class="alert alert-danger">保存失败，请确保网站根目录有写入权限<hr/><a href="javascript:history.back(-1)"><< 返回上一页</a></div>';
	}
}
?>
</div>
<?php }elseif($do=='4'){?>
<ul class="nav-step step-dots">
    <li class="nav-step-item active">
        <span>介绍</span>
            <a class="active" data-toggle="tab"></a>
    </li>

              <li class="nav-step-item active">
                <span>检查环境</span>
                <a class="active" data-toggle="tab"></a>
              </li>

              <li class="nav-step-item  active">
                <span>填写数据库</span>
                <a class="active" data-toggle="tab"></a>
              </li>

              <li class="nav-step-item  active">
                <span>保存数据库</span>
                <a class="active" data-toggle="tab"></a>
              </li>
              <li class="nav-step-item active">
                <span>开始安装</span>
                <a class="active" data-toggle="tab"></a>
              </li>
              <li class="nav-step-item">
                <span>安装完成</span>
                <a data-toggle="tab"></a>
              </li>
            </ul>
            <br/>
<div class="form-group">
<?php
include_once '../includes/config.php';
if(!$atconfig['User']||!$atconfig['Pass']||!$atconfig['SQLName']) {
	echo '<div class="alert alert-danger">请先填写好数据库并保存后再安装！<hr/><a href="javascript:history.back(-1)"><< 返回上一页</a></div>';
} else {
	require './db.class.php';
	$sql=file_get_contents("install.sql");
	$sql=explode(';',$sql);
	$cn = DB::connect($atconfig['IP'],$atconfig['User'],$atconfig['Pass'],$atconfig['SQLName'],$atconfig['Port']);
	if (!$cn) die('err:'.DB::connect_error());
	DB::query("set sql_mode = ''");
	DB::query("set names utf8");
	$t=0; $e=0; $error='';
	for($i=0;$i<count($sql);$i++) {
		if ($sql[$i]=='')continue;
		if(DB::query($sql[$i])) {
			++$t;
		} else {
			++$e;
			$error.=DB::error().'<br/>';
		}
	}
	date_default_timezone_set("PRC");
	$date = date("Y-m-d");
}
if($e==0) {
	echo '<div class="alert alert-success">安装成功！<br/>SQL成功'.$t.'句/失败'.$e.'句</div><p align="right"><a class="btn btn-block btn-primary" href="?do=5">下一步>></a></p>';
} else {
	echo '<div class="alert alert-danger">安装失败<br/>SQL成功'.$t.'句/失败'.$e.'句<br/>错误信息：'.$error.'</div><p align="right"><a class="btn btn-block btn-primary" href="?do=4">点此进行重试</a></p>';
}
?>
</div>
<?php }elseif($do=='5'){?>
<ul class="nav-step step-dots">
    <li class="nav-step-item active">
        <span>介绍</span>
            <a class="active" data-toggle="tab"></a>
    </li>

              <li class="nav-step-item active">
                <span>检查环境</span>
                <a class="active" data-toggle="tab"></a>
              </li>

              <li class="nav-step-item  active">
                <span>填写数据库</span>
                <a class="active" data-toggle="tab"></a>
              </li>

              <li class="nav-step-item  active">
                <span>保存数据库</span>
                <a class="active" data-toggle="tab"></a>
              </li>
              <li class="nav-step-item active">
                <span>开始安装</span>
                <a class="active" data-toggle="tab"></a>
              </li>
              <li class="nav-step-item active">
                <span>安装完成</span>
                <a class="active" data-toggle="tab"></a>
              </li>
            </ul>
            <br/>
<div class="form-group">
<?php
	@file_put_contents("install.lock",'AicTeam');
	clearpack();
	echo '<div class="alert alert-info"><font color="green">安装完成！管理账号和密码是:admin/123456</font><br/><br/><a href="../">>>网站首页</a>｜<a href="../admin/">>>后台管理</a><hr/>更多设置选项请登录后台管理进行修改。<br/><br/><font color="#FF0033">如果你的空间不支持本地文件读写，请自行在install/ 目录建立 install.lock 文件！</font></div>';
?>
</div>
<?php }?>











































<script type="text/javascript" src="../ly/js/jquery.min.js"></script>
<script type="text/javascript" src="../ly/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../ly/js/main.min.js"></script>
<!--向导插件-->
<script type="text/javascript" src="../ly/js/jquery.bootstrap.wizard.min.js"></script>
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
            // 点击完成后处理提交
        }
    });
});
</script>
</body>
</html>
</script>