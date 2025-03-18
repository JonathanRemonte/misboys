<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta http-equiv="refresh" content="10" />
    <!-- <meta charset="utf-8"> -->
    <title>4BHive</title>
    <!-- <link rel="icon" href="<?php echo base_url(); ?>assets/img/4BHiveLogo1.png" type="image/icon type"> -->

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <!--fa-->
    <script src="<?php echo base_url(); ?>assets/js/5.0.6-fa-all.js"></script>

    <style media="screen"> .hqnum{ font-size:55px;margin-top:-18px; }
      #boxes{ height:180px;padding-top:35px; }
    </style>

  </head>
  <!-- ======= Sidebar ======= -->
<body style="background-image: linear-gradient(to bottom right, #68BBE3, #9bd6ba);">

  <main id="main" class="main">

    <section class="section">

      <div id="chmcount"></div>

      <div id="queaudio">
        <?php
         foreach ($resultchm as $rowQC) {
           if($rowQC->qid>=1){ ?>
             <audio style="" controls autoplay><source src="<?php echo base_url(); ?>assets/audio/birdchime3.mp3" type="audio/mpeg"></audio>
        <?php }else{} } ?>
      </div>

      <div class="row" style="width:96%;position:absolute;top:8%;left:3%;">
        <div class="col-md-12">

          <!-- card -->
          <div class="card">
            <div class="card-body">
              <div class="col-md-12">
                    <h3 class="card-title" style="text-align:center;padding-bottom:8px;">CLIENT QUEUING</h3>
              </div>

              <div class="col-md-12">
                <div class="row" style="padding-bottom:25px;">

                  <!-- ecc -->
                  <div class="col-md-2">
                    <!-- spinner -->
                    <?php $ecccnt=0; foreach($resultq2 as $rowq2){ $ecccnt++; $eccid=$rowq2->qid; } ?>
                    <?php if($ecccnt!=0){ ?><div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;margin-bottom:-20px;"> <span class="visually-hidden"></span></div><?php }else{} ?>
                    <div class="card-body" id="boxes" style="text-align:center;background:#f5c5b8;">
                      <h1 class="card-title">ECC</h1>
                      <!-- que -->
                      <?php if($ecccnt==0){ ?><h1 class="hqnum" style="color:red;"><span id="ecccount"><?php echo $ecccnt; ?></span></h1><?php }else if($ecccnt>=1){ ?>
                          <h1 class="hqnum"><a <?php if ($_SESSION['urights']==1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $eccid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="color:red;text-decoration:none;" id="ecccnt"><?php echo $ecccnt; ?></a></h1>
                      <?php } ?>
                    </div>
                  </div>

                  <!-- cnc -->
                  <div class="col-md-2">
                    <!-- spinner -->
                    <?php $cnccnt=0; foreach($resultq3 as $rowq3){ $cnccnt++; $cncid=$rowq3->qid; } ?>
                    <?php if($cnccnt!=0){ ?><div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;margin-bottom:-20px;"> <span class="visually-hidden"></span></div><?php }else{} ?>
                    <div class="card-body" id="boxes" style="text-align:center;background: #ffcab8;">
                      <h1 class="card-title">CNC</h1>
                      <!-- que -->
                      <?php if($cnccnt==0){ ?><h1 class="hqnum" style="color:red;"><span id="cnccount"><?php echo $cnccnt; ?></span></h1><?php }else if($cnccnt>=1){ ?>
                          <h1 class="hqnum"><a <?php if ($_SESSION['urights']==1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $cncid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="color:red;text-decoration:none;" id="cnccount"><?php echo $cnccnt; ?></a></h1>
                      <?php } ?>
                    </div>
                  </div>

                  <!-- pco -->
                  <div class="col-md-2">
                    <!-- spinner -->
                    <?php $pcocnt=0; foreach($resultq31 as $rowq31){ $pcocnt++; $pcoid=$rowq31->qid; } ?>
                    <?php if($pcocnt!=0){ ?><div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;margin-bottom:-20px;"> <span class="visually-hidden"></span></div><?php }else{} ?>
                    <div class="card-body" id="boxes" style="text-align:center;background: #a6e4f0;">
                      <h1 class="card-title">PCO</h1>
                      <!-- que -->
                      <?php if($pcocnt==0){ ?><h1 class="hqnum" style="color:red;"><span id="pcocount"><?php echo $pcocnt; ?></span></h1><?php }else if($pcocnt>=1){ ?>
                          <h1 class="hqnum"><a <?php if ($_SESSION['urights']==1||$_SESSION['urights']==7.4||$_SESSION['urights']==7.1||$_SESSION['urights']==6.1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $pcoid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="color:red;text-decoration:none;" id="pcocount"><?php echo $pcocnt; ?></a></h1>
                      <?php } ?>
                    </div>
                  </div>

                  <!-- hwm -->
                  <div class="col-md-2">
                    <!-- spinner -->
                    <?php $hwmcnt=0; foreach($resultq4 as $rowq4){ $hwmcnt++; $hwmid=$rowq4->qid; } ?>
                    <?php if($hwmcnt!=0){ ?><div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;margin-bottom:-20px;"> <span class="visually-hidden"></span></div><?php }else{} ?>
                    <div class="card-body" id="boxes" style="text-align:center;background: #80ddf0;">
                      <h1 class="card-title">HWM</h1>
                      <!-- que -->
                      <?php if($hwmcnt==0){ ?><h1 class="hqnum" style="color:red;"><span id="hwmcount"><?php echo $hwmcnt; ?></span></h1><?php }else if($hwmcnt>=1){ ?>
                          <h1 class="hqnum"><a <?php if ($_SESSION['urights']==1||$_SESSION['urights']==7.2||$_SESSION['urights']==7.3): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $hwmid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="color:red;text-decoration:none;" id="hwmcount"><?php echo $hwmcnt; ?></a></h1>
                      <?php } ?>
                    </div>
                  </div>

                  <!-- pto -->
                  <div class="col-md-2">
                    <!-- spinner -->
                    <?php $ptocnt=0; foreach($resultq5 as $rowq5){ $ptocnt++; $ptoid=$rowq5->qid; } ?>
                    <?php if($ptocnt!=0){ ?><div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;margin-bottom:-20px;"> <span class="visually-hidden"></span></div><?php }else{} ?>
                    <div class="card-body" id="boxes" style="text-align:center;background: #c0ebc7;">
                      <h1 class="card-title">PTO</h1>
                      <!-- que -->
                      <?php if($ptocnt==0){ ?><h1 class="hqnum" style="color:red;"><span id="ptocount"><?php echo $ptocnt; ?></span></h1><?php }else if($ptocnt>=1){ ?>
                          <h1 class="hqnum"><a <?php if ($_SESSION['urights']==1||$_SESSION['urights']==7.4||$_SESSION['urights']==7.1||$_SESSION['urights']==6.1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $ptoid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="text-decoration:none;" id="ptocount"><?php echo $ptocount; ?></a></h1>
                      <?php } ?>
                    </div>
                  </div>

                  <!-- dp -->
                  <div class="col-md-2">
                    <!-- spinner -->
                    <?php $dpcnt=0; foreach($resultq6 as $rowq6){ $dpcnt++; $dpid=$rowq6->qid; } ?>
                    <?php if($dpcnt!=0){ ?><div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;margin-bottom:-20px;"> <span class="visually-hidden"></span></div><?php }else{} ?>
                    <div class="card-body" id="boxes" style="text-align:center;background: #a8eab4;">
                      <h1 class="card-title">DP</h1>
                      <!-- que -->
                      <?php if($dpcnt==0){ ?><h1 class="hqnum" style="color:red;"><span id="dpcount"><?php echo $dpcnt; ?></span></h1><?php }else if($dpcnt>=1){ ?>
                          <h1 class="hqnum"><a <?php if ($_SESSION['urights']==1||$_SESSION['urights']==7.4||$_SESSION['urights']==7.1||$_SESSION['urights']==6.1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $dpid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="color:red;text-decoration:none;" id="dpcount"><?php echo $dpcnt; ?></a></h1>
                      <?php } ?>
                    </div>
                  </div>
                </div><!-- row -->

                <div class="row" style="padding-bottom:25px;">
                  <!-- che -->
                  <div class="col-md-2">
                    <!-- spinner -->
                    <?php $checnt=0; foreach($resqche as $rowqch){ $checnt++; $cheid=$rowqch->qid; } ?>
                    <?php if($checnt!=0){ ?><div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;margin-bottom:-20px;"> <span class="visually-hidden"></span></div><?php }else{} ?>
                    <div class="card-body" id="boxes" style="text-align:center;background: #FFBFD9;">
                      <h1 class="card-title">Chemicals</h1>
                      <!-- que -->
                      <?php if($checnt==0){ ?><h1 class="hqnum" style="color:red;"><span id="checount"><?php echo $checnt; ?></span></h1><?php }else if($checnt>=1){ ?>
                          <h1 class="hqnum"><a <?php if ($_SESSION['urights']==1||$_SESSION['urights']==8.3): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $cheid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="color:red;text-decoration:none;" id="checount"><?php echo $checnt; ?></a></h1>
                      <?php } ?>
                    </div>
                  </div>

                  <!-- $$$ -->
                  <div class="col-md-2">
                    <!-- spinner -->
                    <div class="card-body" style="text-align:center;background: #f5bfde;height:82%;">
                      <h1 class="card-title" id="boxes" style="color:#f5bfde;">$$$</h1>
                      <!-- <h1 class="hqnum" style="color:#f5bfde;">#</h1> -->
                    </div>
                  </div>

                  <!-- swm -->
                  <div class="col-md-2">
                    <!-- spinner -->
                    <?php $swmcnt=0; foreach($resultq9 as $rowq9){ $swmcnt++; $swmid=$rowq9->qid; } ?>
                    <?php if($swmcnt!=0){ ?><div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;margin-bottom:-20px;"> <span class="visually-hidden"></span></div><?php }else{} ?>
                    <div class="card-body" id="boxes" style="text-align:center;background: #ffd3dd;">
                      <h1 class="card-title">SWM</h1>
                      <!-- que -->
                      <?php if($swmcnt==0){ ?><h1 class="hqnum" style="color:red;"><span id="swmcount"><?php echo $swmcnt; ?></span></h1><?php }else if($swmcnt>=1){ ?>
                          <h1 class="hqnum"><a <?php if ($_SESSION['urights']==8.4): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $swmid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="color:red;text-decoration:none;" id="swmcnt"><?php echo $swmcnt; ?></a></h1>
                      <?php } ?>
                    </div>
                  </div>

                  <!-- cas -->
                  <div class="col-md-2">
                    <!-- spinner -->
                    <?php $smrcnt=0; foreach($resultq7 as $rowq7){ $smrcnt++; $smrid=$rowq7->qid; } ?>
                    <?php if($smrcnt!=0){ ?><div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;margin-bottom:-20px;"> <span class="visually-hidden"></span></div><?php }else{} ?>
                    <div class="card-body" id="boxes" style="text-align:center;background: #ffb9c9;">
                      <h1 class="card-title">SMR</h1>
                      <!-- que -->
                      <?php if($smrcnt==0){ ?><h1 class="hqnum" style="color:red;"><span id="smrcount"><?php echo $smrcnt; ?></span></h1><?php }else if($smrcnt>=1){ ?>
                          <h1 class="hqnum"><a <?php if ($_SESSION['urights']==1||$_SESSION['urights']==8.3): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $smrid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="color:red;text-decoration:none;" id="smrcount"><?php echo $smrcnt; ?></a></h1>
                      <?php } ?>
                    </div>
                  </div>

                  <!-- rec -->
                  <div class="col-md-2">
                    <!-- spinner -->
                    <?php $cmrcnt=0; foreach($resultq8 as $rowq8){ $cmrcnt++; $cmrid=$rowq8->qid; } ?>
                    <?php if($cmrcnt!=0){ ?><div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;margin-bottom:-20px;"> <span class="visually-hidden"></span></div><?php }else{} ?>
                    <div class="card-body" id="boxes" style="text-align:center;background: #e3d6ff;">
                      <h1 class="card-title">CMR</h1>
                      <!-- que -->
                      <?php if($cmrcnt==0){ ?><h1 class="hqnum" style="color:red;"><span id="cmrcount"><?php echo $cmrcnt; ?></span></h1><?php }else if($cmrcnt>=1){ ?>
                          <h1 class="hqnum"><a <?php if ($_SESSION['urights']==1||$_SESSION['urights']==8.3): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $cmrid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="color:red;text-decoration:none;" id="cmrcount"><?php echo $cmrcnt; ?></a></h1>
                      <?php } ?>
                    </div>
                  </div>

                  <!-- leg -->
                  <div class="col-md-2">
                    <!-- spinner -->
                    <?php $miscnt=0; foreach($resultm1 as $rowm1){ $miscnt++; $misid=$rowm1->qid; } ?>
                    <?php if($miscnt!=0){ ?><div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;margin-bottom:-20px;"> <span class="visually-hidden"></span></div><?php }else{} ?>
                    <div class="card-body" id="boxes" style="text-align:center;background: #d0b9ff;">
                      <h1 class="card-title">MIS</h1>
                      <!-- que -->
                      <?php if($miscnt==0){ ?> <h1 class="hqnum" style="color:red;"><span id="miscount"><?php echo $miscnt; ?></span></h1><?php }else if($miscnt>=1){ ?>
                        <h1 class="hqnum"><a <?php if ($_SESSION['urights']==1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $misid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="color:red;text-decoration:none;" id="miscount"><?php echo $miscnt; ?></a></h1>
                      <?php } ?>
                    </div>
                  </div>
                </div><!--row-->

                <div class="row" style="padding-bottom:10px;">
                  <!-- ORD -->
                  <div class="col-md-2">
                    <!-- spinner -->
                    <?php $ordcnt=0; foreach($resultq1 as $rowq1){ $ordcnt++; $ordid=$rowq1->qid; } ?>
                    <?php if($ordcnt!=0){ ?><div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;margin-bottom:-20px;"> <span class="visually-hidden"></span></div><?php }else{} ?>
                    <div class="card-body" id="boxes" style="text-align:center;background: #ABD9FC;">
                      <h1 class="card-title">ORD</h1>
                      <!-- que -->
                      <?php if($ordcnt==0){ ?><h1 class="hqnum" style="color:red;"><span id="ordcount"><?php echo $ordcnt; ?></span></h1><?php }else if($ordcnt>=1){ ?>
                        <h1 class="hqnum"><a <?php if ($_SESSION['urights']==4.1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $ordid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="color:red;text-decoration:none;" id="ordcount"><?php echo $ordcnt; ?></a></h1>
                      <?php } ?>
                    </div>
                  </div>

                  <!-- leg -->
                  <div class="col-md-2">
                    <!-- spinner -->
                    <?php $legcnt=0; foreach($resultq12 as $rowq12){ $legcnt++; $legid=$rowq12->qid; } ?>
                    <?php if($legcnt!=0){ ?><div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;margin-bottom:-20px;"> <span class="visually-hidden"></span></div><?php }else{} ?>
                    <div class="card-body" id="boxes" style="text-align:center;background: #9AC8EB;">
                      <h1 class="card-title">Legal</h1>
                      <!-- que -->
                      <?php if($legcnt==0){ ?><h1 class="hqnum" style="color:red;"><span id="legcount"><?php echo $legcnt; ?></span></h1><?php }else if($legcnt>=1){ ?>
                          <h1 class="hqnum"><a <?php if ($_SESSION['urights']==4.1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $legid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="color:red;text-decoration:none;" id="legcount"><?php echo $legcnt; ?></a></h1>
                      <?php } ?>
                    </div>
                  </div>

                  <!-- hr -->
                  <div class="col-md-2">
                    <!-- spinner -->
                    <?php $hrcnt=0; foreach($resqhr as $rowqhr){ $hrcnt++; $hrid=$rowqhr->qid; } ?>
                    <?php if($hrcnt!=0){ ?><div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;margin-bottom:-20px;"> <span class="visually-hidden"></span></div><?php }else{} ?>
                    <div class="card-body" id="boxes" style="text-align:center;background: #54ccB9;">
                      <h1 class="card-title">HR</h1>
                      <!-- que -->
                      <?php if($hrcnt==0){ ?><h1 class="hqnum" style="color:red;"><span id="ordcount"><?php echo $hrcnt; ?></span></h1><?php }else if($hrcnt>=1){ ?>
                        <h1 class="hqnum"><a <?php if ($_SESSION['urights']==1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $hrid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="color:red;text-decoration:none;" id="hrcount"><?php echo $hrcnt; ?></a></h1>
                      <?php } ?>
                    </div>
                  </div>

                  <!-- gss -->
                  <div class="col-md-2">

                    <!-- spinner -->
                    <?php $cascnt=0; foreach($resultq10 as $rowq10){ $cascnt++; $casid=$rowq10->qid; } ?>
                    <?php if($cascnt!=0){ ?><div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;margin-bottom:-20px;"> <span class="visually-hidden"></span></div><?php }else{} ?>
                    <div class="card-body" id="boxes" style="text-align:center;background: #54BDB9;">
                      <h1 class="card-title">Cashier</h1>
                      <!-- que -->
                      <?php if($cascnt==0){ ?><h1 class="hqnum" style="color:red;"><span id="cascount"><?php echo $cascnt; ?></span></h1><?php }else if($cascnt>=1){ ?>
                          <h1 class="hqnum" id="cascount" style="color:red;text-decoration:none;"><a <?php if ($_SESSION['urights']==4.1||$_SESSION['urights']==1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $casid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> ><?php echo $cascnt; ?></a></h1>
                      <?php } ?>
                    </div>
                  </div>

                  <!-- rec -->
                  <div class="col-md-2">
                    <!-- spinner -->
                    <?php $reccnt=0; foreach($resultq11 as $rowq11){ $reccnt++; $recid=$rowq11->qid; } ?>
                    <?php if($reccnt!=0){ ?><div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;margin-bottom:-20px;"> <span class="visually-hidden"></span></div><?php }else{} ?>
                    <div class="card-body" id="boxes" style="text-align:center;background: #C7AF83;">
                      <h1 class="card-title">Records</h1>
                      <!-- que -->
                      <?php if($reccnt==0){ ?><h1 class="hqnum" style="color:red;"><span id="reccount"><?php echo $reccnt; ?></span></h1><?php }else if($reccnt>=1){ ?>
                          <h1 class="hqnum"><a <?php if ($_SESSION['urights']==4.1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $recid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> id="reccount" style="color:red;text-decoration:none;"><?php echo $reccnt; ?></a></h1>
                      <?php } ?>
                    </div>
                  </div>

                  <!-- mis -->
                  <div class="col-md-2">
                    <!-- spinner -->
                    <?php $gsscnt=0; foreach($resultq13 as $rowq13){ $gsscnt++; $gssid=$rowq13->qid; } ?>
                    <?php if($gsscnt!=0){ ?><div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;margin-bottom:-20px;"> <span class="visually-hidden"></span></div><?php }else{} ?>
                    <div class="card-body" id="boxes" style="text-align:center;background: #C9A771;">
                      <h1 class="card-title">GSU</h1>
                      <!-- que -->
                      <?php if($gsscnt==0){ ?> <h1 class="hqnum" style="color:red;"><span id="gsscount"><?php echo $gsscnt; ?></span></h1><?php }else if($gsscnt>=1){ ?>
                        <h1 class="hqnum"><a <?php if ($_SESSION['urights']==1): ?> href="<?php echo site_url('Auth/edque') ?>/<?php echo $gssid; ?>/<?php echo $_SESSION['uname']; ?>" <?php endif; ?> style="color:red;text-decoration:none;" id="gsscount"><?php echo $gsscnt; ?></a></h1>
                      <?php } ?>
                    </div>
                  </div>

                </div><!--row-->

              </div><!-- col-md-12 -->

            </div>
          </div>

        </div>
      </div>

    </section>

  </main><!-- End #main -->

</body>

</html>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
  <!-- <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <script type="text/javascript">
    // getnotif();
    // function getnotif(){
    //   $.ajax({
    //     url: "quenotif",
    //     type: "post",
    //     data: {},
    //     success:function(response){
    //       var obj = JSON.parse(response);
    //       if (obj.ecccount==''||obj.ecccount==0) { $('#ecccount').html(obj.ecccount).css('color', 'gray'); }else{ $('#ecccount').html(obj.ecccount).css('color', 'red'); }
    //       if (obj.cnccount==''||obj.cnccount==0) { $('#cnccount').html(obj.cnccount).css('color', 'gray'); }else{ $('#cnccount').html(obj.cnccount).css('color', 'red'); }
    //       if (obj.pcocount==''||obj.pcocount==0) { $('#pcocount').html(obj.pcocount).css('color', 'gray'); }else{ $('#pcocount').html(obj.pcocount).css('color', 'red'); }
    //       if (obj.hwmcount==''||obj.hwmcount==0) { $('#hwmcount').html(obj.hwmcount).css('color', 'gray'); }else{ $('#hwmcount').html(obj.hwmcount).css('color', 'red'); }
    //       if (obj.ptocount==''||obj.ptocount==0) { $('#ptocount').html(obj.ptocount).css('color', 'gray'); }else{ $('#ptocount').html(obj.ptocount).css('color', 'red'); }
    //       if (obj.dpcount==''||obj.dpcount==0) { $('#dpcount').html(obj.dpcount).css('color', 'gray'); }else{ $('#dpcount').html(obj.dpcount).css('color', 'red'); }
    //       if (obj.smrcount==''||obj.smrcount==0) { $('#smrcount').html(obj.smrcount).css('color', 'gray'); }else{ $('#smrcount').html(obj.smrcount).css('color', 'red'); }
    //       if (obj.cmrcount==''||obj.cmrcount==0) { $('#cmrcount').html(obj.cmrcount).css('color', 'gray'); }else{ $('#cmrcount').html(obj.cmrcount).css('color', 'red'); }
    //       if (obj.swmcount==''||obj.swmcount==0) { $('#swmcount').html(obj.swmcount).css('color', 'gray'); }else{ $('#swmcount').html(obj.swmcount).css('color', 'red'); }
    //       if (obj.cascount==''||obj.cascount==0) { $('#cascount').html(obj.cascount).css('color', 'gray'); }else{ $('#cascount').html(obj.cascount).css('color', 'red'); }
    //       if (obj.reccount==''||obj.reccount==0) { $('#reccount').html(obj.reccount).css('color', 'gray'); }else{ $('#reccount').html(obj.reccount).css('color', 'red'); }
    //       if (obj.legcount==''||obj.legcount==0) { $('#legcount').html(obj.legcount).css('color', 'gray'); }else{ $('#legcount').html(obj.legcount).css('color', 'red'); }
    //       if (obj.ordcount==''||obj.ordcount==0) { $('#ordcount').html(obj.ordcount).css('color', 'gray'); }else{ $('#ordcount').html(obj.ordcount).css('color', 'red'); }
    //       if (obj.gsscount==''||obj.gsscount==0) { $('#gsscount').html(obj.gsscount).css('color', 'gray'); }else{ $('#gsscount').html(obj.miscount).css('color', 'red'); }
    //       if (obj.miscount==''||obj.miscount==0) { $('#miscount').html(obj.miscount).css('color', 'gray'); }else{ $('#miscount').html(obj.miscount).css('color', 'red'); }
    //       // $('#legcount').html(obj.legcount);
    //       let queaudio="";
    //       if(obj.chmcount!=0){
    //         queaudio = '<audio autoplay controls loop><source src="<?php echo base_url(); ?>assets/audio/birdchime3.mp3" type="audio/mpeg"></audio>';
    //       }
    //       $('#chmcount').html(queaudio);
    //
    //       // resultchm=$this->Auth_model->getQchime();
    //       // if (obj.miscount==0) { $('#miscount').html(obj.miscount).css('color', 'gray'); }else{ $('#miscount').html(obj.miscount).css('color', 'red'); }
    //     }
    //   })
    // }
    // setInterval(function() { getnotif(); },8 * 1000); //21 is after how much seconds you wanna reload!

    // function queaud(){
    //
    // }
  </script>

  <!-- <script type="text/javascript">
    getQdat();
    function getQdat(){
      $.ajax({
        url: "queindex",
        type: "post",
        data: {},
        success:function(response){
          var obj = JSON.parse(response);
          $('#qindex').html(obj.qindex);
          // if (obj.miscount==0) { $('#miscount').html(obj.miscount).css('color', 'gray'); }else{ $('#miscount').html(obj.miscount).css('color', 'red'); }
        }
      })
    }
    setInterval(function() { getQdat(); },5 * 1000); //21 is after how much seconds you wanna reload!
  </script> -->
