<style media="screen">
  #cqmdiv12{
    padding-bottom:10px;
  }
</style>

<body id="mydiv">

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index">
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

      <li class="nav-item">
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

      <?php if($_SESSION['urights']==3||$_SESSION['urights']==1){ ?>
        <li class="nav-item">
          <?php if($_SESSION['urights']==3){ ?><a class="nav-link collapsed" href="req2op">
          <?php }else{ ?><a class="nav-link collapsed" title="For Records Use Only"><?php } ?>
            <i class="bi bi-fingerprint"></i>
            <span style="padding-right:10px;">Access Request</span>
            <?php
              foreach($result8 as $row8){ if($row8->foi>0){ ?> <div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;"> <span class="visually-hidden"></span> </div>
                <?php }else{ } } ?>
          </a>
        </li><!-- End isscon Page Nav -->
      <?php } ?>

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

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <section class="section dashboard">
      <div class="row">

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
          <div class="col-lg-8">
            <div class="row">

              <!-- require stackedchart.php -->
              <?php $this->load->view('indexStckdGraph.php'); ?>

            </div><!-- row -->

          <div class="row">
            <div class="col-lg-6">

              <!-- Website Traffic -->
              <div class="card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Website Traffic <span>| Today</span></h5>

                  <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      echarts.init(document.querySelector("#trafficChart")).setOption({
                        tooltip: {
                          trigger: 'item'
                        },
                        legend: {
                          top: '5%',
                          left: 'center'
                        },
                        series: [{
                          name: 'Access From',
                          type: 'pie',
                          radius: ['40%', '70%'],
                          avoidLabelOverlap: false,
                          label: {
                            show: false,
                            position: 'center'
                          },
                          emphasis: {
                            label: {
                              show: true,
                              fontSize: '18',
                              fontWeight: 'bold'
                            }
                          },
                          labelLine: {
                            show: false
                          },
                          data: [{
                              value: 1048,
                              name: 'Search Engine'
                            },
                            {
                              value: 735,
                              name: 'Direct'
                            },
                            {
                              value: 580,
                              name: 'Email'
                            },
                            {
                              value: 484,
                              name: 'Union Ads'
                            },
                            {
                              value: 300,
                              name: 'Video Ads'
                            }
                          ]
                        }]
                      });
                    });
                  </script>

                </div>
              </div><!-- End Website Traffic -->

            </div><!--col8-->
            <div class="col-lg-6">

              <!-- Budget Report -->
              <div class="card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Budget Report <span>| This Month</span></h5>

                  <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                        legend: {
                          data: ['Allocated Budget', 'Actual Spending']
                        },
                        radar: {
                          // shape: 'circle',
                          indicator: [{
                              name: 'Sales',
                              max: 6500
                            },
                            {
                              name: 'Administration',
                              max: 16000
                            },
                            {
                              name: 'Information Technology',
                              max: 30000
                            },
                            {
                              name: 'Customer Support',
                              max: 38000
                            },
                            {
                              name: 'Development',
                              max: 52000
                            },
                            {
                              name: 'Marketing',
                              max: 25000
                            }
                          ]
                        },
                        series: [{
                          name: 'Budget vs spending',
                          type: 'radar',
                          data: [{
                              value: [4200, 3000, 20000, 35000, 50000, 18000],
                              name: 'Allocated Budget'
                            },
                            {
                              value: [5000, 14000, 28000, 26000, 42000, 21000],
                              name: 'Actual Spending'
                            }
                          ]
                        }]
                      });
                    });
                  </script>

                </div>

              </div><!-- End Budget Report -->

            </div><!-- col4 -->
          </div><!-- row -->

        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- require cqm.php -->
          <?php $this->load->view('indexCQueM.php'); ?>

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
          <?php $this->load->view('progress.php'); ?>

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->
