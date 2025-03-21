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