<!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="https://autive.cn" class="font-weight-bold ml-1" target="_blank">Autive网络</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">帮助文档</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">报告错误</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="vendor/jquery/dist/jquery.min.js"></script>
  <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/js-cookie/js.cookie.js"></script>
  <script src="vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="vendor/chart.js/dist/Chart.min.js"></script>
  <script src="vendor/chart.js/dist/Chart.extension.js"></script>
  <script src="vendor/jvectormap-next/jquery-jvectormap.min.js"></script>
  <script src="js/vendor/jvectormap/jquery-jvectormap-world-mill.js"></script>
  <!-- Argon JS -->
  <script src="js/argon.min-1.2.0.js"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="js/demo.min.js"></script>
  <script src="js/time.js"></script>
  <script>
    // Facebook Pixel Code Don't Delete
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window,
      document, 'script', '//connect.facebook.net/en_US/fbevents.js');

    try {
      fbq('init', '111649226022273');
      fbq('track', "PageView");

    } catch (err) {
      console.log('Facebook Track Error:', err);
    }
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1">
  </noscript>