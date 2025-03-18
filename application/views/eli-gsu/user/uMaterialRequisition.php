
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- css cdn pagination -->
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css"/>

    <link rel="stylesheet" href="assets/cssbhive/material_requisition.css" />
</head>
<body>
    <div class="d-flex" id="wrapper">
        <div class="container-fluid px-4">
        <!-- <?php if ($_SESSION['empstat'] == "Permanent") { ?>
            <div class="d-flex justify-content-center text-secondary mt-3 mb-0"><h2>Property Issued/Assigned</h2></div>
        <?php } else if ($_SESSION['empstat'] == "Contractual") { ?>
            <div class="d-flex justify-content-center text-secondary mt-3 mb-0"><h2>Property Assigned</h2></div>
        <?php } else { ?>
            no acc
        <?php } ?> -->
        <div class="d-flex justify-content-center text-secondary mt-3 mb-0"><h2>Property Issued/Assigned</h2></div>
        <!-- <div class="row g-3 my-1">
            <div class="col-md-4">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                    <h3 class="fs-2"><?php echo isset($total) ? $total : 0; ?></h3>
                        <p class="fs-5">Total Equipment</p>
                    </div>
                    <i class="fa-sharp fa-solid fa-box fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2"><?php echo isset($Serviceable) ? $Serviceable : 0; ?></h3>
                        <p class="fs-5">Servicable</p>
                    </div>
                    <i
                        class="fa-solid fa-thumbs-up fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2"><?php echo isset($Unserviceable) ? $Unserviceable : 0; ?></h3>
                        <p class="fs-5">Unservicable</p>
                    </div>
                    <i class="fa-solid fa-thumbs-down fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>
        </div> -->

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
    
            <!-- <table id="mr_table" class="table table-bordered bg-white rounded shadow-sm">    
                <thead>
                    <tr>
                        <th scope="col">Type</th>
                        <th scope="col" width="60">Class</th>
                        <th scope="col" width="50">Qty.</th>
                        <th scope="col" width="60">Unit</th>
                        <th scope="col">Item/Property</th>
                        <th scope="col">Property Number</th>
                        <th scope="col">Date Acquired</th>
                        <th scope="col">Serial Number</th>
                        <th scope="col">ARE To</th>
                        <th scope="col">Used by</th>
                        <th scope="col">Locator/ Division</th>
                        <th scope="col">Unit Value</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($user as $userData): ?>
                        <tr class="edit-row" data-toggle="modal" data-target="#edit_mr_modal" data-mr-id="<?php echo $userData->id; ?>">
                        <td title="<?php echo $userData->note; ?>"><?php echo $userData->type; ?></td>
                        <td title="<?php echo $userData->note; ?>"><?php echo $userData->class; ?></td>
                        <td title="<?php echo $userData->note; ?>"><?php echo $userData->qty; ?></td>
                        <td title="<?php echo $userData->note; ?>"><?php echo $userData->unit; ?></td>
                        <td title="<?php echo $userData->note; ?>"><?php echo $userData->property; ?></td>
                        <td title="<?php echo $userData->note; ?>"><?php echo $userData->property_num; ?></td>
                        <td title="<?php echo $userData->note; ?>"><?php echo $userData->date_acquired; ?></td>
                        <td title="<?php echo $userData->note; ?>"><?php echo $userData->serial; ?></td>
                        <td title="<?php echo $userData->note; ?>"><?php echo $userData->are_to; ?></td>
                        <td title="<?php echo $userData->note; ?>"><?php echo $userData->used_by; ?></td>
                        <td title="<?php echo $userData->note; ?>"><?php echo $userData->locator; ?></td>
                        <td title="<?php echo $userData->note; ?>"><?php echo number_format($userData->unit_value, 2, '.', ',');?></td>
                        <td title="<?php echo $userData->note; ?>"><?php echo $userData->status; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table> -->
        <!-- </div> -->

        <!-- total equipment -->
   
<!-- total equipment -->
<div class="tab-content">
<!-- <div class="tab-pane fade active show" id="total" role="tabpanel"> -->
<div class="tab-pane fade active show" id="total" role="tabpanel" aria-labelledby="total-tab">
    <div class="row table-responsive">
        <table id="mr_table" class="table table-bordered bg-white rounded">    
            <thead>
                <tr>
                    <th scope="col">Type</th>
                    <th scope="col" width="60">Class</th>
                    <th scope="col" width="50">Qty.</th>
                    <th scope="col" width="60">Unit</th>
                    <th scope="col">Item/Property</th>
                    <th scope="col">Property Number</th>
                    <th scope="col">Date Acquired</th>
                    <th scope="col">Serial Number</th>
                    <th scope="col">ARE To</th>
                    <th scope="col">Used by</th>
                    <th scope="col">Locator/ Division</th>
                    <th scope="col">Unit Value</th>
                    <th scope="col">Status</th>
                    <!-- <th scope="col">ARE File</th> -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($user as $userData): ?> 
                    <tr class="edit-row">
                        <td><?php echo $userData->unit; ?></td>
                        <td><?php echo $userData->type; ?></td>
                        <td><?php echo $userData->class; ?></td>
                        <td><?php echo $userData->qty; ?></td>
                        <td>
                            <a href="#" data-toggle="modal" data-target="#modal-files-<?php echo $userData->id; ?>"><?php echo $userData->property; ?></a>
                        </td>
                        <td><?php echo $userData->property_num; ?></td>
                        <td><?php echo $userData->date_acquired; ?></td>
                        <td><?php echo $userData->serial; ?></td>
                        <td><?php echo $userData->are_to; ?></td>
                        <td><?php echo $userData->used_by; ?></td>
                        <td><?php echo $userData->locator; ?></td>
                        <td><?php echo number_format($userData->unit_value, 2, '.', ',');?></td>
                        <td><?php echo $userData->status; ?></td> 
                        <!-- <td>
                            <a href="#" data-toggle="modal" data-target="#modal-files-<?php echo $userData->id; ?>"><?php echo $userData->are_name; ?></a>
                        </td> -->
                    </tr>

                    <!-- Files modal -->
                    <div class="modal fade" id="modal-files-<?php echo $userData->id; ?>" tabindex="-1" aria-labelledby="modal-files-<?php echo $userData->id; ?>" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modal-files-<?php echo $userData->id; ?>">Download Files</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body"> 
                                    <div class="form-group">
                                        <label><b>ARE Files</b></label></br>
                                        <!-- <a href="<?php echo base_url('StockController/download/' . $userData->are_name); ?>" download="<?php echo $userData->are_name; ?>" style="word-wrap: break-word; min-width: 60px; max-width: 60px;"><?php echo $userData->are_name; ?></a> -->
                                        <!-- <a href="<?php echo base_url('StockController/view_pdf/' . $userData->are_name); ?>" target="_blank"><?php echo $userData->are_name; ?></a> -->
                                        <?php
                                         $are_name = isset($userData->are_name) ? $userData->are_name : '';
                                         if (!empty($are_name)) {
                                             echo '<a href="' . base_url('StockController/view_pdf/' . $userData->are_name) . '" target="_blank">' . $userData->are_name . '</a>';
                                         } else {
                                             echo 'No ARE File';
                                         }
                                        ?>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label><b>PTR File</b></label></br>
                                        <!-- <a href="#" download="your_ptr_file.pdf">PTR File Link</a> -->
                                        <?php
                                         $ptr_name = isset($userData->ptr_name) ? $userData->ptr_name : '';
                                         if (!empty($ptr_name)) {
                                             echo '<a href="' . base_url('StockController/view_pdf/' . $userData->ptr_name) . '" target="_blank">' . $userData->are_name . '</a>';
                                         } else {
                                             echo 'No PTR File';
                                         }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Files modal -->
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>



<!-- serviceable -->
<!-- <div class="tab-pane fade" id="serviceable" role="tabpanel"> -->
<div class="tab-pane fade" id="serviceable" role="tabpanel" aria-labelledby="serviceable-table">
    <div class="row table-responsive">
        <table id="serviceable_table" class="table table-bordered bg-white rounded">    
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
                    <?php foreach ($userviceable as $uservice): ?> 
                        <tr class="edit-row" data-mr-id="<?php echo $uservice->id; ?>">
                            <td><?php echo $uservice->type; ?></td>
                            <td><?php echo $uservice->class; ?></td>
                            <td><?php echo $uservice->qty; ?></td>
                            <td><?php echo $uservice->unit; ?></td>
                            <td>
                            <a href="#" data-toggle="modal" data-target="#modal-servicefiles-<?php echo $uservice->id; ?>"><?php echo $userData->property; ?></a>
                            </td>
                            <!-- <td data-toggle="tooltip" data-placement="top" title="<?php echo $uservice->note; ?>"><?php echo $uservice->prop_descript; ?></td> -->
                            <td><?php echo $uservice->property_num; ?></td>
                            <td><?php echo $uservice->date_acquired; ?></td>
                            <td><?php echo $uservice->serial; ?></td>
                            <td><?php echo $uservice->are_to; ?></td>
                            <td><?php echo $uservice->used_by; ?></td>
                            <td><?php echo $uservice->locator; ?></td>
                            <td><?php echo number_format($uservice->unit_value, 2, '.', ',');?></td>
                            <!-- <td data-toggle="tooltip" data-placement="top" title="<?php echo $uservice->note; ?>"><?php echo number_format($uservice->total, 2, '.', ',');?></td> -->
                            <td><?php echo $uservice->status; ?></td> 
                            <!-- <td data-toggle="tooltip" data-placement="top" title="<?php echo $uservice->note; ?>" style="word-wrap: break-word; min-width: 60px; max-width: 60px;">
                                <a href="<?php echo base_url('StockController/download/' . $uservice->are_name); ?>" download="<?php echo $uservice->are_name; ?>"><?php echo $uservice->are_name; ?></a>
                            </td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $uservice->note; ?>" style="word-wrap: break-word; min-width: 60px; max-width: 60px;">
                                <a href="<?php echo base_url('StockController/download/' . $uservice->are_name); ?>" download="<?php echo $uservice->are_name; ?>"><?php echo $uservice->are_name; ?></a>
                            </td> -->
                        </tr>

                        <!-- Files modal -->
                            <div class="modal fade" id="modal-servicefiles-<?php echo $uservice->id; ?>" tabindex="-1" aria-labelledby="modal-files-<?php echo $uservice->id; ?>" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modal-files-<?php echo $uservice->id; ?>">Download Files</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body"> 
                                            <div class="form-group">
                                                <label>ARE Files</label>
                                                <a href="<?php echo base_url('StockController/download/' . $uservice->are_name); ?>" download="<?php echo $uservice->are_name; ?>" style="word-wrap: break-word; min-width: 60px; max-width: 60px;"><?php echo $userData->are_name; ?></a>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label>PTR File</label>
                                                <!-- Replace the following link with your actual PTR file link -->
                                                <a href="#" download="your_ptr_file.pdf">PTR File Link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- End of Files modal -->
                    <?php endforeach; ?>
                </tbody>
        </table>
    </div>
</div>

<!-- unserviceable -->
<div class="tab-pane fade" id="unserviceable" role="tabpanel" aria-labelledby="unserviceable-table">
    <div class="row table-responsive">
        <table id="unserviceable_table" class="table table-bordered bg-white rounded">    
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
                    <?php foreach ($uUnserviceable as $unservice): ?> 
                        <tr class="edit-row" data-toggle="modal" data-target="#edit_mr_modal" data-mr-id="<?php echo $unservice->id; ?>">
                            <td><?php echo $unservice->type; ?></td>
                            <td><?php echo $unservice->class; ?></td>
                            <td><?php echo $unservice->qty; ?></td>
                            <td><?php echo $unservice->unit; ?></td>
                            <td>
                            <a href="#" data-toggle="modal" data-target="#modal-uservicefiles-<?php echo $userData->id; ?>"><?php echo $userData->property; ?></a>
                            </td>
                            <!-- <td data-toggle="tooltip" data-placement="top" title="<?php echo $unservice->note; ?>"><?php echo $unservice->prop_descript; ?></td> -->
                            <td><?php echo $unservice->property_num; ?></td>
                            <td><?php echo $unservice->date_acquired; ?></td>
                            <td><?php echo $unservice->serial; ?></td>
                            <td><?php echo $unservice->are_to; ?></td>
                            <td><?php echo $unservice->used_by; ?></td>
                            <td><?php echo $unservice->locator; ?></td>
                            <td><?php echo number_format($unservice->unit_value, 2, '.', ',');?></td>
                            <!-- <td data-toggle="tooltip" data-placement="top" title="<?php echo $unservice->note; ?>"><?php echo number_format($unservice->total, 2, '.', ',');?></td> -->
                            <td><?php echo $unservice->status; ?></td> 
                            <!-- <td data-toggle="tooltip" data-placement="top" title="<?php echo $unservice->note; ?>" style="word-wrap: break-word; min-width: 60px; max-width: 60px;">
                                <a href="<?php echo base_url('StockController/download/' . $unservice->are_name); ?>" download="<?php echo $unservice->are_name; ?>"><?php echo $unservice->are_name; ?></a>
                            </td>
                            <td data-toggle="tooltip" data-placement="top" title="<?php echo $unservice->note; ?>" style="word-wrap: break-word; min-width: 60px; max-width: 60px;">
                                <a href="<?php echo base_url('StockController/download/' . $unservice->are_name); ?>" download="<?php echo $unservice->are_name; ?>"><?php echo $unservice->are_name; ?></a>
                            </td> -->
                        </tr>
                         <!-- Files modal -->
                            <div class="modal fade" id="modal-uservicefiles-<?php echo $unservice->id; ?>" tabindex="-1" aria-labelledby="modal-files-<?php echo $unservice->id; ?>" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modal-files-<?php echo $unservice->id; ?>">Download Files</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body"> 
                                            <div class="form-group">
                                                <label>ARE Files</label>
                                                <a href="<?php echo base_url('StockController/download/' . $unservice->are_name); ?>" download="<?php echo $unservice->are_name; ?>" style="word-wrap: break-word; min-width: 60px; max-width: 60px;"><?php echo $userData->are_name; ?></a>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label>PTR File</label>
                                                <!-- Replace the following link with your actual PTR file link -->
                                                <a href="#" download="your_ptr_file.pdf">PTR File Link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- End of Files modal -->
                    <?php endforeach; ?>
                </tbody>
        </table>
    </div>
</div>
    </div>
    </div>
    </div>

   

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

       <!-- end of edit modal -->
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

        </script>



</body>
</html>