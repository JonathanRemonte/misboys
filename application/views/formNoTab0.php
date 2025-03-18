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

  <style media="screen"> #butint{ width:100px;padding-bottom:5px; } #qrating{ color:black;font-weight:bold; } </style>

  <?php $image_url='http://localhost/4bhive/assets/img/img.jpg';?>
  <?php $image_url2='https://bhive.emb.gov.ph/4bhive/assets/img/emb.png';?>

</head>

<body style="background-image: linear-gradient(to bottom right,#68BBE3,#9bd6ba);background-attachment:fixed;">

  <!-- <main id="main" class="main"> -->

    <!-- <section class="section" style="margin-top:-20px;"> -->
    <div class="col-md-12" style="padding-left:40px;padding-right:40px;padding-top:80px;font-size:15px;">

      <div class="row" style="">

        <div class="col-lg-3" style="padding-bottom:25px;">

          <div class="card">
            <div class="card-body" style="height:560px;overflow-y: scroll;" id="client_Process">
              <h5 class="card-title">Today's Record</h5>

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
                  <div class="col-md-6">
                    <h5 style="text-align:right;padding-top:18px;"><a class="open-homeMIS" href="" data-id="MIS" data-toggle="modal" data-target="#modalMIS" id="butint">Tech Support <i class="bi bi-telephone-outbound"></i></a></h5>
                  </div>
                </div>
              </div>


              <!-- General Form Elements -->
              <form method="post" action="<?php echo site_url('Auth/adQclient') ?>">
                <div class="row mb-3">
                  <!-- <label class="col-sm-2 col-form-label">Floating labels</label> -->
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Client's Name</label>
                      <input type="text" class="form-control" name="qnam" placeholder="Name ( First, Middle, Last Name )" required>
                    </div>
                    <div class="form-group">
                      <label>Company Name</label>
                      <input type="text" class="form-control" name="qfirm" placeholder="Company Name" required>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Sex</label>
                          <select class="form-control" name="qsex" required>
                            <option></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="prefer">Prefer not to say</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Contact Number</label>
                          <input type="text" class="form-control" name="qnum" placeholder="Contact Number" minlength="11" maxlength="11" onkeypress="return isNumberKey(event)">
                        </div>
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
                    <div class="col-md-2"><a class="open-homeEvents btn btn-primary" data-id="ECC" data-toggle="modal" data-target="#modalHomeEvents" id="butint">ECC</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-primary" data-id="CNC" data-toggle="modal" data-target="#modalHomeEvents" id="butint">CNC</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-primary" data-id="PCO" data-toggle="modal" data-target="#modalHomeEvents" id="butint">PCO</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-primary" data-id="HWM" data-toggle="modal" data-target="#modalHomeEvents" id="butint">HWM</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-primary" data-id="PTO" data-toggle="modal" data-target="#modalHomeEvents" id="butint">PTO</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-primary" data-id="DP" data-toggle="modal" data-target="#modalHomeEvents" id="butint">DP</a></div>
                  </div>
                  <div class="row" style="padding-bottom:20px;">
                    <div class="col-md-2"><a class="open-homeEvents btn btn-primary" data-id="SMR" data-toggle="modal" data-target="#modalHomeEvents" id="butint">SMR</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-primary" data-id="CMR" data-toggle="modal" data-target="#modalHomeEvents" id="butint">CMR</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-primary" data-id="SWM" data-toggle="modal" data-target="#modalHomeEvents" id="butint">SWM</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-primary" data-id="CASHIER" data-toggle="modal" data-target="#modalHomeEvents" id="butint">Cashier</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-primary" data-id="RECORDS" data-toggle="modal" data-target="#modalHomeEvents" id="butint">Records</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-primary" data-id="LEGAL" data-toggle="modal" data-target="#modalHomeEvents" id="butint">Legal</a></div>
                  </div>
                  <div class="row" style="padding-bottom:20px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-primary" data-id="ORD" data-toggle="modal" data-target="#modalHomeEvents" id="butint">ORD</a></div>
                    <div class="col-md-2"><a class="open-homeEvents btn btn-primary" data-id="GSS" data-toggle="modal" data-target="#modalHomeEvents" id="butint">GSS</a></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
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
                         <div class="col-md-12" style="text-align:center;">
                           <div class="row">
                             <div class="col-md-6"><label for="">PURPOSE OF VISIT</label></div>
                             <div class="col-md-6"><label for="">QUEUING NUMBER</label></div>
                           </div>
                           <div class="row">
                             <div class="col-md-6"><label><span style="font-size:20px;" name="qintent" id="idHolder"></span></label></div>
                             <div class="col-md-6"><label><span style="font-size:20px;" name="qintent" id="idHolder2"></span><span style="font-size:20px;"><?php echo $zero.$qque; ?></span><span id="modal_body" style="font-size:20px;"></span></label></div>
                           </div>
                           <br><br>
                           <label for="">IMPORTANT NOTICE:</label> <label>This machine will not print a queuing number stub.</label> <label>PLEASE SAVE OR TAKE A PICTURE OF YOUR QUEUING NUMBER.</label>
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
                    <div class="form-group" style="padding-right: 25px; padding-left: 25px;">
                      <textarea class="form-control" name="qcon" placeholder="Type in your concern"></textarea>
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
  <div class="">
    <span class="d-none d-md-block" style="color:#e6e6e0;text-align:right;"><a href="index">m</a></span>
  </div>

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
