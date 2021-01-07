<?php
include 'head.php';
include 'menu.php';
include 'header.php';
?>
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">概要</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">仪表盘</a></li>
                  <li class="breadcrumb-item active" aria-current="page">概要</li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats bg-gradient-red">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title  text-white text-muted mb-0">站点名称</h5>
                      <span class="h2 font-weight-bold mb-0 text-white"><?=$conf['Title'];?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><a href="config.php?config=1">修改站点名称</a></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats bg-gradient-warning">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-muted mb-0  text-white">成员数量</h5>
                      <span class="h2 font-weight-bold mb-0  text-white"><?=lista("member");?>名</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><a href="list.php?list=member"> 管理成员</a></span>
                    <span class="text-nowrap"><a href="add.php?add=member"> 添加成员</a></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats bg-gradient-green">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-white text-muted mb-0">站点数量</h5>
                      <span class="h2 font-weight-bold mb-0 text-white"><?=lista("site");?>个</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><a href="list.php?list=site"> 管理站点</a></span>
                    <span class="text-nowrap"><a href="add.php?add=site"> 添加站点</a></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats bg-gradient-info">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-white text-muted mb-0">信息发布数量</h5>
                      <span class="h2 font-weight-bold mb-0 text-white"><?=lista("info");?>条</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><a href="list.php?list=info"> 管理</a></span>
                    <span class="text-nowrap"><a href="add.php?add=info"> 发布信息</a></span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4">
          <!-- Members list group card -->
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <!-- Title -->
              <h5 class="h3 mb-0">团队成员</h5>
            </div>
            <!-- Card body -->
            <div class="card-body">
              <!-- List group -->
              <ul class="list-group list-group-flush list my--3">
              	<?php
              	$members = $AT->query("SELECT * FROM autive_member limit 10");
              	while($M1 = $AT->fetch($members)):
              	?>
                <li class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <a href="#" class="avatar rounded-circle">
                        <img alt="Image placeholder" src="https://q1.qlogo.cn/g?b=qq&nk=<?=$M1['QQ'];?>&s=100">
                      </a>
                    </div>
                    <div class="col ml--2">
                      <h4 class="mb-0">
                        <a href="#!"><?=$M1['Name'];?></a>
                      </h4>
                      <?php $QS = qq_status($M1['QQ']); if($QS == 1):?>
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
                      <a type="button" class="btn btn-sm btn-primary text-white" href="tencent://message/?uin=<?=$M1['QQ'];?>&Site=AicTeam&Menu=yes">QQ联系</a>
                    </div>
                  </div>
                </li>
                <?php endwhile;?>
              </ul>
            </div>
          </div>
        </div>
        
		<!-- 评论列表 -->
		<div class="col-xl-8">
          <div class="row">
            <div class="col">
              <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                  <h3 class="mb-0">反馈</h3>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col" class="sort" data-sort="name">名称</th>
                        <th scope="col" class="sort" data-sort="budget">QQ</th>
                        <th scope="col" class="sort" data-sort="status">内容</th>
                      </tr>
                    </thead>
                    <tbody class="list">
                    
                    <?php $FK = $AT->query("SELECT * FROM autive_comments limit 10"); while($FK1 = $AT->fetch($FK)): ?>
                      <tr>
                        <th scope="row">
                          <div class="media align-items-center">
                            <a href="#" class="avatar rounded-circle mr-3">
                              <img alt="Image placeholder" src="https://q1.qlogo.cn/g?b=qq&nk=<?=$FK1['QQ'];?>&s=100">
                            </a>
                            <div class="media-body">
                              <span class="name mb-0 text-sm"><?=$FK1['Name'];?></span>
                            </div>
                          </div>
                        </th>
                        <td class="budget">
                          <a href="tencent://message/?uin=<?=$FK1['QQ'];?>&Site=AicTeam&Menu=yes"><?=$FK1['QQ'];?></a>
                        </td>
						<td>
                          <?=$FK1['content'];?>
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
        
      </div>
    </div>
    
    <div class="container-fluid mt--12">
      <div class="row">
        <div class="col-xl-4">
          <!-- Members list group card -->
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <!-- Title -->
              <h5 class="h3 mb-0">公告</h5>
            </div>
            <!-- Card body -->
            <div class="card-body">
              <!-- List group -->
				<p><?=file_get_contents("http://auth.autive.cn/gonggao.html");
				?></p>
            </div>
          </div>
        </div>
        
        <div class="col-xl-4">
          <!-- Members list group card -->
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <!-- Title -->
              <h5 class="h3 mb-0">更新</h5>
            </div>
            <!-- Card body -->
            <div class="card-body">
              <!-- List group -->
				<p><?include 'update.php';?></p>
            </div>
          </div>
        </div>
        
        <div class="col-xl-4">
          <!-- Members list group card -->
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <!-- Title -->
              <h5 class="h3 mb-0">模板信息</h5>
            </div>
            <!-- Card body -->
            <div class="card-body">
              <!-- List group -->
				<p>前台采用了GOD的1.0版本，进行大幅度修改。同时，也添加了一些光年后台元素。而后台采用了Argon，既美观又实用。大幅度优化用户体验。</p>
				<div class="media align-items-center">
                            <a href="#" class="avatar rounded-circle mr-3">
                              <img alt="Image placeholder" src="https://q1.qlogo.cn/g?b=qq&nk=3364689142&s=100">
                            </a>
                            <div class="media-body">
                              <span class="name mb-0 text-sm">LingXI</span>
                              <small class="text-primary">开发者</small>
                            </div>
                            <div class="col-auto">
                      <a type="button" class="btn btn-sm btn-primary text-white" href="tencent://message/?uin=3364689142&Site=AicTeam&Menu=yes">QQ联系</a>
                    </div>
                 </div>
                 <br >
                 <div class="media align-items-center">
                            <a href="#" class="avatar rounded-circle mr-3">
                              <img alt="Image placeholder" src="https://q1.qlogo.cn/g?b=qq&nk=2232142736&s=100">
                            </a>
                            <div class="media-body">
                              <span class="name mb-0 text-sm">茶栀</span>
                              <small class="text-primary">宣传者</small>
                            </div>
                            <div class="col-auto">
                      <a type="button" class="btn btn-sm btn-primary text-white" href="tencent://message/?uin=2232142736&Site=AicTeam&Menu=yes">QQ联系</a>
                    </div>
                 </div>
                 
            </div>
          </div>
        </div>
        
       </div>
      

 <?php include 'footer.php';?>     
</body>

</html>