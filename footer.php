<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
              <h4><?=$conf['Title']." - ".$conf['Title2'];?></h4>
              <p><?=$conf['about'];?></p>
          </div>
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>网站导航</h4>
              <ul>
          <li><i class="ion-ios-arrow-right"></i><a href="#intro">首页</a></li>
          <li><i class="ion-ios-arrow-right"></i><a href="#services">特点</a></li>
          <li><i class="ion-ios-arrow-right"></i><a href="#team">成员</a></li>
          <li><i class="ion-ios-arrow-right"></i><a href="#footer">联系</a></li>
          <li><i class="ion-ios-arrow-right"></i><a href="?r=join">加入我们</a></li>
            </div>    
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>友情链接</h4>
                <ul>
                <?php
                $wa =$AT->query("select * from autive_links where active='true'");
                while($o = $AT->fetch($wa)){
                    echo("
                    <li>
                    <i class='ion-ios-arrow-right'></i>
                    <a href='".$o['url']."' title='".$o['passage']."'>".$o['Title']."</a></li>");
                }
                
                ?>
                  
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-mid-nav footer-newsletter">
                <h4>正在建设</h4>
            </div>
            
      </div>
    </div>
</div>

    <div class="container">
      <div class="copyright">
          <!-- 留个版权吧 
        <p id='AicTeam'>The AicTeam By LingXI | <a href="https://autive.cn" target="_blank">Autive网络</a></p>-->
                  <?=$conf["foot"];?>
        <a href="http://beian.miit.gov.cn/" target="_blank" rel="nofollow"><?=$conf["icp"]?></a>
      </div>
      </div>
  </footer><!-- #尾部 -->
  
    <!-- js支持库引导 -->

  <script src="assets/lib/jquery/jquery.min.js"></script>
  <script src="assets/lib/jquery/jquery-migrate.min.js"></script>
  <script src="assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/lib/easing/easing.min.js"></script>
  <script src="assets/lib/superfish/hoverIntent.js"></script>
  <script src="assets/lib/superfish/superfish.min.js"></script>
  <script src="assets/lib/wow/wow.min.js"></script>
  <script src="assets/lib/waypoints/waypoints.min.js"></script>
  <script src="assets/lib/counterup/counterup.min.js"></script>
  <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="assets/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="assets/lib/lightbox/js/lightbox.min.js"></script>
  <script src="assets/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- js目录引导 -->
  <script src="assets/contactform/contactform.js"></script>
 
  <!-- js库加载 -->
  <script src="assets/js/main.js"></script>
  <script src="assets/alertify.js"></script>
  <!-- 光年组件 -->
  <script type="text/javascript" src="ly/js/jquery.min.js"></script>
  <script type="text/javascript" src="ly/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="ly/js/main.min.js"></script>
    <?=$conf['script']?>
<script type="text/javascript">
alertify.set('notifier','position', 'bottom-center');
function alertSend(content, type) {
	alertify.notify(content, type, 5);
}
<?php
if($conf['gonggao'] != ""){
?>
alertSend("<?=$conf['gonggao'];?>");
<?php
}
?>
</script>
 