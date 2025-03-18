

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

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

      <li class="nav-item">
        <a class="nav-link collapsed" href="arcgis">
          <i class="bi bi-globe"></i><span>ArcGIS</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
      </li><!-- End Tables Nav -->

      <?php if($_SESSION['urights']==1||$_SESSION['urights']==3.1||$_SESSION['urights']==4||$_SESSION['urights']==5||$_SESSION['urights']==5.1||$_SESSION['urights']==5.2||$_SESSION['urights']==5.3||$_SESSION['urights']==5.4||$_SESSION['urights']==5.5){ ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="isscon">
            <i class="bi bi-chat-right-dots"></i>
            <span>Issues and Concerns</span>
          </a>
        </li><!-- End isscon Page Nav -->
      <?php } ?>

      <?php if($_SESSION['urights']==3){ ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="req2op">
            <i class="bi bi-fingerprint"></i>
            <span style="padding-right:10px;">Access Request</span>
            <?php
              foreach($result8 as $row8){ if($row8->foi>0){ ?> <div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;"> <span class="visually-hidden"></span> </div>
                <?php }else{ } } ?>
          </a>
        </li><!-- End isscon Page Nav -->
      <?php } ?>

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

      <?php if($_SESSION['urights']==1){ ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="testpage">
          <i class="bi bi-pie-chart"></i><span>Test Page</span>
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="list">
          <i class="bi bi-pie-chart"></i><span>List</span>
        </a>
      </li><!-- End Tables Nav -->
      <?php } ?>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Mindoro</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Staff</th>
                    <th scope="col">Firm</th>
                    <th scope="col">Term</th>
                    <th scope="col">Filename</th>
                    <th scope="col">Reason</th>
                    <th scope="col">Request Date</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $fcnt=0;
                    foreach($result9 as $row9) { $fcnt+=1;
                      if($row9->reqsta==0){ ?>
                        <tr>
                          <th scope="row"><?php echo $fcnt; ?></th>
                          <td><?php echo $row9->uname; ?></td>
                          <td><?php echo $row9->firm; ?></td>
                          <td><?php echo $row9->term; ?></td>
                          <td><a href="" data-bs-toggle="modal" data-bs-target="#edreq<?php echo $row9->rfnum; ?>" style="color:#000;"><?php echo $row9->upcpdfil; ?></a></td>
                          <td title="<?php echo $row9->reason; ?>"><?php echo substr($row9->reason,0,20)."..."; ?></td>
                          <td><?php $reqdat = new DateTime($row9->reqdat); echo $reqdat->format('YMd H:i'); ?></td>

                          <!--grant access-->
                          <div class="modal fade" id="edreq<?php echo $row9->rfnum; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size:15px;" style="">
                            <div class="modal-dialog modal-sm modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color:#ffaa34;">
                                  <h5 class="modal-title" id="exampleModalLabel"><b>Request No. <?php echo $fcnt; ?></b></h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form method="post" action="<?php echo site_url('Auth/reqedsta') ?>/<?php echo $row9->rfnum; ?>">
                                    <input class="" type="text" class="form-control" name="fid" value="<?php echo $row9->fid; ?>" hidden>
                                    <div class="col-md-12" style="" hidden>
                                      rfnum:
                                      <input type="text" class="form-control" name="rfnum" value="<?php echo $row9->rfnum; ?>" >
                                      <!-- reqsta:
                                      <input type="text" class="form-control" name="reqsta" value="1" > -->
                                    </div>
                                    <div class="form-group" hidden>
                                      <?php date_default_timezone_set('Asia/Manila'); $curdat = date('Y-m-d H:i:s'); ?>
                                      <input type="text" class="form-control" name='reqapdat' value="<?php echo $curdat; ?>">
                                    </div>
                                    <div class="col-md-12">
                                    <div class="row" style="padding-bottom:10px;text-align:center;">
                                      <div class="col-md-6">
                                        <div class="">
                                          <button type="submit" class="btn btn-danger btn-md" name="remove" value="2" title="To Trash"><i class="bi bi-trash"></i></button>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="">
                                          <button type="submit" class="btn btn-success btn-md" name="remove" value="1" title="To Approved"><i class="bi bi-hand-thumbs-up"></i></button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--grant access-->

                        </tr>
                  <?php } } ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>
          <!-- card -->

        </div>
      </div>
    </section>

  </main><!-- End #main -->
