<body>

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url(); ?>index">
          <i class="bi bi-hexagon"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" href="javascript:void(0);" onclick="history.back(); window.close();">
          <i class="bi bi-arrow-bar-left"></i><span>Back to Table of Firms</span><!--i class="bi bi-chevron-down ms-auto"></i-->
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" href="javascript:void(0);" onclick="history.back();">
          <i class="bi bi-arrow-left"></i><span>Back to Profile</span><!--i class="bi bi-chevron-down ms-auto"></i-->
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#tables-nav" href="">
          <i class="bi bi-images"></i><span>Gallery</span><!--i class="bi bi-chevron-down ms-auto"></i-->
        </a>
      </li><!-- End Tables Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <section class="section profile" style="margin-left:-3.5%;">

      <div class="col-md-12">
        <div class="row">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body">
                <div class="" style="padding-top:10px;"><h5>Photos</h5></div>
                <?php
                $slide_number = 1; // Initialize the slide number
                $total_slides = count($upgal);
                ?>
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="">
                  <div class="carousel-inner">
                    <?php foreach ($upgal as $rogal): ?>
                      <div class="carousel-item <?php echo ($slide_number == 1 ? 'active' : ''); ?>">
                        <img src="<?php echo base_url(); ?>upglobal/upfirmgllry/<?php echo $rogal->filename; ?>" class="d-block w-100" alt="Slide <?php echo $slide_number; ?> of <?php echo $total_slides; ?>" width="800" height="600">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Slide <?php echo $slide_number; ?></h5>
                          <p><?php echo $rogal->filename; ?></p>
                        </div>
                      </div>
                      <?php $slide_number++; ?>
                    <?php endforeach; ?>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </a>
                </div>

              </div>
            </div>
          </div>
          <!-- photo -->

          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <div class="" style="padding-top:10px;"><h5>Profile Picture</h5></div>

                <?php foreach ($getgal as $rgal) {
                  if($rgal->firimg==''){ ?>
                    <img class="d-block w-100" style="width:600px;height:300px;padding-top:5%;" src="<?php echo file_exists(base_url() . 'upglobal/upfirmprof/' . $row->firimg) ? base_url() . 'upglobal/upfirmprof/' . $row->firimg : base_url() . 'assets/img/4BHiveLogo1.png'; ?>" alt="Alternative Text">
                  <?php }else{ ?>
                    <img class="d-block w-100" style="width:600px;height:300px;padding-top:5%;" src="<?php echo base_url().'upglobal/upfirmprof/'.$rgal->firimg; ?>" alt="Alternative Text">
                  <?php }}?>

              </div>
            </div>

            <div class="card">
              <div class="card-body" style="padding-top:20px;margin-bottom:-15px;">
                <table class="table table-striped table-hover tab1">
                  <tbody><tr><td rowspan="2"><p style="text-align:justify;margin-bottom:-3px;">
                    <?php foreach ($getfdes as $rofdes) { echo $rofdes->firdes; } ?>
                  </p></td>
                    </th></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- photo -->

        </div><!-- row -->
      </div><!-- col-md-12 -->

      <style media="screen">
        .thumbnail-carousel { overflow-x:scroll; white-space:nowrap; scrollbar-width:thin; scrollbar-color:#ddd #fff; overflow-y:hidden; }
        .thumbnail-inner { display: inline-flex;white-space: nowrap;transition: transform 0.5s ease; }
        .thumbnail-item { display: inline-block;margin-right: 10px; }
        .thumbnail-item:last-child { margin-right: 0; }
        .thumbnail-item img { width: 100px;height: 60px;object-fit: cover; }
        .thumbnail-prev, .vthumbnail-next { position: absolute;top: 50%;transform: translateY(-50%);width: 30px;height: 30px;
                  background-color: rgba(0, 0, 0, 0.5);color: #fff;border: none;border-radius: 50%;cursor: pointer; }
        .thumbnail-prev { left: 10px; }
        .thumbnail-next { right: 10px; }
      </style>

    <div class="col-md-12">
      <div class="row">
        <!-- photos -->
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <div class="thumbnail-carousel" style="padding-top:20px;">
                <div class="thumbnail-inner">
                  <?php foreach ($upgal as $rogal) { ?>
                    <div class="thumbnail-item">
                      <a class="open-homeEvents" data-id="subcat" href="" data-bs-toggle="modal" data-bs-target="#ungalpho<?php echo $rogal->galid; ?>" style="font-weight:bold;" id="niko">
                        <img class="thumbnail" src="<?php echo base_url(); ?>upglobal/upfirmgllry/<?php echo $rogal->filename; ?>" alt="<?php echo $rogal->filename; ?>"></a>
                      </a>
                    </div>

                    <!-- ungallpho -->
                    <style media="screen">
                      .modal-body .image-container { position:relative; padding-bottom:75%; /* 4:3 aspect ratio */ }
                      .modal-body .image-container img { position:absolute; top:0; left:0; width:100%; height:100%; object-fit:contain; }
                    </style>
                    <div class="modal fade" id="ungalpho<?php echo $rogal->galid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header" style="<?php if($_SESSION['urights']==8.1||$_SESSION['urights']==1){ ?>background-color:#DF362D; <?php }else{ ?> background-color:#5cb85c; <?php } ?>">
                            <h5 class="modal-title" id="exampleModalLabel"><b><?php if($_SESSION['urights']==8.1||$_SESSION['urights']==1){ ?> Remove <?php }else{ ?> <?php } ?> Image No. <?php echo $rogal->galid; ?>: <?php echo $rogal->filename; ?></b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="<?php echo site_url('Auth/delgalpho') ?>/<?php echo $rogal->fid; ?>/<?php echo $rogal->galid; ?>">
                              <div class="image-container">
                                <img src="<?php echo base_url(); ?>upglobal/upfirmgllry/<?php echo $rogal->filename; ?>" alt="<?php echo $rogal->filename; ?>">
                              </div>
                              <div class="" hidden>
                                <input type="text" class="form-control" name="fid" value="<?php echo $rogal->fid; ?>" required>
                                <input type="text" class="form-control" name="upterm" value="ungalpho" required>
                              </div>
                              <div class="" hidden>
                                <input type="text" class="form-control" name="filename" value="<?php echo $rogal->filename; ?>" required>
                              </div>
                              <?php if($_SESSION['urights']==8.1||$_SESSION['urights']==1){ ?>
                              <div class="footer" style="text-align:right;">
                                <button type="submit" class="btn btn-danger">Remove</button>
                              </div>
                              <?php }else{ } ?>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ungallpho -->

                  <?php } ?>
                </div>
                <!-- <button class="thumbnail-prev"><i class="fas fa-chevron-left"></i></button>
                <button class="thumbnail-next"><i class="fas fa-chevron-right"></i></button> -->
              </div>
            </div>
          </div>
        </div>

        <script>
          const thumbnailInner = document.querySelector('.thumbnail-inner');
          const thumbnailPrev = document.querySelector('.thumbnail-prev');
          const thumbnailNext = document.querySelector('.thumbnail-next');
          let thumbnailIndex = 0;

          thumbnailPrev.addEventListener('click', () => {
            thumbnailIndex = Math.max(thumbnailIndex - 1, 0);
            thumbnailInner.style.transform = `translateX(-${thumbnailIndex * 110}px)`;
          });

          thumbnailNext.addEventListener('click', () => {
            thumbnailIndex = Math.min(thumbnailIndex + 1, thumbnailInner.children.length - 5);
            thumbnailInner.style.transform = `translateX(-${thumbnailIndex * 110}px)`;
          });
        </script>
        <!-- photos -->

      </div>
    </div>

    </section>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</body>

  <script type="text/javascript">$(document).on("click", ".open-homeEvents", function () {
     var eventId = $(this).data('id');
     $(".modal-body #eventId").val( eventId );
     $('#idHolder').html( eventId );
  });</script>
