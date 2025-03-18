<!-- chat js -->
<script src="<?php echo base_url(); ?>assets/chat/jquery-3.6.0.min.js"></script>

<style media="screen">
  #cqmdiv12{
    padding-bottom:10px;
  }
</style>

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
      <a class="nav-link collapse" href="firmdash">
        <i class="bi bi-building"></i><span>Firms</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
        <li>
          <a href="firmview" class="">
            <i class="bi bi-file-post-fill"></i><span>Table of Firms</span>
          </a>
        </li>
        <li>
          <a href="firmvpermit" class="">
            <i class="bi bi-file-post-fill"></i><span>Firms vs Permits</span>
          </a>
        </li>
      </ul>
    </li><!-- End Tables Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" href="swmdash">
        <i class="bi bi-recycle"></i><span>SWM</span>
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
  <div class="pagetitle">
    <div class="d-flex justify-content-between">
      <h1>Firms Dashboard</h1>
      <div class="switch">
        <input type="radio" class="switch-input radioshow" name="radiog_lite" value="year" id="week" data-class="div1">
        <label for="week" class="switch-label switch-label-off">YEAR</label>
        <input type="radio" class="switch-input radioshow" name="radiog_lite" value="month" id="month" data-class="div2">
        <label for="month" class="switch-label switch-label-on">DATE</label>
        <span class="switch-selection"></span>
      </div>
    </div>
  </div>


<script src="assets/jsChart/swm.js"></script>

  <section class="section dashboard">
    <div class="row">

      <!-- 10yr plan status -->
      <div class="col-lg-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">10 Year Plan Status</h5>
            <!-- Doughnut Chart -->
            <link rel="stylesheet" type="text/css" href="assets/css/swm.css" />
            <div>
              <div class="div2 allshow" style="display: none;">
                <div class="mx-2 my-2">
                  <form>
                    <div class="form-row">
                      <div class="form-group">
                        <label for="start_date">Start Date</label>
                        <input type="date" name="start_date" id="start_date" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input type="date" name="end_date" id="end_date" class="form-control">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="div1 allshow" style="display: none;">
                <select name="year" id="year" class="form-control">
                  <option value="">Select Year</option>
                    <?php foreach($year10list as $row){ if($row->year!= 0){ echo '<option value="'.$row->year.'">'.$row->year.'</option>'; } } ?>
                </select>
              </div>
              <canvas id="myChart" style="max-height: 300px; display: block; box-sizing: border-box; height: 300px; width: 300px;" width="300" height="300"></canvas>
            </div>
            <!-- end of Doughnut -->
          </div>
        </div>
      </div>
      <!-- 10yr plan status -->

      <!-- 10yr plan summary -->
      <div class="col-lg-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">10 Year Plan Summary</h5>

            <div class="position-relative">
              <div class="div2 allshow" style = "display:none;">
                <form>
                  <div class="form-row">
                    <div class="form-group">
                      <label for="startDate">Start Date</label>
                      <input type="date" name="startDate" id="startDate" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="endDate">End Date</label>
                      <input type="date" name="endDate" id="endDate" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
              <div class="div1 allshow" style="display: none;">
                <select name="year1" id="year1" class="form-control">
                  <option value="">Select Year</option>
                    <?php foreach($year10list as $row){ if($row->year != 0){ echo '<option value="'.$row->year.'">'.$row->year.'</option>'; } } ?>
                </select>
              </div>
              <canvas id="chartSummary" style="max-height: 300px; display: block; box-sizing: border-box; height: 300px; width: 300px;" width="300" height="300"></canvas>
            </div>
          </div>
        </div>
      </div>
      <!-- 10yr plan summary -->

      <!-- Total LGU Registered -->
      <div class="col-lg-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Total LGU registered</h5>
            <div class="position-relative">
              <div class="div2 allshow" style="display:none;">
                <form>
                  <div class="form-row">
                    <div class="form-group">
                      <label for="firstDate">Start Date</label>
                      <input type="date" name="firstDate" id="firstDate" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="lastDate">End Date</label>
                      <input type="date" name="lastDate" id="lastDate" class="form-control">
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="div1 allshow" style="display: none;">
              <select name="year2" id="year2" class="form-control">
                <option value="">Select Year</option>
                  <?php foreach($year10list as $row){ if($row->year != 0){ echo '<option value="'.$row->year.'">'.$row->year.'</option>'; } } ?>
              </select>
            </div>
            <canvas id="chartTotal" style="max-height: 300px; display: block; box-sizing: border-box; height: 300px; width: 300px;" width="300" height="300"></canvas>
          </div>
        </div>
      </div>
      <!-- Total LGU Registered -->

      <!-- final disposal facilities -->
      <div class="col-lg-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Final Disposal Facilities in Percentage</h5>

            <!-- Pie Chart -->
            <canvas id="pieChart" style="max-height: 300px; display: block; box-sizing: border-box; height: 300px; width: 300px;" width="300" height="300"></canvas>
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new Chart(document.querySelector('#pieChart'), {
                  type: 'pie',
                  data: {
                    // legend: { top: '-2%', left: 'center' },
                    labels: [ 'Dumpsite', 'No Collection', 'RCA', 'SLF' ],
                    datasets: [{
                      label: 'Disposal Facilities in Percentage',
                      data: [45, 4, 34, 17],
                      backgroundColor: [  'rgb(255, 205, 86)', 'rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(75, 192, 192)' ],
                      hoverOffset: 4
                    }]
                  }
                });
              });
            </script>
            <!-- End Pie CHart -->

          </div>
        </div>

      </div><!--col8-->
      <!-- final disposal facilities -->

      <!-- Summary Per Province -->
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Summary Per Province</h5>

            <!-- Bar Chart -->
            <canvas id="barChartSPP" style="max-height: 300px; display: block; box-sizing: border-box; height: 300px; width: 300px;" width="300" height="300"></canvas>
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new Chart(document.querySelector('#barChartSPP'), {
                  type: 'bar',
                  data: {
                    labels: ['Occ. Mindoro', 'Or. Mindoro', 'Marinduque', 'Romblon', 'Palawan'],
                    datasets: [{
                      label: 'SLF',
                      data: [3, 1, 1, 6, 1],
                      backgroundColor: [
                        'rgba(255, 99, 132, 0.2)'],
                      borderColor: [
                        'rgb(255, 99, 132)' ], borderWidth: 1
                    },
                    {
                      label: 'RCA',
                      data: [5, 7, 5, 5, 3],
                      backgroundColor: [
                        'rgba(255, 159, 64, 0.2)' ],
                      borderColor: [
                        'rgb(255, 159, 64)' ], borderWidth: 1
                    },
                    {
                      label: 'Dumpsite',
                      data: [0, 5, 3, 13, 12],
                      backgroundColor: [
                        'rgba(75, 192, 192, 0.2)' ],
                      borderColor: [
                        'rgb(75, 192, 192)' ], borderWidth: 1
                    },
                    {
                      label: 'No Collection',
                      data: [0, 0, 2, 0, 1],
                      backgroundColor: [
                        'rgba(54, 162, 235, 0.2)' ],
                      borderColor: [
                        'rgb(54, 162, 235)' ], borderWidth: 1
                    }]
                  }, options: { scales: { y: { beginAtZero: true } } }
                });
              });
            </script>
            <!-- End Bar CHart -->

          </div>
        </div>

      </div><!--col8-->
      <!-- Summary Per Province -->

      <!-- Summary Per Province -->
      <div class="col-lg-3">

        <!-- bubble -->
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Waste Collection</h5>

              <!-- Bubble Chart -->
              <canvas id="bubbleChart" style="max-height: 300px; display: block; box-sizing: border-box; height: 300px; width: 300px;" width="300" height="300"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#bubbleChart'), {
                    type: 'bubble',
                    data: {
                      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                      datasets: [{
                          label: 'Dataset 1',
                          data: [{ x: 20, y: 30, r: 15 },
                                 { x: 40, y: 10, r: 10 },
                                 { x: 15, y: 37, r: 12 },
                                 { x: 32, y: 42, r: 33 } ],
                          borderColor: 'rgb(255, 99, 132)', backgroundColor: 'rgba(255, 99, 132, 0.5)' },
                        {
                          label: 'Dataset 2',
                          data: [{ x: 40, y: 25, r: 22 },
                                 { x: 24, y: 47, r: 11 },
                                 { x: 65, y: 11, r: 14 },
                                 { x: 11, y: 55, r: 8 }
                          ],
                          borderColor: 'rgb(75, 192, 192)', backgroundColor: 'rgba(75, 192, 192, 0.5)' }
                      ]
                    },
                    options: {
                      responsive: true,
                      plugins: {
                        legend: { position: 'top', },
                        // title: { display: true, text: 'Chart.js Bubble Chart' }
                      }
                    }
                  });
                });
              </script>
              <!-- End Bubble Chart -->

            </div>
          </div>
        <!-- bubble -->

      </div><!--col8-->
      <!-- Summary Per Province -->

      <!-- spider -->
      <div class="col-lg-3">

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

      </div>
      <!-- Budget Report -->

    </div><!-- row -->
  </section>

</main><!-- End #main -->
