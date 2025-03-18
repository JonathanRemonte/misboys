<!-- <div class="row g-3 my-1">
                <div class="col-md-4">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                        <h3 class="fs-2"><?php echo isset($total) ? $total : 0; ?></h3>
                        <a class="nav-link active" id="total-tab" data-toggle="tab" href="#total" role="tab" aria-controls="total" aria-selected="true">Total Equipment</a>
                        </div>
                        <i class="fa-sharp fa-solid fa-box fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2"><?php echo isset($Serviceable) ? $Serviceable : 0; ?></h3>
                            <a class="fs-5" id="serviceable-tab" href="#serviceable"  data-bs-toggle="tab" data-bs-target="tab">Serviceable</a>
                        </div>
                        <i
                            class="fa-solid fa-thumbs-up fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2"><?php echo isset($Unserviceable) ? $Unserviceable : 0; ?></h3>
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                        </div>
                        <i class="fa-solid fa-thumbs-down fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>
            </div> -->
           
            <!-- <div class="container my-1"> -->
    <!-- Nav tabs -->
    <ul class="nav nav-tabs justify-content-center" id="myTabs" role="tablist">
        <li class="nav-item p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded mx-2" role="presentation">
            <h3 class="fs-2"><?php echo isset($total) ? $total : 0; ?></h3>&nbsp;
            <a class="nav-link active" id="total-tab" data-toggle="tab" href="#total" role="tab" aria-controls="total" aria-selected="true">Total Equipment</a>
            <i class="fa-solid fa-box fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </li>
        <li class="nav-item p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded mx-2" role="presentation">
            <h3 class="fs-2"><?php echo isset($Serviceable) ? $Serviceable : 0; ?></h3>&nbsp;
            <a class="nav-link" id="serviceable-tab" data-toggle="tab" href="#serviceable" role="tab" aria-controls="serviceable" aria-selected="false">Serviceable</a>
            <i class="fa-solid fa-thumbs-up fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </li>
        <li class="nav-item p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded mx-2" role="presentation">
            <h3 class="fs-2"><?php echo isset($Unserviceable) ? $Unserviceable : 0; ?></h3>&nbsp;
            <a class="nav-link" id="unserviceable-tab" data-toggle="tab" href="#unserviceable" role="tab" aria-controls="unserviceable" aria-selected="false">Unserviceable</a>
            <i class="fa-solid fa-thumbs-down fs-1 primary-text border rounded-full secondary-bg p-3"></i>
        </li>
    </ul>
    
<!-- import excel -->
    <!-- <?php if ($this->session->flashdata('message')): ?>
        <?php echo $this->session->flashdata('message'); ?>
        <?php endif; ?>
        <form method="post" action="<?php echo site_url('StockController/importEquip'); ?>" enctype="multipart/form-data">
            <div class="form-group">
                    <label for="upload_file">Choose Excel File:</label>
                    <input type="file" name="upload_file" class="form-control-file" id="upload_file">
            </div>
                <button type="submit" class="btn btn-primary">Import</button>
        </form> -->
<div class="row">
    <div class="col-md-6">
        <button type = "button" class = "btn btn-primary m-1" data-toggle="modal" data-target = "#modal_mr">
            Add Equipment
        </button>
        <span class="">
            <a class="btn btn-success m-2" href="<?php echo base_url('StockController/areFile');?>" ><i class="fa-sharp fa-regular fa-file-excel"></i> Export All Data</a>
            <button class = "btn btn-success m-2" data-toggle="modal" data-target = "#export"><i class="fa-sharp fa-regular fa-file-excel"></i> Export Specific Data</button>
                                
        </span>
    </div>    
    <!-- <div class="col-md-6"> -->
        <!-- <div id="searchContainer" class="float-right m-2">
            <div class="input-group">
                <div class="form-group has-feedback has-clear">
                    <input type="text" class="form-control" id="searchInput" placeholder="Search">
                    <span class="form-control-clear fas fa-times glyphicon-remove hidden"></span>
                </div>
                <span class="input-group-btn">
                    <button type="button" class="btn btn-primary" id="search">Search</button>
                </span>
            </div>
        </div> -->
    <!-- </div> -->
</div>
<!-- <div class="width"> -->

<!-- total equipment -->
<div class="tab-content">
    
<!-- <div class="tab-pane fade active show" id="total" role="tabpanel"> -->
<div class="tab-pane fade active show" id="total" role="tabpanel" aria-labelledby="total-tab">
    <div class="row table-responsive">
        <table id="total_table" class="table table-bordered bg-white rounded shadow-sm table-hover">    
            <thead>
                <tr>
                    <th scope="col">Type</th>
                    <th scope="col" width="60">Class</th>
                    <th scope="col" width="50">Qty.</th>
                    <th scope="col" width="60">Unit</th>
                    <th scope="col">Item/Property</th>
                    <!-- <th scope="col">Property Description</th> -->
                    <th scope="col">Property Number</th>
                    <th scope="col">Date Acquired</th>
                    <th scope="col">Serial Number</th>
                    <th scope="col">ARE To</th>
                    <th scope="col">Used by</th>
                    <th scope="col">Locator/ Division</th>
                    <th scope="col">Unit Value</th>
                    <th scope="col">Status</th>
                    <!-- <th scope="col">ARE File</th>
                    <th scope="col">PTR File</th> -->
                </tr>
            </thead>
                <tbody>
                    <?php foreach ($mr as $req): ?> 
                        <tr class="edit-row" data-toggle="modal" data-target="#edit_mr_modal" data-mr-id="<?php echo $req->id; ?>">
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $req->note; ?>"><?php echo $req->type; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $req->note; ?>"><?php echo $req->class; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $req->note; ?>"><?php echo $req->qty; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $req->note; ?>"><?php echo $req->unit; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $req->note; ?>"><?php echo $req->property; ?></td>
                            <!-- <td data-toggle="tooltip" data-placement="top" title="<?php echo $req->note; ?>"><?php echo $req->prop_descript; ?></td> -->
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $req->note; ?>"><?php echo $req->property_num; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $req->note; ?>"><?php echo $req->date_acquired; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $req->note; ?>"><?php echo $req->serial; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $req->note; ?>"><?php echo $req->are_to; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $req->note; ?>"><?php echo $req->used_by; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $req->note; ?>"><?php echo $req->locator; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $req->note; ?>"><?php echo number_format($req->unit_value, 2, '.', ',');?></td>
                            <!-- <td data-toggle="tooltip" data-placement="top" title="<?php echo $req->note; ?>"><?php echo number_format($req->total, 2, '.', ',');?></td> -->
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $req->note; ?>"><?php echo $req->status; ?></td> 
                            <!-- <td data-toggle="tooltip" data-placement="top" title="<?php echo $req->note; ?>" style="word-wrap: break-word; min-width: 60px; max-width: 60px;">
                                <a href="<?php echo base_url('StockController/download/' . $req->are_name); ?>" download="<?php echo $req->are_name; ?>"><?php echo $req->are_name; ?></a>
                            </td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $req->note; ?>" style="word-wrap: break-word; min-width: 60px; max-width: 60px;">
                                <a href="<?php echo base_url('StockController/download/' . $req->are_name); ?>" download="<?php echo $req->are_name; ?>"><?php echo $req->are_name; ?></a>
                            </td> -->
                        </tr>
                    <?php endforeach; ?>
                </tbody>
        </table>
    </div>
</div>

<!-- serviceable -->
<!-- <div class="tab-pane fade" id="serviceable" role="tabpanel"> -->
<div class="tab-pane fade" id="serviceable" role="tabpanel" aria-labelledby="serviceable-tab">
    <div class="row table-responsive">
        <table id="serviceable_table" class="table table-bordered bg-white rounded shadow-sm table-hover">    
            <thead>
                <tr>
                    <th scope="col">Type</th>
                    <th scope="col" width="60">Class</th>
                    <th scope="col" width="50">Qty.</th>
                    <th scope="col" width="60">Unit</th>
                    <th scope="col">Item/Property</th>
                    <!-- <th scope="col">Property Description</th> -->
                    <th scope="col">Property Number</th>
                    <th scope="col">Date Acquired</th>
                    <th scope="col">Serial Number</th>
                    <th scope="col">ARE To</th>
                    <th scope="col">Used by</th>
                    <th scope="col">Locator/ Division</th>
                    <th scope="col">Unit Value</th>
                    <th scope="col">Status</th>
                    <!-- <th scope="col">ARE File</th>
                    <th scope="col">PTR File</th> -->
                </tr>
            </thead>
                <tbody>
                    <?php foreach ($getservice as $service): ?> 
                        <tr class="edit-row" data-toggle="modal" data-target="#edit_mr_modal" data-mr-id="<?php echo $service->id; ?>">
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $service->note; ?>"><?php echo $service->type; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $service->note; ?>"><?php echo $service->class; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $service->note; ?>"><?php echo $service->qty; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $service->note; ?>"><?php echo $service->unit; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $service->note; ?>"><?php echo $service->property; ?></td>
                            <!-- <td data-toggle="tooltip" data-placement="top" title="<?php echo $service->note; ?>"><?php echo $service->prop_descript; ?></td> -->
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $service->note; ?>"><?php echo $service->property_num; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $service->note; ?>"><?php echo $service->date_acquired; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $service->note; ?>"><?php echo $service->serial; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $service->note; ?>"><?php echo $service->are_to; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $service->note; ?>"><?php echo $service->used_by; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $service->note; ?>"><?php echo $service->locator; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $service->note; ?>"><?php echo number_format($service->unit_value, 2, '.', ',');?></td>
                            <!-- <td data-toggle="tooltip" data-placement="top" title="<?php echo $service->note; ?>"><?php echo number_format($service->total, 2, '.', ',');?></td> -->
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $service->note; ?>"><?php echo $service->status; ?></td> 
                            <!-- <td data-toggle="tooltip" data-placement="top" title="<?php echo $service->note; ?>" style="word-wrap: break-word; min-width: 60px; max-width: 60px;">
                                <a href="<?php echo base_url('StockController/download/' . $service->are_name); ?>" download="<?php echo $service->are_name; ?>"><?php echo $service->are_name; ?></a>
                            </td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $service->note; ?>" style="word-wrap: break-word; min-width: 60px; max-width: 60px;">
                                <a href="<?php echo base_url('StockController/download/' . $service->are_name); ?>" download="<?php echo $service->are_name; ?>"><?php echo $service->are_name; ?></a>
                            </td> -->
                        </tr>
                    <?php endforeach; ?>
                </tbody>
        </table>
    </div>
</div>

<!-- unserviceable -->
<!-- <div class="tab-pane fade" id="unserviceable" role="tabpanel"> -->
<div class="tab-pane fade" id="unserviceable" role="tabpanel" aria-labelledby="unserviceable-tab">
    <div class="row table-responsive">
        <table id="unserviceable_table" class="table table-bordered bg-white rounded shadow-sm table-hover">    
            <thead>
                <tr>
                    <th scope="col">Type</th>
                    <th scope="col" width="60">Class</th>
                    <th scope="col" width="50">Qty.</th>
                    <th scope="col" width="60">Unit</th>
                    <th scope="col">Item/Property</th>
                    <!-- <th scope="col">Property Description</th> -->
                    <th scope="col">Property Number</th>
                    <th scope="col">Date Acquired</th>
                    <th scope="col">Serial Number</th>
                    <th scope="col">ARE To</th>
                    <th scope="col">Used by</th>
                    <th scope="col">Locator/ Division</th>
                    <th scope="col">Unit Value</th>
                    <th scope="col">Status</th>
                    <!-- <th scope="col">ARE File</th>
                    <th scope="col">PTR File</th> -->
                </tr>
            </thead>
                <tbody>
                    <?php foreach ($getUnservice as $unservice): ?> 
                        <tr class="edit-row" data-toggle="modal" data-target="#edit_mr_modal" data-mr-id="<?php echo $unservice->id; ?>">
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $unservice->note; ?>"><?php echo $unservice->type; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $unservice->note; ?>"><?php echo $unservice->class; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $unservice->note; ?>"><?php echo $unservice->qty; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $unservice->note; ?>"><?php echo $unservice->unit; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $unservice->note; ?>"><?php echo $unservice->property; ?></td>
                            <!-- <td data-toggle="tooltip" data-placement="top" title="<?php echo $unservice->note; ?>"><?php echo $unservice->prop_descript; ?></td> -->
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $unservice->note; ?>"><?php echo $unservice->property_num; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $unservice->note; ?>"><?php echo $unservice->date_acquired; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $unservice->note; ?>"><?php echo $unservice->serial; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $unservice->note; ?>"><?php echo $unservice->are_to; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $unservice->note; ?>"><?php echo $unservice->used_by; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $unservice->note; ?>"><?php echo $unservice->locator; ?></td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $unservice->note; ?>"><?php echo number_format($unservice->unit_value, 2, '.', ',');?></td>
                            <!-- <td data-toggle="tooltip" data-placement="top" title="<?php echo $unservice->note; ?>"><?php echo number_format($unservice->total, 2, '.', ',');?></td> -->
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $unservice->note; ?>"><?php echo $unservice->status; ?></td> 
                            <!-- <td data-toggle="tooltip" data-placement="top" title="<?php echo $unservice->note; ?>" style="word-wrap: break-word; min-width: 60px; max-width: 60px;">
                                <a href="<?php echo base_url('StockController/download/' . $unservice->are_name); ?>" download="<?php echo $unservice->are_name; ?>"><?php echo $unservice->are_name; ?></a>
                            </td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $unservice->note; ?>" style="word-wrap: break-word; min-width: 60px; max-width: 60px;">
                                <a href="<?php echo base_url('StockController/download/' . $unservice->are_name); ?>" download="<?php echo $unservice->are_name; ?>"><?php echo $unservice->are_name; ?></a>
                            </td> -->
                        </tr>
                    <?php endforeach; ?>
                </tbody>
        </table>
    </div>
</div>

<!-- end -->

<!-- this is a footer -->
<footer>
    <div class="footer-line"></div>
    <div class="footer-content">
        <p>4BHive EMB MIMAROPA © 2023 All Rights Reserved.</p>
        <p>Design and code by Eli ☺</p>
        <div class="social-links">
            <p data-tooltip="eliza_dizon@emb.gov.ph"><img src="assets/img/outlook.png" alt="Facebook"></p>
            <p data-tooltip="eliza099"><img src="assets/img/messenger.png" alt="Messenger"></p>
        </div>
    </div>
</footer>
<!-- this is a footer -->

<!-- <script>
 $(document).ready(function () {
        // Initialize the tabs individually
        var tabTriggerList = document.querySelectorAll('[data-bs-toggle="tab"]');
        tabTriggerList.forEach(function (tabTrigger) {
            new bootstrap.Tab(tabTrigger).show();
        });
    });
</script> -->
 
<div class="container my-1">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="myTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="total-tab" data-toggle="tab" href="#total" role="tab" aria-controls="total" aria-selected="true">Total Equipment</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="serviceable-tab" data-toggle="tab" href="#serviceable" role="tab" aria-controls="serviceable" aria-selected="false">Serviceable</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="unserviceable-tab" data-toggle="tab" href="#unserviceable" role="tab" aria-controls="unserviceable" aria-selected="false">Unserviceable</a>
        </li>
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade show active" id="total" role="tabpanel" aria-labelledby="total-tab">
            <!-- Your existing "Total Equipment" content goes here -->
            <div class="row g-3 mt-3">
                <div class="col-md-4">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2"><?php echo isset($total) ? $total : 0; ?></h3>
                            <a class="fs-5" href="#total" data-bs-toggle="tab" data-bs-target="tab">Total Equipment</a>
                        </div>
                        <i class="fa-sharp fa-solid fa-box fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>
                <!-- Add similar code for other cards in the "Total Equipment" tab -->
            </div>
        </div>
        <div class="tab-pane fade" id="serviceable" role="tabpanel" aria-labelledby="serviceable-tab">
            <!-- Your existing "Serviceable" content goes here -->
            <div class="row g-3 mt-3">
                <div class="col-md-4">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2"><?php echo isset($Serviceable) ? $Serviceable : 0; ?></h3>
                            <a class="fs-5" href="#serviceable" data-bs-toggle="tab" data-bs-target="tab">Serviceable</a>
                        </div>
                        <i class="fa-solid fa-thumbs-up fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>
                <!-- Add similar code for other cards in the "Serviceable" tab -->
            </div>
        </div>
        <div class="tab-pane fade" id="unserviceable" role="tabpanel" aria-labelledby="unserviceable-tab">
            <!-- Your existing "Unserviceable" content goes here -->
            <div class="row g-3 mt-3">
                <div class="col-md-4">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2"><?php echo isset($Unserviceable) ? $Unserviceable : 0; ?></h3>
                            <a class="fs-5" href="#unserviceable" data-bs-toggle="tab" data-bs-target="tab">Unserviceable</a>
                        </div>
                        <i class="fa-solid fa-thumbs-down fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>
                <!-- Add similar code for other cards in the "Unserviceable" tab -->
            </div>
        </div>
    </div>
</div>
