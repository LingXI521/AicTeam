<?php
include 'head.php';
if(quanxian($_COOKIE['Autive']) != "supertube" && quanxian($_COOKIE['Autive']) != "group"){
    exit("<script type='text/javascript'>alert('您无权限访问！');window.location.href='./index.php';</script>");
}
include 'menu.php';
include 'header.php';
if($_GET['config'] == "1"){
?>
<br >
<div class="container-fluid p-t-15">
      <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
  

        <div class="tab-content">
          <div class="tab-pane active">
            
            <form action="?config=1" method="post" name="edit-form" class="edit-form">
              <div class="form-group">
                <label for="title">网站标题</label>
                <input class="form-control" type="text" id="title" name="title" value="<?php echo conf("Title")?>" placeholder="请输入站点标题" >
                <small class="help-block">调用方式：<code>conf("Title")</code></small>
              </div>
              <div class="form-group">
                <label for="title2">网站副标题</label>
                <input class="form-control" type="text" id="title2" name="title2" value="<?php echo conf("Title2")?>" placeholder="请输入站点副标题" >
              </div>
              <div class="form-group">
                <label for="url">网站URL</label>
                <input class="form-control" type="text" id="url" name="url" value="<?php echo conf("url")?>" placeholder="请输入网址URL" >
                <small class="help-block">暂时只针对404页面，其余页面待完善 使用说明:http://test.autive.cn/ 记住后面要带/</small>
              </div>
              <div class="form-group">
                <label for="ico">ICO图片</label>
                <input type="text" class="form-control" name="ico" id="ico" value="<?php echo conf("ico")?>" />
                <small class="help-block">小图标</small>
              </div>
              <div class="form-group">
                <label for="logo">LOGO图片</label>
                <input type="text" class="form-control" name="logo" id="logo" value="<?php echo conf("logo")?>" />
                <small class="help-block">logo大小建议：460x460</small>
              </div>
              <div class="form-group">
                <label for="keywords">站点关键词</label>
                <input class="form-control" type="text" id="keywords" name="keywords" value="<?php echo conf("Keywords")?>" placeholder="请输入站点关键词" >
                <small class="help-block">网站搜索引擎关键字</small>
              </div>
              <div class="form-group">
                <label for="description">站点描述</label>
                <textarea class="form-control" id="description" rows="5" name="description" placeholder="请输入站点描述" ><?php echo conf("Description")?></textarea>
                <small class="help-block">网站描述，有利于搜索引擎抓取相关信息</small>
              </div>
              <div class="form-group">
                <label for="gonggao">公告</label>
                <input class="form-control" type="text" id="gonggao" name="gonggao" value="<?php echo conf("gonggao")?>" placeholder="请输入公告" >
              </div>
              <div class="form-group">
                <label for="copyright">版权信息</label>
                <input class="form-control" type="text" id="copyright" name="copyright" value="<?php echo conf("foot")?>" placeholder="请输入版权信息" >
                <small class="help-block">调用方式：<code>conf('foot')</code></small>
              </div>
              <div class="form-group">
                <label for="icp">备案信息</label>
                <input class="form-control" type="text" id="icp" name="icp" value="<?php echo conf("icp")?>" placeholder="请输入备案信息" >
                <small class="help-block">调用方式：<code>conf('icp')</code></small>
              </div>
              <div class="form-group">
                <input type="submit" id="submit" name="submit" class="btn btn-primary btn-block m-r-5">
                </div>
            </form>
            
          
        </div>

      </div>
    </div>
    
  </div>
  
</div>
    </div>

<?php
if(!empty($_POST['submit'])){

        $title=$_POST['title'];
        set("Title",$title);

        $title2=$_POST['title2'];
        set("Title2",$title2);

        $logo=$_POST['logo'];
        set("logo",$logo);
        
        $ico=$_POST['ico'];
        set("ico",$ico);

        $keywords=$_POST['keywords'];
        set("Keywords",$keywords);

        $des=$_POST['description'];
        set("Description",$des);

        $copy=$_POST['copyright'];
        set("foot",$copy);

        $icp=$_POST['icp'];
        set("icp",$icp);

        $url=$_POST['url'];
        set("url",$url);
        
        $gg=$_POST['gonggao'];
        set("gonggao",$gg);
        
    echo("<script type='text/javascript'>alert('修改成功！');</script>");
    echo("<script type='text/javascript'>window.location.href='./config.php?config=1';</script>");
}
?>
<?php
}elseif ($_GET['config'] == "2") {
?>
<br >
<div class="container-fluid p-t-15">
      <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="tab-pane active">
            
            <form action="?config=2" method="post" name="edit-form" class="edit-form">
              <div class="form-group">
                <label for="about">关于我们</label>
<textarea class="form-control" id="about" rows="5" name="about"><?php echo conf("about");?></textarea>
              </div>
              <div class="form-group">
                <label for="script">自定义尾部js</label>
<textarea class="form-control" id="script" rows="5" name="script"><?php echo conf("script");?></textarea>
<small>你可以自己自定义尾部js，页面扩展性可访问：<a href="https://api.autive.cn" target="_blank">https://api.autive.cn</a>添加一些趣味的东西</small>
              </div>
              <div class="form-group">
                <label for="header">自定义头部信息</label>
<textarea class="form-control" id="header" rows="5" name="header"><?php echo conf("header");?></textarea>
<small>放在开头的代码</small>
              </div>
              <div class="form-group">
                <label for="demand">加入我们的要求</label>
<textarea class="form-control" id="demand" rows="5" name="demand"><?php echo conf("demand");?></textarea>
<small>加入界面的要求显示</small>
              </div>
            <div class="form-group">
                <label for="comment">反馈内容</label>
<textarea class="form-control" id="comment" rows="5" name="comment"><?php echo conf("comment");?></textarea>
<small>主页反馈内容</small>
              </div>
              <div class="form-group">
                <label for="music">背景音乐地址</label>
<textarea class="form-control" id="music" rows="3" name="music"><?php echo conf("music");?></textarea>
              </div>
              <div class="form-group">
                <label for="bgurl">首页背景图片URL</label>
                <input class="form-control" type="text" id="bgurl" name="bgurl" value="<?php echo conf("bgurl")?>" placeholder="请输入背景图片URL" >
                <small class="help-block">可使用API图片站点的，要带http/https协议</small>
              </div>
              <div class="row">
              	<div class="col-xl-4 col-md-6">
            <div class="form-group">
                
                
                <label for="Name1">特点1 Name</label>
                <input class="form-control" type="text" id="Name1" name="Name1" value="<?php $a =fuwu("1"); echo $a['Name'];?>" placeholder="请输入服务名称">
                
                
                <label for="Page1">特点1 Page</label>
                <input class="form-control" type="text" id="Page1" name="Page1" value="<?php echo $a['Page'];?>">
                
                
            </div>   
            </div>
            <div class="col-xl-4 col-md-6">
            <div class="form-group">
                
                
                <label for="Name2">特点2 Name</label>
                <input class="form-control" type="text" id="Name2" name="Name2" value="<?php $a =fuwu("2"); echo $a['Name'];?>">
                
                
                <label for="Page2">特点2 Page</label>
                <input class="form-control" type="text" id="Page2" name="Page2" value="<?php echo $a['Page'];?>">
                
                
            </div>    
            </div><div class="col-xl-4 col-md-6">
            <div class="form-group">
                
                <label for="Name3">特点3 Name</label>
                <input class="form-control" type="text" id="Name3" name="Name3" value="<?php $a =fuwu("3"); echo $a['Name'];?>">
                
                
                
                <label for="Page3">特点3 Page</label>
                <input class="form-control" type="text" id="Page3" name="Page3" value="<?php echo $a['Page'];?>">
                
                
            </div></div>
            
              </div>
              
              <div class="form-group">
                <input type="submit" name="submit" id="submit" class="btn btn-block btn-primary m-r-5">
              </div>
            </form>
            
          </div>
        </div>

      </div>
    </div>
    
  </div>
  

<?php

if(!empty($_POST['submit'])){

        $about=$_POST['about'];
        set("about",$about);

        $script=$_POST['script'];
        set("script",$script);

        $music=$_POST['music'];
        set("music",$music);

        $comment=$_POST['comment'];
        set("comment",$comment);
        
        $Name1=$_POST['Name1'];
        set2("1","Name",$Name1);

        $Page1 = $_POST['Page1'];
        set2("1","Page",$Page1);

        $Name2=$_POST['Name2'];
        set2("2","Name",$Name2);

        $Page2 = $_POST['Page2'];
        set2("2","Page",$Page2);

        $Name3=$_POST['Name3'];
        set2("3","Name",$Name3);

        $Page3 = $_POST['Page3'];
        set2("3","Page",$Page3);
    
        $bgurl = $_POST['bgurl'];
        set("bgurl",$bgurl);
        
        $demand = $_POST['demand'];
        set("demand",$demand);
        
        $header = $_POST['header'];
        set("header",$header);
    echo("<script type='text/javascript'>alert('修改成功！');</script>");
    echo("<script type='text/javascript'>window.location.href='./config.php?config=2';</script>");
}
?>
<?php
}
include 'footer.php';
?>