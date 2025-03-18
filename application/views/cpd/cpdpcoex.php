<!-- error display -->
<?php error_reporting(0); ini_set('display_errors', 0); ?>
<!-- error display -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link collapsed" href="index">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <?php if($_SESSION['urights']==7){ ?>
      <li class="nav-item">
        <a class="nav-link " href="cpdex">
          <i class="bi bi-speedometer2"></i><span>PCO Express</span>
        </a>
      </li><!-- End Tables Nav -->
    <?php } ?>

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

    <li class="nav-item">
      <a class="nav-link collapsed" href="arcgis">
        <i class="bi bi-globe"></i><span>ArcGIS</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
    </li><!-- End Tables Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="arcgis">
        <i class="bi bi-app-indicator"></i><span>Ozone Depleting Substances</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
    </li><!-- End Tables Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="arcgis">
        <i class="bi bi-patch-exclamation"></i><span>GHG Inventory</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
    </li><!-- End Tables Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="arcgis">
        <i class="bi bi-wind"></i><span>Air Quality</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
    </li><!-- End Tables Nav -->

    <?php if($_SESSION['urights']==1||$_SESSION['urights']==3.1||$_SESSION['urights']==4||$_SESSION['urights']==5||$_SESSION['urights']==5.1||$_SESSION['urights']==5.2||$_SESSION['urights']==5.3||$_SESSION['urights']==5.4||$_SESSION['urights']==5.5){ ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="isscon">
          <i class="bi bi-chat-right-dots"></i>
          <span>Issues and Concerns</span>
        </a>
      </li><!-- End isscon Page Nav -->
    <?php } ?>

    <?php if($_SESSION['urights']==3){ ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="req2op">
          <i class="bi bi-fingerprint"></i>
          <span style="padding-right:10px;">Access Request</span>
          <?php
            foreach($result8 as $row8){ if($row8->foi>0){ ?> <div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;"> <span class="visually-hidden"></span> </div>
              <?php }else{ } } ?>
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
            <div style="font-size:30px;font-weight:bold;padding-top:10px;text-align:center;">PCO Express</div>

              <div class="" style="padding-top:20px;">
                <form method="get" action="<?php echo base_url('searchFirm'); ?>">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-8" style="padding-bottom:10px;">
                        <div class="form-floating">
                          <input type="text" class="form-control" id="floatingName" name="firm" placeholder="Firm Name">
                          <label for="floatingName">Firm Name</label>
                        </div>
                      </div>
                      <div class="col-md-4" style="">
                        <input type="submit" class="btn btn-success" name="" value="Search..." style="width:100%;height:85%;">
                      </div>
                    </div>
                  </div>
                </form>
              </div>

              <script type="text/javascript">
                document.addEventListener("keydown", function(event) { if (event.altKey && event.key === "1") { document.getElementById("floatingName").focus(); } });
              </script>

              <?php $fcnt=0;
                foreach ($results as $result): $fcnt++; ?>
                  <div style="padding-left:20px;padding-top:10px;font-weight:bold;font-size:18px;">
                    <?php echo $fcnt; ?>.  &nbsp;
                    <a href="<?php echo site_url('Auth/firmprof'); ?>/<?php echo $result->fid; ?>" style="color:#444444;">
                      <?php echo $result->firm; ?>
                    </a>
                  </div>
              <?php endforeach; ?>

            </div>
          </div><!-- card body -->
      </div>
    </div>
  </section>

</main><!-- End #main -->
