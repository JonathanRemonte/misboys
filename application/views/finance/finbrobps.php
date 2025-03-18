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
    /* .tdryt { text-align:right;width:55px; } .tdcent { text-align:center; }
    .gasth { width:7px; }
    .gasthsub { width:12px; } */

    #tabbrobps { font-family:Arial, Helvetica, sans-serif;border-collapse:collapse;width:100%; }
    #tabbrobps th { text-align:center;background-color:#f2fffc;height:62px;font-size:12px;}
    #tabbrobps td { text-align: right;font-size:12px; }
    #tabbrobps td, #tabbrobps th { border:2px solid #ddd;padding:3px; }
    #tabbrobps tr:nth-child(even){ background-color:#f2f2f2; }

    #tdleft{text-align:left !important;}
    /* #tabbrobps tr:hover {background-color: #ddd;} */
    /* #tabbrobps th { padding-top: 1px;padding-bottom: 1px;text-align:center;background-color: #04AA6D;color: white; } */
    /* #tdhead { font-weight: bold;} */
  </style>

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/1.12.1-jquery.dataTables.min.css"> -->

  <body style="">

    <div class="" style="padding-top:30px;padding-left:5px;padding-right:10px;">
      <div class="pagetitle" style="margin-bottom:-10px;padding-left:10px;">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-2" style="size:20px;">
              <a type="button" class="btn btn-primary" href="<?php echo base_url(); ?>findash"><i class="bi bi-backspace"></i> Back</a>
            </div>
            <div class="col-md-6" style="size:20px;text-align:center;">
              <h1>BREAKDOWN OF OBLIGATION (PS)</h1>
              <h1>MIMAROPA CY
                <?php
                  $dsply = []; // initialize an empty array to keep track of displayed values
                  foreach ($fingaa as $rga) {
                    if (!in_array($rga->gaayr, $dsply)) { // check if current value has already been displayed
                      echo $rga->gaayr; // display the value
                      $dsply[] = $rga->gaayr; // add the value to the displayed array
                    }
                  }
               ?>
              </h1>
            </div>
          </div>
        </div>
      </div>

        <!-- div starts-->
        <div class="tab-pane fade active show" role="tabpanel" aria-labelledby="home-tab" style="padding-left:10px;">
          <div class="row" style="padding-top:20px;">

            <div class="col-md-12">

                <!-- tab -->
                  <div class="card-body" style="">

                  <!-- Default Tabs -->
                  <ul class="nav nav-tabs d-flex" id="brobps" role="tablist">

                    <li class="nav-item flex-fill" role="presentation">
                      <button class="nav-link w-100 active" id="tabgass" data-bs-toggle="tab" data-bs-target="#gassjust" type="button" role="tab" aria-controls="home" aria-selected="false" title="10010000">GASS</button>
                    </li>
                    <li class="nav-item flex-fill" role="presentation">
                      <button class="nav-link w-100" id="tabhrd" data-bs-toggle="tab" data-bs-target="#hrdjust" type="button" role="tab" aria-controls="profile" aria-selected="false" title="1000000100002000">HRD</button>
                    </li>
                    <li class="nav-item flex-fill" role="presentation">
                      <button class="nav-link w-100" id="tabaop" data-bs-toggle="tab" data-bs-target="#aopjust" type="button" role="tab" aria-controls="contact" aria-selected="true" title="1000000100003000">Admin of Personnel</button>
                    </li>
                    <li class="nav-item flex-fill" role="presentation">
                      <button class="nav-link w-100" id="tabppf" data-bs-toggle="tab" data-bs-target="#ppfjust" type="button" role="tab" aria-controls="contact" aria-selected="true" title="200000100001000">PPFMIS</button>
                    </li>
                    <li class="nav-item flex-fill" role="presentation">
                      <button class="nav-link w-100" id="tableg" data-bs-toggle="tab" data-bs-target="#legjust" type="button" role="tab" aria-controls="contact" aria-selected="true" title="200000100002000">Legal Ser.</button>
                    </li>
                    <li class="nav-item flex-fill" role="presentation">
                      <button class="nav-link w-100" id="tabpol" data-bs-toggle="tab" data-bs-target="#poljust" type="button" role="tab" aria-controls="contact" aria-selected="true" title="310100100001000">Poll. Res. & Lab Ser.</button>
                    </li>
                    <li class="nav-item flex-fill" role="presentation">
                      <button class="nav-link w-100" id="edupol" data-bs-toggle="tab" data-bs-target="#edujust" type="button" role="tab" aria-controls="contact" aria-selected="true" title="310100100002000">Env'tl. Educ. Info.</button>
                    </li>
                    <li class="nav-item flex-fill" role="presentation">
                      <button class="nav-link w-100" id="eiapol" data-bs-toggle="tab" data-bs-target="#eiajust" type="button" role="tab" aria-controls="contact" aria-selected="true" title="310100100003000">EIA</button>
                    </li>
                    <li class="nav-item flex-fill" role="presentation">
                      <button class="nav-link w-100" id="airpol" data-bs-toggle="tab" data-bs-target="#airjust" type="button" role="tab" aria-controls="contact" aria-selected="true" title="310200100001000">AIR</button>
                    </li>
                    <li class="nav-item flex-fill" role="presentation">
                      <button class="nav-link w-100" id="h2opol" data-bs-toggle="tab" data-bs-target="#h2ojust" type="button" role="tab" aria-controls="contact" aria-selected="true" title="310200100002000">Water</button>
                    </li>
                    <li class="nav-item flex-fill" role="presentation">
                      <button class="nav-link w-100" id="swmpol" data-bs-toggle="tab" data-bs-target="#swmjust" type="button" role="tab" aria-controls="contact" aria-selected="true" title="310200100003000">SWM</button>
                    </li>
                    <li class="nav-item flex-fill" role="presentation">
                      <button class="nav-link w-100" id="toxpol" data-bs-toggle="tab" data-bs-target="#toxjust" type="button" role="tab" aria-controls="contact" aria-selected="true" title="310200100004000">Toxic & Haz</button>
                    </li>
                  </ul>

                  <div class="tab-content pt-2" id="brobps">
                    <div class="tab-pane fade active show" id="gassjust" role="tabpanel" aria-labelledby="tabgass">
                      <!-- gass table -->
                      <table id="tabbrobps">
                        <thead>
                          <tr>
                            <th>Date</th><th>ORS Number</th><th>Claimants</th><th>Particulars</th><th>Total Allotment</th><th>GASS (10010000)</th>
                            <!-- header -->
                            <?php foreach ($fingaa as $gms){ if($gms->gasgms==0){}else{ ?> <td style="text-align:center;"><?php echo $gms->part; } ?></td> <?php } ?>
                            <!-- header -->
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <?php foreach ($fingass as $gabr){ $allpsgas=$gabr->subpsgasgms; $subpsappall=$gabr->subpsappall; } ?>
                            <td></td><td></td><td></td><td id="tdleft">PS</td><td><?php echo number_format($subpsappall*1000,2); ?></td><td><?php echo number_format($allpsgas*1000,2); ?></td>
                            <!-- ps -->
                            <?php foreach ($fingaa as $gms){ if($gms->gasgms==0){}else{ ?> <td><?php echo number_format($gms->gasgms*1000,2); } ?></td> <?php } ?>
                            <!-- ps -->
                          </tr>

                          <tr>
                            <td></td><td></td><td></td><td id="tdleft"><a href="" data-bs-toggle="modal" data-bs-target="#adsaagass" style="color:#454545;">SAA</a></td><td></td>
                            <?php foreach ($finsaa as $saa) { ?>
                              <td><?php echo $saa->sagasstot; ?></td>
                              <td><?php echo $saa->sabassal; ?></td><td><?php echo $saa->sapera; ?></td><td><?php echo $saa->sara; ?></td><td><?php echo $saa->sata; ?></td>
                              <td><?php echo $saa->sacloth; ?></td><td><?php echo $saa->saallmag; ?></td><td><?php echo $saa->salaunmag; ?></td><td><?php echo $saa->saehp; ?></td>
                              <td><?php echo $saa->samdyrbon; ?></td><td><?php echo $saa->sayrendbon; ?></td><td><?php echo $saa->sacshgft; ?></td><td><?php echo $saa->sapei; ?></td>
                              <td><?php echo $saa->sapagibig; ?></td><td><?php echo $saa->saphl; ?></td><td><?php echo $saa->saecipciv; ?></td><td><?php echo $saa->salmpsm; ?></td>

                              <!-- Basic Modal -->
                              <div class="modal fade" id="adsaagass" tabindex="-1" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-xl">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Add PS SAA</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form class="" action="<?php echo site_url('Auth/adsaaps') ?>/<?php echo $currentYear; ?>" method="post">
                                      <div class="modal-body">
                                        <div class="col-md-12">
                                          <div class="row">
                                            <div class="col-md-2">
                                              <label>Basic Salary</label>
                                              <input class="form-control" type="text" id="sabassal" name="sabassal" value="<?php echo $saa->sabassal; ?>">
                                            </div>
                                            <div class="col-md-2">
                                              <label>PERA</label>
                                              <input class="form-control" type="text" id="sapera" name="sapera" value="<?php echo $saa->sapera; ?>">
                                            </div>
                                            <div class="col-md-2">
                                              <label>RA</label>
                                              <input class="form-control" type="text" id="sara" name="sara" value="<?php echo $saa->sara; ?>">
                                            </div>
                                            <div class="col-md-2">
                                              <label>TA</label>
                                              <input class="form-control" type="text" id="sata" name="sata" value="<?php echo $saa->sata; ?>">
                                            </div>
                                            <div class="col-md-2">
                                              <label>Clothing</label>
                                              <input class="form-control" type="text" id="sacloth" name="sacloth" value="<?php echo $saa->sacloth; ?>">
                                            </div>
                                            <div class="col-md-2">
                                              <label>Subsistence Magna</label>
                                              <input class="form-control" type="text" id="saallmag" name="saallmag" value="<?php echo $saa->saallmag; ?>">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-12" style="padding-top:10px;">
                                          <div class="row">
                                            <div class="col-md-2">
                                              <label>Laundry Magna</label>
                                              <input class="form-control" type="text" id="salaunmag" name="salaunmag" value="<?php echo $saa->salaunmag; ?>">
                                            </div>
                                            <div class="col-md-2">
                                              <label>EHP Magna</label>
                                              <input class="form-control" type="text" id="saehp" name="saehp" value="<?php echo $saa->saehp; ?>">
                                            </div>
                                            <div class="col-md-2">
                                              <label>Mid-Year</label>
                                              <input class="form-control" type="text" id="samdyrbon" name="samdyrbon" value="<?php echo $saa->samdyrbon; ?>">
                                            </div>
                                            <div class="col-md-2">
                                              <label>Year-End Bonus</label>
                                              <input class="form-control" type="text" id="sayrendbon" name="sayrendbon" value="<?php echo $saa->sayrendbon; ?>">
                                            </div>
                                            <div class="col-md-2">
                                              <label>Cash Gift</label>
                                              <input class="form-control" type="text" id="sacshgft" name="sacshgft" value="<?php echo $saa->sacshgft; ?>">
                                            </div>
                                            <div class="col-md-2">
                                              <label>PEI</label>
                                              <input class="form-control" type="text" id="sapei" name="sapei" value="<?php echo $saa->sapei; ?>">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-12" style="padding-top:10px;">
                                          <div class="row">
                                            <div class="col-md-2">
                                              <label>Pagibig</label>
                                              <input class="form-control" type="text" id="sapagibig" name="sapagibig" value="<?php echo $saa->sapagibig; ?>">
                                            </div>
                                            <div class="col-md-2">
                                              <label>Philhealth</label>
                                              <input class="form-control" type="text" id="saphl" name="saphl" value="<?php echo $saa->saphl; ?>">
                                            </div>
                                            <div class="col-md-2">
                                              <label>ECIP_Civilian</label>
                                              <input class="form-control" type="text" id="saecipciv" name="saecipciv" value="<?php echo $saa->saecipciv; ?>">
                                            </div>
                                            <div class="col-md-2">
                                              <label>Lumpsum</label>
                                              <input class="form-control" type="text" id="salmpsm" name="salmpsm" value="<?php echo $saa->salmpsm; ?>">
                                            </div>
                                            <div class="col-md-2" style="padding-top:30px;padding-left:90px;">
                                              TOTAL =>
                                            </div>
                                            <div class="col-md-2">
                                              <label>GASS (10010000)</label>
                                              <input class="form-control" type="text" id="sagasstot" name="sagasstot" value="<?php echo $saa->sagasstot; ?>" readonly>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div><!-- End Basic Modal-->

                            <?php } ?>
                          </tr>

                          <!-- JavaScript code to update the third textbox -->
                          <script>

                          // sabassal;sapera;sara;sata;sacloth;saallmag;salaunmag;saehp;samdyrbon;sayrendbon;sacshgft;

                            // Get references to the textboxes
                            var sabassal = document.getElementById("sabassal"); var sapera = document.getElementById("sapera");
                            var sara = document.getElementById("sara"); var sata = document.getElementById("sata");
                            var sacloth = document.getElementById("sacloth"); var saallmag = document.getElementById("saallmag");

                            var salaunmag = document.getElementById("salaunmag"); var saehp = document.getElementById("saehp");
                            var samdyrbon = document.getElementById("samdyrbon"); var sayrendbon = document.getElementById("sayrendbon");
                            var sacshgft = document.getElementById("sacshgft"); var sapei = document.getElementById("sapei");

                            var sapagibig = document.getElementById("sapagibig"); var saphl = document.getElementById("saphl");
                            var saecipciv = document.getElementById("saecipciv"); var salmpsm = document.getElementById("salmpsm");
                            var sagasstot = document.getElementById("sagasstot");

                            // Listen for changes in saphl and saecipciv
                            sabassal.addEventListener("input", updatesagasstot); sapera.addEventListener("input", updatesagasstot);
                            sara.addEventListener("input", updatesagasstot); sata.addEventListener("input", updatesagasstot);
                            sacloth.addEventListener("input", updatesagasstot); saallmag.addEventListener("input", updatesagasstot);

                            salaunmag.addEventListener("input", updatesagasstot); saehp.addEventListener("input", updatesagasstot);
                            samdyrbon.addEventListener("input", updatesagasstot); sayrendbon.addEventListener("input", updatesagasstot);
                            sacshgft.addEventListener("input", updatesagasstot); sapei.addEventListener("input", updatesagasstot);

                            sapagibig.addEventListener("input", updatesagasstot); saphl.addEventListener("input", updatesagasstot);
                            saecipciv.addEventListener("input", updatesagasstot); salmpsm.addEventListener("input", updatesagasstot);

                            function updatesagasstot() {
                              // Get the values of saphl and saecipciv
                              var value1 = parseFloat(sabassal.value); var value2 = parseFloat(sapera.value);
                              var value3 = parseFloat(sara.value); var value4 = parseFloat(sata.value);
                              var value5 = parseFloat(sacloth.value); var value6 = parseFloat(saallmag.value);

                              var value7 = parseFloat(salaunmag.value); var value8 = parseFloat(saehp.value);
                              var value9 = parseFloat(samdyrbon.value); var value10 = parseFloat(sayrendbon.value);
                              var value11 = parseFloat(sacshgft.value); var value12 = parseFloat(sapei.value);

                              var value13 = parseFloat(sapagibig.value); var value14 = parseFloat(saphl.value);
                              var value15 = parseFloat(saecipciv.value); var value16 = parseFloat(salmpsm.value);

                              // Update the value of salmpsm with the sum of the first two textboxes
                              if (
                                !isNaN(value1) && !isNaN(value2) && !isNaN(value3) && !isNaN(value4) && !isNaN(value5) && !isNaN(value6) &&
                                 !isNaN(value7) && !isNaN(value8) && !isNaN(value9) && !isNaN(value10) && !isNaN(value11) && !isNaN(value12) &&
                                  !isNaN(value13) && !isNaN(value14) && !isNaN(value15) && !isNaN(value16)) {
                                sagasstot.value = (
                                  value1 + value2 + value3 + value4 + value5 + value6 + value7 + value8 + value9 + value10 +
                                   value11 + value12 + value13 + value14 + value15 + value16).toFixed(2);
                              } else { sagasstot.value = ""; }
                            }
                          </script>

                          <tr>
                            <td></td><td></td><td></td><td id="tdleft">Total</td><td><?php echo number_format(000.00,2) ?></td>
                            <td><?php echo number_format(000.00,2) ?></td><td><?php echo number_format(000.00,2) ?></td><td><?php echo number_format(000.00,2) ?></td>
                            <td><?php echo number_format(000.00,2) ?></td><td><?php echo number_format(000.00,2) ?></td><td><?php echo number_format(000.00,2) ?></td>
                            <td><?php echo number_format(000.00,2) ?></td><td><?php echo number_format(000.00,2) ?></td><td><?php echo number_format(000.00,2) ?></td>
                            <td><?php echo number_format(000.00,2) ?></td><td><?php echo number_format(000.00,2) ?></td><td><?php echo number_format(000.00,2) ?></td>
                            <td><?php echo number_format(000.00,2) ?></td><td><?php echo number_format(000.00,2) ?></td><td><?php echo number_format(000.00,2) ?></td>
                            <td><?php echo number_format(000.00,2) ?></td><td><?php echo number_format(000.00,2) ?></td>
                          </tr>
                        </tbody>
                      </table>
                      <!-- gass table -->
                    </div>
                    <div class="tab-pane fade" id="hrdjust" role="tabpanel" aria-labelledby="tabhrd">
                      <!-- hrd table -->
                      <table id="tabbrobps">
                        <thead>
                          <tr>
                            <th rowspan="2">Basic Salary</th><th rowspan="2">PERA</th><th rowspan="2">Clothing</th><th rowspan="2">Mid-Year Bonus</th><th>Year-End Bonus <br>Bonus_Civilian</th><th>Cash Gift</th><th>PEI</th><th>Pag-Ibig</th><th>Philhealth</th><th>ECIP_Civilian</th><th>Lumpsum Step Increment</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td>
                          </tr>
                        </tbody>
                      </table>
                      <!-- hrd table -->
                    </div>
                    <div class="tab-pane fade" id="aopjust" role="tabpanel" aria-labelledby="tabaop">
                      <!-- adm per table -->
                      <table id="tabbrobps">
                        <thead>
                          <tr>
                            <th>Basic Salary</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>123456</td>
                          </tr>
                        </tbody>
                      </table>
                      <!-- adm per table -->
                    </div>
                    <div class="tab-pane fade" id="ppfjust" role="tabpanel" aria-labelledby="tabppf">
                      <!-- ppfmis table -->
                      <table id="tabbrobps">
                        <thead>
                          <tr>
                            <th>Basic Salary</th><th>PERA</th><th>Clothing</th><th>Mid-Year Bonus</th><th>Year-End Bonus <br>Bonus Civilian</th><th>Cash Gift</th><th>PEI</th><th>Pag-Ibig</th><th>Philhealth</th><th>ECIP_Civilian</th><th>Lumpsum Step Increment</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td>
                          </tr>
                        </tbody>
                      </table>
                      <!-- ppfmis table -->
                    </div>
                    <div class="tab-pane fade" id="legjust" role="tabpanel" aria-labelledby="tableg">
                      <!-- legal table -->
                      <table id="tabbrobps">
                        <thead>
                          <tr>
                            <th>Basic Salary</th><th>PERA</th><th>Clothing</th><th>Mid-Year Bonus</th><th>Year-End Bonus <br>Bonus Civilian</th><th>Cash Gift</th><th>PEI</th><th>Pag-Ibig</th><th>Philhealth</th><th>ECIP_Civilian</th><th>Lumpsum Step Increment</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td>
                          </tr>
                        </tbody>
                      </table>
                      <!-- legal table -->
                    </div>
                    <div class="tab-pane fade" id="poljust" role="tabpanel" aria-labelledby="tabpol">
                      <!-- poll table -->
                      <table id="tabbrobps">
                        <thead>
                          <tr>
                            <th>Basic Salary</th><th>PERA</th><th>Clothing</th><th>Mid-Year Bonus</th><th>Year-End Bonus <br>Bonus Civilian</th><th>Cash Gift</th><th>PEI</th><th>Pag-Ibig</th><th>Philhealth</th><th>ECIP_Civilian</th><th>Lumpsum Step Increment</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td>
                          </tr>
                        </tbody>
                      </table>
                      <!-- poll table -->
                    </div>
                    <div class="tab-pane fade" id="edujust" role="tabpanel" aria-labelledby="tabedu">
                      <!-- edu table -->
                      <table id="tabbrobps">
                        <thead>
                          <tr>
                            <th>Basic Salary</th><th>PERA</th><th>Clothing</th><th>Mid-Year Bonus</th><th>Year-End Bonus <br>Bonus Civilian</th><th>Cash Gift</th><th>PEI</th><th>Pag-Ibig</th><th>Philhealth</th><th>ECIP_Civilian</th><th>Lumpsum Step Increment</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td>
                          </tr>
                        </tbody>
                      </table>
                      <!-- edu table -->
                    </div>
                    <div class="tab-pane fade" id="eiajust" role="tabpanel" aria-labelledby="tabeia">
                      <!-- eia table -->
                      <table id="tabbrobps">
                        <thead>
                          <tr>
                            <th>Basic Salary</th><th>PERA</th><th>Clothing</th><th>Mid-Year Bonus</th><th>Year-End Bonus <br>Bonus Civilian</th><th>Cash Gift</th><th>PEI</th><th>Pag-Ibig</th><th>Philhealth</th><th>ECIP_Civilian</th><th>Lumpsum Step Increment</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td>
                          </tr>
                        </tbody>
                      </table>
                      <!-- eia table -->
                    </div>
                    <div class="tab-pane fade" id="airjust" role="tabpanel" aria-labelledby="tabair">
                      <!-- air table -->
                      <table id="tabbrobps">
                        <thead>
                          <tr>
                            <th>Basic Salary</th><th>PERA</th><th>RA</th><th>TA</th><th>Clothing</th><th>Mid-Year Bonus</th><th>Year-End Bonus <br>Bonus Civilian</th><th>Cash Gift</th><th>PEI</th><th>Pag-Ibig</th><th>Philhealth</th><th>ECIP_Civilian</th><th>Lumpsum Step Increment</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td>
                          </tr>
                        </tbody>
                      </table>
                      <!-- air table -->
                    </div>
                    <div class="tab-pane fade" id="h2ojust" role="tabpanel" aria-labelledby="tabh2o">
                      <!-- h2o table -->
                      <table id="tabbrobps">
                        <thead>
                          <tr>
                            <th>Basic Salary</th><th>PERA</th><th>Clothing</th><th>Mid-Year Bonus</th><th>Year-End Bonus <br>Bonus Civilian</th><th>Cash Gift</th><th>PEI</th><th>Pag-Ibig</th><th>Philhealth</th><th>ECIP_Civilian</th><th>Lumpsum Step Increment</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td>
                          </tr>
                        </tbody>
                      </table>
                      <!-- h2o table -->
                    </div>
                    <div class="tab-pane fade" id="swmjust" role="tabpanel" aria-labelledby="tabswm">
                      <!-- swm table -->
                      <table id="tabbrobps">
                        <thead>
                          <tr>
                            <th>Basic Salary</th><th>PERA</th><th>Clothing</th><th>Mid-Year Bonus</th><th>Year-End Bonus <br>Bonus Civilian</th><th>Cash Gift</th><th>PEI</th><th>Pag-Ibig</th><th>Philhealth</th><th>ECIP_Civilian</th><th>Lumpsum Step Increment</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td>
                          </tr>
                        </tbody>
                      </table>
                      <!-- swm table -->
                    </div>
                    <div class="tab-pane fade" id="toxjust" role="tabpanel" aria-labelledby="tabtox">
                      <!-- tox table -->
                      <table id="tabbrobps">
                        <thead>
                          <tr>
                            <th>Basic Salary</th><th>PERA</th><th>Clothing</th><th>Mid-Year Bonus</th><th>Year-End Bonus <br>Bonus Civilian</th><th>Cash Gift</th><th>PEI</th><th>Pag-Ibig</th><th>Philhealth</th><th>ECIP_Civilian</th><th>Lumpsum Step Increment</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td><td>123456</td>
                          </tr>
                        </tbody>
                      </table>
                      <!-- tox table -->
                    </div>
                  </div><!-- End Default Tabs -->

                </div>
                <!-- tab -->

*****************
<div class="">
      <table>
        <thead>
          <tr>
            <?php
              foreach ($fingaa as $gms) { ?>
            <th><?php echo $gms->gasgms; ?></th>
          <?php }//foreach
        ?>
          </tr>
        </thead>
      </table>

</div>

*****************

            <script type="text/javascript">
             // number only textbox
             function numericFilter(txb) { txb.value = txb.value.replace(/[^\0-9]/ig, ""); }
            </script>

          </div>
        </div>
        <!-- div ends-->

      </div>

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
        $('#tabbrobps').DataTable({
          'paging':false // remove paging
          fixedHeader: true
          "initComplete": function(settings, json) {
              $('.dataTables_length select').val(100);
          }
        });
      } );
    </script>

    <!-- add fin tot -->
    <!-- <script type="text/javascript">
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
    </script> -->
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
