
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf8-utf8_general_ci">
    <!-- <meta content="width=device-width, initial-scale=1.0" name="viewport"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie-edge">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <!-- <link href="https://fonts.gstatic.com" rel="preconnect"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

    <link href="<?php echo base_url(); ?>assets/css/fontgoogleapi.css" rel="preconnect">

    <!--fa-->
    <script src="<?php echo base_url(); ?>assets/js/5.0.6-fa-all.js"></script>

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

    <title>4BHive</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/4BHiveLogo1.png" type="image/icon type">

  </head>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center" style="background-color:#68BBE3;">
    <!-- overlod universal portal -->
    <a class="open-homeEvents" data-id="overlord" href="" data-bs-toggle="modal" data-bs-target="#overlord" style="color:#68BBE3;" title="#$%^&"><i class="bi bi-record2"></i></a>
    
    <div class="d-flex align-items-center justify-content-between">
    <a href="<?php echo base_url('index'); ?>" class="logo d-flex align-items-center">
        <img src="<?php echo base_url(); ?>assets/img/4BHiveLogo1.png" height="25" width="25" alt="">
        <span class="d-none d-lg-block">4BHive</span>
      </a>

      <?php if($_SESSION['urights']==1){ ?>
        <a class="nav-link collapsed" href="blackhive" style="color:black;"><i class="fa fa-star"></i></a>
      <?php }else{
        if(empty($_SESSION['urights'])){ redirect('Auth/logout'); }
      } ?>

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

        <!-- lgu reg -->
        <?php
          if($_SESSION['urights']==8.4 || $_SESSION['urights']==1){ ?>
            <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-file-earmark-person"></i>
            <?php $lgcount=0; foreach ($lgres as $rowlgc) { ?>
              <span class="badge bg-danger badge-number"><?php echo $lgcount=$rowlgc->lgcount; ?></span>
            <?php } ?>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications" style="height:560px;overflow-y: scroll;">
            <li class="dropdown-header">
              You have <?php echo $lgcount; if($lgcount<2){ echo ' registration'; }else{ echo ' registrations'; } ?> to approved.
              <!-- <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a> -->
            </li>
            <?php foreach ($lgacc as $rowac) { ?>
              <a href="swmadmin#lgureg">
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li class="notification-item">
                  <i class="bi bi-exclamation-circle text-danger"></i>
                  <div>
                    <h4>Name: <?php echo ucwords($rowac->fnam); ?> <?php echo ucwords($rowac->lnam); ?></h4>
                    <p>LGU: <?php echo $rowac->lgu; ?></p>
                    <p>Date Registered: <?php echo date("YMd",strtotime($rowac->regdat)); ?></p>
                  </div>
                </li>
              </a>
            <?php } ?>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

      <?php }else{ } ?>
        <!-- lgu reg -->

    <?php
    if($_SESSION['urights']=='1.6.1' && isset($countreq) && $countreq > 0){?>
        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-bell"></i>
            <span class="badge bg-success badge-number"><?php echo $countreq; ?></span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
    <li class="dropdown-header">
        Local Government Unit
        <span class="badge rounded-pill bg-primary p-2 ms-2">User Request</span>
    </li>
    <li>
        <hr class="dropdown-divider">
    </li>

    <?php foreach ($req as $request) : ?>
        <li class="message-item">
            <a href="#" data-bs-toggle="modal" data-bs-target="#requestModal<?php echo $request->lgusid; ?>">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                    <h4><?php echo $request->fname ." ". $request->mname . " " . $request->lname; ?></h4>
                    <p><?php echo $request->lgu; ?></p>
                </div>
            </a>
        </li>
        <?php endforeach; ?>
        <!-- <li>
            <hr class="dropdown-divider">
        </li>


    <li class="dropdown-footer">
        <a href="#">Show all messages</a>
    </li> -->
    </ul>
    <!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->
        <?php } ?>
        <li class="nav-item dropdown pe-3">

                  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="<?php echo base_url(); ?>assets/img/4BHiveLogo1.png" width="25" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo ucwords($_SESSION['fname']); ?></span>
                  </a><!-- End Profile Iamge Icon -->

                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                      <h6><?php echo ucwords($_SESSION['fname']); ?></h6>
                      <span><?php
                          if ($_SESSION['urights']==4) { echo 'Regional Director';
                          }else if ($_SESSION['urights']==7) { echo 'Editor'; }else{} ?>
                      </span>
                    </li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>

                    <li>
                      <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('accSettings'); ?>/<?php echo ($_SESSION['userid']); ?>">
                        <i class="bi bi-person"></i>
                        <span>My Profile</span>
                      </a>
                    </li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <!--
                    <li>
                      <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                        <i class="bi bi-gear"></i>
                        <span>Account Settings</span>
                      </a>
                    </li> -->
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
                      <a class="dropdown-item d-flex align-items-center" href="Auth/usermanual">
                        <i class="bi bi-card-list"></i>
                        <span>User Manual</span>
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

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

    <!-- Template Main JS File -->
    <!-- <script src="<?php echo base_url(); ?>assets/js/main.js"></script> -->

<script src="<?php echo base_url(); ?>assets/js/2.0.3-jquery.min.js"></script>
<script>
  $(function () { $("body").on('click keypress', function () { ResetThisSession(); }); });
  var timeInSecondsAfterSessionOut = 1000; // change this to change session time out (in seconds).
    var secondTick = 0;

  function ResetThisSession() { secondTick = 0; }
  function StartThisSessionTimer() {
      secondTick++;
  timeLeft = timeInSecondsAfterSessionOut - secondTick; // override, we have 30 secs only
  var timeLeft = ((timeInSecondsAfterSessionOut - secondTick) / 60).toFixed(0); // in minutes
      $("#spanTimeLeft").html(timeLeft);
  if (secondTick > timeInSecondsAfterSessionOut) { clearTimeout(tick); window.location = "https://'.$_SERVER['HTTP_HOST'].'/4bhive/"; return; } tick = setTimeout("StartThisSessionTimer()", 1000);
  }
 StartThisSessionTimer();
</script>

<!-- **************************OVERLORD********************************* -->
<!-- portal -->
<div class="modal fade" id="overlord" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#000;">
        <h5 class="modal-title" id="exampleModalLabel" style="color:red;"><b>@#$%^#$%^BEWARE!!! You are accountable for your action#$%^&</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="background-color:#000;">
        <form method="post" action="<?php echo site_url('Auth/portal') ?>">
          <div class="" style="padding-bottom:10px;">
            <input class="spechide" type="password" class="form-control" name="access" value="" style="background-color:#000;" required>
          </div>
          <div class="col-md-12" hidden>
            <div class="row">
              <div class="col-md-6">
              <label>userid</label>
              <div class="form-group">
                  <input class="" type="text" class="form-control" name="userid" value="<?php echo $_SESSION['userid']; ?>" style="" required>
              </div>
            </div>
            <div class="col-md-6">
              <label>username</label>
              <div class="form-group">
                <input class="" type="text" class="form-control" name="uname" value="<?php echo $_SESSION['uname']; ?>" style="" required>
              </div>
            </div>
          </div>
          </div>
        </form>
      </div>
      <div class="footer" style="text-align:right;background-color:#000;padding-right:10px;">
        <button type="submit" class="btn btn-danger" style="color:black;weight:bold;">I am watching you!</button>
      </div>
    </div>
  </div>
</div>
<!-- **************************OVERLORD********************************* -->

<!-- Modal request -->
<?php if($this->session->userdata('urights' == '1.6.1')){?>

 <?php foreach ($req as $request) : ?>
<div class="modal fade" id="requestModal<?php echo $request->lgusid; ?>" tabindex="-1" aria-labelledby="requestModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="requestModalLabel">LGU Credential Request</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row mt-3 ">
          <div class="col-md-8 mx-auto"><label class="labels">LGU Employee Name</label>
              <input name="fnam" type="text" class="form-control" value="<?php echo $request->fname . ' ' . $request->mname . ' ' . $request->lname; ?>" readonly>
          </div>
          <div class="col-md-8 mx-auto"><label class="labels">Sex</label>
            <input name="sex" type="text" class="form-control" value="<?php echo $request->sex;?>" readonly>
          </div>
          <div class="col-md-8 mx-auto"><label class="labels">Local Government Unit</label>
            <input name="lgu" type="text" class="form-control" value="<?php echo $request->lgu ; ?>" readonly>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="disapproveButton">Disapprove</button>
        <button type="button" class="btn btn-primary" id="approveButton">Approve</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
<?php } ?>
<!-- end for modal request -->
<!-- script for lgu user req -->
<script>
    $(document).ready(function () {
        $("#approveButton").click(function () {
            updateStatus($(this).data('lgusid'), 1);
        });

        $("#disapproveButton").click(function () {
            updateStatus($(this).data('lgusid'), 2);
        });

        function updateStatus(lgusid, status) {
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('Auth/updateStatus'); ?>",
                data: { lgusid: lgusid, status: status },
                success: function (response) {
                    if (response.success) {
                        alert("Thank you for your response.");
                        // Close the modal or perform any other actions
                    } else {
                        alert("Failed to update status. Please try again.");
                    }
                },
                error: function () {
                    alert("An error occurred while updating the status.");
                }
            });
        }
    });
</script>

<!-- end script for lgu user req -->
