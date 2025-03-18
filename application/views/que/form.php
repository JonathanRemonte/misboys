<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Elements - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Option 2: Bootstrap Bundle with Popper -->
  <script src="<?php echo base_url(); ?>assets/js/5.1.3-bootstrap.bundle.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

  <!--client form css-->
  <link href="<?php echo base_url(); ?>assets/vendor/3.3.6/css/bootstrap.min.css" rel="stylesheet" rel="stylesheet" type="text/css" />

  <title>4BHive</title>
  <link rel="icon" href="<?php echo base_url(); ?>assets/img/4BHiveLogo1.png" type="image/icon type">

  <style media="screen">
    #butcpd{ width:100px;padding-bottom:5px;background-color:#59bfff; }
    #buteme{ width:100px;padding-bottom:5px;background-color:#26abff; }
    #butord{ width:100px;padding-bottom:5px;background-color:#0da2ff; }
    #butadmin{ width:100px;padding-bottom:5px;background-color:#009dff; }

    #qrating{ color:black;font-weight:bold; }
  </style>

  <?php $image_url='http://localhost/4bhive/assets/img/img.jpg';?>
  <?php $image_url2='https://bhive.emb.gov.ph/4bhive/assets/img/emb.png';?>

</head>

<!-- dropdown cascade address -->
<?php $this->load->view('2shared/procitbar.php'); ?>

<body style="background-image: linear-gradient(to bottom right,#68BBE3,#9bd6ba);background-attachment:fixed;">

  <!-- <main id="main" class="main"> -->

    <!-- <section class="section" style="margin-top:-20px;"> -->
    <div class="col-md-12" style="padding-left:40px;padding-right:40px;padding-top:80px;font-size:15px;">

      <div class="row" style="">

        <div class="col-lg-3" style="padding-bottom:25px;">

          <div class="card">
            <div class="card-body" style="height: 689px; overflow-y: scroll;">
              <!-- <h5 class="card-title">Today's Record</h5> -->
              <div class="" style="padding-top: 13px;">
              <table class="table table-hover table-striped" style="height: 50px;">
                <thead>
                  <tr>
                    <th>QUEUE #</th><th>STATUS</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($resultQ2 as $rowQ2){ ?>
                    <tr><td title="<?php echo 'Client: '.$rowQ2->qnam.'| Firm: '.$rowQ2->qfirm; ?>"><a class="open-homeEvents" href="" data-id="qrating" data-toggle="modal" data-target="#qrate<?php echo $rowQ2->qid; ?>" id="qrating"><?php $qstub=substr($rowQ2->qstub, -1); if($qstub=='P'){ echo '<div style="color:#FF8300;">'.$rowQ2->qstub.'</div>'; }else{ echo $rowQ2->qstub; } ?></a></td>
                      <td><?php if($rowQ2->qstat==1){ echo 'Waiting'; }else if($rowQ2->qstat==2){ echo 'Processing'; echo ' ... ('.$rowQ2->qestaff.')'; }else if($rowQ2->qstat==3){ echo 'Attended'; echo ' ... ('.$rowQ2->qestaff.')'; }else if($rowQ2->qstat==4){ echo 'Completed'; echo ' ... ('.$rowQ2->qestaff.')'; }else{} ?></td>

                      <!-- modal for rating -->
                      <div id="qrate<?php echo $rowQ2->qid; ?>" class="modal fade" role="dialog" style="width: 100%">
                        <div class="modal-dialog modal-dialog-centered modal-lg animate__animated animate__fadeInDown animate__faster">
                           <!-- Modal content-->
                           <div class="modal-content">
                             <div class="modal-header" style="color: #fff; height: 50px; background-color: green;">
                               <label for="">EMB MIMAROPA</label>
                             </div>
                             <form class="" action="<?php echo site_url('Auth/edRateclient') ?>/<?php echo $rowQ2->qid; ?>" method="post">
                               <div class="modal-body">
                                 <div class="col-md-12">
                                   <div style="visibility: hidden;">
                                     <div>qid<input type="text" name="qid" value="<?php echo $rowQ2->qid; ?>">
                                     qstub<input type="text" name="qstub" value="<?php echo $rowQ2->qstub; ?>">
                                     qestaff<input type="text" name="qstub" value="<?php echo $rowQ2->qestaff; ?>"></div>
                                   </div>
                                   <div class="form-group" style="margin-top: -20px;">
                                     <label for="">1. PROFESSIONALISM - How do you rate our professionalism in dealing with you?</label>
                                     <div class="row" style="">
                                       <div class="col-md-2" style="text-align: right;">Poor</div>
                                       <div class="col-md-2">
                                         <input class="form-check-input" type="radio" name="gridProf" id="gridRadios1" value="1" >
                                         <label class="form-check-label" for="gridRadios1">1</label>
                                       </div>
                                       <div class="col-md-2">
                                         <input class="form-check-input" type="radio" name="gridProf" id="gridRadios1" value="2" >
                                         <label class="form-check-label" for="gridRadios1">2</label>
                                       </div>
                                       <div class="col-md-2">
                                         <input class="form-check-input" type="radio" name="gridProf" id="gridRadios1" value="3" >
                                         <label class="form-check-label" for="gridRadios1">3</label>
                                       </div>
                                       <div class="col-md-1">
                                         <input class="form-check-input" type="radio" name="gridProf" id="gridRadios1" value="4" checked>
                                         <label class="form-check-label" for="gridRadios1">4</label>
                                       </div>
                                       <div class="col-md-2" style="text-align: left;">Excellent</div>
                                     </div>
                                   </div>

                                   <div class="form-group" style="margin-top: -10px;">
                                     <label for="">2. PROMPTNESS - How do you rate our promptness in dealing with your concern?</label>
                                     <div class="row" style="">
                                       <div class="col-md-2" style="text-align: right;">Poor</div>
                                       <div class="col-md-2">
                                         <input class="form-check-input" type="radio" name="gridProm" id="gridRadios1" value="1" checked="">
                                         <label class="form-check-label" for="gridRadios1">1</label>
                                       </div>
                                       <div class="col-md-2">
                                         <input class="form-check-input" type="radio" name="gridProm" id="gridRadios1" value="2" checked="">
                                         <label class="form-check-label" for="gridRadios1">2</label>
                                       </div>
                                       <div class="col-md-2">
                                         <input class="form-check-input" type="radio" name="gridProm" id="gridRadios1" value="3" checked="">
                                         <label class="form-check-label" for="gridRadios1">3</label>
                                       </div>
                                       <div class="col-md-1">
                                         <input class="form-check-input" type="radio" name="gridProm" id="gridRadios1" value="4" checked="">
                                         <label class="form-check-label" for="gridRadios1">4</label>
                                       </div>
                                       <div class="col-md-2" style="text-align: left;">Excellent</div>
                                     </div>
                                   </div>

                                   <div class="form-group" style="margin-top: -10px;">
                                     <label for="">3. TECHNICAL SUPPORT - If you received any technical support, how do you rate the technical competence of our staff?</label>
                                     <div class="row" style="">
                                       <div class="col-md-2" style="text-align: right;">Poor</div>
                                       <div class="col-md-2">
                                         <input class="form-check-input" type="radio" name="gridTech" id="gridRadios1" value="1" checked="">
                                         <label class="form-check-label" for="gridRadios1">1</label>
                                       </div>
                                       <div class="col-md-2">
                                         <input class="form-check-input" type="radio" name="gridTech" id="gridRadios1" value="2" checked="">
                                         <label class="form-check-label" for="gridRadios1">2</label>
                                       </div>
                                       <div class="col-md-2">
                                         <input class="form-check-input" type="radio" name="gridTech" id="gridRadios1" value="3" checked="">
                                         <label class="form-check-label" for="gridRadios1">3</label>
                                       </div>
                                       <div class="col-md-1">
                                         <input class="form-check-input" type="radio" name="gridTech" id="gridRadios1" value="4" checked="">
                                         <label class="form-check-label" for="gridRadios1">4</label>
                                       </div>
                                       <div class="col-md-2" style="text-align: left;">Excellent</div>
                                     </div>
                                   </div>

                                   <div class="form-group" style="margin-top: -10px;">
                                     <label for="">4. DELIVERY OF SERVICE - How do you rate our delivery of service on time performance and our commitment to meet your expectations?</label>
                                     <div class="row" style="">
                                       <div class="col-md-2" style="text-align: right;">Poor</div>
                                       <div class="col-md-2">
                                         <input class="form-check-input" type="radio" name="gridDeli" id="gridRadios1" value="1" checked="">
                                         <label class="form-check-label" for="gridRadios1">1</label>
                                       </div>
                                       <div class="col-md-2">
                                         <input class="form-check-input" type="radio" name="gridDeli" id="gridRadios1" value="2" checked="">
                                         <label class="form-check-label" for="gridRadios1">2</label>
                                       </div>
                                       <div class="col-md-2">
                                         <input class="form-check-input" type="radio" name="gridDeli" id="gridRadios1" value="3" checked="">
                                         <label class="form-check-label" for="gridRadios1">3</label>
                                       </div>
                                       <div class="col-md-1">
                                         <input class="form-check-input" type="radio" name="gridDeli" id="gridRadios1" value="4" checked="">
                                         <label class="form-check-label" for="gridRadios1">4</label>
                                       </div>
                                       <div class="col-md-2" style="text-align: left;">Excellent</div>
                                     </div>
                                   </div>

                                   <div class="form-group" style="margin-top: -10px;">
                                     <label for="">5. ENVIRONMENT - How do you rate our office/workplace?</label>
                                     <div class="row" style="">
                                       <div class="col-md-2" style="text-align: right;">Poor</div>
                                       <div class="col-md-2">
                                         <input class="form-check-input" type="radio" name="gridEnvi" id="gridRadios1" value="1" checked="">
                                         <label class="form-check-label" for="gridRadios1">1</label>
                                       </div>
                                       <div class="col-md-2">
                                         <input class="form-check-input" type="radio" name="gridEnvi" id="gridRadios1" value="2" checked="">
                                         <label class="form-check-label" for="gridRadios1">2</label>
                                       </div>
                                       <div class="col-md-2">
                                         <input class="form-check-input" type="radio" name="gridEnvi" id="gridRadios1" value="3" checked="">
                                         <label class="form-check-label" for="gridRadios1">3</label>
                                       </div>
                                       <div class="col-md-1">
                                         <input class="form-check-input" type="radio" name="gridEnvi" id="gridRadios1" value="4" checked="">
                                         <label class="form-check-label" for="gridRadios1">4</label>
                                       </div>
                                       <div class="col-md-2" style="text-align: left;">Excellent</div>
                                     </div>
                                   </div>

                                   <div class="form-group" style="margin-top: -10px;">
                                     <label for="">6. OVERALL RATING (For EMB MIMAROPA use only)</label>
                                     <div class="row" style="">
                                       <div class="col-md-2" style="text-align: right;">Poor</div>
                                       <div class="col-md-2">
                                         <input class="form-check-input" type="radio" name="gridOver" id="gridRadios1" value="1" checked="">
                                         <label class="form-check-label" for="gridRadios1">1</label>
                                       </div>
                                       <div class="col-md-2">
                                         <input class="form-check-input" type="radio" name="gridOver" id="gridRadios1" value="2" checked="">
                                         <label class="form-check-label" for="gridRadios1">2</label>
                                       </div>
                                       <div class="col-md-2">
                                         <input class="form-check-input" type="radio" name="gridOver" id="gridRadios1" value="3" checked="">
                                         <label class="form-check-label" for="gridRadios1">3</label>
                                       </div>
                                       <div class="col-md-1">
                                         <input class="form-check-input" type="radio" name="gridOver" id="gridRadios1" value="4" checked="">
                                         <label class="form-check-label" for="gridRadios1">4</label>
                                       </div>
                                       <div class="col-md-2" style="text-align: left;">Excellent</div>
                                     </div>
                                   </div>

                                   <div class="form-group" style="margin-top: -10px;">
                                     <label for="">7. Do you have any comments or suggestions that would help us improve the quality of our public service?</label>
                                     <div class="row" style="padding-top: 10px;">
                                       <div class="col-xs-12 col-md-9 area-style">
                                         <textarea name="qmark" rows="4" cols="100"></textarea>
                                       </div>
                                     </div>
                                   </div>

                                   <div class="" hidden>
                                     <?php date_default_timezone_set('Asia/Manila'); $qcomdat=date('Y-m-d'); $qcomtim=date('H:i:s'); ?>
                                     <input type="text" class="form-control" name="qcomdat" id="floatingInput" value="<?php echo $qcomdat; ?>">
                                     <input type="text" class="form-control" name="qcomtim" id="floatingInput" value="<?php echo $qcomtim; ?>">
                                   </div>

                                 </div>
                               </div>
                               <div class="col-md-12" style="margin-top: -13px; text-align: right;">
                                 <div class="form-group">
                                   <button type="submit" class="btn btn-primary" value="" name="" >Proceed</button>
                                   <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                 </div>
                               </div>
                             </form>
                           </div>
                           <!-- Modal content-->
                         </div>
                       </div>
                       <!-- modal for rating -->

                    </tr>
                  <?php } ?>
                </tbody>
              </table>

              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6" style="padding-bottom:25px;">

          <div class="card">
            <div class="card-body" style="margin-top:-8px;">

              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <h5 class="card-title" style="margin-left:-17px;">Client Information</h5>
                  </div>
                </div>
              </div>

              <!-- General Form Elements -->
              <form method="post" action="<?php echo site_url('Auth/adQclient') ?>">
                  <!-- <label class="col-sm-2 col-form-label">Floating labels</label> -->
                    <div class="form-group">
                      <label>Client's Name</label>
                      <input type="text" class="form-control" name="qnam" placeholder="Name ( First, Middle, Last Name )" required>
                    </div>
                    <div class="form-group">
                      <label>Company Name</label>
                      <input type="text" class="form-control" name="qfirm" placeholder="Company Name" required>
                    </div>
                    <div class="form-group">
                      <label>Company Address</label>
                      <div class="row">
                        <div class="col-sm-4">
                          <select class="form-control" name="qfprov" id="fprov" required>
                            <option value="" selected="selected">Click here for Province</option>
                          </select>
                        </div>
                        <div class="col-md-4">
                          <select class="form-control" name="qfmun" id="fmun" required>
                            <option value="" selected="selected">Click here for Municipality</option>
                          </select>
                        </div>
                        <div class="col-md-4">
                          <select class="form-control" name="qfbrgy" id="fbrgy" required>
                            <option value="" selected="selected">Click here for Barangay</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-3">
                          <label>Sex</label>
                          <select class="form-control" name="qsex" required>
                            <option></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="prefer">Prefer not to say</option>
                          </select>
                        </div>
                        <div class="col-sm-3">
                          <label>Age</label>
                          <input type="number" min="18" max="65" class="form-control" name="qage" required>
                        </div>
                        <div class="col-sm-6">
                          <label>Contact Number</label>
                          <input type="text" class="form-control" name="qnum" placeholder="Contact Number" minlength="11" maxlength="11" onkeypress="return isNumberKey(event)">
                        </div>
                      </div>
                    </div>

                  <div class="col-sm-12">
                    <fieldset class="row mb-3" style="padding-top:10px;">
                      <label class="col-form-label col-sm-2 pt-0">Lanes</label>
                      <div class="col-sm-10">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-check">
                              <input class="form-check-input" data-id="Standard" type="radio" checked="checked" name="qlane" id="e1" value="S" onchange="show(this.value)" onclick="displayRadioValue()">
                              <label class="form-check-label" for="laneRadios1">
                                Standard
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="qlane" id="e2" value="P" onchange="show2()" onclick="displayRadioValue()" >
                              <label class="form-check-label" for="laneRadios2">
                                Priority/Courtesy
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div id="sh2" style="display:none;padding-top:10px;padding-left:60px;" required>
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="cour" value="psen">
                                <label class="form-check-label" for="laneRadios2">Senior Citizen</label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="cour" value="pwd">
                                <label class="form-check-label" for="laneRadios2">Person with Disabilities</label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="cour" value="preg">
                                <label class="form-check-label" for="laneRadios2">Pregnant</label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="cour" value="pwc">
                                <label class="form-check-label" for="laneRadios2">Parent with Child</label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div><!--end sh2-->

                    </fieldset>
                  </div>

                <div class="" hidden>
                  <?php date_default_timezone_set('Asia/Manila'); $qdat=date('Y-m-d'); $qtim=date('H:i:s'); ?>
                  <input type="text" class="form-control" name="qdat" id="floatingInput" value="<?php echo $qdat; ?>">
                  <input type="text" class="form-control" name="qtim" id="floatingInput" value="<?php echo $qtim; ?>">
                </div>
                <div class="form-floating mb-3" hidden>
                  <?php date_default_timezone_set('Asia/Manila'); $datnow=date('Y-m-d'); $qdatstub=date('ymd');
                    foreach ($resultQ1 as $rowQ1){ $qque=$rowQ1->qque; $qdat = new DateTime($rowQ1->qdat);
                      $qdat=$qdat->format('Y-m-d'); if($qdat==$datnow){ $qque=$qque+1; }else{ $qque=1; } } ?>
                  <input type="text" class="form-control" name="qque" id="floatingInput" value="<?php echo $qque; ?>">
                  <?php $qdigit = strlen((string)$qque); if($qdigit==1){ $zero='00'; }else if($qdigit==2){ $zero='0'; }else{ $zero=''; } ?>
                  <input type="text" class="form-control" name="qstub" id="floatingInput" value="<?php echo $zero.$qque; ?>">
                </div>

                <label for="floatingInput">Purpose of Visit</label>
                <div class="col-md-12">
                  <div class="row" style="padding-bottom:20px;padding-top:10px;">
                    <div class="col-md-2"><a class="open-homeEvents btn btn-warning" data-id="ECC" data-toggle="modal" data-target="#modalHomeEvents" id="butcpd" title="Environmental Compliance Certificate">ECC</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-warning" data-id="CNC" data-toggle="modal" data-target="#modalHomeEvents" id="butcpd" title="Certificate of Non-Coverage">CNC</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-warning" data-id="PCO" data-toggle="modal" data-target="#modalHomeEvents" id="butcpd" title="Pollution Control Officer">PCO</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-warning" data-id="HWM" data-toggle="modal" data-target="#modalHomeEvents" id="butcpd" title="Hazardous Waste Management">HWM</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-warning" data-id="PTO" data-toggle="modal" data-target="#modalHomeEvents" id="butcpd" title="Permit to Operate">PTO</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-warning" data-id="DP" data-toggle="modal" data-target="#modalHomeEvents" id="butcpd" title="Discharge Permit">DP</a></div>
                  </div>
                  <div class="row" style="padding-bottom:20px;">
                    <div class="col-md-2"><a class="open-homeEvents btn btn-warning" data-id="CHEMICALS" data-toggle="modal" data-target="#modalHomeEvents" id="butcpd" title="Chemicals Management">Chemicals</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-warning" id="buteme" style="color:#26abff;">MAN</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-warning" data-id="SWM" data-toggle="modal" data-target="#modalHomeEvents" id="buteme" title="Solid Waste Management">SWM</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-warning" data-id="SMR" data-toggle="modal" data-target="#modalHomeEvents" id="buteme" title="Self Monitoring Report">SMR</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-warning" data-id="CMR" data-toggle="modal" data-target="#modalHomeEvents" id="buteme" title="Compliance Monitoring Report">CMR</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-warning" id="buteme" style="color:#26abff;">MAN</a></div>
                  </div>
                  <div class="row" style="">
                    <div class="col-md-2"><a class="open-homeEvents btn btn-warning" data-id="ORD" data-toggle="modal" data-target="#modalHomeEvents" id="butord" title="Office of the Regional Director">ORD</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-warning" data-id="LEGAL" data-toggle="modal" data-target="#modalHomeEvents" id="butord" title="Legal Matters">Legal</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-warning" data-id="HR" data-toggle="modal" data-target="#modalHomeEvents" id="butadmin" title="Human Resource">HR</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-warning" data-id="CASHIER" data-toggle="modal" data-target="#modalHomeEvents" id="butadmin" title="Cashier">Cashier</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-warning" data-id="RECORDS" data-toggle="modal" data-target="#modalHomeEvents" id="butadmin" title="Records">Records</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-warning" data-id="GSU" data-toggle="modal" data-target="#modalHomeEvents" id="butadmin" title="General Services Unit">GSU</a></div>
                  </div>


                  <div class="col-md-12" style="padding-top:20px;margin-bottom:-20px;">
                    <h5 style="text-align:right;"><a class="open-homeMIS" href="" data-id="MIS" data-toggle="modal" data-target="#modalMIS" id="butint">Tech Support <i class="bi bi-telephone-outbound"></i></a></h5>
                  </div>

                </div>

                <div id="modalHomeEvents" class="modal fade" role="dialog">
                  <div class="modal-dialog modal-dialog-centered">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header" style="color: #fff; height: 50px; background-color: green;">
                        <label for="">EMB MIMAROPA</label>
                        <!-- <button type="button" class="close" data-dismiss="modal" style="text-align:right;">&times;</button> -->
                      </div>
                      <div class="modal-body">
                        <div class="col-md-12" style="text-align: center;">
                          <div class="row">
                            <div class="col-md-6"><label for="">PURPOSE OF VISIT</label></div>
                            <div class="col-md-6"><label for="">QUEUING NUMBER</label></div>
                          </div>
                          <div class="row">
                            <div class="col-md-6"><label><span style="font-size: 20px;" name="qintent" id="idHolder"></span></label></div>
                            <div class="col-md-6"><label><span style="font-size: 20px;" name="qintent" id="idHolder2"></span><span style="font-size:20px;"><?php echo $zero.$qque; ?></span><span id="modal_body" style="font-size: 20px;"></span></label></div>
                          </div>
                          <br>
                          <!-- <label for="">Specific Concern:</label><br> -->
                          <textarea name="qspec" rows="4" cols="50" placeholder="Please state your specific concern here..."></textarea>

                          <br><br>
                          <label for="">IMPORTANT NOTICE:</label>
                          <label style="font-style: italic;">THIS MACHINE WILL NOT PRINT A QUEUE NUMBER STUB</label>
                          <br>
                          <br>
                          <div style="font-size: 13px;">
                          <label>• PLEASE SAVE OR TAKE A PICTURE OF YOUR QUEUING NUMBER</label>
                          <label>• PLEASE HAVE A SEAT WHILE YOU WAIT</label>
                          <label>• OUR STAFF WILL ATTEND TO YOU SHORTLY</label>
                         </div>
                        </div>
                        <div class="">

                          <input type="hidden" name="qintent" id="eventId"/>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" value="" name="" >Proceed</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>

                   </div>
                 </div>

               </form><!-- End General Form Elements -->

            </div>
          </div>


          <div id="modalMIS" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered">

              <!-- Modal content-->
              <form method="post" action="<?php echo site_url('Auth/adQclient') ?>">
                <div class="modal-content">
                  <div class="modal-header" style="height: 80px; background-color: #399d6c; justify-content: center;">
                    <label for="" style="color:white;font-size:20px;padding-top:5px;">EMB MIMAROPA MIS</label>
                  </div>
                  <div class="modal-body" style="background-color: #3673b9; color: white;">
                    <div class="" hidden>
                      <input type="text" name="qnam" value="MIS help">
                      <input type="text" name="qfirm" value="mis">
                      <input type="text" name="qfprov" value="mis">
                      <input type="text" name="qfmun" value="mis">
                      <input type="text" name="qfbrgy" value="mis">
                      <input type="text" name="qnum" value="mis">
                      <input type="text" name="qsex" value="mis">
                      <input type="text" name="qage" value="mis">
                      <input type="text" name="qlane" value="mis">
                    </div>
                    <div class="form-group" style="padding-right: 25px; padding-left: 25px;">
                      <textarea class="form-control" name="qspec" placeholder="Type in your concern"></textarea>
                    </div>
                    <div class="col-md-12" style="text-align: center; font-size: 22px;">
                      <label for="">NOTICE:</label><br>
                    </div>
                    <div style="font-size: 14px;">
                      <ul>
                        <i>
                          <li>Click the "Proceed" button to continue.</li>
                          <li>Please take a seat; an IT personnel will assist you shortly.</li>
                        </i>
                      </ul>
                    </div>
                    <div class="">
                      <input type="hidden" name="qintent" id="eventId"/>
                    </div>
                    <div class="" hidden>
                      <?php date_default_timezone_set('Asia/Manila'); $qdat=date('Y-m-d'); $qtim=date('H:i:s'); ?>
                      <input type="text" class="form-control" name="qdat" id="floatingInput" value="<?php echo $qdat; ?>">
                      <input type="text" class="form-control" name="qtim" id="floatingInput" value="<?php echo $qtim; ?>">
                    </div>
                    <div class="form-floating mb-3" hidden>
                      <?php date_default_timezone_set('Asia/Manila'); $datnow=date('Y-m-d'); $qdatstub=date('ymd');
                        foreach ($resultQ1 as $rowQ1){ $qque=$rowQ1->qque; $qdat = new DateTime($rowQ1->qdat);
                          $qdat=$qdat->format('Y-m-d'); if($qdat==$datnow){ $qque=$qque+1; }else{ $qque=1; } } ?>
                      <input type="text" class="form-control" name="qque" id="floatingInput" value="<?php echo $qque; ?>">
                      <?php $qdigit = strlen((string)$qque); if($qdigit==1){ $zero='00'; }else if($qdigit==2){ $zero='0'; }else{ $zero=''; } ?>
                      <input type="text" class="form-control" name="qstub" id="floatingInput" value="<?php echo $zero.$qque; ?>">
                    </div>
                  </div>
                  <div class="modal-footer" style="background-color: #399d6c;">
                    <button type="submit" class="btn btn-primary" style="background-color: #3673b9;"  value="" name="" >Proceed</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                  </div>
                </div>
              </form>
              <!-- </section> -->
            </div>
          </div>



        </div>

        <div class="col-lg-3 d-flex">

          <div class="info-wrap w-100 p-5" style="background-image: url('<?php echo $image_url;?>'); background-size: cover; border-radius: 5px 5px 5px 5px;">
            <center>
              <img class="img-fluid" src="<?php echo $image_url2;?>" alt="emb" width="100" height="100" type="button" onClick="location.href='https://mimaropa.emb.gov.ph/';">
              <div style="padding-top: 250px;">
                <input style="font-size: 2.5rem; font-weight: bold;" class="btn btn-primary2" type="button" onClick="location.href='https://mimaropa.emb.gov.ph/citizens-charter-2/';" value="CITIZEN'S CHARTER" />
              </div>
            </center>
          </div>

        </div>

      </div>

    </div>

  <!-- </main> -->
  <!-- End #main -->
  <?php if ($_SESSION['urights']==1||$_SESSION['urights']==4){ ?>
    <div class="">
      <span class="d-none d-md-block" style="text-align:right;"><a href="index" style="color:#9bd6ba">m</a></span>
    </div>
  <?php } ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</body>

</html>

<script src="<?php echo base_url(); ?>assets/vendor/3.3.6/js/jquery.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
<script src="<?php echo base_url(); ?>assets/vendor/3.3.6/js/bootstrap.min.js"></script>

<script type="text/javascript">
  function show(str){ document.getElementById('sh2').style.display = 'none'; }
  function show2(sign){ document.getElementById('sh2').style.display = 'block'; }
</script>

<script type="text/javascript">
  $(document).on("click", ".open-homeEvents", function () {
    var eventId = $(this).data('id');
    var eventId2 = $(this).data('id');
    var eventId2 = eventId2.slice(0, 3);
     $(".modal-body #eventId").val( eventId );
     $('#idHolder').html( eventId );
     $(".modal-body #eventId2").val( eventId2 );
     $('#idHolder2').html( eventId2 );

     var name = $("#e1").val();
     var marks = $("#e2").val();
     if(e1.checked){ var str = ""; }else{ var str = "" + marks; }
     $("#modal_body").html(str);
   });
</script>

<script>
  function displayRadioValue() {
    var ele = document.getElementsByName('qlane');

    for(i = 0; i < ele.length; i++) {
      if(ele[i].checked)
      document.getElementById("res").innerHTML
        = "QLane: "+ele[i].value;
    }
  }
</script>

<!-- for telephone number only -->
<script type="application/javascript"> function isNumberKey(evt) { var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57)) return false; return true; } </script>

<script type="text/javascript">
  $(document).on("click", ".open-homeMIS", function () {
    var eventId = $(this).data('id'); var eventId2 = $(this).data('id');
    var eventId2 = eventId2.slice(0, 3);
    $(".modal-body #eventId").val( eventId ); $('#idHolder').html( eventId );
    $(".modal-body #eventId2").val( eventId2 ); $('#idHolder2').html( eventId2 );
   });
</script>
<!-- client process tab -->
<script type="text/javascript">
  clientProcess();
  function clientProcess(){
    $.ajax({
      url: "clientProcess",
      type: "post",
      data: {},
      success:function(response){
        // var obj = JSON.parse(response);
        $("#client_Process").html(response);
      }
    });
  }
</script>
