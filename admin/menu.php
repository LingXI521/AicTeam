<!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  d-flex  align-items-center">
        <a class="navbar-brand" href="dashboard.html">
          <img src="https://autive.cn/LingXIlogo.png" class="navbar-brand-img" alt="...">
        </a>
        <div class=" ml-auto ">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link <?=menu_active('index');?>" href="#navbar-dashboards" data-toggle="collapse" role="button" aria-expanded="<?=menu('index');?>" aria-controls="navbar-dashboards">
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">仪表盘</span>
              </a>
              <div class="collapse <?=menu_show('index');?>" id="navbar-dashboards">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="index.php" class="nav-link">
                      <span class="sidenav-mini-icon"> H </span>
                      <span class="sidenav-normal">概要</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link <?=menu_active('add');?>" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="<?=menu('add');?>" aria-controls="navbar-examples">
                <i class="ni ni-ungroup text-orange"></i>
                <span class="nav-link-text">编辑</span>
              </a>
              <div class="collapse <?=menu_show('add');?>" id="navbar-examples">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item <?=menu_active('add=member');?>">
                    <a href="add.php?add=member" class="nav-link"><span class="sidenav-mini-icon"> C </span>
                      <span class="sidenav-normal">添加成员</span>
                    </a>
                  </li>
                  <li class="nav-item <?=menu_active('add=site');?>">
                    <a href="add.php?add=site" class="nav-link"><span class="sidenav-mini-icon"> Z </span>
                      <span class="sidenav-normal">添加站点</span>
                    </a>
                  </li>
                  <li class="nav-item <?=menu_active('add=group');?>">
                    <a href="add.php?add=group" class="nav-link"><span class="sidenav-mini-icon"> Z </span>
                      <span class="sidenav-normal">添加账号</span>
                    </a>
                  </li>
                  <li class="nav-item <?=menu_active('add=info');?>">
                    <a href="add.php?add=info" class="nav-link"><span class="sidenav-mini-icon"> G </span>
                      <span class="sidenav-normal">发布信息</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
 
            <li class="nav-item">
              <a class="nav-link <?=menu_active('list');?>" href="#navbar-forms" data-toggle="collapse" role="button" aria-expanded="<?=menu('list');?>" aria-controls="navbar-forms">
                <i class="ni ni-single-copy-04 text-pink"></i>
                <span class="nav-link-text">管理</span>
              </a>
              <div class="collapse <?=menu_show('list');?>" id="navbar-forms">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item  <?=menu_active('list=member');?>">
                    <a href="list.php?list=member" class="nav-link">
                      <span class="sidenav-mini-icon"> C </span>
                      <span class="sidenav-normal">成员</span>
                    </a>
                  </li>
                  <li class="nav-item <?=menu_active('list=site');?>">
                    <a href="list.php?list=site" class="nav-link">
                      <span class="sidenav-mini-icon"> Z </span>
                      <span class="sidenav-normal">站点</span>
                    </a>
                  </li>
                  <li class="nav-item <?=menu_active('list=group');?>">
                    <a href="list.php?list=group" class="nav-link">
                      <span class="sidenav-mini-icon"> Z </span>
                      <span class="sidenav-normal">账号</span>
                    </a>
                  </li>
                  <li class="nav-item <?=menu_active('list=comment');?>">
                    <a href="list.php?list=comment" class="nav-link"><span class="sidenav-mini-icon"> F </span>
                      <span class="sidenav-normal">反馈</span>
                    </a>
                  </li>
                  <li class="nav-item <?=menu_active('list=info');?>">
                    <a href="list.php?list=info&i=list" class="nav-link">
                      <span class="sidenav-mini-icon"> T </span>
                      <span class="sidenav-normal">团队信息</span>
                    </a>
                  </li>
                  <li class="nav-item <?=menu_active('list=link');?>">
                    <a href="list.php?list=link" class="nav-link">
                      <span class="sidenav-mini-icon"> Y </span>
                      <span class="sidenav-normal">友情链接</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link <?=menu_active('config');?>" href="#navbar-tables" data-toggle="collapse" role="button" aria-expanded="<?=menu('config');?>" aria-controls="navbar-tables">
                <i class="ni ni-align-left-2 text-default"></i>
                <span class="nav-link-text">网站设置</span>
              </a>
              <div class="collapse <?=menu_show('config');?>" id="navbar-tables">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item <?=menu_active('config=1');?>">
                    <a href="config.php?config=1" class="nav-link">
                      <span class="sidenav-mini-icon"> T </span>
                      <span class="sidenav-normal"> 基础设置 </span>
                    </a>
                  </li>
                  <li class="nav-item <?=menu_active('config=2');?>">
                    <a href="config.php?config=2" class="nav-link">
                      <span class="sidenav-mini-icon"> S </span>
                      <span class="sidenav-normal"> 其他设置 </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="add.php?add=member">
                <i class="ni ni-archive-2 text-green"></i>
                <span class="nav-link-text">添加成员</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="list.php?list=comment">
                <i class="ni ni-chart-pie-35 text-info"></i>
                <span class="nav-link-text">反馈管理</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add.php?add=info">
                <i class="ni ni-calendar-grid-58 text-red"></i>
                <span class="nav-link-text">发布信息</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">AicTeam</span>
            <span class="docs-mini">A</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="https://autive.cn/aicteam.html" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">获取帮助</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://autive.cn/微信支付码.png" target="_blank">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">赞赏我们</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tencent://message/?uin=3364689142&Site=AicTeam&Menu=yes" target="_blank">
                <i class="ni ni-ui-04"></i>
                <span class="nav-link-text">购买授权</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>