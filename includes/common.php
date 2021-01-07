<?php

//目录定义
define('IN_CRONLITE', true);
define('Autive', dirname(__FILE__).'/');
define('ROOT', dirname(Autive).'/');
define('SYS_KEY', 'authentication');

date_default_timezone_set("PRC");
$date = date("Y-m-d H:i:s");
session_start();
require Autive."config.php";
if ((!defined('SQLITE') && !$atconfig['User'] || !$atconfig['Pass'] || !$atconfig['SQLName'])) 
{
	header('Content-type:text/html;charset=utf-8');
	echo '<script>window.location.href="./install";</script>';
	exit(0);
}
//连接数据库
include_once(Autive."at.class.php");
$AT = new AT($atconfig['IP'],$atconfig['User'],$atconfig['Pass'],$atconfig['SQLName'],$atconfig['Port']); 
require_once(Autive.'function.php');
include_once(Autive.'get.php');

if ($AT->query('select * from autive_user where 1')==false) 
{
	header('Content-type:text/html;charset=utf-8');
	echo '你还没安装！<a href="/install/">点此安装</a>';
	exit(0);
}
if (!file_exists(ROOT.'install/install.lock') && file_exists(ROOT.'install/index.php')) 
{
	echo('<h2>检测到无 install.lock 文件</h2><ul><li><font size="4">如果您尚未安装本程序，请<a href="./install/">前往安装</a></font></li><li><font size="4">如果您已经安装本程序，请手动放置一个空的 install.lock 文件到 /install 文件夹下，<b>为了您站点安全，在您完成它之前我们不会工作。</b></font></li></ul><br/><h4>为什么必须建立 install.lock 文件？</h4>它是AicTeam的保护文件，如果检测不到它，就会认为站点还没安装，此时任何人都可以安装/重装AicTeam。<br/><br/>');
	exit(0);
}
$conf=array(
    'Title'=>conf('Title'),
    'Title2'=>conf('Title2'),
    'Keywords'=>conf('Keywords'),
    'Description'=>conf('Description'),
    'music'=>conf('music'),
    'ico'=>conf('ico'),
    'logo'=>conf('logo'),
    'about'=>conf('about'),
    'foot'=>conf('foot'),
    'icp'=>conf('icp'),
    'bgurl'=>conf('bgurl'),
    'comment'=>conf('comment'),
    'script'=>conf('script'),
    'gonggao'=>conf('gonggao'),
    'passage'=>conf('passage'),
    'header'=>conf('header')
    );
?>