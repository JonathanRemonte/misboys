<style media="screen">
  .qint{
    padding-bottom:10px;
  }
</style>

<?php if($_SESSION['urights']==1||$_SESSION['urights']==1.6||$_SESSION['urights']==1.7||
         $_SESSION['urights']==3.1||$_SESSION['urights']==3.4||$_SESSION['urights']==3.5||
         $_SESSION['urights']==4||
         $_SESSION['urights']==7.2||$_SESSION['urights']==7.3||$_SESSION['urights']==7.4||$_SESSION['urights']==7.5||
         $_SESSION['urights']==8.3||$_SESSION['urights']==8.4) { ?>

  <!-- bhive qcm -->
  <div class="col-12" id="">
    <div class="card" style="padding-bottom:6px;">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <h5 class="card-title"><a class="open-homeEvents" <?php if ($_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#addtask" style="color:black;">Client Queuing Module</a></h5>
          </div>
        </div>
        <div class="col-md-12" id="cqmdiv12">
          <div class="row">

            <!-- ecc -->
            <?php if($_SESSION['urights']==7.5||$_SESSION['urights']==1) { ?>
              <div class="col-md-6 qint">
                <!-- query -->
                <?php $ecccnt=0; foreach($resultq2 as $rowq2){ $ecccnt++; $eccid=$rowq2->qid; } ?>
                <!--button-->
                <?php if($ecccnt==0){ ?>
                  <a type="button" class="btn btn-outline-primary" style="width:100%;"><span style="font-size:20px;">ECC</span></a>
                <?php }else if($ecccnt>=1){ ?>
                  <!--client query-->
                  <a type="button" class="btn btn-outline-primary"
                    <?php if ($_SESSION['urights']==7.5||$_SESSION['urights']==1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $eccid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="text-decoration:none;width:100%;" >
                    <!-- spinner -->
                    <div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;"> <span class="visually-hidden"></span></div>
                    <!-- spinner -->
                    <span style="font-size:20px;">ECC</span>
                    <span class="badge bg-white text-danger" style="font-size:20px;"><?php echo $ecccnt; ?></span>
                  </a>

                <?php } ?>
              </div>
            <?php } ?>
            <!-- ecc -->

            <!-- cnc -->
            <?php if($_SESSION['urights']==7.5||$_SESSION['urights']==1) { ?>
              <div class="col-md-6 qint">
                <!-- query -->
                <?php $cnccnt=0; foreach($resultq3 as $rowq3){ $cnccnt++; $cncid=$rowq3->qid; } ?>
                <!--button-->
                <?php if($cnccnt==0){ ?>
                  <a type="button" class="btn btn-outline-primary" style="width:100%;"><span style="font-size:20px;">CNC </span></a>
                <?php }else if($cnccnt>=1){ ?>
                  <!--client query-->
                  <a type="button" class="btn btn-outline-primary"
                    <?php if ($_SESSION['urights']==7.5||$_SESSION['urights']==1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $cncid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="text-decoration:none;width:100%;">
                    <!-- spinner -->
                    <div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;"> <span class="visually-hidden"></span></div>
                    <!-- spinner -->
                    <span style="font-size:20px;">CNC </span>
                    <span class="badge bg-white text-danger" style="font-size:20px;"><?php echo $cnccnt; ?></span>
                  </a>
                <?php } ?>
              </div>
            <?php } ?>
            <!-- cnc -->

            <!-- pco -->
            <?php if($_SESSION['urights']==7.4||$_SESSION['urights']==1) { ?>
              <div class="col-md-6 qint">
                <!-- query -->
                <?php $pcocnt=0; foreach($resultq31 as $rowq31){ $pcocnt++; $pcoid=$rowq31->qid; } ?>
                <!--button-->
                <?php if($pcocnt==0){ ?>
                  <a type="button" class="btn btn-outline-primary" style="width:100%;"><span style="font-size:20px;">PCO </span></a>
                <?php }else if($pcocnt>=1){ ?>
                  <!--client query-->
                  <a type="button" class="btn btn-outline-primary"
                    <?php if ($_SESSION['urights']==7.4||$_SESSION['urights']==1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $pcoid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="text-decoration:none;width:100%;">
                    <!-- spinner -->
                    <div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;"> <span class="visually-hidden"></span></div>
                    <!-- spinner -->
                    <span style="font-size:20px;">PCO </span>
                    <span class="badge bg-white text-danger" style="font-size:20px;"><?php echo $pcocnt; ?></span>
                  </a>
                <?php } ?>
              </div>
            <?php } ?>
            <!-- pco -->

            <!-- hwm -->
            <?php if($_SESSION['urights']==7.2||$_SESSION['urights']==7.3||$_SESSION['urights']==1) { ?>
              <div class="col-md-6 qint">
                <!-- query -->
                <?php $hwmcnt=0; foreach($resultq4 as $rowq4){ $hwmcnt++; $hwmid=$rowq4->qid; } ?>
                <!--button-->
                <?php if($hwmcnt==0){ ?>
                  <a type="button" class="btn btn-outline-primary" style="width:100%;"><span style="font-size:20px;">HWM </span></a>
                <?php }else if($hwmcnt>=1){ ?>
                  <!--client query-->
                  <a type="button" class="btn btn-outline-primary"
                    <?php if ($_SESSION['urights']==7.2||$_SESSION['urights']==7.3||$_SESSION['urights']==1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $hwmid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="text-decoration:none;width:100%;">
                    <!-- spinner -->
                    <div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;"> <span class="visually-hidden"></span></div>
                    <!-- spinner -->
                    <span style="font-size:20px;">HWM </span>
                    <span class="badge bg-white text-danger" style="font-size:20px;"><?php echo $hwmcnt; ?></span>
                  </a>
                <?php } ?>
              </div>
            <?php } ?>
            <!-- hwm -->

            <!-- pto -->
            <?php if($_SESSION['urights']==7.4||$_SESSION['urights']==1) { ?>
              <div class="col-md-6 qint">
                <!-- query -->
                <?php $ptocnt=0; foreach($resultq5 as $rowq5){ $ptocnt++; $ptoid=$rowq5->qid; } ?>
                <!--button-->
                <?php if($ptocnt==0){ ?>
                  <a type="button" class="btn btn-outline-primary" style="width:100%;"><span style="font-size:20px;">PTO </span></a>
                <?php }else if($ptocnt>=1){ ?>
                  <!--client query-->
                  <a type="button" class="btn btn-outline-primary"
                    <?php if ($_SESSION['urights']==7.4||$_SESSION['urights']==1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $ptoid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="text-decoration:none;width:100%;">
                    <!-- spinner -->
                    <div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;"> <span class="visually-hidden"></span></div>
                    <!-- spinner -->
                    <span style="font-size:20px;">PTO </span>
                    <span class="badge bg-white text-danger" style="font-size:20px;"><?php echo $ptocnt; ?></span>
                  </a>
                <?php } ?>
              </div>
            <?php } ?>
            <!-- pto -->

            <!-- dp -->
            <?php if($_SESSION['urights']==7.4||$_SESSION['urights']==1) { ?>
              <div class="col-md-6 qint">
                <!-- query -->
                <?php $dpcnt=0; foreach($resultq6 as $rowq6){ $dpcnt++; $dpid=$rowq6->qid; } ?>
                <!--button-->
                <?php if($dpcnt==0){ ?>
                  <a type="button" class="btn btn-outline-primary" style="width:100%;"><span style="font-size:20px;">DP </span></a>
                <?php }else if($dpcnt>=1){ ?>
                  <!--client query-->
                  <a type="button" class="btn btn-outline-primary"
                    <?php if ($_SESSION['urights']==7.4||$_SESSION['urights']==1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $dpid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="text-decoration:none;width:100%;">
                    <!-- spinner -->
                    <div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;"> <span class="visually-hidden"></span></div>
                    <!-- spinner -->
                    <span style="font-size:20px;">DP </span>
                    <span class="badge bg-white text-danger" style="font-size:20px;"><?php echo $dpcnt; ?></span>
                  </a>
                <?php } ?>
              </div>
            <?php } ?>
            <!-- dp -->

            <!-- chem -->
            <?php if($_SESSION['urights']==7.2||$_SESSION['urights']==7.3||$_SESSION['urights']==1) { ?>
              <div class="col-md-6 qint">
                <!-- query -->
                <?php $checnt=0; foreach($resultq61 as $rowq61){ $checnt++; $cheid=$rowq61->qid; } ?>
                <!--button-->
                <?php if($checnt==0){ ?>
                  <a type="button" class="btn btn-outline-primary" style="width:100%;"><span style="font-size:20px;">Chemicals </span></a>
                <?php }else if($checnt>=1){ ?>
                  <!--client query-->
                  <a type="button" class="btn btn-outline-primary"
                    <?php if ($_SESSION['urights']==7.2||$_SESSION['urights']==7.3||$_SESSION['urights']==1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $cheid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="text-decoration:none;width:100%;">
                    <!-- spinner -->
                    <div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;"> <span class="visually-hidden"></span></div>
                    <!-- spinner -->
                    <span style="font-size:20px;">Chemicals </span>
                    <span class="badge bg-white text-danger" style="font-size:20px;"><?php echo $checnt; ?></span>
                  </a>
                <?php } ?>
              </div>
            <?php } ?>
            <!-- chem -->

            <!-- swm -->
            <?php if($_SESSION['urights']==8.4||$_SESSION['urights']==1) { ?>
              <div class="col-md-6 qint">
                <!-- query -->
                <?php $swmcnt=0; foreach($resultq9 as $rowq9){ $swmcnt++; $swmid=$rowq9->qid; } ?>
                <!--button-->
                <?php if($swmcnt==0){ ?>
                  <a type="button" class="btn btn-outline-primary" style="width:100%;"><span style="font-size:20px;">SWM </span></a>
                <?php }else if($swmcnt>=1){ ?>
                  <!--client query-->
                  <a type="button" class="btn btn-outline-primary"
                    <?php if ($_SESSION['urights']==8.4||$_SESSION['urights']==1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $swmid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="text-decoration:none;width:100%;">
                    <!-- spinner -->
                    <div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;"> <span class="visually-hidden"></span></div>
                    <!-- spinner -->
                    <span style="font-size:20px;">SWM </span>
                    <span class="badge bg-white text-danger" style="font-size:20px;"><?php echo $swmcnt; ?></span>
                  </a>
                <?php } ?>
              </div>
            <?php } ?>
            <!-- swm -->

            <!-- smr -->
            <?php if($_SESSION['urights']==8.3||$_SESSION['urights']==1) { ?>
              <div class="col-md-6 qint">
                <!-- query -->
                <?php $smrcnt=0; foreach($resultq7 as $rowq7){ $smrcnt++; $smrid=$rowq7->qid; } ?>
                <!--button-->
                <?php if($smrcnt==0){ ?>
                  <a type="button" class="btn btn-outline-primary" style="width:100%;"><span style="font-size:20px;">SMR </span></a>
                <?php }else if($smrcnt>=1){ ?>
                  <!--client query-->
                  <a type="button" class="btn btn-outline-primary"
                    <?php if ($_SESSION['urights']==8.3||$_SESSION['urights']==1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $smrid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="text-decoration:none;width:100%;">
                    <!-- spinner -->
                    <div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;"> <span class="visually-hidden"></span></div>
                    <!-- spinner -->
                    <span style="font-size:20px;">SMR </span>
                    <span class="badge bg-white text-danger" style="font-size:20px;"><?php echo $smrcnt; ?></span>
                  </a>
                <?php } ?>
              </div>
            <?php } ?>
            <!-- smr -->

            <!-- cmr -->
            <?php if($_SESSION['urights']==8.3||$_SESSION['urights']==1) { ?>
              <div class="col-md-6 qint">
                <!-- query -->
                <?php $cmrcnt=0; foreach($resultq8 as $rowq8){ $cmrcnt++; $cmrid=$rowq8->qid; } ?>
                <!--button-->
                <?php if($cmrcnt==0){ ?>
                  <a type="button" class="btn btn-outline-primary" style="width:100%;"><span style="font-size:20px;">CMR </span></a>
                <?php }else if($cmrcnt>=1){ ?>
                  <!--client query-->
                  <a type="button" class="btn btn-outline-primary"
                    <?php if ($_SESSION['urights']==8.3||$_SESSION['urights']==1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $cmrid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="text-decoration:none;width:100%;">
                    <!-- spinner -->
                    <div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;"> <span class="visually-hidden"></span></div>
                    <!-- spinner -->
                    <span style="font-size:20px;">CMR </span>
                    <span class="badge bg-white text-danger" style="font-size:20px;"><?php echo $cmrcnt; ?></span>
                  </a>
                <?php } ?>
              </div>
            <?php } ?>
            <!-- cmr -->

            <!-- ord -->
            <?php if($_SESSION['urights']==4||$_SESSION['urights']==1) { ?>
              <div class="col-md-6 qint">
                <!-- query -->
                <?php $ordcnt=0; foreach($resultq1 as $rowq1){ $ordcnt++; $ordid=$rowq1->qid; } ?>
                <!--button-->
                <?php if($ordcnt==0){ ?>
                  <a type="button" class="btn btn-outline-primary" style="width:100%;"><span style="font-size:20px;">ORD </span></a>
                <?php }else if($ordcnt>=1){ ?>
                  <!--client query-->
                  <a type="button" class="btn btn-outline-primary"
                    <?php if ($_SESSION['urights']==1.6||$_SESSION['urights']==1||$_SESSION['urights']==4): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $ordid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="text-decoration:none;width:100%;">
                    <!-- spinner -->
                    <div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;"> <span class="visually-hidden"></span></div>
                    <!-- spinner -->
                    <span style="font-size:20px;">ORD </span>
                    <span class="badge bg-white text-danger" style="font-size:20px;"><?php echo $ordcnt; ?></span>
                  </a>
                <?php } ?>
              </div>
            <?php } ?>
            <!-- ord -->

            <!-- leg -->
            <?php if($_SESSION['urights']==1.7||$_SESSION['urights']==1) { ?>
              <div class="col-md-6 qint">
                <!-- query -->
                <?php $legcnt=0; foreach($resultq12 as $rowq12){ $legcnt++; $legid=$rowq12->qid; } ?>
                <!--button-->
                <?php if($legcnt==0){ ?>
                  <a type="button" class="btn btn-outline-primary" style="width:100%;"><span style="font-size:20px;">Legal </span></a>
                <?php }else if($legcnt>=1){ ?>
                  <!--client query-->
                  <a type="button" class="btn btn-outline-primary"
                    <?php if ($_SESSION['urights']==1.7||$_SESSION['urights']==1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $legid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="text-decoration:none;width:100%;">
                    <!-- spinner -->
                    <div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;"> <span class="visually-hidden"></span></div>
                    <!-- spinner -->
                    <span style="font-size:20px;">Legal </span>
                    <span class="badge bg-white text-danger" style="font-size:20px;"><?php echo $legcnt; ?></span>
                  </a>
                <?php } ?>
              </div>
            <?php } ?>
            <!-- leg -->

            <!-- hr -->
            <?php if($_SESSION['urights']==1) { ?>
              <div class="col-md-6 qint">
                <!-- query -->
                <?php $hrcnt=0; foreach($resqhr as $rowqhr){ $hrcnt++; $hrid=$rowqhr->qid; } ?>
                <!--button-->
                <?php if($hrcnt==0){ ?>
                  <a type="button" class="btn btn-outline-primary" style="width:100%;"><span style="font-size:20px;">HR </span></a>
                <?php }else if($hrcnt>=1){ ?>
                  <!--client query-->
                  <a type="button" class="btn btn-outline-primary"
                    <?php if ($_SESSION['urights']==1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $hrid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="text-decoration:none;width:100%;">
                    <!-- spinner -->
                    <div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;"> <span class="visually-hidden"></span></div>
                    <!-- spinner -->
                    <span style="font-size:20px;">HR </span>
                    <span class="badge bg-white text-danger" style="font-size:20px;"><?php echo $hrcnt; ?></span>
                  </a>
                <?php } ?>
              </div>
            <?php } ?>
            <!-- hr -->

            <!-- cas -->
            <?php if($_SESSION['urights']==3.5||$_SESSION['urights']==1) { ?>
              <div class="col-md-6 qint">
                <!-- query -->
                <?php $cascnt=0; foreach($resultq10 as $rowq10){ $cascnt++; $casid=$rowq10->qid; } ?>
                <!--button-->
                <?php if($cascnt==0){ ?>
                  <a type="button" class="btn btn-outline-primary" style="width:100%;"><span style="font-size:20px;">Cashier </span></a>
                <?php }else if($cascnt>=1){ ?>
                  <!--client query-->
                  <a type="button" class="btn btn-outline-primary"
                    <?php if ($_SESSION['urights']==3.5||$_SESSION['urights']==1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $casid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="text-decoration:none;width:100%;">
                    <!-- spinner -->
                    <div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;"> <span class="visually-hidden"></span></div>
                    <!-- spinner -->
                    <span style="font-size:20px;">Cashier </span>
                    <span class="badge bg-white text-danger" style="font-size:20px;"><?php echo $cascnt; ?></span>
                  </a>
                <?php } ?>
              </div>
            <?php } ?>
            <!-- cas -->

            <!-- rec -->
            <?php if($_SESSION['urights']==3.1||$_SESSION['urights']==1) { ?>
              <div class="col-md-6 qint">
                <!-- query -->
                <?php $reccnt=0; foreach($resultq11 as $rowq11){ $reccnt++; $recid=$rowq11->qid; } ?>
                <!--button-->
                <?php if($reccnt==0){ ?>
                  <a type="button" class="btn btn-outline-primary" style="width:100%;"><span style="font-size:20px;">Records </span></a>
                <?php }else if($reccnt>=1){ ?>
                  <!--client query-->
                  <a type="button" class="btn btn-outline-primary"
                    <?php if ($_SESSION['urights']==3.1||$_SESSION['urights']==1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $recid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="text-decoration:none;width:100%;">
                    <!-- spinner -->
                    <div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;"> <span class="visually-hidden"></span></div>
                    <!-- spinner -->
                    <span style="font-size:20px;">Records </span>
                    <span class="badge bg-white text-danger" style="font-size:20px;"><?php echo $reccnt; ?></span>
                  </a>
                <?php } ?>
              </div>
            <?php } ?>
            <!-- rec -->

            <!-- gsu -->
            <?php if($_SESSION['urights']==3.4||$_SESSION['urights']==1) { ?>
              <div class="col-md-6 qint">
                <!-- query -->
                <?php $gsscnt=0; foreach($resultq13 as $rowq13){ $gsscnt++; $gssid=$rowq13->qid; } ?>
                <!--button-->
                <?php if($gsscnt==0){ ?>
                  <a type="button" class="btn btn-outline-primary" style="width:100%;"><span style="font-size:20px;">GSU </span></a>
                <?php }else if($gsscnt>=1){ ?>
                  <!--client query-->
                  <a type="button" class="btn btn-outline-primary"
                    <?php if ($_SESSION['urights']==3.4||$_SESSION['urights']==1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $gssid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="text-decoration:none;width:100%;">
                    <!-- spinner -->
                    <div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;"> <span class="visually-hidden"></span></div>
                    <!-- spinner -->
                    <span style="font-size:20px;">GSU </span>
                    <span class="badge bg-white text-danger" style="font-size:20px;"><?php echo $gsscnt; ?></span>
                  </a>
                <?php } ?>
              </div>
            <?php } ?>
            <!-- gsu -->

            <!-- mis -->
            <?php if($_SESSION['urights']==1) { ?>
              <div class="col-md-6">
                <!-- query -->
                <?php $miscnt=0; foreach($resultm1 as $rowm1){ $miscnt++; $misid=$rowm1->qid; } ?>
                <!--button-->
                <?php if($miscnt==0){ ?>
                  <a type="button" class="btn btn-outline-primary" style="width:100%;"><span style="font-size:20px;">MIS </span></a>
                <?php }else if($miscnt>=1){ ?>
                  <!--client query-->
                  <a type="button" class="btn btn-outline-primary"
                    <?php if ($_SESSION['urights']==1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $misid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="color:red;text-decoration:none;width:100%;">
                    <!-- spinner -->
                    <div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;"> <span class="visually-hidden"></span></div>
                    <!-- spinner -->
                    <span style="font-size:20px;">MIS </span>
                    <span class="badge bg-white text-danger" style="font-size:20px;"><?php echo $miscnt; ?></span>
                  </a>
                <?php } ?>
              </div>
            <?php } ?>
            <!-- mis -->

            <!--staff attending-->
            <?php foreach ($resulthof2 as $rowh2) {
              if($rowh2->count2==0){ }else{ ?>
                <div class="col-md-12" style="margin-bottom:-5px;padding-top:25px;">
                  <h5>Staff Attending Client</h5>
                  <div class="row">
                    <div class="col-md-12">
                      <?php $qcnt=0;
                        foreach ($resultq101 as $rowq101){ $qcnt++; echo '<span style="font-weight:bold;">'.$qcnt.') </span>'; ?>
                        <span style="font-weight:bold;">
                          <!-- cancel attend client -->
                          <a <?php if ($_SESSION['uname']==$rowq101->qestaff||$_SESSION['urights']==1): ?> href="<?php echo site_url('Auth/edunque') ?>/<?php echo $rowq101->qid; ?>" <?php endif; ?> style="color:green;text-decoration:none;" >
                            <?php echo ucwords($rowq101->qestaff).' >>> '.$rowq101->qstub.' >>> '.$rowq101->qspec; ?>...
                          </a>
                          <a <?php if ($_SESSION['uname']==$rowq101->qestaff||$_SESSION['urights']==1): ?> href="<?php echo site_url('Auth/edattndd') ?>/<?php echo $rowq101->qid; ?>" <?php endif; ?> style="text-decoration:none;width:100%;" title="If Client failed to fill up the Survey Form."> Attended?
                          </a> <br>
                        </span>
                      <?php } ?>
                    </div>
                  </div>
                </div>
            <?php  } } ?><!-- hof2 -->
            <!--staff attending-->

          </div>
        </div>
      </div><!-- card-body -->
    </div>
  </div>

<?php }else{} ?>
