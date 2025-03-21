
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="index">
        <i class="bi bi-hexagon"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <?php if($_SESSION['urights']==1){ ?>
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
      <a class="nav-link collapsed" href="plan">
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
      <a class="nav-link collapsed" href="arcgis">
        <i class="bi bi-globe"></i><span>ArcGIS</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
    </li><!-- End Tables Nav -->

    <li class="nav-item" hidden>
      <a class="nav-link collapsed" href="arcgis">
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

    <!-- FAD -->
    <?php if($_SESSION['urights']==1||$_SESSION['urights']==4){ ?>
    <li class="nav-heading">FAD</li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="findash">
        <i class="bi bi-cash-stack"></i><span>Finance</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <a class="nav-link collapsed" href="admindash">
        <i class="bi bi-cash-stack"></i><span>Administrative</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
    </li><!-- End Tables Nav -->
    <?php } ?>
    <!-- FAD -->

    <li class="nav-heading">Map Link</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="https://www.marinetraffic.com/en/ais/home/shipid:6990054/zoom:15" target="_blank">
        <i class="bi bi-water"></i><span>Marine Traffic</span>
      </a>
    </li><!-- End Tables Nav -->

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

  <section class="section dashboard">
    <div class="row">

          <div class="container" style="font-size: 20px; ">
          <?php if ($this->session->tempdata('user_logged')): ?>
            <div class="alert alert-primary alert-dismissible fade show d-flex justify-content-between align-items-center" role="alert" style="font-size: 20px; color: #000000;">
              <span style ="font-family: Arial, sans-serif; font-weight:bold;"><?= $this->session->tempdata('user_logged'); ?></span>
              <span aria-hidden="true" class="close-btn" data-dismiss="alert" aria-label="Close">
                &times;</span>
              <!-- </button> -->
            </div>
          <?php endif; ?>
        </div>

      <!-- mar Card -->
      <div class="col-xxl-2 col-md-3">
        <div class="card info-card revenue-card">
          <div class="card-body" style="text-align:center;">
            <h5 class="card-title">Marinduque</h5>
            <div>
              <h6><?php foreach($result3 as $row3){ echo $row3->marfirm; } ?></h6>
              <span class="text-muted small pt-2 ps-1">firms</span>
            </div>
          </div>
        </div>
      </div><!-- End Revenue Card -->

      <!-- ocmin Card -->
      <div class="col-xxl-2 col-md-3">
        <div class="card info-card revenue-card">
          <div class="card-body" style="text-align:center;">
            <h5 class="card-title">Occ. Mindoro</h5>
            <div>
              <h6><?php foreach($result4 as $row4){ echo $row4->occfirm; } ?></h6>
              <span class="text-muted small pt-2 ps-1">firms</span>
            </div>
          </div>
        </div>
      </div><!-- End Revenue Card -->

      <!-- ormin Card -->
      <div class="col-xxl-2 col-md-3">
        <div class="card info-card revenue-card">
          <div class="card-body" style="text-align:center;">
            <h5 class="card-title">Or. Mindoro</h5>
            <div>
              <h6><?php foreach($result5 as $row5){ echo $row5->orfirm; } ?></h6>
              <span class="text-muted small pt-2 ps-1">firms</span>
            </div>
          </div>
        </div>
      </div><!-- End Revenue Card -->

      <!-- rom Card -->
      <div class="col-xxl-2 col-xl-3">
        <div class="card info-card customers-card">
          <div class="card-body" style="text-align:center;">
            <h5 class="card-title">Romblon</h5>
            <div>
              <h6><?php foreach($result6 as $row6){ echo $row6->romfirm; } ?></h6>
              <span class="text-muted small pt-2 ps-1">firms</span>
            </div>
          </div>
        </div>

      </div><!-- End Customers Card -->

      <!-- pal Card -->
      <div class="col-xxl-2 col-xl-3">
        <div class="card info-card customers-card">
          <div class="card-body" style="text-align:center;">
            <h5 class="card-title">Palawan</h5>
            <div>
              <h6><?php foreach($result7 as $row7){ echo $row7->palfirm; } ?></h6>
              <span class="text-muted small pt-2 ps-1">firms</span>
            </div>
            </div>
          </div>
        </div>

        <!-- staff Card -->
        <div class="col-xxl-2 col-xl-3">
          <div class="card info-card customers-card">
            <div class="card-body" style="text-align:center;">
              <h5 class="card-title">Staff</h5>

              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <h6>71</h6>
                    <span class="text-muted small pt-2 ps-1">Permanent</span>
                  </div>
                  <div class="col-md-6">
                    <h6>67</h6>
                    <span class="text-muted small pt-2 ps-1">JO</span>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- </div> -->
        <!-- End Customers Card -->

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- require stackedchart.php -->
            <?php $this->load->view('dashboard/indexStckdGraph.php'); ?>

          </div><!-- row -->

        <div class="row">

          <div class="col-lg-8">
              <!-- Website Traffic -->
              <div class="card">
                  <div class="card-body pb-0">
                      <h5 class="card-title">Marine Traffic: Global Ship Tracking Intelligence | AIS Marine Traffic</h5>
                      <div id="trafficChart" style="min-height: 400px;" class="echart">
                          <p>View the marine traffic on the <a href="https://www.marinetraffic.com/en/ais/home/shipid:6990054/zoom:15" target="_blank">Marine Traffic Website</a>.</p>
                      </div>
                  </div>
              </div>
              <!-- End Website Traffic -->
          </div>

          <div class="col-lg-8">
              <!-- Website Traffic -->
              <div class="card">
                  <div class="card-body pb-0">
                      <h5 class="card-title">User Manual</h5>
                      <div id="trafficChart" style="min-height: 400px;" class="echart">
                          <iframe src="https://scribehow.com/embed/Access_the_registered_email_for_your_account_and_the_randomized_password__UtczT8_vQLq4GYdtRh7t5g" width="100%" height="640" allowfullscreen frameborder="0"></iframe>
                      </div>
                  </div>
              </div>
              <!-- End Website Traffic -->
          </div>



          <!-- </div> -->
        <!-- </div>

      </div> -->
      <!-- End Left side columns -->

      <!-- Right side columns -->
      <div class="col-lg-4">

        <?php $this->load->view('dashboard/indexCQueM.php'); ?>




        <!-- Recent Activity -->
        <div class="card">

          <div class="card-body">
            <h5 class="card-title">LILO</h5>

            <div class="activity">

              <?php
                $overall=0; $act=0;
                foreach($result2 as $row2) { $act+=1; ?>
                  <div class="activity-item d-flex">
                    <?php
                      if($row2->acttyp=='registered'){
                        ?>
                        <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                        <div class="activity-content">
                          <span class="fw-bold text-dark"><?php if($row2->uname!=$_SESSION['uname']){ echo $row2->uname; }else{ echo 'You'; } ?></span> successfully <span class="fw-bold text-dark"><?php echo $row2->acttyp; ?></span> on <span class="fw-bold text-dark"><?php echo date('YMd',$time = strtotime($row2->actdat)); ?></span> at
                            <span class="fw-bold text-dark"><?php echo substr($row2->actdat, -20, -11); ?>
                          </span>
                        </div>
                      <?php
                      }else if($row2->acttyp=='logged in'){
                        ?>
                        <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                        <div class="activity-content">
                          <span class="fw-bold text-dark"><?php if($row2->uname!=$_SESSION['uname']){ echo $row2->uname; }else{ echo 'You'; } ?></span> successfully <span class="fw-bold text-dark"><?php echo $row2->acttyp; ?></span> on <span class="fw-bold text-dark"><?php echo substr($row2->actdat,0,9); ?></span> at <span class="fw-bold text-dark"><?php echo substr($row2->actdat, -8); ?>
                          </span>
                        </div>
                        <?php
                      }else if($row2->acttyp=='logged out'){
                        ?>
                        <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                        <div class="activity-content">
                          <span class="fw-bold text-dark"><?php if($row2->uname!=$_SESSION['uname']){ echo $row2->uname; }else{ echo 'You'; } ?></span> successfully <span class="fw-bold text-dark"><?php echo $row2->acttyp; ?></span> on <span class="fw-bold text-dark"><?php echo substr($row2->actdat,0,9); ?></span> at <span class="fw-bold text-dark"><?php echo substr($row2->actdat, -8); ?>
                          </span>
                        </div>
                        <?php
                      }else if($row2->acttyp=='added'){
                        ?>
                        <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                        <div class="activity-content">
                          <span class="fw-bold text-dark"><?php if($row2->uname!=$_SESSION['uname']){ echo $row2->uname; }else{ echo 'You'; } ?></span> successfully <span class="fw-bold text-dark"><?php echo $row2->acttyp.' '.$row2->varbl; ?></span> on <span class="fw-bold text-dark"><?php echo date('YMd'); ?></span> at
                            <span class="fw-bold text-dark"><?php echo substr($row2->actdat, -8); ?>
                          </span>
                        </div>
                        <?php
                      }else if($row2->acttyp=='removed'){
                        ?>
                        <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                        <div class="activity-content">
                          <span class="fw-bold text-dark"><?php if($row2->uname!=$_SESSION['uname']){ echo $row2->uname; }else{ echo 'You'; } ?></span> successfully <span class="fw-bold text-dark"><?php echo $row2->acttyp.' '.$row2->firm; ?></span> on <span class="fw-bold text-dark"><?php echo date('YMd',$time = strtotime($row2->actdat)); ?></span> at
                            <span class="fw-bold text-dark"><?php echo substr($row2->actdat, -8); ?>
                          </span>
                        </div>
                        <?php
                      } ?>
                    </div><!-- End activity item-->
              <?php }//foreach ?>

            </div>

          </div>
        </div><!-- End Recent Activity -->

        <!-- require progress.php -->
        <?php $this->load->view('dashboard/progress.php'); ?>

      </div><!-- End Right side columns -->

    </div>
  </section>

</main><!-- End #main -->
