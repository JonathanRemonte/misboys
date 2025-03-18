  <!-- Option 1: jquery popover -->
  <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.slim.min.js"></script>

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/1.12.1-jquery.dataTables.min.css"> -->

  <style media="screen">
    /* <!-- datab indi --> */
    tfoot input { width: 100%; padding: 3px; box-sizing: border-box; }
    #theman{ color: #565656; }
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
          <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
            <li>
              <a href="firmvpermit" class="active">
                <i class="bi bi-file-post-fill"></i><span>Firms vs Permits</span>
              </a>
            </li>
          </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="swmdash">
            <i class="bi bi-recycle"></i><span>SWM</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
        </li><!-- End Tables Nav -->

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
        <h1>Firms vs Permits</h1>
      </div>


      <!-- Include Bootstrap CSS -->
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    	<!-- Include jQuery JavaScript -->
    	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    	<!-- Include Bootstrap JavaScript -->
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
                  <td scope="col">ECC/CNC</td>
                  <td scope="col">PTO</td>
                  <td scope="col">DP</td>
                  <td scope="col">HWID</td>
                  <td scope="col">PTT</td>
                </tr>
              </thead>
              <tfoot style="display:table-header-group;"><tr><th></th>
                <th>Firm</th><th>ECC/CNC</th><th>PTO</th><th>DP</th><th>HWID</th><th>PTT</th></tr>
              </tfoot>
              <tbody>
                <?php
                $fcnt=0;
                foreach($result as $row) {?>
                  <tr>
                    <th scope="row" style="width:5%;"><a href="<?php echo site_url('Auth/firmprof'); ?>/<?php echo $row->fid; ?>" target="_blank" id="theman"><?php echo $fcnt+=1; ?></a></th>
                    <th title="Lat:<?php echo $row->flat; ?> Long:<?php echo $row->flon; ?>"><a href="<?php echo site_url('Auth/firmprof'); ?>/<?php echo $row->fid; ?>" target="_blank" id="theman"><?php echo $row->firm; ?></a></th>
                    <!--th title="Lat:<?php echo $row->flat; ?> Long:<?php echo $row->flon; ?>"><a href="<?php echo site_url('Auth/firmgllry'); ?>/<?php echo $row->fid; ?>" target="_blank" id="theman"><?php echo $row->firm; ?></a></th-->
                    <td><?php echo $row->eccn; ?></td> <td><?php echo $row->pto; ?></td> <td><?php echo $row->dp; ?></td> <td><?php echo $row->hazid; ?></td> <td><?php echo $row->ptt; ?></td>
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
