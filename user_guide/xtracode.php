<!-- datatable -->
<!-- <table id="" class="table table-striped table-hover table-dark" style=""> -->
  <thead class="" style="">
    <tr>
      <th scope="col">#</th>
      <th scope="col">4Bid</th>
      <th scope="col">Firm</th>
      <th scope="col">Type</th>
      <th scope="col">Province</th>
      <th scope="col">Municipality</th>
      <th scope="col">Barangay</th>
      <th scope="col">Latitude</th>
      <th scope="col">Longitude</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $fcnt=0;
     foreach($result as $row) {?>
    <tr>
      <th scope="row"><?php echo $fcnt+=1; ?></th>
      <td><?php echo $row->fid; ?></td>
      <td><?php echo $row->firm; ?></td>
      <td><?php echo $row->ftyp; ?></td>
      <td><?php echo $row->fprov; ?></td>
      <td><?php echo $row->fmun; ?></td>
      <td><?php echo $row->fbrgy; ?></td>
      <td><?php echo $row->flat; ?></td>
      <td><?php echo $row->flon; ?></td>
      <?php if ($_SESSION['urights']==4){?>
      <td>
        <a href="<?php echo site_url(''); ?>/<?php echo $row->fid; ?>"><button type="button" class="btn btn-sm btn-success">Details</button></a>
        |
        <a href="<?php echo site_url('') ?>/<?php echo $row->fid; ?>"><button type="button" class="btn btn-sm btn-danger">Others</button></a></td><?php
      }else{
        ?>
      <td>
        <a href="<?php echo site_url('Auth/edit'); ?>/<?php echo $row->fid; ?>"><button type="button" class="btn btn-sm btn-warning">Edit</button></a>
        <a href="<?php echo site_url('Auth/edfs') ?>/<?php echo $row->fid; ?>"><button type="button" class="btn btn-sm btn-danger">Hide</button></a>
      </td>
    <?php } ?>
    </tr>
  <?php } ?>
  </tbody>
</table>
<!-- <script type="text/javascript">
  $(document).ready( function () {
    $('#firmdashtab').DataTable();
  } );
</script> -->
<!-- datatable -->
