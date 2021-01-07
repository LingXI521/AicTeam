<?php
function conf($con){
    global $AT;
    $a = $AT->query("SELECT * FROM autive_page where name like '".$con."'");
    $a = $AT->fetch($a);
    return $a['Page'];
}
function fuwu($con){
   global $AT;
   $a = $AT->query("SELECT * FROM autive_services where Uid like ".$con);
   $a = $AT->fetch($a);
   return $a;
}
function atdl($user,$paw){
    global $AT;
    $a = $AT->query("SELECT * FROM autive_user where user like '".$user."'");
    $a = $AT->fetch($a);
    $paw = md5($paw);
    if($a['pass'] == $paw){
       return "true";
    }
    return "false";
}
function inta($sql){
    global $AT;
    $a = $AT->query("SELECT COUNT(*) FROM autive_member");
    while($w = $a){
        $b++;
    }
    return($b);
}
function admin($user){
    global $AT;
    $a = $AT->query("SELECT * FROM autive_user where user = '".$user."'");
    $a = $AT->fetch($a);
    return $a;
}
function daddslashes($string, $force = 0, $strip = FALSE) {
	!defined('MAGIC_QUOTES_GPC') && define('MAGIC_QUOTES_GPC', get_magic_quotes_gpc());
	if(!MAGIC_QUOTES_GPC || $force) {
		if(is_array($string)) {
			foreach($string as $key => $val) {
				$string[$key] = daddslashes($val, $force, $strip);
			}
		} else {
			$string = addslashes($strip ? stripslashes($string) : $string);
		}
	}
	return $string;
}
function set($name,$new){
    global $AT;
    $a = $AT->query("UPDATE autive_page SET Page ='".$new."' WHERE `name`='".$name."'");
}  
function set2($uid,$name,$new){
    global $AT;
    $AT->query("UPDATE autive_services SET ".$name." ='".$new."' WHERE `uid`='".$uid."'");
}
function adminset($uid,$name,$new){
    global $AT;
    $AT->query("UPDATE autive_user SET ".$name." ='".$new."' WHERE `uid`='".$uid."'");
    
}
function action($name,$cona){
    global $AT;
    $A = $AT->query("SELECT * FROM autive_user where user = '".$name."'");
    $B = $AT->fetch($A);
    if($B[$cona] == "true"){
        return 'true';
    }
    return 'false';
}
function quanxian($name){
    global $AT;
    $P = $AT->get_row("SELECT * FROM autive_user where user = '".$name."'");
    if($P['qx'] == 1){
        return 'supertube';
    }elseif($P['qx'] == 2){
        return 'group';
    }elseif($P['qx'] == 3){
        return 'member';
    }elseif($P['qx'] == 4){
        return 'visitor';
    }else{
        return 'Error';
    }
}
function lista($name){
	global $AT;
	$T = 0;
	$A = $AT->query("SELECT * FROM autive_".$name);
	while ($P = $AT->fetch($A)){
		$T++;
	}
	return $T;
}
//获取QQ状态
function qq_status($qq){
    $data = @file_get_contents("http://webpresence.qq.com/getonline?type=1&$qq:");
//$data || $data = strlen(file_get_contents("http://wpa.qq.com/pa?p=2:$qq:45"));
if(!$data) { return 0; } 
 
switch((string)$data){
  case 'online[0]=0;': return 2;
  case 'online[0]=1;': return 1;
 
} 
 
return 3;

}
//MENU
function menu($x){
	$host = $_SERVER['REQUEST_URI'];
	if(strpos($host,$x) !== false){
		return "true";
	}else{
		return "false";
	}
}
function menu_show($x){
	$host = $_SERVER['REQUEST_URI'];
	if(strpos($host,$x) !== false){
		return "show";
	}else{
		return "";
	}
}
function menu_active($x){
	$host = $_SERVER['REQUEST_URI'];
	if(strpos($host,$x) !== false){
		return "active";
	}else{
		return "";
	}
}
?>