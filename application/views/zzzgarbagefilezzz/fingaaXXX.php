  <style media="screen">
  #tabgaa { font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%; }

  #tabgaa td, #tabgaa th { border: 1px solid #ddd;padding: 2px; }

  #tabgaa tr:nth-child(even){background-color: #f2f2f2;}

  #tabgaa tr:hover {background-color: #ddd;}

  #tabgaa th { padding-top: 2px;padding-bottom: 2px;text-align:center;background-color: #04AA6D;color: white; }

  #tdryt { text-align:right; }
  </style>

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/1.12.1-jquery.dataTables.min.css"> -->

  <body>

    <div class="" style="padding-top:70px;padding-left:5px;padding-right:10px;">
      <div class="pagetitle" style="margin-bottom:-10px;padding-left:10px;">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-1" style="size:20px;">
              <a type="button" class="btn btn-primary" href="findash"><i class="bi bi-backspace"></i> Back</a>
            </div>
            <div class="col-md-11" style="size:20px;text-align:center;">
              <h1><a data-id="" href="" data-bs-toggle="modal" data-bs-target="#adpart" title="Delete" style="font-weight:bold;color:535353;">DETAILED BREAKDOWN OF EXPENDITURES /P/P/A FY2023 NEP (in P'000)</a></h1>
            </div>
          </div>
        </div>
      </div>

        <!-- div starts-->
        <div class="tab-pane fade active show" role="tabpanel" aria-labelledby="home-tab" style="padding-left:10px;">
          <div class="row" style="padding-top:20px;">

            <!-- table -->
            <table id="tabgaa" class="display" style="font-size:">
              <thead>
                <tr>
                  <th rowspan="3">#</th><th rowspan="3">UACS Code</th><th rowspan="3">Particulars</th><th colspan="4" style="text-align:center;">GASS-100000000000000</th>
                </tr>
                <tr>
                  <th>Gen. Mgt. and Sup</th>
                  <th>Human Res. Devt.</th>
                  <th>Admin. of Personnel</th>
                  <th>Subtotal</th>
                </tr>
                <tr>
                  <th>1000000100001000</th><th>1000000100002000</th><th>1000000100003000</th><th></th>
                </tr>
              </thead>
              <tbody>
                <?php $gaacnt=0;
                  foreach ($fingaa as $rga) { $gaacnt++; ?>
                    <tr>
                      <td style="text-align:center"><?php echo $gaacnt; ?></td>
                      <td style="text-align:center"><?php echo $rga->uacscod; ?></td>
                      <td style="padding-left:5px;"><?php echo $rga->part; ?></td>
                      <td id="tdryt">
                        <form action="<?php echo site_url('Auth/edfinpart') ?>/<?php echo $rga->gaid; ?>/<?php echo $edtyp='gasms'; ?>" method="post">
                          <input class="form-control" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="gasms" name="gasgms" value="<?php echo $rga->gasgms; ?>" style="text-align:right;">
                        </form>
                      </td>
                      <td id="tdryt">
                        <form action="<?php echo site_url('Auth/edfinpart') ?>/<?php echo $rga->gaid; ?>/<?php echo $edtyp='gashrd'; ?>" method="post">
                          <input class="form-control col-md-6" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="gashrd" name="gashrd" value="<?php echo $rga->gashrd; ?>" style="text-align:right;">
                        </form>
                      <td id="tdryt">
                        <form action="<?php echo site_url('Auth/edfinpart') ?>/<?php echo $rga->gaid; ?>/<?php echo $edtyp='gasapb'; ?>" method="post">
                          <input class="form-control col-md-6" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); }" onKeyUp="numericFilter(this);" id="gasapb" name="gasapb" value="<?php echo $rga->gasapb; ?>" style="text-align:right;">
                        </form>
                      <td id="tdryt">
                        <input class="form-control col-md-6" type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); sum(); }" onKeyUp="numericFilter(this);" id="gasstot" name="gasstot" value="<?php echo $rga->gasstot; ?>" style="text-align:right;">
                        <?php echo $rga->gasstot; ?></td>
                    </tr>
                <?php } ?>
              </tbody>
            </table>
            <!-- table -->

<script type="text/javascript">
  // number only textbox
  function numericFilter(txb) {
    txb.value = txb.value.replace(/[^\0-9]/ig, "");
  }

  // get Total
  function sum() {
     var gasms = document.getElementById('gasms').value;
     var gashrd = document.getElementById('gashrd').value;
     var gasapb = document.getElementById('gasapb').value;

     if (gasms == "")
         gasms = 0;
     if (gashrd == "")
         gashrd = 0;
     if (gasapb == "")
         gasapb = 0;


     var result = parseInt(gasms) + parseInt(gashrd) + parseInt(gasapb);
     if (!isNaN(result)) {
         document.getElementById('txt3').value = result;
     }
 }
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
          <form class="" action="<?php echo site_url('Auth/adfinpart') ?>" method="post">
            <div class="modal-body">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:8px;">
                      <input class="form-control" type="text" name="gaamoyr" id="gaamoyr" value="" required>
                    </div>
                  </div>
                  <script type="text/javascript">
                    function getDate(){ var todaydate = new Date();var month = todaydate.getMonth() + 1;var year = todaydate.getFullYear();
                      var datestring = year + "-" + month;document.getElementById("gaamoyr").value = datestring;} getDate();
                  </script>
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
    <script type="text/javascript">$(document).on("click", ".open-lguEvents", function () {
       var eventlgu = $(this).data('id');
       $(".modal-body #eventlgu").val( eventlgu );
       $('#idHolder').html( eventlgu );
    });</script>
    <!-- edit all modal -->

    <script type="text/javascript">
      $(document).ready( function () {
        $('#tabgaa').DataTable();
      } );
    </script>

    <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
