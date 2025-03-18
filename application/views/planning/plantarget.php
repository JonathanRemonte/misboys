
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/1.12.1-jquery.dataTables.min.css"> -->

  <style media="screen">
    /* <!-- datab indi --> */
    tfoot input { width: 100%; padding: 3px; box-sizing: border-box; }
    /* id for adding */
    #targ{ color:000000; }
  </style>

  <!-- dropdown cascade address -->
  <?php $this->load->view('2shared/procitbar.php'); ?>

  <body>

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
          <a class="nav-link collapse" data-bs-target="#tables-nav" href="plan">
            <i class="bi bi-intersect"></i><span>Planning</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
            <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
              <?php
               if($_SESSION['urights']==1||$_SESSION['urights']==2.1||$_SESSION['urights']=='1.6'||$_SESSION['urights']=='1.6.1'||$_SESSION['urights']=='1.7'||$_SESSION['urights']=='1.7.1'||$_SESSION['urights']=='1.8'||$_SESSION['urights']=='1.8.1'||$_SESSION['urights']=='1.9'||$_SESSION['urights']=='1.9.1'
               ||$_SESSION['urights']=='1.10'||$_SESSION['urights']=='1.10.1'){ ?>
                 <li>
                   <a href="plantarget" class="active">
                     <i class="bi bi-people"></i><span>Target Settings</span>
                   </a>
                 </li>
               <?php } ?>
              <li>
                <a href="planfig" class="">
                  <i class="bi bi-people"></i><span>Figure</span>
                </a>
              </li>
              <li>
                <a href="planmoac" class="">
                  <i class="bi bi-people"></i><span>Accomplishments <?php echo '('.date('Y F').')'; ?></span>
                </a>
              </li>
              <li>
                <a href="planproac" class="">
                  <i class="bi bi-people"></i><span>Field Accomplishment</span>
                </a>
              </li>
            </ul>
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
            <?php
              foreach($result8 as $row8){ if($row8->foi>0){ ?> <div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;"> <span class="visually-hidden"></span> </div>
                <?php }else{ } } ?>
          </a>
        </li><!-- End isscon Page Nav -->

      </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
      <div class="pagetitle" style="">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4">
              <h1>Target Settings</h1>
            </div>
          </div>
        </div>
      </div>

      <style media="screen">
        table{ text-align: center; }
      </style>

      <section>

        <div class="col-md-12">
          <div class="row">

            <!-- ocmin -->
            <?php if($_SESSION['urights']==1||$_SESSION['urights']==2.1||$_SESSION['urights']==1.6||$_SESSION['urights']=='1.6.1'){ ?>
              <?php if($_SESSION['urights']==1.6||$_SESSION['urights']=='1.6.1'){ ?> <div class="col-lg-12" style="padding-left:25%;width:75%;"> <?php }else{ ?> <div class="col-lg-6"> <?php } ?>

              <div class="card" style="background-color: #FFFFE0">
                <div class="card-body">
                  <h5 class="card-title" style="">Occidental Mindoro</h5>

                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Staff</th>
                        <th>Set by Prov</th>
                        <th>Set by Planning</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $puscnt=0;
                        foreach ($plantar as $ptar){
                          if($ptar->usec=='PEMU Occidental Mindoro' && $ptar->urights!='1.6'){
                            $puscnt++; ?>
                            <tr>
                              <td><?php echo $puscnt; ?></td>
                              <td><a class="open-TargetEvents" data-id="prov" <?php if ($_SESSION['urights']==1.6||$_SESSION['urights']=='1'): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edocmintar<?php echo $ptar->userid; ?>" id="targ" title="Click to Edit Provincial Target">
                                  <?php echo $ptar->uname ?></a></td>
                              <td><a class="open-TargetEvents" data-id="plan" <?php if (($_SESSION['urights']==2.1||$_SESSION['urights']=='1') && ($ptar->provtar>0)): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edocmintar<?php echo $ptar->userid; ?>" id="targ" title="Click to Edit Target">
                                <?php echo $ptar->provtar; ?></a></td>
                              <td><?php if($ptar->plantar>0){ ?> <div style="color:green;font-weight:bold;"><?php echo $ptar->plantar; ?></div> <?php }else{ echo $ptar->plantar; } ?></td>
                            </tr>

                            <!-- ed ocmin target -->
                            <div class="modal fade" id="edocmintar<?php echo $ptar->userid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-sm modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header" style="background-color:#f8a532;">
                                    <h5 class="modal-title" id="exampleModalLabel"><b>Set target for</b></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form name="formprovtar" method="post" action="<?php echo site_url('Auth/edprovtar') ?>/<?php echo $ptar->userid; ?>">

                                      <input class="spechide" type="" name="varOne" id="eventId"/ hidden>

                                      <div class="" hidden>
                                        <input type="text" class="form-control" name="userid" value="<?php echo $ptar->userid; ?>"  required>
                                      </div>
                                      <div class="" style="margin-top:-10px;">
                                        <input type="text" class="form-control" name="uname" value="<?php echo $ptar->uname; ?>" tabindex="-1" required readonly>
                                      </div>
                                      <div class="col-md-6" style="padding-top:10px;padding-bottom:20px;">
                                        <input type="number" min="0" class="form-control" name="target" placeholder="" value="<?php echo $ptar->provtar; ?>" required>
                                      </div>
                                      <div class="footer" style="text-align:right;">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>

                      <?php } } ?>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
            <?php } ?>
            <!-- ocmin -->

            <!-- ormin -->
            <?php if($_SESSION['urights']==1||$_SESSION['urights']==2.1||$_SESSION['urights']==1.7||$_SESSION['urights']=='1.7.1'){ ?>
              <?php if($_SESSION['urights']==1.7||$_SESSION['urights']=='1.7.1'){ ?> <div class="col-lg-12" style="padding-left:25%;width:75%;"> <?php }else{ ?> <div class="col-lg-6"> <?php } ?>
              <div class="card" style="background-color: #E0FFFF">
                <div class="card-body">
                  <h5 class="card-title" style="">Oriental Mindoro</h5>

                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Staff</th>
                        <th>Set by Prov</th>
                        <th>Set by Planning</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $puscnt=0;
                        foreach ($plantar as $ptar){
                          if($ptar->usec=='PEMU Oriental Mindoro' && $ptar->urights!='1.7'){
                            $puscnt++; ?>
                            <tr>
                              <td><?php echo $puscnt; ?></td>
                              <td><a class="open-TargetEvents" data-id="prov" <?php if (($_SESSION['urights']==1.7||$_SESSION['urights']=='1') && ($ptar->plantar<=0)): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edormintar<?php echo $ptar->userid; ?>" id="targ" title="Click to Edit Provincial Target">
                                <?php echo $ptar->uname; ?></a></td>
                              <td><a class="open-TargetEvents" data-id="plan" <?php if (($_SESSION['urights']==2.1||$_SESSION['urights']=='1') && ($ptar->provtar>0)): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edormintar<?php echo $ptar->userid; ?>" id="targ" title="Click to Edit Planning Target">
                                <?php echo $ptar->provtar; ?></a></td>
                              <td><?php if($ptar->plantar>0){ ?> <div style="color:green;font-weight:bold;"><?php echo $ptar->plantar; ?></div> <?php }else{ echo $ptar->plantar; } ?></td>
                            </tr>

                            <!-- ed ormin target -->
                            <div class="modal fade" name="myModal" id="edormintar<?php echo $ptar->userid; ?>" tabindex="0" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-sm modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header" style="background-color:#f8a532;">
                                    <h5 class="modal-title" id="exampleModalLabel"><b>Set target for</b></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" tabindex="-1"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form name="formprovtar" method="post" action="<?php echo site_url('Auth/edprovtar') ?>/<?php echo $ptar->userid; ?>">

                                      <input class="spechide" type="" name="varOne" id="eventId"/ hidden>

                                      <div class="" hidden>
                                        <input type="text" class="form-control" name="userid" value="<?php echo $ptar->userid; ?>"  required>
                                      </div>
                                      <div class="" style="margin-top:-10px;">
                                        <input type="text" class="form-control" name="uname" value="<?php echo $ptar->uname; ?>" tabindex="-1" required readonly>
                                      </div>
                                      <div class="col-md-6" style="padding-top:10px;padding-bottom:20px;">
                                        <input type="number" min="0" class="form-control" name="target" placeholder="" value="<?php echo $ptar->provtar; ?>" required>
                                      </div>
                                      <div class="footer" style="text-align:right;">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- ed ormin target -->

                      <?php } } ?>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
            <?php } ?>
            <!-- ormin -->

            <!-- mar -->
            <?php if($_SESSION['urights']==1||$_SESSION['urights']==2.1||$_SESSION['urights']==1.8||$_SESSION['urights']=='1.8.1'){ ?>
              <?php if($_SESSION['urights']==1.8||$_SESSION['urights']=='1.8.1'){ ?> <div class="col-lg-12" style="padding-left:25%;width:75%;"> <?php }else{ ?> <div class="col-lg-6"> <?php } ?>
              <div class="card" style="background-color: #FFB6C1">
                <div class="card-body">
                  <h5 class="card-title" style="">Marinduque</h5>

                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Staff</th>
                        <th>Set by Prov</th>
                        <th>Set by Planning</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $puscnt=0;
                        foreach ($plantar as $ptar){
                          if($ptar->usec=='EMS  Marinduque'){
                            $puscnt++; ?>
                            <tr>
                              <td><?php echo $puscnt; ?></td>
                              <td><a class="open-TargetEvents" data-id="prov" <?php if (($_SESSION['urights']==1.8||$_SESSION['urights']=='1') && ($ptar->plantar<=0)): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edmartar<?php echo $ptar->userid; ?>" id="targ" title="Click to Edit Provincial Target">
                                <?php echo $ptar->uname; ?></a></td>
                              <td><a class="open-TargetEvents" data-id="plan" <?php if (($_SESSION['urights']==2.1||$_SESSION['urights']=='1') && ($ptar->provtar>0)): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edmartar<?php echo $ptar->userid; ?>" id="targ" title="Click to Edit Planning Target">
                                <?php echo $ptar->provtar; ?></a></td>
                              <td><?php if($ptar->plantar>0){ ?> <div style="color:green;font-weight:bold;"><?php echo $ptar->plantar; ?></div> <?php }else{ echo $ptar->plantar; } ?></td>
                            </tr>

                            <!-- ed mar target -->
                            <div class="modal fade" name="myModal" id="edmartar<?php echo $ptar->userid; ?>" tabindex="0" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-sm modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header" style="background-color:#f8a532;">
                                    <h5 class="modal-title" id="exampleModalLabel"><b>Set target for</b></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" tabindex="-1"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form name="formprovtar" method="post" action="<?php echo site_url('Auth/edprovtar') ?>/<?php echo $ptar->userid; ?>">

                                      <input class="spechide" type="" name="varOne" id="eventId"/ hidden>

                                      <div class="" hidden>
                                        <input type="text" class="form-control" name="userid" value="<?php echo $ptar->userid; ?>"  required>
                                      </div>
                                      <div class="" style="margin-top:-10px;">
                                        <input type="text" class="form-control" name="uname" value="<?php echo $ptar->uname; ?>" tabindex="-1" required readonly>
                                      </div>
                                      <div class="col-md-6" style="padding-top:10px;padding-bottom:20px;">
                                        <input type="number" min="0" class="form-control" name="target" placeholder="" value="<?php echo $ptar->provtar; ?>" required>
                                      </div>
                                      <div class="footer" style="text-align:right;">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- ed mar target -->

                      <?php } } ?>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
            <?php } ?>

            <!-- Romblon -->
            <?php if($_SESSION['urights']==1||$_SESSION['urights']==2.1||$_SESSION['urights']==1.9||$_SESSION['urights']=='1.9.1'){ ?>
              <?php if($_SESSION['urights']==1.9||$_SESSION['urights']=='1.9.1'){ ?> <div class="col-lg-12" style="padding-left:25%;width:75%;"> <?php }else{ ?> <div class="col-lg-6"> <?php } ?>
              <div class="card" style="background-color: #FFA07A">
                <div class="card-body">
                  <h5 class="card-title" style="">Romblon</h5>

                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Staff</th>
                        <th>Set by Prov</th>
                        <th>Set by Planning</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $puscnt=0;
                        foreach ($plantar as $ptar){
                          if($ptar->usec=='EMS  Romblon'){
                            $puscnt++; ?>
                            <tr>
                              <td><?php echo $puscnt; ?></td>
                              <td><a class="open-TargetEvents" data-id="prov" <?php if (($_SESSION['urights']==1.9||$_SESSION['urights']=='1') && ($ptar->plantar<=0)): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edromtar<?php echo $ptar->userid; ?>" id="targ" title="Click to Edit Provincial Target">
                                <?php echo $ptar->uname; ?></a></td>
                                <td><a class="open-TargetEvents" data-id="plan" <?php if (($_SESSION['urights']==2.1||$_SESSION['urights']=='1') && ($ptar->provtar>0)): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edromtar<?php echo $ptar->userid; ?>" id="targ" title="Click to Edit Planning Target">
                                  <?php echo $ptar->provtar; ?></a></td>
                              <td><?php if($ptar->plantar>0){ ?> <div style="color:green;font-weight:bold;"><?php echo $ptar->plantar; ?></div> <?php }else{ echo $ptar->plantar; } ?></td>
                            </tr>

                            <!-- ed rom target -->
                            <div class="modal fade" name="myModal" id="edromtar<?php echo $ptar->userid; ?>" tabindex="0" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-sm modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header" style="background-color:#f8a532;">
                                    <h5 class="modal-title" id="exampleModalLabel"><b>Set target for</b></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" tabindex="-1"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form name="formprovtar" method="post" action="<?php echo site_url('Auth/edprovtar') ?>/<?php echo $ptar->userid; ?>">

                                      <input class="spechide" type="" name="varOne" id="eventId"/ hidden>

                                      <div class="" hidden>
                                        <input type="text" class="form-control" name="userid" value="<?php echo $ptar->userid; ?>"  required>
                                      </div>
                                      <div class="" style="margin-top:-10px;">
                                        <input type="text" class="form-control" name="uname" value="<?php echo $ptar->uname; ?>" tabindex="-1" required readonly>
                                      </div>
                                      <div class="col-md-6" style="padding-top:10px;padding-bottom:20px;">
                                        <input type="number" min="0" class="form-control" name="target" placeholder="" value="<?php echo $ptar->provtar; ?>" required>
                                      </div>
                                      <div class="footer" style="text-align:right;">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- ed rom target -->

                      <?php } } ?>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
            <?php } ?>
            <!-- rom -->

            <!-- pal -->
            <?php if($_SESSION['urights']==1||$_SESSION['urights']==2.1||$_SESSION['urights']==1.10||$_SESSION['urights']=='1.10.1'){ ?>
              <?php if($_SESSION['urights']==1.10||$_SESSION['urights']=='1.10.1'){ ?> <div class="col-lg-12" style="padding-left:25%;width:75%;"> <?php }else{ ?> <div class="col-lg-6"> <?php } ?>
              <div class="card" style="background-color: #DDA0DD">
                <div class="card-body">
                  <h5 class="card-title" style="">Palawan</h5>

                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Staff</th>
                        <th>Set by Prov</th>
                        <th>Set by Planning</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $puscnt=0;
                        foreach ($plantar as $ptar){
                          if($ptar->usec=='PEMU Palawan' && $ptar->urights!='1.10'){
                            $puscnt++; ?>
                            <tr>
                              <td><?php echo $puscnt; ?></td>
                              <td><a class="open-TargetEvents" data-id="prov" <?php if (($_SESSION['urights']=='1.10'||$_SESSION['urights']=='1') && ($ptar->plantar<=0)): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edpaltar<?php echo $ptar->userid; ?>" id="targ" title="Click to Edit Provincial Target">
                                <?php echo $ptar->uname; ?></a></td>
                              <td><a class="open-TargetEvents" data-id="plan" <?php if (($_SESSION['urights']==2.1||$_SESSION['urights']=='1') && ($ptar->provtar>0)): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edpaltar<?php echo $ptar->userid; ?>" id="targ" title="Click to Edit Planning Target">
                                <?php echo $ptar->provtar; ?></a></td>
                              <td><?php if($ptar->plantar>0){ ?> <div style="color:green;font-weight:bold;"><?php echo $ptar->plantar; ?></div> <?php }else{ echo $ptar->plantar; } ?></td>
                            </tr>

                            <!-- ed pal target -->
                            <div class="modal fade" name="myModal" id="edpaltar<?php echo $ptar->userid; ?>" tabindex="0" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-sm modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header" style="background-color:#f8a532;">
                                    <h5 class="modal-title" id="exampleModalLabel"><b>Set target for</b></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" tabindex="-1"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form name="formprovtar" method="post" action="<?php echo site_url('Auth/edprovtar') ?>/<?php echo $ptar->userid; ?>">

                                      <input class="spechide" type="" name="varOne" id="eventId"/ hidden>

                                      <div class="" hidden>
                                        <input type="text" class="form-control" name="userid" value="<?php echo $ptar->userid; ?>"  required>
                                      </div>
                                      <div class="" style="margin-top:-10px;">
                                        <input type="text" class="form-control" name="uname" value="<?php echo $ptar->uname; ?>" tabindex="-1" required readonly>
                                      </div>
                                      <div class="col-md-6" style="padding-top:10px;padding-bottom:20px;">
                                        <input type="number" min="0" class="form-control" name="target" placeholder="" value="<?php echo $ptar->provtar; ?>" required>
                                      </div>
                                      <div class="footer" style="text-align:right;">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- ed pal target -->

                      <?php } } ?>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>

      </section>

    </main>

  </body>
</html>

  <script type="text/javascript">$(document).on("click", ".open-TargetEvents", function () {
     var eventId = $(this).data('id');
     $(".modal-body #eventId").val( eventId );
     $('#idHolder').html( eventId );
  });</script>

  <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
