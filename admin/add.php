<?php
include 'head.php';
if(quanxian($_COOKIE['Autive']) != "supertube" && quanxian($_COOKIE['Autive']) != "group"){
    exit("<script type='text/javascript'>alert('您无权限访问！');window.location.href='./index.php';</script>");
}
include 'menu.php';
include 'header.php';
?>
<br >
<?php
if($_GET['add'] == "link"){
?>
<div class="container-fluid p-t-15">
  
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          
          <form action="?add=link" method="post" class="row">
            <!--<div class="form-group col-md-12">
              <label for="type">栏目</label>
              <div class="form-controls">
                <select name="type" class="form-control" id="type">
                  <option value="1">小说</option>
                  <option value="2">古籍</option>
                  <option value="3">专辑</option>
                  <option value="4">自传</option>
                </select>
              </div>
            </div>-->
            <div class="form-group col-md-12">
              <label for="title">标题</label>
              <input type="text" class="form-control" id="title" name="title" value="" placeholder="请输入标题" />
            </div>
            <div class="form-group col-md-12">
              <label for="passage">内容</label>
              <input type="text" class="form-control" id="passage" name="passage" value="" placeholder="内容" />
            </div>
            <div class="form-group col-md-12">
              <label for="url">站点网址</label>
              <textarea class="form-control" id="url" name="url" rows="5" value="" placeholder="站点网址"></textarea>
            </div>
            <div class="form-group col-md-12">
              <label for="status">状态</label>
              <div class="clearfix">
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="false"><span>禁用</span>
                </label>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="true" checked><span>启用</span>
                </label>
              </div>
            </div>
            <div class="form-group col-md-12">
              <input type="submit" class="btn btn-primary ajax-post" target-form="add-form" id="submit" name="submit" value="确 定">
            </div>
          </form>
 
        </div>
      </div>
    </div>
    
  </div>
  



<?php
if(!empty($_POST['submit'])){
    if(empty($_POST['title'])){
        echo("<script type='text/javascript'>alert('确保每项都不能空！！');</script>");
        exit();
    }
    if (empty($_POST['passage'])) {
        echo("<script type='text/javascript'>alert('确保每项都不能空！！');</script>");
        exit();
    }
    if (empty($_POST['url'])) {
        echo("<script type='text/javascript'>alert('确保每项都不能空！！');</script>");
        exit();
    }
    $AT->query("INSERT INTO `autive_links` (`Uid`, `Title`, `passage`, `url`, `active`) VALUES ('0', '".$_POST['title']."', '".$_POST['passage']."', '".$_POST['url']."', '".$_POST['status']."')");
    
    exit("<script language='javascript'>window.location.href='./list.php?list=link';</script>");
}


?>
<?php
}elseif ($_GET['add'] == "member") {
?>
<div class="container-fluid p-t-12">
  
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h3>添加成员</h3>
          <form action="?add=member" method="post" class="row">
            
            <div class="form-group col-md-12">
              <label for="title">成员名字</label>
              <input type="text" class="form-control" id="user" name="user" value="" placeholder="请输入成员名字" />
            </div>
            <div class="form-group col-md-12">
              <label for="seo_keywords">QQ</label>
              <input type="text" class="form-control" id="qq" name="qq" value="" placeholder="qq" />
            </div>
            <div class="form-group col-md-12">
              <label for="seo_description">描述</label>
              <textarea class="form-control" id="jianjie" name="jianjie" rows="5" value="" placeholder="描述"></textarea>
            </div>
            
            <div class="form-group col-md-12">
              <label for="status">状态</label>
              <div class="clearfix">
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" id="status" name="status" value="false"><span>未审核</span>
                </label>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" id="status" name="status" value="true" checked><span>正常</span>
                </label>
              </div>
            </div>
            <div class="form-group col-md-12">
              <input type="submit" class="btn btn-primary" id="submit" name="submit">
            </div>
          </form>
 
        </div>
      </div>
    </div>
    
  </div>
  


<?php
if(!empty($_POST['submit'])){
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
    $AT->query("INSERT INTO `autive_member` (`Uid`, `Name`, `QQ`, `jieshao`, `active`) VALUES ('0', '".$_POST['user']."', '".$_POST['qq']."', '".$_POST['jianjie']."', '".$_POST['status']."')");
    
    exit("<script language='javascript'>window.location.href='./list.php?list=member';</script>");
}


?>
<?php
}elseif($_GET['add'] == "site"){
?>
<div class="container-fluid p-t-15">
  
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          
          <form action="?add=site" method="post" class="row">
            <!--<div class="form-group col-md-12">
              <label for="type">栏目</label>
              <div class="form-controls">
                <select name="type" class="form-control" id="type">
                  <option value="1">小说</option>
                  <option value="2">古籍</option>
                  <option value="3">专辑</option>
                  <option value="4">自传</option>
                </select>
              </div>
            </div>-->
            <div class="form-group col-md-12">
              <label for="title">标题</label>
              <input type="text" class="form-control" id="title" name="title" value="" placeholder="请输入标题" />
            </div>
            <div class="form-group col-md-12">
              <label for="jieshao">内容</label>
              <input type="text" class="form-control" id="jieshao" name="jieshao" value="" placeholder="内容" />
            </div>
            <div class="form-group col-md-12">
              <label for="url">站点网址</label>
              <textarea class="form-control" id="url" name="url" rows="5" value="" placeholder="站点网址"></textarea>
            </div>
           <div class="form-group col-md-12">
              <label for="imgurl">图片来源</label>
              <textarea class="form-control" id="imgurl" name="imgurl" rows="5" value="" placeholder="图片来源"></textarea>
              <small>需要完整路径，不用带http</samll>
            </div>
            <div class="form-group col-md-12">
              <label for="status">状态</label>
              <div class="clearfix">
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="false"><span>禁用</span>
                </label>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="true" checked><span>启用</span>
                </label>
              </div>
            </div>
            <div class="form-group col-md-12">
              <input type="submit" class="btn btn-primary ajax-post" target-form="add-form" id="submit" name="submit" value="确 定">
            </div>
          </form>
 
        </div>
      </div>
    </div>
    
  </div>
  


<?php
if(!empty($_POST['submit'])){
    if(empty($_POST['title'])){
        echo("<script type='text/javascript'>alert('确保每项都不能空！！');</script>");
        exit();
    }
    if (empty($_POST['jieshao'])) {
        echo("<script type='text/javascript'>alert('确保每项都不能空！！');</script>");
        exit();
    }
    if (empty($_POST['url'])) {
        echo("<script type='text/javascript'>alert('确保每项都不能空！！');</script>");
        exit();
    }
    if (empty($_POST['imgurl'])) {
        echo("<script type='text/javascript'>alert('确保每项都不能空！！');</script>");
        exit();
    }
    $AT->query("INSERT INTO `autive_site` (`Uid`, `name`, `url`, `jieshao`,`imgurl` ,`active`) VALUES ('0', '".$_POST['title']."', '".$_POST['url']."', '".$_POST['jieshao']."','".$_POST['imgurl']."', '".$_POST['status']."')");
    
    exit("<script language='javascript'>window.location.href='./list.php?list=site';</script>");
}


?>
<?php
}elseif($_GET['add'] == "group"){
?>
<div class="container-fluid p-t-12">
  
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h3>添加</h3>
          <form action="?add=group" method="post" class="row">
            
            <div class="form-group col-md-12">
              <label for="title">账号</label>
              <input type="text" class="form-control" id="user" name="user" value="" placeholder="请输入账号" />
            </div>
            <div class="form-group col-md-12">
              <label for="name">用户名</label>
              <input type="text" class="form-control" id="name" name="name" value="" placeholder="请输入用户名" />
            </div>
            <div class="form-group col-md-12">
              <label for="seo_description">密码</label>
              <textarea class="form-control" id="jianjie" name="jianjie" rows="5" value="" placeholder="密码"></textarea>
            </div>
            <div class="form-group col-md-12">
              <label for="seo_keywords">QQ</label>
              <input type="text" class="form-control" id="qq" name="qq" value="" placeholder="qq" />
            </div>
            
            
            <div class="form-group col-md-12">
              <label for="status">权限</label>
              <div class="clearfix">
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="status" value="1"><span>超管</span>
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
              </div>
            </div>
            <div class="form-group col-md-12">
              <label for="zt">状态</label>
              <div class="clearfix">
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="zt" value="1"><span>正常</span>
                </label>
                <label class="lyear-radio radio-inline radio-primary">
                  <input type="radio" name="zt" value="2"><span>禁止登陆</span>
                </label>
              </div>
            </div>
            <div class="form-group col-md-12">
              <input type="submit" class="btn btn-primary" id="submit" name="submit">
            </div>
          </form>
 
        </div>
      </div>
    </div>
    
  </div>
  

<?php
if(!empty($_POST['submit'])){
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
    $paw = md5($_POST['jianjie']);
    $AT->query("INSERT INTO `autive_user` (`uid`, `user`, `QQ`, `pass`, `name`,`qx`, `active`) VALUES ('0', '".$_POST['user']."', '".$_POST['qq']."', '".$paw."', '".$_POST['name']."', '".$_POST['status']."' , '".$_POST['zt']."')");
    
    exit("<script language='javascript'>window.location.href='./list.php?list=group';</script>");
}


?>
<?php
}elseif($_GET['add'] == "info"){
?>
<?php
if(!empty($_POST['submit'])){
        if(!empty($_POST['content'])){
        $AT->query("INSERT INTO `autive_info` (`Uid`, `content`, `time`) VALUES ('0', '".$_POST['content']."', '".date("Y-m-d")."')");
         
         exit("<script language='javascript'>window.location.href='./list.php?list=info&i=list';</script>");
    }
    echo("<script type='text/javascript'>alert('请输入内容');</script>");
    }
?>
<div class="container-fluid p-t-12">
      <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
  

        <div class="tab-content">
          <div class="tab-pane active">
            
            <form action="add.php?add=info" method="post" name="edit-form" class="edit-form">
              <div class="form-group">
                <label for="content">要发布的内容</label>
                <input class="form-control" type="text" id="content" name="content" placeholder="请输入内容" >
              </div>
              
              <div class="form-group">
                <input type="submit" id="submit" name="submit" class="btn btn-primary m-r-5">
            </form>
            
          </div>
        </div>

      </div>
    </div>
    
  </div>
  


<?php
}
include 'footer.php';
?>