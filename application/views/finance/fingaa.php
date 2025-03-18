<!-- error display -->
<?php error_reporting(0); ini_set('display_errors', 0); ?>
<!-- error display -->

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

  <style media="screen">
    .tdryt { text-align:right;width:55px; } .tdcent { text-align:center; }
    .gasth { width:7px; }
    .gasthsub { width:12px; }

    #tabgaa { font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%; }
    #tabgaa td, #tabgaa th { border: 1px solid #ddd;padding: 3px; }
    #tabgaa tr:nth-child(even){background-color: #f2f2f2;}
    #tabgaa tr:hover {background-color: #ddd;}
    #tabgaa th { padding-top: 1px;padding-bottom: 1px;text-align:center;background-color: #04AA6D;color: white; }
    #tdhead { font-weight: bold;}
  </style>

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/1.12.1-jquery.dataTables.min.css"> -->

  <body>

    <!-- <script>
      const yearSelect = document.getElementById('year-select');
      yearSelect.addEventListener('change', function() {
        const year = yearSelect.value;
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
          if (xhr.readyState === 4 && xhr.status === 200) { const response = xhr.responseText; console.log(response); // Handle the response data here
          }
        };
        xhr.open('GET', 'finfetch.php?year=' + year);
        xhr.send();
      });
    </script> -->

    <div class="" style="padding-top:70px;padding-left:5px;padding-right:10px;">
      <div class="pagetitle" style="margin-bottom:-10px;padding-left:10px;">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-1" style="size:20px;">
              <a type="button" class="btn btn-primary" href="<?php echo base_url(); ?>findash"><i class="bi bi-backspace"></i> Back</a>
            </div>
            <div class="col-md-1" style="size:20px;">
              <a type="button" class="btn btn-secondary" href="<?php echo base_url('ExcelPort/fingaa'); ?>"><i class="bi bi-file-excel"></i> To Excel</a>
            </div>
            <div class="col-md-7" style="size:20px;text-align:center;">
              <h1>DETAILED BREAKDOWN OF EXPENDITURES /P/P/A FY
                <?php
                  $dsply = []; // initialize an empty array to keep track of displayed values
                  foreach ($fingaa as $rga) {
                    if (!in_array($rga->gaayr, $dsply)) { // check if current value has already been displayed
                      echo $rga->gaayr; // display the value
                      $dsply[] = $rga->gaayr; // add the value to the displayed array
                    }
                  }
               ?>
                NEP (in P'000)</h1>
            </div>
          </div>
        </div>
      </div>

        <!-- div starts-->
        <div class="tab-pane fade active show" role="tabpanel" aria-labelledby="home-tab" style="padding-left:10px;">
          <div class="row" style="padding-top:20px;">

          <?php
            // ps 100
            $gaacnt=0; $subgasstot=0; $subsupstot=0; $subassstot=0; $subenvistot=0; $submgtstot=0; $subenvimgtstot=0;
            $subsubop=0; $totapp=0; $subtotapp=0;

            // rlip
            $totps=0; $totpssup=0; $totpsass=0; $totpsmgt=0; $rlsubopstot=0; $rltot=0; $rltotap=0;
            $totaq=0; $totnw=0; $totqmf=0;

            // all
            $gasgmsall=0;
          ?>

            <!-- table -->
            <table id="tabgaa" class="display" style="font-size:14px;">
              <thead style="position: sticky;top: 0;">
                <tr>
                  <th rowspan="3" style="width:2.5%;">#</th><th rowspan="3" style="">UACS Code</th><th rowspan="3">
                    <a href="" class="open-homeEvents" data-id="partevent" data-bs-toggle="modal" data-bs-target="#adpart" title="Add" style="font-weight:bold;color:#dc3545;"><button type="button" class="btn btn-warning" name="button"> Add</button></a>
                      Particulars</th><th colspan="4" style="text-align:center;">GASS 100000000000000</th>
                      <th colspan="3" style="text-align:center;">SUPPORT TO OPERATIONS 200000000000000</th>
                      <th colspan="10" style="text-align:center;">OPERATIONS 300000000000000</th><th></th><th></th><th></th><th></th>
                </tr>

                <tr>
                  <th class="gasth" rowspan="2">Gen. Mgt. and Sup 1000000100001000</th><th class="gasth" rowspan="2">Human Res. Devt. 1000000100002000</th><th class="gasth" rowspan="2">Admin. of Personnel 1000000100003000</th><th rowspan="2" class="gasthsub">Subtotal</th>
                  <th class="gasth" colspan="13">MFO 1 : Environmental Management Services 301000000</th><th></th><th></th><th></th><th></th>
                </tr>
                <tr>
                  <th class="gasth">PPFMIS 200000100001000</th>
                  <th class="gasth">Legal Ser. Prov. Of Sec. to the PAB 200000100002000</th>
                  <th class="gasthsub">Sub-Total Support</th>

                  <th class="gasth"> Envi. Assessment & Protection Prog. 310100000000000</th>
                  <th class="gasth">Poll. Res. And Lab Ser. 310100100001000</th>
                  <th class="gasth">Env'tl. Educ. Info. 310100100002000</th>
                  <th class="gasth">EIA 310100100003000</th>

                  <th class="gasth">Env'tl. Mgt Poll. Controll  Sub Total 310200000000000</th>
                  <th class="gasth">AIR 310200100001000</th>
                  <th class="gasth">WATER 310200100002000</th>
                  <th class="gasth">Solid Waste 310200100003000</th>
                  <th class="gasth">Toxic and Hazardous 310200100004000</th>

                  <th class="gasth"> Sub Total Operations (Clean & Healthy Env.l Sustained) 310000000000000</th>
                  <th>Total</th><th>AQMF</th><th>NWQMF</th><th>Total Appro.</th>
                </tr>
              </thead>
              <tbody>
                <tr><td id="" colspan="10" style="font-weight:bold;padding-left:10.3%;">Personal Services (100)</td></tr>
                  <?php $subop=0; $suboper=0; $fintot=0; $subpsgasgms=0; $subpsgashrd=0; $subpsgasapb=0; $subpssupppf=0;
                      $subpsppf=0; $subpssupleg=0; $subsuplabstot=0; $subsupedustot=0; $subsupeiastot=0;
                      $subairstot=0; $subh2ostot=0; $subswmstot=0; $subtoxstot=0; $subaqmf=0; $subnwqmf=0; ?>
                  <!--?php foreach ($fingaa as $rga) {-->
                  <?php foreach ($fingaa as $rga) {
                    //universal
                    $univgaayr=$rga->gaayr;
                    if($rga->parthead=='Personal Services (100)'){ $gaacnt++;
                      $subpsgasgms+=$rga->gasgms; $subpsgashrd+=$rga->gashrd; $subpsgasapb+=$rga->gasapb;
                      $subpssupppf+=$rga->supppf; $subpssupleg+=$rga->supleg;

                      $subgasstot+=intval($rga->gasstot); $subsupstot+=intval($rga->supstot); $subassstot+=intval($rga->assstot);
                      $subenvistot+=intval($rga->assstot); $submgtstot+=intval($rga->mgtstot); $subenvimgtstot=$subenvistot+$submgtstot;
                      $subsubop=$subenvimgtstot+$subgasstot+$subsupstot;
                      $suboper=$rga->mgtstot+$rga->assstot;
                      $fintot=$rga->gasstot+$rga->supstot+$rga->mgtstot+$rga->assstot;
                      $totaq+=$rga->aqmf; $totnw+=$rga->nwqmf;
                      $totqmf=$totaq+$totnw;
                      $totapp=$fintot+$rga->aqmf+$rga->nwqmf;
                      $subtotappall+=$totapp;
                      $subsuplabstot+=$rga->asslab; $subsupedustot+=$rga->assedu; $subsupeiastot+=$rga->asseia;
                      $subairstot+=$rga->mgtair; $subh2ostot+=$rga->mgth2o; $subswmstot+=$rga->mgtswm; $subtoxstot+=$rga->mgttox;
                      $subaqmf+=$rga->aqmf; $subnwqmf+=$rga->nwqmf;
                  ?>

                    <tr>
                      <td style="text-align:center;" id="<?php echo $rga->gaid; ?>"><?php echo $gaacnt; ?></td>
                      <td style=""><a href="" data-bs-toggle="modal" data-bs-target="#degaapart<?php echo $rga->gaid; ?>" title="Delete" style=";color:#454545;"><?php echo $rga->uacscod; ?></a></td>
                      <td style="padding-left:5px;"><a href="" data-bs-toggle="modal" data-bs-target="#edgaapart<?php echo $rga->gaid; ?>" title="Delete" style="color:#454545;"><?php echo $rga->part; ?></a></td>
                      <!-- gass -->
                      <form name="forgas" action="<?php echo site_url('Auth/edfinpart') ?>/<?php echo $rga->gaid; ?>" method="post">
                        <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="gasgms" name="gasgms" value="<?php echo $rga->gasgms; ?>" style="text-align:right;">
                        </td>
                        <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="gashrd" name="gashrd" value="<?php echo $rga->gashrd; ?>" style="text-align:right;">
                        </td>
                        <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="gasapb" name="gasapb" value="<?php echo $rga->gasapb; ?>" style="text-align:right;">
                        </td>
                        <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo $rga->gasstot; ?></td>
                      </form>
                      <!-- gass -->
                      <!-- support to operations -->
                      <form name="" action="<?php echo site_url('Auth/edfinsup') ?>/<?php echo $rga->gaid; ?>" method="post">
                        <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="supppf" name="supppf" value="<?php echo $rga->supppf; ?>" style="text-align:right;">
                        </td>
                        <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="supleg" name="supleg" value="<?php echo $rga->supleg; ?>" style="text-align:right;">
                        </td>
                        <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo $rga->supstot; ?></td>
                      </form>
                      <!-- support to operations -->
                      <!-- Assessment protection prog  -->
                      <form name="" action="<?php echo site_url('Auth/edfinass') ?>/<?php echo $rga->gaid; ?>" method="post">
                        <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo $rga->assstot; ?></td>
                        <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="asslab" name="asslab" value="<?php echo $rga->asslab; ?>" style="text-align:right;">
                        </td>
                        <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="assedu" name="assedu" value="<?php echo $rga->assedu; ?>" style="text-align:right;">
                        </td>
                        <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="asseia" name="asseia" value="<?php echo $rga->asseia; ?>" style="text-align:right;">
                        </td>
                      </form>
                      <!-- Assessment protection prog  -->
                      <!-- mgt poll cont  -->
                      <form name="" action="<?php echo site_url('Auth/edfinmgt') ?>/<?php echo $rga->gaid; ?>" method="post">
                        <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo $rga->mgtstot; ?></td>
                        <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="mgtair" name="mgtair" value="<?php echo $rga->mgtair; ?>" style="text-align:right;">
                        </td>
                        <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="mgth2o" name="mgth2o" value="<?php echo $rga->mgth2o; ?>" style="text-align:right;">
                        </td>
                        <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="mgtswm" name="mgtswm" value="<?php echo $rga->mgtswm; ?>" style="text-align:right;">
                        </td>
                        <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="mgttox" name="mgttox" value="<?php echo $rga->mgttox; ?>" style="text-align:right;">
                        </td>
                      </form>
                      <!-- mgt poll cont  -->

                      <!-- ed part -->
                      <div class="modal fade" id="edgaapart<?php echo $rga->gaid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color:#ffc107;">
                              <h5 class="modal-title" id="exampleModalLabel">Edit Entry</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form class="" action="<?php echo site_url('Auth/edgaapart') ?>/<?php echo $rga->gaid; ?>/<?php echo $rga->gaayr; ?>" method="post">
                              <div class="modal-body">
                                <div class="col-md-12">
                                  <div class="row">
                                    <div class="form-group" style="padding-top:8px;">
                                      <input class="form-control" type="text" name="uacscod" id="uacscod" value="<?php echo $rga->uacscod; ?>" required autofocus>
                                    </div>
                                    <div class="form-group" style="padding-top:10px;margin-bottom:-10px;">
                                      <input class="form-control" type="text" name="part" id="part" value="<?php echo $rga->part; ?>" required>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <hr>
                              <div class="model-footer" style="text-align:right;padding-right:15px;padding-bottom:15px;">
                                <button type="submit" class="btn btn-primary" style="background-color:#007bff;">Submit</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- ed part -->

                      <!-- de part -->
                      <div class="modal fade" id="degaapart<?php echo $rga->gaid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color:#dc3545;">
                              <h5 class="modal-title" id="exampleModalLabel">Delete Entry</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form class="" action="<?php echo site_url('Auth/degaapart') ?>/<?php echo $rga->gaid; ?>/<?php echo $rga->gaayr; ?>" method="post">
                              <div class="modal-body">
                                <div class="col-md-12">
                                  <div class="row">
                                    <div class="form-group" style="padding-top:8px;">
                                      <input class="form-control" type="text" name="uacscod" id="uacscod" value="<?php echo $rga->uacscod; ?>" required autofocus>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <hr>
                              <div class="model-footer" style="text-align:right;padding-right:15px;padding-bottom:15px;">
                                <button type="submit" class="btn btn-primary" style="background-color:#007bff;">Submit</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- de part -->
                      <!-- end here -->

                      <!-- subop  -->
                      <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo $suboper; ?></td>
                      <!-- subop  -->
                      <!-- total  -->
                      <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo $fintot; ?></td>
                      <!-- total  -->

                      <!-- qmf  -->
                      <form name="" action="<?php echo site_url('Auth/edqmf') ?>/<?php echo $rga->gaid; ?>" method="post">
                        <td id="tdryt" hidden>
                          <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="subop" name="subop" value="<?php echo $suboper; ?>" style="text-align:right;">
                        </td>
                        <td id="tdryt" hidden>
                          <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="fintot" name="fintot" value="<?php echo $fintot; ?>" style="text-align:right;">
                        </td>
                        <td id="tdryt">
                          <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="aqmf" name="aqmf" value="<?php echo $rga->aqmf; ?>" style="text-align:right;">
                        </td>
                        <td id="tdryt">
                          <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="nwqmf" name="nwqmf" value="<?php echo $rga->nwqmf; ?>" style="text-align:right;">
                        </td>
                      </form>
                      <!-- qmf  -->

                      <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo $rga->totapp; ?></td>
                      <!-- final 4 -->

                    </tr>
                <?php } } ?>

              <!-- </tbody> -->
                <tr>
                  <td colspan="2"></td><td style="font-weight:bold;">Subtotal</td>
                  <!-- gass -->
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($subpsgasgms); ?></td>
                  <!-- hrd -->
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($subpsgashrd); ?></td>
                  <!-- admin personnel -->
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($subpsgasapb); ?></td>
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($subgasstot); ?></td>

                  <!-- ppfmis -->
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($subpssupppf); ?></td>
                  <!-- legal -->
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($subpssupleg); ?></td>
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($subsupstot); ?></td>

                  <!-- envi -->
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($subenvistot); ?></td>
                  <!-- poll lab -->
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($subsuplabstot); ?></td>
                  <!-- edu -->
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($subsupedustot); ?></td>
                  <!-- eia -->
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($subsupeiastot); ?></td>
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($submgtstot); ?></td>

                  <!-- air -->
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($subairstot); ?></td>
                  <!-- water -->
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($subh2ostot); ?></td>
                  <!-- swm -->
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($subswmstot); ?></td>
                  <!-- toxic -->
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($subtoxstot); ?></td>
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($subenvimgtstot); ?></td>

                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($subsubop); ?></td>
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($subaqmf); ?></td>
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($subnwqmf); ?></td>
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($subtotappall); ?></td>
                </tr>
              <?php $rlipcnt=0; foreach ($fingaa as $rga) {
                if($rga->parthead=='RLIP'){ $rlipcnt++;
                  $rlsubop=0; $totgassupop=0; $rliptot=0; $rliptotap=0; $subtotapp=0;
                  $rlsubgasgms=0; $rlsubgashrd=0; $rlsubgasapb=0; $rlsubsupppf=0; $rlsublab=0; $rlsubedu=0; $rlsubeia=0;
                  $rlmgttot=0; $rlairtot=0; $rlh2otot=0; $rlswmtot=0; $rltoxtot=0; $rlenvimgttot=0; $rltot=0; $rlsubaqmf=0; $rlsubnwqmf=0; $rlpstotall=0;
                  $totps=$subgasstot+$rga->gasstot; $totpssup=$subsupstot+$rga->supstot; $totpsass=$subassstot+$rga->assstot;
                  $totpsmgt=$submgtstot+$rga->mgtstot;
                  $rlsubop=$rga->assstot+$rga->mgtstot; $totgassupop=$rlsubop+$rga->gasstot+$rga->supstot;
                  $rlsubopstot=$subenvimgtstot+$rlsubop; $rliptot=$subsubop+$totgassupop;
                  $subtotapp=$rga->aqmf+$rga->nwqmf;
                  $rliptotap=$rliptot+$subtotapp+$totqmf;
                  $subrlgasgms=$subpsgasgms+$rga->gasgms; $rlsubgashrd=$subpsgashrd+$rga->gashrd; $rlsubgasapb=$subpsgasapb+$rga->gasapb;
                  $rlsubsupppf=$subpssupppf+$rga->supppf; $subpssupppf+=$rga->supppf; $subpssupleg+=$rga->supleg;
                  $rlsublab=$subsuplabstot+$rga->asslab; $rlsubedu=$subsupedustot+$rga->assedu; $rlsubeia=$subsupeiastot+$rga->asseia;
                  $rlmgttot=$submgtstot+$rga->mgtstot; $rlairtot=$subairstot+$rga->mgtair; $rlh2otot=$subh2ostot+$rga->mgth2o;
                  $rlswmtot=$subswmstot+$rga->mgtswm; $rltoxtot=$subtoxstot+$rga->mgttox;
                  $rlenvimgttot=$subenvimgtstot+$rlsubop; $rltot=$subsubop+$totgassupop; $rlsubaqmf=$subaqmf+$rga->aqmf;
                  $rlsubnwqmf=$subnwqmf+$rga->nwqmf; $rlpstotall=$subtotappall+$subtotapp+$totgassupop;
              ?>
                  <tr>
                    <td id="<?php echo $rga->gaid; ?>" class="tdcent"><?php echo $rlipcnt; ?></td>

                    <td style=""><a href="" data-bs-toggle="modal" data-bs-target="#degaapart<?php echo $rga->gaid; ?>" title="Delete" style=";color:#454545;"><?php echo $rga->uacscod; ?></a></td>
                    <td style="padding-left:5px;"><a href="" data-bs-toggle="modal" data-bs-target="#edgaapart<?php echo $rga->gaid; ?>" title="Delete" style="color:#454545;"><?php echo $rga->part; ?></a></td>
                    <!-- gass -->
                    <form name="forgas" action="<?php echo site_url('Auth/edfinpart') ?>/<?php echo $rga->gaid; ?>" method="post">
                      <td id="tdryt">
                          <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="gasgms" name="gasgms" value="<?php echo $rga->gasgms; ?>" style="text-align:right;">
                      </td>
                      <td id="tdryt">
                          <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="gashrd" name="gashrd" value="<?php echo $rga->gashrd; ?>" style="text-align:right;">
                      </td>
                      <td id="tdryt">
                          <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="gasapb" name="gasapb" value="<?php echo $rga->gasapb; ?>" style="text-align:right;">
                      </td>
                      <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo $rga->gasstot; ?></td>
                    </form>
                    <!-- gass -->
                    <!-- support to operations -->
                    <form name="forgas" action="<?php echo site_url('Auth/edfinsup') ?>/<?php echo $rga->gaid; ?>" method="post">
                      <td id="tdryt">
                          <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="supppf" name="supppf" value="<?php echo $rga->supppf; ?>" style="text-align:right;">
                      </td>
                      <td id="tdryt">
                          <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="supleg" name="supleg" value="<?php echo $rga->supleg; ?>" style="text-align:right;">
                      </td>
                      <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo $rga->supstot; ?></td>
                    </form>
                    <!-- support to operations -->
                    <!-- Assessment protection prog  -->
                    <form name="forgas" action="<?php echo site_url('Auth/edfinass') ?>/<?php echo $rga->gaid; ?>" method="post">
                      <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo $rga->assstot; ?></td>
                      <td id="tdryt">
                          <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="asslab" name="asslab" value="<?php echo $rga->asslab; ?>" style="text-align:right;">
                      </td>
                      <td id="tdryt">
                          <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="assedu" name="assedu" value="<?php echo $rga->assedu; ?>" style="text-align:right;">
                      </td>
                      <td id="tdryt">
                          <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="asseia" name="asseia" value="<?php echo $rga->asseia; ?>" style="text-align:right;">
                      </td>
                    </form>
                    <!-- Assessment protection prog  -->
                    <!-- mgt poll cont  -->
                    <form name="forgas" action="<?php echo site_url('Auth/edfinmgt') ?>/<?php echo $rga->gaid; ?>" method="post">
                      <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo $rga->mgtstot; ?></td>
                      <td id="tdryt">
                          <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="mgtair" name="mgtair" value="<?php echo $rga->mgtair; ?>" style="text-align:right;">
                      </td>
                      <td id="tdryt">
                          <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="mgth2o" name="mgth2o" value="<?php echo $rga->mgth2o; ?>" style="text-align:right;">
                      </td>
                      <td id="tdryt">
                          <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="mgtswm" name="mgtswm" value="<?php echo $rga->mgtswm; ?>" style="text-align:right;">
                      </td>
                      <td id="tdryt">
                          <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="mgttox" name="mgttox" value="<?php echo $rga->mgttox; ?>" style="text-align:right;">
                      </td>
                    </form>
                    <!-- mgt poll cont  -->

                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($rlsubop); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($totgassupop); ?></td>

                    <!-- qmf  -->
                    <form name="" action="<?php echo site_url('Auth/edqmf') ?>/<?php echo $rga->gaid; ?>" method="post">
                      <td id="tdryt" hidden>
                        <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="subop" name="subop" value="<?php echo $rlsubop; ?>" style="text-align:right;">
                      </td>
                      <td id="tdryt" hidden>
                        <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="fintot" name="fintot" value="<?php echo $totgassupop; ?>" style="text-align:right;">
                      </td>
                      <td id="tdryt">
                        <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="aqmf" name="aqmf" value="<?php echo $rga->aqmf; ?>" style="text-align:right;">
                      </td>
                      <td id="tdryt">
                        <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="nwqmf" name="nwqmf" value="<?php echo $rga->nwqmf; ?>" style="text-align:right;">
                      </td>
                      <td id="tdryt" hidden>
                        <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="totapp" name="totapp" value="<?php echo $subtotapp+$totgassupop; ?>" style="text-align:right;">
                      </td>
                    </form>
                    <!-- qmf  -->

                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($subtotapp+$totgassupop); ?></td>

                    <!-- ed part -->
                    <div class="modal fade" id="edgaapart<?php echo $rga->gaid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color:#ffc107;">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Entry</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form class="" action="<?php echo site_url('Auth/edgaapart') ?>/<?php echo $rga->gaid; ?>/<?php echo $rga->gaayr; ?>" method="post">
                            <div class="modal-body">
                              <div class="col-md-12">
                                <div class="row">
                                  <div class="form-group" style="padding-top:8px;">
                                    <input class="form-control" type="text" name="uacscod" id="uacscod" value="<?php echo $rga->uacscod; ?>" required autofocus>
                                  </div>
                                  <div class="form-group" style="padding-top:10px;margin-bottom:-10px;">
                                    <input class="form-control" type="text" name="part" id="part" value="<?php echo $rga->part; ?>" required>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <hr>
                            <div class="model-footer" style="text-align:right;padding-right:15px;padding-bottom:15px;">
                              <button type="submit" class="btn btn-primary" style="background-color:#007bff;">Submit</button>
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-- ed part -->

                    <!-- de part -->
                    <div class="modal fade" id="degaapart<?php echo $rga->gaid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color:#dc3545;">
                            <h5 class="modal-title" id="exampleModalLabel">Delete Entry</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form class="" action="<?php echo site_url('Auth/degaapart') ?>/<?php echo $rga->gaid; ?>/<?php echo $rga->gaayr; ?>" method="post">
                            <div class="modal-body">
                              <div class="col-md-12">
                                <div class="row">
                                  <div class="form-group" style="padding-top:8px;">
                                    <input class="form-control" type="text" name="uacscod" id="uacscod" value="<?php echo $rga->uacscod; ?>" required autofocus>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <hr>
                            <div class="model-footer" style="text-align:right;padding-right:15px;padding-bottom:15px;">
                              <button type="submit" class="btn btn-primary" style="background-color:#007bff;">Submit</button>
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-- de part -->

                  </tr>
              <?php } } ?>
                <tr>
                  <td></td><td></td>

                  <form name="formtintot" method="post" action="<?php echo site_url('Auth/edfintot') ?>/<?php echo $rga->gaayr; ?>">
                    <div class="col-md-12">
                      <div class="col-md-2" hidden>
                        <input type="text" class="form-control" name="gaayr" id="gaayr" value="<?php echo $rga->gaayr; ?>" >

                        <input type="text" class="form-control" name="subpsgasgms" value="<?php echo $subpsgasgms; ?>" >
                        <input type="text" class="form-control" name="subpsgashrd" value="<?php echo $subpsgashrd; ?>" >
                        <input type="text" class="form-control" name="subpsgasapb" value="<?php echo $subpsgasapb; ?>" >

                        <input type="text" class="form-control" name="subpssupppf" value="<?php echo $subpssupppf; ?>" >
                        <input type="text" class="form-control" name="subpssupleg" value="<?php echo $subpssupleg; ?>" >

                        <input type="text" class="form-control" name="subenvistot" value="<?php echo $subenvistot; ?>" >
                        <input type="text" class="form-control" name="subsuplabstot" value="<?php echo $subsuplabstot; ?>" >
                        <input type="text" class="form-control" name="subsupedustot" value="<?php echo $subsupedustot; ?>" >
                        <input type="text" class="form-control" name="subsupeiastot" value="<?php echo $subsupeiastot; ?>" >

                        <input type="text" class="form-control" name="subairstot" value="<?php echo $subairstot; ?>" >
                        <input type="text" class="form-control" name="subh2ostot" value="<?php echo $subh2ostot; ?>" >
                        <input type="text" class="form-control" name="subswmstot" value="<?php echo $subswmstot; ?>" >
                        <input type="text" class="form-control" name="subtoxstot" value="<?php echo $subtoxstot; ?>" >

                        <input type="text" class="form-control" name="subpsop" value="<?php echo $subsubop; ?>" >
                        <input type="text" class="form-control" name="subpsaqmf" value="<?php echo $subaqmf; ?>" >
                        <input type="text" class="form-control" name="subpsnwqmf" value="<?php echo $subnwqmf; ?>" >
                        <input type="text" class="form-control" name="subpsappall" value="<?php echo $subtotappall; ?>" >

                        <!-- <input type="text" class="form-control" name="totps" id="totps" value="<?php echo $totps; ?>" >
                        <input type="text" class="form-control" name="totpssup" id="totps" value="<?php echo $totpssup; ?>" >
                        <input type="text" class="form-control" name="totpsass" id="totps" value="<?php echo $totpsass; ?>" >
                        <input type="text" class="form-control" name="totpsmgt" id="totps" value="<?php echo $totpsmgt; ?>" >
                        <input type="text" class="form-control" name="rlsubopstot" id="totps" value="<?php echo $rlsubopstot; ?>" >
                        <input type="text" class="form-control" name="rliptot" id="totps" value="<?php echo $rliptot; ?>" >
                        <input type="text" class="form-control" name="rliptotap" id="totps" value="<?php echo $rliptotap; ?>" > -->
                    </div>
                    <div class="col-md-2">
                      <td><button type="submit" id="savetotps" class="btn btn-primary" style="width:100%;height:80%;">Save PS</button></td>
                    </div>
                  </form>

                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($subrlgasgms); ?></td>
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($rlsubgashrd); ?></td>
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($rlsubgasapb); ?></td>
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($totps); ?></td>

                  <!-- <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($subpssupppf); ?></td> -->
                  <!-- <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($subpssupleg); ?>$#%^</td> -->
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($totpssup); ?></td>

                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($totpsass); ?></td>
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($rlsublab); ?></td>
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($rlsubedu); ?></td>
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($rlsubeia); ?></td>

                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($rlmgttot); ?></td>
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($rlairtot); ?></td>
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($rlh2otot); ?></td>
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($rlswmtot); ?></td>
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($rltoxtot); ?></td>

                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($rlenvimgttot); ?></td>

                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($rltot); ?></td>
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($rlsubaqmf); ?></td>
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($rlsubnwqmf); ?></td>
                  <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($rlpstotall); ?></td>
                </tr>
                <tr><td id="partmid" colspan="24" style="font-weight:bold;padding-left:10.3%;">Maintenance & Other Operating Expenses (200)</td></tr>
                <!-- mooe -->

                <?php $mogasstot=0; $mosupstot=0; $moassstot=0; $momgtstot=0; $mocnt=0; $mototappall=0; $aqmf=0; $nwqmf=0;
                      $mogastot=0; $mohrdtot=0; $moapbtot=0; $mosupppf=0; $mosupleg=0; $molabtot=0; $moedutot=0; $moeiatot=0; $moeiatot=0;
                      $moairtot=0; $moh2otot=0; $moswmtot=0; $motoxtot=0;
                  foreach ($fingaa as $rga) {

                  if($rga->parthead=='Maintenance & Other Operating Expenses (200)'){ $mocnt++;
                    $mogasstot+=intval($rga->gasstot); $mosupstot+=intval($rga->supstot); $moassstot+=intval($rga->assstot);
                    $momgtstot+=intval($rga->mgtstot);
                    $mosubop=0; $mosubop=intval($rga->assstot)+intval($rga->mgtstot);
                    $mototopgs=0; $mototopgs=intval($rga->gasstot)+intval($rga->supstot)+intval($rga->mgtstot)+intval($rga->assstot);
                    $aqmf+=intval($rga->aqmf); $nwqmf+=intval($rga->nwqmf);

                    $mogastot+=$rga->gasgms; $mohrdtot+=$rga->gashrd; $moapbtot+=$rga->gasapb;
                    $mosupppf+=$rga->supppf; $mosupleg+=$rga->supleg; $molabtot+=$rga->asslab; $moedutot+=$rga->assedu; $moeiatot+=$rga->asseia;
                    $moairtot+=$rga->mgtair; $moh2otot+=$rga->mgth2o; $moswmtot+=$rga->mgtswm; $motoxtot+=$rga->mgttox;

                    $mosubtot=0; $mosubtot=$moassstot+$momgtstot;
                    $motot=0; $motot=$mogasstot+$mosupstot+$mosubtot;
                    $mototappall=$motot+$aqmf+$nwqmf;
                ?>

                <!--tr id="<?php echo $rga->uacscod; ?>"-->
                  <tr id="">
                      <td id="<?php echo $rga->gaid; ?>" class="tdcent"><?php echo $mocnt; ?></td>
                      <td style=""><a href="" data-bs-toggle="modal" data-bs-target="#degaapart<?php echo $rga->gaid; ?>" title="Delete" style=";color:#454545;"><?php echo $rga->uacscod; ?></a></td>
                      <td style="padding-left:5px;"><a href="" data-bs-toggle="modal" data-bs-target="#edgaapart<?php echo $rga->gaid; ?>" title="Delete" style="color:#454545;"><?php echo $rga->part; ?></a></td>

                      <!-- gass -->
                      <form name="forgas" action="<?php echo site_url('Auth/edfinpart') ?>/<?php echo $rga->gaid; ?>" method="post">
                        <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="gasgms" name="gasgms" value="<?php echo $rga->gasgms; ?>" style="text-align:right;">
                        </td>
                        <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="gashrd" name="gashrd" value="<?php echo $rga->gashrd; ?>" style="text-align:right;">
                        </td>
                        <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="gasapb" name="gasapb" value="<?php echo $rga->gasapb; ?>" style="text-align:right;">
                        </td>
                        <td class="tdryt" id="partlast" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo $rga->gasstot; ?></td>
                      </form>
                      <!-- gass -->
                      <!-- support to operations -->
                      <form name="forgas" action="<?php echo site_url('Auth/edfinsup') ?>/<?php echo $rga->gaid; ?>" method="post">
                        <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="supppf" name="supppf" value="<?php echo $rga->supppf; ?>" style="text-align:right;">
                        </td>
                        <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="supleg" name="supleg" value="<?php echo $rga->supleg; ?>" style="text-align:right;">
                        </td>
                        <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo $rga->supstot; ?></td>
                      </form>
                      <!-- support to operations -->
                      <!-- Assessment protection prog  -->
                      <form name="forgas" action="<?php echo site_url('Auth/edfinass') ?>/<?php echo $rga->gaid; ?>" method="post">
                        <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo $rga->assstot; ?></td>
                        <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="asslab" name="asslab" value="<?php echo $rga->asslab; ?>" style="text-align:right;">
                        </td>
                        <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="assedu" name="assedu" value="<?php echo $rga->assedu; ?>" style="text-align:right;">
                        </td>
                        <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="asseia" name="asseia" value="<?php echo $rga->asseia; ?>" style="text-align:right;">
                        </td>
                      </form>
                      <!-- Assessment protection prog  -->
                      <!-- mgt poll cont  -->
                      <form name="forgas" action="<?php echo site_url('Auth/edfinmgt') ?>/<?php echo $rga->gaid; ?>" method="post">
                        <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo $rga->mgtstot; ?></td>
                        <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="mgtair" name="mgtair" value="<?php echo $rga->mgtair; ?>" style="text-align:right;">
                        </td>
                        <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="mgth2o" name="mgth2o" value="<?php echo $rga->mgth2o; ?>" style="text-align:right;">
                        </td>
                        <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="mgtswm" name="mgtswm" value="<?php echo $rga->mgtswm; ?>" style="text-align:right;">
                        </td>
                        <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="mgttox" name="mgttox" value="<?php echo $rga->mgttox; ?>" style="text-align:right;">
                        </td>
                      </form>
                      <!-- mgt poll cont  -->

                      <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($mosubop); ?></td>
                      <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($mototopgs); ?></td>

                      <!-- qmf  -->
                      <form name="" action="<?php echo site_url('Auth/edqmf') ?>/<?php echo $rga->gaid; ?>" method="post">
                        <td id="tdryt" hidden>
                          <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="subop" name="subop" value="<?php echo $mosubop; ?>" style="text-align:right;">
                        </td>
                        <td id="tdryt" hidden>
                          <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="fintot" name="fintot" value="<?php echo $mototopgs; ?>" style="text-align:right;">
                        </td>
                        <td id="tdryt">
                          <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="aqmf" name="aqmf" value="<?php echo $rga->aqmf; ?>" style="text-align:right;">
                        </td>
                        <td id="tdryt">
                          <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="nwqmf" name="nwqmf" value="<?php echo $rga->nwqmf; ?>" style="text-align:right;">
                        </td>
                      </form>
                      <!-- qmf  -->

                      <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($rga->totapp); ?></td>

                      <!-- ed part -->
                      <div class="modal fade" id="edgaapart<?php echo $rga->gaid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color:#ffc107;">
                              <h5 class="modal-title" id="exampleModalLabel">Edit Entry</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form class="" action="<?php echo site_url('Auth/edgaapart') ?>/<?php echo $rga->gaid; ?>/<?php echo $rga->gaayr; ?>" method="post">
                              <div class="modal-body">
                                <div class="col-md-12">
                                  <div class="row">
                                    <div class="form-group" style="padding-top:8px;">
                                      <input class="form-control" type="text" name="uacscod" id="uacscod" value="<?php echo $rga->uacscod; ?>" required autofocus>
                                    </div>
                                    <div class="form-group" style="padding-top:10px;margin-bottom:-10px;">
                                      <input class="form-control" type="text" name="part" id="part" value="<?php echo $rga->part; ?>" required>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <hr>
                              <div class="model-footer" style="text-align:right;padding-right:15px;padding-bottom:15px;">
                                <button type="submit" class="btn btn-primary" style="background-color:#007bff;">Submit</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- ed part -->

                      <!-- de part -->
                      <div class="modal fade" id="degaapart<?php echo $rga->gaid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color:#dc3545;">
                              <h5 class="modal-title" id="exampleModalLabel">Delete Entry</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form class="" action="<?php echo site_url('Auth/degaapart') ?>/<?php echo $rga->gaid; ?>/<?php echo $rga->gaayr; ?>" method="post">
                              <div class="modal-body">
                                <div class="col-md-12">
                                  <div class="row">
                                    <div class="form-group" style="padding-top:8px;">
                                      <input class="form-control" type="text" name="uacscod" id="uacscod" value="<?php echo $rga->uacscod; ?>" required autofocus>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <hr>
                              <div class="model-footer" style="text-align:right;padding-right:15px;padding-bottom:15px;">
                                <button type="submit" class="btn btn-primary" style="background-color:#007bff;">Submit</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- de part -->
                    </tr>
                <?php } } ?>
                  <tr>
                    <td></td><td>
                      <form action="<?php echo site_url('Auth/edfinmo') ?>/<?php echo $rga->gaayr; ?>" method="post">
                        <td><button type="submit" id="savetotmo" class="btn btn-primary" name="button" style="width:100%;height:80%;">Save MOOE</button></td>
                        <input type="text" name="mogasstot" value="<?php echo $mogasstot; ?>" hidden>
                        <input type="text" name="mosupstot" value="<?php echo $mosupstot; ?>" hidden>
                        <input type="text" name="moassstot" value="<?php echo $moassstot; ?>" hidden>
                        <input type="text" name="momgtstot" value="<?php echo $momgtstot; ?>" hidden>
                      </form>
                    </td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($mogastot); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($mohrdtot); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($moapbtot); ?></td>

                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($mogasstot); ?></td>

                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($mosupppf); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($mosupleg); ?></td>

                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($mosupstot); ?></td>

                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($moassstot); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($molabtot); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($moedutot); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($moeiatot); ?></td>

                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($momgtstot); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($moairtot); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($moh2otot); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($moswmtot); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($motoxtot); ?></td>

                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($mosubtot); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($motot); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($aqmf); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($nwqmf); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($mototappall); ?></td>

                  </tr>
                  <tr><td id="" colspan="19" style="font-weight:bold;padding-left:10.3%;">Capital Outlay (300)</td></tr>

                  <!-- co -->
                  <?php $cogasstot=0; $cosupstot=0; $coassstot=0; $comgtstot=0; $cocnt=0; $cosubtot=0; $cotot=0; $cototappall=0; $coaqmf=0; $conwqmf=0;
                        $alltotapp=0; $alltotsub=0; $allsubtot=0; $cogasgms=0; $cogashrd=0; $cogasapb=0; $cosupppf=0; $cosupleg=0;
                        $coasslab=0; $coassedu=0; $coasseia=0; $coassall=0; $comgtair=0; $comgth2o=0; $comgtswm=0; $comgttox=0;
                        $supppfall=0; $suplegall=0;
                        $asslaball=0; $asseiaall=0; $mgtairall=0; $mgtswmall=0; $mgttoxall=0;
                        $allaqmf=0; $allnwqmf=0;

                    foreach ($fingaa as $rga) {
                    if($rga->parthead=='Capital Outlay (300)'){ $cocnt++;
                      $cogasstot+=intval($rga->gasstot); $cosupstot+=intval($rga->supstot); $coassstot+=intval($rga->assstot);
                      $comgtstot+=intval($rga->mgtstot); $cosubtot=$coassstot+$comgtstot; $cotot=$cogasstot+$cosupstot+$cosubtot;
                      $coaqmf+=intval($rga->aqmf); $conwqmf+=intval($rga->nwqmf);
                      $cototappall=$cotot+$coaqmf+$conwqmf;
                      $cogasgms+=$rga->gasgms; $cogashrd+=$rga->gashrd; $cogasapb+=$rga->gasapb;
                      $cosupppf+=$rga->supppf; $cosupleg+=$rga->supleg;
                      $coasslab+=$rga->asslab; $coassedu+=$rga->assedu; $coasseia+=$rga->asseia;
                      $coassall+=$rga->assstot; $comgtair+=$rga->mgtair; $comgth2o+=$rga->mgth2o; $comgtswm+=$rga->mgtswm; $comgttox+=$rga->mgttox;
                      $allaqmf=$aqmf; $nwllaqmf=$nwqmf;
                  ?>
                      <tr id="<?php echo $rga->uacscod; ?>">
                        <td id="<?php echo $rga->gaid; ?>" class="tdcent"><?php echo $cocnt; ?></td>
                        <td style=""><a href="" data-bs-toggle="modal" data-bs-target="#degaapart<?php echo $rga->gaid; ?>" title="Delete" style=";color:#454545;"><?php echo $rga->uacscod; ?></a></td>
                        <td style="padding-left:5px;"><a href="" data-bs-toggle="modal" data-bs-target="#edgaapart<?php echo $rga->gaid; ?>" title="Delete" style="color:#454545;"><?php echo $rga->part; ?></a></td>

                        <!-- gass -->
                        <form name="forgas" action="<?php echo site_url('Auth/edfinpart') ?>/<?php echo $rga->gaid; ?>" method="post">
                          <td id="tdryt">
                              <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="gasgms" name="gasgms" value="<?php echo $rga->gasgms; ?>" style="text-align:right;">
                          </td>
                          <td id="tdryt">
                              <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="gashrd" name="gashrd" value="<?php echo $rga->gashrd; ?>" style="text-align:right;">
                          </td>
                          <td id="tdryt">
                              <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="gasapb" name="gasapb" value="<?php echo $rga->gasapb; ?>" style="text-align:right;">
                          </td>
                          <td class="tdryt" id="partlast" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo $rga->gasstot; ?></td>
                        </form>
                        <!-- gass -->
                        <!-- support to operations -->
                        <form name="forgas" action="<?php echo site_url('Auth/edfinsup') ?>/<?php echo $rga->gaid; ?>" method="post">
                          <td id="tdryt">
                              <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="supppf" name="supppf" value="<?php echo $rga->supppf; ?>" style="text-align:right;">
                          </td>
                          <td id="tdryt">
                              <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="supleg" name="supleg" value="<?php echo $rga->supleg; ?>" style="text-align:right;">
                          </td>
                          <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo $rga->supstot; ?></td>
                        </form>
                        <!-- support to operations -->
                        <!-- Assessment protection prog  -->
                        <form name="forgas" action="<?php echo site_url('Auth/edfinass') ?>/<?php echo $rga->gaid; ?>" method="post">
                          <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo $rga->assstot; ?></td>
                          <td id="tdryt">
                              <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="asslab" name="asslab" value="<?php echo $rga->asslab; ?>" style="text-align:right;">
                          </td>
                          <td id="tdryt">
                              <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="assedu" name="assedu" value="<?php echo $rga->assedu; ?>" style="text-align:right;">
                          </td>
                          <td id="tdryt">
                              <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="asseia" name="asseia" value="<?php echo $rga->asseia; ?>" style="text-align:right;">
                          </td>
                        </form>
                        <!-- Assessment protection prog  -->
                        <!-- mgt poll cont  -->
                        <form name="forgas" action="<?php echo site_url('Auth/edfinmgt') ?>/<?php echo $rga->gaid; ?>" method="post">
                          <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo $rga->mgtstot; ?></td>
                          <td id="tdryt">
                              <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="mgtair" name="mgtair" value="<?php echo $rga->mgtair; ?>" style="text-align:right;">
                          </td>
                          <td id="tdryt">
                              <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="mgth2o" name="mgth2o" value="<?php echo $rga->mgth2o; ?>" style="text-align:right;">
                          </td>
                          <td id="tdryt">
                              <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="mgtswm" name="mgtswm" value="<?php echo $rga->mgtswm; ?>" style="text-align:right;">
                          </td>
                          <td id="tdryt">
                              <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="mgttox" name="mgttox" value="<?php echo $rga->mgttox; ?>" style="text-align:right;">
                          </td>
                        </form>
                        <!-- mgt poll cont  -->

                        <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($rga->assstot+$rga->mgtstot); ?></td>
                        <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($rga->gasstot+$rga->supstot+$rga->assstot+$rga->mgtstot); ?></td>

                        <!-- qmf  -->
                        <form name="" action="<?php echo site_url('Auth/edqmf') ?>/<?php echo $rga->gaid; ?>" method="post">
                          <td id="tdryt" hidden>
                              <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="subop" name="subop" value="<?php echo $rga->assstot+$rga->mgtstot; ?>" style="text-align:right;">
                          </td>
                          <td id="tdryt" hidden>
                              <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="fintot" name="fintot" value="<?php echo $rga->gasstot+$rga->supstot+$rga->assstot+$rga->mgtstot; ?>" style="text-align:right;">
                          </td>
                          <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="aqmf" name="aqmf" value="<?php echo $rga->aqmf; ?>" style="text-align:right;">
                          </td>
                          <td id="tdryt">
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="nwqmf" name="nwqmf" value="<?php echo $rga->nwqmf; ?>" style="text-align:right;">
                          </td>
                          <td id="tdryt" hidden>
                            <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="totapp" name="totapp" value="<?php echo $subtotapp+$totgassupop; ?>" style="text-align:right;">
                          </td>
                        </form>
                        <!-- qmf  -->

                        <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($rga->totapp); ?></td>

                        <!-- ed part -->
                        <div class="modal fade" id="edgaapart<?php echo $rga->gaid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header" style="background-color:#ffc107;">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Entry</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form class="" action="<?php echo site_url('Auth/edgaapart') ?>/<?php echo $rga->gaid; ?>/<?php echo $rga->gaayr; ?>" method="post">
                                <div class="modal-body">
                                  <div class="col-md-12">
                                    <div class="row">
                                      <div class="form-group" style="padding-top:8px;">
                                        <input class="form-control" type="text" name="uacscod" id="uacscod" value="<?php echo $rga->uacscod; ?>" required autofocus>
                                      </div>
                                      <div class="form-group" style="padding-top:10px;margin-bottom:-10px;">
                                        <input class="form-control" type="text" name="part" id="part" value="<?php echo $rga->part; ?>" required>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <hr>
                                <div class="model-footer" style="text-align:right;padding-right:15px;padding-bottom:15px;">
                                  <button type="submit" class="btn btn-primary" style="background-color:#007bff;">Submit</button>
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <!-- ed part -->

                        <!-- de part -->
                        <div class="modal fade" id="degaapart<?php echo $rga->gaid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header" style="background-color:#dc3545;">
                                <h5 class="modal-title" id="exampleModalLabel">Delete Entry</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form class="" action="<?php echo site_url('Auth/degaapart') ?>/<?php echo $rga->gaid; ?>/<?php echo $rga->gaayr; ?>" method="post">
                                <div class="modal-body">
                                  <div class="col-md-12">
                                    <div class="row">
                                      <div class="form-group" style="padding-top:8px;">
                                        <input class="form-control" type="text" name="uacscod" id="uacscod" value="<?php echo $rga->uacscod; ?>" required autofocus>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <hr>
                                <div class="model-footer" style="text-align:right;padding-right:15px;padding-bottom:15px;">
                                  <button type="submit" class="btn btn-primary" style="background-color:#007bff;">Submit</button>
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <!-- de part -->
                      </tr>
                  <?php } } ?>
                  <tr>
                    <td></td><td></td><td style="font-weight:bold;">Subtotal, Capital Outlay</td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($cogasgms); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($cogashrd); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($cogasapb); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($cogasstot); ?></td>

                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($cosupppf); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($cosupleg); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($cosupstot); ?></td>

                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($coassall); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($coasslab); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($coassedu); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($coasseia); ?></td>

                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($comgtstot); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($comgtair); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($comgth2o); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($comgtswm); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($comgttox); ?></td>

                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($cosubtot); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($cotot); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($coaqmf); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($conwqmf); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($cototappall); ?></td>
                  </tr>
                  <tr>
                    <td></td>

                    <td>
                      <form action="<?php echo site_url('Auth/edfincoas') ?>/<?php echo $rga->gaayr; ?>" method="post">
                        <td><button type="submit" id="savecoas" class="btn btn-primary" name="button" style="width:100%;height:80%;">Save CO / New Appropriation</button></td>
                        <input type="text" name="cogasstot" value="<?php echo $cogasstot; ?>" hidden>
                        <input type="text" name="cosupstot" value="<?php echo $cosupstot; ?>" hidden>
                        <input type="text" name="coassstot" value="<?php echo $coassstot; ?>" hidden>
                        <input type="text" name="comgtstot" value="<?php echo $comgtstot; ?>" hidden>

                        <input type="text" name="cosubtot" value="<?php echo $cosubtot; ?>" hidden>
                        <input type="text" name="cotot" value="<?php echo $cotot; ?>" hidden>
                        <input type="text" name="cototappall" value="<?php echo $cototappall; ?>" hidden>

                        <input type="text" name="alltot" value="<?php echo $alltot=$totps+$mogasstot+$cogasstot; ?>" hidden>
                        <input type="text" name="alltotsup" value="<?php echo $alltotsup=$totpssup+$mosupstot+$cosupstot; ?>" hidden>
                        <input type="text" name="alltotass" value="<?php echo $alltotass=$totpsass+$moassstot+$coassstot; ?>" hidden>
                        <input type="text" name="alltotmgt" value="<?php echo $alltotmgt=$totpsmgt+$momgtstot+$comgtstot; ?>" hidden>

                        <input type="text" name="allsubtot" value="<?php echo $allsubtot=$cosubtot+$mosubtot+$rlsubopstot; ?>" hidden>
                        <input type="text" name="alltotsub" value="<?php echo $alltotsub=$cotot+$motot+$rliptot; ?>" hidden>
                        <input type="text" name="alltotapp" value="<?php echo $alltotapp=$cototappall+$mototappall+$rliptotap; ?>" hidden>
                      </form>
                    </td>
                    <?php $gasgmsall=$mogasstot+$subrlgasgms+$cogasgms; $gashrdall=$mohrdtot+$rlsubgashrd+$cogashrd; $gasapball=$moapbtot+$rlsubgasapb+$cogasapb;
                          $gasapball=$moapbtot+$rlsubgasapb+$cogasapb; $supppfall=$rlsubsupppf+$mosupppf+$cosupppf; $suplegall=$subpssupleg+$cosupleg+$mosupleg;
                          $asslaball=$coasslab+$rlsublab+$molabtot; $asseduall=$moedutot+$coassedu+$rlsubedu; $asseiaall=$coasseia+$moeiatot+$rlsubeia;
                          $mgtairall=$comgtair+$moairtot+$rlairtot; $mgth2oall=$comgth2o+$moh2otot+$rlh2otot; $mgtswmall=$comgtswm+$moswmtot+$rlswmtot;
                          $mgttoxall=$comgttox+$motoxtot+$rltoxtot; $allaqmf=$coaqmf+$aqmf+$rlsubaqmf; $allnwqmf=$conwqmf+$nwqmf+$rlsubnwqmf;
                    ?>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($gasgmsall); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($gashrdall); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($gasapball); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($alltot); ?></td>

                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($supppfall); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($suplegall); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($alltotsup); ?></td>

                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($alltotass); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($asslaball); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($asseduall); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($asseiaall); ?></td>

                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($alltotmgt); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($mgtairall); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($mgth2oall); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($mgtswmall); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:20px;"><?php echo number_format($mgttoxall); ?></td>

                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($cosubtot+$mosubtot+$rlsubopstot); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($cotot+$motot+$rliptot); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($allaqmf); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($allnwqmf); ?></td>
                    <td class="tdryt" style="padding-right:10px;font-weight:bold;font-size:18px;"><?php echo number_format($cototappall+$mototappall+$rliptotap); ?></td>

                  </tr>
                </tbody>
            </table>
            <!-- table -->

            <script type="text/javascript">
             // number only textbox
             function numericFilter(txb) { txb.value = txb.value.replace(/[^\0-9]/ig, ""); }
            </script>

          </div>
        </div>
        <!-- div ends-->

      </div>

    <!-- add part -->
    <div class="modal fade" id="adpart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Particulars</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form class="" action="<?php echo site_url('Auth/adfinpart') ?>/<?php echo $rga->gaayr; ?>" method="post">
            <div class="modal-body">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:8px;">
                      <select class="form-select" name="gaayr">
                        <?php // Set the starting year and how many years to display
                          $start_year = 2020; $end_year = date('Y');
                          // Loop through each year and add it as an option in the dropdown menu
                          for ($i = $start_year; $i <= $end_year; $i++) { $selected='';
                            if($i==$end_year){ $selected='selected'; } echo "<option value=\"$i\" $selected>$i</option>"; }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:8px;">
                      <input class="form-control" type="text" name="uacscod" placeholder="UACS Code" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group" style="padding-top:8px;">
                      <select class="form-select" name="parthead" required>
                        <option value="">Particulars Header here...</option>
                        <option value="Personal Services (100)">Personal Services (100)</option>
                        <option value="RLIP">RLIP</option>
                        <option value="Maintenance & Other Operating Expenses (200)">Maintenance & Other Operating Expenses (200)</option>
                        <option value="Capital Outlay (300)">Capital Outlay (300)</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group" style="padding-top:8px;">
                      <input class="form-control" type="text" name="part" placeholder="Enter Particulars here..." required>
                    </div>
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
    <!-- add part -->

  </body>
</html>

    <!-- edit all modal -->
    <script type="text/javascript">$(document).on("click", ".open-homeEvents", function () {
       var eventId = $(this).data('id');
       $(".modal-body #eventId").val( eventId );
       $('#idHolder').html( eventId );
    });</script>
    <!-- edit all modal -->

    <script type="text/javascript">
      $(document).ready( function () {
        $('#tabgaa').DataTable({
          'paging':false // remove paging
          fixedHeader: true
          "initComplete": function(settings, json) {
              $('.dataTables_length select').val(100);
          }
        });
      } );
    </script>

    <!-- add fin tot -->
    <script type="text/javascript">
    $(document).ready(function() {
        $('formtintot').submit(function(event) {
            event.preventDefault(); // prevent the form from submitting
            $.ajax({
                url: '/edfintot',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    // if (response.status == 'success') {//     // update the page with the new data// } else {//     // show an error message// }
                }
            });
        });
    });
    </script>
    <!-- add fin tot -->

    <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Vendor JS Files -->
    <script src="<?php echo base_url(); ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/vendor/chart.js/chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/echarts/echarts.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/quill/quill.min.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/vendor/simple-datatables/simple-datatables.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
