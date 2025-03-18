
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/1.12.1-jquery.dataTables.min.css"> -->

  <style media="screen">
    /* <!-- datab indi --> */
    tfoot input { width: 100%; padding: 3px; box-sizing: border-box; }
    /* showadlgu */
    #tow{ display: none; }
    /* div of modal lgu */
    #modlgudiv{ padding-bottom:20px; }
    /* hide modal id for increment */
    .modid{ visibility: hidden; margin-top:-45px; }

    #swmcrud{
      color:black;
    }
  </style>

  <body>

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
          <a class="nav-link " href="index">
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
          <a class="nav-link collapse" data-bs-target="#tables-nav" href="swmdash">
            <i class="bi bi-recycle"></i><span>SWM</span>
          </a>
          <?php if($_SESSION['urights']==8.4||$_SESSION['urights']=='8.5.1'||$_SESSION['urights']=='8.5.2'||$_SESSION['urights']=='8.5.3'||$_SESSION['urights']==4||$_SESSION['urights']==1){ ?>
            <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
              <li>
                <a href="swmadmin" class="">
                  <i class="bi bi-people"></i><span>SWM Admin</span>
                </a>
              </li>
              <li>
                <a href="swmlgman" class="active">
                  <i class="bi bi-card-checklist"></i><span>LGU Management</span>
                </a>
              </li>
              <li>
                <a href="swmlgrep" class="">
                  <i class="bi bi-card-checklist"></i><span>LGU Waste Report</span>
                </a>
              </li>
              <!-- <li>
                <a href="swmassmon" class="">
                  <i class="bi bi-card-checklist"></i><span>Assistance|Monitoring</span>
                </a>
              </li> -->
            </ul>
          <?php } ?>
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
          </a>
        </li><!-- End isscon Page Nav -->

      </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
      <div class="pagetitle" style="">
        <h1>SWM LGU Management</h1>
      </div>
      <section>


        <div class="col-md-12">
          <div class="card" >
            <div class="card-body">
              <div class="row" style="padding-top:13px;">

              <table id="example" class="display" style="width:100%">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Province</th>
                  <th>LGU</th>
                  <th>Scope</th>
                  <th>10 Yr Plan Status</th>
                  <th>Resolution No.</th>
                  <th>Date Approved</th>
                  <th>Remarks</th>
                </tr>
                </thead>
                <tfoot style="display:table-header-group;">
                <tr>
                  <th></th>
                  <th>Province</th>
                  <th>LGU</th>
                  <th>Scope</th>
                  <th>10 Yr Plan Status</th>
                  <th>Resolution No.</th>
                  <th width="10%">Date Approved</th>
                  <th width="20%">Remarks</th>
                </tr>
                </tfoot>

                <tbody>
                  <?php $lhid=0; foreach ($res as $row) { $lhid++; ?>
                    <tr>
                      <td><a class="open-lguEvents" data-id="<?php echo $row->lgucnt; ?>" <?php if ($_SESSION['urights']==8.4||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#delgu<?php echo $row->lguid; ?>" title="Delete" style="font-weight:bold;" id="swmcrud"><?php echo $lhid; ?></a></td>
                      <td><a class="open-lguEvents" data-id="<?php echo $row->lgucnt; ?>" <?php if ($_SESSION['urights']==8.4||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edlgu<?php echo $row->lguid; ?>" title="Update" style="font-weight:bold;" id="swmcrud"><?php echo $row->fprov; ?></a></td>
                      <td><?php echo $row->fmun; ?></td>
                      <td><?php echo $row->scope; ?>
                        <?php if($row->scope!=''){ ?>
                          <!-- add multi attachment -->
                          <?php if ($_SESSION['urights']==8.4||$_SESSION['urights']==1): ?><a class="open-lguEvents" data-id="year10" href="" data-bs-toggle="modal" data-bs-target="#uplgu<?php echo $row->lguid; ?>" id="uplgu">&nbsp;&nbsp;<i class="fa fa-upload" aria-hidden="true"></i></a><?php endif; ?>
                          <!--multi attachment-->
                          <?php $lguatt=0;
                          foreach($resup as $rowup){ if($rowup->upterm=='year10'){ ?>
                            <!-- //show and link of attachment -->
                            <?php if($_SESSION['urights']==8.4||$_SESSION['urights']==1 && $rowup->upterm=='year10' && $rowup->lguid==$row->lguid){ $lguatt++; ?>
                              <a href="<?php echo base_url().'upglobal/uplgu/'.$rowup->uplgufil; ?>" rel="nofollow" target="_blank">
                                <?php echo '<br/>'.$lguatt.') '.$rowup->uplgufil; ?>
                              </a>
                              <!-- unlink uplgu -->
                              <?php if($_SESSION['urights']==8.4||$_SESSION['urights']==1){ ?>
                              <a class="open-lguEvents" data-id="<?php echo $rowup->uplgufil; ?>" href="" data-bs-toggle="modal" data-bs-target="#unuplgu<?php echo $rowup->uplguid; ?>" style="color:orange;"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                              <!-- unlink ptt -->
                              <div class="modal fade" id="unuplgu<?php echo $rowup->uplguid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-md modal-dialog-centered">
                                  <div class="modal-content">
                                    <div class="modal-header" style="background-color:#DF362D;">
                                      <h5 class="modal-title" id="exampleModalLabel"><b>Remove 10 Year Uploaded File</b></h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <form method="post" action="<?php echo site_url('Auth/remuplgu') ?>/<?php echo $row->lguid; ?>/<?php echo $rowup->uplguid; ?>">
                                        <div class="" hidden>
                                          <input type="text" class="form-control" name="lguid" value="<?php echo $row->lguid; ?>" required>
                                        </div>
                                        <div class="form-group" style="">
                                          <input class="form-control" type="" name="varOne" id="eventlgu"/ readonly>
                                        </div>
                                        <div class="" hidden>
                                          <input type="text" class="form-control" name="<?php echo $rowup->uplguid; ?>" value="<?php echo $rowup->uplguid; ?>" required>
                                        </div>
                                       <div class="footer" style="text-align:right;">
                                          <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- unlink lgu -->
                              <?php } ?>
                            <?php }else{ }//else urights
                            }//if year10
                          }//foreach resup
                        }//row scope ?>
                      </td><!-- scope -->
                      <td><?php echo $row->year10; ?></td>
                      <td><?php echo $row->resno; ?>
                        <?php if($row->resno!=''){ ?>
                          <!-- add multi attachment -->
                          <?php if ($_SESSION['urights']==8.4||$_SESSION['urights']==1): ?><a class="open-lguEvents" data-id="resno" href="" data-bs-toggle="modal" data-bs-target="#uplgu<?php echo $row->lguid; ?>" id="uplgu">&nbsp;&nbsp;<i class="fa fa-upload" aria-hidden="true"></i></a><?php endif; ?>
                          <!--multi attachment-->
                          <?php $lguatt=0;
                          foreach($resup as $rowup){ if($rowup->upterm=='resno'){
                            //show and link of attachment
                            if($_SESSION['urights']==8.4||$_SESSION['urights']==1 && $rowup->upterm=='resno' && $rowup->lguid==$row->lguid){ $lguatt++; ?>
                              <a href="<?php echo base_url().'upglobal/uplgu/'.$rowup->uplgufil; ?>" rel="nofollow" target="_blank">
                                <?php echo '<br/>'.$lguatt.') '.$rowup->uplgufil; ?>
                              </a>
                              <!-- unlink uplgu -->
                              <?php if($_SESSION['urights']==8.4||$_SESSION['urights']==1){ ?>
                              <a class="open-lguEvents" data-id="<?php echo $rowup->uplgufil; ?>" href="" data-bs-toggle="modal" data-bs-target="#unuplgu<?php echo $rowup->uplguid; ?>" style="color:orange;"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                              <!-- unlink ptt -->
                              <div class="modal fade" id="unuplgu<?php echo $rowup->uplguid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-md modal-dialog-centered">
                                  <div class="modal-content">
                                    <div class="modal-header" style="background-color:#DF362D;">
                                      <h5 class="modal-title" id="exampleModalLabel"><b>Remove Resolution  Uploaded File</b></h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <form method="post" action="<?php echo site_url('Auth/remuplgu') ?>/<?php echo $row->lguid; ?>/<?php echo $rowup->uplguid; ?>">
                                        <div class="" hidden>
                                          <input type="text" class="form-control" name="lguid" value="<?php echo $row->lguid; ?>" required>
                                        </div>
                                        <div class="form-group" style="">
                                          <input class="form-control" type="" name="varOne" id="eventlgu"/ readonly>
                                        </div>
                                        <div class="" hidden>
                                          <input type="text" class="form-control" name="<?php echo $rowup->uplguid; ?>" value="<?php echo $rowup->uplguid; ?>" required>
                                        </div>
                                       <div class="footer" style="text-align:right;">
                                          <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- unlink lgu -->
                              <?php } ?>
                            <?php }else{ }//else urights
                            }//if year10
                          }//foreach resup
                        }//row scope ?>
                      </td>
                      <td><?php if($row->lgudatap=='0000-00-00'){ }else{ echo $row->lgudatap; } ?></td>
                      <td><?php echo $row->lgurem; ?></td>
                    </tr>

                    <!-- edlgu -->
                    <div class="modal fade" id="edlgu<?php echo $row->lguid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-md modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color:#FDB750;">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Edit <?php echo $row->fprov; ?> <?php echo $row->fmun; ?> LGU (<?php echo 'LHID: '.$row->lguid; ?>)</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="<?php echo site_url('Auth/edlgu') ?>/<?php echo $row->lguid; ?>">
                              <!-- <input class="" type="text" class="form-control" name="lguid" value="<?php echo $row->lguid; ?>" required> -->
                              <input class="" type="" name="varOne" id="eventlgu"/ required hidden>
                              <div class="form-group" style="padding-bottom:10px;">
                                <input type="text" class="form-control" name="scope" value="<?php echo $row->scope; ?>" placeholder="Input Scope here...">
                              </div>
                              <div class="form-group" style="padding-bottom:10px;">
                                <select class="form-select" name="year10">
                                  <?php if($row->year10=='Approved'){ ?> <option value="Approved">Approved</option><option value="Not Approved">Not Approved</option>
                                  <?php }elseif($row->year10=='Not Approved') { ?> <option value="Not Approved">Not Approved</option><option value="Approved">Approved</option><?php } ?>
                                </select>
                              </div>
                              <div class="form-group" style="padding-bottom:10px;">
                                <input type="text" class="form-control" name="resno" value="<?php echo $row->resno; ?>" placeholder="Input Resolution Number here...">
                              </div>
                              <div class="form-group" style="padding-bottom:10px;">
                                <input type="date" class="form-control" name="lgudatap" value="<?php echo $row->lgudatap; ?>">
                              </div>
                              <div class="form-group" style="padding-bottom:10px;">
                                <textarea name="lgurem" rows="6" cols="55"><?php echo $row->lgurem; ?></textarea>
                              </div>
                             <div class="footer" style="text-align:right;padding-bottom:10px;">
                                <button type="submit" class="btn btn-warning">Update</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- edlgu -->

                    <!-- delgu -->
                    <div class="modal fade" id="delgu<?php echo $row->lguid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-md modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color:#DC4731;">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Remove <?php echo $row->fprov; ?> <?php echo $row->fmun; ?> LGU (<?php echo 'LHID: '.$row->lguid; ?>)</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="<?php echo site_url('Auth/delgu') ?>/<?php echo $row->lguid; ?>">
                              <!-- <input class="" type="text" class="form-control" name="lguid" value="<?php echo $row->lguid; ?>" required> -->
                              <input class="" type="" name="varOne" id="eventlgu"/ required hidden>
                             <div class="" style="text-align:right;padding-bottom:10px;">
                                <button type="submit" class="btn btn-danger">Remove?</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- delgu -->

                    <!-- uplgu -->
                    <div class="modal fade" id="uplgu<?php echo $row->lguid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-md modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color:#f8a532;">
                            <h5 class="modal-title" id="exampleModalLabel"><b>LGU Upload</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="<?php echo site_url('Auth/uplgu') ?>/<?php echo $row->lguid; ?>" enctype="multipart/form-data">
                              <div class="form-group" hidden>
                                <input class="form-control" type="text" name="userid" value="<?php echo $_SESSION['userid']; ?>" required>
                                <input class="form-control" type="text" name="lguid" value="<?php echo $row->lguid; ?>" required>
                                <input class="form-control" type="" name="varOne" id="eventlgu"/>
                              </div>
                              <div class="varTwo" style="padding-top:12px;">
                                <input type="file" class="form-control" name='files[]' multiple >
                              </div>
                              <div class="form-group" hidden>
                                <?php date_default_timezone_set('Asia/Manila'); $curdat = date('Y-m-d'); ?>
                                <input type="text" class="form-control" name='updat' value="<?php echo $curdat; ?>">
                              </div>
                              <div class="footer" style="text-align:right;">
                                <button type="submit" class="btn btn-primary" value='Upload' name='upload'>Submit</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- uplgu -->

                  <?php } ?>
                </tbody>
              </table>

              </div>
            </div>
          </div><!-- card -->
        </div>

      </section>
    </main>

  </body>
</html>

<!-- add modal -->
<div class="modal fade" id="admodlgu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add LGU</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="" action="<?php echo site_url('Auth/adlgu') ?>" method="post">
        <div class="modal-body">
          <div class="col-md-12">
            <div class="row">
              <div class="form-group modid" id="modlgudiv">
                <input class="form-control" type="text" name="lguid" value="<?php foreach ($resid as $rowid) { $newlid=$rowid->lguid; } echo $newlid+1; ?> ">
              </div>
              <div class="col-md-12">
                <select class="form-control" name="fprov" id="fprov" required>
                  <option value="" selected="selected">-- Click here for Province --</option>
                </select>
              </div>
              <div class="col-md-12" style="padding-top:8px;">
                <select class="form-control" name="fmun" id="fmun" required>
                  <option value="" selected="selected">-- Click here for Municipality --</option>
                </select>
              </div>
              <div class="col-md-12 modid" style="padding-top:8px;">
                <select class="form-control" name="fbrgy" id="fbrgy" >
                  <option value="" selected="selected">Click here for Barangay</option>
                </select>
              </div>
              <div class="form-group" style="padding-top:8px;">
                <input class="form-control" type="text" name="scope" placeholder="Scope">
              </div>
              <div class="form-group" style="padding-top:8px;">
                <select class="form-select" name="year10">
                  <option value="Not Approved">Not Approved</option><option value="Approved">Approved</option>
                </select>
              </div>
              <div class="form-group" style="padding-top:8px;">
                <input class="form-control" type="text" name="resno" placeholder="Resolution Number">
              </div>
              <div class="form-group" style="padding-top:8px;">
                <input class="form-control" type="date" name="lgudatap" >
              </div>
              <div class="form-group" style="padding-top:8px;">
                <textarea name="lgurem" rows="4" cols="55" placeholder="Remarks"></textarea>
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
<!-- add modal -->

      <!-- edit all modal -->
      <script type="text/javascript">$(document).on("click", ".open-lguEvents", function () {
         var eventlgu = $(this).data('id');
         $(".modal-body #eventlgu").val( eventlgu );
         $('#idHolder').html( eventlgu );
      });</script>
      <!-- edit all modal -->

      <!-- datab indi -->
      <script type="text/javascript">
        $(document).ready(function () {
          // Setup - add a text input to each footer cell
          $('#example tfoot th').each( function () { var title = $(this).text();
            //remove first column
            if (title != '') { $(this).html( '<input type="text" placeholder="Search '+title+'" />' ); } } );

          // DataTable
          var table = $('#example').DataTable({ initComplete: function () {
                  // Apply the search
                  this.api() .columns() .every(function () { var that = this;

                          $('input', this.footer()).on('keyup change clear', function () { if (that.search() !== this.value) { that.search(this.value).draw(); } }); }); }, }); });
      </script>
      <!-- datab indi -->

      <!-- show adlgu form -->
      <script type="text/javascript"> function adlgu() { $("#tow").slideToggle("slow"); } </script>
      <!-- show adlgu form -->

      <!-- <script src="<?php echo base_url(); ?>assets/js/jquery-3.5.1.js"></script> -->

      <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
