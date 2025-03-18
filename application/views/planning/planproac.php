
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/1.12.1-jquery.dataTables.min.css"> -->

  <style media="screen">
    /* <!-- datab indi --> */
    tfoot input { width: 100%; padding: 3px; box-sizing: border-box; }
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
                   <a href="plantarget" class="">
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
                <a href="planproac" class="active">
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
          <a class="nav-link collapsed" href="">
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
              <a type="button" class="btn float-right" style="color:white;" data-bs-toggle="modal" data-bs-target="#adcoac"><h1>Field Accomplishment</h1></a>
            </div>
          </div>
        </div>
      </div>

      <section>

        <!-- card -->
        <div class="card" >
          <div class="card-body">
            <div class="row" style="padding-top:20px;">

              <!-- table -->
              <table id="tabcoac" class="display" style="width:100%">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Staff</th>
                  <th>Activity</th>
                  <th>Date of Monitoring</th>
                  <th>IIS No.</th>
                  <th>Name of Firm/Project</th>
                  <th>Address</th>
                  <th>Latitude</th>
                  <th>Longitude</th>
                </tr>
                </thead>
                <tfoot style="display:table-header-group;">
                <tr>
                  <th></th>
                  <th>Staff</th>
                  <th>Activity</th>
                  <th>Date of Monitoring</th>
                  <th>IIS No.</th>
                  <th>Name of Firm/Project</th>
                  <th>Address</th>
                  <th>Latitude</th>
                  <th>Longitude</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php $coacno=''; foreach ($plan as $rplan) {
                    $planmon=strtotime($rplan->mondat);
                    if($prov=(substr($_SESSION['usec'], 5)==$rplan->pprov) || ($_SESSION['urights']==1 || $_SESSION['urights']==2.1)){
                      $coacno++; ?>
                      <tr>
                        <td><?php echo $coacno; ?>
                        </td>
                        <td><?php echo $rplan->puser; ?></td>
                        <td><?php echo $rplan->pact; ?></td>
                        <td><?php echo $rplan->mondat; ?></td>
                        <td><?php echo $rplan->iisno; ?></td>
                        <td><?php echo $rplan->pfirm; ?></td>
                        <td><?php echo $rplan->pprov; ?></td>
                        <td><?php echo $rplan->plat; ?></td>
                        <td><?php echo $rplan->plon; ?></td>

                        <!-- deghg -->
                        <div class="modal fade" id="deghg<?php echo $rplan->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-md modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header" style="background-color:#DF362D;">
                                <h5 class="modal-title" id="exampleModalLabel"><b>Remove this Record?</b></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form method="post" action="<?php echo site_url('Auth/delghg') ?>/<?php echo $rplan->id; ?>">
                                  <div class="" hidden>
                                    <input type="text" class="form-control" name="camid" value="<?php echo $rplan->id; ?>" required>
                                  </div>
                                  <div class="" style="padding-top:10px;padding-bottom:15px;">
                                    <input type="text" class="form-control" name="" value="<?php echo $rplan->camdat; ?>" required>
                                  </div>
                                 <div class="footer" style="text-align:right;">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- deghg -->

                      </tr>
                  <?php } } ?>
                </tbody>
              </table>
              <!-- table -->

            </div>
          </div>
        </div>
        <!-- card -->

      </section>
    </main>

  </body>
</html>

    <!-- add convention -->
    <div class="modal fade" id="adcoac" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Individual Accomplishment</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form class="" action="<?php echo site_url('Auth/adplan') ?>" method="post">
            <div class="modal-body">
              <div class="col-md-12" hidden>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:10px;">
                      <input class="form-control" type="text" name="userid" value="<?php echo $_SESSION['userid']; ?>" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:10px;">
                      <input class="form-control" type="text" name="puser" value="<?php echo $_SESSION['uname']; ?>" required>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12" style="margin-top:-10px;">
                <div class="form-group" style="padding-top:10px;">
                  <select class="form-select" name="pact" required>
                    <option value="" selected="selected">Select Activity here...</option>
                    <option value="Air Monitored">Air Monitored</option>
                    <option value="Air Surveyed">Air Surveyed</option>
                    <option value="ECPs Monitored">ECPs Monitored</option>
                    <option value="HWGs Monitored (Firms)">HWGs Monitored (Firms)</option>
                    <option value="HWGs Monitored (Healthcare)">HWGs Monitored (Healthcare)</option>
                    <option value="HWGs Surveyed">HWGs Surveyed</option>
                    <option value="Non-ECPs Monitored">Non-ECPs Monitored</option>
                    <option value="Project Surveyed Without ECC">Project Surveyed Without ECC</option>
                    <option value="Water Monitored">Water Monitored</option>
                    <option value="Water Surveyed">Water Surveyed</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:10px;">
                      <input type="date" class="form-control" name='mondat' value="" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:10px;">
                      <input type="text" class="form-control" name='iisno' value="" placeholder="IIS No." required>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group" style="padding-top:10px;">
                  <input type="text" class="form-control" name='pfirm' value="" placeholder="Name of Firm/Project" required>
                </div>
              </div>

              <?php $prov2be=substr($_SESSION['usec'], 5); ?>
              <input type="text" class="form-control" name="prov2be" value="<?php echo $prov2be; ?>" hidden>

              <div class="form-group" style="padding-top:10px;">
                <label>Location of Firm/Establishment</label><br>
                <span style="font-size:13px;font-style:italic;">Important Notice: You are from <?php echo $_SESSION['usec']; ?>, please select the province Marinduque. Thank you.</span>
                <div class="row" style="margin-top:-8px;">
                  <div class="col-sm-12" style="padding-top:10px;">
                    <select class="form-select" name="pprov" id="fprov" onchange="Copy()" required>
                      <option value="" selected="selected">Province</option>
                    </select>
                  </div>
                  <div class="col-md-12" style="padding-top:10px;">
                    <select class="form-select" name="pmun" id="fmun" required>
                      <option value="" selected="selected">Municipality</option>
                    </select>
                  </div>
                  <div class="col-md-12" style="padding-top:10px;">
                    <select class="form-select" name="pbrgy" id="fbrgy" required>
                      <option value="" selected="selected">Barangay</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:10px;">
                      <input type="text" class="form-control" name="plat" id="txtAmount" onkeypress="return onlyDotsAndNumbers(this,event);" maxlength="10" oncopy="return false" ondrag="return false" ondrop="return false" onpaste="return false" placeholder="Latitude Decimal only..." required/>
                      <!-- <input type="text" class="form-control" name='plat' onkeypress="return isNumberKey(event)" value="" placeholder="Latitude decimal only" required> -->
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:10px;">
                      <input type="text" class="form-control" name="plon" id="txtAmount" onkeypress="return onlyDotsAndNumbers(this,event);" maxlength="10" oncopy="return false" ondrag="return false" ondrop="return false" onpaste="return false" placeholder="Longitude Decimal only..." required/>
                      <!-- <input type="text" class="form-control" name='plon' value="" placeholder="Longitude decimal only" required> -->
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- modal body -->

            <script language=Javascript>
              function onlyDotsAndNumbers(txt, event) {
                var charCode = (event.which) ? event.which : event.keyCode
                if (charCode == 46) { if (txt.value.indexOf(".") < 0) return true; else return false; }
                if (txt.value.indexOf(".") > 0) { var txtlen = txt.value.length; var dotpos = txt.value.indexOf(".");
                    //Change the number here to allow more decimal points than 2
                    if ((txtlen - dotpos) > 7) return false; }
                if (charCode > 31 && (charCode < 48 || charCode > 57)) return false; return true;
              }
            </script>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            <!-- end of first modal -->

          </form>
        </div>
      </div>
    </div>
    <!-- add convention -->

    <!-- tabcoac datab indi -->
    <script type="text/javascript">
      $(document).ready(function () {
        // Setup - add a text input to each footer cell
        $('#tabcoac tfoot th').each( function () { var title = $(this).text();
          //remove first column
          if (title != '') { $(this).html( '<input type="text" placeholder="Search '+title+'" />' ); } } );

        // DataTable
        var table = $('#tabcoac').DataTable({ initComplete: function () {
                // Apply the search
                this.api() .columns() .every(function () { var that = this;

                        $('input', this.footer()).on('keyup change clear', function () { if (that.search() !== this.value) { that.search(this.value).draw(); } }); }); }, }); });
    </script>
    <!-- bio datab indi -->

    <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
