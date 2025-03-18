<head>
  <!-- Required meta tags -->
  <meta charset="utf8-utf8_general_ci">
  <!-- <meta content="width=device-width, initial-scale=1.0" name="viewport"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie-edge">

  <link href="<?php echo base_url(); ?>assets/css/fontgoogleapi.css" rel="preconnect">

  <!--fa-->
  <script src="<?php echo base_url(); ?>assets/js/5.0.6-fa-all.js"></script>

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

  <title>4BHive</title>
  <link rel="icon" href="<?php echo base_url(); ?>assets/img/4BHiveLogo1.png" type="image/icon type">

</head>

<header id="header" class="header fixed-top d-flex align-items-center" style="background-color:#68BBE3;">
  <!-- overlod universal portal -->
  <a class="open-homeEvents" data-id="overlord" href="" data-bs-toggle="modal" data-bs-target="#overlord" style="color:#68BBE3;" title="#$%^&"><i class="bi bi-record2"></i></a>
  <div class="d-flex align-items-center justify-content-between">
  <a href="<?php echo base_url('index'); ?>" class="logo d-flex align-items-center">
    <img src="<?php echo base_url(); ?>assets/img/4BHiveLogo1.png" height="25" width="25" alt="">
    <span class="d-none d-lg-block">4BHive</span>
  </a>

  <?php if($_SESSION['urights']==1){ ?>
    <a class="nav-link collapsed" href="blackhive" style="color:black;"><i class="fa fa-star"></i></a>
  <?php }else{
      if(empty($_SESSION['urights'])){ redirect('Auth/logout'); }
    } ?>

    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  <!-- End Search Bar -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="<?php echo base_url(); ?>assets/img/4BHiveLogo1.png" width="25" alt="Profile" class="rounded-circle">
          <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo ucwords($_SESSION['fname']); ?></span>
        </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo ucwords($_SESSION['fname']); ?></h6>
              <span><?php
                  if ($_SESSION['urights']==4) { echo 'Regional Director';
                  }else if ($_SESSION['urights']==7) { echo 'Editor'; }else{} ?>
              </span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('accSettings'); ?>/<?php echo ($_SESSION['userid']); ?>">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="Auth/usermanual">
                <i class="bi bi-card-list"></i>
                <span>User Manual</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo site_url('Auth/logout'); ?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
        </a>
      </li>
    </ul>
  </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

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
        </a>
      </li><!-- End isscon Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <!-- card -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">FR ACS Event Data</h5>

                <div id="events-container"></div>

            </div>
          </div>
          <!-- card -->

          <!-- card -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">With captions</h5>

              <!-- Slides with captions -->
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/img/denrlogo.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo base_url(); ?>assets/img/beehive1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item active">
                    <img src="<?php echo base_url(); ?>assets/img/4BHiveLogo1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>

              </div><!-- End Slides with captions -->

            </div>
          </div>
          <!-- card -->

        </div>
      </div>
    </section>

    <!-- JavaScript for fetching and displaying data -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fetching JSON data (simulated endpoint)
            const data = {
                "AcsEvent": {
                    "searchID": "Data202307041",
                    "totalMatches": 153,
                    "responseStatusStrg": "MORE",
                    "numOfMatches": 30,
                    "InfoList": [{
                            "major": 5,
                            "minor": 75,
                            "time": "2024-07-03T05:30:16+08:00",
                            "cardType": 1,
                            "name": "nlrojas",
                            "cardReaderNo": 1,
                            "doorNo": 1,
                            "employeeNoString": "4366",
                            "type": 0,
                            "serialNo": 85793,
                            "userType": "normal",
                            "currentVerifyMode": "cardOrfaceOrPw",
                            "mask": "unknown",
                            "helmet": "no",
                            "thermometryUnit": "celsius",
                            "currTemperature": 36.600000,
                            "isAbnomalTemperature": false,
                            "RegionCoordinates": {
                                "positionX": 383,
                                "positionY": 518
                            },
                            "pictureURL": "http://192.168.1.100:5000/LOCALS/pic/acsLinkCap/202407_00/03_053016_30075_0.jpeg@WEB000002995626",
                            "thermalPicUrl": "http://192.168.1.100:5000/LOCALS/pic/acsLinkCap/202407_00/03_053016_30075_0_hot_tem.jpeg@WEB000002995627",
                            "HealthInfo": {
                                "healthCode": 1
                            },
                            "FaceRect": {
                                "height": 0.390000,
                                "width": 0.219000,
                                "x": 0.392000,
                                "y": 0.317000
                            }
                        },{
                  				"major":	5,
                  				"minor":	75,
                  				"time":	"2024-07-03T06:12:36+08:00",
                  				"cardType":	1,
                  				"name":	"acbandoy",
                  				"cardReaderNo":	1,
                  				"doorNo":	1,
                  				"employeeNoString":	"5054",
                  				"type":	0,
                  				"serialNo":	85802,
                  				"userType":	"normal",
                  				"currentVerifyMode":	"cardOrfaceOrPw",
                  				"mask":	"unknown",
                  				"helmet":	"no",
                  				"thermometryUnit":	"celsius",
                  				"currTemperature":	36.400000,
                  				"isAbnomalTemperature":	false,
                  				"RegionCoordinates":	{
                  					"positionX":	400,
                  					"positionY":	368
                  				},
                  				"pictureURL":	"http://192.168.1.100:5000/LOCALS/pic/acsLinkCap/202407_00/03_061236_30075_0.jpeg@WEB000002995632",
                  				"thermalPicUrl":	"http://192.168.1.100:5000/LOCALS/pic/acsLinkCap/202407_00/03_061236_30075_0_hot_tem.jpeg@WEB000002995633",
                  				"HealthInfo":	{
                  					"healthCode":	1
                  				},
                  				"FaceRect":	{
                  					"height":	0.471000,
                  					"width":	0.260000,
                  					"x":	0.350000,
                  					"y":	0.129000
                  				}
                  			}
                        // Include other InfoList items here as needed...
                    ]
                },
            };

            // Accessing the InfoList array
            const events = data.AcsEvent.InfoList;

            // Displaying each event
            const container = document.getElementById('events-container');
            events.forEach(event => {
                const eventDiv = document.createElement('div');
                eventDiv.classList.add('event');
                eventDiv.innerHTML = `
                    <p><strong>Name:</strong> ${event.name}</p>
                    <p><strong>Time:</strong> ${new Date(event.time).toLocaleString()}</p>
                `;
                container.appendChild(eventDiv);
            });
        });
    </script>

  </main><!-- End #main -->
