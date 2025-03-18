
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="firmdash">
          <i class="bi bi-building"></i><span>Firms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li><!-- firm -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="swmdash">
          <i class="bi bi-recycle"></i><span>SWM</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li><!-- swm -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#tables-nav" href="arcgis">
          <i class="bi bi-globe"></i><span>ArcGIS</span><!--i class="bi bi-chevron-down ms-auto"></i-->
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="arcwatbod" class="">
              <i class="bi bi-people"></i><span>Universe of Water Bodies</span>
            </a>
          </li>
          <li>
            <a href="arcoilspill" class="">
              <i class="bi bi-people"></i><span>Oil Spill</span>
            </a>
          </li>
          <li>
            <a href="arcwqma" class="">
              <i class="bi bi-people"></i><span>WQMA</span>
            </a>
          </li>
          <li>
            <a href="arcpowerp" class="">
              <i class="bi bi-card-checklist"></i><span>Powerplant</span>
            </a>
          </li>
          <li>
            <a href="arcmining" class="">
              <i class="bi bi-card-checklist"></i><span>Mining Tenement</span>
            </a>
          </li>
          <li>
            <a href="arcslf" class="">
              <i class="bi bi-card-checklist"></i><span>SLF</span>
            </a>
          </li>
          <li>
            <a href="arcairshed" class="">
              <i class="bi bi-card-checklist"></i><span>Airshed</span>
            </a>
          </li>
          <li>
            <a href="arcelnidourgent" data-bs-target="#arc-nav">
              <i class="bi bi-card-checklist"></i><span>El Nido Urgent</span>
            </a>
          </li>

        </ul>
      </li><!-- End Tables Nav -->

      <?php if($_SESSION['urights']==1||$_SESSION['urights']==3.1||$_SESSION['urights']==4||$_SESSION['urights']==5||$_SESSION['urights']==5.1||$_SESSION['urights']==5.2||$_SESSION['urights']==5.3||$_SESSION['urights']==5.4||$_SESSION['urights']==5.5){ ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="isscon">
            <i class="bi bi-chat-right-dots"></i>
            <span>Issues and Concerns</span>
          </a>
        </li><!-- End isscon Page Nav -->
      <?php } ?>

      <?php if($_SESSION['urights']==1||$_SESSION['urights']==4){ ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="que">
          <i class="bi bi-people"></i><span>Queue</span>
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="form">
          <i class="bi bi-person-badge"></i><span>Client Que Form</span>
        </a>
      </li><!-- End Tables Nav -->
      <?php } ?>

      <?php if($_SESSION['urights']==1){ ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="testpage">
          <i class="bi bi-pie-chart"></i><span>Test Page</span>
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="list">
          <i class="bi bi-pie-chart"></i><span>List</span>
        </a>
      </li><!-- End Tables Nav -->
      <?php } ?>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 style="padding-top:8px;">Overall</h5>

              <style>.embed-container {position: relative; padding-bottom: 80%; height: 100%; max-width: 100%;} .embed-container iframe, .embed-container object, .embed-container iframe{position: absolute; top: 0; left: 0; width: 100%; height: 100%;} small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}</style>
              <div class="">
                <iframe width="100%" height="650" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="RD JO Consolidated (WQMA, Powerplant, Mining, SLF, Airshed)" src="//www.arcgis.com/apps/Embed/index.html?webmap=cd531f0b2c124cb8a43d7deb06ada70e&extent=111.6616,6.321,127.8884,15.2791&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light"></iframe>
              </div>

            </div>
          </div>
          <!-- card -->

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  </body>
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer" style="">
    <div class="copyright">
      &copy; Copyright <strong><span>4BHive EMB MIMAROPA</span></strong>. All Rights Reserved 2022
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by TheMan&trade;
      <?php $version = phpversion(); print 'PHP: '.$version; echo ' | CI: '.CI_VERSION; ?>

      <!-- <a href="https://bootstrapmade.com/">About the author</a> -->
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/chart.js/chart.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/quill/quill.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

  </body>

  </html>
