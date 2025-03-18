<div class="d-flex justify-content-center text-secondary mx-3 py-3 "><h2>Requisition and Issue</h2></div>
<div class="float-right">
            <span class="">
            <a class="btn btn-success m-2" href="<?php echo base_url('StockController/action');?>" ><i class="fa-sharp fa-regular fa-file-excel"></i> Export Data</a>
            </span>

            </div>
<!-- RIS ADD MODAL -->
<!-- button for export excel -->
            <div class="modal fade" id = "ris_modal" tabindex = "-1" aria-labelledby="ris_ModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ris_ModalLabel">RIS</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
            </div>
                <div class="modal-body">
                    <form action = "<?php echo base_url('add_ris'); ?>" method = "POST" id = "newModalForm">
                        <div class="form-group">
                            <label for="employeeName">Employee Name</label>
                            <input type="text" required="required" name = "employee_name" class="form-control" id="employeeName" placeholder="Division, FistName, LastName">
                            <small><?php echo form_error('employee_name'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="itemName">Item Name</label>
                            <input type="text" required="required" name = "item_name" class="form-control" id="itemName" placeholder="e.g Ethyl Alcohol">
                            <small><?php echo form_error('item_name'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="text" required="required" name = "quantity" class="form-control" id="quantity" placeholder="e.g. 1">
                            <small><?php echo form_error('quantity'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="price">Item Price</label>
                            <input type="number" min="0.00" max="100000000.00" step="0.01"  required="required" name = "price" class="form-control" id="quantity" placeholder="e.g. 1">
                            <small><?php echo form_error('quantity'); ?></small>
                        </div>
                        <div class="form-group">
                                <label for="date">Date Requested</label> 
                                <div class="input-group date" >
                                    <input type="date" id="datepicker" required="required" name = "date_request" class="form-control" >
                                    <small><?php echo form_error('date_request'); ?></small>

                                </div>
                        </div>
                        <div class="form-group">
                                <label for="date">Date Received</label> 
                                <div class="input-group date" id="datepicker2">
                                    <input type="date" required="required" name="date_received" class="form-control" placeholder = "MM/DD/YYY">
                                    <small><?php echo form_error('date_received'); ?></small>
                                </div>
                        </div>
                </div>        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" name="save" class="btn btn-success">Save</button>
                    </div>
                    </form> 
        </div>
    </div>
</div>
<!-- End of Add Modal -->
<!-- TABLE -->
 

                       
                     
<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">Employee Name</th>
      <th scope="col">Item Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Date Request</th>
      <th scope="col">Date Received</th>
      <!-- <th scope="col">Action</th> -->
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php foreach ($ris1 as $row): 
        $new_reqDate = date("M d,Y", strtotime($row->date_request));
        $new_recDate = date("M d,Y", strtotime($row->date_received));

    ?>
      <td><?php echo $row->employee_name; ?></td>
      <td><?php echo $row->item_name; ?></td>
      <td><?php echo $row->quantity; ?></td>
      <td><?php echo $new_reqDate; ?></td>
      <td><?php echo $new_recDate; ?></td>

      <!-- Edit modal-->
      <!-- <td><button type="button" class="btn btn-success edit_button" data-toggle="modal" data-placement="right" data-target = "#stock_card<?php echo $row->id; ?>" title="Edit"><i class="fas fa-edit"></i></button></td>
      <div class="modal fade" id = "stock_card<?php echo $row->id; ?>" tabindex = "-1" aria-labelledby="stock_ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Stock Card</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action = "<?php echo base_url('StockController/edit_ris'); ?>/<?php echo $row->id; ?>" method = "POST" id = "newModalForm">
                <div class="modal-body">
                <input type="hidden" required="required" name = "employee_name" value="<?php echo $row->id;?>">
                        <div class="form-group">
                            <label for="employeeName">Employee Name</label>
                            <input type="text" required="required" name = "employee_name" class="form-control" id="employeeName"  value="<?php echo $row->employee_name;?>">
                            <small><?php echo form_error('employee_name'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="itemName">Item Name</label>
                            <input type="text" required="required" name = "item_name" class="form-control" id="itemName" value="<?php echo $row->item_name;?>">
                            <small><?php echo form_error('item_name'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="text" required="required" name = "quantity" class="form-control" id="quantity" value="<?php echo $row->quantity;?>">
                            <small><?php echo form_error('quantity'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="price">Item Price</label>
                            <input type="number" min="0.00" max="100000000.00" step="0.01"  required="required" name = "price" class="form-control" id="quantity" value="<?php echo $row->price;?>">
                            <small><?php echo form_error('quantity'); ?></small>
                        </div>
                        <div class="form-group">
                                <label for="date">Date Requested</label> 
                                <div class="input-group date" >
                                    <input type="date" id="datepicker" required="required" name = "date_request" class="form-control" value="<?php echo $row->date_request;?>" >
                                    <small><?php echo form_error('date_request'); ?></small>

                                </div>
                        </div>
                        <div class="form-group">
                                <label for="date">Date Received</label> 
                                <div class="input-group date" id="datepicker2">
                                    <input type="date" required="required" name="date_received" class="form-control" value="<?php echo $row->date_received;?>">
                                    <small><?php echo form_error('date_received'); ?></small>
                                </div>
                        </div>
                </div>        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" name="save" class="btn btn-primary">Save changes</button>
                    </div>
                    </form> 
        </div>
    </div>
</div> -->


    </tr>
  </tbody>
  <?php endforeach; ?>
</table>
                
