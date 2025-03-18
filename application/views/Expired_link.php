<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Error Page</title>
    <link rel="stylesheet" href="assets/cssbhive/Expired_link.css" />
    <script
      src="https://kit.fontawesome.com/66aa7c98b3.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <div class="gif">
        <img src="assets/img/giphy1.gif" alt="gif_ing" />
      </div>
      <div class="content">
        <h1 class="main-heading">Oooppss! This link is expired.</h1>
        <p>
          Your account is activated this URL is not valid anymore
        </p>
        <a href="<?php echo base_url('Auth/index'); ?>" target="blank">
          <button>Go to 4bhive.com <i class="far fa-hand-point-right"></i></button>
        </a>
      </div>
    </div>
  </body>
</html>
