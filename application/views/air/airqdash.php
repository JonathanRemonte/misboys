
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
      <a class="nav-link collapsed" data-bs-target="#tables-nav" href="ghgdash">
        <i class="bi bi-patch-exclamation"></i><span>Greenhouse Gas</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapse" href="airqdash">
        <i class="bi bi-wind"></i><span>Air Quality</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <?php if($_SESSION['urights']==8.6||$_SESSION['urights']==1){ ?>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="airqcaams" class="">
              <i class="bi bi-people"></i><span>CAAMS</span>
            </a>
          </li>
        </ul>
      <?php } ?>
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

    <li class="nav-heading">Upkeep</li>

  </ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Air Quality Dashboard</h1>
  </div>

  <section class="section dashboard">
    <div class="row">

      <!-- Hilux -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Hilux</h5>

            <!-- Bar Chart -->
            <canvas id="HiluxChart" style="max-height: 400px;"></canvas>
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new Chart(document.querySelector('#HiluxChart'), {
                  type: 'bar',
                  data: {
                    labels: ['February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                      label: 'Bar Chart',
                      data: [59, 80, 81, 56, 55, 40],
                      backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)'
                      ],
                      borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)'
                      ],
                      borderWidth: 1
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
            <!-- End Bar CHart -->

          </div>
        </div>
      </div>
      <!-- Hilux -->

      <!-- Crosswind -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Crosswind</h5>

            <!-- Bar Chart -->
            <canvas id="CWChart" style="max-height: 400px;"></canvas>
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new Chart(document.querySelector('#CWChart'), {
                  type: 'bar',
                  data: {
                    labels: ['February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                      label: 'Bar Chart',
                      data: [59, 80, 81, 56, 55, 40],
                      backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)'
                      ],
                      borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)'
                      ],
                      borderWidth: 1
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
            <!-- End Bar CHart -->

          </div>
        </div>
      </div>
      <!-- Crosswind -->

      <!-- L300 -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">L300</h5>

            <!-- Bar Chart -->
            <canvas id="L3Chart" style="max-height: 400px;"></canvas>
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new Chart(document.querySelector('#L3Chart'), {
                  type: 'bar',
                  data: {
                    labels: ['February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                      label: 'Bar Chart',
                      data: [59, 80, 81, 56, 55, 40],
                      backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)'
                      ],
                      borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)'
                      ],
                      borderWidth: 1
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
            <!-- End Bar CHart -->

          </div>
        </div>
      </div>
      <!-- L300 -->

      <!-- Electricity -->
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Electricity Chart</h5>

            <!-- Doughnut Chart -->
            <canvas id="elecChart" style="max-height: 400px;"></canvas>
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new Chart(document.querySelector('#elecChart'), {
                  type: 'doughnut',
                  data: {
                    labels: [
                      'Red',
                      'Blue',
                      'Yellow'
                    ],
                    datasets: [{
                      label: 'My First Dataset',
                      data: [300, 50, 100],
                      backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)'
                      ],
                      hoverOffset: 4
                    }]
                  }
                });
              });
            </script>
            <!-- End Doughnut CHart -->

          </div>
        </div>
      </div>
      <!-- Electricity -->

      <!-- air travel -->
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Air Travel Chart</h5>

            <!-- Pie Chart -->
            <canvas id="pieChart" style="max-height: 400px;"></canvas>
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new Chart(document.querySelector('#pieChart'), {
                  type: 'pie',
                  data: {
                    labels: [
                      'Red',
                      'Blue',
                      'Yellow'
                    ],
                    datasets: [{
                      label: 'My First Dataset',
                      data: [300, 50, 100],
                      backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)'
                      ],
                      hoverOffset: 4
                    }]
                  }
                });
              });
            </script>
            <!-- End Pie CHart -->

          </div>
        </div>
      </div>
      <!-- air travel -->

    </div>
  </section>

</main><!-- End #main -->
