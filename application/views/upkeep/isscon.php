
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/1.12.1-jquery.dataTables.min.css"> -->

  <style media="screen">
    /* <!-- datab indi --> */
    tfoot input { width: 100%; padding: 3px; box-sizing: border-box; }
  </style>

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
          <a class="nav-link collapsed" href="plan">
            <i class="bi bi-intersect"></i><span>Planning</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
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
            <a class="nav-link " href="isscon">
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

      <!-- Trigger the modal with a button -->
        <div class="pagetitle" style="">
          <a type="button" class="btn float-right" style="color:white;" data-bs-toggle="modal" data-bs-target="#addiss"><h1>Issues and Concerns</h1></a>
        </div>

        <!-- add isscon -->
        <div class="modal fade" id="addiss" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header" style="background-color:#2E9aC0;">
                <h5 class="modal-title" id="exampleModalLabel"><b>Add Issues and Concerns</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method="post" action="<?php echo site_url('Auth/adisscon'); ?>">
                    <!--Office-->
                  <div class="col-md-12 mb-3">
                    <div class="row">
                      <div class="col-md-4">
                        <label for="fprov" class="form-label">Type</label>
                        <select id="office" class="form-select" name="isstyp" required>
                          <option value="" selected>Click here</option>
                          <option value="Administrative">Administrative</option><option value="Policy">Policy</option>
                          <option value="Operational">Operational</option><option value="Others">Others</option>
                         </select>
                      </div>
                      <div class="col-md-4">
                        <label for="head" class="form-label">Division</label>
                        <input class="form-control" type="text" id="" name="office" value="<?php echo $_SESSION['udiv']; ?>" readonly/>
                      </div>
                      <div class="col-md-4">
                        <label for="head" class="form-label">Filed by</label>
                        <input class="form-control" type="text" id="" name="issby" value="<?php echo $_SESSION['uname']; ?>" readonly/>
                      </div>
                      <div class="col-md-4" hidden>
                        <?php date_default_timezone_set('Asia/Manila'); ?>
                        <input type="text" class="form-control" name="datiss" value="<?php echo $datnow=date('d/m/Y H:i:s'); ?>" >
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12" style="margin-top:-1%;">
                    <label for="issue" class="form-label lblbottom">Issue</label>
                    <textarea name="issue" rows="2" cols="100" class="form-control"></textarea>
                  </div>
                  <div class="col-md-12" style="padding-top:1%;">
                    <label for="back" class="form-label lblbottom">Background</label>
                    <textarea name="back" rows="2" cols="100" class="form-control"></textarea>
                  </div>
                  <div class="col-md-12" style="padding-top:1%;">
                    <label for="recom" class="form-label lblbottom">Recommendation</label>
                    <textarea name="recom" rows="2" cols="100" class="form-control"></textarea>
                  </div>
                  <div class="col-md-3" hidden>
                    <input type="text" class="form-control" name="issby" value="<?php echo $_SESSION['uname']; ?>" required>
                  </div>
                  <div class="col-md-12" style="padding-top:1%;" hidden>
                    <input class="form-control" type="text" id="valoff" name="issta" value="1">
                  </div>
                  <div class="footer" style="text-align:right;padding-right:2.3%;">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div><!-- add isscon -->

      <section>

        <div class="" >
          <div class="">
            <div class="row" style="padding-top:20px;">
              <table id="ideatab" class="display table-hover table-striped" style="width:100%">
              <thead>
              <tr>
                <th>#</th>
                <th>Office</th>
                <th>Filed By</th>
                <th>Date Filed</th>
                <th>Type</th>
                <th>Issue</th>
                <th>Background</th>
                <th>Recommendation</th>
                <th>Action Taken</th>
                <th>Action</th>
              </tr>
              </thead>
              <tfoot style="display:table-header-group;">
              <tr>
                <th></th>
                <th>Office</th>
                <th>Filed By</th>
                <th>Date Filed</th>
                <th>Type</th>
                <th>Issue</th>
                <th>Background</th>
                <th>Recommendation</th>
                <th>Action Taken</th>
                <th>Action</th>
              </tr>
              </tfoot>
              <tbody>
                <?php
                $fcnt=0;
                foreach($result as $row) {?>
                  <tr><th scope="row" style="width:5%;"><?php echo $fcnt+=1; ?></th>
                    <td style="width:5%;"><?php echo $row->office; ?></td><td><?php echo $row->issby; ?></td>
                    <td style="width:5%;"><?php echo $row->datiss; ?></td><td style="width:7%;"><?php echo $row->isstyp; ?></td>
                    <td><?php echo $row->issue; ?></td><td><?php echo $row->back; ?></td>
                    <td><?php echo $row->recom; ?></td>

                    <td><?php if($row->act=='' && $row->upact==''){ }else{ echo $row->act;
                      if($row->upact!=''){?>
                        <a href="<?php echo base_url().'upact/'.$row->upact; ?>" rel="nofollow" target="_blank" title="<?php echo $row->upact; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <?php }else{?>
                        <?php if ($_SESSION['urights']==3.1||$_SESSION['urights']==1){?>
                        <a class="open-homeEvents" data-id="upact" href="" data-bs-toggle="modal" data-bs-target="#upact<?php echo $row->issid; ?>" id="upact"><i class="fa fa-upload" aria-hidden="true" id="upact"></i></a>
                      <?php }else{} ?>
                      <?php } } ?>
                      <!--if with attachment-->
                    </td>
                    <td>
                      <?php if ($_SESSION['urights']==3.1||$_SESSION['urights']==1){?>
                        <a href="" data-bs-toggle="modal" data-bs-target="#adacttak<?php echo $row->issid; ?>" style="color:orange;" title="Add Action Taken"><i class="fa fa-edit" aria-hidden="true"></i></a>
                      <?php }else{} ?>
                      <?php if ($row->issta==1 && $_SESSION['uname']==$row->issby){?>
                        <a href="" data-bs-toggle="modal" data-bs-target="#ediss<?php echo $row->issid; ?>" style="color:orange;" title="Edit Issues and Concerns"><i class="fa fa-edit" aria-hidden="true"></i></a>
                      <?php }else{} ?>
                    </td>

                    <!-- add act taken -->
                    <div class="modal fade" id="adacttak<?php echo $row->issid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color:#f8a532;">
                            <h5 class="modal-title" id="exampleModalLabel">Add Action Taken</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="<?php echo site_url('Auth/edisscon') ?>/<?php echo $row->issid; ?>" enctype="multipart/form-data">
                              <?php
                                if (isset($error)){
                                  echo '<div class="alert alert-danger">'.$error.'</div>';
                                }
                              ?>
                              <div class="form-group" hidden>
                                <input type="text" class="form-control" name="issid" value="<?php echo $row->issid; ?>">
                              </div>
                              <div class="col-md-12" style="">
                                <label for="act" class="form-label lblbottom" style="font-size:16px;">Action Taken</label>
                                <textarea name="act" rows="3" cols="100" class="form-control"><?php echo $row->act; ?></textarea>
                              </div>
                                <?php if($row->upact==''){ ?>
                                  <div class="form-group" style="padding-top:2%;">
                                    <input type="file" class="form-control" name="userfile">
                                  </div>
                                <?php }else{ ?>
                                  <input type="text" class="form-control" name="upact" value="<?php echo $row->upact; ?>" hidden>
                                <?php } ?>
                              <div class="col-md-3" hidden>
                                <?php date_default_timezone_set('Asia/Manila'); ?>
                                <input type="text" class="form-control" name="datact" value="<?php echo $datnow=date('d/m/Y H:i:s'); ?>" >
                              </div>
                              <div class="col-md-3" hidden>
                                <input type="text" class="form-control" name="issta" value="2" >
                              </div>
                              <div class="col-md-3" hidden>
                                <input type="text" class="form-control" name="actby" value="<?php echo $_SESSION['uname']; ?>" >
                              </div>
                            </div>
                            <div class="footer" style="text-align:right;padding-right:2.3%;">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </form>
                        </div>
                      </div>
                    </div>

                    <!-- ediss-->
                    <div class="modal fade" id="ediss<?php echo $row->issid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-md modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color:#f8a532;">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Edit Issues and Concerns</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="<?php echo site_url('Auth/ediss') ?>/<?php echo $row->issid; ?>">
                            <div class="" hidden>
                              <input class="form-control" type="text" name="issid" value="<?php echo $row->issid; ?>" required >
                            </div>
                            <!-- <div class="col-md-12 mb-3">
                              <div class="row">
                                <div class="col-md-4">
                                  <label for="office" class="form-label">Office</label>
                                  <select id="office" class="form-select" name="" required>
                                    <option value="" selected>Click here</option>
                                    <option value="JMSalino,ORD">ORD</option><option value="EPQuindoza,FAD">FAD</option>
                                    <option value="PMEstorque,EMED">EMED</option><option value="NVDorado,CPD">CPD</option>
                                    <option value="RZCapistrano,Mar">Mar</option><option value="AMCoden,OcMin">OcMin</option>
                                    <option value="EULabre,OrMin">OrMin</option><option value="ESVelasco,Pal">Pal</option>
                                    <option value="IAAnzaldo,Rom">Rom</option>
                                  </select>
                                </div>
                                <div class="col-md-4" style="">
                                  <label for="head" class="form-label">Head</label>
                                  <input class="form-control" type="text" id="valoff" name="head" value="" readonly=""/>
                                </div>
                                <div class="col-md-4" style="" hidden>
                                  <label for="head" class="form-label">Office</label>
                                  <input class="form-control" type="text" id="valoff2" name="office" value="" readonly=""/>
                                </div>
                                <div class="col-md-3" hidden>
                                  <?php date_default_timezone_set('Asia/Manila'); ?>
                                  <input type="text" class="form-control" name="datiss" value="<?php echo $datnow=date('d/m/Y H:i:s'); ?>" >
                                </div>
                                <div class="col-md-4">
                                  <label for="fprov" class="form-label">Type</label>
                                  <select id="office" class="form-select" name="isstyp" required>
                                    <option value="" selected>Click here</option>
                                    <option value="Administrative">Administrative</option><option value="Policy">Policy</option>
                                    <option value="Operational">Operational</option><option value="Others">Others</option>
                                   </select>
                                </div>
                              </div>
                            </div> -->
                            <div class="col-md-12" style="margin-top:-1%;">
                              <label for="issue" class="form-label lblbottom">Issue</label>
                              <textarea name="issue" rows="2" cols="100" class="form-control"><?php echo $row->issue; ?></textarea>
                            </div>
                            <div class="col-md-12" style="padding-top:1%;">
                              <label for="back" class="form-label lblbottom">Background</label>
                              <textarea name="back" rows="2" cols="100" class="form-control"><?php echo $row->back; ?></textarea>
                            </div>
                            <div class="col-md-12" style="padding-top:1%;">
                              <label for="recom" class="form-label lblbottom">Recommendation</label>
                              <textarea name="recom" rows="2" cols="100" class="form-control"><?php echo $row->recom; ?></textarea>
                            </div>
                            <div class="col-md-3" hidden>
                              <input type="text" class="form-control" name="issby" value="<?php echo $_SESSION['uname']; ?>" required>
                            </div>
                          </div>
                            <div class="footer" style="text-align:right;padding-right:2.3%;">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- upact-->
                    <div class="modal fade" id="upact<?php echo $row->issid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-md modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color:#f8a532;">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Upload Attachment</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="<?php echo site_url('Auth/upgeneric') ?>/<?php echo $row->issid; ?>/<?php echo $uploc='upact'; ?>" enctype="multipart/form-data">
                              <div class="">
                                <input class="form-control" type="text" name="issid" value="<?php echo $row->issid; ?>" required hidden>
                                <input class="form-control" type="text" name="varOne" id="eventId" hidden/>
                              </div>
                              <div class="mb-3 varTwo">
                                <input type="file" class="form-control" name="userfile" >
                              </div>
                              <div class="footer" style="text-align:right;">
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>


                    <?php } ?>
                  </tr>
              </tbody>
            </table>
            </div>
          </div>
        </div><!-- card -->

      </section>
    </main>

  </body>
</html>

<!-- add convention -->
<div class="modal fade" id="adconvent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Ideas/Suggestions</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="" action="<?php echo site_url('Auth/adconv') ?>" method="post">
        <div class="modal-body">
          <div class="col-md-12" hidden>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group" style="padding-top:8px;">
                  <input class="form-control" type="text" name="userid" value="<?php echo $_SESSION['userid']; ?>" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group" style="padding-top:8px;">
                  <input class="form-control" type="text" name="staff" value="<?php echo $_SESSION['uname']; ?>" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group" style="padding-top:8px;">
                  <?php date_default_timezone_set('Asia/Manila'); $condat = date('Y-m-d'); ?>
                  <input type="text" class="form-control" name='condat' value="<?php echo $condat; ?>">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12" style="margin-top:-8px;">
            <div class="form-group" style="padding-top:8px;">
              <textarea class="form-control" name="idea" rows="8" cols="100" placeholder="Ideas/Suggestions here..."></textarea>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- add convention -->

    <!-- ideatab datab indi -->
    <script type="text/javascript">
      $(document).ready(function () {
        // Setup - add a text input to each footer cell
        $('#ideatab tfoot th').each( function () { var title = $(this).text();
          //remove first column
          if (title != '') { $(this).html( '<input type="text" placeholder="Search '+title+'" />' ); } } );

        // DataTable
        var table = $('#ideatab').DataTable({ initComplete: function () {
                // Apply the search
                this.api() .columns() .every(function () { var that = this;

                        $('input', this.footer()).on('keyup change clear', function () { if (that.search() !== this.value) { that.search(this.value).draw(); } }); }); }, }); });
    </script>
    <!-- bio datab indi -->

    <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
