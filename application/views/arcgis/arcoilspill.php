

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index">
          <i class="bi bi-hexagon"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <?php if($_SESSION['urights']==7){ ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="cpdex">
            <i class="bi bi-speedometer2"></i><span>CPD Express</span>
          </a>
        </li><!-- End Tables Nav -->
      <?php } ?>

      <li class="nav-item" hidden>
        <a class="nav-link collapsed" href="firmdash">
          <i class="ri-building-2-line"></i><span>Firms VS Permits (Temporary List)</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="firmdash">
          <i class="bi bi-building"></i><span>Firms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="swmdash">
          <i class="bi bi-recycle"></i><span>SWM</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li><!-- End Tables Nav -->

      <?php if($_SESSION['urights']==3.2){ ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="findash">
          <i class="bi bi-cash-coin"></i><span>Finance</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li>
      <?php } ?>

      <!------------------- GSU System --------------------------->

      <?php if($_SESSION['urights']==3.4 || $_SESSION['urights']=='3.4.1' || ($_SESSION['urights'] == 1)){?>
        <li class="nav-item">
        <a class="nav-link collapsed" href="userMR">
        <i class="bi bi-box-seam"></i><span>GSU Transaction</span>
        </a>
      <?php }else{ ?>
        <li class="nav-item">
        <a class="nav-link collapsed" href="userMR">
        <i class="bi bi-box-seam"></i><span>GSU Transaction</span>
        </a>
      <?php } ?>
      <!------------------- GSU System --------------------------->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" href="plan">
          <i class="bi bi-intersect"></i><span>Planning</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="req2op">
          <i class="bi bi-fingerprint"></i>
          <span style="padding-right:10px;">Access Request</span>
        </a>
      </li><!-- End isscon Page Nav -->

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
            <a href="arcoilspill" class="active">
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
          <li hidden>
            <a href="arcelnidourgent" class="">
              <i class="bi bi-card-checklist"></i><span>El Nido Urgent</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item" hidden>
        <a class="nav-link collapsed" href="">
          <i class="bi bi-app-indicator"></i><span>Ozone Depleting Substances</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="ghgdash">
          <i class="bi bi-patch-exclamation"></i><span>Greenhouse Gas</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-item" hidden>
        <a class="nav-link collapsed" href="airqdash">
          <i class="bi bi-wind"></i><span>Air Quality</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li><!-- End Tables Nav -->

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

      <li class="nav-heading">Upkeep</li>

      <?php if($_SESSION['urights']==1||$_SESSION['urights']==4||$_SESSION['urights']==5||$_SESSION['urights']==5.1||$_SESSION['urights']==5.2||$_SESSION['urights']==5.3||$_SESSION['urights']==5.4||$_SESSION['urights']==5.5){ ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="isscon">
            <i class="bi bi-chat-right-dots"></i>
            <span>Issues and Concerns</span>
          </a>
        </li><!-- End isscon Page Nav -->
        <li class="nav-item" hidden>
          <a class="nav-link collapsed" href="ojt-index">
            <i class="bi bi-chat-right-dots"></i>
            <span>Organizational Chart</span>
          </a>
        </li><!-- End isscon Page Nav -->
      <?php } ?>

      <li class="nav-item">
        <a class="nav-link collapsed" href="convention">
          <i class="bi bi-lightbulb"></i>
          <span style="padding-right:10px;">Convention of Ideas</span>
          <?php
            foreach($result8 as $row8){ if($row8->foi>0){ ?> <div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;"> <span class="visually-hidden"></span> </div>
              <?php }else{ } } ?>
        </a>
      </li><!-- End isscon Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body" style="height:680px;">
              <h5 style="padding-top:8px;">Oil Spill</h5>

              <style>.embed-container {position: relative; padding-bottom: 80%; height: 50%; max-width: 100%;} .embed-container iframe, .embed-container object, .embed-container iframe{position: absolute; top: 0; left: 0; width: 100%; height: 50%;} small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}</style>
              <div class="embed-container">
                <iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="" src="//www.arcgis.com/apps/Embed/index.html?webmap=2f67536145674b24b2cc831b3493ae34&extent=121.1601,13.0675,121.8883,13.389&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light"></iframe>
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
