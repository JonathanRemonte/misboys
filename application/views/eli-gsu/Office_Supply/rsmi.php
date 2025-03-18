
<!-- TABLE -->
<div class="d-flex justify-content-start text-secondary mx-3 py-2 "><h3>RSMI</h3></div>
  
                     
<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">Item Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php foreach ($ris1 as $row): 
        $originalrecDate = $row->date_received;
        $new_recDate = date("M d, Y", strtotime($originalrecDate));

    ?>
      <td><?php echo $row->item_name; ?></td>
      <td><?php echo $row->quantity; ?></td>
      <td><?php echo $row->price; ?></td>
      <td><?php echo $new_recDate; ?></td>
    </tr>
  </tbody>
  <?php endforeach; ?>
</table>

    <script>

    </script>