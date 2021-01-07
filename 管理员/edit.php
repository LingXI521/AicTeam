<?php
include 'head.php';
if(quanxian($_COOKIE['Autive']) != "supertube" && quanxian($_COOKIE['Autive']) != "group"){
    exit("<script type='text/javascript'>alert('您无权限访问！');window.location.href='./index.php';</script>");
}
include 'menu.php';
include 'header.php';
if($_GET['edit'] == "site"){//站点
    if(!empty($_POST['submit'])){
        $uid=$_GET['uid'];
        
        $AT->query("UPDATE `autive_site` SET `name` = '".$_POST['title']."' WHERE `Uid` = ".$uid);
        
        $AT->query("UPDATE `autive_site` SET `url` = '".$_POST['url']."' WHERE `Uid` = ".$uid);
        
        $AT->query("UPDATE `autive_site` SET `jieshao` = '".$_POST['content']."' WHERE `Uid` = ".$uid);
        
        $AT->query("UPDATE `autive_site` SET `imgurl` = '".$_POST['picture']."' WHERE `Uid` = ".$uid);
        
        $AT->query("UPDATE `autive_site` SET `active` = '".$_POST['status']."' WHERE `Uid` = ".$uid);
        
        echo("<script type='text/javascript'>alert('修改成功！');window.location.href='./list.php?list=site';</script>");
    }
    $site = $AT->get_row("select * from autive_site where Uid = '".$_GET['uid']."'");
    //$site = $AT->fetch($site1);
?>
<div class="container-fluid p-t-15">
  
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
          <div class="card-header"><h4>编辑站点 - <?php echo $site['name']?></h4></div>
        <div class="card-body">
          
          <form action="?edit=site&uid=<?=$_GET['uid'];?>" method="post" class="row">
            <div class="form-group col-md-12">
              <label for="title">标题</label>
              <input type="text" class="form-control" id="title" name="title" value="<?php echo $site['name']?>" placeholder="请输入标题" />
            </div>
            <div class="form-group col-md-12">
              <label for="url">指向网址</label>
              <input class="form-control" id="url" name="url" value="<?php echo $site['url']?>" placeholder="请输入网址">
              <small>请使用绝对路径，否则会出现访问不了的情况</small>
            </div>
            <div class="form-group col-md-12">
              <label for="content">内容</label>
              <textarea class="form-control" id="content" rows="5" name="content"><?php echo $site['jieshao']?></textarea>
            </div>
            <div class="form-group col-md-12">
              <label for="picture">展示图片</label>
              <input class="form-control" id="picture" name="picture" value="<?php echo $site['imgurl']?>" placeholder="请输入图片url">
              <small>图片地址，不需要http协议，但需要完整路径</small><br>
                <img src="http://<?php echo $site['imgurl']?>" >
            </div>
            
            <div class="form-group col-md-12">
              <label for="status">状态</label>
              <div class="clearfix">
                   <?php
                if($site['active'] == 'true'){
                ?>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="false"><span class="text-danger">未审核</span>
                </label>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="true" checked><span class="text-success">正常</span>
                </label>
                <?php
                }elseif($site['active'] == 'false'){
                ?>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="false" checked><span class="text-danger">未审核</span>
                </label>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="true"><span class="text-success">正常</span>
                </label>
                <?php
                }
                ?>
              </div>
            </div>
            <div class="form-group col-md-12">
              <input type="submit" class="btn btn-primary" target-form="add-form" id="submit" name="submit" value="保存">
              <button type="button" class="btn btn-default" onclick="javascript:history.back(-1);return false;">返 回</button>
            </div>
          </form>
 
        </div>
      </div>
    </div>
    
  </div>
  

<?php
}elseif ($_GET['edit'] == "member") {//成员
    if(!empty($_POST['submit'])){
        $uid=$_GET['uid'];
        
        $AT->query("UPDATE `autive_member` SET `Name` = '".$_POST['Name']."' WHERE `Uid` = ".$uid);
        
        $AT->query("UPDATE `autive_member` SET `QQ` = '".$_POST['qq']."' WHERE `Uid` = ".$uid);
        
        $AT->query("UPDATE `autive_member` SET `jieshao` = '".$_POST['jieshao']."' WHERE `Uid` = ".$uid);
        
        $AT->query("UPDATE `autive_member` SET `active` = '".$_POST['status']."' WHERE `Uid` = ".$uid);
        
        echo("<script type='text/javascript'>alert('修改成功！');window.location.href='./list.php?list=member';</script>");
    }
    $mem = $AT->query("select * from autive_member where Uid = ".$_GET['uid']);
    $mem = $AT->fetch($mem);
?>
<div class="container-fluid p-t-15">
  
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
          <div class="card-header"><h4>编辑成员 - <?php echo $mem['Name']?> </h4></div>
        <div class="card-body">
          
          <form action="?edit=member&uid=<?=$_GET['uid']?>" method="post" class="row">
            <div class="form-group col-md-12">
              <label for="Name">成员名称</label>
              <input type="text" class="form-control" id="Name" name="Name" value="<?php echo $mem['Name']?>" placeholder="请输入标题" />
            </div>
            <div class="form-group col-md-12">
              <label for="qq">QQ</label>
              <input class="form-control" id="qq" name="qq" value="<?php echo $mem['QQ']?>" placeholder="请输入QQ">
            </div>
            <div class="form-group col-md-12">
              <label for="jieshao">介绍</label>
              <textarea class="form-control" id="jieshao" rows="5" name="jieshao" placeholder="请输入介绍内容"><?php echo $mem['jieshao']?></textarea>
            </div>
            <div class="form-group col-md-12">
              <label for="status">状态</label>
              <div class="clearfix">
                   <?php
                if($mem['active'] == 'true'){
                ?>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="false"><span class="text-danger">未审核</span>
                </label>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="true" checked><span class="text-success">正常</span>
                </label>
                <?php
                }elseif($mem['active'] == 'false'){
                ?>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="false" checked><span class="text-danger">未审核</span>
                </label>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="true"><span class="text-success">正常</span>
                </label>
                <?php
                }
                ?>
                
              </div>
            </div>
            <div class="form-group col-md-12">
              <input type="submit" class="btn btn-primary" target-form="add-form" name="submit" value="保存">
              <button type="button" class="btn btn-default" onclick="javascript:history.back(-1);return false;">返 回</button>
            </div>
          </form>
 
        </div>
      </div>
    </div>
    
  </div>
  

<?php
}elseif($_GET['edit'] == "links"){//友链

    if(!empty($_POST['submit'])){
        $uid=$_GET['uid'];
        
        $AT->query("UPDATE `autive_links` SET `Title` = '".$_POST['Title']."' WHERE `Uid` = ".$uid);
        
        $AT->query("UPDATE `autive_links` SET `passage` = '".$_POST['passage']."' WHERE `Uid` = ".$uid);
                
        $AT->query("UPDATE `autive_links` SET `url` = '".$_POST['url']."' WHERE `Uid` = ".$uid);
        
        $AT->query("UPDATE `autive_links` SET `active` = '".$_POST['status']."' WHERE `Uid` = ".$uid);
        
        echo("<script type='text/javascript'>window.location.href='./list.php?list=link';</script>");
    }
    $links = $AT->query("select * from autive_links where Uid = ".$_GET['uid']);
    $links = $AT->fetch($links);
?>
<div class="container-fluid p-t-15">
  
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
          <div class="card-header"><h4>编辑友链 - <?php echo $links['Title']?> </h4></div>
        <div class="card-body">
          
          <form action="?edit=links&uid=<?=$_GET['uid']?>" method="post" class="row">
            <div class="form-group col-md-12">
              <label for="Title">站点名称</label>
              <input type="text" class="form-control" id="Title" name="Title" value="<?php echo $links['Title']?>" placeholder="请输入标题" />
            </div>
            <div class="form-group col-md-12">
              <label for="passage">简介</label>
              <textarea class="form-control" id="passage" rows="5" name="passage" placeholder="请输入介绍内容"><?php echo $links['passage']?></textarea>
            </div>
            <div class="form-group col-md-12">
              <label for="url">网址</label>
              <textarea class="form-control" id="url" rows="5" name="url" placeholder="请输入网址"><?php echo $links['url']?></textarea>
            </div>
            <div class="form-group col-md-12">
              <label for="status">状态</label>
              <div class="clearfix">
                <?php
                if($links['active'] == 'true'){
                ?>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="false"><span class="text-danger">未审核</span>
                </label>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="true" checked><span class="text-success">正常</span>
                </label>
                <?php
                }elseif($links['active'] == 'false'){
                ?>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="false" checked><span class="text-danger">未审核</span>
                </label>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="true"><span class="text-success">正常</span>
                </label>
                <?php
                }
                ?>
              </div>
            </div>
            <div class="form-group col-md-12">
              <input type="submit" class="btn btn-primary" target-form="add-form" name="submit" value="保存">
              <button type="button" class="btn btn-default" onclick="javascript:history.back(-1);return false;">返 回</button>
            </div>
          </form>
 
        </div>
      </div>
    </div>
    
  </div>
  

<?php
}elseif($_GET['edit'] == "group"){ 
    if(!empty($_POST['submit'])){
        $uid=$_GET['uid'];
        
        $AT->query("UPDATE `autive_user` SET `user` = '".$_POST['user']."' WHERE `Uid` = ".$uid);
        
        $AT->query("UPDATE `autive_user` SET `qq` = '".$_POST['qq']."' WHERE `Uid` = ".$uid);
        
        $AT->query("UPDATE `autive_user` SET `name` = '".$_POST['Name']."' WHERE `Uid` = ".$uid);
        
        if(!empty($_POST['jieshao'])){
            $AT->query("UPDATE `autive_user` SET `pass` = '".md5($_POST['jieshao'])."' WHERE `Uid` = ".$uid);
        }
        
        $AT->query("UPDATE `autive_user` SET `qx` = '".$_POST['status']."' WHERE `Uid` = ".$uid);
        
        $AT->query("UPDATE `autive_user` SET `active` = '".$_POST['zt']."' WHERE `Uid` = ".$uid);
        
        echo("<script type='text/javascript'>alert('修改成功！');window.location.href='./list.php?list=group';</script>");
    }
    $mem = $AT->query("select * from autive_user where uid = ".$_GET['uid']);
    $mem = $AT->fetch($mem);
?>
<div class="container-fluid p-t-15">
  
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
          <div class="card-header"><h4>编辑 - <?php echo $mem['user']?> </h4></div>
        <div class="card-body">
          
          <form action="?edit=group&uid=<?=$_GET['uid']?>" method="post" class="row">
            <div class="form-group col-md-12">
              <label for="user">账号</label>
              <input type="text" class="form-control" id="user" name="user" value="<?php echo $mem['user']?>" placeholder="请输入账号" />
            </div>
            <div class="form-group col-md-12">
              <label for="Name">用户名</label>
              <input type="text" class="form-control" id="Name" name="Name" value="<?php echo $mem['name']?>" placeholder="请输入用户名" />
            </div>
            <div class="form-group col-md-12">
              <label for="jieshao">密码</label>
              <input class="form-control" id="jieshao" name="jieshao" placeholder="请输入密码" value="">
              <small>不改请留空</small>
            </div>
            <div class="form-group col-md-12">
              <label for="qq">QQ</label>
              <input class="form-control" id="qq" name="qq" value="<?php echo $mem['qq']?>" placeholder="请输入QQ">
            </div>
            <div class="form-group col-md-12">
              <label for="status">权限</label>
              <div class="clearfix">
                   <?php
                if($mem['qx'] == 1){
                ?>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="1" checked><span>超管</span>
                </label>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="2"><span>普通管理员</span>
                </label>
                 <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="3"><span>成员</span>
                </label>
                 <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="4"><span>访客</span>
                </label>
                <?php
                }elseif($mem['qx'] == 2){
                ?>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="2" checked><span>普通管理员</span>
                </label>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="1"><span>超管</span>
                </label>
                 <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="3" ><span>成员</span>
                </label>
                 <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="4" ><span>访客</span>
                </label>
                <?php
                }elseif($mem['qx'] == 3){
                ?>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="3" checked><span>成员</span>
                </label>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="1"><span>超管</span>
                </label>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="2"><span>普通管理员</span>
                </label>
                 
                 <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="4"><span>访客</span>
                </label>
                <?php
                }elseif($mem['qx'] == 4){
                ?>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="4" checked><span>访客</span>
                </label>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="1"><span>超管</span>
                </label>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="2"><span>普通管理员</span>
                </label>
                 <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="3"><span>成员</span>
                </label>
                <?php
                }
                ?>
                
              </div>
            </div>
            <div class="form-group col-md-12">
              <label for="zt">状态</label>
              <div class="clearfix">
                 <?php if($mem['active'] == 1){?>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="zt" value="1" checked><span>正常</span>
                </label>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="zt" value="2"><span>禁止登陆</span>
                </label>
                <?php }elseif($mem['active'] == 2){?>
                
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="zt" value="2" checked><span>禁止登陆</span>
                </label>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="zt" value="1"><span>正常</span>
                </label>
                <?php }else{?>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="zt" value="1"><span>正常</span>
                </label>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="zt" value="2"><span>禁止登陆</span>
                </label>
                <?php }?>
              </div>
            </div>
                  
            <div class="form-group col-md-12">
              <input type="submit" class="btn btn-primary" target-form="add-form" name="submit" value="保存">
              <button type="button" class="btn btn-default" onclick="javascript:history.back(-1);return false;">返 回</button>
            </div>
          </form>
 
        </div>
      </div>
    </div>
    
  </div>
  

<?php
}include 'footer.php';
?>