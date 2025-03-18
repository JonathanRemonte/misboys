
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/1.12.1-jquery.dataTables.min.css"> -->

  <style media="screen">
    /* <!-- datab indi --> */
    tfoot input { width: 100%; padding: 3px; box-sizing: border-box; }
    /* showadlgu */
    #tow{ display: none; }
    /* div of modal lgu */
    #modlgudiv{ padding-bottom:20px; }
    /* hide modal id for increment */
    .modid{ visibility: hidden; margin-top:-45px; }

    #swmcrud{
      color:black;
    }
  </style>

  <body>

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
            <i class="ri-building-2-line"></i><span>Firms VS Permits (Temporary List)</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="firmdash">
            <i class="bi bi-building"></i><span>Firms</span>
          </a>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#tables-nav" href="swmdash">
            <i class="bi bi-recycle"></i><span>SWM</span><!--i class="bi bi-chevron-down ms-auto"></i-->
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
          <a class="nav-link collapsed" data-bs-target="#tables-nav" href="ghgdash">
            <i class="bi bi-patch-exclamation"></i><span>Greenhouse Gas</span>
          </a>
          <?php if($_SESSION['urights']==7.3||$_SESSION['urights']==1){ ?>
            <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
              <li>
                <a href="ghgent" class="active">
                  <i class="bi bi-people"></i><span>GHG Entity Level</span>
                </a>
              </li>
              <li>
                <a href="ghgippu" class="">
                  <i class="bi bi-people"></i><span>GHG IPPU</span>
                </a>
              </li>
            </ul>
          <?php } ?>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="arcgis">
            <i class="bi bi-wind"></i><span>Air Quality</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <?php if($_SESSION['urights']==8.6||$_SESSION['urights']==1){ ?>
            <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
              <li>
                <a href="airqcaams" class="active">
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

        <li class="nav-heading">Upkeep</li>

      </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
      <div class="pagetitle" style="">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4">
              <h1>CAAMS</h1>
            </div>
            <div class="col-md-4" style="margin-top:-8px;padding-bottom:8px;">
              <!-- <h6><button type="button" id="hour">Hourly</button></h6> -->
              <button type="" class="btn btn-primary" id="hour">Hourly</button>
            </div>
            <div class="col-md-4" style="margin-top:-8px;">
              <!-- <h6><button type="button" id="avrg">Average</button></h6> -->
              <button type="" class="btn btn-primary" id="avrg">Average</button>
            </div>
          </div>
        </div>
      </div>

      <!-- hourly input -->
      <style media="screen"> #averg{ display: none; } </style>

        <div id="averg" style="">
          <!-- add average caams -->
          <form class="" action="<?php echo site_url('Auth/adaverg') ?>" method="post">

            <div class="col-md-12" style="padding-bottom:18px;">

              <div class="row" style="padding-top:8px;">
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="">Date</label>
                    <input class="form-control" type="text" name="author" value="<?php echo $_SESSION['userid']; ?>" required hidden>
                    <input class="form-control" type="date" name="camdat" required>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="">PM</label>
                    <select class="form-select" name="parmat" required>
                      <option value="pm10">PM 10</option>
                      <option value="pm25">PM 2.5</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <label for="">AM Total</label>
                  <input class="form-control" type="text" name="amtot" id="amtot" title="AM Total" tabindex="-1" placeholder="AM Total" style="font-size:20px;" required readonly>
                </div>
                <div class="col-md-2">
                  <label for="">PM Total</label>
                  <input class="form-control" type="text" name="pmtot" id="pmtot" title="PM Total" tabindex="-1" placeholder="PM Total" style="font-size:20px;" required readonly>
                </div>
                <div class="col-md-1">
                  <label for="">Total</label>
                  <input class="form-control" type="text" name="tot" id="tot" title="Total" tabindex="-1" placeholder="Total" style="font-size:20px;" required readonly>
                </div>
                <div class="col-md-1">
                  <label for="">Divisor</label>
                  <input class="form-control" type="text" name="dvsr" id="dvsr" value="24" title="Divisor" tabindex="-1" placeholder="24" style="font-size:20px;" required>
                </div>
                <div class="col-md-2">
                  <label for="">Average of the day</label>
                  <input class="form-control" type="text" name="allave" id="allave" title="Overall Average" tabindex="-1" placeholder="All Ave." style="font-size:20px;" required readonly>
                </div>
              </div>
            </div>

            <div class="col-md-12" style="">
              <div class="row" style="padding-top:8px;">

                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm11av" id="pm11av" title="11pm" placeholder="11p Ave." tabindex="-1" required>
                  </div>
                </div>

                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm10av" id="pm10av" title="10pm" placeholder="10p Ave." tabindex="-1" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm9av" id="pm9av" title="9pm" placeholder="9p Ave." tabindex="-1" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm8av" id="pm8av" title="8pm" placeholder="8p Ave." tabindex="-1" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm7av" id="pm7av" title="7pm" placeholder="7p Ave." tabindex="-1" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm6av" id="pm6av" title="6pm" placeholder="6p Ave." tabindex="-1" required>
                  </div>
                </div>

                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm5av" id="pm5av" title="5pm" placeholder="5p Ave." tabindex="-1" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm4av" id="pm4av" title="4pm" placeholder="4p Ave." tabindex="-1" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm3av" id="pm3av" title="3pm" placeholder="3p Ave." tabindex="-1" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm2av" id="pm2av" title="2pm" placeholder="2p Ave." tabindex="-1" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm1av" id="pm1av" title="1pm" placeholder="1p Ave." tabindex="-1" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm12av" id="pm12av" title="12pm" placeholder="12p Ave." tabindex="-1" required>
                  </div>
                </div>

              </div><!--row-->
            </div>

            <div class="col-md-12" style="">
              <div class="row" style="padding-top:8px;padding-bottom:18px;">

                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am11av" id="am11av" title="11am" placeholder="11a Ave." tabindex="-1" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am10av" id="am10av" title="10am" placeholder="10a Ave." tabindex="-1" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am9av" id="am9av" title="9am" placeholder="9a Ave." tabindex="-1" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am8av" id="am8av" title="8am" placeholder="8a Ave." tabindex="-1" required>
                  </div>
                </div>

                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am7av" id="am7av" title="7am" placeholder="7a Ave." tabindex="-1" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am6av" id="am6av" title="6am" placeholder="6a Ave." tabindex="-1" required>
                  </div>
                </div>

                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am5av" id="am5av" title="5am" placeholder="5a Ave." tabindex="-1" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am4av" id="am4av" title="4am" placeholder="4a Ave." tabindex="-1" required>
                  </div>
                </div>

                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am3av" id="am3av" title="3am" placeholder="3a Ave." tabindex="-1" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am2av" id="am2av" title="2am" placeholder="2a Ave." tabindex="-1" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am1av" id="am1av" title="1am" placeholder="1a Ave." tabindex="-1" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am12av" id="am12av" title="12am" placeholder="12a Ave." tabindex="-1" required>
                  </div>
                </div>

              </div>
            </div>

            <script>function perhour(){
                // amdose
                var am12 = parseInt(document.getElementById('am12').value); var am123 = parseInt(document.getElementById('am123').value);
                if(am12<=0 && am123<=0){ document.getElementById("am12av").value=0; }else if(am12<=0 && am123>=1){ document.getElementById("am12av").value=am123;
                }else if(am12>=1 && am123<=0){ document.getElementById("am12av").value=am12; }else if(am12>=1 && am123>=1){ document.getElementById("am12av").value=(am12+am123)/2; }

                // amuno
                var am1 = parseInt(document.getElementById('am1').value); var am13 = parseInt(document.getElementById('am13').value);
                if(am1<=0 && am13<=0){ document.getElementById("am1av").value=0; }else if(am1<=0 && am13>=1){ document.getElementById("am1av").value=am13;
                }else if(am1>=1 && am13<=0){ document.getElementById("am1av").value=am1; }else if(am1>=1 && am13>=1){ document.getElementById("am1av").value=(am1+am13)/2; }

                // amdos
                var am2 = parseInt(document.getElementById('am2').value); var am23 = parseInt(document.getElementById('am23').value);
                if(am2<=0 && am23<=0){ document.getElementById("am2av").value=0; }else if(am2<=0 && am23>=1){ document.getElementById("am2av").value=am23;
                }else if(am2>=1 && am23<=0){ document.getElementById("am2av").value=am2; }else if(am2>=1 && am23>=1){ document.getElementById("am2av").value=(am2+am23)/2; }

                // amtres
                var am3 = parseInt(document.getElementById('am3').value); var am33 = parseInt(document.getElementById('am33').value);
                if(am3<=0 && am33<=0){ document.getElementById("am3av").value=0; }else if(am3<=0 && am33>=1){ document.getElementById("am3av").value=am33;
                }else if(am3>=1 && am33<=0){ document.getElementById("am3av").value=am3; }else if(am3>=1 && am33>=1){ document.getElementById("am3av").value=(am3+am33)/2; }

                // amquatro
                var am4 = parseInt(document.getElementById('am4').value); var am43 = parseInt(document.getElementById('am43').value);
                if(am4<=0 && am43<=0){ document.getElementById("am4av").value=0; }else if(am4<=0 && am43>=1){ document.getElementById("am4av").value=am43;
                }else if(am4>=1 && am43<=0){ document.getElementById("am4av").value=am4; }else if(am4>=1 && am43>=1){ document.getElementById("am4av").value=(am4+am43)/2; }

                // amsingko
                var am5 = parseInt(document.getElementById('am5').value); var am53 = parseInt(document.getElementById('am53').value);
                if(am5<=0 && am53<=0){ document.getElementById("am5av").value=0; }else if(am5<=0 && am53>=1){ document.getElementById("am5av").value=am53;
                }else if(am5>=1 && am53<=0){ document.getElementById("am5av").value=am5; }else if(am5>=1 && am53>=1){ document.getElementById("am5av").value=(am5+am53)/2; }

                // amsais
                var am6 = parseInt(document.getElementById('am6').value); var am63 = parseInt(document.getElementById('am63').value);
                if(am6<=0 && am63<=0){ document.getElementById("am6av").value=0; }else if(am6<=0 && am63>=1){ document.getElementById("am6av").value=am63;
                }else if(am6>=1 && am63<=0){ document.getElementById("am6av").value=am6; }else if(am6>=1 && am63>=1){ document.getElementById("am6av").value=(am6+am63)/2; }

                // amsiete
                var am7 = parseInt(document.getElementById('am7').value); var am73 = parseInt(document.getElementById('am73').value);
                if(am7<=0 && am73<=0){ document.getElementById("am7av").value=0; }else if(am7<=0 && am73>=1){ document.getElementById("am7av").value=am73;
                }else if(am7>=1 && am73<=0){ document.getElementById("am7av").value=am7; }else if(am7>=1 && am73>=1){ document.getElementById("am7av").value=(am7+am73)/2; }

                // amocho
                var am8 = parseInt(document.getElementById('am8').value); var am83 = parseInt(document.getElementById('am83').value);
                if(am8<=0 && am83<=0){ document.getElementById("am8av").value=0; }else if(am8<=0 && am83>=1){ document.getElementById("am8av").value=am83;
                }else if(am8>=1 && am83<=0){ document.getElementById("am8av").value=am8; }else if(am8>=1 && am83>=1){ document.getElementById("am8av").value=(am8+am83)/2; }

                // amnueve
                var am9 = parseInt(document.getElementById('am9').value); var am93 = parseInt(document.getElementById('am93').value);
                if(am9<=0 && am93<=0){ document.getElementById("am9av").value=0; }else if(am9<=0 && am93>=1){ document.getElementById("am9av").value=am93;
                }else if(am9>=1 && am93<=0){ document.getElementById("am9av").value=am9; }else if(am9>=1 && am93>=1){ document.getElementById("am9av").value=(am9+am93)/2; }

                // amdiyes
                var am10 = parseInt(document.getElementById('am10').value); var am103 = parseInt(document.getElementById('am103').value);
                if(am10<=0 && am103<=0){ document.getElementById("am10av").value=0; }else if(am10<=0 && am103>=1){ document.getElementById("am10av").value=am103;
                }else if(am10>=1 && am103<=0){ document.getElementById("am10av").value=am10; }else if(am10>=1 && am103>=1){ document.getElementById("am10av").value=(am10+am103)/2; }

                // amonse
                var am11 = parseInt(document.getElementById('am11').value); var am113 = parseInt(document.getElementById('am113').value);
                if(am11<=0 && am113<=0){ document.getElementById("am11av").value=0; }else if(am11<=0 && am113>=1){ document.getElementById("am11av").value=am113;
                }else if(am11>=1 && am113<=0){ document.getElementById("am11av").value=am11; }else if(am11>=1 && am113>=1){ document.getElementById("am11av").value=(am11+am113)/2; }

                // pmdose
                var pm12 = parseInt(document.getElementById('pm12').value); var pm123 = parseInt(document.getElementById('pm123').value);
                if(pm12<=0 && pm123<=0){ document.getElementById("pm12av").value=0; }else if(pm12<=0 && pm123>=1){ document.getElementById("pm12av").value=pm123;
                }else if(pm12>=1 && pm123<=0){ document.getElementById("pm12av").value=pm12; }else if(pm12>=1 && pm123>=1){ document.getElementById("pm12av").value=(pm12+pm123)/2; }

                // pmuno
                var pm1 = parseInt(document.getElementById('pm1').value); var pm13 = parseInt(document.getElementById('pm13').value);
                if(pm1<=0 && pm13<=0){ document.getElementById("pm1av").value=0; }else if(pm1<=0 && pm13>=1){ document.getElementById("pm1av").value=pm13;
                }else if(pm1>=1 && pm13<=0){ document.getElementById("pm1av").value=pm1; }else if(pm1>=1 && pm13>=1){ document.getElementById("pm1av").value=(pm1+pm13)/2; }

                // pmdos
                var pm2 = parseInt(document.getElementById('pm2').value); var pm23 = parseInt(document.getElementById('pm23').value);
                if(pm2<=0 && pm23<=0){ document.getElementById("pm2av").value=0; }else if(pm2<=0 && pm23>=1){ document.getElementById("pm2av").value=pm23;
                }else if(pm2>=1 && pm23<=0){ document.getElementById("pm2av").value=pm2; }else if(pm2>=1 && pm23>=1){ document.getElementById("pm2av").value=(pm2+pm23)/2; }

                // pmtres
                var pm3 = parseInt(document.getElementById('pm3').value); var pm33 = parseInt(document.getElementById('pm33').value);
                if(pm3<=0 && pm33<=0){ document.getElementById("pm3av").value=0; }else if(pm3<=0 && pm33>=1){ document.getElementById("pm3av").value=pm33;
                }else if(pm3>=1 && pm33<=0){ document.getElementById("pm3av").value=pm3; }else if(pm3>=1 && pm33>=1){ document.getElementById("pm3av").value=(pm3+pm33)/2; }

                // pmquatro
                var pm4 = parseInt(document.getElementById('pm4').value); var pm43 = parseInt(document.getElementById('pm43').value);
                if(pm4<=0 && pm43<=0){ document.getElementById("pm4av").value=0; }else if(pm4<=0 && pm43>=1){ document.getElementById("pm4av").value=pm43;
                }else if(pm4>=1 && pm43<=0){ document.getElementById("pm4av").value=pm4; }else if(pm4>=1 && pm43>=1){ document.getElementById("pm4av").value=(pm4+pm43)/2; }

                // pmsingko
                var pm5 = parseInt(document.getElementById('pm5').value); var pm53 = parseInt(document.getElementById('pm53').value);
                if(pm5<=0 && pm53<=0){ document.getElementById("pm5av").value=0; }else if(pm5<=0 && pm53>=1){ document.getElementById("pm5av").value=pm53;
                }else if(pm5>=1 && pm53<=0){ document.getElementById("pm5av").value=pm5; }else if(pm5>=1 && pm53>=1){ document.getElementById("pm5av").value=(pm5+pm53)/2; }

                // pmsies
                var pm6 = parseInt(document.getElementById('pm6').value); var pm63 = parseInt(document.getElementById('pm63').value);
                if(pm6<=0 && pm63<=0){ document.getElementById("pm6av").value=0; }else if(pm6<=0 && pm63>=1){ document.getElementById("pm6av").value=pm63;
                }else if(pm6>=1 && pm63<=0){ document.getElementById("pm6av").value=pm6; }else if(pm6>=1 && pm63>=1){ document.getElementById("pm6av").value=(pm6+pm63)/2; }

                // pmsiete
                var pm7 = parseInt(document.getElementById('pm7').value); var pm73 = parseInt(document.getElementById('pm73').value);
                if(pm7<=0 && pm73<=0){ document.getElementById("pm7av").value=0; }else if(pm7<=0 && pm73>=1){ document.getElementById("pm7av").value=pm73;
                }else if(pm7>=1 && pm73<=0){ document.getElementById("pm7av").value=pm7; }else if(pm7>=1 && pm73>=1){ document.getElementById("pm7av").value=(pm7+pm73)/2; }

                // pmocho
                var pm8 = parseInt(document.getElementById('pm8').value); var pm83 = parseInt(document.getElementById('pm83').value);
                if(pm8<=0 && pm83<=0){ document.getElementById("pm8av").value=0; }else if(pm8<=0 && pm83>=1){ document.getElementById("pm8av").value=pm83;
                }else if(pm8>=1 && pm83<=0){ document.getElementById("pm8av").value=pm8; }else if(pm8>=1 && pm83>=1){ document.getElementById("pm8av").value=(pm8+pm83)/2; }

                // pmnueve
                var pm9 = parseInt(document.getElementById('pm9').value); var pm93 = parseInt(document.getElementById('pm93').value);
                if(pm9<=0 && pm93<=0){ document.getElementById("pm9av").value=0; }else if(pm9<=0 && pm93>=1){ document.getElementById("pm9av").value=pm93;
                }else if(pm9>=1 && pm93<=0){ document.getElementById("pm9av").value=pm9; }else if(pm9>=1 && pm93>=1){ document.getElementById("pm9av").value=(pm9+pm93)/2; }

                // pmdies
                var pm10 = parseInt(document.getElementById('pm10').value); var pm103 = parseInt(document.getElementById('pm103').value);
                if(pm10<=0 && pm103<=0){ document.getElementById("pm10av").value=0; }else if(pm10<=0 && pm103>=1){ document.getElementById("pm10av").value=pm103;
                }else if(pm10>=1 && pm103<=0){ document.getElementById("pm10av").value=pm10; }else if(pm10>=1 && pm103>=1){ document.getElementById("pm10av").value=(pm10+pm103)/2; }

                // pmonce
                var pm11 = parseInt(document.getElementById('pm11').value); var pm113 = parseInt(document.getElementById('pm113').value);
                if(pm11<=0 && pm113<=0){ document.getElementById("pm11av").value=0; }else if(pm11<=0 && pm113>=1){ document.getElementById("pm11av").value=pm113;
                }else if(pm11>=1 && pm113<=0){ document.getElementById("pm11av").value=pm11; }else if(pm11>=1 && pm113>=1){ document.getElementById("pm11av").value=(pm11+pm113)/2; }

                // am tot
                document.getElementById("amtot").value= (parseFloat(document.getElementById("am11av").value))+(parseFloat(document.getElementById("am10av").value))+(parseFloat(document.getElementById("am9av").value))+(parseFloat(document.getElementById("am8av").value))+(parseFloat(document.getElementById("am7av").value))+(parseFloat(document.getElementById("am6av").value))+(parseFloat(document.getElementById("am5av").value))+(parseFloat(document.getElementById("am4av").value))+(parseFloat(document.getElementById("am3av").value))+(parseFloat(document.getElementById("am2av").value))+(parseFloat(document.getElementById("am1av").value))+(parseFloat(document.getElementById("am12av").value));

                // pm tot
                document.getElementById("pmtot").value= (parseFloat(document.getElementById("pm11av").value))+(parseFloat(document.getElementById("pm10av").value))+(parseFloat(document.getElementById("pm9av").value))+(parseFloat(document.getElementById("pm8av").value))+(parseFloat(document.getElementById("pm7av").value))+(parseFloat(document.getElementById("pm6av").value))+(parseFloat(document.getElementById("pm5av").value))+(parseFloat(document.getElementById("pm4av").value))+(parseFloat(document.getElementById("pm3av").value))+(parseFloat(document.getElementById("pm2av").value))+(parseFloat(document.getElementById("pm1av").value))+(parseFloat(document.getElementById("pm12av").value));

                // subtotal
                document.getElementById("tot").value= (parseFloat(document.getElementById("pm11av").value))+(parseFloat(document.getElementById("pm10av").value))+(parseFloat(document.getElementById("pm9av").value))+(parseFloat(document.getElementById("pm8av").value))+(parseFloat(document.getElementById("pm7av").value))+(parseFloat(document.getElementById("pm6av").value))+(parseFloat(document.getElementById("pm5av").value))+(parseFloat(document.getElementById("pm4av").value))+(parseFloat(document.getElementById("pm3av").value))+(parseFloat(document.getElementById("pm2av").value))+(parseFloat(document.getElementById("pm1av").value))+(parseFloat(document.getElementById("pm12av").value))+(parseFloat(document.getElementById("am11av").value))+(parseFloat(document.getElementById("am10av").value))+(parseFloat(document.getElementById("am9av").value))+(parseFloat(document.getElementById("am8av").value))+(parseFloat(document.getElementById("am7av").value))+(parseFloat(document.getElementById("am6av").value))+(parseFloat(document.getElementById("am5av").value))+(parseFloat(document.getElementById("am4av").value))+(parseFloat(document.getElementById("am3av").value))+(parseFloat(document.getElementById("am2av").value))+(parseFloat(document.getElementById("am1av").value))+(parseFloat(document.getElementById("am12av").value));

                // all ave
                document.getElementById("allave").value=( (parseFloat(document.getElementById("pm11av").value))+(parseFloat(document.getElementById("pm10av").value))+(parseFloat(document.getElementById("pm9av").value))+(parseFloat(document.getElementById("pm8av").value))+(parseFloat(document.getElementById("pm7av").value))
                +(parseFloat(document.getElementById("pm6av").value))+(parseFloat(document.getElementById("pm5av").value))+(parseFloat(document.getElementById("pm4av").value))+(parseFloat(document.getElementById("pm3av").value))+(parseFloat(document.getElementById("pm2av").value))+(parseFloat(document.getElementById("pm1av").value))
                +(parseFloat(document.getElementById("pm12av").value))+(parseFloat(document.getElementById("am11av").value))+(parseFloat(document.getElementById("am10av").value))+(parseFloat(document.getElementById("am9av").value))+(parseFloat(document.getElementById("am8av").value))+(parseFloat(document.getElementById("am7av").value))
                +(parseFloat(document.getElementById("am6av").value))+(parseFloat(document.getElementById("am5av").value))+(parseFloat(document.getElementById("am4av").value))+(parseFloat(document.getElementById("am3av").value))+(parseFloat(document.getElementById("am2av").value))+(parseFloat(document.getElementById("am1av").value))
                +(parseFloat(document.getElementById("am12av").value)) ) / (parseInt(document.getElementById("dvsr").value));
              }
            </script>

            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save changes</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </form>
          <!-- add average caams -->
        </div>

      <!-- hourly input -->
      <style media="screen"> #hourly { display: none; } </style>

        <div id="hourly" style="">

          <!-- add hourly caams -->
          <form class="" action="<?php echo site_url('Auth/adcaams') ?>" method="post">

            <div class="col-md-12" style="padding-bottom:18px;">

              <div class="row" style="padding-top:8px;">
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="">Date</label>
                    <input class="form-control" type="text" name="author" value="<?php echo $_SESSION['userid']; ?>" required hidden>
                    <input class="form-control" type="date" name="camdat" required>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="">PM</label>
                    <select class="form-select" name="parmat" required>
                      <option value="pm10">PM 10</option>
                      <option value="pm25">PM 2.5</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <label for="">AM Total</label>
                  <input class="form-control" type="text" name="amtot" id="amtot" title="AM Total" tabindex="-1" placeholder="AM Total" style="font-size:20px;" required readonly>
                </div>
                <div class="col-md-2">
                  <label for="">PM Total</label>
                  <input class="form-control" type="text" name="pmtot" id="pmtot" title="PM Total" tabindex="-1" placeholder="PM Total" style="font-size:20px;" required readonly>
                </div>
                <div class="col-md-1">
                  <label for="">Total</label>
                  <input class="form-control" type="text" name="tot" id="tot" title="Total" tabindex="-1" placeholder="Total" style="font-size:20px;" required readonly>
                </div>
                <div class="col-md-1">
                  <label for="">Divisor</label>
                  <input class="form-control" type="text" name="dvsr" id="dvsr" value="24" title="Divisor" tabindex="-1" placeholder="24" style="font-size:20px;" required>
                </div>
                <div class="col-md-2">
                  <label for="">Average of the day</label>
                  <input class="form-control" type="text" name="allave" id="allave" title="Overall Average" tabindex="-1" placeholder="All Ave." style="font-size:20px;" required readonly>
                </div>
              </div>
            </div>

            <div class="col-md-12" style="">
              <div class="row" style="padding-top:8px;">

                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm113" id="pm113" value="0" onkeyup="perhour();" placeholder="11:30" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm11" id="pm11" value="0" onkeyup="perhour();" placeholder="11:00" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm11av" id="pm11av" title="11pm" placeholder="11p Ave." tabindex="-1" required readonly>
                  </div>
                </div>

                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm103" id="pm103" value="0" onkeyup="perhour();" placeholder="10:30" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm10" id="pm10" value="0" onkeyup="perhour();" placeholder="10:00" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm10av" id="pm10av" title="10pm" placeholder="10p Ave." tabindex="-1" required readonly>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm93" id="pm93" value="0" onkeyup="perhour();" placeholder="9:30" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm9" id="pm9" value="0" onkeyup="perhour();" placeholder="9:00" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm9av" id="pm9av" title="9pm" placeholder="9p Ave." tabindex="-1" required readonly>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm83" id="pm83" value="0" onkeyup="perhour();" placeholder="8:30" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm8" id="pm8" value="0" onkeyup="perhour();" placeholder="8:00" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm8av" id="pm8av" title="8pm" placeholder="8p Ave." tabindex="-1" required readonly>
                  </div>
                </div>

              </div><!--row-->
            </div>

            <div class="col-md-12" style="">
              <div class="row" style="padding-top:8px;">

                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm73" id="pm73" value="0" onkeyup="perhour();" placeholder="7:30" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm7" id="pm7" value="0" onkeyup="perhour();" placeholder="7:00" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm7av" id="pm7av" title="7pm" placeholder="7p Ave." tabindex="-1" required readonly>
                  </div>
                </div>

                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm63" id="pm63" value="0" onkeyup="perhour();" placeholder="6:30" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm6" id="pm6" value="0" onkeyup="perhour();" placeholder="6:00" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm6av" id="pm6av" title="6pm" placeholder="6p Ave." tabindex="-1" required readonly>
                  </div>
                </div>

                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm53" id="pm53" value="0" onkeyup="perhour();" placeholder="5:30" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm5" id="pm5" value="0" onkeyup="perhour();" placeholder="5:00" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm5av" id="pm5av" title="5pm" placeholder="5p Ave." tabindex="-1" required readonly>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm43" id="pm43" value="0" onkeyup="perhour();" placeholder="4:30" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm4" id="pm4" value="0" onkeyup="perhour();" placeholder="4:00" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm4av" id="pm4av" title="4pm" placeholder="4p Ave." tabindex="-1" required readonly>
                  </div>
                </div>

              </div><!--row-->
            </div>

            <div class="col-md-12" style="">
              <div class="row" style="padding-top:8px;">

                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm33" id="pm33" value="0" onkeyup="perhour();" placeholder="3:30" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm3" id="pm3" value="0" onkeyup="perhour();" placeholder="3:00" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm3av" id="pm3av" title="3pm" placeholder="3p Ave." tabindex="-1" required readonly>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm23" id="pm23" value="0" onkeyup="perhour();" placeholder="2:30" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm2" id="pm2" value="0" onkeyup="perhour();" placeholder="2:00" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm2av" id="pm2av" title="2pm" placeholder="2p Ave." tabindex="-1" required readonly>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm13" id="pm13" value="0" onkeyup="perhour();" placeholder="1:30" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm1" id="pm1" value="0" onkeyup="perhour();" placeholder="1:00" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm1av" id="pm1av" title="1pm" placeholder="1p Ave." tabindex="-1" required readonly>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm123" id="pm123" value="0" onkeyup="perhour();" placeholder="12:30" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm12" id="pm12" value="0" onkeyup="perhour();" placeholder="12:00" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="pm12av" id="pm12av" title="12pm" placeholder="12p Ave." tabindex="-1" required readonly>
                  </div>
                </div>

              </div><!--row-->
            </div>

            <div class="col-md-12" style="">
              <div class="row" style="padding-top:8px;">

                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am113" id="am113" value="0" onkeyup="perhour();" placeholder="11:30" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am11" id="am11" value="0" onkeyup="perhour();" placeholder="11:00" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am11av" id="am11av" title="11am" placeholder="11a Ave." tabindex="-1" required readonly>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am103" id="am103" value="0" onkeyup="perhour();" placeholder="10:30" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am10" id="am10" value="0" onkeyup="perhour();" placeholder="10:00" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am10av" id="am10av" title="10am" placeholder="10a Ave." tabindex="-1" required readonly>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am93" id="am93" value="0" onkeyup="perhour();" placeholder="9:30" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am9" id="am9" value="0" onkeyup="perhour();" placeholder="9:00" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am9av" id="am9av" title="9am" placeholder="9a Ave." tabindex="-1" required readonly>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am83" id="am83" value="0" onkeyup="perhour();" placeholder="8:30" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am8" id="am8" value="0" onkeyup="perhour();" placeholder="8:00" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am8av" id="am8av" title="8am" placeholder="8a Ave." tabindex="-1" required readonly>
                  </div>
                </div>

              </div><!--row-->
            </div>

            <div class="col-md-12" style="">
              <div class="row" style="padding-top:8px;">

                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am73" id="am73" value="0" onkeyup="perhour();" placeholder="7:30" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am7" id="am7" value="0" onkeyup="perhour();" placeholder="7:00" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am7av" id="am7av" title="7am" placeholder="7a Ave." tabindex="-1" required readonly>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am63" id="am63" value="0" onkeyup="perhour();" placeholder="6:30" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am6" id="am6" value="0" onkeyup="perhour();" placeholder="6:00" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am6av" id="am6av" title="6am" placeholder="6a Ave." tabindex="-1" required readonly>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am53" id="am53" value="0" onkeyup="perhour();" placeholder="5:30" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am5" id="am5" value="0" onkeyup="perhour();" placeholder="5:00" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am5av" id="am5av" title="5am" placeholder="5a Ave." tabindex="-1" required readonly>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am43" id="am43" value="0" onkeyup="perhour();" placeholder="4:30" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am4" id="am4" value="0" onkeyup="perhour();" placeholder="4:00" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am4av" id="am4av" title="4am" placeholder="4a Ave." tabindex="-1" required readonly>
                  </div>
                </div>

              </div><!--row-->
            </div>

            <div class="col-md-12" style="padding-bottom:18px;">
              <div class="row" style="padding-top:8px;">

                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am33" id="am33" value="0" onkeyup="perhour();" placeholder="3:30" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am3" id="am3" value="0" onkeyup="perhour();" placeholder="3:00" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am3av" id="am3av" title="3am" placeholder="3a Ave." tabindex="-1" required readonly>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am23" id="am23" value="0" onkeyup="perhour();" placeholder="2:30" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am2" id="am2" value="0" onkeyup="perhour();" placeholder="2:00" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am2av" id="am2av" title="2am" placeholder="2a Ave." tabindex="-1" required readonly>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am13" id="am13" value="0" onkeyup="perhour();" placeholder="1:30" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am1" id="am1" value="0" onkeyup="perhour();" placeholder="1:00" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am1av" id="am1av" title="1am" placeholder="1a Ave." tabindex="-1" required readonly>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="number" name="am123" id="am123" value="0" onkeyup="perhour();" placeholder="0:30" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="number" name="am12" id="am12" value="0" onkeyup="perhour()" placeholder="0:00" required>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group" style="padding-top:8px;">
                    <input class="form-control" type="text" name="am12av" id="am12av" title="12am" placeholder="12a Ave." tabindex="-1" required readonly>
                  </div>
                </div>

              </div>
            </div>

            <script>function perhour(){
                // amdose
                var am12 = parseInt(document.getElementById('am12').value); var am123 = parseInt(document.getElementById('am123').value);
                if(am12<=0 && am123<=0){ document.getElementById("am12av").value=0; }else if(am12<=0 && am123>=1){ document.getElementById("am12av").value=am123;
                }else if(am12>=1 && am123<=0){ document.getElementById("am12av").value=am12; }else if(am12>=1 && am123>=1){ document.getElementById("am12av").value=(am12+am123)/2; }

                // amuno
                var am1 = parseInt(document.getElementById('am1').value); var am13 = parseInt(document.getElementById('am13').value);
                if(am1<=0 && am13<=0){ document.getElementById("am1av").value=0; }else if(am1<=0 && am13>=1){ document.getElementById("am1av").value=am13;
                }else if(am1>=1 && am13<=0){ document.getElementById("am1av").value=am1; }else if(am1>=1 && am13>=1){ document.getElementById("am1av").value=(am1+am13)/2; }

                // amdos
                var am2 = parseInt(document.getElementById('am2').value); var am23 = parseInt(document.getElementById('am23').value);
                if(am2<=0 && am23<=0){ document.getElementById("am2av").value=0; }else if(am2<=0 && am23>=1){ document.getElementById("am2av").value=am23;
                }else if(am2>=1 && am23<=0){ document.getElementById("am2av").value=am2; }else if(am2>=1 && am23>=1){ document.getElementById("am2av").value=(am2+am23)/2; }

                // amtres
                var am3 = parseInt(document.getElementById('am3').value); var am33 = parseInt(document.getElementById('am33').value);
                if(am3<=0 && am33<=0){ document.getElementById("am3av").value=0; }else if(am3<=0 && am33>=1){ document.getElementById("am3av").value=am33;
                }else if(am3>=1 && am33<=0){ document.getElementById("am3av").value=am3; }else if(am3>=1 && am33>=1){ document.getElementById("am3av").value=(am3+am33)/2; }

                // amquatro
                var am4 = parseInt(document.getElementById('am4').value); var am43 = parseInt(document.getElementById('am43').value);
                if(am4<=0 && am43<=0){ document.getElementById("am4av").value=0; }else if(am4<=0 && am43>=1){ document.getElementById("am4av").value=am43;
                }else if(am4>=1 && am43<=0){ document.getElementById("am4av").value=am4; }else if(am4>=1 && am43>=1){ document.getElementById("am4av").value=(am4+am43)/2; }

                // amsingko
                var am5 = parseInt(document.getElementById('am5').value); var am53 = parseInt(document.getElementById('am53').value);
                if(am5<=0 && am53<=0){ document.getElementById("am5av").value=0; }else if(am5<=0 && am53>=1){ document.getElementById("am5av").value=am53;
                }else if(am5>=1 && am53<=0){ document.getElementById("am5av").value=am5; }else if(am5>=1 && am53>=1){ document.getElementById("am5av").value=(am5+am53)/2; }

                // amsais
                var am6 = parseInt(document.getElementById('am6').value); var am63 = parseInt(document.getElementById('am63').value);
                if(am6<=0 && am63<=0){ document.getElementById("am6av").value=0; }else if(am6<=0 && am63>=1){ document.getElementById("am6av").value=am63;
                }else if(am6>=1 && am63<=0){ document.getElementById("am6av").value=am6; }else if(am6>=1 && am63>=1){ document.getElementById("am6av").value=(am6+am63)/2; }

                // amsiete
                var am7 = parseInt(document.getElementById('am7').value); var am73 = parseInt(document.getElementById('am73').value);
                if(am7<=0 && am73<=0){ document.getElementById("am7av").value=0; }else if(am7<=0 && am73>=1){ document.getElementById("am7av").value=am73;
                }else if(am7>=1 && am73<=0){ document.getElementById("am7av").value=am7; }else if(am7>=1 && am73>=1){ document.getElementById("am7av").value=(am7+am73)/2; }

                // amocho
                var am8 = parseInt(document.getElementById('am8').value); var am83 = parseInt(document.getElementById('am83').value);
                if(am8<=0 && am83<=0){ document.getElementById("am8av").value=0; }else if(am8<=0 && am83>=1){ document.getElementById("am8av").value=am83;
                }else if(am8>=1 && am83<=0){ document.getElementById("am8av").value=am8; }else if(am8>=1 && am83>=1){ document.getElementById("am8av").value=(am8+am83)/2; }

                // amnueve
                var am9 = parseInt(document.getElementById('am9').value); var am93 = parseInt(document.getElementById('am93').value);
                if(am9<=0 && am93<=0){ document.getElementById("am9av").value=0; }else if(am9<=0 && am93>=1){ document.getElementById("am9av").value=am93;
                }else if(am9>=1 && am93<=0){ document.getElementById("am9av").value=am9; }else if(am9>=1 && am93>=1){ document.getElementById("am9av").value=(am9+am93)/2; }

                // amdiyes
                var am10 = parseInt(document.getElementById('am10').value); var am103 = parseInt(document.getElementById('am103').value);
                if(am10<=0 && am103<=0){ document.getElementById("am10av").value=0; }else if(am10<=0 && am103>=1){ document.getElementById("am10av").value=am103;
                }else if(am10>=1 && am103<=0){ document.getElementById("am10av").value=am10; }else if(am10>=1 && am103>=1){ document.getElementById("am10av").value=(am10+am103)/2; }

                // amonse
                var am11 = parseInt(document.getElementById('am11').value); var am113 = parseInt(document.getElementById('am113').value);
                if(am11<=0 && am113<=0){ document.getElementById("am11av").value=0; }else if(am11<=0 && am113>=1){ document.getElementById("am11av").value=am113;
                }else if(am11>=1 && am113<=0){ document.getElementById("am11av").value=am11; }else if(am11>=1 && am113>=1){ document.getElementById("am11av").value=(am11+am113)/2; }

                // pmdose
                var pm12 = parseInt(document.getElementById('pm12').value); var pm123 = parseInt(document.getElementById('pm123').value);
                if(pm12<=0 && pm123<=0){ document.getElementById("pm12av").value=0; }else if(pm12<=0 && pm123>=1){ document.getElementById("pm12av").value=pm123;
                }else if(pm12>=1 && pm123<=0){ document.getElementById("pm12av").value=pm12; }else if(pm12>=1 && pm123>=1){ document.getElementById("pm12av").value=(pm12+pm123)/2; }

                // pmuno
                var pm1 = parseInt(document.getElementById('pm1').value); var pm13 = parseInt(document.getElementById('pm13').value);
                if(pm1<=0 && pm13<=0){ document.getElementById("pm1av").value=0; }else if(pm1<=0 && pm13>=1){ document.getElementById("pm1av").value=pm13;
                }else if(pm1>=1 && pm13<=0){ document.getElementById("pm1av").value=pm1; }else if(pm1>=1 && pm13>=1){ document.getElementById("pm1av").value=(pm1+pm13)/2; }

                // pmdos
                var pm2 = parseInt(document.getElementById('pm2').value); var pm23 = parseInt(document.getElementById('pm23').value);
                if(pm2<=0 && pm23<=0){ document.getElementById("pm2av").value=0; }else if(pm2<=0 && pm23>=1){ document.getElementById("pm2av").value=pm23;
                }else if(pm2>=1 && pm23<=0){ document.getElementById("pm2av").value=pm2; }else if(pm2>=1 && pm23>=1){ document.getElementById("pm2av").value=(pm2+pm23)/2; }

                // pmtres
                var pm3 = parseInt(document.getElementById('pm3').value); var pm33 = parseInt(document.getElementById('pm33').value);
                if(pm3<=0 && pm33<=0){ document.getElementById("pm3av").value=0; }else if(pm3<=0 && pm33>=1){ document.getElementById("pm3av").value=pm33;
                }else if(pm3>=1 && pm33<=0){ document.getElementById("pm3av").value=pm3; }else if(pm3>=1 && pm33>=1){ document.getElementById("pm3av").value=(pm3+pm33)/2; }

                // pmquatro
                var pm4 = parseInt(document.getElementById('pm4').value); var pm43 = parseInt(document.getElementById('pm43').value);
                if(pm4<=0 && pm43<=0){ document.getElementById("pm4av").value=0; }else if(pm4<=0 && pm43>=1){ document.getElementById("pm4av").value=pm43;
                }else if(pm4>=1 && pm43<=0){ document.getElementById("pm4av").value=pm4; }else if(pm4>=1 && pm43>=1){ document.getElementById("pm4av").value=(pm4+pm43)/2; }

                // pmsingko
                var pm5 = parseInt(document.getElementById('pm5').value); var pm53 = parseInt(document.getElementById('pm53').value);
                if(pm5<=0 && pm53<=0){ document.getElementById("pm5av").value=0; }else if(pm5<=0 && pm53>=1){ document.getElementById("pm5av").value=pm53;
                }else if(pm5>=1 && pm53<=0){ document.getElementById("pm5av").value=pm5; }else if(pm5>=1 && pm53>=1){ document.getElementById("pm5av").value=(pm5+pm53)/2; }

                // pmsies
                var pm6 = parseInt(document.getElementById('pm6').value); var pm63 = parseInt(document.getElementById('pm63').value);
                if(pm6<=0 && pm63<=0){ document.getElementById("pm6av").value=0; }else if(pm6<=0 && pm63>=1){ document.getElementById("pm6av").value=pm63;
                }else if(pm6>=1 && pm63<=0){ document.getElementById("pm6av").value=pm6; }else if(pm6>=1 && pm63>=1){ document.getElementById("pm6av").value=(pm6+pm63)/2; }

                // pmsiete
                var pm7 = parseInt(document.getElementById('pm7').value); var pm73 = parseInt(document.getElementById('pm73').value);
                if(pm7<=0 && pm73<=0){ document.getElementById("pm7av").value=0; }else if(pm7<=0 && pm73>=1){ document.getElementById("pm7av").value=pm73;
                }else if(pm7>=1 && pm73<=0){ document.getElementById("pm7av").value=pm7; }else if(pm7>=1 && pm73>=1){ document.getElementById("pm7av").value=(pm7+pm73)/2; }

                // pmocho
                var pm8 = parseInt(document.getElementById('pm8').value); var pm83 = parseInt(document.getElementById('pm83').value);
                if(pm8<=0 && pm83<=0){ document.getElementById("pm8av").value=0; }else if(pm8<=0 && pm83>=1){ document.getElementById("pm8av").value=pm83;
                }else if(pm8>=1 && pm83<=0){ document.getElementById("pm8av").value=pm8; }else if(pm8>=1 && pm83>=1){ document.getElementById("pm8av").value=(pm8+pm83)/2; }

                // pmnueve
                var pm9 = parseInt(document.getElementById('pm9').value); var pm93 = parseInt(document.getElementById('pm93').value);
                if(pm9<=0 && pm93<=0){ document.getElementById("pm9av").value=0; }else if(pm9<=0 && pm93>=1){ document.getElementById("pm9av").value=pm93;
                }else if(pm9>=1 && pm93<=0){ document.getElementById("pm9av").value=pm9; }else if(pm9>=1 && pm93>=1){ document.getElementById("pm9av").value=(pm9+pm93)/2; }

                // pmdies
                var pm10 = parseInt(document.getElementById('pm10').value); var pm103 = parseInt(document.getElementById('pm103').value);
                if(pm10<=0 && pm103<=0){ document.getElementById("pm10av").value=0; }else if(pm10<=0 && pm103>=1){ document.getElementById("pm10av").value=pm103;
                }else if(pm10>=1 && pm103<=0){ document.getElementById("pm10av").value=pm10; }else if(pm10>=1 && pm103>=1){ document.getElementById("pm10av").value=(pm10+pm103)/2; }

                // pmonce
                var pm11 = parseInt(document.getElementById('pm11').value); var pm113 = parseInt(document.getElementById('pm113').value);
                if(pm11<=0 && pm113<=0){ document.getElementById("pm11av").value=0; }else if(pm11<=0 && pm113>=1){ document.getElementById("pm11av").value=pm113;
                }else if(pm11>=1 && pm113<=0){ document.getElementById("pm11av").value=pm11; }else if(pm11>=1 && pm113>=1){ document.getElementById("pm11av").value=(pm11+pm113)/2; }

                // am tot
                document.getElementById("amtot").value= (parseFloat(document.getElementById("am11av").value))+(parseFloat(document.getElementById("am10av").value))+(parseFloat(document.getElementById("am9av").value))+(parseFloat(document.getElementById("am8av").value))+(parseFloat(document.getElementById("am7av").value))+(parseFloat(document.getElementById("am6av").value))+(parseFloat(document.getElementById("am5av").value))+(parseFloat(document.getElementById("am4av").value))+(parseFloat(document.getElementById("am3av").value))+(parseFloat(document.getElementById("am2av").value))+(parseFloat(document.getElementById("am1av").value))+(parseFloat(document.getElementById("am12av").value));

                // pm tot
                document.getElementById("pmtot").value= (parseFloat(document.getElementById("pm11av").value))+(parseFloat(document.getElementById("pm10av").value))+(parseFloat(document.getElementById("pm9av").value))+(parseFloat(document.getElementById("pm8av").value))+(parseFloat(document.getElementById("pm7av").value))+(parseFloat(document.getElementById("pm6av").value))+(parseFloat(document.getElementById("pm5av").value))+(parseFloat(document.getElementById("pm4av").value))+(parseFloat(document.getElementById("pm3av").value))+(parseFloat(document.getElementById("pm2av").value))+(parseFloat(document.getElementById("pm1av").value))+(parseFloat(document.getElementById("pm12av").value));

                // subtotal
                document.getElementById("tot").value= (parseFloat(document.getElementById("pm11av").value))+(parseFloat(document.getElementById("pm10av").value))+(parseFloat(document.getElementById("pm9av").value))+(parseFloat(document.getElementById("pm8av").value))+(parseFloat(document.getElementById("pm7av").value))+(parseFloat(document.getElementById("pm6av").value))+(parseFloat(document.getElementById("pm5av").value))+(parseFloat(document.getElementById("pm4av").value))+(parseFloat(document.getElementById("pm3av").value))+(parseFloat(document.getElementById("pm2av").value))+(parseFloat(document.getElementById("pm1av").value))+(parseFloat(document.getElementById("pm12av").value))+(parseFloat(document.getElementById("am11av").value))+(parseFloat(document.getElementById("am10av").value))+(parseFloat(document.getElementById("am9av").value))+(parseFloat(document.getElementById("am8av").value))+(parseFloat(document.getElementById("am7av").value))+(parseFloat(document.getElementById("am6av").value))+(parseFloat(document.getElementById("am5av").value))+(parseFloat(document.getElementById("am4av").value))+(parseFloat(document.getElementById("am3av").value))+(parseFloat(document.getElementById("am2av").value))+(parseFloat(document.getElementById("am1av").value))+(parseFloat(document.getElementById("am12av").value));

                // all ave
                document.getElementById("allave").value=( (parseFloat(document.getElementById("pm11av").value))+(parseFloat(document.getElementById("pm10av").value))+(parseFloat(document.getElementById("pm9av").value))+(parseFloat(document.getElementById("pm8av").value))+(parseFloat(document.getElementById("pm7av").value))
                +(parseFloat(document.getElementById("pm6av").value))+(parseFloat(document.getElementById("pm5av").value))+(parseFloat(document.getElementById("pm4av").value))+(parseFloat(document.getElementById("pm3av").value))+(parseFloat(document.getElementById("pm2av").value))+(parseFloat(document.getElementById("pm1av").value))
                +(parseFloat(document.getElementById("pm12av").value))+(parseFloat(document.getElementById("am11av").value))+(parseFloat(document.getElementById("am10av").value))+(parseFloat(document.getElementById("am9av").value))+(parseFloat(document.getElementById("am8av").value))+(parseFloat(document.getElementById("am7av").value))
                +(parseFloat(document.getElementById("am6av").value))+(parseFloat(document.getElementById("am5av").value))+(parseFloat(document.getElementById("am4av").value))+(parseFloat(document.getElementById("am3av").value))+(parseFloat(document.getElementById("am2av").value))+(parseFloat(document.getElementById("am1av").value))
                +(parseFloat(document.getElementById("am12av").value)) ) / (parseInt(document.getElementById("dvsr").value));
              }
            </script>

            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save changes</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </form>
          <!-- add hourly caams -->

        </div>
        <!-- </div> -->

      <script> $(document).ready(function(){ $("#hour").click(function(){ $("#hourly").toggle(800); $("#averg").hide(500); }); }); </script>
      <!-- hourly input -->
      <script> $(document).ready(function(){ $("#avrg").click(function(){ $("#averg").toggle(800); $("#hourly").hide(500); }); }); </script>
      <!-- average input -->

      <section>

        <!-- card -->
        <div class="card" >
          <div class="card-body">
            <div class="row" style="padding-top:20px;">

              <!-- table -->
              <table id="caamstab" class="display" style="width:100%">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Entered By</th>
                  <th>Date</th>
                  <th>PM</th>
                  <th>Average</th>
                </tr>
                </thead>
                <tfoot style="display:table-header-group;">
                <tr>
                  <th></th>
                  <th>Entered By</th>
                  <th>Date</th>
                  <th>PM</th>
                  <th>Average</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php $caamsno=''; foreach ($recaams as $rcaams) { $caamsno++; ?>
                    <tr>
                      <td><?php echo $caamsno; ?></td>
                      <td><?php echo $rcaams->author; ?></td>
                      <td><?php echo $rcaams->camdat; ?></td>
                      <td><?php echo $rcaams->parmat; ?></td>
                      <td><?php echo $rcaams->allave; ?></td>

                      <!-- deghg -->
                      <div class="modal fade" id="deghg<?php echo $rcaams->camid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color:#DF362D;">
                              <h5 class="modal-title" id="exampleModalLabel"><b>Remove this Record?</b></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="<?php echo site_url('Auth/delghg') ?>/<?php echo $rcaams->camid; ?>">
                                <div class="" hidden>
                                  <input type="text" class="form-control" name="camid" value="<?php echo $rcaams->camid; ?>" required>
                                </div>
                                <div class="" style="padding-top:10px;padding-bottom:15px;">
                                  <input type="text" class="form-control" name="" value="<?php echo $rcaams->camdat; ?>" required>
                                </div>
                               <div class="footer" style="text-align:right;">
                                  <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- deghg -->


                    </tr>
                  <?php } ?>
                </tbody>
              </table>
              <!-- table -->

            </div>
          </div>
        </div>
        <!-- card -->

      </section>
    </main>

  </body>
</html>

    <!-- caamstab datab indi -->
    <script type="text/javascript">
      $(document).ready(function () {
        // Setup - add a text input to each footer cell
        $('#caamstab tfoot th').each( function () { var title = $(this).text();
          //remove first column
          if (title != '') { $(this).html( '<input type="text" placeholder="Search '+title+'" />' ); } } );

        // DataTable
        var table = $('#caamstab').DataTable({ initComplete: function () {
                // Apply the search
                this.api() .columns() .every(function () { var that = this;

                        $('input', this.footer()).on('keyup change clear', function () { if (that.search() !== this.value) { that.search(this.value).draw(); } }); }); }, }); });
    </script>
    <!-- bio datab indi -->

    <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
