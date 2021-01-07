<?php
include("../includes/authcode.php");
if(empty($_COOKIE['Autive']))exit("<script type='text/javascript'>alert('您还未登录！');window.location.href='./login.php';</script>");
$conf = file_get_contents("http://auth.autive.cn/version.html");
if($conf > $ver){
    echo("有新版本，可以更新啦！<a href='http://auth.autive.cn'>前往下载</a>");
    
}elseif ($ver == $conf) {
    echo("已是最新版本！");
    
}elseif($ver > $conf){
    echo("您的版本高于最新版，请检查是否为正版程序？");
}
if($_GET['dwn'] == "true"){
	$awa = file_get_contents("http://auth.autive.cn/dwn.php?ver=".$ver);
	if($awa['w'] == "dwn"){
		echo("<script>alert('该版本有文件更新，请前往授权站下载！');</script>");
		
		if(!empty($awa['sql'])){
			$sql=explode(';',$awa['sql']);
			$t=0; $e=0; $error='';
	for($i=0;$i<count($sql);$i++) {
		if ($sql[$i]=='')continue;
		if($AT->query($sql[$i])) {
			++$t;
		} else {
			++$e;
			$error.=$AT->error().'<br/>';
		}
	}
if($e==0) {
	echo '<script>alert("数据库正常更新完毕！");</script>';
} else {
	echo '<script>alert("SQL成功'.$t.'句/失败'.$e.'句<br/>错误信息：'.$error.'，请检查数据库配置！");</script>';
}

	
		}
		
	}elseif($awa['w'] == "sql"){

		$sql=explode(';',$awa['sql']);
		$t=0; $e=0; $error='';
	for($i=0;$i<count($sql);$i++) {
		if ($sql[$i]=='')continue;
		if($AT->query($sql[$i])) {
			++$t;
		} else {
			++$e;
			$error.=$AT->error().'<br/>';
		}
	}
if($e==0) {
	echo '<script>alert("数据库正常更新完毕！");</script>';
} else {
	echo '<script>alert("SQL成功'.$t.'句/失败'.$e.'句<br/>错误信息：'.$error.'，请检查数据库配置！");</script>';
}

 $fp= fopen("../includes/authcode.php", "x");

 $len = fwrite($fp,'<?php
$authcodea="'.$authcodea.'";
$ver='.$conf.';
?>');

	}
}
?>