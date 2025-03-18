  <!-- Option 1: jquery popover -->
  <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.slim.min.js"></script>

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
          <a class="nav-link collapsed" href="index">
            <i class="bi bi-hexagon"></i>
            <span>Dashboard</span>
          </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
          <a class="nav-link " href="firmdash">
            <i class="bi bi-building"></i><span>Firms</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="swmdash">
            <i class="bi bi-recycle"></i><span>SWM</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
        </li><!-- End Tables Nav -->

        <?php if($_SESSION['urights']==3||$_SESSION['urights']==1){ ?>
          <li class="nav-item">
            <?php if($_SESSION['urights']==3){ ?><a class="nav-link collapsed" href="req2op">
            <?php }else{ ?><a class="nav-link collapsed" title="For Records Use Only"><?php } ?>
              <i class="bi bi-fingerprint"></i>
              <span style="padding-right:10px;">Access Request</span>
              <?php
                foreach($result8 as $row8){ if($row8->foi>0){ ?> <div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;"> <span class="visually-hidden"></span> </div>
                  <?php }else{ } } ?>
            </a>
          </li><!-- End isscon Page Nav -->
        <?php } ?>

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

      </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
      <div class="pagetitle" style="">
        <h1>List of Firms</h1>
      </div>
      <section>
        <div class="card" >
          <div class="card-body">
            <div class="row" style="padding-left:13px;padding-top:20px;">
            </div>

            <table id="firmtab" class="display" style="width:100%">
              <thead>
                <tr>
                  <td scope="col">#</td>
                  <td scope="col">FIRM</td>
                  <td scope="col">CATEGORY</td>
                  <td scope="col">SUB-CATEGORY</td>
                  <td scope="col">SPECIFIC CATEGORY</td>
                  <td scope="col">SUB-SPECIFIC CATEGORY</td>
                  <td scope="col">ADDRESS</td>
                  <td scope="col">PERMIT</td>
                  <td scope="col">ACTION</td>
                </tr>
              </thead>
              <tfoot style="display:table-header-group;"><tr><th></th>
                <th>Firm</th><th>Category</th>
                <th>SubCat</th><th>SpecCat</th><th>SubSpec</th>
                <th>Address</th><th>Permit</th><th></th></tr>
              </tfoot>
              <tbody>
                <?php
                $fcnt=0;
                foreach($result as $row) {?>
                  <tr>
                    <th scope="row" style="width:5%;"><?php echo $fcnt+=1; ?></th>
                    <!-- if no Image -->
                    <?php if(empty($row->firimg)){ ?>
                    <td title="Lat:<?php echo $row->flat; ?> Long:<?php echo $row->flon; ?>"><?php echo $row->firm; ?></td>
                    <td><?php echo $row->fcat; ?></td> <td><?php echo $row->subcat; ?></td> <td><?php echo $row->specat; ?></td> <td><?php echo $row->subspec; ?></td>
                    <?php }else{ ?>
                    <!-- if with Image -->
                    <td href="" data-toggle="popover" title="Lat:<?php echo $row->flat; ?> Long:<?php echo $row->flon; ?>" class="imgzm" src="<?php echo base_url(); ?>upglobal/upfirmprof/<?php echo $row->firimg; ?>" alt="No Image yet."><?php echo $row->firm; ?></td>
                    <td><?php echo $row->fcat; ?></td> <td><?php echo $row->subcat; ?></td> <td><?php echo $row->specat; ?></td> <td><?php echo $row->subspec; ?></td>
                    <?php } ?>
                    <td><?php echo $row->fbrgy; ?><?php if($row->fbrgy!=''){ echo ', '; }else{} ?><?php echo $row->fmun; ?><?php if($row->fmun!=''){ echo ', '; }else{} ?> <?php echo $row->fprov; ?></td>
                    <td><?php if(!empty($row->eccn)){ echo 'ECC '; }else{ '$#%^'; } ?>
                      <?php if(!empty($row->pto)){ echo 'PTO '; }else{} ?>
                      <?php if(!empty($row->dp)){ echo 'DP '; }else{} ?>
                      <?php if(!empty($row->hazid)){ echo 'HWID '; }else{} ?>
                      <?php if(!empty($row->ptt)){ echo 'PTT '; }else{} ?>
                    </td>
                    <?php if ($_SESSION['urights']==4){?>
                    <td>
                      <a href="<?php echo site_url('Auth/firmprof'); ?>/<?php echo $row->fid; ?>"><button type="button" class="btn-group-xs btn-xs btn-primary" title="Browse"><i class="fa fa-search" aria-hidden="true"></i></button></a>
                      <a href="<?php echo site_url('') ?>/<?php echo $row->fid; ?>"><button type="button" class="btn-group-xs btn-xs btn-success" title="More"><i class="fa fa-bars" aria-hidden="true"></i></button></a></td><?php
                    }else{
                    ?>
                    <td>
                      <?php if(($row->firimg)=='' && $_SESSION['urights']==7){?>
                      <button type="button" class="btn-group-xs btn-xs btn-outline-secondary" value="" data-bs-toggle="modal" data-bs-target="#modimg<?php echo $row->fid; ?>" title="Upload"><i class="fa fa-upload" aria-hidden="true"></i></button>
                    <?php }else{ ?>
                      <button type="button" class="btn-group-xs btn-xs btn-outline-danger open-homeEvents" value="" data-bs-toggle="modal" data-bs-target="#deupimg<?php echo $row->fid; ?>" title="Remove Upload" data-id="<?php echo $row->firimg; ?>"><i class="bi bi-file-x-fill"></i></button>
                    <?php } ?>

                      <a href="<?php echo site_url('Auth/firmprof'); ?>/<?php echo $row->fid; ?>"><button type="button" class="btn-group-xs btn-xs btn-outline-success" title="Browse"><i class="fa fa-search" aria-hidden="true"></i></button></a>
                      <!-- <a href="<?php echo site_url('Auth/edit'); ?>/<?php echo $row->fid; ?>"><button type="button" class="btn-group-xs btn-xs btn-outline-warning" title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></button></a> -->
                      <?php if ($_SESSION['urights']==3||$_SESSION['urights']==1){?>
                      <a href="<?php echo site_url('Auth/edfs') ?>/<?php echo $row->fid; ?>"><button type="button" class="btn-group-xs btn-xs btn-outline-danger" title="Deactivate"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                    <?php }else{}?>
                    </td>

                    <!-- Modal img upload -->
                    <div class="modal fade" id="modimg<?php echo $row->fid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-md">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color:#2E8BC0;">
                            <h5 class="modal-title" id="exampleModalLabel">Add Image</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="<?php echo site_url('Auth/upfirmprof') ?>/<?php echo $row->fid; ?>" enctype="multipart/form-data">
                              <?php
                                if (isset($error)){
                                  echo '<div class="alert alert-danger">'.$error.'</div>';
                                }
                              ?>
                              <div class="form-group" hidden>
                                <input type="text" class="form-control" name="<?php echo $row->fid; ?>" value="<?php echo $row->fid; ?>">
                              </div>
                              <div class="form-group" style="padding-bottom:18px;">
                                <input type="file" class="form-control" name="userfile" >
                              </div>
                              <div class="form-group">
                                <button type="submit" size="20" class="btn btn-primary">Upload</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- unlink remfirmimg -->
                    <div class="modal fade" id="deupimg<?php echo $row->fid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-md modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color:#DF362D;">
                            <h5 class="modal-title" id="exampleModalLabel" style="color:white;"><b>Remove Uploaded Image of</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="<?php echo site_url('Auth/remfirimg') ?>/<?php echo $row->fid; ?>">
                              <div>
                                <input type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required hidden>
                                <!-- <input type="text" class="form-control" name="upterm" value="upproflo" required> -->
                              </div>
                              <div class="form-group">
                                <input class="form-control" type="" name="" id="eventImg"/ hidden>
                                <input class="form-control" type="" name="varOne" id="eventImg"/ >
                              </div>
                             <div class="footer" style="text-align:right;">
                                <button type="submit" class="btn btn-danger">Remove</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- unlink remfirmimg -->

                    <?php } ?>
                  </tr>
                <?php } ?><!--foreach-->
              </tbody>
            </table>

          </div>
        </div><!-- card -->

      </section>
    </main>

  </body>
</html>

<!-- datab indi -->
<script type="text/javascript">
  $(document).ready(function () {
    // Setup - add a text input to each footer cell
    $('#firmtab tfoot th').each( function () { var title = $(this).text();
      //remove first column
      if (title != '') { $(this).html( '<input type="text" placeholder="Search '+title+'" />' ); } } );

    // DataTable
    var table = $('#firmtab').DataTable({ initComplete: function () {
            // Apply the search
            this.api() .columns() .every(function () { var that = this;

                    $('input', this.footer()).on('keyup change clear', function () { if (that.search() !== this.value) { that.search(this.value).draw(); } }); }); }, }); });
</script>
<!-- datab indi -->

<!-- show adlgu form -->
<!-- <script type="text/javascript"> function adlgu() { $("#tow").slideToggle("slow"); } </script> -->
<!-- show adlgu form -->

<!-- datatable row popover -->
<script>
  $(function() { $('.imgzm').popover({ html: true, trigger: 'hover', content: function () { return '<img src="'+$(this).attr('src') + '" width="240" height="200" />'; } }); })
</script>

<script src="<?php echo base_url(); ?>assets/js/jquery-3.5.1.js"></script>

<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>


<!-- ======= Footer ======= -->
<footer id="footer" class="footer" style="">
  <div class="copyright">
    &copy; Copyright <strong><span>4BHive EMB MIMAROPA</span></strong>. All Rights Reserved 2022
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    Designed by TheMan&trade; supported by R4BiT <br>
    <?php $version = phpversion(); print 'PHP: '.$version; echo ' | CI: '.CI_VERSION; ?>

    <!-- <a href="https://bootstrapmade.com/">About the author</a> -->
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo base_url(); ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/chart.js/chart.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/echarts/echarts.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/quill/quill.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/tinymce/tinymce.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

</body>

</html>

<script type="text/javascript">$(document).on("click", ".open-homeEvents", function () {
   var eventImg = $(this).data('id');
   $(".modal-body #eventImg").val( eventImg );
   $('#idHolder').html( eventImg );
});</script>
