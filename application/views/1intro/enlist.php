<!-- 4bhive all rights reserved for EMB MIMAROPA.
  code and name coined by TheMan
  Proposed by RD Joe, Csez and Yuri on 27Jan2022 @1300 hrs -->

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Include the CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/4.3.1bootstrap.min.css">
    <link href="<?php echo base_url(); ?>assets/style/design.css" rel="stylesheet">

    <!-- Include the JS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/5.1.3-bootstrap.bundle.min.js"></script>

    <!-- unameduplicate -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-migrate-3.1.0.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script> -->

    <style>
      * { box-sizing: border-box; }
      body { margin: 0; font-family: Arial; font-size: 17px; }
      #myVideo { position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%; }
      .content {  background: rgba(0, 33, 10, 0.5); margin:20px; color: #f1f1f1; width: 43%; padding: 20px; }
      .divdist{ padding-top:8px; margin-bottom:0;}
      .down { width: 95%; padding-left:80%;padding-top:38%; z-index: -2; color:#abcdab;}
      .divcenter {position: absolute;}
      .form-group input.form-control { margin-bottom: 0;}
      .space{  padding-left: 1px;padding-right: 0;}
    </style>
  <link rel="icon" href="<?php echo base_url(); ?>assets/img/4BHiveLogo1.png" type="image/icon type">

  </head>
  <body style="overflow:hidden;">

    <video autoplay muted loop id="myVideo" style="z-index:-1;">
      <source src="<?php echo base_url() ?>/assets/vid/enlistvid1.mp4" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>
    <div class="notifications"></div>

<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
<div class="col-sm-5">
  <div class="row">
    <div class="col-sm-12">

      <div class="container" id="showEn">
        <div class="content" style=" text-align:center;padding-top:1%;">

        <div id="divcenter" >
          <img src="<?php echo base_url(); ?>assets/img/4BHiveLogoTrans.png" alt="" width="20%">
          <h3>Hive Employee Registration.</h3>
          <!-- <p>Fill in the details and be one of us.</p> -->
        </div>

        <?php
        // echo validation_errors('<div class="alert alert-danger">','</div>');
        ?>
        <form id="enlistform" action="" method="POST">
          <div class="row">
            <div class="form-group col-md-4 divdist space">
              <input class="form-control" name="fname" id="fname" type="text" placeholder="First Name" required>
              <span id="msg"></span>
            </div>
            <div class="form-group col-md-4 divdist space">
              <input class="form-control" name="mname" id="mname" type="text" placeholder="Middle Name">
              <span id="msg"></span>
            </div>
            <div class="form-group col-md-4 divdist space">
              <input class="form-control" name="lname" id="lname" type="text" placeholder="Last Name" required>
              <span id="msg"></span>
            </div>
          </div>
          <input class="form-control" name="uname" id="uname" type="hidden" placeholder="Username" required>
          <div class="row">
              <!-- <div class="from-group divdist" > -->

                <!-- <span id="msg"></span> -->
              <!-- </div> -->
              <div class="form-group col-md-4 divdist space" >
                <select class="form-control" name="udiv" id="div" required>
                  <option value="" selected="selected">Select Division</option>
                </select>
              </div>
              <div class="from-group col-md-4 divdist space">
                <select class="form-control" name="usec" id="sec" required>
                    <option value="" selected="selected">Please select division first</option>
                  </select>
              </div>
              <div class="from-group col-md-4 divdist space">
                <select class="form-control" name="estat" id="estat" required>
                    <option value="">Employee Status</option>
                    <option value="Permanent">Permanent</option>
                    <option value="Contractual">Contractual</option>
                  </select>
              </div>
          </div>
          <div class="row">
              <div class="from-group divdist">
                <input class="form-control" name="position" id="position" type="text" placeholder="Position">
              </div>
              <div class="from-group divdist">
                <input class="form-control" name="uemail" id="uemail" type="email" placeholder="Email">
              </div>
              <div class="from-group divdist">
                <select class="form-control" name="usex" id="usex" required>
                  <option value="">Please choose</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="prefer not to">Prefer not to say</option>
                </select>
              </div>
              <div class="from-group divdist">
                <input class="form-control" name="uphone" id="uphone" type="text" placeholder="Phone">
              </div>
              <div class="from-group divdist" hidden>
                <label for="udaten">Date:</label>
                <input class="form-control" name="udaten" id="udaten" value="<?php date_default_timezone_set('Asia/Manila'); echo date('YMd H:i:s'); ?>">
              </div>

              <div class="from-group text-center buttons" style="padding-top:25px;">
                <button class="btn btn-primary custom-btn" name="" >Enlist!</button>
                <a type="button" href="<?php echo base_url(); ?>blackhive" class="btn btn-warning" name="enlist" id="showCan">Cancel</a>
              </div>
            </form>
          </div>

        <!-- help -->
        <!-- <style media="screen"> #target { display:none; } #hide { display:none; }</style>
        <div class="from-group text-center" style="font-size:13px;padding-top:0px;">
          <button id="show" class="btn btn-danger">Need Help?</button>
        </div> -->
        <!-- help -->

      <!-- </div> -->
      <!-- content -->
      <!-- </div> -->
      <!-- container -->


    <!-- </div> -->

    <!-- script for toast -->
    <!-- <script>
        const notifications = document.querySelector(".notifications");
        const buttons = document.querySelectorAll(".buttons .custom-btn");

        const toastDetails = {
            timer: 5000,
            success: {
                icon: 'fa-circle-check',
                text: 'Success: File an IIS Support Ticket to the MIS, Thank you!.',
            },
            error: {
                icon: 'fa-circle-xmark',
                text: 'Error: The Password field must be at least 3 characters in length..',
            }
        };

        const removeToast = (toast) => {
            toast.classList.add("hide");
            if (toast.timeoutId) clearTimeout(toast.timeoutId);
            setTimeout(() => toast.remove(), 500);
        };

        const createToast = (id) => {
            const { icon, text } = toastDetails[id];
            const toast = document.createElement("li");
            toast.className = `toast ${id}`;
            toast.innerHTML = `<div class="column">
                                 <i class="fa-solid ${icon}"></i>
                                 <span>${text}</span>
                              </div>
                              <i class="fa-solid fa-xmark" onclick="removeToast(this.parentElement)"></i>`;
            notifications.appendChild(toast);
            toast.timeoutId = setTimeout(() => removeToast(toast), toastDetails.timer);
        };

        buttons.forEach(btn => {
            btn.addEventListener("click", () => createToast(btn.id));
        });

        const toastMessage = '<?= $this->session->tempdata("toast_message"); ?>';
        if (toastMessage) {
            createToast(toastMessage);

            // console.log ('yes')
        }
    </script> -->

    <!-- end -->

    <!-- <div class="col-sm-12" id="target" style="padding-top:7%;padding-left:2%;">
      <div class="container" >
        <div class="content"> -->

          <!-- <div class="col-sm-12" style="margin-top:-23px;"> -->
            <!-- <form method="post" action="<?php echo site_url('Auth/adhelp') ?>/<?php echo $val='enlist' ?>" style="margin-top:-23px;">
              <h3 style="text-align:center;color:orange;">Help Center</h3>
              <span style="font-size:14px;"><center>To serve you better, please provide the information properly.</center></span>
              <div class="col-sm-12" style="padding-bottom:10px;padding-top:10px;">
                <input type="text" class="form-control" name="hnam" value="" placeholder="Name here ..." required>
              </div>
              <div class="col-sm-12" style="padding-bottom:10px;
              ">
                <input type="text" class="form-control" name="hnum" value="" placeholder="Contact number here ..." required>
              </div>
              <div class="col-sm-12" style="padding-bottom:10px;">
                <input type="email" class="form-control" name="heml" value="" placeholder="Email here ..." required>
              </div>
              <div class="col-sm-12" style="padding-bottom:10px;">
                <textarea class="form-control" name="hiss" rows="9" cols="60" placeholder="The issue encountered here ..." required></textarea>
              </div>
              <div class="from-group text-center" style="padding-top:45px;">
                <button class="btn btn-primary">Submit</button>
              </div>
            </form>
            <div class="from-group text-center">
              <button id="hide" class="btn btn-danger" title="Show Registration">Hide Help...</button>
            </div> -->
          <!-- </div> -->

        </div>
      </div>
    </div>

  </div>
</div>
</div>
<script type="text/javascript">
  $('#show').click(function()
  {
    $('#target').show(400);
    $('#show').hide(0);
    $('#hide').show(200);
    $('#showCan').hide(200);
    $('#showEn').hide(200);
  });

  $('#hide').click(function() { $('#target').hide(400); $('#show').show(0); $('#hide').hide(200); $('#showCan').show(200); $('#showEn').show(200); });
</script>

    <div class="down">
      <h6>Video Background Full HD Hexagon Effect</h6>
      <h6>by: FIMPRODUCCIONES7</h6>
      <h6><a href="https://www.youtube.com/watch?v=nq02D6i4h9c" target="_blank" style="color:#abcdab;">Click me to try it.</a></h6>
    </div>

  </body>
</html>

<!-- jquery triggered on input event, check the uname duplicate in the db -->
<!--script type="text/javascript">
	$(document).ready(function() {
		$("#uname").on("input", function(e) {
			$('#msg').hide();
			if ($('#uname').val() == null || $('#uname').val() == "") {
				$('#msg').show();
				$("#msg").html("Username is a required field.").css("color", "red");
			} else {
				$.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>Auth/unameduplicate",
					data: $('#enlistform').serialize(),
					dataType: "html",
					cache: false,
					success: function(msg) {
						$('#msg').show();
						$("#msg").html(msg);
					},
					error: function(jqXHR, textStatus, errorThrown) {
						$('#msg').show();
						$("#msg").html(textStatus + " " + errorThrown);
					}
				});
			}
		});
	});
</script-->

<script>
var divObject = {
  "ORD": { ["No Section/Unit"]: [""], "EEIU": [""], "Laboratory": [""], "Legal": [""], "ORD": [""], "PISMU": [""], "EMS  Marinduque": [""], "PEMU Occidental Mindoro": [""], "PEMU Oriental Mindoro": [""], "PEMU Palawan": [""], "EMS  Romblon": [""] },
  "FAD": { ["No Section/Unit"]: [""], ["Finance"]: [""], "HR": [""], "PGS": [""], "Records": [""] },
  "EMED": { ["No Section/Unit"]: [""], ["AMTSS"]: [""], "CHWM": [""], "ESWM": [""], "WAQM": [""] },
  "CPD": { ["No Section/Unit"]: [""], "AWP": [""], "CHWP": [""], "EIA": [""] }
}
window.onload = function() {
  var divSel = document.getElementById("div");
  var secSel = document.getElementById("sec");
  for (var x in divObject) {
    divSel.options[divSel.options.length] = new Option(x, x);
  }
  divSel.onchange = function() {
    secSel.length = 1;
    //display correct values
    for (var y in divObject[this.value]) {
      secSel.options[secSel.options.length] = new Option(y, y);
    }
  }
}
</script>
