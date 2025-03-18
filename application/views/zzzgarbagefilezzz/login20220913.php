<!-- 4bhive all rights reserved for EMB MIMAROPA.
  code and name coined by TheMan
  Proposed by RD Joe, Csez and Yuri on 27Jan2022 @1300 hrs -->

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

    <!-- Include the JS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/5.1.3-bootstrap.bundle.min.js"></script>

    <style>
      * { box-sizing: border-box; }

      body { margin: 0; font-family: Arial; font-size: 17px; }

      #myVideo { position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%; }

      .content { position: fixed; bottom: 1; background: rgba(0, 33, 10, 0.5); color: #f1f1f1; width: 20%; padding: 20px; }

      .down { width: 95%; padding-left:80%;padding-top:30%; color:#abcdab;}

    </style>
  </head>
  <body>

    <video autoplay muted loop id="myVideo" style="z-index:-1;">
      <?php $backrand=rand(1,4); ?>
      <source src="<?php echo base_url() ?>/assets/vid/hexa<?php echo $backrand; ?>.mp4" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>

    <div class="container" style="text-align:center;padding-top:10%;">
      <div class="content" style="">
        <img src="assets/img/4BHiveLogoTrans.png" alt="" width="35%" style="text-align:center;padding-top:10px;">
        <h2>EMB MIMAROPA</h2>
        <!--?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?-->
        <form action="" method="POST">
          <div class="from-group" style="padding-bottom:10px;padding-top:5px;">
            <input class="form-control" name="uname" id="uname" type="text" placeholder="Username" autofocus>
          </div>
          <div class="from-group">
            <input class="form-control" name="upass" id="upass" type="password" placeholder="Password">
          </div>
          <div class="hidden">
            <?php date_default_timezone_set('Asia/Manila'); echo date('Y-m-d H:i:s'); ?>
          </div>
          <div class="from-group text-center" style="padding-top:30px;padding-bottom:2%;">
            <button class="btn btn-primary" name="">Access!</button>
          </div>
          <div class="from-group text-center" style="font-size:13px;">
            <span>Not registered? <a href="<?php echo base_url(); ?>index.php/auth/enlist" style="font-color:black;">Click me.</a></span>
          </div>
        </form>
      </div>
    </div>

    <div class="down">
      <?php if($backrand==1){ ?>
        <h6>Background | Hexagons [4K]</h6><h6>by: SLO94</h6>
        <h6><a href="https://www.youtube.com/watch?v=rledagGwPMA" target="_blank" style="color:#abcdab;">Click me to try it.</a></h6>
      <?php }elseif($backrand==2){ ?>
        <h6>Abstract Hexagon VFX Motion Graphic - Free HD Wallpaper, Background</h6><h6>by: NeonXMD</h6>
        <h6><a href="https://www.youtube.com/watch?v=jxvzgsM76wA" target="_blank" style="color:#abcdab;">Click me to try it.</a></h6>
      <?php }elseif($backrand==3){ ?>
        <h6>Abstract Sci-fi Hexagon Motion Graphic - HD VFX Wallpaper, Background</h6><h6>by: NeonXMD</h6>
        <h6><a href="https://www.youtube.com/watch?v=1JizRheo51I" target="_blank" style="color:#abcdab;">Click me to try it.</a></h6>
      <?php }elseif($backrand==4){ ?>
        <h6>Hexagon Waves Animation Relaxing Background Screensaver _ Cool Background</h6><h6>by: AMG4K</h6>
        <h6><a href="https://www.youtube.com/watch?v=cxakZwdG8d4" target="_blank" style="color:#abcdab;">Click me to try it.</a></h6>
      <?php } ?>
    </div>

    <div class="copyright">
      &copy; Copyright <strong><span>4BHive EMB MIMAROPA</span></strong>. All Rights Reserved 2022
    </div>
    <div class="credits">
      Designed by TheMan&trade;
      <?php $version = phpversion(); print 'PHP: '.$version; echo ' | CI: '.CI_VERSION; ?>
    </div>

  </body>
</html>
