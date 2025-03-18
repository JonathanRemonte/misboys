  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/blackhive/css/1.13.1dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/blackhive/css/4.5.2bootstrap.css">

  <script src="<?php echo base_url(); ?>assets/blackhive/js/1.13.1jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/blackhive/js/1.13.1dataTables.bootstrap4.min.js"></script>

  <style media="screen">
    #cardtit{ margin-top:-20px; }
  </style>

<body style="z-index:-2">

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar" style="background-color:#121212;">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
          <a class="nav-link " href="blackhive" style="background-color:black;color:red;">
            <i class="bi bi-hexagon"></i>
            <span>Black Hive</span>
          </a>
        </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url(); ?>index">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="enlist">
          <i class="bi bi-person-badge"></i>
          <span>Create Account</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->

      <li class="nav-heading">Upkeep</li>

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main" style="background-color:#181818;">

    <div class="pagetitle">
      <h1 style="color:red;">Black Hive</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card" style="background-color:#565656;">
            <div class="card-body">
              <h5 class="card-title" id="cardtit" style="color:#ff6634;">User Registration</h5>

              <!-- user Table -->
              <table class="table table-dark table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Division</th>
                    <th scope="col">Section</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $fcnt=0;
                  foreach($result as $row){ $fcnt++; ?>
                    <tr>
                      <th><?php echo $fcnt; ?></th><th><?php echo $row->userid; ?></th><td><a href="" data-bs-toggle="modal" data-bs-target="#eduser<?php echo $row->userid; ?>" style="color:#ffaa34;"><?php echo $row->uname; ?></a></td><td><?php echo $row->udiv; ?></td><td><?php echo $row->usec; ?></td><td><?php echo $row->udaten; ?></td>

                      <!--activate user-->
                      <div class="modal fade" id="eduser<?php echo $row->userid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size:15px;" style="">
                        <div class="modal-dialog modal-sm modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color:#ffaa34;">
                              <h5 class="modal-title" id="exampleModalLabel"><b>Activate ID <?php echo $row->userid; ?>?</b></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="<?php echo site_url('Auth/useact') ?>/<?php echo $row->userid; ?>">
                                <div class="col-md-6" hidden>
                                  <input class="" type="text" class="form-control" name="userid" value="<?php echo $row->userid; ?>" >
                                  <input class="" type="text" class="form-control" name="uname" value="<?php echo $row->uname; ?>" >
                                  <input class="" type="text" class="form-control" name="usec" value="<?php echo $row->usec; ?>" >
                                  <input class="" type="text" class="form-control" name="tardat" value="<?php echo date('Y-m-d'); ?>" >
                                  <input class="" type="text" class="form-control" name="taryr" value="<?php echo date('Y'); ?>" >
                                </div>
                                <div class="col-md-12" style="margin-top:-10px;padding-bottom:20px;">
                                  <select class="form-control" name="urights" required>
                                    <option value="">Click Here to Choose User Rights</option>  <option value="">======= 1 ========</option>
                                    <option value="1">Overlord</option><option value="1.1">MIS Chief</option><option value="1.2">MIS Staff</option><option value="1.3">Kevin</option>
                                    <option value="1.5">ORD Staff</option>
                                    <option value="1.6">PEMU Occidental Mindoro Chief</option><option value="1.6.1">PEMU Occidental Mindoro Staff</option>
                                    <option value="1.7">PEMU Oriental Mindoro Chief</option><option value="1.7.1">PEMU Oriental Mindoro Staff</option>
                                    <option value="1.8">EMS  Marinduque Chief</option><option value="1.8.1">EMS  Marinduque Staff</option>
                                    <option value="1.9">PEMU Romblon Chief</option><option value="1.9.1">PEMU Romblon Staff</option>
                                    <option value="1.10">PEMU Palawan Chief</option><option value="1.10.1">PEMU Palawan Staff</option>
                                    <option value="">======= 2 ========</option>
                                    <option value="2.1">PISMU Chief</option><option value="2.1">Planning Staff</option>
                                    <option value="">======= 3 ========</option>
                                    <option value="3">FAD Chief</option>
                                    <option value="3.1">HR Chief</option><option value="3.1.1">HR Staff</option>
                                    <option value="3.2">Finance Chief</option><option value="3.2.1">Finance Staff</option>
                                    <option value="3.3">Records Chief</option><option value="3.3.1">Records Staff</option>
                                    <option value="3.4">GSU Chief</option><option value="3.4.1">GSU Staff</option>
                                    <option value="3.5">Cashier</option>
                                    <option value="">======= 4 ========</option>
                                    <option value="4">RD</option> <option value="">======= 5 ========</option>
                                    <option value="">======= 6 ========</option> <option value="6">SecChief</option>
                                     <option value="">======= 7 ========</option>
                                    <option value="7">CPD Editor</option><option value="7.1">PCO Editor</option>
                                    <option value="7.2">HazPTT Editor</option><option value="7.3">GHG Editor</option>
                                    <option value="7.4">PTO/DP/PCO</option><option value="7.5">ECC Editor</option><option value="7.9">CPD</option>
                                     <option value="">======= 8 ========</option>
                                    <option value="8">EMED Editor</option><option value="8.1">WAQMS Editor</option>
                                    <option value="8.3">SMR/CMR</option>
                                    <option value="8.4">SWM Chief</option><option value="8.5.1">SWM Staff Palawan</option><option value="8.5.2">SWM Staff OrMin/Marinduque</option><option value="8.5.3">SWM Staff OcMin/Romblon</option>
                                    <option value="8.6">Air Quality Editor</option>
                                    <option value="8.9">EMED</option> <option value="">======= 9 ========</option>
                                    <option value="9">Legal Editor</option> <option value="">======= 10 ========</option>
                                    <option value="10">Case Handler</option>
                                  </select>
                                  <input type="text" class="form-control" name="ustat" value="1" hidden>
                                </div>
                                <div class="footer" style="text-align:right;">
                                   <button type="submit" class="btn btn-danger">Fire It Up!</button>
                                 </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--activate user-->

                    </tr>
                  <?php } ?>
                </tbody>
              </table>
              <!-- End user Table -->

              </div>
            </div>

            <div class="card" style="background-color:#565656;">
              <div class="card-body">
                <h5 class="card-title" id="cardtit" style="color:#ff6634;">Change Password</h5>

                <!-- user Table -->
                <table class="table table-dark table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Username</th>
                      <th scope="col">Password</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $fcnt=0;
                    foreach($resultcp1 as $row){ $fcnt++; ?>
                      <tr>
                        <th><?php echo $fcnt; ?></th><td><a href="" data-bs-toggle="modal" data-bs-target="#cpass" style="color:#ffaa34;"><?php echo $row->uname; ?></a></td><td title="<?php echo DateTime::createFromFormat('Y-m-d', $row->cpdat)->format('YMd'); ?> | <?php echo $row->cptim; ?>"><?php echo $row->upass; ?></td>

                        <!--cpass-->
                        <div class="modal fade" id="cpass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size:15px;" style="">
                          <div class="modal-dialog modal-sm modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header" style="background-color:#ffaa34;">
                                <h5 class="modal-title" id="exampleModalLabel"><b>Select Staff</b></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form method="post" action="<?php echo site_url('Auth/edcpass') ?>">
                                  <input type="text" name="cpid" value="<?php echo $row->cpid; ?>" hidden>
                                  <input type="text" name="upass" value="<?php echo $row->upass; ?>" hidden>
                                  <div class="col-md-12">
                                    <select class="form-control" name="userid">
                                      <option value="0">Click Here to Choose Staff</option>
                                      <?php foreach ($result3 as $row3) { ?>
                                        <option value="<?php echo $row3->userid; ?>"><?php echo $row3->uname; ?></option>
                                      <?php } ?>
                                    </select>
                                  </div>
                                  <div class="footer" style="text-align:right;">
                                     <button type="submit" class="btn btn-danger">Rip it!</button>
                                   </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--cpass-->

                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
                <!-- End user Table -->

                </div>
              </div>


            <div class="card" style="background-color:#565656;">
              <div class="card-body">
                <h5 class="card-title" id="cardtit" style="color:#ff6634;margin-bottom:-5px;">LILO</h5>

                <!-- user Table -->
                <table class="table datatable table-dark table-hover" id="lilotab">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Rights</th>
                      <th scope="col">Status</th>
                      <th scope="col">Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $fcnt=0;
                    foreach($result3 as $row3){ $fcnt++; ?>
                      <tr>
                        <th><?php echo $fcnt; ?></th><th><?php echo $row3->userid; ?></th><td><a href="" data-bs-toggle="modal" data-bs-target="#actuser<?php echo $row3->userid; ?>" style="color:#ffaa34;"><?php echo $row3->uname; ?></a></td><td><?php echo $row3->urights; ?></td>
                        <td>
                          <?php
                            if($row3->lilo==1){ echo "<i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>"; }else{
                              echo "<i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>";
                            }
                          ?>
                        </td>
                        <td>
                          <?php
                            echo $row3->lilodat;
                          ?>
                        </td>
                      </tr>

                      <!--change user rights-->
                      <div class="modal fade" id="actuser<?php echo $row3->userid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size:15px;" style="">
                        <div class="modal-dialog modal-sm modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color:#ffaa34;">
                              <h5 class="modal-title" id="exampleModalLabel"><b>Activate/Deactivate User <?php echo $row3->userid; ?>?</b></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="<?php echo site_url('Auth/chrights') ?>/<?php echo $row3->userid; ?>">
                                <input class="" type="text" class="form-control" name="userid" value="<?php echo $row3->userid; ?>" hidden>
                                <div class="col-md-12">
                                  <select class="form-control" name="urights">
                                    <option value="">Click Here to Choose User Rights</option>  <option value="">======= 1 ========</option>
                                    <option value="1">Overlord</option><option value="1.1">MIS Chief</option><option value="1.2">MIS Staff</option><option value="1.3">Kevin</option>
                                    <option value="1.5">ORD Staff</option>
                                    <option value="1.6">PEMU Occidental Mindoro Chief</option><option value="1.6.1">PEMU Occidental Mindoro Staff</option>
                                    <option value="1.7">PEMU Oriental Mindoro Chief</option><option value="1.7.1">PEMU Oriental Mindoro Staff</option>
                                    <option value="1.8">EMS  Marinduque Chief</option><option value="1.8.1">EMS  Marinduque Staff</option>
                                    <option value="1.9">PEMU Romblon Chief</option><option value="1.9.1">PEMU Romblon Staff</option>
                                    <option value="1.10">PEMU Palawan Chief</option><option value="1.10.1">PEMU Palawan Staff</option>
                                    <option value="">======= 2 ========</option>
                                    <option value="2">PISMU Chief</option><option value="2.1">Planning Staff</option>
                                     <option value="">======= 3 ========</option>
                                    <option value="3">Records Chief</option><option value="3.1">Records Staff</option>
                                    <option value="3.4">GSS</option>  <option value="">======= 4 ========</option>
                                    <option value="4">RD</option><option value="4.1">Cashier</option> <option value="">======= 5 ========</option>
                                    <option value="5">DivChief</option>  <option value="">======= 6 ========</option> <option value="6">SecChief</option>
                                     <option value="">======= 7 ========</option>
                                    <option value="7">CPD Editor</option><option value="7.1">PCO Editor</option>
                                    <option value="7.2">HazPTT Editor</option><option value="7.3">GHG Editor</option>
                                    <option value="7.4">PTO/DP/PCO</option><option value="7.5">ECC Editor</option><option value="7.9">CPD</option>
                                     <option value="">======= 8 ========</option>
                                    <option value="8">EMED Editor</option><option value="8.1">WAQMS Editor</option>
                                    <option value="8.3">SMR/CMR</option>
                                    <option value="8.4">SWM Chief</option><option value="8.5.1">SWM Staff Palawan</option><option value="8.5.2">SWM Staff OrMin/Marinduque</option><option value="8.5.3">SWM Staff OcMin/Romblon</option>
                                    <option value="8.6">Air Quality Editor</option>
                                    <option value="8.9">EMED</option> <option value="">======= 9 ========</option>
                                    <option value="9">Legal Editor</option> <option value="">======= 10 ========</option>
                                    <option value="10">Case Handler</option>
                                  </select>
                                  <input type="text" class="form-control" name="ustat" value="1" hidden>
                                </div>
                                <div class="footer" style="text-align:right;">
                                   <button type="submit" class="btn btn-danger">Fire It Up!</button>
                                 </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--change user rights -->

                    <?php } ?>
                  </tbody>
                </table>
                <!-- End user Table -->

                </div>
              </div>

        </div>

        <div class="col-lg-6">

          <div class="card" style="background-color:#565656;">
            <div class="card-body">
              <h5 class="card-title" id="cardtit" style="color:#ff6634;">Firm</h5>

              <!-- firm Table -->
              <table class="table table-dark table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">FID</th>
                    <th scope="col">Firm</th>
                    <th scope="col">Province</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $fcnt2=0;
                  foreach($result1 as $row){ $fcnt2++;
                    ?>
                    <tr>
                      <th><?php echo $fcnt2; ?></th><th><?php echo $row->fid; ?></th><td><a href="" data-bs-toggle="modal" data-bs-target="#edfirm<?php echo $row->fid; ?>" style="color:#ffaa34;"><?php echo $row->firm; ?></a></td><td><?php echo $row->fprov; ?></td>

                      <!--activate firm modal-->
                      <div class="modal fade" id="edfirm<?php echo $row->fid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size:15px;" style="">
                        <div class="modal-dialog modal-sm modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color:#ffaa34;">
                              <h5 class="modal-title" id="exampleModalLabel"><b>Activate FID <?php echo $row->fid; ?>?</b></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="<?php echo site_url('Auth/firmact') ?>/<?php echo $row->fid; ?>">
                                <input class="" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" hidden>
                                <div class="col-md-12" style="">
                                  <input type="text" class="form-control" name="fstat" value="1" hidden>
                                </div>
                                <div class="" style="text-align:right;">
                                   <button type="submit" class="btn btn-danger">Make It Happen!</button>
                                 </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--activate firm modal-->

                    </tr>
                  <?php } ?>
                </tbody>
              </table>
              <!-- End firm Table -->
            </div>
          </div>


          <div class="card" style="background-color:#565656;">
            <div class="card-body">
              <h5 class="card-title" id="cardtit" style="color:#ff6634;">Legal</h5>

              <!-- Legal Table -->
              <table class="table table-dark table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Track</th>
                    <th scope="col">Inspection Report Date</th>
                    <th scope="col">NOV Issue Date</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $fcnt2=0;
                  foreach($result2 as $row){ $fcnt2++;
                    ?>
                    <tr>
                      <th><?php echo $fcnt2; ?></th><th><a href="" data-bs-toggle="modal" data-bs-target="#edlgl<?php echo $row->cntlegal; ?>" style="color:#ffaa34;"><?php echo $row->track; ?></a></th><td><?php echo date('Y M d',$time = strtotime($row->datinsrep)); ?></td><td><?php echo date('Y M d',$time = strtotime($row->datissnov)); ?></td>

                      <!--activate firm modal-->
                      <div class="modal fade" id="edlgl<?php echo $row->cntlegal; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size:15px;" style="">
                        <div class="modal-dialog modal-sm modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color:#ffaa34;">
                              <h5 class="modal-title" id="exampleModalLabel"><b>Activate <?php echo $row->track; ?>?</b></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="<?php echo site_url('Auth/lglact') ?>/<?php echo $row->cntlegal; ?>">
                                <input class="" type="text" class="form-control" name="cntlegal" value="<?php echo $row->cntlegal; ?>" hidden>
                                <div class="col-md-12" style="">
                                  <input type="text" class="form-control" name="lglsta" value="1" hidden>
                                </div>
                                <div class="" style="text-align:right;">
                                   <button type="submit" class="btn btn-danger">Hit the Shot!</button>
                                 </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--activate firm modal-->

                    </tr>
                  <?php } ?>
                </tbody>
              </table>
              <!-- End Legal Table -->

            </div>
          </div>

          <div class="card" style="background-color:#565656;">
            <div class="card-body">
              <h5 class="card-title" id="cardtit" style="color:#ff6634;">PCO Deactivated</h5>

              <!-- PCO Table -->
              <table class="table table-dark table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">COA</th>
                    <th scope="col">PCO Name</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $cntpco=0;
                  foreach($result4 as $row4){ $cntpco++;
                    ?>
                    <tr>
                      <th><?php echo $cntpco; ?></th><th><?php echo $row4->coa; ?></th><td><a href="" data-bs-toggle="modal" data-bs-target="#edpco<?php echo $row4->pcocnt; ?>" style="color:#ffaa34;"><?php echo $row4->pcof; ?> <?php echo $row4->pcom; ?> <?php echo $row4->pcol; ?></a></td>

                      <!--activate firm modal-->
                      <div class="modal fade" id="edpco<?php echo $row4->pcocnt; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size:15px;" style="">
                        <div class="modal-dialog modal-sm modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color:#ffaa34;">
                              <h5 class="modal-title" id="exampleModalLabel"><b>Activate PCO?</b></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="<?php echo site_url('Auth/pcoact') ?>/<?php echo $row4->pcocnt; ?>">
                                <input class="" type="text" class="form-control" name="cntlegal" value="<?php echo $row4->pcocnt; ?>" hidden>
                                <div class="col-md-12" style="">
                                  <input type="text" class="form-control" name="pcosta" value="1" hidden>
                                </div>
                                <div class="" style="text-align:right;">
                                   <button type="submit" class="btn btn-danger">Bring it ON!</button>
                                 </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--activate firm modal-->

                    </tr>
                  <?php } ?>
                </tbody>
              </table>
              <!-- End PCO Table -->

              <h5 class="card-title" id="cardtit" style="color:#ff6634;padding-top:30px;">PCO ExDate for Checking</h5>
              <!-- PCO Table -->
              <table class="table table-dark table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">FID</th>
                    <th scope="col">Check</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $cntchck=0;
                  foreach($reschck as $chck){ $cntchck++;
                    ?>
                    <tr>
                      <th><?php echo $cntchck; ?></th><th><?php echo $chck->fid; ?></th><td><a href="" data-bs-toggle="modal" data-bs-target="#edpco<?php echo $chck->fid; ?>" style="color:#ffaa34;"><?php echo $chck->pcocheck; ?></a></td>

                      <!-- checked exdat -->
                      <div class="modal fade" id="edpco<?php echo $chck->fid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size:15px;" style="">
                        <div class="modal-dialog modal-sm modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color:#ffaa34;">
                              <h5 class="modal-title" id="exampleModalLabel"><b>Checked the ExDate?</b></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="<?php echo site_url('Auth/exdatchck') ?>/<?php echo $chck->fid; ?>">
                                <div class="col-md-12" style="">
                                  <input type="text" class="form-control" name="pcocheck" value="0" hidden>
                                </div>
                                <div class="" style="text-align:right;">
                                  <button type="submit" class="btn btn-danger">Push it!</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- checked exdat -->

                    </tr>
                  <?php } ?>
                </tbody>
              </table>
              <!-- End PCO Table -->

            </div>
          </div>


          <!-- sator -->
          <style media="screen"> .tenet{ display:none;} </style>

          <button type="button" name="button" onclick="sator();" style="background-color:black;">.</button>

          <div class="card tenet" id="arepo">
            <div class="card-body">
              <p class="card-title">SATOR</p>
              <p class="card-title" style="margin-top:-60px;">AREPO</p>
              <p class="card-title" style="margin-top:-60px;">TENET</p>
              <p class="card-title" style="margin-top:-60px;">OPERA</p>
              <p class="card-title" style="margin-top:-60px;">ROTAS</p>
              <a class="" href="https://md5-hash.softbaba.com/converter/md5-to-text/">Rotas</div>
            </div>
          </div>

          <script type="text/javascript">
            function sator() { $("#arepo").toggle("slow"); }
          </script>
          <!-- sator -->

        </div>
      </div>
    </section>

  </main><!-- End #main -->

<script type="text/javascript">
  $(document).ready(function () {
    $('#lilotab').DataTable();
  });
</script>
