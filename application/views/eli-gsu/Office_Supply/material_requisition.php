
    <!-- fontawesome icon -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <!-- bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" /> -->

    <!-- css cdn pagination -->
    <!-- Include jQuery -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <!-- Include DataTables CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css"/> -->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>



    <link rel="stylesheet" href="assets/cssbhive/material_requisition.css" />

<div class="d-flex" id="wrapper">
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-center text-secondary mt-3 mb-0"><h2>Property, Plant, and Equipment, and Inventory Custodian Slips</h2></div>
        <!-- <div class="row g-3 my-1">
                <div class="col-md-4">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                        <h3 class="fs-2"><?php echo isset($total) ? $total : 0; ?></h3>
                        <a class="fs-5" href="#total" data-bs-toggle="tab" data-bs-target="tab">Total Equipment</a>
                        </div>
                        <i class="fa-sharp fa-solid fa-box fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2"><?php echo isset($Serviceable) ? $Serviceable : 0; ?></h3>
                            <a class="fs-5" href="#serviceable"  data-bs-toggle="tab" data-bs-target="tab">Serviceable</a>
                        </div>
                        <i class="fa-solid fa-thumbs-up fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2"><?php echo isset($Unserviceable) ? $Unserviceable : 0; ?></h3>
                            <a class="fs-5" href="#unserviceable" data-bs-toggle="tab" data-bs-target="tab">Unserviceable</a>
                        </div>
                        <i class="fa-solid fa-thumbs-down fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>
            </div> -->


            <!-- <div class="container g-3 my-1"> -->
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
<!-- </div> -->

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
      <!-- export modal -->
      <div class="modal fade" id="export" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-s" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Export File</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <ul class="nav nav-tabs" id="exportTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="class-tab" data-toggle="tab" href="#classExport" role="tab" aria-controls="classExport" aria-selected="true">Export by Class</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="employee-tab" data-toggle="tab" href="#employeeExport" role="tab" aria-controls="employeeExport" aria-selected="false">Export by Employee Name</a>
                    </li>
                </ul>

                <!-- Tab content for class export -->
                <div class="tab-content" id="exportTabContent">
                    <div class="tab-pane fade show active" id="classExport" role="tabpanel" aria-labelledby="class-tab">
                    <form action = "<?php echo base_url('StockController/areFile'); ?>" method = "POST" id = "export-are">
                    <input type="hidden" name="id" id="id">
                    <div class="row">
                            <div class="form-group col-md-6">
                                <label>Type of Equipment</label>
                                <select name="type" required="required" class="form-control" id="type">
                                    <option value="">-Select Item-</option>
                                    <option value="BUILDING AND OTHER STRUCTURES">BUILDING AND OTHER STRUCTURES</option>
                                    <option value="COMMUNICATION EQUIPMENT">COMMUNICATION EQUIPMENT</option>
                                    <option value="FURNITURE AND FIXTURES">FURNITURE AND FIXTURES</option>
                                    <option value="INFORMATION AND COMM TECH EQUIPMENT">INFORMATION AND COMM TECH EQUIPMENT</option>
                                    <option value="INTANGIBLE ASSET">INTANGIBLE ASSET</option>
                                    <option value="MACHINERY">MACHINERY</option>
                                    <option value="MILITARY, POLICE, AND SECURITY EQUIPMENT">MILITARY, POLICE, AND SECURITY EQUIPMENT</option>
                                    <option value="MOTOR VEHICLE">MOTOR VEHICLE</option>
                                    <option value="OFFICE EQUIPMENT">OFFICE EQUIPMENT</option>
                                    <option value="OTHER MACHINERY AND EQUIPMENT">OTHER MACHINERY AND EQUIPMENT</option>
                                    <option value="TECHNICAL AND SCIENTEFIC EQUIPMENT">TECHNICAL AND SCIENTEFIC EQUIPMENT</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Class</label>
                                <select name="class" required="required" class="form-control" id="class">
                                    <option value="">-Select Class-</option>
                                    <option value="PPE">PPE (50K and above)</option>
                                    <option value="ICS">ICS (less than 50K)</option>
                                </select>
                            </div>
                    </div>
                    <div class="row">
                            <div class="form-group col-md-6">
                                <label>From</label>
                                <input type="date" required="required" name = "dateFrom" class="form-control" id="dateFrom">
                            </div>
                            <div class="form-group col-md-6">
                                <label>To</label>
                                <input type="date" required="required" name = "dateTo" class="form-control" id="dateTo">
                            </div>
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Export</button>
                        </div>
                    </form> 
                    </div>

                    <div class="tab-pane fade" id="employeeExport" role="tabpanel" aria-labelledby="employee-tab">
    <form action="<?php echo base_url('StockController/areFile'); ?>" method="POST" id="export-employee">
        <div class="row">
            <div class="form-group col-md-12">
                <label>Employee Name<p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                <?php
                $usedby_option_export = array('' => '-Select Item-');
                foreach ($employee as $employ) {
                    $mname_initial = substr($employ->mname, 0, 1);
                    $usedby_option_export[$employ->userid] = $employ->lname . ' ' . $employ->fname . ' ' . $mname_initial;
                }
                echo form_dropdown('employeeName', $usedby_option_export, '', 'class="form-control" id="usedbyExport" required="required"');
                ?>
            </div>

            <?php
            $user_id_usedby = array(
                'name' => 'usedbyexport_selected_user_id',
                'id' => 'usedbyexport_selected_user_id',
                'value' => '',
                'type' => 'hidden'
            );
            $user_name_usedby = array(
                'name' => 'usedbyexport_selected_user_name',
                'id' => 'usedbyexport_selected_user_name',
                'value' => '',
                'type' => 'hidden'
            );
            echo form_input($user_id_usedby);
            echo form_input($user_name_usedby);
            ?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Export</button>
        </div>
    </form>
</div>

                </div>
            </div>
        </div>
    </div>
</div>

        <!-- end modal -->
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
        <table id="mr_table" class="table table-bordered bg-white rounded shadow-sm table-hover">    
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
</div>
</div>
</div>

<!-- end -->    



<div id="snackbar"></div>


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



<!-- add modal -->
<div class="modal fade" id = "modal_mr" tabindex = "-1" aria-labelledby="stock_ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stock_ModalLabel">Add New Equipment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body"> 
                <form action="<?php echo base_url('StockController/insertEquip'); ?>" method="POST" id="addEquip" enctype="multipart/form-data">
                    <div class="row">
                            <div class="form-group col-md-3">
                                <label>Type of Equipment  <p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                                <select name="type" required="required" class="form-control" id="type">
                                    <option value="">-Select Item-</option>
                                    <option value="BUILDING AND OTHER STRUCTURES">BUILDING AND OTHER STRUCTURES</option>
                                    <option value="COMMUNICATION EQUIPMENT">COMMUNICATION EQUIPMENT</option>
                                    <option value="FURNITURE AND FIXTURES">FURNITURE AND FIXTURES</option>
                                    <option value="INFORMATION AND COMM TECH EQUIPMENT">INFORMATION AND COMM TECH EQUIPMENT</option>
                                    <option value="INTANGIBLE ASSET">INTANGIBLE ASSET</option>
                                    <option value="MACHINERY">MACHINERY</option>
                                    <option value="MILITARY, POLICE, AND SECURITY EQUIPMENT">MILITARY, POLICE, AND SECURITY EQUIPMENT</option>
                                    <option value="MOTOR VEHICLE">MOTOR VEHICLE</option>
                                    <option value="OFFICE EQUIPMENT">OFFICE EQUIPMENT</option>
                                    <option value="OTHER MACHINERY AND EQUIPMENT">OTHER MACHINERY AND EQUIPMENT</option>
                                    <option value="TECHNICAL AND SCIENTEFIC EQUIPMENT">TECHNICAL AND SCIENTEFIC EQUIPMENT</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Unit<p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                                <select name="unit" required="required" class="form-control" id="unit">
                                    <option value="">-Select-</option>
                                    <option value="UNIT">UNIT</option>
                                    <option value="LOT">LOT</option>
                                    <option value="PIECE">PIECE</option>
                                    <option value="SET">SET</option>
                                    <option value="BUNDLE">BUNDLE</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Class<p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                                <select name="class" class="form-control" id="class" required>
                                    <option value="">-Select Class-</option>
                                    <option value="PPE">PPE (50K and above)</option>
                                    <option value="ICS">ICS (less than 50K)</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Item/Property<p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                                <input type="text" required="required" name = "property" class="form-control" id="property" placeholder="">
                            </div>
                            <div class="form-group col-md-2">
                                <label>Property Description</label>
                                <input type="text" name = "prop_descript" class="form-control" id="prop_descript" placeholder="">
                            </div>
                    </div>
                    <div class="row">
                            <div class="form-group col-md-3">
                                <label>Property Number<p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                                <input type="text" name = "propnum" class="form-control" id="propnum" placeholder="" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Date Acquired<p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                                <input type="date" required="required" name = "date" class="form-control" id="date">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Serial Number<p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                                <input type="text" name = "serialnum" class="form-control" id="serialnum" placeholder="" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Are to<p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                                <?php
                                $areto_options = array('' => '-Select Item-');
                                foreach ($permanent as $perma) {
                                    $mname_initial = substr($perma->mname, 0, 1);
                                    $areto_options[$perma->userid] = $perma->lname . ' ' . $perma->fname . ' ' . $mname_initial  ;
                                }
                                echo form_dropdown('areto', $areto_options, '', 'class="form-control" id="areto" required="required"');
                                ?>
                            </div>

                                <!-- Hidden input fields to store the selected user ID and name -->
                                <?php
                                    $hidden_user_id = array(
                                        'name' => 'selected_user_id',
                                        'id' => 'selected_user_id',
                                        'value' => '', // The selected user ID will be filled in by JavaScript
                                        'type' => 'hidden'
                                    );
                                    $hidden_user_name = array(
                                        'name' => 'selected_user_name',
                                        'id' => 'selected_user_name',
                                        'value' => '', // The selected user name will be filled in by JavaScript
                                        'type' => 'hidden'
                                    );
                                    echo form_input($hidden_user_id);
                                    echo form_input($hidden_user_name);
                                ?>
                    </div>
                    <div class="row">
                            <div class="form-group col-md-3">
                                <label>Used by<p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                                    <?php
                                    $usedby_option = array('' => '-Select Item-');
                                    foreach ($employee as $employ) {
                                        $mname_initial = substr($employ->mname, 0, 1);
                                        $usedby_option[$employ->userid] = $employ->lname . ' ' . $employ->fname . ' ' . $mname_initial;
                                    }
                                    echo form_dropdown('usedby', $usedby_option, '', 'class="form-control" id="usedby" required="required"');
                                    ?>
                            </div>

                                <!-- Hidden input fields to store the selected user ID and name -->
                                <?php
                                    $hidden_user_id_usedby = array(
                                        'name' => 'usedby_selected_user_id',
                                        'id' => 'usedby_selected_user_id',
                                        'value' => '', // The selected user ID will be filled in by JavaScript
                                        'type' => 'hidden'
                                    );
                                    $hidden_user_name_usedby = array(
                                        'name' => 'usedby_selected_user_name',
                                        'id' => 'usedby_selected_user_name',
                                        'value' => '', // The selected user name will be filled in by JavaScript
                                        'type' => 'hidden'
                                    );
                                    echo form_input($hidden_user_id_usedby);
                                    echo form_input($hidden_user_name_usedby);
                                ?>
                            <div class="form-group col-md-3">
                                <label>Locator/Division<p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                                <select name="locator" required="required" class="form-control" id="locator">
                                    <option value="">-Select Item-</option>
                                    <option value="ORD">ORD</option>
                                    <option value="PISMU">PISMU</option>
                                    <option value="REL">LEGAL</option>
                                    <option value="REL">REL</option>
                                    <option value="FAD">FAD</option>
                                    <option value="RECORDS">RECORDS</option>
                                    <option value="EMED">EMED</option>
                                    <option value="CPD">CPD</option>
                                    <option value="PEMU, OCCIDENTAL MINDORO">PEMU, OCCIDENTAL MINDORO</option>
                                    <option value="CENRO, SAN JOSE">CENRO, SAN JOSE</option>
                                    <option value="CENRO, SABLAYAN">CENRO, SABLAYAN</option>
                                    <option value="PEMU, ORIENTAL MINDORO">PEMU, ORIENTAL MINDORO</option>
                                    <option value="CENRO, ROXAS">CENRO, ROXAS</option>
                                    <option value="CENRO, SOCCORO">CENRO, SOCCORO</option>
                                    <option value="MARINDUQUE">MARINDUQUE</option>
                                    <option value="ROMBLON">ROMBLON</option>
                                    <option value="PEMU, PALAWAN">PEMU, PALAWAN</option>
                                    <option value="CENRO, PALAWAN">CENRO, PALAWAN</option>
                                    <option value="CENRO, TAYTAY">CENRO, TAYTAY</option>
                                    <option value="CENRO, ROXAS">CENRO, ROXAS</option>
                                    <option value="CENRO, BROOKE'S PT.">CENRO, BROOKE'S PT.</option>
                                    <option value="CENRO, CORON">CENRO, CORON</option>
                                    <option value="CENRO, QUEZON">CENRO, QUEZON</option>
                                </select>
                            </div> 
                            <div class="form-group col-md-3">
                                <label>Unit Value<p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                                <input type="text" required="required" name = "uvalue" class="form-control" id="uvalue" placeholder="">
                            </div>

                            <div class="form-group col-md-3">
                                <label>Status<p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                                    <select name="status" required="required" class="form-control" id="status">
                                        <option value="">-Select Status-</option>
                                        <option value="Serviceable">Serviceable</option>
                                        <option value="Unserviceable">Unservicable</option>
                                    </select>
                            </div>
                    </div>
                    <div class="row">  
                            <div class="form-group col-md-6">
                                <label>Remarks: <h6 class="text-danger additional-note" style="font-size: 12px;">Maximum 100 characters</h6></label>
                                <textarea type="text" name = "note" class="form-control" id="note" maxlength="100"  rows="2" cols="25"></textarea>
                            </div>  
                            <div class="form-group col-md-4">
                                <label>Signed ARE File <p class="text-danger additional-note" style="font-size: 15px;">(.Pdf)</p> <p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                                <!-- <input type="file" name="are_file" id="are_file" multiple = "multiple" required>
                             -->

                                <div class="controls">
                                        <div class="entry input-group upload-input-group">
                                            <input class="form-control" name="are_file" type="file" accept=".pdf" required>
                                            <!-- <button class="btn btn-upload btn-success btn-add" type="button">
                                                <i class="fa fa-plus"></i>
                                            </button> -->
                                </div>
                                <?php if (!empty(form_error('are_file'))) : ?>
                                    <div class="text-danger"><?php echo form_error('are_file'); ?></div>

<?php endif; ?>

                                </div>
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
    </div>
       </div>
    </div>
    <!-- end modal -->
  
     <!-- edit mr modal -->
     <div class="modal fade" id="edit_mr_modal" tabindex="-1" aria-labelledby="stock_ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="stock_ModalLabel">Edit Equipment</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <!-- Tab navigation -->
                            <ul class="nav nav-tabs" id="myTabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="edit-tab" data-toggle="tab" href="#edit-equipment" role="tab" aria-controls="edit-equipment" aria-selected="true">Edit Equipment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="upload-tab" data-toggle="tab" href="#upload-files" role="tab" aria-controls="upload-files" aria-selected="false">Upload Files</a>
                                </li>
                            </ul>

                        <!-- Tab content -->
                        <div class="tab-content mt-3" id="myTabContent">
                            <!-- Edit Equipment Tab -->
                            <div class="tab-pane fade show active" id="edit-equipment" role="tabpanel" aria-labelledby="edit-tab">
                                <form action="<?php echo base_url('StockController/updateMR'); ?>" method="POST" id="editMR">
                                    <input type="hidden" name="id" id="id">
                                        <div class="row">
                                            <div class="form-group col-md-3">
                                                <label>Type of Equipment<p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                                                    <select name="type" required="required" class="form-control" id="type">
                                                        <option value="">-Select Item-</option>
                                                        <option value="BUILDING AND OTHER STRUCTURES">BUILDING AND OTHER STRUCTURES</option>
                                                        <option value="COMMUNICATION EQUIPMENT">COMMUNICATION EQUIPMENT</option>
                                                        <option value="FURNITURE AND FIXTURES">FURNITURE AND FIXTURES</option>
                                                        <option value="INFORMATION AND COMM TECH EQUIPMENT">INFORMATION AND COMM TECH EQUIPMENT</option>
                                                        <option value="INTANGIBLE ASSET">INTANGIBLE ASSET</option>
                                                        <option value="MACHINERY">MACHINERY</option>
                                                        <option value="MILITARY, POLICE, AND SECURITY EQUIPMENT">MILITARY, POLICE, AND SECURITY EQUIPMENT</option>
                                                        <option value="MOTOR VEHICLE">MOTOR VEHICLE</option>
                                                        <option value="OFFICE EQUIPMENT">OFFICE EQUIPMENT</option>
                                                        <option value="OTHER MACHINERY AND EQUIPMENT">OTHER MACHINERY AND EQUIPMENT</option>
                                                        <option value="TECHNICAL AND SCIENTEFIC EQUIPMENT">TECHNICAL AND SCIENTEFIC EQUIPMENT</option>
                                                    </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>Unit<p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                                                <select name="unit" required="required" class="form-control" id="unit">
                                                    <option value="">-Select-</option>
                                                    <option value="UNIT">UNIT</option>
                                                    <option value="LOT">LOT</option>
                                                    <option value="PIECE">PIECE</option>
                                                    <option value="SET">SET</option>
                                                    <option value="BUNDLE">BUNDLE</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>Class<p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                                                <select name="class" required="required" class="form-control" id="class">
                                                    <option value="">-Select Class-</option>
                                                    <option value="PPE">PPE (50K and above)</option>
                                                    <option value="ICS">ICS (less than 50K)</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Item/Property<p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                                                <input type="text" required="required" name = "property" class="form-control" id="property" placeholder="">
                                            </div>
                                            <div class="form-group col-md-2 ">
                                                <label>Property Description</label>
                                                <input type="text" name = "prop_descript" class="form-control" id="prop_descript" placeholder="">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-2">
                                                <label>Property Number<p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                                                <input type="text" required="required" name = "propnum" class="form-control" id="propnum" placeholder="">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>Date Acquired<p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                                                <input type="date" required="required" name = "date" class="form-control" id="date">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>Serial Number<p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                                                <input type="text" name = "serialnum" class="form-control" id="serialnum" placeholder="">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Are to<p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                                                <?php
                                                $editareto_options = array('' => '-Select Item-');
                                                foreach ($permanent as $perma) {
                                                    $mname_initial = substr($perma->mname, 0, 1);
                                                    $editareto_options[$perma->userid] = $perma->lname . ' ' . $perma->fname . ' ' . $mname_initial;
                                                }
                                                echo form_dropdown('editareto', $editareto_options, '', 'class="form-control" id="editareto" name="editareto" required="required"');
                                                ?>
                                            </div>

                                                <?php
                                                    $edit_hidden_user_id = array(
                                                        'name' => 'edit_selected_user_id',
                                                        'id' => 'edit_selected_user_id',
                                                        'value' => '', // The selected user ID will be filled in by JavaScript
                                                        'type' => 'hidden'
                                                    );
                                                    $edit_hidden_user_name = array(
                                                        'name' => 'edit_selected_user_name',
                                                        'id' => 'edit_selected_user_name',
                                                        'value' => '', // The selected user name will be filled in by JavaScript
                                                        'type' => 'hidden'
                                                    );
                                                    echo form_input($edit_hidden_user_id);
                                                    echo form_input($edit_hidden_user_name);
                                                ?>
                                        
                                            <div class="form-group col-md-3">
                                                <label>Previous ARE</label>
                                                <select name="prev_are" class="form-control" id="prev_are">
                                                    <option value="">-No previous ARE-</option>
                                                    <option value="Test 1ssss">Test 1</option>
                                                    <option value="Test 2">Test 2</option>
                                                    <option value="Test 3">Test 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-3">
                                                <label>Used by<p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                                                <?php
                                                    $usedby_option = array('' => '-Select Item-');
                                                    foreach ($employee as $employ) {
                                                        $mname_initial = substr($employ->mname, 0, 1);
                                                        $usedby_option[$employ->userid] = $employ->lname . ' ' . $employ->fname . ' ' . $mname_initial;
                                                    }
                                                    echo form_dropdown('usedby_edit', $usedby_option, '', 'class="form-control" id="usedby_edit" required="required"');
                                                ?>
                                            </div>

                                                <?php
                                                    $hidden_user_id_usedby = array(
                                                        'name' => 'edit_usedby_selected_user_id',
                                                        'id' => 'edit_usedby_selected_user_id',
                                                        'value' => '', // The selected user ID will be filled in by JavaScript
                                                        'type' => 'hidden'
                                                    );
                                                    $hidden_user_name_usedby = array(
                                                        'name' => 'edit_usedby_selected_user_name',
                                                        'id' => 'edit_usedby_selected_user_name',
                                                        'value' => '', // The selected user name will be filled in by JavaScript
                                                        'type' => 'hidden'
                                                    );
                                                    echo form_input($hidden_user_id_usedby);
                                                    echo form_input($hidden_user_name_usedby);
                                                ?>
                                            <div class="form-group col-md-3">
                                                <label>Locator/Division<p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                                                    <select name="locator" required="required" class="form-control" id="locator">
                                                        <option value="">-Select Item-</option>
                                                        <option value="ORD">ORD</option>
                                                        <option value="PISMU">PISMU</option>
                                                        <option value="REL">LEGAL</option>
                                                        <option value="REL">REL</option>
                                                        <option value="FAD">FAD</option>
                                                        <option value="RECORDS">RECORDS</option>
                                                        <option value="EMED">EMED</option>
                                                        <option value="CPD">CPD</option>
                                                        <option value="PEMU, OCCIDENTAL MINDORO">PEMU, OCCIDENTAL MINDORO</option>
                                                        <option value="CENRO, SAN JOSE">CENRO, SAN JOSE</option>
                                                        <option value="CENRO, SABLAYAN">CENRO, SABLAYAN</option>
                                                        <option value="PEMU, ORIENTAL MINDORO">PEMU, ORIENTAL MINDORO</option>
                                                        <option value="CENRO, ROXAS">CENRO, ROXAS</option>
                                                        <option value="CENRO, SOCCORO">CENRO, SOCCORO</option>
                                                        <option value="MARINDUQUE">MARINDUQUE</option>
                                                        <option value="ROMBLON">ROMBLON</option>
                                                        <option value="PEMU, PALAWAN">PEMU, PALAWAN</option>
                                                        <option value="CENRO, PALAWAN">CENRO, PALAWAN</option>
                                                        <option value="CENRO, TAYTAY">CENRO, TAYTAY</option>
                                                        <option value="CENRO, ROXAS">CENRO, ROXAS</option>
                                                        <option value="CENRO, BROOKE'S PT.">CENRO, BROOKE'S PT.</option>
                                                        <option value="CENRO, CORON">CENRO, CORON</option>
                                                        <option value="CENRO, QUEZON">CENRO, QUEZON</option>
                                                    </select>
                                            </div> 
                                            <div class="form-group col-md-3">
                                                <label>Unit Value<p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                                                <input type="text" required="required" name = "uvalue" class="form-control" id="uvalue" placeholder="">
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label>Status<p class="text-danger additional-note" style="font-size: 19px;">*</p></label>
                                                    <select name="status" required="required" class="form-control" id="status">
                                                        <option value="">-Select Status-</option>
                                                        <option value="Serviceable">Serviceable</option>
                                                        <option value="repair">For Repair</option>
                                                        <option value="dispose">For Disposal</option>
                                                        <option value="Unserviceable">Unservicable</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="row">  
                                            <div class="form-group col-md-6">
                                                <label>Remarks:(Optional) <h6 class="text-danger additional-note" style="font-size: 12px;">Maximum 100 characters</h6></label>
                                                <textarea type="text" name = "note" class="form-control" id="note" maxlength="100"  rows="2" cols="25"></textarea>
                                            </div>  
                                            <div class="form-group col-md-3">
                                                <label>ARE File</label><br>
                                                <a href="#" id="are_name_link" target="_blank" class="text-wrap">No ARE File</a>
                                                
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
                <!-- Upload Files Tab -->
                <div class="modal-body"> 
                    <div class="tab-pane fade" id="upload-files" role="tabpanel" aria-labelledby="upload-tab">
                        <div class="row">
                            <div class="form-group col-md-3">
                                <form action="<?php echo base_url('StockController/arefiledit'); ?>" method="POST" id="editAREFileForm" enctype="multipart/form-data">
                                    <input type="hidden" name="id" id="are_file_id">
                                    <label>ARE File</label><br>
                                    <input type="file" id="fileInput_are" name="fileInput_are">
                                    <button type="submit" name="submit_are_file" id="submit_are_file" style="display: none;"></button>
                                    <label for="submit_are_file" style="cursor: pointer; font-size: 18px;"><i class="fa-solid fa-file-arrow-up"></i> Upload File</label>
                                    
                                </form>
                                <ul>
                                    <li><a href="" id="are_name" target="_blank" class="text-wrap">No ARE File</a></li>
                                </ul>
                            </div>
                            <div class="form-group col-md-3">
                                <form action="" method="POST" id="editPTRFileForm">
                                    <input type="hidden" name="id" id="ptr_file_id">
                                    <label>PTR File</label><br>
                                    <input type="file" id="fileInput_ptr" name="ptr_file" style="display: none;">
                                    <label for="fileInput_ptr" style="cursor: pointer; font-size: 18px;"><i class="fa-solid fa-file-circle-plus"></i> Choose File</label>
                                    <button type="submit" name="submit_ptr_file" id="submit_ptr_file" style="display: none;"></button>
                                        <label for="submit_ptr_file" style="cursor: pointer; font-size: 18px;"><i class="fa-solid fa-file-arrow-up"></i> Upload File</label>
                                        <input type="text" required="required" name="are_name" class="form-control" id="ptr_file_name">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end files tab -->
            </div>
        </div>
    </div>

    <!-- end of edit modal -->
    <!-- upload modal -->
    <!-- <div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="innerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleMod  alLabel">Export File</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row"></div>
                            <div class="form-group col-md-3">
                                <form action = "<?php echo base_url('StockController/arefiledit'); ?>" method = "POST" id = "editMR" enctype="multipart/form-data">
                                    <input type="hidden" name="id" id="id">
                                    <label>ARE File</label></br>
                                    <input type="file" id="fileInput_are" name="are_file"> 
                                   
                                    <b style="font-size:18px;">|</b>
                                    <button type = "submit" name="are_file" id= "submitbtn" style="display: none;"></button>
                                    <label for="submitbtn" style = "cursor:pointer; font-size:18px;"><i class="fa-solid fa-file-arrow-up"></i> Upload File</label>
                                    <a href="<?php echo base_url('StockController/download/' . $mr->are_name); ?>" id="are_name" target="_blank">No ARE File</a>
                                </form>
                            </div>
                             <?php
                                                    $are_name = isset($file['are_name']) ? $file['are_name'] : '';
                                                    if (!empty($are_name)) {
                                                        echo '<a href="' . base_url('StockController/download/' . $are_name) . '" target="_blank">' . $are_name . '</a>';
                                                    } else {
                                                        echo 'No ARE File';
                                                    }
                                                ?>
                            <div class="col-md-1" style="height: 100px;">
                                <div class="vr"></div>
                            </div>
                            <div class="col-md-1"></br>&nbsp &nbsp<div class="vr" style="height: 55px;"></div></div>
                            
                            <div class="form-group col-md-3">        
                                <form action = "<?php echo base_url('StockController/ptrfiledit'); ?>" method = "POST" id = "editMR">
                                    <label>PTR File</label></br>
                                  
                                    <input type="file" id="fileInput" style="display: none;">
                                    <label for="fileInput" style = "cursor:pointer; font-size:18px;"><i class="fa-solid fa-file-circle-plus"></i> Choose File</label>
                                    <b style="font-size:18px;">|</b>
                                    <button type = "submit" id= "submitbtn" name= "ptr_file" style="display: none;"></button>
                                    <label for="submitbtn" style = "cursor:pointer; font-size:18px;"><i class="fa-solid fa-file-arrow-up"></i> Upload File</label>

                                        <input type="text" required="required" name = "are_name" class="form-control" id="are_name">
                                </form>
                            </div>
                    </div> 
                </div>
            </div>
        </div>
    </div> -->
    <!-- end modal -->    


     
      <!-- Latest version of jQuery from Google CDN -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Bootstrap JavaScript library -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        
        <!-- jquery -->
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->
        
        <!-- pagination -->
        <!-- Include DataTables JS -->
        <script type="text/javascript" src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

 <script>
            //    $(document).ready(function() {
            //     $('#mr_table').DataTable();
            // });

$(document).ready(function() {
    $('#mr_table').DataTable({
        "ordering": false 
    });

    // Sort the table manually by the first column (index 0)
    // $('#mr_table').DataTable().rows().sort(function(a, b) {
    //     return a[0] - b[0];
    // }).draw();
});

$(document).ready(function() {
    $('#serviceable_table').DataTable({
        "ordering": false 
    });

    // Sort the table manually by the first column (index 0)
    // $('#serviceable_table').DataTable().rows().sort(function(a, b) {
    //     return a[0] - b[0];
    // }).draw();
});
$(document).ready(function() {
    $('#unserviceable_table').DataTable({
        "ordering": false 
    });

    // Sort the table manually by the first column (index 0)
    // $('#unserviceable_table').DataTable().rows().sort(function(a, b) {
    //     return a[0] - b[0];
    // }).draw();
});


// add note tooltip
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

<script>
    $(document).ready(function() {
        // Handle the click event on the edit-row class
        $(document).on('click', 'tr.edit-row', function() {
            var mrId = $(this).data('mr-id');
            console.log('Clicked MR ID:', mrId);

            $('#edit_mr_modal').modal('show');

            $('#myTabs a[href="#edit-equipment"]').on('click', function() {
            // Switch to the Upload Files tab
            $('#edit-equipment').addClass('show active');
            $('#upload-files').removeClass('show active');
            $('#edit-tab').addClass('active');
            $('#upload-tab').removeClass('active');
            $('.modal-footer').show();
            // AJAX request for Edit Equipment tab
            $.ajax({
                url: '<?php echo base_url("StockController/getEquipData"); ?>',
                type: 'POST',
                data: { id: mrId }, // Pass the mrId as a data parameter
                dataType: 'json',
                success: function(data) {
                    console.log('Response:', data); // Log the JSON response to the console

                    // Populate the form fields in the Edit Equipment tab
                    $('#editMR #id').val(data.id);
                    $('#editMR #qty').val(data.qty);
                    $('#edit_mr_modal #unit').val(data.unit);
                    $('#edit_mr_modal #class').val(data.class);
                    $('#edit_mr_modal #property').val(data.property);
                    $('#edit_mr_modal #prop_descript').val(data.prop_descript);
                    $('#edit_mr_modal #propnum').val(data.property_num);
                    $('#edit_mr_modal #date').val(data.date_acquired);
                    $('#edit_mr_modal #serialnum').val(data.serial);
                    $('#edit_mr_modal #editareto').val(data.are_userid);
                    $('#edit_mr_modal #usedby_edit').val(data.used_userid);
                    $('#edit_mr_modal #prev_are').val(data.prev_are);
                    $('#edit_mr_modal #locator').val(data.locator);
                    $('#edit_mr_modal #uvalue').val(data.unit_value);
                    $('#edit_mr_modal #status').val(data.status);
                    $('#edit_mr_modal #type').val(data.type);
                    $('#edit_mr_modal #note').val(data.note);
                    $('#edit_mr_modal #are_name').text(data.are_name);
                    

                    var areNameLink = $('#edit_mr_modal #are_name_link');
        if (data.are_name) {
            areNameLink.text(data.are_name);
            areNameLink.attr('href', '<?php echo base_url("StockController/view_pdf/"); ?>' + data.are_name);
        } else {
            areNameLink.text('No ARE File');
            areNameLink.attr('href', '#'); // Provide a fallback link or handle this case as needed
        }

        // Trigger a click event on the link to open the PDF in a new tab
        areNameLink.click(function() {
            if (data.are_name) {
                window.open('<?php echo base_url("StockController/view_pdf/"); ?>' + data.are_name, '_blank');
            }
        });

                },
                error: function(xhr, status, error) {
                    console.error('Error fetching data:', error);
                    console.log('Response:', xhr.responseText);
                }
            });
            });
        });

        // Handle the click event to switch to the Upload Files tab
        $('#myTabs a[href="#upload-files"]').on('click', function() {
            // Switch to the Upload Files tab
            $('#upload-files').addClass('show active');
            $('#edit-equipment').removeClass('show active');
            $('#upload-tab').addClass('active');
            $('#edit-tab').removeClass('active');
            $('.modal-footer').hide();

            var mrId = $('#editMR #id').val(); // Get the MR ID from the Edit Equipment tab

            // AJAX request for Upload Files tab
            $.ajax({
                url: '<?php echo base_url("StockController/getUploadData"); ?>',
                type: 'POST',
                data: { id: mrId }, // Pass the mrId as data parameter
                dataType: 'json',
                success: function(data) {
                    console.log('Response:', data);

                    // Update the file names or other content in the Upload Files tab
                    $('#edit_mr_modal #are_name').text(data.are_name || 'No ARE File');
                    $('#edit_mr_modal #ptr_file_name').val(data.ptr_file || 'No PTR File');
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching data:', error);
                    console.log('Response:', xhr.responseText);
                }
            });
        });
    });
    </script>




<!-- to get id and names in modal -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // When the addEquip form is submitted
    document.getElementById('addEquip').addEventListener('submit', function(event) {
        // Get the selected option value and text for "Are to"
        var selectedOption = document.getElementById('areto').options[document.getElementById('areto').selectedIndex];
        var selectedUserId = selectedOption.value;
        var selectedUserName = selectedOption.text;

        document.getElementById('selected_user_id').value = selectedUserId;
        document.getElementById('selected_user_name').value = selectedUserName;

        var usedby_selectedOption = document.getElementById('usedby').options[document.getElementById('usedby').selectedIndex];
        var usedby_selectedUserId = usedby_selectedOption.value;
        var usedby_selectedUserName = usedby_selectedOption.text;

        // Set the values in the hidden input fields
        document.getElementById('usedby_selected_user_id').value = usedby_selectedUserId;
        document.getElementById('usedby_selected_user_name').value = usedby_selectedUserName;
    });




    // When the editMR form is submitted
    document.getElementById('editMR').addEventListener('submit', function(event) {
    // Get the selected option value and text for "Are to"
    var areto_selectedOption = document.getElementById('editareto').options[document.getElementById('editareto').selectedIndex];
    var areto_selectedUserId = areto_selectedOption.value;
    var areto_selectedUserName = areto_selectedOption.text;

    // Set the values in the hidden input fields for "Are to"
    document.getElementById('edit_selected_user_id').value = areto_selectedUserId;
    document.getElementById('edit_selected_user_name').value = areto_selectedUserName;

    // Get the selected option value and text for "Used by" in the editMR form
    var usedby_selectedOption = document.getElementById('usedby_edit').options[document.getElementById('usedby_edit').selectedIndex];
    var usedby_selectedUserId = usedby_selectedOption.value;
    var usedby_selectedUserName = usedby_selectedOption.text;

    // Set the values in the hidden input fields for "Used by" in the editMR form
    document.getElementById('edit_usedby_selected_user_id').value = usedby_selectedUserId;
    document.getElementById('edit_usedby_selected_user_name').value = usedby_selectedUserName;
});
});

// for export employee name

document.addEventListener('DOMContentLoaded', function() {
    // When the export-employee form is submitted
    document.getElementById('export-employee').addEventListener('submit', function(event) {
        // Get the selected option value and text for "Employee Name"
        var selectedOption = document.getElementById('usedbyExport').options[document.getElementById('usedbyExport').selectedIndex];
        var selectedUserId = selectedOption.value;
        var selectedUserName = selectedOption.text;

        // Set the values in the hidden input fields
        document.getElementById('usedbyexport_selected_user_id').value = selectedUserId;
        document.getElementById('usedbyexport_selected_user_name').value = selectedUserName;
    });
});


</script>
    


<!-- snackbar -->

<script>
function showSnackbar(message, success) {
    var x = document.getElementById("snackbar");
    var icon = success ? '<img src="assets/img/check.gif" style="width: 200px; height: 200px;">' : '';
    x.innerHTML = icon + message;
    x.className = "show " + (success ? "success" : "error");
    setTimeout(function() { 
        x.className = x.className.replace("show", ""); 
    }, 1800);
}


$(document).ready(function() {
    var insertSuccess = "<?php echo $this->session->tempdata('insert_success') ? '1' : ''; ?>";
    var insertMessage = "<?php echo $this->session->tempdata('insert_message') ?: ''; ?>";

    if (insertSuccess !== "") {
        showSnackbar(insertMessage, insertSuccess === "1");
        <?php
            // Clear session data
            // $this->session->unset_tempdata('insert_success');
            // $this->session->unset_tempdata('insert_message');
        ?>
    }
});

</script>

<!-- are file upload-->
<script>

$(function () {
            $(document).on('click', '.btn-add', function (e) {
                e.preventDefault();

                var controlForm = $('.controls:first'),
                    currentEntry = $(this).parents('.entry:first'),
                    newEntry = $(currentEntry.clone()).appendTo(controlForm);

                newEntry.find('input').val('');
                controlForm.find('.entry:not(:last) .btn-add')
                    .removeClass('btn-add').addClass('btn-remove')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('<span class="fa fa-trash"></span>');
            }).on('click', '.btn-remove', function (e) {
                $(this).parents('.entry:first').remove();

                e.preventDefault();
                return false;
            });
        });
</script>


<!-- end -->
</body>
</html>