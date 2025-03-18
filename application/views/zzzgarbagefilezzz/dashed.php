<body style="background-color:#eec793">
  <div class="container">
    <br><br>
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
          <div style="text-align:right;margin-right:50px;">
            <button type="" class="btn btn-primary" value=""><span class="glyphicon glyphicon-arrow">Back</span></button>
          </div>
          <form method="post" action="<?php echo site_url('Auth/update'); ?>/<?php echo $row->fid; ?>">
            <div class="mb-3">
              <label for="firm" class="form-label">Firm</label>
              <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required autofocus>
            </div>
            <div class="mb-3">
              <label for="fprov" class="form-label">Province</label>
              <input type="text" class="form-control" name="fprov" value="<?php echo $row->fprov; ?>" required>
            </div>
            <div class="mb-3" hidden>
              <label for="fstat" class="form-label">fstat</label>
              <input type="text" class="form-control" name="fstat" value="1" >
            </div>
            <div style="text-align:right;margin-right:50px;">
              <button type="submit" class="btn btn-primary" value="save">Submit</button>
            </div>
          </form>
        </div>
        <div class="col-md-2">
        </div>
      </div>
    </div>
  </div><!-- container -->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  -->
</body>
</html>
