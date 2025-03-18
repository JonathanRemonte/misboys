
<style media="screen">
.responsive { width: auto; height: auto; }
/*modal accordion*/
.accordion { background-color: #eee; color: #444; cursor: pointer; padding: 18px; width: 100%;
  border: none; text-align: left; outline: none; font-size: 15px; transition: 0.4s; }
.accordion:hover { background-color: #ccc; }
.accordion:after { content: '\002B'; color: #777; font-weight: bold; float: right; margin-left: 5px; }
.active:after { content: "\2212"; }
.panel { padding: 0 18px; background-color: white; max-height: 0; overflow: hidden; transition: max-height 0.2s ease-out; }
/*legal table*/
.th1{ width:16% } .th2{ width:16% } .th3{ width:16% } .th4{ width:16% } .th5{ width:16% } .thlocout{ width:13% } .thout{ width:13% }
.th1stab{ width:20%; }
.th1LGL{ width:2% } .th2LGL{ width:15% }
.divmodal{ padding-top: 5px; } .labmar{ margin-bottom: -6px; }
#editemedcpd{ color:#52b788; }
.tab1 { margin-bottom:1.2%;}
#niko{ color:#2E8BC0; } #divine{ color:#E983D8; } #christy{ color:#019992; }
#karl{ color:#F85C70; } #mark{ color:#FF8D80; } #def{ color:#4E545C; }

</style>

<!-- dropdown cascade address -->
<?php $this->load->view('2shared/procitbar.php'); ?>

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url(); ?>index">
          <i class="bi bi-hexagon"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <?php if($_SESSION['urights']==7||$_SESSION['urights']==1){ ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="cpdex">
            <i class="bi bi-speedometer2"></i><span>CPD Express</span>
          </a>
        </li><!-- End Tables Nav -->
      <?php } ?>

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#tables-nav" href="javascript:void(0);" onclick="history.back(); window.close();">
          <i class="bi bi-arrow-bar-left"></i><span>Back to Table of Firms</span><!--i class="bi bi-chevron-down ms-auto"></i-->
        </a>
      </li><!-- End Tables Nav -->

      <?php if($_SESSION['urights']==3){ ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?php echo base_url(); ?>index.php/auth/req2op">
            <i class="bi bi-fingerprint"></i>
            <span style="padding-right:10px;">Access Request</span>
            <?php
              foreach($result8 as $row8){ if($row8->foi>0){ ?> <div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;"> <span class="visually-hidden"></span> </div>
                <?php }else{ } } ?>
          </a>
        </li><!-- End isscon Page Nav -->
      <?php } ?>

    </ul>

    <br>
    <ul class="list-group" style="font-size:12px;">
      <label for=""><b>Editor Legend:</b></label>
      <div>
        <button type="button" class="btn btn-dark rounded-pill" style="background-color:#2E8BC0;width:5px;"></button> Niko (Blue)
      </div>
      <div>
        <button type="button" class="btn btn-dark rounded-pill" style="background-color:#E983D8;width:5px;"></button> Divine (Hot Pink)
      </div>
      <div>
        <button type="button" class="btn btn-dark rounded-pill" style="background-color:#019992;width:5px;"></button> Christy (Blue Green)
      </div>
      <div>
        <button type="button" class="btn btn-dark rounded-pill" style="background-color:#F85C70;width:5px;"></button> Sharmaine (Red)
      </div>
      <div>
        <button type="button" class="btn btn-dark rounded-pill" style="background-color:#FF8D80;width:5px;"></button> Mark (Coral)
      </div>
      <div>
        <button type="button" class="btn btn-dark rounded-pill" style="background-color:#D7A449;width:5px;"></button> Caren (Mimosa)
      </div>
      <div>
        <button type="button" class="btn btn-dark rounded-pill" style="background-color:#4E545C;width:5px;"></button> Default (Gun Metal Gray)
      </div>
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    <div class="pagetitle" style="">
      <h1>Company Profile</h1>
    </div>

    <section class="section profile" style="">

      <!--row profile pic and basic info-->
      <div class="col-xl-12">
        <div class="card">
          <div class="row">

            <div class="section profile">
              <div class="row" style="margin-top:-.8%;margin-bottom:-1.8%;">
                <div class="col-xl-4" style="padding-left:3%;padding-top:1.8%;padding-bottom:15px;">
                  <div class="card" style="border:solid black 3px;">
                    <div class="card-body d-flex flex-column align-items-center">
                      <!-- profile pic -->

                      <?php foreach ($getgal as $rgal) {
                        if($rgal->firimg==''){ ?>
                          <img class="d-block w-100" style="width:600px;height:300px;padding-top:5%;" src="<?php echo file_exists(base_url() . 'upglobal/upfirmprof/' . $row->firimg) ? base_url() . 'upglobal/upfirmprof/' . $row->firimg : base_url() . 'assets/img/4BHiveLogo1.png'; ?>" alt="Alternative Text">
                        <?php }else{ ?>
                          <img class="d-block w-100" style="width:600px;height:300px;padding-top:5%;" src="<?php echo base_url().'upglobal/upfirmprof/'.$rgal->firimg; ?>" alt="Alternative Text">
                        <?php }}?>


                      <div class="col-md-12" style="padding-top:5px;">

                          <table class="table table-striped table-hover tab1">
                            <tbody><tr class="alert alert-success alert-dismissible fade show"><th rowspan="2"><p style="text-align:justify;">
                              <div class="col-md-12" style="margin-top:-18px;">
                                <div class="row">
                                  <div class="col-md-6">
                                    <?php if ($_SESSION['urights']==8.1||$_SESSION['urights']==1){ ?>
                                      Add to this firm
                                    <?php }else{ ?>
                                      Try this feature
                                    <?php } ?>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="row">
                                          <div class="col-md-2">
                                            <?php foreach ($getgal as $rgal) {
                                              if ($_SESSION['urights']==8.1||$_SESSION['urights']==1){
                                              if($rgal->firimg==''){ ?>
                                                <a class="open-homeEvents" data-id="upprof" href="" data-bs-toggle="modal" data-bs-target="#upprof<?php echo $row->fid; ?>" id="mark" style=""><i class="bi bi-arrow-up-square" aria-hidden="true" title="Upload Profile Picture" style="font-size:20px;color:green;"></i></a>
                                              <?php }else{ }}
                                            }?>
                                          </div>
                                          <?php if ($_SESSION['urights']==8.1||$_SESSION['urights']==1){ ?>
                                            <div class="col-md-1" style="padding-right:18px;">
                                              <a class="open-homeEvents" data-id="phovid" href="" data-bs-toggle="modal" data-bs-target="#upphovid<?php echo $row->fid; ?>" id="mark" style=""><i class="bi bi-camera" aria-hidden="true" title="Upload Photos" style="font-size:20px;color:green;"></i></a>
                                          <?php } ?>
                                            <?php foreach ($gllry as $rgll) {
                                              if($rgll->cfid>=1){ ?>
                                                <a class="open-homeEvents" data-id="upprof" href="<?php echo base_url().'Auth/firmgllry/'.$row->fid; ?>" id="mark" style=""><i class="bi bi-eye" aria-hidden="true" title="View Photo" style="font-size:20px;color:green;"></i></a>
                                              <?php }else{ }
                                            }?>
                                          </div>
                                          <div class="col-md-1" style="padding-right:18px;">
                                            <?php foreach ($vidgal as $rovid) {
                                              if($rovid->vfid==1){ ?>
                                                <a href="javascript:void(0)" onclick="playVideo('<?php echo $rovid->filename; ?>')" id="mark" style=""><i class="bi bi-binoculars" aria-hidden="true" title="Play Video" style="font-size:20px;color:green;"></i></a>
                                            <?php }else{ ?>
                                              <?php if ($_SESSION['urights']==8.1||$_SESSION['urights']==1){ ?>
                                              <a class="open-homeEvents" data-id="upvideo" href="" data-bs-toggle="modal" data-bs-target="#upvideo<?php echo $row->fid; ?>" id="mark" style=""><i class="bi bi-camera-reels" aria-hidden="true" title="Upload Video" style="font-size:20px;color:green;"></i></a>
                                            <?php } } } ?>
                                          </div>
                                          <?php if ($_SESSION['urights']==8.1||$_SESSION['urights']==1){ ?>
                                            <div class="col-md-1" style="padding-right:13px;">
                                              <a class="open-homeEvents" data-id="firdes" href="" data-bs-toggle="modal" data-bs-target="#edfirdes" id="mark"><i class="bi bi-bookmark" aria-hidden="true" title="Description" style="font-size:20px;color:green;"></i></a>
                                            </div>
                                          <?php } ?>
                                          <?php if ($_SESSION['urights']==8.1||$_SESSION['urights']==1){ ?>

                                            <?php foreach ($result2 as $ropro) {
                                              if($ropro->pfid>=1){ }else{ ?>
                                                <div class="col-md-1">
                                                  <a class="open-homeEvents" data-id="upproflo" href="" data-bs-toggle="modal" data-bs-target="#upemed<?php echo $row->fid; ?>" id="upproflo"><i class="bi bi-arrow-clockwise" aria-hidden="true" title="Process Flow" style="font-size:20px;color:green;"></i></a>
                                                </div>
                                            <?php } } ?>



                                           <?php } ?>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </th></tr>
                          </tbody>
                        </table>

                      <!-- video modal -->
                      <script>
                        function playVideo(filename) {
                          // create a new video element
                          var video = document.createElement('video');
                          video.width = 1020;
                          video.height = 740;
                          video.controls = true;
                          video.src = '<?php echo base_url(); ?>upglobal/upfirmgvid/' + filename;

                          // create a modal to display the video
                          var modal = document.createElement('div');
                          modal.style.position = 'fixed';
                          modal.style.top = '0';
                          modal.style.left = '0';
                          modal.style.width = '80%';
                          modal.style.height = '100%';
                          modal.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
                          modal.style.display = 'flex';
                          modal.style.justifyContent = 'flex-end';
                          modal.style.alignItems = 'center';
                          modal.onclick = function() {
                            // remove the modal when clicked
                            document.body.removeChild(modal);
                          };

                          // append the video to the modal
                          modal.appendChild(video);

                          // append the modal to the body
                          document.body.appendChild(modal);
                        }
                      </script>
                      <!-- video modal -->

                        <table class="table table-striped table-hover tab1">
                          <tbody><tr><td rowspan="2"><p style="text-align:justify;"><?php echo $row->firdes; ?></p></td>
                            </th></tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="col-xl-8">
                  <div class="card-body pt-3">
                    <div class="card-body pt-2">
                      <div class="tab-pane fade show profile-overview">

                        <table class="">
                          <thead>
                            <tr><th class="th1stab">
                              <h2 style="text-align:left;padding-top:7px;text-decoration:underline;"><b><a class="open-homeEvents" data-id="firm" <?php if ($_SESSION['urights']==7||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edfirm" style="color:black;"><?php echo $row->firm; ?></a></b></h2>
                            </th></tr>
                          </thead>
                        </table>

                        <table class="table table-striped table-hover table-bordered border-success tab1">
                          <thead>
                            <tr><th class="th1stab"><a class="open-homeEvents" data-id="fown" <?php if ($_SESSION['urights']==7||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edfown" id="niko">Proponent</a></th><td style="font-weight:bold;"><?php echo $row->fown; ?></td></tr>
                          </thead>
                        </table>

                        <table class="table table-striped table-hover table-bordered border-success tab1">
                          <thead><tr><th class="th1stab" style="vertical-align:middle;"><a class="open-homeEvents" data-id="fcat" <?php if ($_SESSION['urights']==7||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edfcat" style="font-weight:bold;" id="niko">Category</a></th><td><?php echo $row->fcat; ?></td></tr>
                            <tr><th class="" style="vertical-align:middle;"><a class="open-homeEvents" data-id="subcat" <?php if ($_SESSION['urights']==7||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edsubcat" style="font-weight:bold;" id="niko">Sub-Category</a></th><td><?php echo $row->subcat; ?></td></tr>
                            <tr><th class="" style="vertical-align:middle;"><a class="open-homeEvents" data-id="specat" <?php if ($_SESSION['urights']==7||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edspecat" style="font-weight:bold;" id="niko">Specific Category</a></th><td><?php echo $row->specat; ?></td></tr>
                            <tr><th class="" style="vertical-align:middle;"><a class="open-homeEvents" data-id="subspec" <?php if ($_SESSION['urights']==7||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edsubspec" style="font-weight:bold;" id="niko">Sub-Specific Category</a></th><td><?php echo $row->subspec; ?></td></tr>
                          </thead>
                        </table>


                        <table class="table table-striped table-hover table-bordered border-success tab1">
                          <thead><tr><th class="th1stab"><a class="open-homeEvents" data-id="adrs" <?php if ($_SESSION['urights']==7||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edadrs" style="font-weight:bold;" id="niko">Address</a></th>
                            <td colspan="3" style="width:50%;"><?php if($row->fstret==''){ }else{ echo $row->fstret.', '; } ?><?php echo $row->fbrgy; ?>, <?php echo $row->fmun; ?>, <?php echo $row->fprov; ?></td>
                            <th class=""><a class="open-homeEvents" data-id="flat" <?php if ($_SESSION['urights']==7||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edflat" style="font-weight:bold;width:6%;" id="niko">Lat</a></th><td class="" style="width:10%;"><?php echo (float)$row->flat; ?></td>
                            <th class=""><a class="open-homeEvents" data-id="flon" <?php if ($_SESSION['urights']==7||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edflon" style="font-weight:bold;width:6%;" id="niko">Lon</a></th><td style="width:10%;"><?php echo (float)$row->flon; ?></td>
                            </tr></thead>
                        </table>

                        <table class="table table-striped table-hover table-bordered border-success tab1">
                          <thead><tr><th class="th1stab" style="vertical-align:middle;" id="def">
                            Permit Summary</th>
                              <!-- <?php if($_SESSION['urights']==7||$_SESSION['urights']==1){ ?><a href="javascript:window.history.go(-1);" style="color:black;">Permit Summary</a><?php } ?></th> -->
                            <td>ECC: <b><?php echo $row->eccn; ?></b> |  PTO: <b><?php echo $row->pto; ?></b> |  DP: <b><?php echo $row->dp; ?></b> |  HazID: <b><?php echo $row->hazid; ?></b> | <br>PTT: <b><?php echo $row->ptt; ?></b></td><th style="vertical-align:top;" id="mark">Process Flow
                                 <!-- <?php if ($_SESSION['urights']==8.1||$_SESSION['urights']==1): ?><a class="open-homeEvents" data-id="upproflo" href="" data-bs-toggle="modal" data-bs-target="#upemed<?php echo $row->fid; ?>" id="upproflo"><i class="fa fa-upload" aria-hidden="true"></i></a><?php endif; ?> -->
                            </th>
                          <td><?php foreach ($result5 as $row5){ if($row5->upterm=='upproflo'){ ?> <a href="<?php echo base_url().'upglobal/upemed/'.$row5->filename; ?>" rel="nofollow" target="_blank"><?php echo ' *'.$row5->filename; ?></a>

                            <?php if($_SESSION['urights']==8.1||$_SESSION['urights']==1){ ?>
                            <a class="open-homeEvents" data-id="<?php echo $row5->filename; ?>" href="" data-bs-toggle="modal" data-bs-target="#unproflo<?php echo $row5->upemeid; ?>" style="color:orange;"><i class="fa fa-times-circle" aria-hidden="true"></i></a>

                          <!-- unlink proflo -->
                          <div class="modal fade" id="unproflo<?php echo $row5->upemeid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color:#DF362D;">
                                  <h5 class="modal-title" id="exampleModalLabel"><b>Remove Process Flow Uploaded File</b></h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form method="post" action="<?php echo site_url('Auth/deloneEm') ?>/<?php echo $row->fid; ?>/<?php echo $row5->upemeid; ?>">
                                    <div class="spechide">
                                      <input type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
                                      <input type="text" class="form-control" name="upterm" value="upproflo" required>
                                    </div>
                                    <div class="form-group" style="margin-top:-45px;">
                                      <input class="form-control" type="" name="" id="eventId"/ disabled>
                                      <input class="form-control" type="" name="varOne" id="eventId"/ hidden>
                                    </div>
                                    <div class="" hidden>
                                      <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
                                    </div>
                                   <div class="footer" style="text-align:right;">
                                      <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- unlink proflo -->

                      <?php  }else{} ?> <?php }else{} }?></td></tr>
                        </thead>
                        </table>

                        <table class="table table-striped table-hover table-bordered border-success tab1">
                          <thead>
                            <tr><th class="th1stab"><a class="open-homeEvents" data-id="manhead" <?php if ($_SESSION['urights']==7.1||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edmanhead" id="divine">Managing Head</a></th><td><?php echo $row->headf; ?> <?php echo $row->headm; ?> <?php echo $row->headl; ?></td></tr>
                          </thead>
                        </table>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!--row-->
        </div><!--card-->
      </div><!--col-xl-12-->
      <!--row profile pic and basic info-->

      <!-- emed upload-->
      <div class="modal fade" id="upemed<?php echo $row->fid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#f8a532;">
              <h5 class="modal-title" id="exampleModalLabel"><b>EMED Upload</b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="<?php echo site_url('Auth/upemed') ?>/<?php echo $row->fid; ?>" enctype="multipart/form-data">
                <div class="form-group" hidden>
                  <input class="form-control" type="text" name="fid" value="<?php echo $row->fid; ?>" required>
                  <input class="form-control" type="" name="varOne" id="eventcpd"/>
                </div>
                <div class="varTwo" style="padding-top:12px;">
                  <input type="file" class="form-control" name='files[]' multiple >
                </div>
                <div class="form-group" hidden>
                  <?php date_default_timezone_set('Asia/Manila'); $curdat = date('dMY H:i:s'); ?>
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
      <!-- emed upload-->

    <div class="col-xl-12">
      <!-- <div class="card"> -->
        <div class="row">

          <!--pco details-->
          <div class="card-body pt-3" style="margin-top:-2%;">
            <div class="" id="profile-overview">
              <h5 class="card-title" style="font-weight:bold;"><a class="open-homeEvents" <?php if ($_SESSION['urights']==7.1||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#addpco" id="divine">PCO Details</a></h5>
              <table class="table table-striped table-hover table-bordered border-success tab1">
                <thead style="text-align:center;vertical-align:middle;"><tr style="line-height:10px;"><th rowspan="2" id="def">COA Number</th><th rowspan="2" id="def">Cat</th><th rowspan="2" id="def">Status</th><th colspan="2" id="def">Date</th><th rowspan="2" id="def">PCO Name</th><th colspan="2" id="def">Contact</th><th rowspan="2" id="def">Training Center</th><th colspan="2" id="def">Date</th><th rowspan="2" id="def">Attachment</th><?php if ($_SESSION['urights']==7.1||$_SESSION['urights']==1): ?><th rowspan="2" style="color:red;"><i class="fa fa-cogs" aria-hidden="true"></i></th><?php endif; ?></tr>
                <tr style="line-height:10px;"><th id="def">Issued</th><th id="def">Expiry</th><th id="def">Number</th><th id="def">Email</th><th id="def">Started</th><th id="def">Finished</th></tr></thead>
                <tbody>
                  <?php
                    foreach($result6 as $row6){ ?>
                      <tr>
                        <td><?php if($row6->coa==''){ }else{ echo $row6->coa; ?>
                          &nbsp;&nbsp;<?php if ($_SESSION['urights']==7.1||$_SESSION['urights']==1): ?><a class="open-homeEvents" data-id="upcoa" href="" data-bs-toggle="modal" data-bs-target="#upcpd<?php echo $row->fid; ?>" id="uppco"><i class="fa fa-upload" aria-hidden="true"></i></a><?php endif; ?>
                          <?php } ?>
                        <td><?php echo $row6->cat; ?></td><td><?php echo $row6->stat; ?></td><td>
                        <?php echo date('YMd',$time = strtotime($row6->pcoisdat)); ?></td><td><?php echo date('YMd',$time = strtotime($row6->pcoexdat)); ?></td><td><?php echo $row6->pcof; ?> <?php echo $row6->pcom; ?> <?php echo $row6->pcol; ?></td><td><?php echo $row6->pconum; ?></td><td><?php echo $row6->pcoeml; ?></td><td><?php echo $row6->trnngctr; ?></td>
                        <td><?php if($row6->trnstdat=='0000-00-00'){}else{ echo date('YMd',$time = strtotime($row6->trnstdat));} ?></td><td><?php if($row6->trnstdat=='0000-00-00'){}else{ echo date('YMd',$time = strtotime($row6->trnfidat));} ?></td>
                        <td>
                          <!--multi attachment-->
                          <?php foreach($result4 as $row4){ if($row4->upterm=='upcoa'){
                            //show and link of attachment
                            if($_SESSION['urights']==7.1 && $row4->upterm=='upcoa'){ ?>
                              <a href="<?php echo base_url().'upglobal/upcpd/'.$row4->upcpdfil; ?>" rel="nofollow" target="_blank">
                                <?php echo ' *'.$row4->upcpdfil; ?>
                              </a>
                            <?php }else{ ?>
                              <!-- request to open -->
                              <a class="open-homeEvents" data-id="upre2op" href="" data-bs-toggle="modal" data-bs-target="#upre2op<?php echo $row4->upcpdid; ?>" id="upre2op">
                                <?php echo ' *'.$row4->upcpdfil; ?>
                              </a>

                              <!-- req2open coa -->
                              <div class="modal fade" id="upre2op<?php echo $row4->upcpdid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-md modal-dialog-centered">
                                  <div class="modal-content">
                                    <div class="modal-header" style="background-color:#f8a532;">
                                      <h5 class="modal-title" id="exampleModalLabel"><b>Request to Open</b></h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <form method="post" action="<?php echo site_url('Auth/reqcpd') ?>/<?php echo $row->fid; ?>" enctype="multipart/form-data">
                                        <div class="" hidden>
                                          userid:
                                          <input class="form-control" type="" name="userid" value="<?php echo $_SESSION['userid']; ?>">
                                          uname:
                                          <input class="form-control" type="" name="uname" value="<?php echo $_SESSION['uname']; ?>">
                                          fid:
                                          <input class="form-control" type="" name="fid" value="<?php echo $row->fid; ?>">
                                          firm:
                                          <input class="form-control" type="" name="firm" value="<?php echo $row->firm; ?>">
                                          cpdid:
                                          <input class="form-control" type="" name="upcpdid" value="<?php echo $row4->upcpdid; ?>">
                                          upterm:
                                          <input class="form-control" type="" name="term" value="<?php echo $row4->upterm; ?>">
                                        </div>
                                        <label for="">Attachment:</label>
                                        <div class="form-group" style="padding-bottom:8px;">
                                          <input class="form-control" type="" name="" value="<?php echo $row4->upcpdfil; ?>" disabled>
                                          <input class="form-control" type="" name="upcpdfil" value="<?php echo $row4->upcpdfil; ?>" hidden>
                                        </div>
                                        <label for="">Reason:</label>
                                        <div class="form-group">
                                          <textarea name="reason" rows="8" cols="55"></textarea>
                                        </div>
                                        <div class="form-group" hidden>
                                          <?php date_default_timezone_set('Asia/Manila'); $curdat = date('Y-m-d H:i:s'); ?>
                                          <input type="text" class="form-control" name='reqdat' value="<?php echo $curdat; ?>">
                                        </div>
                                        <div class="footer" style="text-align:right;">
                                          <button type="submit" class="btn btn-success" value='Upload' name='upload'>Submit</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- req2open coa -->

                            <?php } //2nd if ?>

                              <?php if($_SESSION['urights']==7.1||$_SESSION['urights']==1){ ?>
                              <a class="open-homeEvents" data-id="<?php echo $row4->upcpdfil; ?>" href="" data-bs-toggle="modal" data-bs-target="#uncpdcoa<?php echo $row4->upcpdid; ?>" style="color:orange;"><i class="fa fa-times-circle" aria-hidden="true"></i></a>

                            <!-- unlink pco -->
                            <div class="modal fade" id="uncpdcoa<?php echo $row4->upcpdid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-md modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header" style="background-color:#DF362D;">
                                    <h5 class="modal-title" id="exampleModalLabel"><b>Remove PCO Uploaded File</b></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form method="post" action="<?php echo site_url('Auth/delone') ?>/<?php echo $row->fid; ?>/<?php echo $row4->upcpdid; ?>">
                                      <div class="spechide">
                                        <input type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
                                        <input type="text" class="form-control" name="upterm" value="upcoa" required>
                                      </div>
                                      <div class="form-group" style="margin-top:-45px;">
                                        <input class="form-control" type="" name="" id="eventId"/ disabled>
                                        <input class="form-control" type="" name="varOne" id="eventId"/ hidden>
                                      </div>
                                      <div class="" hidden>
                                        <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
                                      </div>
                                     <div class="footer" style="text-align:right;">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- unlink pco -->

                        <?php } ?>

                        <!-- query for waiting & checkmark -->
                        <?php
                          $foi0=0; $foi1=0; $foi2=2;
                          foreach($result7 as $row7){
                            switch (true) {
                            // waiting
                            case ($row7->userid==$_SESSION['userid'] && $row7->reqsta==0 && $row7->term=='upcoa'):
                              $foi0++;
                              if($foi0>=0){ ?>
                                <div class="spinner-border text-danger" role="status" style="width:1rem;height:1rem;">
                                  <span class="visually-hidden">Loading...</span>
                                </div>
                              <?php }else{ }
                                break;
                            // <!-- waiting -->
                            // <!-- approved -->
                            case ($row7->userid==$_SESSION['userid'] && $row7->reqsta==1 && $row7->term=='upcoa' && $row7->upcpdfil==$row4->upcpdfil):
                              $foi1++;
                              if($foi1>=1){ ?>
                                <a href="<?php echo base_url().'upglobal/upcpd/'.$row4->upcpdfil; ?>" rel="nofollow" target="_blank"><i class="bi bi-eye-fill"></i></a>
                              <?php }else{ }
                                break;
                                // <!-- approved -->
                            case ($row7->userid==$_SESSION['userid'] && $row7->reqsta==2 && $row7->term=='upcoa'):
                              $foi2++;
                              break;
                            default:
                              // code...
                              break;
                            }//switch
                          }//foreach 7 ?>

                          <?php }// foreach4 ?>
                        <?php } //ifelse eccn ?>
                        </td>
                        <?php if ($_SESSION['urights']==7.1||$_SESSION['urights']==1): ?><th><a class="open-homeEvents" data-id="edpco" href="" data-bs-toggle="modal" data-bs-target="#edpco<?php echo $row6->pcocnt; ?>"><i class="fa fa-edit" aria-hidden="true" style="color:orange;"></i></a>
                          <a class="open-homeEvents" data-id="edpco" href="" data-bs-toggle="modal" data-bs-target="#delpco<?php echo $row6->pcocnt; ?>"><i class="fa fa-trash" aria-hidden="true"  style="color:red;"></i></a></th><?php endif; ?>
                      </tr>

                      <!-- pco del records -->
                      <div class="modal fade" id="delpco<?php echo $row6->pcocnt; ?>">" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color:#DF362D;">
                              <h5 class="modal-title" id="exampleModalLabel"><b>Deactivate PCO</b></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="<?php echo site_url('Auth/delpco') ?>/<?php echo $row->fid; ?>/<?php echo $row6->pcocnt; ?>" enctype="multipart/form-data">
                                <div class="mb-3" hidden>
                                  <input type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
                                  <input type="text" class="form-control" name="pcocnt" value="<?php echo $row6->pcocnt; ?>" required>
                                </div>
                                <div class="col-md-12">
                                  <div class="row" style="padding-bottom:8px;">
                                    <div class="col-md-12">
                                      <input type="text" class="form-control" name="former" value="<?php echo $row6->pcof; ?> <?php echo $row6->pcom; ?> <?php echo $row6->pcol; ?>" required>
                                    </div>
                                  </div>
                                </div>
                                <div class="footer" style="text-align:right;">
                                   <button type="submit" class="btn btn-danger">Submit</button>
                                 </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- pco del records -->

                      <!-- pco edit records -->
                      <div class="modal fade" id="edpco<?php echo $row6->pcocnt; ?>">" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color:#f8a532;">
                              <h5 class="modal-title" id="exampleModalLabel"><b>Edit PCO Record</b></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="<?php echo site_url('Auth/edpco') ?>/<?php echo $row->fid; ?>/<?php echo $row6->pcocnt; ?>" enctype="multipart/form-data">
                                <div class="mb-3" hidden>
                                  <input type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
                                  <input type="text" class="form-control" name="pcocnt" value="<?php echo $row6->pcocnt; ?>" required>
                                </div>
                                <div class="col-md-12">
                                  <div class="row" style="padding-bottom:8px;">
                                      <div class="col-md-6">
                                        <input type="text" class="form-control" name="coa" value="<?php echo $row6->coa; ?>" required>
                                      </div>
                                      <div class="col-md-3">
                                        <select class="form-select" name="cat" required>
                                          <?php if($row6->cat=='A'){ echo '<option value="A">A</option> <option value="B">B</option>'; }else{
                                              echo '<option value="B">B</option> </option><option value="A">A</option>';} ?>
                                        </select>
                                      </div>
                                      <div class="col-md-3">
                                        <select class="form-select" name="stat" required>
                                          <?php if($row6->stat=='New'){ echo '<option value="New">New</option> <option value="Renew">Renew</option>'; }else{
                                              echo '<option value="Renew">Renew</option> </option><option value="New">New</option>';} ?>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="row" style="padding-bottom:8px;">
                                      <div class="col-md-6">
                                        <label for="">Date Issued</label>
                                        <input type="date" class="form-control" name="pcoisdat" value="<?php echo $row6->pcoisdat; ?>" required>
                                      </div>
                                      <div class="col-md-6">
                                        <label for="">Date Expiry</label>
                                        <input type="date" class="form-control" name="pcoexdat" value="<?php echo $row6->pcoexdat; ?>" required>
                                      </div>
                                  </div>
                                  <div class="row" style="padding-bottom:8px;">
                                      <div class="col-md-4">
                                        <input type="text" class="form-control" name="pcof" value="<?php echo $row6->pcof; ?>" required>
                                      </div>
                                      <div class="col-md-4">
                                        <input type="text" class="form-control" name="pcom" value="<?php echo $row6->pcom; ?>" >
                                      </div>
                                      <div class="col-md-4">
                                        <input type="text" class="form-control" name="pcol" value="<?php echo $row6->pcol; ?>" required>
                                      </div>
                                  </div>
                                  <div class="row" style="padding-bottom:8px;">
                                      <div class="col-md-4">
                                        <input type="text" class="form-control" name="pconum" value="<?php echo $row6->pconum; ?>" required>
                                      </div>
                                      <div class="col-md-4">
                                        <input type="text" class="form-control" name="pcoeml" value="<?php echo $row6->pcoeml; ?>" required>
                                      </div>
                                      <div class="col-md-4">
                                        <input type="text" class="form-control" name="trnngctr" value="<?php echo $row6->trnngctr; ?>" required>
                                      </div>
                                  </div>
                                  <div class="row" style="padding-bottom:20px;">
                                      <div class="col-md-6">
                                        <label for="">Training Started</label>
                                        <input type="date" class="form-control" name="trnstdat" value="<?php echo $row6->trnstdat; ?>" >
                                      </div>
                                      <div class="col-md-6">
                                        <label for="">Training Finished</label>
                                        <input type="date" class="form-control" name="trnfidat" value="<?php echo $row6->trnfidat; ?>" >
                                      </div>
                                  </div>
                                </div>
                                <div class="footer" style="text-align:right;">
                                   <button type="submit" class="btn btn-warning">Submit</button>
                                 </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- pco edit records -->

                  <?php  } ?>
                </tbody>
                </table>
            </div>
          </div>

        </div>
      <!-- </div> -->
    </div>
    <!-- **************************add pco********************************* -->
    <!-- pco add records -->
    <div class="modal fade" id="addpco" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header" style="background-color:#2E9aC0;">
            <h5 class="modal-title" id="exampleModalLabel"><b>Add PCO Record</b></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post" action="<?php echo site_url('Auth/addpco') ?>/<?php echo $row->fid; ?>" enctype="multipart/form-data">
              <div class="mb-3" hidden>
                <input type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
              </div>
              <div class="col-md-12">
                <div class="row" style="padding-bottom:8px;">
                    <div class="col-md-6">
                      <input type="text" class="form-control" name="coa" value="" placeholder="COA Number" required>
                    </div>
                    <div class="col-md-3">
                      <select class="form-select" name="cat" required>
                        <option value="">Select Category</option><option value="A">A</option><option value="B">B</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <select class="form-select" name="stat" required>
                        <option value="">Select Status</option><option value="New">New</option><option value="Renew">Renew</option>
                      </select>
                    </div>
                </div>
                <div class="row" style="padding-bottom:8px;">
                    <div class="col-md-6">
                      <label for="">Date Issued</label>
                      <input type="date" class="form-control" name="pcoisdat" value="" required>
                    </div>
                    <div class="col-md-6">
                      <label for="">Date Expiry</label>
                      <input type="date" class="form-control" name="pcoexdat" value="" required>
                    </div>
                </div>
                <div class="row" style="padding-bottom:8px;">
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="pcof" value="" placeholder="First Name" required>
                    </div>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="pcom" value="" placeholder="Middle Name" >
                    </div>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="pcol" value="" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="row" style="padding-bottom:8px;">
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="pconum" value="" placeholder="Contact Number" required>
                    </div>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="pcoeml" value="" placeholder="Email" required>
                    </div>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="trnngctr" value="" placeholder="Training Center" required>
                    </div>
                </div>
                <div class="row" style="padding-bottom:20px;">
                    <div class="col-md-6">
                      <label for="">Training Started</label>
                      <input type="date" class="form-control" name="trnstdat" value="" placeholder="" >
                    </div>
                    <div class="col-md-6">
                      <label for="">Training Finished</label>
                      <input type="date" class="form-control" name="trnfidat" value="" placeholder="" >
                    </div>
                </div>
              </div>
              <div class="footer" style="text-align:right;">
                 <button type="submit" class="btn btn-primary">Submit</button>
               </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- pco add records -->

    <div class="col-xl-12">
      <!-- <div class="card"> -->
        <div class="row">

          <!--cpd details-->
          <div class="card-body pt-3" style="margin-top:-2%;">
            <div class="" id="profile-overview" style="padding-bottom:1px;">
              <?php foreach($result7 as $row7){ $upcpdid=$row7->upcpdid; } ?>
              <h5 class="card-title" style="font-weight:bold;margin-bottom:-.3%;">CPD Details</h5>
              <table class="table table-striped table-hover table-bordered border-success tab1">
                <thead><tr><th width="32%"><a class="open-homeEvents" data-id="eccn" <?php if ($_SESSION['urights']==7||$_SESSION['urights']==7.1||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edeccn" id="niko">ECC/CNC</a></th>
                  <th width="16%"><a class="open-homeEvents" data-id="ecisdat" <?php if ($_SESSION['urights']==7||$_SESSION['urights']==7.1||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edecisdat" id="niko">Date Issued</a></th>
                  <th width="25%"><a class="open-homeEvents" data-id="pto" <?php if ($_SESSION['urights']==7||$_SESSION['urights']==7.1||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edpto" id="niko">PTO</a></th>
                  <th width="13%"><a class="open-homeEvents" data-id="ptoisdat" <?php if ($_SESSION['urights']==7||$_SESSION['urights']==7.1||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edptoisdat" id="niko">Date Issued</a></th>
                  <th><a class="open-homeEvents" data-id="ptoval" <?php if ($_SESSION['urights']==7||$_SESSION['urights']==7.1||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edptoval" id="niko">Validity</a></th>
                </tr></thead>
                <tbody><tr>
                  <td id="<?php echo $upcpdid; ?>"><?php if($row->eccn==''){ }else{ echo $row->eccn; ?>
                    <?php if ($_SESSION['urights']==7||$_SESSION['urights']==7.1||$_SESSION['urights']==1): ?><a class="open-homeEvents" data-id="upeccn" href="" data-bs-toggle="modal" data-bs-target="#upcpd<?php echo $row->fid; ?>" id="upeccn"><i class="fa fa-upload" aria-hidden="true"></i></a><?php endif; ?>

                    <?php } ?>
                    <!--multi attachment-->
                    <?php foreach($result4 as $row4){ if($row4->upterm=='upeccn'){
                      //show and link of attachment
                      if($_SESSION['urights']==7||$_SESSION['urights']==7.1 && $row4->upterm=='upeccn'){ ?>
                        <a href="<?php echo base_url().'upglobal/upcpd/'.$row4->upcpdfil; ?>" rel="nofollow" target="_blank">
                          <?php echo ' *'.$row4->upcpdfil; ?>
                        </a>
                      <?php }else{ ?>
                        <!-- request to open -->
                        <a class="open-homeEvents" data-id="upre2op" href="" data-bs-toggle="modal" data-bs-target="#upre2op<?php echo $row4->upcpdid; ?>" id="upre2op">
                          <?php echo ' *'.$row4->upcpdfil; ?>
                        </a>

                        <!-- req2open ecc -->
                        <div class="modal fade" id="upre2op<?php echo $row4->upcpdid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-md modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header" style="background-color:#f8a532;">
                                <h5 class="modal-title" id="exampleModalLabel"><b>Request to Open</b></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form method="post" action="<?php echo site_url('Auth/reqcpd') ?>/<?php echo $row->fid; ?>" enctype="multipart/form-data">
                                  <div class="" hidden>
                                    userid:
                                    <input class="form-control" type="" name="userid" value="<?php echo $_SESSION['userid']; ?>">
                                    uname:
                                    <input class="form-control" type="" name="uname" value="<?php echo $_SESSION['uname']; ?>">
                                    fid:
                                    <input class="form-control" type="" name="fid" value="<?php echo $row->fid; ?>">
                                    firm:
                                    <input class="form-control" type="" name="firm" value="<?php echo $row->firm; ?>">
                                    cpdid:
                                    <input class="form-control" type="" name="upcpdid" value="<?php echo $row4->upcpdid; ?>">
                                    upterm:
                                    <input class="form-control" type="" name="term" value="<?php echo $row4->upterm; ?>">
                                  </div>
                                  <label for="">Attachment:</label>
                                  <div class="form-group" style="padding-bottom:8px;">
                                    <input class="form-control" type="" name="" value="<?php echo $row4->upcpdfil; ?>" disabled>
                                    <input class="form-control" type="" name="upcpdfil" value="<?php echo $row4->upcpdfil; ?>" hidden>
                                  </div>
                                  <label for="">Reason:</label>
                                  <div class="form-group">
                                    <textarea name="reason" rows="8" cols="55"></textarea>
                                  </div>
                                  <div class="form-group" hidden>
                                    <?php date_default_timezone_set('Asia/Manila'); $curdat = date('Y-m-d H:i:s'); ?>
                                    <input type="text" class="form-control" name='reqdat' value="<?php echo $curdat; ?>">
                                  </div>
                                  <div class="footer" style="text-align:right;">
                                    <button type="submit" class="btn btn-success" value='Upload' name='upload'>Submit</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- req2open ecc -->

                      <?php } //2nd if ?>

                      <?php if($_SESSION['urights']==7||$_SESSION['urights']==7.1||$_SESSION['urights']==1){ ?>
                      <a class="open-homeEvents" data-id="<?php echo $row4->upcpdfil; ?>" href="" data-bs-toggle="modal" data-bs-target="#uncpdeccn<?php echo $row4->upcpdid; ?>" style="color:orange;"><i class="fa fa-times-circle" aria-hidden="true"></i></a>

                    <!-- unlink eccn -->
                    <div class="modal fade" id="uncpdeccn<?php echo $row4->upcpdid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-md modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color:#DF362D;">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Remove ECC/CNC Uploaded File</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="<?php echo site_url('Auth/delone') ?>/<?php echo $row->fid; ?>/<?php echo $row4->upcpdid; ?>">
                              <div class="spechide">
                                <input type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
                                <input type="text" class="form-control" name="upterm" value="upeccn" required>
                              </div>
                              <div class="form-group" style="margin-top:-45px;">
                                <input class="form-control" type="" name="" id="eventId"/ disabled>
                                <input class="form-control" type="" name="varOne" id="eventId"/ hidden>
                              </div>
                              <div class="" hidden>
                                <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
                              </div>
                             <div class="footer" style="text-align:right;">
                                <button type="submit" class="btn btn-danger">Delete</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- unlink eccn -->

                    <?php } ?>

                    <!-- query for waiting & checkmark -->
                    <?php
                      $foi0=0; $foi1=0; $foi2=2;
                      foreach($result7 as $row7){
                        switch (true) {
                        // waiting
                        case ($row7->userid==$_SESSION['userid'] && $row7->reqsta==0 && $row7->term=='upeccn'):
                          $foi0++;
                          if($foi0>=0){ ?>
                            <div class="spinner-border text-danger" role="status" style="width:1rem;height:1rem;">
                              <span class="visually-hidden">Loading...</span>
                            </div>
                          <?php }else{ }
                            break;
                        // <!-- waiting -->
                        // <!-- approved -->
                        case ($row7->userid==$_SESSION['userid'] && $row7->reqsta==1 && $row7->term=='upeccn' && $row7->upcpdfil==$row4->upcpdfil):
                          $foi1++;
                          if($foi1>=1){ ?>
                            <a href="<?php echo base_url().'upglobal/upcpd/'.$row4->upcpdfil; ?>" rel="nofollow" target="_blank"> => <i class="bi bi-eye-fill"></i></a>
                          <?php }else{ }
                            break;
                            // <!-- approved -->
                        case ($row7->userid==$_SESSION['userid'] && $row7->reqsta==2 && $row7->term=='upeccn'):
                          $foi2++;
                          break;
                        default:
                          // code...
                          break;
                        }//switch
                      }//foreach 7 ?>

                    <?php }// foreach4 ?>
                  <?php } //ifelse eccn ?>
                  </td>

                  <td><?php if($row->ecisdat=="0000-00-00"||$row->ecisdat==NULL){ }else{ echo date('Y M d',$time = strtotime($row->ecisdat)); } ?></td>

                  <td id="<?php echo $upcpdid; ?>"><?php if($row->pto==''){ }else{ echo $row->pto; ?>
                    <?php if ($_SESSION['urights']==7||$_SESSION['urights']==7.1||$_SESSION['urights']==1): ?><a class="open-homeEvents" data-id="uppto" href="" data-bs-toggle="modal" data-bs-target="#upcpd<?php echo $row->fid; ?>" id="uppto"><i class="fa fa-upload" aria-hidden="true"></i></a><?php endif; ?>

                    <?php } ?>
                    <!--multi attachment-->
                    <?php foreach($result4 as $row4){ if($row4->upterm=='uppto'){
                      //show and link of attachment
                      if($_SESSION['urights']==7||$_SESSION['urights']==7.1 && $row4->upterm=='uppto'){ ?>
                        <a href="<?php echo base_url().'upglobal/upcpd/'.$row4->upcpdfil; ?>" rel="nofollow" target="_blank"><?php echo ' *'.$row4->upcpdfil; ?></a>

                      <?php }else{ ?>
                        <!-- request to open -->
                        <a class="open-homeEvents" data-id="upre2op" href="" data-bs-toggle="modal" data-bs-target="#upre2op<?php echo $row4->upcpdid; ?>" id="upre2op">
                          <?php echo ' *'.$row4->upcpdfil; ?>
                        </a>

                        <!-- req2open pto -->
                        <div class="modal fade" id="upre2op<?php echo $row4->upcpdid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-md modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header" style="background-color:#f8a532;">
                                <h5 class="modal-title" id="exampleModalLabel"><b>Request to Open</b></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form method="post" action="<?php echo site_url('Auth/reqcpd') ?>/<?php echo $row->fid; ?>" enctype="multipart/form-data">
                                  <div class="" hidden>
                                    userid:
                                    <input class="form-control" type="" name="userid" value="<?php echo $_SESSION['userid']; ?>">
                                    uname:
                                    <input class="form-control" type="" name="uname" value="<?php echo $_SESSION['uname']; ?>">
                                    fid:
                                    <input class="form-control" type="" name="fid" value="<?php echo $row->fid; ?>">
                                    firm:
                                    <input class="form-control" type="" name="firm" value="<?php echo $row->firm; ?>">
                                    cpdid:
                                    <input class="form-control" type="" name="upcpdid" value="<?php echo $row4->upcpdid; ?>">
                                    upterm:
                                    <input class="form-control" type="" name="term" value="<?php echo $row4->upterm; ?>">
                                  </div>
                                  <label for="">Attachment:</label>
                                  <div class="form-group" style="padding-bottom:8px;">
                                    <input class="form-control" type="" name="" value="<?php echo $row4->upcpdfil; ?>" disabled>
                                    <input class="form-control" type="" name="upcpdfil" value="<?php echo $row4->upcpdfil; ?>" hidden>
                                  </div>
                                  <label for="">Reason:</label>
                                  <div class="form-group">
                                    <textarea name="reason" rows="8" cols="55"></textarea>
                                  </div>
                                  <div class="form-group" hidden>
                                    <?php date_default_timezone_set('Asia/Manila'); $curdat = date('Y-m-d H:i:s'); ?>
                                    <input type="text" class="form-control" name='reqdat' value="<?php echo $curdat; ?>">
                                  </div>
                                  <div class="footer" style="text-align:right;">
                                    <button type="submit" class="btn btn-success" value='Upload' name='upload'>Submit</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- req2open pto -->

                      <?php } //2nd if ?>

                      <?php if($_SESSION['urights']==7||$_SESSION['urights']==7.1||$_SESSION['urights']==1){ ?>
                      <a class="open-homeEvents" data-id="<?php echo $row4->upcpdfil; ?>" href="" data-bs-toggle="modal" data-bs-target="#uncpdpto<?php echo $row4->upcpdid; ?>" style="color:orange;"><i class="fa fa-times-circle" aria-hidden="true"></i></a>

                    <!-- unlink pto -->
                    <div class="modal fade" id="uncpdpto<?php echo $row4->upcpdid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-md modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color:#DF362D;">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Remove PTO Uploaded File</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="<?php echo site_url('Auth/delone') ?>/<?php echo $row->fid; ?>/<?php echo $row4->upcpdid; ?>">
                              <div class="spechide">
                                <input type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
                                <input type="text" class="form-control" name="upterm" value="upeccn" required>
                              </div>
                              <div class="form-group" style="margin-top:-45px;">
                                <input class="form-control" type="" name="" id="eventId"/ disabled>
                                <input class="form-control" type="" name="varOne" id="eventId"/ hidden>
                              </div>
                              <div class="" hidden>
                                <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
                              </div>
                             <div class="footer" style="text-align:right;">
                                <button type="submit" class="btn btn-danger">Delete</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- unlink pto -->

                    <?php } ?>

                    <!-- query for waiting & checkmark -->
                    <?php
                      $foi0=0; $foi1=0; $foi2=2;
                      foreach($result7 as $row7){
                        switch (true) {
                        // waiting
                        case ($row7->userid==$_SESSION['userid'] && $row7->reqsta==0 && $row7->term=='uppto' && $row7->upcpdfil==$row4->upcpdfil):
                          $foi0++;
                          if($foi0>=1){ ?>
                            <div class="spinner-border text-danger" role="status" style="width:1rem;height:1rem;">
                              <span class="visually-hidden">Loading...</span>
                            </div>
                          <?php }else{ }
                            break;
                        // <!-- waiting -->
                        // <!-- approved -->
                        case ($row7->userid==$_SESSION['userid'] && $row7->reqsta==1 && $row7->term=='uppto' && $row7->upcpdfil==$row4->upcpdfil):
                          $foi1++;
                          if($foi1>=1){ ?>
                            <a href="<?php echo base_url().'upglobal/upcpd/'.$row4->upcpdfil; ?>" rel="nofollow" target="_blank"><i class="bi bi-eye-fill"></i></a>
                          <?php }else{ }
                            break;
                            // <!-- approved -->
                        case ($row7->userid==$_SESSION['userid'] && $row7->reqsta==2 && $row7->term=='uppto' && $row7->upcpdfil==$row4->upcpdfil):
                          $foi2++;
                          break;
                        default:
                          // code...
                          break;
                        }//switch
                      }//foreach 7 ?>

                    <?php }// foreach4 ?>
                  <?php } //ifelse eccn ?>
                </td>
                <td><?php echo $row->ptoisdat ?></td><td><?php echo $row->ptoval ?></td>
              </tr></tbody>
              </table>
              <!-- </div> -->

              <table class="table table-striped table-hover table-bordered border-success tab1" style="margin-top:-.3%;">
                <thead><tr><th class="th1" style="padding-bottom:18px;vertical-align:middle;"><a class="open-homeEvents" data-id="apse" <?php if ($_SESSION['urights']==7||$_SESSION['urights']==7.1||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edapse" id="niko">APSE/APSI</a></th><td><?php echo $row->apse; ?></td></tr></thead>
              </table>

              <table class="table table-striped table-hover table-bordered border-success tab1" style="margin-top:-.3%;">
                        <thead><tr><th class="th1"><a class="open-homeEvents" data-id="dp" <?php if ($_SESSION['urights']==7.1||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#eddp" id="divine">WWDP</a></th><th class="th4"><a class="open-homeEvents" data-id="dpisdat" <?php if ($_SESSION['urights']==7.1||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#eddpisdat" id="divine">Date Issued</a></th><th class="th5"><a class="open-homeEvents" data-id="dpval" <?php if ($_SESSION['urights']==7.1||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#eddpval" id="divine">Validity</a></th><th><a class="open-homeEvents" data-id="voldis" <?php if ($_SESSION['urights']==7.1||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edvoldis" id="divine">Volume Discharge</a></th></tr></thead>
                        <tbody><tr>

                          <td id="<?php echo $upcpdid; ?>"><?php if($row->dp==''){ }else{ echo $row->dp; ?>
                            <?php if ($_SESSION['urights']==7.1||$_SESSION['urights']==1): ?><a class="open-homeEvents" data-id="updp" href="" data-bs-toggle="modal" data-bs-target="#upcpd<?php echo $row->fid; ?>" id="updp"><i class="fa fa-upload" aria-hidden="true"></i></a><?php endif; ?>

                            <?php } ?>
                            <!--multi attachment-->
                            <?php foreach($result4 as $row4){ if($row4->upterm=='updp'){
                            //show and link of attachment
                            if($_SESSION['urights']==7.1 && $row4->upterm=='updp'){ ?>
                              <a href="<?php echo base_url().'upglobal/upcpd/'.$row4->upcpdfil; ?>" rel="nofollow" target="_blank">
                                <?php echo ' *'.$row4->upcpdfil; ?>
                              </a>
                          <?php }else{ ?>
                            <!-- request to open -->
                            <a class="open-homeEvents" data-id="upre2op" href="" data-bs-toggle="modal" data-bs-target="#upre2op<?php echo $row4->upcpdid; ?>" id="upre2op">
                              <?php echo ' *'.$row4->upcpdfil; ?>
                            </a>

                            <!-- req2open dp -->
                            <div class="modal fade" id="upre2op<?php echo $row4->upcpdid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-md modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header" style="background-color:#f8a532;">
                                    <h5 class="modal-title" id="exampleModalLabel"><b>Request to Open</b></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form method="post" action="<?php echo site_url('Auth/reqcpd') ?>/<?php echo $row->fid; ?>" enctype="multipart/form-data">
                                      <div class="" hidden>
                                        userid:
                                        <input class="form-control" type="" name="userid" value="<?php echo $_SESSION['userid']; ?>">
                                        uname:
                                        <input class="form-control" type="" name="uname" value="<?php echo $_SESSION['uname']; ?>">
                                        fid:
                                        <input class="form-control" type="" name="fid" value="<?php echo $row->fid; ?>">
                                        firm:
                                        <input class="form-control" type="" name="firm" value="<?php echo $row->firm; ?>">
                                        cpdid:
                                        <input class="form-control" type="" name="upcpdid" value="<?php echo $row4->upcpdid; ?>">
                                        upterm:
                                        <input class="form-control" type="" name="term" value="<?php echo $row4->upterm; ?>">
                                      </div>
                                      <label for="">Attachment:</label>
                                      <div class="form-group" style="padding-bottom:8px;">
                                        <input class="form-control" type="" name="" value="<?php echo $row4->upcpdfil; ?>" disabled>
                                        <input class="form-control" type="" name="upcpdfil" value="<?php echo $row4->upcpdfil; ?>" hidden>
                                      </div>
                                      <label for="">Reason:</label>
                                      <div class="form-group">
                                        <textarea name="reason" rows="8" cols="55"></textarea>
                                      </div>
                                      <div class="form-group" hidden>
                                        <?php date_default_timezone_set('Asia/Manila'); $curdat = date('Y-m-d H:i:s'); ?>
                                        <input type="text" class="form-control" name='reqdat' value="<?php echo $curdat; ?>">
                                      </div>
                                      <div class="footer" style="text-align:right;">
                                        <button type="submit" class="btn btn-success" value='Upload' name='upload'>Submit</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- req2open dp -->

                          <?php } //2nd if ?>

                          <?php if($_SESSION['urights']==7.1||$_SESSION['urights']==1){ ?>
                          <a class="open-homeEvents" data-id="<?php echo $row4->upcpdfil; ?>" href="" data-bs-toggle="modal" data-bs-target="#uncpddp<?php echo $row4->upcpdid; ?>" style="color:orange;"><i class="fa fa-times-circle" aria-hidden="true"></i></a>

                        <!-- unlink dp -->
                        <div class="modal fade" id="uncpddp<?php echo $row4->upcpdid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-md modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header" style="background-color:#DF362D;">
                                <h5 class="modal-title" id="exampleModalLabel"><b>Remove DP Uploaded File</b></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form method="post" action="<?php echo site_url('Auth/delone') ?>/<?php echo $row->fid; ?>/<?php echo $row4->upcpdid; ?>">
                                  <div class="spechide">
                                    <input type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
                                    <input type="text" class="form-control" name="upterm" value="upeccn" required>
                                  </div>
                                  <div class="form-group" style="margin-top:-45px;">
                                    <input class="form-control" type="" name="" id="eventId"/ disabled>
                                    <input class="form-control" type="" name="varOne" id="eventId"/ hidden>
                                  </div>
                                  <div class="" hidden>
                                    <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
                                  </div>
                                 <div class="footer" style="text-align:right;">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- unlink dp -->

                        <?php } ?>

                          <!-- query for waiting & checkmark -->
                          <?php
                            $foi0=0; $foi1=0; $foi2=2;
                            foreach($result7 as $row7){
                              switch (true) {
                              // waiting
                              case ($row7->userid==$_SESSION['userid'] && $row7->reqsta==0 && $row7->term=='updp' && $row7->upcpdfil==$row4->upcpdfil):
                                $foi0++;
                                if($foi0>=1){ ?>
                                  <div class="spinner-border text-danger" role="status" style="width:1rem;height:1rem;">
                                    <span class="visually-hidden">Loading...</span>
                                  </div>
                                <?php }else{ }
                                  break;
                              // <!-- waiting -->
                              // <!-- approved -->
                              case ($row7->userid==$_SESSION['userid'] && $row7->reqsta==1 && $row7->term=='updp' && $row7->upcpdfil==$row4->upcpdfil):
                                $foi1++;
                                if($foi1>=1){ ?>
                                  <a href="<?php echo base_url().'upglobal/upcpd/'.$row4->upcpdfil; ?>" rel="nofollow" target="_blank"><i class="bi bi-eye-fill"></i></a>
                                <?php }else{ }
                                  break;
                                  // <!-- approved -->
                              case ($row7->userid==$_SESSION['userid'] && $row7->reqsta==2 && $row7->term=='updp' && $row7->upcpdfil==$row4->upcpdfil):
                                $foi2++;
                                break;
                              default:
                                // code...
                                break;
                              }//switch
                            }//foreach 7 ?>

                          <?php }// foreach4 ?>
                        <?php } //ifelse dp ?>
                        </td>

                          <td><?php if($row->dpisdat=="0000-00-00"||$row->dpisdat==NULL){ }else{ echo date('Y M d',$time = strtotime($row->dpisdat)); } ?></td>
                          <td><?php if($row->dpval=="0000-00-00"||$row->dpval==NULL){ }else{ echo date('Y M d',$time = strtotime($row->dpval)); } ?></td>
                          <td><?php if($row->voldis=="0.000000"){ }else{ echo (float)$row->voldis; } ?></td>
                        </tr></tbody>
                      </table>

                      <!-- PTT -->
                      <table class="table table-striped table-hover table-bordered border-success tab1">
                        <thead><tr><th class="th1"><a class="open-homeEvents" data-id="hazid" <?php if ($_SESSION['urights']==7.2||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edhazid" id="christy">HazWaste ID</a></th><th class="th2"><a class="open-homeEvents" data-id="hazisdat" <?php if ($_SESSION['urights']==7.2||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edhazisdat" id="christy">Date Issued</a></th>
                          <th class="th2"><a class="open-homeEvents" data-id="haztyp" <?php if ($_SESSION['urights']==7.2||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edhaztyp" id="christy">Type of HazWaste</a></th>
                          <th><a class="open-homeEvents" data-id="ptt" <?php if ($_SESSION['urights']==7.2||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edptt" id="christy">PTT</a></th><th><a class="open-homeEvents" data-id="pttisdat" <?php if ($_SESSION['urights']==7.2||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edpttisdat" id="christy">Date Issued</a></th><th><a class="open-homeEvents" data-id="pttval" <?php if ($_SESSION['urights']==7.2||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#edpttval" id="christy">Validity</a></th>
                        </tr></thead>
                        <tbody><tr>
                          <td id="<?php echo $upcpdid; ?>"><?php if($row->hazid==''){ }else{ echo $row->hazid; ?>
                            <?php if ($_SESSION['urights']==7.2||$_SESSION['urights']==1): ?><a class="open-homeEvents" data-id="uphazid" href="" data-bs-toggle="modal" data-bs-target="#upcpd<?php echo $row->fid; ?>" id="uphazid"><i class="fa fa-upload" aria-hidden="true"></i></a><?php endif; ?>

                            <?php } ?>
                            <!--multi attachment-->
                            <?php foreach($result4 as $row4){ if($row4->upterm=='uphazid'){
                              //show and link of attachment
                              if($_SESSION['urights']==7.2 && $row4->upterm=='uphazid'){ ?>
                                <a href="<?php echo base_url().'upglobal/upcpd/'.$row4->upcpdfil; ?>" rel="nofollow" target="_blank">
                                  <?php echo ' *'.$row4->upcpdfil; ?>
                                </a>
                              <?php }else{ ?>
                                <!-- request to open -->
                                <a class="open-homeEvents" data-id="upre2op" href="" data-bs-toggle="modal" data-bs-target="#upre2op<?php echo $row4->upcpdid; ?>" id="upre2op">
                                  <?php echo ' *'.$row4->upcpdfil; ?>
                                </a>

                                <!-- req2open hazid -->
                                <div class="modal fade" id="upre2op<?php echo $row4->upcpdid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-md modal-dialog-centered">
                                    <div class="modal-content">
                                      <div class="modal-header" style="background-color:#f8a532;">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Request to Open</b></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <form method="post" action="<?php echo site_url('Auth/reqcpd') ?>/<?php echo $row->fid; ?>" enctype="multipart/form-data">
                                          <div class="" hidden>
                                            userid:
                                            <input class="form-control" type="" name="userid" value="<?php echo $_SESSION['userid']; ?>">
                                            uname:
                                            <input class="form-control" type="" name="uname" value="<?php echo $_SESSION['uname']; ?>">
                                            fid:
                                            <input class="form-control" type="" name="fid" value="<?php echo $row->fid; ?>">
                                            firm:
                                            <input class="form-control" type="" name="firm" value="<?php echo $row->firm; ?>">
                                            cpdid:
                                            <input class="form-control" type="" name="upcpdid" value="<?php echo $row4->upcpdid; ?>">
                                            upterm:
                                            <input class="form-control" type="" name="term" value="<?php echo $row4->upterm; ?>">
                                          </div>
                                          <label for="">Attachment:</label>
                                          <div class="form-group" style="padding-bottom:8px;">
                                            <input class="form-control" type="" name="" value="<?php echo $row4->upcpdfil; ?>" disabled>
                                            <input class="form-control" type="" name="upcpdfil" value="<?php echo $row4->upcpdfil; ?>" hidden>
                                          </div>
                                          <label for="">Reason:</label>
                                          <div class="form-group">
                                            <textarea name="reason" rows="8" cols="55"></textarea>
                                          </div>
                                          <div class="form-group" hidden>
                                            <?php date_default_timezone_set('Asia/Manila'); $curdat = date('Y-m-d H:i:s'); ?>
                                            <input type="text" class="form-control" name='reqdat' value="<?php echo $curdat; ?>">
                                          </div>
                                          <div class="footer" style="text-align:right;">
                                            <button type="submit" class="btn btn-success" value='Upload' name='upload'>Submit</button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- req2open hazid -->

                              <?php } //2nd if ?>

                              <?php if($_SESSION['urights']==7.2){ ?>
                              <a class="open-homeEvents" data-id="<?php echo $row4->upcpdfil; ?>" href="" data-bs-toggle="modal" data-bs-target="#uncpdeccn<?php echo $row4->upcpdid; ?>" style="color:orange;"><i class="fa fa-times-circle" aria-hidden="true"></i></a>

                              <!-- unlink eccn -->
                              <div class="modal fade" id="uncpdeccn<?php echo $row4->upcpdid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-md modal-dialog-centered">
                                  <div class="modal-content">
                                    <div class="modal-header" style="background-color:#DF362D;">
                                      <h5 class="modal-title" id="exampleModalLabel"><b>Remove HazID Uploaded File</b></h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <form method="post" action="<?php echo site_url('Auth/delone') ?>/<?php echo $row->fid; ?>/<?php echo $row4->upcpdid; ?>">
                                        <div class="spechide">
                                          <input type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
                                          <input type="text" class="form-control" name="upterm" value="upeccn" required>
                                        </div>
                                        <div class="form-group" style="margin-top:-45px;">
                                          <input class="form-control" type="" name="" id="eventId"/ disabled>
                                          <input class="form-control" type="" name="varOne" id="eventId"/ hidden>
                                        </div>
                                        <div class="" hidden>
                                          <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
                                        </div>
                                       <div class="footer" style="text-align:right;">
                                          <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- unlink eccn -->

                              <?php } ?>

                              <!-- query for waiting & checkmark -->
                              <?php
                                $foi0=0; $foi1=0; $foi2=2;
                                foreach($result7 as $row7){
                                  switch (true) {
                                  // waiting
                                  case ($row7->userid==$_SESSION['userid'] && $row7->reqsta==0 && $row7->term=='uphazid'):
                                    $foi0++;
                                    if($foi0>=0){ ?>
                                      <div class="spinner-border text-danger" role="status" style="width:1rem;height:1rem;">
                                        <span class="visually-hidden">Loading...</span>
                                      </div>
                                    <?php }else{ }
                                      break;
                                  // <!-- waiting -->
                                  // <!-- approved -->
                                  case ($row7->userid==$_SESSION['userid'] && $row7->reqsta==1 && $row7->term=='uphazid' && $row7->upcpdfil==$row4->upcpdfil):
                                    $foi1++;
                                    if($foi1>=1){ ?>
                                      <a href="<?php echo base_url().'upglobal/upcpd/'.$row4->upcpdfil; ?>" rel="nofollow" target="_blank"><i class="bi bi-eye-fill"></i></a>
                                    <?php }else{ }
                                      break;
                                      // <!-- approved -->
                                  case ($row7->userid==$_SESSION['userid'] && $row7->reqsta==2 && $row7->term=='uphazid'):
                                    $foi2++;
                                    break;
                                  default:
                                    // code...
                                    break;
                                  }//switch
                                }//foreach 7 ?>

                              <?php }// foreach4 ?>
                            <?php } //ifelse eccn ?>

                          </td>

                          <td><?php if($row->hazisdat=="0000-00-00"||$row->hazisdat==NULL){ }else{ echo date('Y M d',$time = strtotime($row->hazisdat)); } ?></td>
                          <td><?php echo $row->haztyp; ?></td>
                          <td><?php if($row->ptt==''){ }else{ echo $row->ptt; ?>
                            <?php if ($_SESSION['urights']==7.2||$_SESSION['urights']==1): ?><a class="open-homeEvents" data-id="upptt" href="" data-bs-toggle="modal" data-bs-target="#upcpd<?php echo $row->fid; ?>" id="upptt"><i class="fa fa-upload" aria-hidden="true"></i></a><?php endif; ?>

                            <?php } ?>
                            <!--multi attachment-->
                            <?php foreach($result4 as $row4){ if($row4->upterm=='upptt'){
                              //show and link of attachment
                              if($_SESSION['urights']==7.2 && $row4->upterm=='upptt'){ ?>
                                <a href="<?php echo base_url().'upglobal/upcpd/'.$row4->upcpdfil; ?>" rel="nofollow" target="_blank">
                                  <?php echo ' *'.$row4->upcpdfil; ?>
                                </a>
                              <?php }else{ ?>
                                <!-- request to open -->
                                <a class="open-homeEvents" data-id="upre2op" href="" data-bs-toggle="modal" data-bs-target="#upre2op<?php echo $row4->upcpdid; ?>" id="upre2op">
                                  <?php echo ' *'.$row4->upcpdfil; ?>
                                </a>

                                <!-- req2open ptt -->
                                <div class="modal fade" id="upre2op<?php echo $row4->upcpdid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-md modal-dialog-centered">
                                    <div class="modal-content">
                                      <div class="modal-header" style="background-color:#f8a532;">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Request to Open</b></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <form method="post" action="<?php echo site_url('Auth/reqcpd') ?>/<?php echo $row->fid; ?>" enctype="multipart/form-data">
                                          <div class="" hidden>
                                            userid:
                                            <input class="form-control" type="" name="userid" value="<?php echo $_SESSION['userid']; ?>">
                                            uname:
                                            <input class="form-control" type="" name="uname" value="<?php echo $_SESSION['uname']; ?>">
                                            fid:
                                            <input class="form-control" type="" name="fid" value="<?php echo $row->fid; ?>">
                                            firm:
                                            <input class="form-control" type="" name="firm" value="<?php echo $row->firm; ?>">
                                            cpdid:
                                            <input class="form-control" type="" name="upcpdid" value="<?php echo $row4->upcpdid; ?>">
                                            upterm:
                                            <input class="form-control" type="" name="term" value="<?php echo $row4->upterm; ?>">
                                          </div>
                                          <label for="">Attachment:</label>
                                          <div class="form-group" style="padding-bottom:8px;">
                                            <input class="form-control" type="" name="" value="<?php echo $row4->upcpdfil; ?>" disabled>
                                            <input class="form-control" type="" name="upcpdfil" value="<?php echo $row4->upcpdfil; ?>" hidden>
                                          </div>
                                          <label for="">Reason:</label>
                                          <div class="form-group">
                                            <textarea name="reason" rows="8" cols="55"></textarea>
                                          </div>
                                          <div class="form-group" hidden>
                                            <?php date_default_timezone_set('Asia/Manila'); $curdat = date('Y-m-d H:i:s'); ?>
                                            <input type="text" class="form-control" name='reqdat' value="<?php echo $curdat; ?>">
                                          </div>
                                          <div class="footer" style="text-align:right;">
                                            <button type="submit" class="btn btn-success" value='Upload' name='upload'>Submit</button>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- req2open ptt -->

                              <?php } //2nd if ?>

                              <?php if($_SESSION['urights']==7.2){ ?>
                              <a class="open-homeEvents" data-id="<?php echo $row4->upcpdfil; ?>" href="" data-bs-toggle="modal" data-bs-target="#uncpdeccn<?php echo $row4->upcpdid; ?>" style="color:orange;"><i class="fa fa-times-circle" aria-hidden="true"></i></a>

                              <!-- unlink ptt -->
                              <div class="modal fade" id="uncpdeccn<?php echo $row4->upcpdid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-md modal-dialog-centered">
                                  <div class="modal-content">
                                    <div class="modal-header" style="background-color:#DF362D;">
                                      <h5 class="modal-title" id="exampleModalLabel"><b>Remove PTT Uploaded File</b></h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <form method="post" action="<?php echo site_url('Auth/delone') ?>/<?php echo $row->fid; ?>/<?php echo $row4->upcpdid; ?>">
                                        <div class="spechide">
                                          <input type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
                                          <input type="text" class="form-control" name="upterm" value="upeccn" required>
                                        </div>
                                        <div class="form-group" style="margin-top:-45px;">
                                          <input class="form-control" type="" name="" id="eventId"/ disabled>
                                          <input class="form-control" type="" name="varOne" id="eventId"/ hidden>
                                        </div>
                                        <div class="" hidden>
                                          <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
                                        </div>
                                       <div class="footer" style="text-align:right;">
                                          <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- unlink ptt -->

                              <?php } ?>

                              <!-- query for waiting & checkmark -->
                              <?php
                                $foi0=0; $foi1=0; $foi2=2;
                                foreach($result7 as $row7){
                                  switch (true) {
                                  // waiting
                                  case ($row7->userid==$_SESSION['userid'] && $row7->reqsta==0 && $row7->term=='upptt'):
                                    $foi0++;
                                    if($foi0>=0){ ?>
                                      <div class="spinner-border text-danger" role="status" style="width:1rem;height:1rem;">
                                        <span class="visually-hidden">Loading...</span>
                                      </div>
                                    <?php }else{ }
                                      break;
                                  // <!-- waiting -->
                                  // <!-- approved -->
                                  case ($row7->userid==$_SESSION['userid'] && $row7->reqsta==1 && $row7->term=='upptt' && $row7->upcpdfil==$row4->upcpdfil):
                                    $foi1++;
                                    if($foi1>=1){ ?>
                                      <a href="<?php echo base_url().'upglobal/upcpd/'.$row4->upcpdfil; ?>" rel="nofollow" target="_blank"><i class="bi bi-eye-fill"></i></a>
                                    <?php }else{ }
                                      break;
                                      // <!-- approved -->
                                  case ($row7->userid==$_SESSION['userid'] && $row7->reqsta==2 && $row7->term=='upptt'):
                                    $foi2++;
                                    break;
                                  default:
                                    // code...
                                    break;
                                  }//switch
                                }//foreach 7 ?>

                              <?php }// foreach4 ?>
                            <?php } //ifelse eccn ?>

                            </td>

                            <td><?php if($row->pttisdat=="0000-00-00"||$row->pttisdat==NULL){ }else{ echo date('Y M d',$time = strtotime($row->pttisdat)); } ?></td><td><?php if($row->pttval=="0000-00-00"||$row->pttval==NULL){ }else{ echo date('Y M d',$time = strtotime($row->pttval)); } ?></td>

                          </tr></tbody>
                      </table>
                      <!-- </div> -->

            </div>
            <!--cpd details-->

          </div><!--card-body pt-3-->

        </div>
      <!-- </div> -->
    </div>

      <!-- cpd upload-->
      <div class="modal fade" id="upcpd<?php echo $row->fid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#f8a532;">
              <h5 class="modal-title" id="exampleModalLabel"><b>CPD Upload</b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="<?php echo site_url('Auth/upcpd') ?>/<?php echo $row->fid; ?>" enctype="multipart/form-data">
                <div class="form-group" hidden>
                  <input class="form-control" type="text" name="userid" value="<?php echo $_SESSION['userid']; ?>" required>
                  <input class="form-control" type="text" name="fid" value="<?php echo $row->fid; ?>" required>
                  <input class="form-control" type="" name="varOne" id="eventcpd"/>
                </div>
                <div class="varTwo" style="padding-top:12px;">
                  <input type="file" class="form-control" name='files[]' multiple >
                </div>
                <div class="form-group" hidden>
                  <?php date_default_timezone_set('Asia/Manila'); $curdat = date('dMY H:i:s'); ?>
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

    </div><!--card-body pt-3-->

      <hr style="color:#31352E;height:3px;margin-top:-1px;">

    </div>

      <!--emed details-->
      <div class="card-body pt-3" style="margin-top:-1%;">
        <div class="row" style="margin-top:-10px;">
          <div class="col-md-4">
            <h5 class="card-title" style="font-weight:bold;margin-bottom:-1%;"><a class="open-homeEvents" <?php if ($_SESSION['urights']==8||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#addErec" id="karl">EMED Details</a></h5>
          </div>
        </div><!--emed header-->

        <div class="row" style="padding-left:11px;padding-right:11px;">
          <table class="table table-striped table-hover table-bordered border-success">
            <thead style="text-align:center;vertical-align:middle;">
              <tr>
                <th rowspan="2">Type of Wastewater</th><th colspan="3">Discharge Permit</th><th colspan="6">Type of Treatment</th>
              </tr>
              <tr>
                <th>DP No.</th><th>Date Issued</th><th>Validity</th><th>Primary</th><th>Capacity</th><th>Secondary</th><th>Capacity</th><th>Tertiary</th><th>Capacity</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Type 1</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="row" style="padding-left:11px;padding-right:11px;">
          <table class="table table-striped table-hover table-bordered border-success">
            <thead style="text-align:center;vertical-align:middle;">
              <tr>
                <th rowspan="2">Daily Water Consumption (m<sup>3</sup>)</th><th rowspan="2">Source of Water</th><th colspan="4">Effluent Analysis</th><th colspan="2">Outlet</th>
              </tr>
              <tr>
                <th>Passed</th>
                <th>Failed</th><th>NONE</th><th>Remarks</th><th>Outlet Description</th><th>Outlet Location</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Type 1</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="row" style="padding-left:11px;padding-right:11px;">
          <table class="table table-striped table-hover table-bordered border-success">
            <thead style="text-align:center;vertical-align:middle;">
              <tr>
                <th colspan="9">Fuel Burning Equipment</th><th colspan="3">Emission Test</th>
              </tr>
              <tr>
                <th>No. of Units</th><th>APSE</th><th>Capacity</th><th>Unit</th><th>Brand</th><th>Type of Fuel</th><th>Fuel Consumption (L/HR)</th><th>Mode of Opearation</th><th>Control Facility</th><th>Frequency Testing</th><th>Date of Latest Emmission Test</th><th>Total No. of Test from the Issuance of Permit</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>6</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="row" style="padding-left:11px;padding-right:11px;">
          <table class="table table-striped table-hover table-bordered border-success">
            <thead style="text-align:center;vertical-align:middle;">
              <tr>
                <th colspan="9">Non-Fuel Burning Equipment</th>
              </tr>
              <tr>
                <th>No. of Units</th><th>APSE</th><th>Capacity</th><th>Unit</th><th>Brand</th><th>Type of Fuel</th><th>Fuel Consumption (L/HR)</th><th>Mode of Opearation</th><th>Control Facility</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>6</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
              </tr>
            </tbody>
          </table>
        </div>

      <!-- </div> -->

        <!-- emed upload-->
        <div class="modal fade" id="upemed<?php echo $row->fid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header" style="background-color:#f8a532;">
                <h5 class="modal-title" id="exampleModalLabel"><b>EMED Upload</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method="post" action="<?php echo site_url('Auth/upemed') ?>/<?php echo $row->fid; ?>" enctype="multipart/form-data">
                  <div class="form-group" hidden>
                    <input class="form-control" type="text" name="fid" value="<?php echo $row->fid; ?>" required>
                    <input class="form-control" type="" name="varOne" id="eventcpd"/>
                  </div>
                  <div class="varTwo" style="padding-top:12px;">
                    <input type="file" class="form-control" name='files[]' multiple >
                  </div>
                  <div class="form-group" hidden>
                    <?php date_default_timezone_set('Asia/Manila'); $curdat = date('dMY H:i:s'); ?>
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
      </div><!--card-body pt-3-->

        <!--emed details-->

        <hr style="color:#31352E;height:4px;margin-top:-1px;">

        <!-- legal details -->
        <div class="card-body pt-3" style="padding-bottom:5%;margin-top:-1.5%;">
          <div class="row">
            <div class="col-md-2">
              <h5 class="card-title" style="font-weight:bold;"><a class="open-homeEvents" <?php if ($_SESSION['urights']==9||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#addLrec" style="color:#D7A449;">LEGAL Details</a></h5>
            </div>
          </div><!--legal header-->

          <div class="responsive" style="font-size:11px;">
              <table class="table table-striped table-hover table-bordered border-success" style="margin-bottom:-.1%;">
                <thead><tr><th></th><th colspan="8" style="text-align:center;border-left:solid 2px;">NOV</th>
                  <th colspan="5" style="text-align:center;border-left:solid 2px;">ORDER</th><th colspan="2" style="text-align:center;border-left:solid 2px;">RESOLUTION</th><th class="" rowspan="2" style="width:3%;">Action</th></tr>
                  <tr><th class="">#</th><th class="" style="border-left:solid 2px;width:7%;">Tracking Number</th><th class="" style="width:7%;">NOVs</th><th class="">Nature of Violation</th><th class="" style="width:6%;">Inspection Report Date</th>
                    <th class="" style="width:7%;">NOV Issue Date</th><th style="width:7%;">NOV Copy Received</th><th class="" style="width:6%;">NOV Position Paper</th><th class="" style="width:6%;">Commitment</th>
                  <th class="" style="border-left:solid 2px;width:7%;">Docket Number</th><th class="" style="width:6%;">Date of Issuance</th><th class="" style="width:6%;">Order Copy Received</th><th class="" style="width:6%;">Order Position Paper/MR</th><th class="" style="width:6%;">Remark/Status</th>
                  <th style="border-left:solid 2px;width:6%;">Resolution Approved Date</th><th class="" style="width:6%;">Resolution Received</th>
                </thead>
                <tbody>
                  <?php
                  $fcnt=0;
                  foreach($result as $row){ $fcnt++;?>
                    <tr><td>1<?php echo $fcnt; ?></td><td style="border-left:solid 2px;"><?php echo $row->track; ?></td><td><?php echo $row->airlgl.' '.$row->wtrlgl.' '.$row->hazlgl.' '.$row->pd15lgl.' '.$row->pdairlgl.' '.$row->pdwtrlgl.' '.$row->pdhazlgl; ?></td>

                      <!-- nature of violation -->
                      <td><?php echo $row->natvio; ?></td>
                      <!-- inspection report date -->
                      <td><?php if($row->datinsrep=="0000-00-00"){ }else{ echo date('YMd',$time = strtotime($row->datinsrep)); } ?></td>
                      <!-- nov issue date -->
                      <td><?php if($row->datissnov=='0000-00-00'){ }else{ echo date('YMd',$time = strtotime($row->datissnov)); ?>
                        <a class="open-homeEvents" data-id="updatissnov" <?php if ($_SESSION['urights']==9||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#uplgl<?php echo $row->cntlegal; ?>" id="updatissnov"><i class="fa fa-upload" aria-hidden="true"></i></a>
                        <?php } ?>
                        <!--multi attachment-->
                        <?php foreach($result3 as $row2){ if($row2->upterm=='updatissnov' && $row->cntlegal==$row2->cntlegal){
                            ?><a href="<?php echo base_url().'upglobal/uplgl/'.$row2->uplglfil; ?>" rel="nofollow" target="_blank"><?php echo ' *'.$row2->uplglfil; ?></a>

                              <?php if($_SESSION['urights']==9){ ?>
                              <a class="open-homeEvents" data-id="<?php echo $row2->uplglfil; ?>" href="" data-bs-toggle="modal" data-bs-target="#unlgl<?php echo $row2->uplegid; ?>" style="color:orange;"><i class="fa fa-times-circle" aria-hidden="true"></i></a>

                            <!-- unlink datissnov -->
                            <div class="modal fade" id="unlgl<?php echo $row2->uplegid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-md modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header" style="background-color:#DF362D;">
                                    <h5 class="modal-title" id="exampleModalLabel"><b>Remove NOV Issue Date Uploaded File</b></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form method="post" action="<?php echo site_url('Auth/deleg') ?>/<?php echo $row->fid; ?>/<?php echo $row2->uplegid; ?>">
                                      <div class="spechide">
                                        <input type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
                                        <input type="text" class="form-control" name="upterm" value="upeccn" required>
                                      </div>
                                      <div class="form-group" style="margin-top:-45px;">
                                        <input class="form-control" type="" name="" id="eventId"/ disabled>
                                        <input class="form-control" type="" name="varOne" id="eventId"/ hidden>
                                      </div>
                                     <div class="footer" style="text-align:right;">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- unlink datissnov -->

                        <?php  }else{} ?> <?php }else{} }?>
                      </td>

                      <!-- nov copy Received -->
                      <td><?php if($row->datrecnov=='0000-00-00'){ }else{ echo date('YMd',$time = strtotime($row->datrecnov)); ?>
                        <a class="open-homeEvents" data-id="updatrecnov" <?php if ($_SESSION['urights']==9||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#uplgl<?php echo $row->cntlegal; ?>" id="updatrecnov"><i class="fa fa-upload" aria-hidden="true"></i></a>
                        <?php } ?>
                        <!--multi attachment-->
                        <?php foreach($result3 as $row2){ if($row2->upterm=='updatrecnov' && $row->cntlegal==$row2->cntlegal){
                            ?><a href="<?php echo base_url().'upglobal/uplgl/'.$row2->uplglfil; ?>" rel="nofollow" target="_blank"><?php echo '<br/>*'.$row2->uplglfil; ?></a>

                            <?php if($_SESSION['urights']==9){ ?>
                            <a class="open-homeEvents" data-id="<?php echo $row2->uplglfil; ?>" href="" data-bs-toggle="modal" data-bs-target="#unlgl<?php echo $row2->uplegid; ?>" style="color:orange;"><i class="fa fa-times-circle" aria-hidden="true"></i></a>

                          <!-- unlink datrecnov -->
                          <div class="modal fade" id="unlgl<?php echo $row2->uplegid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color:#DF362D;">
                                  <h5 class="modal-title" id="exampleModalLabel"><b>Remove NOV Copy Received Uploaded File</b></h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form method="post" action="<?php echo site_url('Auth/deleg') ?>/<?php echo $row->fid; ?>/<?php echo $row2->uplegid; ?>">
                                    <div class="spechide">
                                      <input type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
                                      <input type="text" class="form-control" name="upterm" value="upeccn" required>
                                    </div>
                                    <div class="form-group" style="margin-top:-45px;">
                                      <input class="form-control" type="" name="" id="eventId"/ disabled>
                                      <input class="form-control" type="" name="varOne" id="eventId"/ hidden>
                                    </div>
                                   <div class="footer" style="text-align:right;">
                                      <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- unlink datrecnov -->

                      <?php  }else{} ?> <?php }else{} }?>

                      </td>

                      <!-- nov position paper -->
                      <td><?php if($row->novpospap==''){ }else{ echo date('YMd',$time = strtotime($row->novpospap)); ?>
                        <a class="open-homeEvents" data-id="upnovpos" <?php if ($_SESSION['urights']==9||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#uplgl<?php echo $row->cntlegal; ?>" id="upnovpos"><i class="fa fa-upload" aria-hidden="true"></i></a>
                        <?php } ?>
                        <!--multi attachment-->
                        <?php foreach($result3 as $row2){ if($row2->upterm=='upnovpos' && $row->cntlegal==$row2->cntlegal){
                            ?><a href="<?php echo base_url().'upglobal/uplgl/'.$row2->uplglfil; ?>" rel="nofollow" target="_blank"><?php echo '<br/>*'.$row2->uplglfil; ?></a>

                            <?php if($_SESSION['urights']==9){ ?>
                            <a class="open-homeEvents" data-id="<?php echo $row2->uplglfil; ?>" href="" data-bs-toggle="modal" data-bs-target="#unlgl<?php echo $row2->uplegid; ?>" style="color:orange;"><i class="fa fa-times-circle" aria-hidden="true"></i></a>

                          <!-- unlink datrecnov -->
                          <div class="modal fade" id="unlgl<?php echo $row2->uplegid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color:#DF362D;">
                                  <h5 class="modal-title" id="exampleModalLabel"><b>Remove NOV Position Paper Uploaded File</b></h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form method="post" action="<?php echo site_url('Auth/deleg') ?>/<?php echo $row->fid; ?>/<?php echo $row2->uplegid; ?>">
                                    <div class="spechide">
                                      <input type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
                                      <input type="text" class="form-control" name="upterm" value="upeccn" required>
                                    </div>
                                    <div class="form-group" style="margin-top:-45px;">
                                      <input class="form-control" type="" name="" id="eventId"/ disabled>
                                      <input class="form-control" type="" name="varOne" id="eventId"/ hidden>
                                    </div>
                                   <div class="footer" style="text-align:right;">
                                      <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- unlink datrecnov -->

                      <?php  }else{} ?> <?php }else{} }?>

                      </td>

                      <!-- Commitment -->
                      <td><?php if($row->commit==''){ }else{ echo $row->commit; ?>
                        <a class="open-homeEvents" data-id="commit" <?php if ($_SESSION['urights']==9||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#uplgl<?php echo $row->cntlegal; ?>" id="upcommit"><i class="fa fa-upload" aria-hidden="true"></i></a>
                        <?php } ?>
                        <!--multi attachment-->
                        <?php foreach($result3 as $row2){ if($row2->upterm=='commit' && $row->cntlegal==$row2->cntlegal){
                            ?><a href="<?php echo base_url().'upglobal/uplgl/'.$row2->uplglfil; ?>" rel="nofollow" target="_blank"><?php echo '<br/>*'.$row2->uplglfil; ?></a>

                            <?php if($_SESSION['urights']==9){ ?>
                            <a class="open-homeEvents" data-id="<?php echo $row2->uplglfil; ?>" href="" data-bs-toggle="modal" data-bs-target="#unlgl<?php echo $row2->uplegid; ?>" style="color:orange;"><i class="fa fa-times-circle" aria-hidden="true"></i></a>

                          <!-- unlink datrecnov -->
                          <div class="modal fade" id="unlgl<?php echo $row2->uplegid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color:#DF362D;">
                                  <h5 class="modal-title" id="exampleModalLabel"><b>Remove Commitment Uploaded File</b></h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form method="post" action="<?php echo site_url('Auth/deleg') ?>/<?php echo $row->fid; ?>/<?php echo $row2->uplegid; ?>">
                                    <div class="spechide">
                                      <input type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
                                      <input type="text" class="form-control" name="upterm" value="upeccn" required>
                                    </div>
                                    <div class="form-group" style="margin-top:-45px;">
                                      <input class="form-control" type="" name="" id="eventId"/ disabled>
                                      <input class="form-control" type="" name="varOne" id="eventId"/ hidden>
                                    </div>
                                   <div class="footer" style="text-align:right;">
                                      <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- unlink datrecnov -->

                      <?php  }else{} ?> <?php }else{} }?>

                    </td>

                      <!-- docket number -->
                      <td style="border-left:solid 2px;"><?php echo $row->docket; ?></td>

                      <!-- date of issuance -->
                      <td><?php if($row->datissord==''){ }else{ echo date('YMd',$time = strtotime($row->datissord)); ?>
                        <a class="open-homeEvents" data-id="updatissord" <?php if ($_SESSION['urights']==9||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#uplgl<?php echo $row->cntlegal; ?>" id="updatissord"><i class="fa fa-upload" aria-hidden="true"></i></a>
                        <?php } ?>
                        <!--multi attachment-->
                        <?php foreach($result3 as $row2){ if($row2->upterm=='updatissord' && $row->cntlegal==$row2->cntlegal){
                            ?><a href="<?php echo base_url().'upglobal/uplgl/'.$row2->uplglfil; ?>" rel="nofollow" target="_blank"><?php echo '<br/>*'.$row2->uplglfil; ?></a>

                            <?php if($_SESSION['urights']==9){ ?>
                            <a class="open-homeEvents" data-id="<?php echo $row2->uplglfil; ?>" href="" data-bs-toggle="modal" data-bs-target="#unlgl<?php echo $row2->uplegid; ?>" style="color:orange;"><i class="fa fa-times-circle" aria-hidden="true"></i></a>

                          <!-- unlink datissord -->
                          <div class="modal fade" id="unlgl<?php echo $row2->uplegid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color:#DF362D;">
                                  <h5 class="modal-title" id="exampleModalLabel"><b>Remove Order Date of Issuance Uploaded File</b></h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form method="post" action="<?php echo site_url('Auth/deleg') ?>/<?php echo $row->fid; ?>/<?php echo $row2->uplegid; ?>">
                                    <div class="spechide">
                                      <input type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
                                      <input type="text" class="form-control" name="upterm" value="upeccn" required>
                                    </div>
                                    <div class="form-group" style="margin-top:-45px;">
                                      <input class="form-control" type="" name="" id="eventId"/ disabled>
                                    </div>
                                   <div class="footer" style="text-align:right;">
                                      <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>

                      <?php  }else{} ?> <?php }else{} }?>

                      </td>
                      <!-- copy order Received -->
                      <td><?php if($row->datrecord==''){ }else{ echo date('YMd',$time = strtotime($row->datrecord)); ?>
                        <a class="open-homeEvents" data-id="updatrecord" <?php if ($_SESSION['urights']==9||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#uplgl<?php echo $row->cntlegal; ?>" id="updatrecord"><i class="fa fa-upload" aria-hidden="true"></i></a>
                        <?php } ?>
                        <!--multi attachment-->
                        <?php foreach($result3 as $row2){ if($row2->upterm=='updatrecord' && $row->cntlegal==$row2->cntlegal){
                            ?><a href="<?php echo base_url().'upglobal/uplgl/'.$row2->uplglfil; ?>" rel="nofollow" target="_blank"><?php echo '<br/>*'.$row2->uplglfil; ?></a>

                            <?php if($_SESSION['urights']==9){ ?>
                            <a class="open-homeEvents" data-id="<?php echo $row2->uplglfil; ?>" href="" data-bs-toggle="modal" data-bs-target="#unlgl<?php echo $row2->uplegid; ?>" style="color:orange;"><i class="fa fa-times-circle" aria-hidden="true"></i></a>

                          <!-- unlink datrecord -->
                          <div class="modal fade" id="unlgl<?php echo $row2->uplegid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color:#DF362D;">
                                  <h5 class="modal-title" id="exampleModalLabel"><b>Remove Order Copy Received Uploaded File</b></h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form method="post" action="<?php echo site_url('Auth/deleg') ?>/<?php echo $row->fid; ?>/<?php echo $row2->uplegid; ?>">
                                    <div class="spechide">
                                      <input type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
                                      <input type="text" class="form-control" name="upterm" value="upeccn" required>
                                    </div>
                                    <div class="form-group" style="margin-top:-45px;">
                                      <input class="form-control" type="" name="" id="eventId"/ disabled>
                                      <input class="form-control" type="" name="varOne" id="eventId"/ hidden>
                                    </div>
                                   <div class="footer" style="text-align:right;">
                                      <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>

                      <?php  }else{} ?> <?php }else{} }?>

                      </td>

                      <!-- order position paper -->
                      <td><?php if($row->ordpospap==''){ }else{ echo  date('YMd',$time = strtotime($row->ordpospap)); ?>
                        <a class="open-homeEvents" data-id="upordpospap" <?php if($_SESSION['urights']==9): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#uplgl<?php echo $row->cntlegal; ?>" id="upordpospap"><i class="fa fa-upload" aria-hidden="true"></i></a>
                        <?php } ?>
                        <!--multi attachment-->
                        <?php foreach($result3 as $row2){ if($row2->upterm=='upordpospap' && $row->cntlegal==$row2->cntlegal){
                            ?><a href="<?php echo base_url().'upglobal/uplgl/'.$row2->uplglfil; ?>" rel="nofollow" target="_blank"><?php echo '<br/>*'.$row2->uplglfil; ?></a>

                            <?php if($_SESSION['urights']==9){ ?>
                            <a class="open-homeEvents" data-id="<?php echo $row2->uplglfil; ?>" href="" data-bs-toggle="modal" data-bs-target="#unlgl<?php echo $row2->uplegid; ?>" style="color:orange;"><i class="fa fa-times-circle" aria-hidden="true"></i></a>

                          <!-- unlink ordpospap -->
                          <div class="modal fade" id="unlgl<?php echo $row2->uplegid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color:#DF362D;">
                                  <h5 class="modal-title" id="exampleModalLabel"><b>Remove Order Position Paper Uploaded File</b></h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form method="post" action="<?php echo site_url('Auth/deleg') ?>/<?php echo $row->fid; ?>/<?php echo $row2->uplegid; ?>">
                                    <div class="spechide">
                                      <input type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
                                      <input type="text" class="form-control" name="upterm" value="upeccn" required>
                                    </div>
                                    <div class="form-group" style="margin-top:-45px;">
                                      <input class="form-control" type="" name="" id="eventId"/ disabled>
                                    </div>
                                   <div class="footer" style="text-align:right;">
                                      <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>

                      <?php  }else{} ?> <?php }else{} }?>

                      </td>

                      <!-- orderstatus -->
                      <td><?php if($row->ordsta==''){ }else{ echo $row->ordsta; ?>
                        <a class="open-homeEvents" data-id="upordsta" <?php if ($_SESSION['urights']==9||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#uplgl<?php echo $row->cntlegal; ?>" id="upordsta"><i class="fa fa-upload" aria-hidden="true"></i></a>
                        <?php } ?>
                        <!--multi attachment-->
                        <?php foreach($result3 as $row2){ if($row2->upterm=='upordsta' && $row->cntlegal==$row2->cntlegal){
                            ?><a href="<?php echo base_url().'upglobal/uplgl/'.$row2->uplglfil; ?>" rel="nofollow" target="_blank"><?php echo '<br/>*'.$row2->uplglfil; ?></a>

                            <?php if($_SESSION['urights']==9){ ?>
                            <a class="open-homeEvents" data-id="<?php echo $row2->uplglfil; ?>" href="" data-bs-toggle="modal" data-bs-target="#unlgl<?php echo $row2->uplegid; ?>" style="color:orange;"><i class="fa fa-times-circle" aria-hidden="true"></i></a>

                          <!-- unlink ordsta -->
                          <div class="modal fade" id="unlgl<?php echo $row2->uplegid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color:#DF362D;">
                                  <h5 class="modal-title" id="exampleModalLabel"><b>Remove Remarks/Status Uploaded File</b></h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form method="post" action="<?php echo site_url('Auth/deleg') ?>/<?php echo $row->fid; ?>/<?php echo $row2->uplegid; ?>">
                                    <div class="spechide">
                                      <input type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
                                      <input type="text" class="form-control" name="upterm" value="upeccn" required>
                                    </div>
                                    <div class="form-group" style="margin-top:-45px;">
                                      <input class="form-control" type="" name="" id="eventId"/ disabled>
                                    </div>
                                   <div class="footer" style="text-align:right;">
                                      <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>

                      <?php  }else{} ?> <?php }else{} }?>

                      </td>

                      <!-- resolution approved date -->
                      <td style="border-left:solid 2px;"><?php if($row->datappres==NULL||$row->datappres=='0000-00-00'){ }else{ echo date('YMd',$time = strtotime($row->datappres)); ?>
                        <a class="open-homeEvents" data-id="updatappres" <?php if ($_SESSION['urights']==9||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#uplgl<?php echo $row->cntlegal; ?>" id="updatappres"><i class="fa fa-upload" aria-hidden="true"></i></a>
                        <?php } ?>
                        <!--multi attachment-->
                        <?php foreach($result3 as $row2){ if($row2->upterm=='updatappres' && $row->cntlegal==$row2->cntlegal){
                            ?><a href="<?php echo base_url().'upglobal/uplgl/'.$row2->uplglfil; ?>" rel="nofollow" target="_blank"><?php echo '<br/>*'.$row2->uplglfil; ?></a>

                            <?php if($_SESSION['urights']==9){ ?>
                            <a class="open-homeEvents" data-id="<?php echo $row2->uplglfil; ?>" href="" data-bs-toggle="modal" data-bs-target="#unlgl<?php echo $row2->uplegid; ?>" style="color:orange;"><i class="fa fa-times-circle" aria-hidden="true"></i></a>

                          <!-- unlink datappres -->
                          <div class="modal fade" id="unlgl<?php echo $row2->uplegid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color:#DF362D;">
                                  <h5 class="modal-title" id="exampleModalLabel"><b>Remove Resolution Approved Uploaded File</b></h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form method="post" action="<?php echo site_url('Auth/deleg') ?>/<?php echo $row->fid; ?>/<?php echo $row2->uplegid; ?>">
                                    <div class="spechide">
                                      <input type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
                                      <input type="text" class="form-control" name="upterm" value="updatappres" required>
                                    </div>
                                    <div class="form-group" style="margin-top:-45px;">
                                      <input class="form-control" type="" name="" id="eventId"/ disabled>
                                      <input class="form-control" type="" name="varOne" id="eventId"/ hidden>
                                    </div>
                                    <!--div class="" hidden>
                                      <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
                                    </div-->
                                   <div class="footer" style="text-align:right;">
                                      <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- unlink eccn -->

                      <?php  }else{} ?> <?php }else{} }?>

                      </td>

                      resolution Received
                      <td><?php if($row->resrec==NULL||$row->resrec=='0000-00-00'){ }else{ echo $row->resrec; ?>
                        <a class="open-homeEvents" data-id="upresrec" <?php if ($_SESSION['urights']==9||$_SESSION['urights']==1): ?> href="" data-bs-toggle="modal" <?php endif; ?> data-bs-target="#uplgl<?php echo $row->cntlegal; ?>" id="upresrec"><i class="fa fa-upload" aria-hidden="true"></i></a>
                        <?php } ?>
                        <!--multi attachment-->
                        <?php foreach($result3 as $row2){ if($row2->upterm=='upresrec' && $row->cntlegal==$row2->cntlegal){
                            ?><a href="<?php echo base_url().'upglobal/uplgl/'.$row2->uplglfil; ?>" rel="nofollow" target="_blank"><?php echo '<br/>*'.$row2->uplglfil; ?></a>

                            <?php if($_SESSION['urights']==9){ ?>
                            <a class="open-homeEvents" data-id="<?php echo $row2->uplglfil; ?>" href="" data-bs-toggle="modal" data-bs-target="#unlgl<?php echo $row2->uplegid; ?>" style="color:orange;"><i class="fa fa-times-circle" aria-hidden="true"></i></a>

                          <!-- unlink upresrec -->
                          <div class="modal fade" id="unlgl<?php echo $row2->uplegid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color:#DF362D;">
                                  <h5 class="modal-title" id="exampleModalLabel"><b>Remove Resolution Received Uploaded File</b></h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form method="post" action="<?php echo site_url('Auth/deleg') ?>/<?php echo $row->fid; ?>/<?php echo $row2->uplegid; ?>">
                                    <div class="spechide">
                                      <input type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
                                      <input type="text" class="form-control" name="upterm" value="updatappres" required>
                                    </div>
                                    <div class="form-group" style="margin-top:-45px;">
                                      <input class="form-control" type="" name="" id="eventId"/ disabled>
                                      <input class="form-control" type="" name="varOne" id="eventId"/ hidden>
                                    </div>
                                    <!--div class="" hidden>
                                      <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
                                    </div-->
                                   <div class="footer" style="text-align:right;">
                                      <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>

                      <?php  }else{} ?> <?php }else{} }?>

                      </td>

                      <!-- action -->
                      <td>
                        <?php if($_SESSION['urights']=='9'){ ?>
                          <a href="" data-bs-toggle="modal" data-bs-target="#edlegal<?php echo $row->cntlegal; ?>" style="color:orange;"><i class="fa fa-edit" aria-hidden="true"></i></a>
                          <!--a href="" data-bs-toggle="modal" data-bs-target="#dellgl<?php echo $row->cntlegal; ?>" style="color:red;"><i class="fa fa-trash" aria-hidden="true"></i></a-->
                        <?php }else{} ?>
                      </td>

                      <!--edit legal-->
                      <div class="modal fade" id="edlegal<?php echo $row->cntlegal; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size:15px;">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color:#f8a532;">
                              <h5 class="modal-title" id="exampleModalLabel"><b>Edit Legal Information</b></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="<?php echo site_url('Auth/edlgl') ?>/<?php echo $row->cntlegal; ?>/<?php echo $row->fid; ?>">
                                <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
                                <input class="spechide" type="text" class="form-control" name="cntlegal" value="<?php echo $row->cntlegal; ?>" required>

                                <!--nov-->
                                <div class="col-md-12">
                                  <div class="row" style="margin-top:-33px;">
                                    <div class="col-md-4">
                                      <label for="track" class="form-label labmar">Tracking Number</label>
                                      <input type="text" class="form-control" name="track" value="<?php echo $row->track; ?>">
                                    </div>

                                    <div class="col-md-6" style="padding-top:10px;">
                                      <div class="">
                                        <input type="checkbox" name="airlgl" value="Air" id="sum_a_0" onclick="CountChck()"
                                        <?php if($row->airlgl==''){ }else{?> checked <?php } ?> > Air &nbsp;
                                        <input type="checkbox" name="wtrlgl" value="Water" id="sum_a_1" onclick="CountChck()"
                                        <?php if($row->wtrlgl==''){ }else{?> checked <?php } ?> > Water &nbsp;
                                        <input type="checkbox" name="hazlgl" value="HazWaste" id="sum_a_2" onclick="CountChck()"
                                        <?php if($row->hazlgl==''){ }else{?> checked <?php } ?> > HazWaste &nbsp;
                                        <input type="checkbox" name="exclgl" value="Exceedance" id="sum_a_3" onclick="CountChck()"
                                        <?php if($row->pd15lgl==''){ }else{?> checked <?php } ?> > Exceedance
                                      </div>
                                      <div class="" style="padding-top:10px;">
                                        <input type="checkbox" name="pd15lgl" value="PD1586" id="sum_a_4" onclick="CountChck()"
                                        <?php if($row->pd15lgl==''){ }else{?> checked <?php } ?> > PD1586 &nbsp;
                                        <input type="checkbox" name="pdairlgl" value="PDAir" id="sum_a_5" onclick="CountChck()"
                                        <?php if($row->pdairlgl==''){ }else{?> checked <?php } ?> > PDAir &nbsp;
                                        <input type="checkbox" name="pdwtrlgl" value="PDWater" id="sum_a_6" onclick="CountChck()"
                                        <?php if($row->pdwtrlgl==''){ }else{?> checked <?php } ?> > PDWater &nbsp;
                                        <input type="checkbox" name="pdhazlgl" value="PDHaz" id="sum_a_7" onclick="CountChck()"
                                        <?php if($row->pdhazlgl==''){ }else{?> checked <?php } ?> > PDHaz
                                      </div>
                                    </div>

                                    <div class="col-md-2" >
                                      <label for="" class="form-label labmar">Number of NOV</label>
                                      <input type="text" class="form-control" name="novnum" id="chckcount" value="" readonly="">
                                    </div>
                                    <script type="text/javascript">
                                      function CountChck() { var sum = 0; var gn, elem; for (i=0; i<8; i++) { gn = 'sum_a_'+i; elem = document.getElementById(gn); if (elem.checked == true) { sum += 1; } } document.getElementById('chckcount' ).value = sum.toFixed(0); } window.onload=UpdateCost
                                    </script>
                                  </div>
                                </div>

                                <div class="col-md-12" style="padding-bottom:15px;">
                                  <div class="row divmodal">
                                    <div class="col-md-6 divmodal">
                                      <label for="natvio" class="form-label labmar">Nature of Violation</label>
                                      <textarea class="form-control" name="natvio" rows="2" cols="43"><?php echo $row->natvio; ?></textarea>
                                    </div>
                                    <div class="col-md-3" style="padding-top:16px;">
                                      <label for="datinsrep" class="form-label labmar">Inspection Report Date</label>
                                      <input type="date" class="form-control" name="datinsrep" value="<?php echo $row->datinsrep; ?>">
                                    </div>
                                    <div class="col-md-3" style="padding-top:16px;">
                                      <label for="datissnov" class="form-label labmar">NOV Issuance Date</label>
                                      <input type="date" class="form-control" name="datissnov" value="<?php echo $row->datissnov; ?>">
                                    </div>
                                  </div>
                                  <div class="row divmodal" style="">
                                    <div class="row" style="margin-bottom:-13px;">
                                      <div class="col-md-3" style="padding-top:8px;">
                                        <label for="datrecnov" class="form-label labmar">NOV Copy Received</label>
                                        <input type="date" class="form-control" name="datrecnov" value="<?php echo $row->datrecnov; ?>">
                                      </div>
                                      <div class="col-md-5">
                                        <label for="novpospap" class="form-label labmar">NOV Position Paper</label>
                                        <textarea class="form-control" name="novpospap" rows="2" cols="31"><?php echo $row->novpospap; ?></textarea>
                                      </div>
                                      <div class="col-md-4" style="">
                                        <label for="commit" class="form-label labmar">Commitment</label>
                                        <textarea class="form-control" name="commit" rows="2" cols="15" style="width:110%;"><?php echo $row->commit; ?></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--nov-->
                                <hr>
                                <!--order-->
                                <div class="col-md-12 divmodal" style="margin-top:-10px;">
                                  <div class="row">
                                    <div class="col-md-3">
                                      <label for="docket" class="form-label labmar">Docket Number</label>
                                      <input type="text" class="form-control" name="docket" value="<?php echo $row->docket; ?>">
                                    </div>
                                    <div class="col-md-5">
                                      <label for="datissord" class="form-label labmar">Order Issuance Date</label> <span style="font-size:12px;">(DDMmmYYYY)</span>
                                      <input type="text" class="form-control" name="datissord" value="<?php echo $row->datissord; ?>">
                                    </div>
                                    <div class="col-md-4">
                                      <label for="datrecord" class="form-label labmar" style="font-size:13px;">Order Received Date</label> <span style="font-size:12px;">(DDMmmYYYY)</span>
                                      <input type="text" class="form-control" name="datrecord" value="<?php echo $row->datrecord; ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12 divmodal" style="padding-top:10px;">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <label for="datissord" class="form-label labmar">Order Position Paper/MR</label>
                                      <input type="text" class="form-control" name="ordpospap" value="<?php echo $row->ordpospap; ?>">
                                    </div>
                                    <div class="col-md-6">
                                      <label for="datrecord" class="form-label labmar">Remark/Status</label>
                                      <input type="text" class="form-control" name="ordsta" value="<?php echo $row->ordsta; ?>">
                                    </div>
                                  </div>
                                </div>
                                <!--order-->
                                <hr>
                                <!--resolution-->
                                <div class="col-md-12" style="padding-bottom:25px;margin-top:-6px;">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <label for="datappres" class="form-label labmar">Resolution Approved Date</label>
                                      <input type="date" class="form-control" name="datappres" value="<?php echo $row->datappres; ?>">
                                    </div>
                                    <div class="col-md-6">
                                      <label for="resrec" class="form-label labmar">Resolution Received</label>
                                      <input type="date" class="form-control" name="resrec" value="<?php echo $row->resrec; ?>">
                                    </div>
                                  </div>
                                </div>
                                <!--resolution-->
                               <div class="footer" style="text-align:right;">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--edit legal-->

                      <!--del legal-->
                      <div class="modal fade" id="dellgl<?php echo $row->cntlegal; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size:15px;">
                        <div class="modal-dialog modal-sm modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color:#DF362D;">
                              <h5 class="modal-title" id="exampleModalLabel"><b>Delete</b></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="<?php echo site_url('Auth/dellgl') ?>/<?php echo $row->cntlegal; ?>/<?php echo $row->fid; ?>">
                                <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
                                <input class="spechide" type="text" class="form-control" name="cntlegal" value="<?php echo $row->cntlegal; ?>" required>
                                <div class="col-md-12" style="margin-top:-60px;">
                                  <label for="track" class="form-label labmar">Tracking Number</label>
                                  <input type="text" class="form-control" name="track" value="<?php echo $row->track; ?>">
                                </div>
                                <div class="footer" style="text-align:right;">
                                   <button type="submit" class="btn btn-danger">Delete</button>
                                 </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--del legal-->

                      <!-- lgl upload-->
                      <div class="modal fade" id="uplgl<?php echo $row->cntlegal; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color:#f8a532;">
                              <h5 class="modal-title" id="exampleModalLabel"><b>Legal Upload</b></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="<?php echo site_url('Auth/uplgl') ?>/<?php echo $row->fid; ?>" enctype="multipart/form-data">
                                <div class="form-group" hidden>
                                  <input class="form-control" type="text" name="cntlegal" value="<?php echo $row->cntlegal; ?>" required>
                                  <input class="form-control" type="text" name="fid" value="<?php echo $row->fid; ?>" required>
                                  <input class="form-control" type="" name="varOne" id="eventId"/>
                                </div>
                                <div class="varTwo" style="padding-top:12px;">
                                  <input type="file" class="form-control" name='files[]' multiple >
                                </div>
                                <div class="form-group" hidden>
                                  <?php date_default_timezone_set('Asia/Manila'); $curdat = date('dMY H:i:s'); ?>
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
                  </tr>
                <?php }//foreach ?>

                </tbody>
              </table>
            </div>

        </div><!--card-body pt-3-->
        <!-- legal details -->

        <!-- test area -->

        <!-- test area -->

    </section>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

<script type="text/javascript">$(document).on("click", ".open-homeEvents", function () {
   var eventcpd = $(this).data('id');
   $(".modal-body #eventcpd").val( eventcpd );
   $('#idHolder').html( eventcpd );
});</script>

<script type="text/javascript">$(document).on("click", ".open-homeEvents", function () {
   var eventId = $(this).data('id');
   $(".modal-body #eventId").val( eventId );
   $('#idHolder').html( eventId );
});</script>

</body>

</html>
