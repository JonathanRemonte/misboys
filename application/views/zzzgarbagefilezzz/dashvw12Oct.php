<!-- 4bhive all rights reserved for EMB MIMAROPA.| code and name coined by TheMan | Proposed by RD Joe, Csez and Yuri on 27Jan2022 @1300 hrs -->

<!-- =======================================================
  4bhive all rights reserved for EMB MIMAROPA.
  code and name coined by TheMan
  Proposed by RD Joe, Csez and Yuri on 27Jan2022 @1300 hrs

Special thanks to
* Template Name: NiceAdmin - v2.2.2
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
======================================================== -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta http-equiv="X-UA-Compatible" content="ie-edge">

    <title>4BHive</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/4BHiveLogo1.png" type="image/icon type">

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

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

</head>

  <!-- require casscade dropdown -->
  <?php $this->load->view('category.php'); ?>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center" style="background-color:#68BBE3;">

  <div class="d-flex align-items-center justify-content-between">
    <a href="index.html" class="logo d-flex align-items-center">
      <img src="<?php echo base_url(); ?>assets/img/4BHiveLogo1.png" height="25" width="25" alt="">
      <span class="d-none d-lg-block">4BHive</span>
    </a>
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

<body id="bgdashed">

<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar" style="">

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

      <li class="nav-item">
        <a class="nav-link collapsed" href="swmdash">
          <i class="bi bi-recycle"></i><span>SWM</span>
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

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

      <div class="" style="">
      <!--row-->
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
                          <select class="form-control" name="fcat" id="fcat" required>
                            <option value="" selected="selected">Click here for Category</option>
                          </select>
                        </div>
                        <div class="col-md-12" style="padding-top:10px;">
                          <!-- <input type="text" class="form-control" name="subcat" placeholder="Sub-Category" required> -->
                          <select class="form-control" name="subcat" id="subcat" required>
                            <option value="" selected="selected">Click here for Sub Category</option>
                          </select>
                        </div>
                        <div class="col-md-12" style="padding-top:10px;">
                          <!-- <input type="text" class="form-control" name="specat" placeholder="Specific Category"> -->
                          <select class="form-control" name="specat" id="specat">
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

        <div id="firmdashtab_wrapper" class="dataTables_wrapper" style="font-size:.75em;">
          <div class="dataTables_length" id="firmdashtab_length">
            <table id="firmdashtab" class="table table-striped table-hover table-primary table-bordered border-success" style="">
              <thead style="font-weight:bold;font-size:15px;text-align:center;">
                <tr>
                  <td scope="col" style="width:3%;background-color:#5885AF;">#</td>
                  <td scope="col" style="background-color:#5885AF;">FIRM</td>
                  <td scope="col" style="background-color:#5885AF;">CATEGORY</td>
                  <td scope="col" style="background-color:#5885AF;">SUB-CATEGORY</td>
                  <td scope="col" style="background-color:#5885AF;">SPECIFIC CATEGORY</td>
                  <td scope="col" style="background-color:#5885AF;">SUB-SPECIFIC CATEGORY</td>
                  <td scope="col" style="background-color:#5885AF;">ADDRESS</td>
                  <td scope="col" style="width:5%;background-color:#5885AF;">ACTION</td>
                </tr>
              </thead>
              <tfoot style="display:table-header-group;"><tr><th></th>
                <th>Firm</th><th>Category</th>
                <th>SubCat</th><th>SpecCat</th><th>SubSpec</th>
                <th>Address</th><th></th></tr>
              </tfoot>

              <tbody>
                <?php
                $fcnt=0;
                foreach($result as $row) {?>
                  <tr>
                    <th scope="row" style="width:5%;"><?php echo $fcnt+=1; ?></th>
                    <!-- if no Image -->
                    <?php if($row->firimg==""){ ?>
                    <td data-toggle="popover" title="Lat:<?php echo $row->flat; ?> Long:<?php echo $row->flon; ?>" class="imgzm" src="<?php echo base_url(); ?>upglobal/upfirmprof/4BHiveLogo1.png" alt="No Image yet."><?php echo $row->firm; ?></td>
                    <td><?php echo $row->fcat; ?></td> <td><?php echo $row->subcat; ?></td> <td><?php echo $row->specat; ?></td> <td><?php echo $row->subspec; ?></td>
                    <?php }else{ ?>
                    <!-- if with Image -->
                    <td data-toggle="popover" title="Lat:<?php echo $row->flat; ?> Long:<?php echo $row->flon; ?>" class="imgzm" src="<?php echo base_url(); ?>upglobal/upfirmprof/<?php echo $row->firimg; ?>" alt="No Image yet."><?php echo $row->firm; ?></td>
                    <td><?php echo $row->fcat; ?></td> <td><?php echo $row->subcat; ?></td> <td><?php echo $row->specat; ?></td> <td><?php echo $row->subspec; ?></td>
                    <?php } ?>
                    <td><?php echo $row->fbrgy; ?><?php if($row->fbrgy!=''){ echo ', '; }else{} ?><?php echo $row->fmun; ?><?php if($row->fmun!=''){ echo ', '; }else{} ?> <?php echo $row->fprov; ?></td>
                    <?php if ($_SESSION['urights']==4){?>
                    <td>
                      <a href="<?php echo site_url('Auth/firmprof'); ?>/<?php echo $row->fid; ?>"><button type="button" class="btn-group-xs btn-xs btn-primary" title="Browse"><i class="fa fa-search" aria-hidden="true"></i></button></a>
                      <a href="<?php echo site_url('') ?>/<?php echo $row->fid; ?>"><button type="button" class="btn-group-xs btn-xs btn-success" title="More"><i class="fa fa-bars" aria-hidden="true"></i></button></a></td><?php
                    }else{
                    ?>
                    <td>
                      <?php if(($row->firimg)=='' && $_SESSION['urights']==7){?>
                      <button type="button" class="btn-group-xs btn-xs btn-outline-secondary" value="" data-bs-toggle="modal" data-bs-target="#modimg<?php echo $row->fid; ?>" title="Upload"><i class="fa fa-upload" aria-hidden="true"></i></button>
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

                    <?php } ?>
                  </tr>
                <?php } ?><!--foreach-->
              </tbody>
            </table>


          </div>
        </div>

    </main>
</body>

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
      // $(this).html( '<input type="text" placeholder="Search '+title+'" style="background-color:#c0d2dc;font-color:black;" CornerRadius="10" />' ); } );

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
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>4BHive EMB MIMAROPA</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by TheMan&trade;
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
