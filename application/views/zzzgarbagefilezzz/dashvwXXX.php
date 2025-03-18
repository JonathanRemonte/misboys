<!-- 4bhive all rights reserved for EMB MIMAROPA.| code and name coined by TheMan | Proposed by RD Joe, Csez and Yuri on 27Jan2022 @1300 hrs -->
<!-- =======================================================
  4bhive all rights reserved for EMB MIMAROPA. code and name coined by TheMan Proposed by RD Joe, Csez and Yuri on 27Jan2022 @1300 hrs

Special thanks to
* Template Name: NiceAdmin - v2.2.2 * Author: BootstrapMade.com * License: https://bootstrapmade.com/license/
======================================================== -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf8-utf8_general_ci">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta http-equiv="X-UA-Compatible" content="ie-edge">

    <title>4BHive</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/4BHiveLogo1.png" type="image/icon type">

  </head>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/5.1.3-bootstrap.min.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style/design.css"> -->

  <!--datatable-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css">

  <!-- Option 1: jquery -->
  <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.slim.min.js"></script>

  <!-- Option 2: Bootstrap Bundle with Popper -->
  <script src="<?php echo base_url(); ?>assets/js/5.1.3-bootstrap.bundle.min.js"></script>

  <!--datatable-->
  <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>

  <!--fa-->
  <script src="<?php echo base_url(); ?>assets/js/5.0.6-fa-all.js"></script>

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- loaderstyle -->
  <!-- <link href="<?php echo base_url(); ?>assets/style/loaderstyle.css" rel="stylesheet"> -->

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style/loaders.css"> -->

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

  <!--?php $this->load->view('category.php'); ?-->

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center" style="background-color:#68BBE3;">

  <div class="d-flex align-items-center justify-content-between">
    <a href="index.html" class="logo d-flex align-items-center">
      <img src="<?php echo base_url(); ?>assets/img/4BHiveLogo1.png" height="25" width="25" alt="">
      <span class="d-none d-lg-block">4BHive</span>
    </a>
    <?php if($_SESSION['urights']==1){ ?>
      <a class="nav-link collapsed" href="blackhive" style="color:black;"><i class="fa fa-star"></i></a>
    <?php } ?>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  <!-- <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
      <input type="text" name="query" placeholder="Search" title="Enter search keyword">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div> -->
  <!-- End Search Bar -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle " href="#">
          <i class="bi bi-search"></i>
        </a>
      </li><!-- End Search Icon-->

      <?php
        if($_SESSION['urights']==3){}else{ ?>
      <li class="nav-item dropdown" title="Access Request">
        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-fingerprint"></i>
            <?php
              $foi=0;
              foreach($result9 as $row9){
                foreach($resultx as $rowx){
                if($_SESSION['userid']==$row9->userid && $row9->reqsta==1 && $row9->upcpdfil==$rowx->upcpdfil){ $foi++;
                } } }//foreach x
                if($foi>0){ ?>
                  <span class="badge bg-danger badge-number">
                  <?php echo $foi; ?>
                  </span>
                <?php }else{} ?>
        </a><!-- End Notification Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
          <li class="dropdown-header">
            You have <?php echo $foi; if($foi<2){ echo ' request'; }else{ echo ' requests'; } ?> approved
            <!-- <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a> -->
          </li>

          <?php
            $foi=0;
            foreach($result9 as $row9){
              if($_SESSION['userid']==$row9->userid && $row9->reqsta==1){ $foi++; ?>

          <li>
            <hr class="dropdown-divider">
          </li>
          <li class="notification-item">
            <i class="bi bi-check-circle text-success"></i>
            <div>
              <p style="color:#000;">Filename:</p>
              <h4><a href="<?php echo base_url(); ?>index.php/auth/firmprof/<?php echo $row9->fid; ?>"><?php echo $row9->upcpdfil; ?></h4>
              <p>Click the filename to redirect.</p>
              <p>Approved on: <?php echo $row9->reqapdat; ?></p>
            </div>
          </li>

        <?php }} ?>
        </ul>
      </li>
      <?php } ?>

      <li class="nav-item dropdown">

        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-bell"></i>
          <span class="badge bg-primary badge-number">4</span>
        </a><!-- End Notification Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
          <li class="dropdown-header">
            You have 4 new notifications
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-exclamation-circle text-warning"></i>
            <div>
              <h4>Lorem Ipsum</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>30 min. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-x-circle text-danger"></i>
            <div>
              <h4>Atque rerum nesciunt</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>1 hr. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-check-circle text-success"></i>
            <div>
              <h4>Sit rerum fuga</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>2 hrs. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-info-circle text-primary"></i>
            <div>
              <h4>Dicta reprehenderit</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>4 hrs. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>
          <li class="dropdown-footer">
            <a href="#">Show all notifications</a>
          </li>

        </ul><!-- End Notification Dropdown Items -->

      </li><!-- End Notification Nav -->

      <li class="nav-item dropdown">

        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-chat-left-text"></i>
          <span class="badge bg-success badge-number">3</span>
        </a><!-- End Messages Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
          <li class="dropdown-header">
            You have 3 new messages
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="message-item">
            <a href="#">
              <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
              <div>
                <h4>Maria Hudson</h4>
                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                <p>4 hrs. ago</p>
              </div>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="message-item">
            <a href="#">
              <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
              <div>
                <h4>Anna Nelson</h4>
                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                <p>6 hrs. ago</p>
              </div>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="message-item">
            <a href="#">
              <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
              <div>
                <h4>David Muldon</h4>
                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                <p>8 hrs. ago</p>
              </div>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="dropdown-footer">
            <a href="#">Show all messages</a>
          </li>

        </ul><!-- End Messages Dropdown Items -->

      </li><!-- End Messages Nav -->

      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="<?php echo base_url(); ?>assets/img/4BHiveLogo1.png" width="25" alt="Profile" class="rounded-circle">
          <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo ucwords($_SESSION['uname']); ?></span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6><?php echo ucwords($_SESSION['uname']); ?></h6>
            <span><?php
                if ($_SESSION['urights']==4) { echo 'Regional Director';
                }else if ($_SESSION['urights']==7) { echo 'Editor'; }else{} ?>
            </span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
              <i class="bi bi-person"></i>
              <span>My Profile</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
              <i class="bi bi-gear"></i>
              <span>Account Settings</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
              <i class="bi bi-question-circle"></i>
              <span>Need Help?</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="<?php echo site_url('Auth/logout'); ?>">
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
            </a>
          </li>




        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- <body id="bgdashed" onload="myFunction()"> -->

<body id="bgdashed" onload="">

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
        <a class="nav-link " href="#">
          <i class="bi bi-building"></i><span>Firms</span>
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

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Firms Table</h1>
    </div>
    <section>

      <div class="" style="">
        <!-- Trigger the modal with a button -->
        <?php if ($_SESSION['urights']==7||$_SESSION['urights']==1){?>
          <div style="text-align:right;padding-top:7px;padding-right:3%;margin-bottom:-15px;">
            <button type="button" class="btn btn-outline-primary btn-md" data-bs-toggle="modal" data-bs-target="#addrec" style="font-size:15px;font-weight:bold;">Add Records</button>
          </div>
        <?php
        }else{
        }; ?>

        <!-- Modal -->
        <div class="modal fade" id="addrec" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header" style="background-color:#2E9aC0;">
                <h5 class="modal-title" id="exampleModalLabel"><b>Add Establishment Record (CPD)</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form id="firmcontrol" method="post" action="<?php echo site_url('Auth/create') ?>">
                  <div class="mb-3" hidden>
                    <input type="text" class="form-control" name="fid" value="<?php foreach($result1 as $row) { echo $row->fid+1; } ?>" required>
                  </div>
                  <div class="">

                    <div class="mb-3" style="padding-top:12px;">
                      <input type="text" class="form-control" name="firm" id="firm" placeholder="Establishment/Project Name" required autofocus>
                    </div>
                    <div class="mb-3">
                      <input type="text" class="form-control" name="fown" placeholder="Owner/Proponent" required >
                    </div>

                    <div class="col-md-12 mb-3">
                      <div class="row">
                        <label for="pto" class="form-label">Nature of Business</label>
                        <div class="col-md-12">
                          <!-- <input type="text" class="form-control" name="fcat" placeholder="Category" required> -->
                          <select class="form-select" name="fcat" id="fcat" required>
                            <option value="" selected="selected">Click here for Category</option>
                          </select>
                        </div>
                        <div class="col-md-12" style="padding-top:10px;">
                          <!-- <input type="text" class="form-control" name="subcat" placeholder="Sub-Category" required> -->
                          <select class="form-select" name="subcat" id="subcat" required>
                            <option value="" selected="selected">Click here for Sub Category</option>
                          </select>
                        </div>
                        <div class="col-md-12" style="padding-top:10px;">
                          <!-- <input type="text" class="form-control" name="specat" placeholder="Specific Category" required> -->
                          <select class="form-select" name="specat" id="specat" >
                            <option value="" selected="selected">Click here for Specific Category</option>
                          </select>
                        </div>
                        <div class="col-md-12" style="padding-top:10px;">
                          <input type="text" class="form-control" name="subspec" value="N/A" placeholder="Sub-Specific Category">
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="mb-3" hidden>
                    <label for="firimg" class="form-label">firimg</label>
                    <input type="text" class="form-control" name="firimg" value="">
                  </div>
                  <div class="mb-3" hidden>
                    <label for="fstat" class="form-label">fstat</label>
                    <input type="text" class="form-control" name="fstat" value="1">
                  </div>

                  <div class="footer" style="text-align:right;">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div><!-- div for button -->

        <div id="firmdashtab_wrapper" class="dataTables_wrapper" style="font-size: .85em;">
          <!-- loader here -->
          <div>
            <!--?php $this->load->view('loader.php'); ?-->
            <?php $this->load->view('loader_options.php'); ?>
          </div>
          <div class="dataTables_length" id="firmdashtab_length" style="display: none;width:100%;">
            <table id="firmdashtab" class="table table-striped table-hover table-primary responsive" style="width: 100%;">
                  <thead style="font-weight:bold;font-size:15px;text-align:center;vertical-align:middle">
                    <tr>
                      <td scope="col" style="background-color:#5885AF;">#</td>
                      <td scope="col" style="background-color:#5885AF;">FIRM</td>
                      <td scope="col" style="background-color:#5885AF;">CATEGORY</td>
                      <td scope="col" style="background-color:#5885AF;">SUB-CATEGORY</td>
                      <td scope="col" style="background-color:#5885AF;">SPECIFIC CATEGORY</td>
                      <td scope="col" style="background-color:#5885AF;">SUB-SPECIFIC CATEGORY</td>
                      <td scope="col" style="background-color:#5885AF;">ADDRESS</td>
                    </tr>
                  </thead>

                  <tfoot style="display:table-header-group;">
                    <tr>
                      <th></th>
                      <th>Firm</th><th>Category</th>
                      <th>SubCat</th><th>SpecCat</th><th>SubSpec</th>
                      <th>Address</th>
                    </tr>
                  </tfoot>

                  <tbody>
                    <?php
                    $fcnt=0;
                    foreach($result as $row) {?>
                      <tr >
                        <th scope="row" style="width:5%;">
                        <?php if($row->firimg=='' && $_SESSION['urights']==7){?>
                        <a type="button" class="btn-group-xs btn-xs btn-outline-secondary" value="" data-bs-toggle="modal" data-bs-target="#modimg<?php echo $row->fid; ?>" title="Upload"><?php echo $fcnt+=1; ?></a>
                        <?php }else{ ?>
                          <?php echo $fcnt+=1; ?>
                        <?php } ?>
                        </th>
                        <!-- if no Image -->
                        <?php if($row->firimg==""){ ?>
                        <td data-toggle="popover" class="" src="" alt="No Image yet."><a href="<?php echo site_url('Auth/firmprof'); ?>/<?php echo $row->fid; ?>" style="color:#111"><?php echo $row->firm; ?></a></td>
                        <td><?php echo $row->fcat; ?></td> <td><?php echo $row->subcat; ?></td> <td><?php echo $row->specat; ?></td> <td><?php echo $row->subspec; ?></td>
                        <?php }else{ ?>
                        <!-- if with Image -->
                        <td data-toggle="popover" class="imgzm" src="<?php echo base_url(); ?>upglobal/upfirmprof/<?php echo $row->firimg; ?>" alt="No Image yet."><a href="<?php echo site_url('Auth/firmprof'); ?>/<?php echo $row->fid; ?>" style="color:#111"><?php echo $row->firm; ?></a></td>
                        <td><?php echo $row->fcat; ?></td> <td><?php echo $row->subcat; ?></td> <td><?php echo $row->specat; ?></td> <td><?php echo $row->subspec; ?></td>
                        <?php } ?>
                        <td>
                          <!-- overlord delete -->
                          <?php if ($_SESSION['urights']==1){?>
                          <a href="<?php echo site_url('Auth/edfs') ?>/<?php echo $row->fid; ?>" style="color:#ff11ff;padding-right:3px;"><i class="fa fa-circle" aria-hidden="true"></i></a>
                          <?php }else{}?>
                          <!-- overlord delete -->
                          <?php echo $row->fbrgy; ?><?php if($row->fbrgy!=''){ echo ', '; }else{} ?><?php echo $row->fmun; ?><?php if($row->fmun!=''){ echo ', '; }else{} ?> <?php echo $row->fprov; ?>
                        </td>

                        <!-- Modal img upload -->
                        <div class="modal fade" id="modimg<?php echo $row->fid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-md">
                            <div class="modal-content">
                              <div class="modal-header" style="background-color:#2E8BC0;">
                                <h5 class="modal-title" id="exampleModalLabel">Add Image Firm No. <?php echo $fcnt; ?></h5>
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

                      </tr>
                    <?php } ?><!--foreach-->
                  </tbody>
                </table>

          </div>
        </div>

    </section>
  </main>
</body>
  <!-- <script>
    var myVar;

    function myFunction() {
      myVar = setTimeout(showPage, 1000);
    }

    function showPage() {
      document.getElementById("loader1").style.display = "none";
      document.getElementById("firmdashtab_length").style.display = "block";
    }
  </script> -->

  <!-- datatable row popover -->
  <script>
    $(function() { $('.imgzm').popover({ html: true, trigger: 'hover', content: function () { return '<img src="'+$(this).attr('src') + '" width="240" height="200" />'; } }); })
  </script>

  <!-- datatable with individual column search -->
  <script>
    $(document).ready(function() {
      // Setup - add a text input to each footer cell
      $('#firmdashtab tfoot th').each( function () { var title = $(this).text();

      if (title != '') { $(this).html( '<input type="text" placeholder="Search '+title+'" />' ); } } );

        // $(this).html( '<input type="text" placeholder="Search '+title+'" style="width:;background-color:#c0d2dc;font-color:black;" CornerRadius="10" />' ); } );

      // DataTable
      var table = $('#firmdashtab').DataTable({
          dom: 'lrtip', //remove datatable search box
          responsive: 'true',
          initComplete: function () {
            // Apply the search
            this.api().columns().every( function () { var that = this; $( 'input', this.footer() ).on( 'keyup change clear', function () { if ( that.search() !== this.value ) { that .search( this.value ) .draw(); } } ); } );
          }
      });
    } );
  </script>

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>4BHive EMB MIMAROPA</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by TheMan&trade;
    </div>
  </footer> -->
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- cascading dropdown -->
  <script>
    var subjectObject = {
    "Golf Course and other Tourism Projects": {
      "Golf Course Projects/Complex":["N/A"],
      "Golf Course Projects/Complex (Driving Range Only)":["N/A"],
      "Resort and Other Tourism/Leisure":["N/A"]
    },
    "Heavy and Other Processing/Manufacturing Industries": {
      "Agriculture, Food and Related Industries": ["Processing of Dairy Products (Liquid)", "Processing of Dairy Products (Solid)", "Agricultural Processing Including Rice, Corn, Vegetables, Fruits, and other Agricultural Products", "Animal Products Processing (Fish/Meat Processing, Canning, Slaughterhouses, etc.) Including other Marine Products, Crabmeat etc.", "Coconut Processing Plants (Including Production of Other Coconut Based Products)", "Distillation and Fermentation Plants (E.G. Bio-Ethanol Project)", "Food Preservation (E.G., Drying, Freezing) and Similar Methods Aside from Canning. (For Canning, Refer to Other (Applicable) Category)", "Ice Plant/Processing", "Other Types of Food (and Other Food By-Products, Additives, Etc.) Processing Industries", "Rice/Corn Mill (With Polishing)", "Rice/Corn Mill (Without Polishing)", "Sugar Mills"],
      "Chemical Industries": ["Manufacture of Agri-Chemicals, Industrial Chemicals and Other Substance not in the PCL or CCO", "Manufacture of Explosives, Propellants, and Industrial Gases", "Manufacturing, Processing and/or Use of Substance Included in the Priority Chemical List (PCL) and Chemical Control Order (CCO) Per RA 6969 IRR", "Pharmaceutical Industries and Manufacture of Soap and Detergents, Health and Beauty Products, and Other Consumer Products", "Surface Coating Industries (Paints, Pigments, Varnishes, Lacquers, Anti-Capacity Fouling Coating, Printing Inks)"],
      "Iron and Steels Mills": ["N/A"],
      "Non-Ferrous Metal Industries": ["N/A"],
      "Other Processing/Manufacturing Industries": ["Car and Trucks Assembly", "Garment Manufacturing/Industries with Dyeing", "Garment Manufacturing/Industries with Dyeing and Only Involves Spinning, Cutting and Sewing", "Glass-Based Products Manufacturing", "Leather and Related Industries", "Metal-Based Products Manufacturing (Including Semiconductors, Electronics) Does Not Involve the Use of PCL or CCO Substance", "Metal-Based Products Manufacturing (Including Semiconductors, Electronics) Involving Use of < 1.0 MT Per Year of PCL and CCO Substance", "Metal-Based Products Manufacturing (Including Semiconductors, Electronics) Involving Use of >= 1.0 MT Per Year of PCL and CCO Substance", "Paper and Plastic-Based Products", "Pulp and Paper Industries", "Shipbuilding, Boatbuilding and Other Marine Vessel Manufacturing/Fabrication (Including Ship Breaking and Salvaging)", "Textile, Wood, Rubber and Fiber Glass Industries", "Wood and Metal Furniture Assembly with Processing (Bleaching, Sanding, etc.)", "Wood and Metal Furniture Assembly Without Processing"],
      "Petroleum and Petrochemical Industries (This category includes Hydrocarbon Products such as LNG/CNG, etc.)": ["LPG/LNG/CNG/Similar Products Storage and Refilling", "Petrochemical or Petroleum-Based Projects", "Recycling of Oil and Other Petroleum-Based Chemical", "Refilling Station Projects/Gasoline Station Projects", "Refineries", "Storage of Petroleum, Petrochemical or Related Products Including Blending)"],
      "Smelting": ["N/A"]
    },
    "Infrastructure Projects": {
        "Buildings Including Housing, Storage Facilities and Other Structures": ["All Office and Residential Building Such as Motels, Condominiums, Schools, etc. Including Storage Facilities with No Hazardous or Toxic Materials", "Cemetery, Memorial Park, and Similar Projects", "Columbarium and Similar Projects (Including Funeral Parlor and Crematorium)", "Commercial, [Business Centers with Residential Units (Mixed Use), Malls, Supermarkets, Public Markets", "Family Dwellings/Apartment Type", "Industrial Parks (Horizontal Development) with Critical Slopes", "Industrial Parks (Horizontal Development) in Flat Areas", "Institutional and Other Structures with Laboratory Facilities", "Storage Facilities for Toxic or Hazardous Materials, Substance or Products (Including Those for Those in PCL)", "Subdivision and Other Housing Projects in Areas with Critical Slopes", "Subdivision and Other Housing Projects in Flat Areas"],
        "Dams, Water Supply and Flood Control Projects": ["DAMS (Including Those for Irrigation, Flood Control, Water Source and Hydropower Projects) Including Run-Or-River Type", "Irrigation Projects (Distribution System Only)", "Water Supply Projects (Without Dam) Level II/Level I (Water Refilling Station)", "Water Supply Projects (Without Dam) Level III (Distribution System Only)", "Water Supply Projects (Without Dam) With Water Source (E.G., Infiltration Gallery, Etc.) and Water Treatment Facilities Including Desalination, Reverse Osmosis (RO)"],
        "Other Transport Facilities": ["Airports", "Land Transport Terminal (For Buses, Jeepneys and Other Modes of Transportation) With Service Facilities", "Land Transport Terminal (For Buses, Jeepneys and Other Modes of Transportation) Without Service Facilities", "Sea Port, Causeways, and Harbors (Including -RO-RO Facilities) With Reclamation", "Sea Port, Causeways, and Harbors (Including RO-RO Facilities) Without Reclamation"],
        "Pipeline and similar Projects": ["Fuel Pipelines", "Other Pipelines/Cables", "Submarine Pipelines/Cables"],
        "Power Plants": ["Fuel Cell", "Gas-Fired Thermal Power Plants", "Geothermal Facilities", "Hydropower Facilities with Tunneling Project", "Hydropower Facilities Without Tunneling Project", "Other Thermal Power Plants (e.g., Coal, Diesel, Bunker, etc.)", "Power Barges", "Power Transmission Lines", "Renewable Energy Projects Such as Ocean, Solar, Wind, Tidal Power Except Waste-To-Energy and Biogas Projects", "Substation/Switchyard", "Waste-To-Energy Biogas Projects", "Waste-To-Energy Power Projects"],
        "Reclamation and Other Land Restoration Projects": ["N/A"],
        "Roads and Bridges": ["Bridges and Viaducts (Including Elevated Roads), New Construction", "Bridges and Viaducts (Including Elevated Roads), New Construction Footbridges or Pedestrian Only", "Bridges and Viaducts (Including Elevated Roads), Rehabilitation and/or Improvement with <=50% Increase in Capacity (or in Terms of Length/Width)", "Bridges and Viaducts (Including Elevated Roads), Rehabilitation and/or Improvement with >=50% Increase in Capacity (or in Terms of Length/Width)", "On-Grade Railways System, New", "Pedestrian Passages", "Roads Flyover/Cloverleaf/Interchanges", "Roads, New Construction", "Roads, Widening, Rehabilitation and/or Improvement with Critical Slope", "Roads, Widening, Rehabilitation and/or Improvement with Critical Slope with <= 50% Increase in Capacity (or in Terms of Length/Width)", "Roads, Widening, Rehabilitation and/or Improvement with Critical Slope with > 50% Increase in Capacity (or in Terms of Length/Width)", "Tunnels and Sub-Grade Roads and Railways"],
        "Waste Management Projects": ["Compost/Fertilizer Making", "Domestic Wastewater Treatment Facility (Including Septage Treatment Facility)", "Hazardous Waste Treatment, Recycling, and/or Disposal Facilities (For Recycling of Lead, See Details in Heavy Industries) With Radioactive Materials", "Hazardous Waste Treatment, Recycling, and/or Disposal Facilities (For Recycling of Lead, See Details in Heavy Industries) Without Radioactive Materials", "Industrial and Hospital Waste (Non-Hazardous) Materials Treatment Facilities", "Material Recovery Using Pyrolysis or Similar Technology (E.G., Tire Pyrolysis)", "Material Receiving and Recovery (For Paper, Plastics and Other Materials) No Composting Facility (Material Segregation/Sorting Only)", "Material Receiving and Recovery (For Paper, Plastics and Other Materials) With Composting Facilities", "Recycling Facilities for Paper, Plastic and Other Non-Hazardous Material Does Not Involve the Use of Chemicals", "Recycling Facilities for Paper, Plastic and Other Non-Hazardous Material Involving the Use of Chemicals", "Sanitary Landfill for Domestic Waste Only Categories 2 To 4 Disposal Facilities", "Sanitary Landfill for Domestic Waste Only Categories 1 Disposal Facilities", "Sanitary Landfill for Industrial and Other Waste"],
    },
    "Other Resources": {
      "Cottage Industries": ["N/A"],
      "Cut-Flower Industry/Projects": ["N/A"],
      "Demonstration and Pilot Projects": ["N/A"],
      "Energy Projects and Non-Commercial and Fossil Mining Projects Involving Seismic Survey, Gravity Survey, Geoscientific, Geophysical Surveys, Reconnaissance, Exploration Feasibility Studies, Piloting, Core Drilling/Sampling Research and Development": ["N/A"],
      "Facilities For Barangay Micro-Business Enterprises (BMBE) Projects": ["N/A"],
      "Retesting of Old/Existing Wells in Indigenous Resources Locations for Purposes of Data Gathering and/or Verification of Validity of Historical Energy Resource Information": ["N/A"],
      "Service Industries": ["N/A"],
      "Telecommunication Projects": ["N/A"]
      },
      "Resources Extractive": {
        "Agriculture Industy": ["Agricultural plantation - Animal Feed Mill", "Agricultural Plantation - e.g. Orchards, Including Rubber Plantation"],
        "Fishery Projects - Dike for/and Fishpond Development Projects": ["Fishery/Aquaculture Projects using Fresh or Brackish Water Including Pearl Farm and Similar Activities"],
        "Forestry Projects": ["Breeding/Propagation of Any Philippine Threatened Species, Exotic Species, or Non-Threatened/Indigenous Species", "Community Based Forest Resources Utilization (CBFRU); Integrated Forest Management Agreement (IFMA) Projects; Timber License Agreement (TLA); Private Land Timber Utilization (PLTU); Other Forestry Projects; Forestry Projects Co-Managed With DENR", "Grazing Projects", "Grazing Projects of <=10 Animal Units", "Introduction of Exotic Fauna and Flora in Public and Private Forests", "Livestock Animal Industries", "Wildlife Farming or Any Related Projects as Defined By BMB", "Wood Processing Projects"],
        "Mining and Quarrying Projects": ["Extraction of Oil and Gas (Land-Based) Commercial Extraction of Gas", "Extraction of Oil and Gas (Land-Based) Commercial Extraction of Oil", "Coal Mining", "Extraction of Metallic and Non-Metallic Minerals Including Extraction of Oil and Gas, Deuterium (Off-Shore)", "Extraction of Metallic Ores/Minerals (On-Shore) With Area < 25 Hectares", "Extraction of Metallic Ores/Minerals (On-Shore) With Area >= 25 Hectares", "Extraction of Non-Metallic Minerals Such as Limestone/Shale/Silica/Clay/Placer and Other Non-Metal Minerals/Ores", "Extraction of Non-Metallic Minerals Such as Limestone/Shale/Silica/Clay/Placer and Other Non-Metal Minerals/Ores < 20 Hectares", "Extraction of Non-Metallic Minerals Such as Limestone/Shale/Silica/Clay/Placer and Other Non-Metal Minerals/Ores >= 20 Hectares", "Mineral Processing Projects Batching and Crushing Plant; Sand and Gravel Washing Mobile or To Be Operated < 1 Year", "Mineral Processing Projects Batching and Crushing Plant; Sand and Gravel Washing Non-Mobile or To Be Operated >= 1 Year", "Mineral Processing Projects Metallic Mineral or Ore Processing", "Mineral Processing Projects Natural Stone (E.G., Marble) Processing Plant", "Mineral Processing Projects Non-Metallic Mineral Processing Plants Like Cement, Other Cement Products", "Mineral Processing Projects Non-Metallic Mineral Processing Plants Like Clinker, Limestone, Ceramic Industries", "Mineral Processing Projects Non-Metallic Mineral Processing Plants Like Manufacture and Processing of Calcium", "Mineral Processing Projects Non-Metallic Mineral Processing Plants Like Manufacture of Glass and Glass Products", "Mineral Processing Projects Precious/Noble Metal Refining (Including Jewelry-Making) Does Not Use PCL or CCO Substance", "Mineral Processing Projects Precious/Noble Metal Refining (Including Jewelry -Making) Involving < 1.0 MT Per Year PCL or CCO Substance", "Mineral Processing Projects Precious/Noble Metal Refining (Including Jewelry -Making) Involving >= 1.0 MT Per Year PCL or CCO Substance"]
      }
    }
    window.onload = function() {
      var subjectSel = document.getElementById("fcat");
      var topicSel = document.getElementById("subcat");
      var chapterSel = document.getElementById("specat");
      for (var x in subjectObject) {
        subjectSel.options[subjectSel.options.length] = new Option(x, x);
      }
      subjectSel.onchange = function() {
        //empty Chapters- and Topics- dropdowns
        chapterSel.length = 1;
        topicSel.length = 1;
        //display correct values
        for (var y in subjectObject[this.value]) {
          topicSel.options[topicSel.options.length] = new Option(y, y);
        }
      }
      topicSel.onchange = function() {
        //empty Chapters dropdown
        chapterSel.length = 1;
        //display correct values
        var z = subjectObject[subjectSel.value][this.value];
        for (var i = 0; i < z.length; i++) {
          chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
        }
      }
    }
  </script>
