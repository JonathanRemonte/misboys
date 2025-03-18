<!-- /* hover button finyear */ -->
<style media="screen">
.selection { visibility: hidden; position: absolute;
  background-color: #fff; border: 1px solid #ccc; border-radius: 4px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); padding: 10px; }
.hover-btn:hover + .selection,
.selection:hover { visibility: visible; animation: fadeIn 0.5s ease-in-out; }
.selection a { display: block; margin-bottom: 5px; color: #333; font-size: 16px; }
.selection a:hover { text-decoration: none; color: #fff; background-color: #007bff; }
@keyframes fadeIn { 0% { opacity: 0; transform: translateY(-10px); }
  100% { opacity: 1; transform: translateY(0); } }
</style>
<!-- /* hover button finyear */ -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link collapsed" href="index">
        <i class="bi bi-hexagon"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

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
      <a class="nav-link collapsed" data-bs-target="#tables-nav" href="swmdash">
        <i class="bi bi-recycle"></i><span>SWM</span>
      </a>
    </li><!-- End Tables Nav -->

    <li class="nav-item">
      <a class="nav-link collapse" data-bs-target="#tables-nav" href="findash">
        <i class="bi bi-cash-stack"></i><span>Finance</span>
      </a>
      <?php if($_SESSION['urights']==3.2||$_SESSION['urights']=='3.2.1'||$_SESSION['urights']=='1'){ ?>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="casmon" class="">
              <i class="bi bi-cash"></i><span>Cash Monitoring</span>
            </a>
          </li>
          <!-- <li>
            <a href="fingaa" class="">
              <i class="bi bi-people"></i><span>GAA</span>
            </a>
          </li>
          <li>
            <a href="finbrobps" class="">
              <i class="bi bi-people"></i><span>Breakdown PS</span>
            </a>
          </li>
          <li>
            <a href="finbrobps2" class="">
              <i class="bi bi-people"></i><span>Breakdown PS 2</span>
            </a>
          </li>
          <li>
            <a href="fintry" class="">
              <i class="bi bi-people"></i><span>Fin Try 1</span>
            </a>
          </li> -->
        </ul>
      <?php } ?>
    </li>

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

    <li class="nav-item">
      <a class="nav-link collapsed" href="arcgis">
        <i class="bi bi-app-indicator"></i><span>Ozone Depleting Substances</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
    </li><!-- End Tables Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="ghgdash">
        <i class="bi bi-patch-exclamation"></i><span>Greenhouse Gas</span><i class="bi bi-chevron-down ms-auto"></i>
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
  <div class="pagetitle">
    <h1>Finance Dashboard</h1>
  </div>

  <section class="section dashboard">
    <div class="row">

      <!-- 10yr plan card -->
      <div class="col-lg-3">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">10 Year Plan Status</h5>

            <!-- Doughnut Chart -->
            <canvas id="doughnutChart" style="max-height: 300px; display: block; box-sizing: border-box; height: 300px; width: 300px;" width="300" height="300"></canvas>
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new Chart(document.querySelector('#doughnutChart'), {
                  type: 'doughnut',
                  data: {
                    labels: [ 'No Approved Plans', 'Approved Plans' ],
                    datasets: [{
                      label: '10 Year Plan',
                      data: [51, 49],
                      backgroundColor: [ 'rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(255, 205, 86)' ],
                      hoverOffset: 4
                    }]
                  }
                });
              });
            </script>
            <!-- End Doughnut CHart -->

          </div>
        </div>

      </div><!--col8-->
      <!-- 10yr plan card -->

      <!-- 10yr plan summary -->
      <div class="col-lg-3">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">10 Year Plan Summary</h5>

            <!-- Stacked Bar Chart -->
            <canvas id="stakedBarChart" style="max-height: 400px; display: block; box-sizing: border-box; height: 400px; width: 429px;" width="429" height="400"></canvas>
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new Chart(document.querySelector('#stakedBarChart'), {
                  type: 'bar',
                  data: {
                    labels: ['Occ. Mindoro', 'Or. Mindoro', 'Marinduque', 'Romblon', 'Palawan'],
                    datasets: [{ label: 'Approved Plans', data: [5, 10, 2, 5, 15], backgroundColor: 'rgb(75, 192, 192)', },
                               { label: 'No Approved Plans', data: [-6, -5, -4, -12, -9], backgroundColor: 'rgb(255, 99, 132)', } ] },
                  options: {
                    plugins: {
                      // title: {
                        // display: true,
                        // text: 'MIMAROPA'
                      // },
                    },
                    responsive: true,
                    scales: { x: { stacked: true, }, y: { stacked: true } }
                  }
                });
              });
            </script>
            <!-- End Stacked Bar Chart -->

          </div>
        </div>

      </div><!-- End Left side columns -->
      <!-- 10yr plan summary -->

      <!-- Total Waste Collected -->
      <div class="col-lg-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Total Waste Collected</h5>

            <!-- Line Chart -->
            <canvas id="lineChart" style="max-height: 400px; display: block; box-sizing: border-box; height: 400px; width: 429px;" width="429" height="400">></canvas>
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new Chart(document.querySelector('#lineChart'), {
                  type: 'line',
                  data: {
                    labels: ['Occ. Mindoro', 'Or. Mindoro', 'Marinduque', 'Romblon', 'Palawan'],
                    datasets: [{
                      label: 'in Tons',
                      data: [8181.92, 24865.19, 19456.61, 16892.97, 58434.78],
                      fill: false,
                      borderColor: 'rgb(75, 192, 192)',
                      tension: 0.1
                    }]
                  },
                  options: {
                    scales: {
                      y: {
                        beginAtZero: true
                      }
                    }
                  }
                });
              });
            </script>
            <!-- End Line CHart -->

          </div>
        </div>
      </div>
      <!-- Total Waste Collected -->

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

      <!-- Fin Year -->
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">DETAILED BREAKDOWN OF EXPENDITURES /P/P/A FY2023 NEP (in P'000)</h5>
            <!-- gaa tab -->
            <div class="col-md-12">
              <?php foreach ($resgayr as $rogayr) { ?>
                <a type="button" href="<?php echo site_url('Auth/fingaa') ?>/<?php echo $rogayr->gaayr; ?>" class="hover-btn btn btn-outline-success rounded-pill"><?php echo $rogayr->gaayr; ?></a>
              <?php } $current_year = date('Y'); ?>
                <a type="button" href="<?php echo site_url('Auth/fingaa') ?>/<?php echo $current_year; ?>" class="hover-btn btn btn-outline-success rounded-pill">New</a>
            </div>
            <!-- gaa tab -->
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">BREAKDOWN OF OBLIGATION (PS)</h5>

            <!-- brobps tab -->
            <div class="col-md-12">
              <?php foreach ($resbrob as $robrob) { ?>
                <a type="button" href="<?php echo site_url('Auth/finbrobps') ?>/<?php echo $robrob->gaayr; ?>" class="hover-btn btn btn-outline-success rounded-pill"><?php echo $robrob->gaayr; ?></a>
              <?php } $current_year = date('Y'); ?>
                <a type="button" href="<?php echo site_url('Auth/fingaa') ?>/<?php echo $current_year; ?>" class="hover-btn btn btn-outline-success rounded-pill">New</a>
            </div>
            <!-- brobps tab -->

          </div>
        </div>

      </div><!--col8-->
      <!-- Fin Year -->

      <!-- fingasatab datab indi -->
      <script type="text/javascript">
        $(document).ready(function () {
          // DataTable
          var table = $('#fingasatab').DataTable({ initComplete: function () {
                  // Apply the search
                  this.api() .columns() .every(function () { var that = this;

                          $('input', this.footer()).on('keyup change clear', function () { if (that.search() !== this.value) { that.search(this.value).draw(); } }); }); }, }); });
      </script>
      <!-- bio datab indi -->

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

      <!-- Waste Collection -->

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

    </div>
  </section>

</main><!-- End #main -->
