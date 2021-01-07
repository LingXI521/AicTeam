<?php
include 'head.php';
include 'menu.php';
include 'header.php';
?>

<?php
if($_GET['list'] == "member"){//成员
?>
<br />
<div class="container-fluid p-t-15">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>
                    <label class="lyear-checkbox checkbox-primary">
                      <input type="checkbox" id="check-all"><span></span>
                    </label>
                  </th>
                  <th>编号</th>
                  <th>成员名称</th>
                  <th>QQ</th>
                  <th>介绍</th>
                  <th>状态</th>
                  <th>操作</th>
                </tr>
              </thead>
              <tbody>
              	
                <?php 
                $row = $AT->query("select * from autive_member");
                while($awrow = $AT->fetch($row)):
                ?><tr>
                  <td>
                    <label class=lyear-checkbox checkbox-primary>
                      <input type=checkbox name=ids[] value=".$awrow['Uid']."><span></span>
                    </label>
                  </td>
                  <td><?=$awrow['Uid'];?></td>
                  <td><?=$awrow['Name'];?></td>
                  <td><a href='tencent://message/?uin=<?=$awrow['QQ'];?>&Site=<?=$conf["Title"];?>&Menu=yes'><?=$awrow['QQ'];?></a></td>
                  <td class="product-buyer-name"><?=$awrow['jieshao'];?></td>
                  <td>
                  	<?php if($awrow['active'] == "true"):?>
                  <a href='list.php?list=member&get=false&uid=<?=$awrow['Uid'];?>' class='text-success'>正常</a>
                  <?php elseif($awrow['active'] == "false"):?>
                  <a href='list.php?list=member&get=true&uid=<?=$awrow['Uid'];?>' class='text-danger'>未审核</a>
                  <?php endif;?>
                  </td>
                  <td>
                      <a class='btn btn-default btn-sm' href='./edit.php?edit=member&uid=<?=$awrow['Uid'];?>' title='编辑'>编辑</a>
                      <a class='btn btn-danger btn-sm' href='list.php?list=member&get=shan&uid=<?=$awrow['Uid'];?>' title='删除'>删除</a>
                  </td>
                </tr>
                <?php
                endwhile;
                ?> 
                
              </tbody>
            </table>
          </div>
 
        </div>
      </div>
    </div>
    
  </div>


<?php

if($_GET['get'] == "true"){
    $AT->query("UPDATE autive_member SET active ='true' WHERE `Uid`='".$_GET['uid']."'");
    echo("<script type='text/javascript'>window.location.href='./list.php?list=member';</script>");
}elseif($_GET['get'] == "false"){
    $AT->query("UPDATE autive_member SET active ='false' WHERE `Uid`='".$_GET['uid']."'");
    echo("<script type='text/javascript'>window.location.href='./list.php?list=member';</script>");
}elseif($_GET['get'] == "shan"){
		if(quanxian($_COOKIE['Autive']) != "supertube" && quanxian($_COOKIE['Autive']) != "group"){
    exit("<script type='text/javascript'>alert('您无权限修改！');window.location.href='./index.php';</script>");
}
    $AT->query("DELETE FROM `autive_member` WHERE `autive_member`.`Uid` = '".$_GET['uid']."'");
    echo("<script type='text/javascript'>window.location.href='./list.php?list=member';</script>");
}
?>

<?php
}elseif ($_GET['list'] == "site") {//站点
?><br />
<div class="container-fluid p-t-15">
  
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>
                    <label class="lyear-checkbox checkbox-primary">
                      <input type="checkbox" id="check-all"><span></span>
                    </label>
                  </th>
                  <th>编号</th>
                  <th>标题</th>
                  <th>内容</th>
                  <th>网址</th>
                  <th>图片网址</th>
                  <th>状态</th>
                  <th>操作</th>
                </tr>
              </thead>
              <tbody>
              	
                  <?php 
                  $AR = $AT->query("SELECT * FROM autive_site");
                  while($B = $AT->fetch($AR)):
                  ?>
                  <tr>
                  <td>
                    <label class='lyear-checkbox checkbox-primary'>
                      <input type='checkbox' name='ids[]' value='<?=$B['Uid'];?>'><span></span>
                    </label>
                  </td>
                  <td><?=$B['Uid'];?></td>
                  <td><?=$B['name'];?></td>
                  <td class="product-buyer-name"><?=$B['jieshao'];?></td>
                  <td><?=$B['url'];?></td>
                  <td class="product-buyer-name"><?=$B['imgurl'];?></td>
                  <td>
                  	<?php if($B['active'] == "true"):?>
                  	<a href='list.php?list=site&get=false&uid=<?=$B['Uid'];?>' class='text-success'>正常</a>
                  	<?php elseif($B['active'] == "false"):?>
                  	<a href='list.php?list=site&get=true&uid=<?=$B['Uid'];?>' class='text-danger'>未审核</a>
                  	<?php endif;?>
                  	
                  	</td>
                  <td>
                      <a class='btn btn-sm btn-default' href='./edit.php?edit=site&uid=<?=$B['Uid'];?>' title='编辑'>编辑</a>
                      <!--<a class='btn btn-xs btn-default' href='#!' title='查看' data-toggle='tooltip'><i class='mdi mdi-eye'></i></a>-->
                      <a class='btn btn-sm btn-danger' href='list.php?list=site&get=shan&uid=<?=$B['Uid'];?>' title='删除'>删除</a>
                  </td>
                  </tr>
                  <?php endwhile;?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  


<?php

if($_GET['get'] == "true"){
    $AT->query("UPDATE autive_site SET active ='true' WHERE `Uid`='".$_GET['uid']."'");
    echo("<script type='text/javascript'>window.location.href='./list.php?list=site';</script>");
}elseif($_GET['get'] == "false"){
    $AT->query("UPDATE autive_site SET active ='false' WHERE `Uid`='".$_GET['uid']."'");
    echo("<script type='text/javascript'>window.location.href='./list.php?list=site';</script>");
}elseif($_GET['get'] == "shan"){
	if(quanxian($_COOKIE['Autive']) != "supertube" && quanxian($_COOKIE['Autive']) != "group"){
    exit("<script type='text/javascript'>alert('您无权限修改！');window.location.href='./index.php';</script>");
}
    $AT->query("DELETE FROM `autive_site` WHERE `autive_site`.`Uid` = '".$_GET['uid']."'");
    echo("<script type='text/javascript'>window.location.href='./list.php?list=site';</script>");
}
?>
<?php
}elseif ($_GET['list'] == "comment") {//反馈
?><br />
<div class="container-fluid p-t-15">
  
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
 
        <div class="card-body">
          
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>
                    <label class="lyear-checkbox checkbox-primary">
                      <input type="checkbox" id="check-all"><span></span>
                    </label>
                  </th>
                  <th>编号</th>
                  <th>名称</th>
                  <th>QQ</th>
                  <th>内容</th>
                  <th>操作</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                  $AR = $AT->query("SELECT * FROM autive_comments");
                  while($B = $AT->fetch($AR)):?>
				<tr>
                  <td>
                    <label class='lyear-checkbox checkbox-primary'>
                      <input type='checkbox' name='ids[]' value='<?=$B['Uid'];?>'><span></span>
                    </label>
                  </td>
                  <td><?=$B['Uid'];?></td>
                  <td><?=$B['Name'];?></td>
                  <td><a href='tencent://message/?uin=<?=$B['QQ'];?>&Site=<?=$conf["Title"];?>&Menu=yes'><?=$B['QQ'];?></a></td>
                  <td><?=$B['content'];?></td>

                  <td>
                      <a class='btn btn-sm btn-danger' href='list.php?list=comment&get=shan&uid=<?=$B['Uid'];?>' title='删除'>删除</a>
                    </div>
                  </td>
                </tr>
                <?php
                  endwhile;
                  ?>
              </tbody>
            </table>
          </div>

 
        </div>
      </div>
    </div>
    
  </div>
  



<?php
if($_GET['get'] == "shan"){
		if(quanxian($_COOKIE['Autive']) != "supertube" && quanxian($_COOKIE['Autive']) != "group"){
    exit("<script type='text/javascript'>alert('您无权限修改！');window.location.href='./index.php';</script>");
}
    $AT->query("DELETE FROM `autive_comments` WHERE `autive_comments`.`Uid` = '".$_GET['uid']."'");
    echo("<script type='text/javascript'>window.location.href='./list.php?list=comment';</script>");
}
?>

<?php
}elseif ($_GET['list'] == "link") {//友链
?><br />
<div class="container-fluid p-t-12">
  
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>
                    <label class="lyear-checkbox checkbox-primary">
                      <input type="checkbox" id="check-all"><span></span>
                    </label>
                  </th>
                  <th>编号</th>
                  <th>友链标题</th>
                  <th>简介</th>
                  <th>网址</th>
                  <th>状态</th>
                  <th>操作</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                  $AR = $AT->query("SELECT * FROM autive_links");
                  while($B = $AT->fetch($AR)){
                      if($B['active'] == "false"){
                        $font="text-danger";
                        $msg="未通过";
                        $get="true";
                    }else {
                        $font="text-success";
                        $msg = "正常";
                        $get="false";
                    }
                      echo"<tr>
                  <td>
                    <label class='lyear-checkbox checkbox-primary'>
                      <input type='checkbox' name='ids[]' value='".$B['Uid']."'><span></span>
                    </label>
                  </td>
                  <td>".$B['Uid']."</td>
                  <td>".$B['Title']."</td>
                  <td>".$B['passage']."</td>
                  <td>".$B['url']."</td>
                  <td><a href='list.php?list=link&get=".$get."&uid=".$B['Uid']."' class='".$font."'>".$msg."</a></font></td>
                  <td>
                      <a class='btn btn-sm btn-default' href='edit.php?edit=links&uid=".$B['Uid']."' title='编辑'>编辑</a>
                      <a class='btn btn-sm btn-danger' href='list.php?list=link&get=shan&uid=".$B['Uid']."' title='删除'>删除</a>
                    </div>
                  </td>
                </tr>";
                  }
                  ?>
              </tbody>
            </table>
          </div>
 
        </div>
      </div>
    </div>
    
  </div>
  


<?php

if($_GET['get'] == "true"){
    $AT->query("UPDATE autive_links SET active ='true' WHERE `Uid`='".$_GET['uid']."'");
    echo("<script type='text/javascript'>window.location.href='./list.php?list=link';</script>");
}elseif($_GET['get'] == "false"){
    $AT->query("UPDATE autive_links SET active ='false' WHERE `Uid`='".$_GET['uid']."'");
    echo("<script type='text/javascript'>window.location.href='./list.php?list=link';</script>");
}elseif($_GET['get'] == "shan"){
		if(quanxian($_COOKIE['Autive']) != "supertube" && quanxian($_COOKIE['Autive']) != "group"){
    exit("<script type='text/javascript'>alert('您无权限修改！');window.location.href='./index.php';</script>");
}
    $AT->query("DELETE FROM `autive_links` WHERE `autive_links`.`Uid` = '".$_GET['uid']."'");
    echo("<script type='text/javascript'>window.location.href='./list.php?list=link';</script>");
}
?>
<?php
}elseif ($_GET['list'] == "info") {//团队消息
?><br />
<div class="container-fluid p-t-12">
  
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>
                    <label class="lyear-checkbox checkbox-primary">
                      <input type="checkbox" id="check-all"><span></span>
                    </label>
                  </th>
                  <th>编号</th>
                  <th>发布时间</th>
                  <th>内容</th>
                  <th>操作</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                  $W = $AT->query("SELECT * FROM autive_info");
                  while($RT = $AT->fetch($W)){
                      echo "<tr>
                  <td>
                    <label class='lyear-checkbox checkbox-primary'>
                      <input type='checkbox' name='ids[]' value='".$RT['Uid']."'><span></span>
                    </label>
                  </td>
                  <td>".$RT['Uid']."</td>
                  <td>".$RT['time']."</td>
                  <td>".$RT['content']."</td>
                  <td>
                      <a class='btn btn-sm btn-danger' href='list.php?list=info&i=shan&Uid=".$RT['Uid']."' title='删除' data-toggle='tooltip'>删除</a>
                  </td>
                </tr>";
                  }
                  ?>
                
     
 
              </tbody>
            </table>
          </div>

 
        </div>
      </div>
    </div>
    
  </div>
  




<?php
if($_GET['i'] == "shan"){
		if(quanxian($_COOKIE['Autive']) != "supertube" && quanxian($_COOKIE['Autive']) != "group"){
    exit("<script type='text/javascript'>alert('您无权限修改！');window.location.href='./index.php';</script>");
}
$AT->query("DELETE FROM autive_info WHERE Uid = '".$_GET['Uid']."'");
echo("<script language='javascript'>window.location.href='./list.php?list=info&i=list';</script>");
}
?>

<?php
}elseif($_GET['list'] == "group"){//账号管理
if(quanxian($_COOKIE['Autive']) != "supertube"){
    exit("<script type='text/javascript'>alert('您无权限访问！');window.location.href='./index.php';</script>");
}
?><br />
<div class="container-fluid p-t-15">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>
                    <label class="lyear-checkbox checkbox-primary">
                      <input type="checkbox" id="check-all"><span></span>
                    </label>
                  </th>
                  <th>编号</th>
                  <th>账号</th>
                  <th>QQ</th>
                  <th>权限</th>
                  <th>状态</th>
                  <th>操作</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $row = $AT->query("select * from autive_user");
                
                while($awrow = $AT->fetch($row)){
                    $quanxian = quanxian($awrow['user']);
                    if($awrow['active'] == 1){
                        $msg = "正常";
                        $aw = 2;
                        $color = "success";
                    }elseif($awrow['active'] == 2){
                        $msg = "禁止登陆";
                        $aw = 1;
                        $color = "danger";
                    }else{
                        $msg = "未知";
                        $aw = 1;
                        $color = "secondary";
                    }
                echo "<tr>
                  <td>
                    <label class=lyear-checkbox checkbox-primary>
                      <input type=checkbox name=ids[] value=".$awrow['uid']."><span></span>
                    </label>
                  </td>
                  <td>".$awrow['uid']."</td>
                  <td>".$awrow['user']."</td>
                  <td><a href='tencent://message/?uin=".$awrow['qq']."&Site=".conf("title")."&Menu=yes'>".$awrow['qq']."</a></td>
                  <td>".$quanxian."</td>
                  <td><a href='list.php?list=group&id=".$aw."&uid=".$awrow['uid']."' class='text-".$color."'>".$msg."</a></td>
                  <td>
                      <a class='btn btn-sm btn-default' href='./edit.php?edit=group&uid=".$awrow['uid']."' title='编辑'>编辑</a>
                      <a class='btn btn-sm btn-danger' href='list.php?list=group&get=shan&uid=".$awrow['uid']."' title='删除'>删除</a>
                  </td>
                </tr>";
                }
                ?> 
              </tbody>
            </table>
          </div>
 
        </div>
      </div>
    </div>
    
  </div>
  


<?php
if($_GET['get'] == "shan"){
    if($_GET['uid'] == '1'){
        exit("<script type='text/javascript'>alert('禁止删除初始账号！！');window.location.href='./list.php?list=group';</script>");
    }
    $AT->query("DELETE FROM `autive_user` WHERE `autive_user`.`uid` = '".$_GET['uid']."'");
    echo("<script type='text/javascript'>window.location.href='./list.php?list=group';</script>");
}elseif(!empty($_GET['id'])){
    $AT->query("UPDATE `autive_user` SET `active` = '".$_GET['id']."' WHERE `Uid` = ".$_GET['uid']);
    echo("<script type='text/javascript'>window.location.href='./list.php?list=group';</script>");
}
?>
<?php
}include 'footer.php';
?>