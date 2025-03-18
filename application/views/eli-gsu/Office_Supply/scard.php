<div class="container">
    <div class="row">
        <div class="col">
             <div class="d-flex justify-content-start text-secondary mx-3 py-2 "><h3>Stock Card</h3></div>
        </div>
       <div class="col">
            <button type = "button" class = "btn btn-primary float-right m-1" data-toggle="modal" data-target = "#stock_card">
                Add Stock Card
            </button>
            <!-- add modal -->
            <div class="modal fade" id = "stock_card" tabindex = "-1" aria-labelledby="stock_ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stock_ModalLabel">Stock Card</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <form action = "<?php echo base_url('StockController/addscard'); ?>" method = "POST" id = "newModalForm">
                        <div class="form-group">
                            <label>Reference No.</label>
                            <input type="text" required="required" name = "refnum" class="form-control" id="employeeName" placeholder="e.g EMB-R4B-EA-01">
                        </div>
                        <div class="form-group">
                            <label>Item Name</label>
                            <input type="text" required="required" name = "itemname" class="form-control" id="itemName" placeholder="e.g Ethyl Alcohol">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" required="required" name = "descrip" class="form-control" id="itemName" placeholder="e.g Ethyl Alcohol">
                        </div>
                        <div class="form-group">
                            <label>Unit of Measurement</label>
                            <input type="text" required="required" name = "unit" class="form-control" id="itemName" placeholder="e.g Ethyl Alcohol">
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" min="0.00" max="100000000.00" step="0.01" required="required" name = "price" class="form-control" id="itemName" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Total Quantity</label>
                            <input type="number" required="required" name = "tquantity" class="form-control" id="quantity" placeholder="">
                        </div>
                </div>
                 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" name="save" class="btn btn-primary">Save changes</button>
                    </div>
                    </form> 
            </div>
            </div>
        </div>
    </div>
       </div>
    </div>
</div>
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Reference No.</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Total Quantity</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                   <?php foreach ($scard1 as $row):  ?>
                      <tr>
                        <td><?php echo $row->refnum; ?></td>
                        <td><?php echo $row->itemname; ?></td>
                        <td><?php echo $row->price; ?></td>
                        <td><?php echo $row->tquantity; ?></td>
                        <td>
                          <a type="button" class="btn btn-primary" href="<?php echo base_url('inscard'); ?>/<?php echo $row->id; ?>"><i class="far fa-eye"></i></a>
                          <button type="button" class="btn btn-success edit_button" data-toggle="modal" data-placement="right" data-target = "#edit_stock<?php echo $row->id; ?>" title="Edit"><i class="fas fa-edit"></i></button></td>
                          <!-- Edit Stocks Modal -->
                          <div class="modal fade" id = "edit_stock<?php echo $row->id; ?>" tabindex = "-1" aria-labelledby="stock_ModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Stock Card</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action = "<?php echo base_url('StockController/scard'); ?>/<?php echo $row->id; ?>" method = "POST" id = "newModalForm">
                            <div class="modal-body">
                            <input type="hidden" required="required" name = "employee_name" value="<?php echo $row->id;?>">
                                    <div class="form-group">
                                        <label>Employee Name</label>
                                        <input type="text" required="required" name = "employee_name" class="form-control" id="employeeName"  value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Item Name</label>
                                        <input type="text" required="required" name = "item_name" class="form-control" id="itemName" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input type="text" required="required" name = "quantity" class="form-control" id="quantity" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Item Price</label>
                                        <input type="number" min="0.00" max="100000000.00" step="0.01"  required="required" name = "price" class="form-control" id="quantity" value="">
                                    </div>
                                    <div class="form-group">
                                            <label>Date Requested</label> 
                                            <div class="input-group date" >
                                                <input type="date" id="datepicker" required="required" name = "date_request" class="form-control" value="" >

                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <label>Date Received</label> 
                                            <div class="input-group date" id="datepicker2">
                                                <input type="date" required="required" name="date_received" class="form-control" value="">
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
        </div>
                      </tr>
                      <tr>
                      <?php endforeach; ?> </tbody>  
                  </table>  
                </div>
              </div>
            </div>