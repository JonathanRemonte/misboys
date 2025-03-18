
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

  <!-- dropdown cascade address -->
  <?php $this->load->view('2shared/procitbar.php'); ?>

  <body>

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
          <a class="nav-link collapse" data-bs-target="#tables-nav" href="swmdash">
            <i class="bi bi-recycle"></i><span>SWM</span>
          </a>
          <?php if($_SESSION['urights']==8.4||$_SESSION['urights']=='8.5.1'||$_SESSION['urights']=='8.5.2'||$_SESSION['urights']=='8.5.3'||$_SESSION['urights']==4||$_SESSION['urights']==1){ ?>
            <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
              <li>
                <a href="swmadmin" class="active">
                  <i class="bi bi-people"></i><span>SWM Admin</span>
                </a>
              </li>
              <li>
                <a href="swmlgman" class="">
                  <i class="bi bi-card-checklist"></i><span>LGU Management</span>
                </a>
              </li>
              <li>
                <a href="swmlgrep" class="">
                  <i class="bi bi-card-checklist"></i><span>LGU Waste Report</span>
                </a>
              </li>
              <!-- <li>
                <a href="swmassmon" class="">
                  <i class="bi bi-card-checklist"></i><span>Assistance|Monitoring</span>
                </a>
              </li> -->
            </ul>
          <?php } ?>
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
      <div class="pagetitle" style="">
        <h1>SWM Admin</h1>
      </div>

      <section>

        <div class="col-md-12">
          <div class="row">
            <!-- lguser pending -->

              <div class="card" style="background-color:#ffcccc;">
                <div class="card-body">
                  <h5 class="card-title" style="">LGU Staff Pending Registration</h5>

                  <!-- Table with stripped rows -->
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">LGU</th>
                        <th scope="col">ID</th>
                        <th scope="col">Date of Registration</th>
                        <th scope="col">Email</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                      $lgucnt = 0;
                      // Define a mapping of session values to provinces
                      $provinceMap = array(
                          '8.5.1' => array('Palawan'),
                          '8.5.2' => array('Marinduque', 'Oriental'),
                          '8.5.3' => array('Romblon', 'Occidental'),
                          '8.4' => array('Romblon', 'Occidental', 'Marinduque', 'Oriental', 'Palawan'),
                          '1' => array('Romblon', 'Occidental', 'Marinduque', 'Oriental', 'Palawan'),
                          // Add more mappings as needed
                      );

                      foreach ($lgacc as $rowlgacc) {
                        $lgucnt++;
                        // Get province
                        $instr = $rowlgacc->lgu;
                        $words = explode(" ", $instr);
                        $prov = $words[0];

                        // Check if the current session value exists in the mapping array
                        if (isset($provinceMap[$_SESSION['urights']])) {
                            $provinces = $provinceMap[$_SESSION['urights']];
                            // Check if the current province matches any province in the $provinces array
                            if (in_array($prov, $provinces)) {
                                ?>
                                <tr id="lgureg">
                                    <th scope="row"><?php echo $lgucnt; ?></th>
                                    <td><?php echo $rowlgacc->fnam; ?> <?php echo $rowlgacc->mnam; ?> <?php echo $rowlgacc->lnam; ?></td>
                                    <td>
                                      <?php
                                        if ($rowlgacc->stat == 0) {
                                            if ($_SESSION['urights'] == '8.4') { ?>
                                              <a data-bs-toggle="" data-bs-target="" style="color:orange;" title="For Evaluation"><?php echo $rowlgacc->lgu; ?></a>
                                            <?php } else { ?>
                                              <a href="" data-bs-toggle="modal" data-bs-target="#lgactuser<?php echo $rowlgacc->lgusid; ?>" style="color:red;"><?php echo $rowlgacc->lgu; ?></a>
                                            <?php }
                                        } elseif ($rowlgacc->stat == 4) {
                                            if ($_SESSION['urights'] == '8.4') { ?>
                                              <a href="" data-bs-toggle="modal" data-bs-target="#lgactuser<?php echo $rowlgacc->lgusid; ?>" style="color:red;" title="For Final Approval"><?php echo $rowlgacc->lgu; ?></a>
                                            <?php } else { ?>
                                              <a data-bs-toggle="" data-bs-target="" style="color:orange;" title="For SWM Chief"><?php echo $rowlgacc->lgu; ?></a>
                                        <?php } } ?>
                                    </td>
                                    <td style="text-align:center;">
                                      <a><img style="width:200px;height:100px;padding-top:5%;" src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/4blive/uplive/uplivelist/'.$rowlgacc->idntfy; ?>" alt="Alternative Text"></a>
                                      <br>
                                      <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/4blive/uplive/uplivelist/'.$rowlgacc->idntfy; ?>" target="_blank" title="Click to enlarge">
                                        Click here to enlarge
                                      </a>

                                    </td>
                                    <td><?php echo date("YMd", strtotime($rowlgacc->regdat)); ?></td>
                                    <td><?php echo $rowlgacc->email; ?></td>

                                    <!--activate lgu user-->
                                    <div class="modal fade" id="lgactuser<?php echo $rowlgacc->lgusid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size:15px;" style="">
                                      <div class="modal-dialog modal-md modal-dialog-centered">
                                        <div class="modal-content">
                                          <div class="modal-header" style="background-color:#ffaa34;">
                                            <h5 class="modal-title" id="exampleModalLabel"><b>Approve or disapprove <?php echo ucwords($rowlgacc->fnam); ?> <?php echo ucwords($rowlgacc->lnam); ?>?</b></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            <form method="post" action="<?php echo site_url('Auth/lgactuser') ?>/<?php echo $rowlgacc->lgusid; ?>">
                                              <input class="" type="text" class="form-control" name="lgusid" value="<?php echo $rowlgacc->lgusid; ?>" hidden>
                                              <div class="col-md-12">
                                                <!-- <input type="text" class="form-control" name="stat" value="1" hidden> -->
                                              </div>
                                              <div class="footer" style="text-align:right;">
                                                <div class="col-md-12">
                                                  <div class="row" style="text-align:center;">
                                                    <div class="col-md-6">
                                                      <?php
                                                        if($_SESSION['urights']!='8.4'){ ?>
                                                          <button type="submit" class="btn btn-primary" name="stat" value="4" data-bs-toggle="modal" data-bs-target="#lguapp" title="Approve"><i class="bi bi-hand-thumbs-up fs-5"></i></button>
                                                      <?php  }elseif($_SESSION['urights']=='8.4'){ ?>
                                                        <button type="submit" class="btn btn-primary" name="stat" value="1" data-bs-toggle="modal" data-bs-target="#lguapp" title="Approve"><i class="bi bi-hand-thumbs-up fs-5"></i></button>
                                                    <?php  } ?>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <button type="submit" class="btn btn-danger" name="stat" value="3" title="Disapprove"><i class="bi bi-hand-thumbs-down fs-5"></i></button>
                                                    </div>
                                                  </div>
                                                </div>
                                               </div>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!--activate lgu user-->

                                </tr>
                                <?php
                            }
                        }
                      }
                      ?>
                    </tbody>

                  </table>
                  <!-- End Table with stripped rows -->

                </div>
              </div>

            <!-- lguser pending -->
          </div>
        </div>

        <!-- LGU Staff Active Users -->
        <div class="col-md-12">
          <div class="row">
            <!-- active lguser -->

              <div class="card" style="background-color:#ccccff;">
                <div class="card-body">
                  <h5 class="card-title" style="">LGU Staff Active Users</h5>

                  <!-- Table with stripped rows -->
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">LGU</th>
                        <th scope="col">LILO</th>
                        <th scope="col">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $lgucnt=0;
                      // Define a mapping of session values to provinces
                      $provinceMap = array(
                          '8.5.1' => array('Palawan'),
                          '8.5.2' => array('Marinduque', 'Oriental'),
                          '8.5.3' => array('Romblon', 'Occidental'),
                          '8.4' => array('Romblon', 'Occidental', 'Marinduque', 'Oriental', 'Palawan'),
                          '1' => array('Romblon', 'Occidental', 'Marinduque', 'Oriental', 'Palawan'),
                          // Add more mappings as needed
                      );

                       foreach ($actlguser as $rowact) { $lgucnt++;
                         // Get province
                         $instr = $rowlgacc->lgu;
                         $words = explode(" ", $instr);
                         $prov = $words[0];

                         // Check if the current session value exists in the mapping array
                         if (isset($provinceMap[$_SESSION['urights']])) {
                             $provinces = $provinceMap[$_SESSION['urights']];
                             // Check if the current province matches any province in the $provinces array
                             if (in_array($prov, $provinces)) {
                       ?>

                        <tr id="lgureg">
                          <th scope="row"><?php echo $lgucnt; ?></th>
                          <td><?php echo $rowact->fnam; ?> <?php echo $rowact->mnam; ?> <?php echo $rowact->lnam; ?></td>
                          <td><a href="" data-bs-toggle="modal" data-bs-target="#lgdeactuser<?php echo $rowact->lgusid; ?>" style="color:black;"><?php echo $rowact->lgu; ?></a></td>
                          <td>
                            <?php
                              if($rowact->lilo==1){ echo "<i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>"; }else{
                                echo "<i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>";
                              }
                            ?>
                          </td>
                          <td><?php echo $rowact->lilodat; ?></td>
                          <!--deactivate lgu user-->
                          <div class="modal fade" id="lgdeactuser<?php echo $rowact->lgusid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size:15px;" style="">
                            <div class="modal-dialog modal-md modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color:#ffaa34;">
                                  <h5 class="modal-title" id="exampleModalLabel"><b>Deactivate LGU Staff <?php echo ucwords($rowact->fnam); ?> <?php echo ucwords($rowact->lnam); ?>?</b></h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form method="post" action="<?php echo site_url('Auth/lgdeactuser') ?>/<?php echo $rowact->lgusid; ?>">
                                    <input class="" type="text" class="form-control" name="lgusid" value="<?php echo $rowact->lgusid; ?>" hidden>
                                    <div class="col-md-12">
                                      <input type="text" class="form-control" name="stat" value="0" hidden>
                                    </div>
                                    <div class="footer" style="text-align:right;">
                                       <button type="submit" class="btn btn-danger">Deactivate!</button>
                                     </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--deactivate lgu user-->

                        </tr>
                      <?php }}} ?>
                    </tbody>
                  </table>
                  <!-- End Table with stripped rows -->

                </div>
              </div>

            <!-- active lguser -->
          </div>
        </div>
        <!-- LGU Staff Active Users -->

        <!-- Email Activation -->
        <div class="col-md-12">
          <div class="row">
            <!-- active lguser -->

              <div class="card" style="background-color:#ccddff;">
                <div class="card-body">
                  <h5 class="card-title" style="">For Email Activation</h5>

                  <!-- Table with stripped rows -->
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">LGU</th>
                        <th scope="col">LILO</th>
                        <th scope="col">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $lgucnt=0; foreach ($actemail as $rowact) { $lgucnt++; ?>
                        <tr id="lgureg">
                          <th scope="row"><?php echo $lgucnt; ?></th>
                          <td><?php echo $rowact->fnam; ?> <?php echo $rowact->mnam; ?> <?php echo $rowact->lnam; ?></td>
                          <td><a href="" data-bs-toggle="modal" data-bs-target="#lgdeactuser<?php echo $rowact->lgusid; ?>" style="color:black;"><?php echo $rowact->lgu; ?></a></td>
                          <td>
                            <?php
                              if($rowact->lilo==1){ echo "<i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>"; }else{
                                echo "<i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>";
                              }
                            ?>
                          </td>
                          <td><?php echo $rowact->lilodat; ?></td>
                          <!--deactivate lgu user-->
                          <div class="modal fade" id="lgdeactuser<?php echo $rowact->lgusid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size:15px;" style="">
                            <div class="modal-dialog modal-md modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color:#ffaa34;">
                                  <h5 class="modal-title" id="exampleModalLabel"><b>Deactivate LGU Staff <?php echo ucwords($rowact->fnam); ?> <?php echo ucwords($rowact->lnam); ?>?</b></h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form method="post" action="<?php echo site_url('Auth/lgdeactuser') ?>/<?php echo $rowact->lgusid; ?>">
                                    <input class="" type="text" class="form-control" name="lgusid" value="<?php echo $rowact->lgusid; ?>" hidden>
                                    <div class="col-md-12">
                                      <input type="text" class="form-control" name="stat" value="0" hidden>
                                    </div>
                                    <div class="footer" style="text-align:right;">
                                       <button type="submit" class="btn btn-danger">Deactivate!</button>
                                     </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--deactivate lgu user-->

                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                  <!-- End Table with stripped rows -->

                </div>
              </div>

            <!-- active lguser -->
          </div>
        </div>
        <!-- Email Activation -->

        <!-- LGU Staff Disapprove Users -->
        <div class="col-md-12">
          <div class="row">
            <!-- active lguser -->

              <div class="card" style="background-color:#cc9999;">
                <div class="card-body">
                  <h5 class="card-title" style="">LGU Disapprove Registration</h5>

                  <!-- Table with stripped rows -->
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">LGU</th>
                        <th scope="col">ID</th>
                        <th scope="col">Registration Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $lgucnt=0; foreach ($inactlguser as $rowact) { $lgucnt++; ?>
                        <tr id="lgureg">
                          <th scope="row"><?php echo $lgucnt; ?></th>
                          <td><?php echo $rowact->fnam; ?> <?php echo $rowact->mnam; ?> <?php echo $rowact->lnam; ?></td>
                          <td><a data-bs-toggle="" data-bs-target="" style="color:black;"><?php echo $rowact->lgu; ?></a></td>
                          <td><?php echo $rowact->idntfy; ?></td>
                          <td><?php echo $rowact->regdat; ?></td>
                          <!--deactivate lgu user-->
                          <div class="modal fade" id="lgactuser<?php echo $rowact->lgusid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size:15px;" style="">
                            <div class="modal-dialog modal-md modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color:#ffaa34;">
                                  <h5 class="modal-title" id="exampleModalLabel"><b>Deactivate LGU Staff <?php echo ucwords($rowact->fnam); ?> <?php echo ucwords($rowact->lnam); ?>?</b></h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form method="post" action="<?php echo site_url('Auth/lgforactivate') ?>/<?php echo $rowact->lgusid; ?>">
                                    <input class="" type="text" class="form-control" name="lgusid" value="<?php echo $rowact->lgusid; ?>" hidden>
                                    <div class="col-md-12">
                                      <input type="text" class="form-control" name="stat" value="0" hidden>
                                    </div>
                                    <div class="footer" style="text-align:right;">
                                       <button type="submit" class="btn btn-primary">Activate!</button>
                                     </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--deactivate lgu user-->

                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                  <!-- End Table with stripped rows -->

                </div>
              </div>

            <!-- active lguser -->
          </div>
        </div>
        <!-- LGU Staff Disapprove Users -->

      </section>
    </main>

  </body>
</html>

      <!-- add modal -->
      <div class="modal fade" id="admodlgu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add LGU</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="" action="<?php echo site_url('Auth/adlgu') ?>" method="post">
              <div class="modal-body">
                <div class="col-md-12">
                  <div class="row">
                    <div class="form-group modid" id="modlgudiv">
                      <input class="form-control" type="text" name="lguid" value="<?php foreach ($resid as $rowid) { $newlid=$rowid->lguid; } echo $newlid+1; ?> ">
                    </div>
                    <div class="col-md-12">
                      <select class="form-control" name="fprov" id="fprov" required>
                        <option value="" selected="selected">-- Click here for Province --</option>
                      </select>
                    </div>
                    <div class="col-md-12" style="padding-top:8px;">
                      <select class="form-control" name="fmun" id="fmun" required>
                        <option value="" selected="selected">-- Click here for Municipality --</option>
                      </select>
                    </div>
                    <div class="col-md-12 modid" style="padding-top:8px;">
                      <select class="form-control" name="fbrgy" id="fbrgy" >
                        <option value="" selected="selected">Click here for Barangay</option>
                      </select>
                    </div>
                    <div class="form-group" style="padding-top:8px;">
                      <input class="form-control" type="text" name="scope" placeholder="Scope">
                    </div>
                    <div class="form-group" style="padding-top:8px;">
                      <select class="form-select" name="year10">
                        <option value="Not Approved">Not Approved</option><option value="Approved">Approved</option>
                      </select>
                    </div>
                    <div class="form-group" style="padding-top:8px;">
                      <input class="form-control" type="text" name="resno" placeholder="Resolution Number">
                    </div>
                    <div class="form-group" style="padding-top:8px;">
                      <input class="form-control" type="date" name="lgudatap" >
                    </div>
                    <div class="form-group" style="padding-top:8px;">
                      <textarea name="lgurem" rows="4" cols="55" placeholder="Remarks"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
          </form>
          </div>
        </div>
      </div>
      <!-- add modal -->

      <!-- edit all modal -->
      <script type="text/javascript">$(document).on("click", ".open-lguEvents", function () {
         var eventlgu = $(this).data('id');
         $(".modal-body #eventlgu").val( eventlgu );
         $('#idHolder').html( eventlgu );
      });</script>
      <!-- edit all modal -->

<!-- lgu msg -->
<!-- <script type="text/javascript">
  $(document).ready(function () {
    // Setup - add a text input to each footer cell
    $('#lgumsg tfoot th').each( function () { var title = $(this).text();
      //remove first column
      if (title != '') { $(this).html( '<input type="text" placeholder="Search '+title+'" />' ); } } );

    // DataTable
    var table = $('#lgumsg').DataTable({ initComplete: function () {
            // Apply the search
            this.api() .columns() .every(function () { var that = this;

                    $('input', this.footer()).on('keyup change clear', function () { if (that.search() !== this.value) { that.search(this.value).draw(); } }); }); }, }); });
</script> -->
<!-- lgu msg -->

<!-- datab indi -->
<!-- <script type="text/javascript">
  $(document).ready(function () {
    // Setup - add a text input to each footer cell
    $('#example tfoot th').each( function () { var title = $(this).text();
      //remove first column
      if (title != '') { $(this).html( '<input type="text" placeholder="Search '+title+'" />' ); } } );

    // DataTable
    var table = $('#example').DataTable({ initComplete: function () {
            // Apply the search
            this.api() .columns() .every(function () { var that = this;

                    $('input', this.footer()).on('keyup change clear', function () { if (that.search() !== this.value) { that.search(this.value).draw(); } }); }); }, }); });
</script> -->
<!-- datab indi -->

<!-- show adlgu form -->
<script type="text/javascript"> function adlgu() { $("#tow").slideToggle("slow"); } </script>
<!-- show adlgu form -->

<!-- <script src="<?php echo base_url(); ?>assets/js/jquery-3.5.1.js"></script> -->

<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
