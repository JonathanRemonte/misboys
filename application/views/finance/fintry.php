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

    <div class="col-md-12">
      <div class="row">
        <div class="col-md-4">
          RETY
        </div>
        <div class="col-md-4">
          <select class="form-select" name="year" id="year-select">
            <?php
              $currentYear = date('Y');
              for ($i = $currentYear; $i >= 2020; $i--) {
                $selected = ($i == $currentYear) ? 'selected' : '';
                echo '<option value="' . $i . '" ' . $selected . '>' . $i . '</option>';
              }
            ?>
          </select>
        </div>
        <div class="col-md-2">
          EWRTY
        </div>
      </div>
    </div>

    <script>
      const yearSelect = document.getElementById('year-select');
      yearSelect.addEventListener('change', function() {
        const year = yearSelect.value;
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
          if (xhr.readyState === 4 && xhr.status === 200) {
            const response = xhr.responseText;
            console.log(response); // Handle the response data here
          }
        };
        xhr.open('GET', 'finfetch.php?year=' + year);
        xhr.send();
      });
    </script>

    **************

    <div class="" style="padding-top:30px;padding-left:5px;padding-right:10px;">
      <div class="pagetitle" style="margin-bottom:-10px;padding-left:10px;">
        <span class="">Note: For best result zoom in to 80%.</span>
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-2" style="size:20px;">
              <a type="button" class="btn btn-primary" href="<?php echo base_url(); ?>findash"><i class="bi bi-backspace"></i> Back</a>
            </div>
            <div class="col-md-7" style="size:20px;text-align:center;">
              <h1>FINTRY</h1>
              <h1>2023</h1>
            </div>
            <div class="col-md-3" style="size:20px;">
              <div class="row">
                <form class="" action="<?php echo site_url('Auth/getfingabr') ?>" method="post">
                  <div class="col-md-8">
                    <select class="form-select" id="gaayr" name="gaayr">
                      <?php // Set the starting year and how many years to display
                        $start_year = 2020; $end_year = date('Y');
                        // Loop through each year and add it as an option in the dropdown menu
                        for ($i = $start_year; $i <= $end_year; $i++) { $selected='';
                          if($i==$end_year){ $selected='selected'; } echo "<option value=\"$i\" $selected>$i</option>"; }
                      ?>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <button type="submit" class="form-control" name="button">Filter</button>
                  </div>
                </form>
                </div>
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
                            <th>Date</th><th>ORS Number</th><th>Claimants</th><th>Particulars</th><th>Total</th><th>GASS 10010000</th><th>Human Res. Devt. 1000000100002000</th><th>Admin. Of Personnel Benefits 1000000100003000</th><th>PPFMIS 200000100001000</th><th>Legal Ser. Prov. Of Sec. to the PAB 200000100002000</th><th>Poll. Res. And Lab Ser. 310100100001000</th><th>Env'tl. Educ. Info. 310100100002000</th><th>EIA 310100100003000</th><th>AIR 310200100001000</th>
                            <th>WATER 310200100002000</th><th>Solid Waste 310200100003000</th><th>Toxic and Hazardous 310200100004000</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($fingabr as $gabr) { ?>
                          <tr>
                            <td></td><td id="tdleft"></td><td id="tdleft"></td><td id="tdleft">PS</td><td><?php echo number_format($gabr->allgastot,2) ?></td><td><a href="" data-bs-toggle="modal" data-bs-target="#myModal"><?php echo number_format($gabr->subpsgasgms,2) ?></a></td>
                              <td><?php echo number_format($gabr->subpsgashrd,2) ?></td>
                            <td><?php echo number_format($gabr->subpsgasapb,2) ?></td><td><?php echo number_format($gabr->subpssupppf,2) ?></td><td><?php echo number_format($gabr->subpssupleg,2) ?></td><td><?php echo number_format($gabr->subenvistot,2) ?></td><td><?php echo number_format($gabr->subsuplabstot,2) ?></td>
                            <td><?php echo number_format($gabr->subsupedustot,2) ?></td><td><?php echo number_format($gabr->subsupeiastot,2) ?></td><td><?php echo number_format($gabr->subairstot,2) ?></td><td><?php echo number_format($gabr->subh2ostot,2) ?></td><td><?php echo number_format($gabr->subswmstot,2) ?></td>
                          </tr>
                        <?php } ?>
                          <tr>
                            <td></td><td></td><td></td><td id="tdleft">SAA</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                          </tr>
                          <tr>
                            <td></td><td></td><td></td><td id="tdleft">Total</td><td><?php echo number_format(55430000.00,2) ?></td>

                              <td><?php echo number_format(13312000.00,2) ?></td>
                              <td><?php echo number_format(13312000.00,2) ?></td>
                              <td><?php echo number_format(13312000.00,2) ?></td><td><?php echo number_format(13312000.00,2) ?></td><td><?php echo number_format(13312000.00,2) ?></td><td><?php echo number_format(13312000.00,2) ?></td><td><?php echo number_format(13312000.00,2) ?></td>
                              <td><?php echo number_format(13312000.00,2) ?></td><td><?php echo number_format(13312000.00,2) ?></td><td><?php echo number_format(13312000.00,2) ?></td><td><?php echo number_format(13312000.00,2) ?></td><td><?php echo number_format(13312000.00,2) ?></td>
                          </tr>

                          <!-- Basic Modal -->
                          <div class="modal fade" id="myModal" tabindex="-1" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">GASS</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form class="" action="<?php echo site_url('Auth/adbrobps') ?>" method="post">
                                  <div class="modal-body">
                                    <div class="col-md-12">
                                      <div class="row" style="padding-bottom:10px;">
                                        <div class="col-md-3">
                                          <label for="">Basic Salary</label>
                                          <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="basic" id="basic" onkeyup="gasstot()" value="0" required>
                                        </div>
                                        <div class="col-md-3">
                                          <label for="">PERA</label>
                                          <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="pera" id="pera" onkeyup="gasstot()" value="0" required>
                                        </div>
                                        <div class="col-md-3">
                                          <label for="">RA</label>
                                          <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="ra" id="ra" onkeyup="gasstot()" value="0" required>
                                        </div>
                                        <div class="col-md-3">
                                          <label for="">TA</label>
                                          <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="ta" id="ta" onkeyup="gasstot()" value="0" required>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="col-md-12">
                                      <div class="row" style="padding-bottom:10px;">
                                        <div class="col-md-3">
                                          <label for="">Clothing</label>
                                          <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="cloth" id="cloth" onkeyup="gasstot()" value="0" required>
                                        </div>
                                        <div class="col-md-3">
                                          <label for="">Subsistence Magna</label>
                                          <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="submagna" id="submagna" onkeyup="gasstot()" value="0" required>
                                        </div>
                                        <div class="col-md-3">
                                          <label for="">Laundry Magna</label>
                                          <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="launmagna" id="launmagna" onkeyup="gasstot()" value="0" required>
                                        </div>
                                        <div class="col-md-3">
                                          <label for="">EHP Magna</label>
                                          <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="ehpmagna" id="ehpmagna" onkeyup="gasstot()" value="0" required>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="col-md-12">
                                      <div class="row" style="padding-bottom:10px;">
                                        <div class="col-md-3">
                                          <label for="">Mid-Year Bonus</label>
                                          <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="midyr" id="midyr" onkeyup="gasstot()" value="0" required>
                                        </div>
                                        <div class="col-md-3">
                                          <label for="">Year-End Bonus_Civilian</label>
                                          <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="yrend" id="yrend" onkeyup="gasstot()" value="0" required>
                                        </div>
                                        <div class="col-md-3">
                                          <label for="">Cash Gift</label>
                                          <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="cshgft" id="cshgft" onkeyup="gasstot()" value="0" required>
                                        </div>
                                        <div class="col-md-3">
                                          <label for="">PEI</label>
                                          <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="pei" id="pei" onkeyup="gasstot()" value="0" required>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="col-md-12">
                                      <div class="row" style="padding-bottom:10px;">
                                        <div class="col-md-3">
                                          <label for="">Pag-Ibig</label>
                                          <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="pagibig" id="pagibig" onkeyup="gasstot()" value="0" required>
                                        </div>
                                        <div class="col-md-3">
                                          <label for="">Philhealth</label>
                                          <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="philhlth" id="philhlth" onkeyup="gasstot()" value="0" required>
                                        </div>
                                        <div class="col-md-3">
                                          <label for="">ECIP_Civilian</label>
                                          <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="ecipciv" id="ecipciv" onkeyup="gasstot()" value="0" required>
                                        </div>
                                        <div class="col-md-3">
                                          <label for="">Lumpsum Step Increment</label>
                                          <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="lumpsum" id="lumpsum" onkeyup="gasstot()" value="0" required>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="col-md-12">
                                      <label for="">GASS Total</label>
                                      <input class="form-control" type="text" id="totgass" name="totgass" readonly>
                                    </div>
                                  </div>
                                  <script>
                                     function gasstot() {
                                       var basic = document.getElementById("basic").value; var pera = document.getElementById("pera").value;
                                       var ra = document.getElementById("ra").value; var ta = document.getElementById("ta").value;
                                       var cloth = document.getElementById("cloth").value; var submagna = document.getElementById("submagna").value;
                                       var launmagna = document.getElementById("launmagna").value; var ehpmagna = document.getElementById("ehpmagna").value;
                                       var midyr = document.getElementById("midyr").value; var yrend = document.getElementById("yrend").value;
                                       var cshgft = document.getElementById("cshgft").value; var pei = document.getElementById("pei").value;
                                       var pagibig = document.getElementById("pagibig").value; var philhlth = document.getElementById("philhlth").value;
                                       var ecipciv = document.getElementById("ecipciv").value; var lumpsum = document.getElementById("lumpsum").value;

                                       var sum = parseFloat(basic) + parseFloat(pera) + parseFloat(ra) + parseFloat(ta) + parseFloat(cloth) + parseFloat(submagna)
                                         + parseFloat(launmagna) + parseFloat(ehpmagna) + parseFloat(midyr) + parseFloat(yrend) + parseFloat(cshgft) + parseFloat(pei)
                                         + parseFloat(pagibig) + parseFloat(philhlth) + parseFloat(ecipciv) + parseFloat(lumpsum);

                                         document.getElementById("totgass").value = sum.toFixed(2);
                                     }
                                  </script>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                          <!-- End Basic Modal-->

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

*******************************

<form action="<?php echo site_url('Auth/method_name') ?>" method="get">
  <!-- Dropdown code here -->
<select name="filter_option">
  <option value="2023">2023</option>
  <option value="2022">2022</option>
  <option value="2021">2021</option>
</select>
<button type="submit">Filter</button>
</form>

<table>
  <thead>
    <th></th>
  </thead>
  <tbody>
    <tr>
    <?php foreach ($finsaa as $saa) { ?>
        <td><?php echo $saa->sayr; ?>#$%^&</td><td><?php echo $saa->sabassal; ?></td><td><?php echo $saa->sapera; ?></td>
    <?php } ?>
  </tr>
  </tbody>
</table>
*******************************

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
