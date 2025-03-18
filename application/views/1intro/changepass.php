
<link href="<?php echo base_url(); ?>assets/css/fontgoogleapi.css" rel="preconnect">

<!-- Template Main CSS File -->
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<style>
  * { box-sizing: border-box; }
  body { margin: 0; font-family: Arial; font-size: 17px; }
  #myVideo { position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%; }
  .content { position: fixed; middle: 0; background: rgba(33, 20, 10, 0.5); color: #f1f1f1; width: 20%; padding: 20px; }
  .down { width: 95%; padding-left:80%;padding-top:30%; color:#abcdab;}

  /* .modal-dialog {
       background-color: rgba(0,0,0,.0001) !important;
  } */
</style>

<!-- <main id="main" class="main"> -->

  <body class="" style="background-color:gray;">

    <video autoplay muted loop id="myVideo" style="z-index:-1;">
      <?php $backrand=rand(1,2); ?>
      <source src="<?php echo base_url() ?>/assets/vid/cpass<?php echo $backrand; ?>.mp4" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>

    <!-- <div class="modal fade" id="" tabindex="-1" aria-hidden="true" style=""> -->
    <section>

      <div class="modal-dialog" style="z-index:3;">
        <div class="modal-content content">
          <div class="modal-header">
            <h5 class="modal-title" style="font-weight:bold">Change Password</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form method="post" action="<?php echo site_url('Auth/cpass') ?>" role="">
            <div class="modal-body">
              <div class="col-md-12">
                <div class="form-group" style="padding-bottom:10px;">
                  <input class="form-control" type="text" name="uname" id="cpuname" value="" placeholder="Username" required>
                </div>
                <div class="form-group" style="padding-bottom:10px;">
                  <input class="form-control" type="password" name="upass" id="cppass1" value="" placeholder="Password" required>
                  <input type="checkbox" onclick="siomaipass()" style=""><span style="font-size:13px;">Show Password</span>&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                <div class="form-group" style="">
                  <input class="form-control" type="password" name="upass2" id="cppass2" value="" placeholder="Confirm Password" required>
                  <span id="matchres" style="margin-top:-40px;padding-bottom:40px;color:orange;"></span><br/><br/>
                </div>
                <div class="" style="margin-top:-20px;">
                  <span style="font-size:20px;color:orange;font-weight:bold;">After clicking the Submit button, <br/>MIS will contact you shortly.</span>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <a type="button" class="btn btn-secondary" href="<?php echo base_url(); ?>">Close</a>
              <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">Basic Modal</button> -->
              <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#notmod">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </section>


      <div class="down">
        <?php if($backrand==1){ ?>
          <h6>Hologram City</h6><h6>by: John N. Mayer</h6>
          <h6><a href="https://www.youtube.com/watch?v=ktEQfxqMEFE" target="_blank" style="color:#abcdab;">Click me to try it.</a></h6>
        <?php }elseif($backrand==2){ ?>
          <h6>DIGITAL City</h6><h6>Eduart Muratov</h6>
          <h6><a href="https://www.youtube.com/watch?v=IngBUpp05JI" target="_blank" style="color:#abcdab;">Click me to try it.</a></h6>
        <?php } ?>
      </div>

  </body>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- password match -->
  <script type="text/javascript">
    let pass1 = document.querySelector('#cppass1'); let pass2 = document.querySelector('#cppass2'); let result = document.querySelector('#matchres');

    var sucalert='Password Matched';

    function checkPassword () { result.innerText = pass1.value == pass2.value ? 'Password Matched' : 'Password does not match!'; }
    pass1.addEventListener('keyup', () => { if (pass2.value.length != 0) checkPassword(); })
    pass2.addEventListener('keyup', checkPassword);
  </script>
  <!-- password match -->

  <!-- show password -->
  <script>
    function siomaipass() { var x = document.getElementById("cppass1");
      if (x.type === "password") { x.type = "text"; } else { x.type = "password"; } }
  </script>
  <!-- show password -->
