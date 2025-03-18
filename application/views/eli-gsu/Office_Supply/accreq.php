<div class="container">
<div class="d-flex justify-content-center text-secondary mx-3 py-3 "><h2>Employees Request</h2></div>   
   
<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">Employee Name</th>
      <th scope="col">Item Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Date Request</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php foreach ($req as $row): 
        $new_reqDate = date("M d,Y", strtotime($row->date_request));

    ?>
      <td><?php echo $row->employee_name; ?></td>
      <td><?php echo $row->item_name; ?></td>
      <td><?php echo $row->quantity; ?></td>
      <td><?php echo $new_reqDate; ?></td>

      <td>
      <button type="button" class="btn btn-success edit_button" data-toggle="modal" data-placement="right" data-target = "#confirm<?php echo $row->id; ?>" title="Confirm">Confirm</button>

          <div class="modal fade" id = "confirm<?php echo $row->id; ?>" tabindex = "-1" aria-labelledby="stock_ModalLabel"           aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                          <div class="modal-header alert-info">
                              <h5 class="modal-title">Attention!</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <form action="<?php echo base_url('req/'.$row->id); ?>" method="POST">
                          <div class="modal-body">
                                      <div class="form-group">
                                          <label>Are you sure you want to confirm this request?</label>
                                          <input type="hidden" required="required" name = "id" value="<?php echo $row->id;?>">
                                          <input type="hidden" required="required" name = "employee_name" value="<?php echo $row->employee_name;?>">
                                          <input type="hidden" required="required" name = "item_name" value="<?php echo $row->item_name;?>">
                                          <input type="hidden" required="required" name = "quantity" value="<?php echo $row->quantity;?>">
                                          <input type="hidden" required="required" name = "price" value="<?php echo $row->price;?>">
                                          <input type="hidden" required="required" name = "date_request" value="<?php echo $row->date_request;?>">
                                      </div>
                                      <div class="modal-footer">
                                          <input type="submit" class="btn btn-success" value="Yes" name="confirm" data-placement="right" title="Confirm">
                                          <input type="submit" class="btn btn-secondary" data-dismiss="modal" value = "No" name="deny" data-placement="right" title="Close">
                                      </div>
                          </div>
                </div>
              </div>
            </div>
                                      
                          </form>   

                  <button type="button" class="btn btn-danger edit_button" data-toggle="modal" data-placement="right" data-target = "#stock_card<?php echo $row->id; ?>" title="Reject">Reject</button>
                        <div class="modal fade" id = "stock_card<?php echo $row->id; ?>" tabindex = "-1" aria-labelledby="stock_ModalLabel"           aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header alert-danger">
                          <h5 class="modal-title">Attention!</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <!-- DENY BUTTON -->
                      <div class="modal-body">
                                  <div class="form-group">
                                      <label>Are you sure you want to reject this request?</label>
                                  </div>
                                  <div class="modal-footer">
                                    
                                  <form action="<?php echo base_url('del/'.$row->id); ?>" method="POST">
                                      <input type="submit" class="btn btn-danger" value="Yes" name="reject" data-placement="right" title="Confirm" onclick="function1()">
                                      <input type="submit" class="btn btn-secondary" data-dismiss="modal" value = "No" name="deny" data-placement="right" title="Close">
                                      
                                      </form>
                                  </div>
                      </div>
                </div>
              </div>
            </div>
      </td>


    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>

<script language="JavaScript">
            //     event.preventDefault();
            // function function1() { 
            //     swal("Your request has been Submit!");
            // }
            </script>