<div class="container">
    <span><div class="d-flex justify-content-start text-secondary mx-3 py-2 "><h3>REQUISITION AND ISSUE</h3></div></span>   
    <form action = "<?php echo base_url('add_ris'); ?>" method = "POST">
                        <div class="form-group">
                            <label for="employeeName">Employee Name</label>
                            <input type="text" required="required" name = "employee_name" class="form-control" id="employeeName" placeholder="Division, FistName, LastName">
                           
                        </div>
                        <div class="form-group">
                            <label for="itemName">Item Name</label>
                            <!-- <input type="text" required="required" name = "item_name" class="form-control" id="itemName" placeholder="e.g Ethyl Alcohol"> -->
                            
                            <select name="item_name" required="required" class="form-control" id="item">
                                <option value="">-Select Item-</option>
                                <?php foreach ($scard1 as $row):  ?>
                                <option value="<?php echo $row->itemname; ?>"><?php echo $row->itemname; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="text" required="required" name = "quantity" class="form-control" id="quantity" placeholder="e.g. 1">
                          
                        </div>
                        <div class="form-group">
                            <label for="price">Item Price</label>
                            <input type="number" min="0.00" max="100000000.00" step="0.01"  required="required" name = "price" class="form-control" id="quantity" placeholder="e.g. 1">
                          
                        </div>
                  
                </div>        
                    <div class="float-right mx-4">
                        <button type="submit" name="save" class="btn btn-success">Request</button>
                    </div>
                    </form>
                    
</div>
    