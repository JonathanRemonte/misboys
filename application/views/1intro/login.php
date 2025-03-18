<!DOCTYPE html>
<html>
  <head>
    <!-- These meta tags come first. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>4BHive Access</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/4BHiveLogo1.png" type="image/icon type">

    <!-- Include the CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/4.3.1bootstrap.min.css">
    <link href="<?php echo base_url(); ?>assets/style/design.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/login.css" rel="stylesheet">
    <!-- Include the JS -->
    <!-- <script src="<?php echo base_url(); ?>assets/js/jquery3.6.0.min.js"></script> -->
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- <script src="https://code.jquery.com/jquery-3.1.1.slim.js"></script> -->
    <!-- <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.slim.min.js"></script> -->
    <!-- <script src="<?php echo base_url(); ?>assets/js/5.1.3-bootstrap.bundle.min.js"></script> -->

    <!--fa-->
    <script src="<?php echo base_url(); ?>assets/js/5.0.6-fa-all.js"></script>

    <!-- login help -->
    <script src="<?php echo base_url(); ?>assets/js/loginHelp3.6.1jquery.min.js"></script>


    <style>

      #myVideo { position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%; }
      .content { position: fixed; bottom: 1; background: rgba(0, 33, 10, 0.5); color: #f1f1f1; width: 20%; padding: 20px; }
      .downer { font-size: .8em;}

      /* Apply these styles to the body element */
      body { margin: 0; padding: 0; font-family: Arial, sans-serif; /* Optional: Set your desired font */
        height: 100vh; /* Full viewport height */ width: 100%; /* Full width */ overflow-x: hidden; /* Optional: Hide horizontal overflow */
      }

      /* for message in activation acc */
      .success-message { background-color: #c4f2c4;}
      .error-message {background-color: #f2c4c4;}
    </style>

    <!-- for password match -->
    <!-- <style media="screen">
      #slide {
        /* (A) TURN INTO A BOX */
        background-color: rgba(200, 0, 0, 0.4); padding: 10px; border: 1px solid #b52110; color: #fff; text-align:center;
        /* (B) HIDDEN BY DEFAULT */ /* OUT OF SCREEN - SET THE POSITION AS YOU WISH */
        position: fixed; bottom: 5px; left: -999px;
        /* (C) CSS ANIMATION */ transition: all 0.5s; visibility: hidden;
      }
      /* (D) SHOW - BRING ELEMENT BACK ON SCREEN */ #slide.show { left: 5px; visibility: visible; }
      /* input field */ input { padding: 10px 20px; margin-top: 10px; }
    </style> -->
    <!-- for password match -->

  </head>
  <body>

    <video autoplay muted loop id="myVideo" style="z-index:-1;">
      <?php $backrand=rand(1,4); ?>
      <source src="<?php echo base_url() ?>/assets/vid/hexa<?php echo $backrand; ?>.mp4" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>

    <div class="">
      <?php if($backrand==1){ ?>
        <h6>Background | Hexagons [4K] by: SLO94</h6>
        <h6><a href="https://www.youtube.com/watch?v=rledagGwPMA" target="_blank" style="color:#abcdab;">Click me to try it.</a></h6>
      <?php }elseif($backrand==2){ ?>
        <h6>Abstract Hexagon VFX Motion Graphic - Free HD Wallpaper, Background by: NeonXMD</h6>
        <h6><a href="https://www.youtube.com/watch?v=jxvzgsM76wA" target="_blank" style="color:#abcdab;">Click me to try it.</a></h6>
      <?php }elseif($backrand==3){ ?>
        <h6>Abstract Sci-fi Hexagon Motion Graphic - HD VFX Wallpaper, Background by: NeonXMD</h6>
        <h6><a href="https://www.youtube.com/watch?v=1JizRheo51I" target="_blank" style="color:#abcdab;">Click me to try it.</a></h6>
      <?php }elseif($backrand==4){ ?>
        <h6>Hexagon Waves Animation Relaxing Background Screensaver _ Cool Background by: AMG4K</h6>
        <h6><a href="https://www.youtube.com/watch?v=cxakZwdG8d4" target="_blank" style="color:#abcdab;">Click me to try it.</a></h6>
      <?php } ?>
    </div>

    <div class="notifications"></div>
    <!-- login -->
    <div class="container" style="text-align:center;" id="showEnLog">
      <div class="login-box" style="margin-left: 8.5em;">
        <img src="assets/img/4BHiveLogoTrans.png" alt="" width="35%" style="text-align:center;padding-bottom:10px;">
        <h2>EMB MIMAROPA</h2>

      <?php
        // if($this->session->tempdata('toast_message')){ ?>
        <?php
        // }
      ?><b>
          <!-- <div class="container"> -->
            <!-- flashdata for activated successfully -->
            <!-- <?php if ($this->session->flashdata('message')): ?>
                <div class="message <?php echo $this->session->flashdata('message_type'); ?>">
                    <?php echo $this->session->flashdata('message'); ?>
                </div>
            <?php endif; ?></br> -->
          <!-- </div> -->
          </b>
        <form action="" method="POST">
        <div class="user-box">
            <input type="text" name="uname" id="uname" value="<?= set_value('uname', $this->session->tempdata('ic_username'));?>" required>
            <label>Username</label>
        </div>
        <div class="user-box">
            <input type="password" name="upass" id="upass" required>
            <label>Password</label>
        </div>
        <div>
            <input type="checkbox" onclick="myFunction()">
            <span style="font-size:13px;">Show Password</span>
            <a type="button" href="Auth/changepass" style="font-size:13px;">Forgot Password</a>
        </div>
        <div class="hidden">
            <?php date_default_timezone_set('Asia/Manila'); echo date('Y-m-d H:i:s'); ?>
        </div>
        <div class="buttons">
            <button class="custom-btn btn-3" id="login-button"><span>SIGN IN</span></button>
        </div>
        <!-- <div class="from-group text-center" style="font-size:13px;padding-top:10px;">
            <span>Not registered? <a href="enlist" style="font-color:black;">Click me.</a></span>
        </div> -->
    </form>
    <script>
        const notifications = document.querySelector(".notifications");
        const buttons = document.querySelectorAll(".buttons .custom-btn");

        const toastDetails = {
            timer: 5000,
            success: {
                icon: 'fa-circle-check',
                text: 'Success: File an IIS Support Ticket to the MIS and wait for the approval, Thank you!',
            },
            error: {
                icon: 'fa-circle-xmark',
                text: 'Error: Invalid credentials.',
            }
        };

          const removeToast = (toast) => {
          const toastElement = toast.closest('.toast');
          if (toastElement) {
            toastElement.classList.add('hide');
            if (toastElement.timeoutId) clearTimeout(toastElement.timeoutId);
            setTimeout(() => {
              toastElement.remove();
            }, 500);
          }
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
            setTimeout(() => {
              toast.classList.add('show');
            }, 100);
        };

        buttons.forEach(btn => {
            btn.addEventListener("click", () => createToast(btn.id));
        });

        const toastMessage = '<?= $this->session->tempdata("toast_message"); ?>';
        if (toastMessage) {
            createToast(toastMessage);

            // console.log ('yes')
        }
    </script>


        <!-- help -->
        <style media="screen"> #targetlog { display:none; } #hidelog { display:none; }</style>
        <div class="from-group text-center" style="font-size:13px;padding-top:0px;">
          <button id="showlog" class="btn btn-danger">Need Help?</button>
        </div>
        <!-- help -->

      </div>
    </div>
    <!-- login -->

    <div class="col-sm-12" id="targetlog">
      <div class="container">
        <div class="content" style="margin-top:-30px;">

          <!-- <div class="col-sm-12" style="margin-top:-23px;"> -->

          <?php
		    	if(validation_errors()){
		    		?>
		    		<div class="alert alert-info text-center">
		    			<?php echo validation_errors(); ?>
		    		</div>
		    		<?php
		    	}

				if($this->session->flashdata('message')){
					?>
					<div class="alert alert-info text-center">
						<?php echo $this->session->flashdata('message');
            ?>
					</div>
          <script>console.log('success');</script>
					<?php
					unset($_SESSION['message']);
				}
		    ?>
            <form method="post" action="<?php echo site_url('Auth/adhelp') ?>/<?php echo $val='login'; ?>" style="margin-top:-23px;">
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
              <div class="col-sm-12" style="margin-bottom:-10px;">
                <textarea class="form-control" name="hiss" rows="9" cols="60" placeholder="The issue encountered here ..." required></textarea>
              </div>
              <div class="from-group text-center">
                <button class="btn btn-primary">Submit</button>
              </div>
            </form>
            <div class="from-group text-center">
              <button id="hidelog" class="btn btn-danger" title="Show Registration">Hide Help...</button>
            </div>
          <!-- </div> -->

        </div>
      </div>
    </div>

    <script type="text/javascript">
      $('#showlog').click(function() { $('#targetlog').show(400); $('#showlog').hide(0); $('#hidelog').show(200); $('#showCanLog').hide(200); $('#showEnLog').hide(200); });
      $('#hidelog').click(function() { $('#targetlog').hide(400); $('#showlog').show(0); $('#hide').hide(200); $('#showCanLog').show(200); $('#showEnLog').show(200); });
    </script>

    <!-- password change -->
    <!-- <div id="slide">
      <div class="statusMsg"></div>
      <form method="" action="" role="" id="createform">
        <div class="col-md-12">
          <label style="margin-bottom:-10px;padding-top:20px;">Change Password</label>
          <div class="form-group">
            <input class="form-control" type="text" name="uname" id="cpuname" value="" placeholder="Username" required>
          </div>
          <div class="form-group">
            <input class="form-control" type="password" name="upass" id="cppass1" value="" placeholder="Password" required>
          </div>
          <div class="form-group">
            <input class="form-control" type="password" name="upass2" id="cppass2" value="" placeholder="Confirm Password" required>
          </div>
          <span id="matchres" style="margin-top:-40px;padding-bottom:40px;color:yellow;"></span><br/><br/>
          <span style="padding-top:10px;">After clicking the Submit button, <br/>MIS will contact you through Messenger.</span>
          <div class="form-group" style="padding-top:20px;text-align:center;">
            <button type="submit" class="btn btn-success" name="" onclick="toggle();checkEmpty();">Submit</button>
          </div>
        </div>
      </form>
    </div> -->
    <!-- password change -->

    <!-- save infor to db -->
    <script type="text/javascript">
      $('#createform').submit(function(event){
        event.preventDefault();
        $.ajax({
          url: "<?php echo base_url(); ?>Auth/cpass",
          data: $("#createform").serialize(),
          type: "post",
          async: false,
          dataType: 'json',
          success: function(response){ // $('createform')[0].reset();
          },
          error: function(){ alert('Error'); }
        });
        document.getElementById("cpuname").value = ""; document.getElementById("cppass1").value = ""; document.getElementById("cppass2").value = "";
        // alert('Successful!');
      });
    </script>
    <!-- save infor to db -->

    <!-- animate the div changepass -->
    <!-- <script type="text/javascript">function toggle () { document.getElementById("slide").classList.toggle("show"); }</script> -->
    <!-- animate the div changepass-->

    <div class="downer" style="position: fixed; bottom: 0; left: 0; width: 100%; display: flex; justify-content: center; align-items: flex-end; color: #264525;">
      <div class="" style="text-align:center;">
        &copy; Copyright <strong><span>4BHive EMB MIMAROPA</span></strong>. All Rights Reserved 2022 <br>
        Backend by <strong><span>TheMan&trade;</span></strong> and <strong><span>Eli Dizon</span></strong> | Design Contributions by <strong><span>R4BiT</span></strong> <br>
        <?php $version = phpversion(); print 'PHP: '.$version; echo ' | CI: '.CI_VERSION; ?>
      </div>
    </div>

  </body>
</html>

<!-- show password -->
<script>
  function myFunction() { var x = document.getElementById("upass");
    if (x.type === "password") { x.type = "text"; } else { x.type = "password"; } }
</script>
<!-- show password -->
