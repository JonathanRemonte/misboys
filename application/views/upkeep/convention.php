
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
          <a class="nav-link " href="convention">
            <i class="bi bi-lightbulb"></i>
            <span style="padding-right:10px;">Convention of Ideas</span>
          </a>
        </li><!-- End isscon Page Nav -->

      </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
      <div class="pagetitle" style="">
        <a type="button" class="btn float-right" style="color:white;" data-bs-toggle="modal" data-bs-target="#adconvent"><h1>Ideas and Suggestions</h1></a>
      </div>

      <section>

        <div class="card" >
          <div class="card-body">
            <div class="row" style="padding-top:20px;">

              <table id="ideatab" class="display" style="width:100%">
              <thead>
              <tr>
                <th>#</th>
                <th>Idea of</th>
                <th>Date</th>
                <th>Concept</th>
                <th>Resolution</th>
              </tr>
              </thead>
              <tfoot style="display:table-header-group;">
              <tr>
                <th></th>
                <th>Idea of</th>
                <th>Date</th>
                <th>Concept</th>
                <th>Resolution</th>
              </tr>
              </tfoot>
              <tbody>
                <?php $convno=0; foreach ($convent as $conv) { $convno++; ?>
                  <tr>
                    <th><?php echo $convno; ?></th>
                    <td><a class="open-homeEvents" data-id="eccn" <?php if ($conv->consta==1 && $_SESSION['userid']==$conv->userid): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edconv<?php echo $conv->conid; ?>" style="color:black;" title="Update"><?php echo $conv->staff; ?></a></td>
                    <td><a class="open-homeEvents" data-id="eccn" <?php if ($conv->consta==1 && $_SESSION['userid']==$conv->userid): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#deconv<?php echo $conv->conid; ?>" style="color:black;" title="Delete"><?php echo $conv->condat; ?></a></td>
                    <th><?php echo $conv->idea; ?></th>
                    <td><?php if($_SESSION['urights']==1): ?>
                      <a class="open-homeEvents" data-id="eccn" <?php if ($_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edrplyconv<?php echo $conv->conid; ?>" style="color:black;" title="Reply">
                        <i class="bi bi-node-plus" aria-hidden="true"></i>
                      </a>
                    <?php endif; ?><?php echo $conv->reply; ?></td>

                    <!-- edconv -->
                    <div class="modal fade" id="edconv<?php echo $conv->conid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-md modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color:#F6A21E;">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Edit this Record?</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="<?php echo site_url('Auth/edconv') ?>/<?php echo $conv->conid; ?>">
                              <div class="" hidden>
                                <input type="text" class="form-control" name="conid" value="<?php echo $conv->conid; ?>" required>
                              </div>

                              <div class="col-md-12" style="margin-top:-8px;">
                                <div class="form-group" style="padding-top:8px;">
                                  <textarea class="form-control" name="idea" rows="8" cols="100"><?php echo $conv->idea; ?></textarea>
                                </div>
                              </div>

                             <div class="footer" style="text-align:right;">
                                <button type="submit" class="btn btn-warning">Update</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- edconv -->

                    <!-- deconv -->
                    <div class="modal fade" id="deconv<?php echo $conv->conid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-md modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color:#DF362D;">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Remove this Record?</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="<?php echo site_url('Auth/deconv') ?>/<?php echo $conv->conid; ?>">
                              <div class="" hidden>
                                <input type="text" class="form-control" name="conid" value="<?php echo $conv->conid; ?>" required>
                              </div>
                              <div class="" style="margin-top:-18px;padding-bottom:15px;">
                                <input type="text" class="form-control" name="condat" value="<?php echo $conv->condat; ?>" required>
                              </div>
                             <div class="footer" style="text-align:right;">
                                <button type="submit" class="btn btn-danger">Remove</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- deconv -->

                    <!-- ed reply conv -->
                    <div class="modal fade" id="edrplyconv<?php echo $conv->conid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-md modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color:#F6A21E;">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Resolution</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="<?php echo site_url('Auth/edrepconv') ?>/<?php echo $conv->conid; ?>">
                              <div class="" hidden>
                                <input type="text" class="form-control" name="conid" value="<?php echo $conv->conid; ?>" required>
                              </div>

                              <div class="col-md-12" style="margin-top:-8px;">
                                <div class="form-group" style="padding-top:8px;">
                                  <textarea class="form-control" name="reply" rows="8" cols="100" placeholder="Resolution here..."><?php echo $conv->reply; ?></textarea>
                                </div>
                              </div>

                             <div class="footer" style="text-align:right;">
                                <button type="submit" class="btn btn-danger">Bring It On!</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ed reply conv -->

                  </tr>
                <?php } ?>
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
