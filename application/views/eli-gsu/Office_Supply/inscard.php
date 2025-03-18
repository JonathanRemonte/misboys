<a type="button" class="btn btn-outline-primary m-3" href ="<?php echo base_url('scard'); ?>"><i class="fa-solid fa-arrow-left"></i></a>
<div class="d-flex text-center text-secondary mx-3 py-2 "><h3>Stocks</h3></div>
   <div class="bg-primary">
          <div class="row text-white">
                <div class="col-md">Item:<?php echo $stockid->itemname;?></div>
                <div class="col-md">Description:<?php echo $stockid->descrip;?></div>
                <div class="col-md">Unit of Measurement:<?php echo $stockid->unit;?></div>
          </div>
            <div class="row text-white">
                <div class="col-sm">Reference Number:<?php echo $stockid->refnum;?></div>
                <div class="col-8">Price:<?php echo $stockid->price;?></div>
          </div>
     </div>
        <table class="table table-bordered table-striped table-primary">
  <thead>
    <tr>
        
      <th scope="col">Date</th>
      <th scope="col">Reference</th>
      <th scope="col">Receipt</th>
      <th scope="col">Issue</th>
      <th scope="col">Issue Name</th>
      <th scope="col">Balance</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($stocks1 as $row):
            $item = $stockid->itemname;
            if($item == $row->item_name)
            {
            ?>
        <tr>
        <th scope="row"><?php echo $row->date_received; ?></th>
          <td><?php echo $row->refnum; ?></td>
          <td><?php echo $row->refnum; ?></td>
          <td><?php echo $row->quantity; ?></td>
          <td><?php echo $row->employee_name; ?></td>
          <td><?php echo $row->bal; ?></td>
        </tr>
      </tbody>
      <?php } endforeach; ?>
    </table>

        </div>
      </div>