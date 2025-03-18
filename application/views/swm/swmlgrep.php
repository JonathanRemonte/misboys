
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/1.12.1-jquery.dataTables.min.css"> -->

  <style media="screen">
    /* <!-- datab indi --> */
    tfoot input { width: 100%; padding: 3px; box-sizing: border-box; }
    /* showadlgu */
    #tow{ display: none; }
    /* div of modal lgu */
    #modlgudiv{ padding-bottom:20px; }
    /* hide modal id for increment */
    .modid{ visibility: hidden; margin-top:-45px; }

    table {
      width: 100%; /* Ensure the table takes the full width */
      border-collapse: collapse; /* Remove extra space between cells */
      table-layout: fixed; /* Force fixed column widths */
    }
    .provwid {
      width: 50%;
    }
    #swmcrud{
      color:black;
    }

    /* table */
    #biotab td, #biotab th {
      white-space: nowrap; /* Prevent wrapping */
      overflow: hidden;
      text-overflow: ellipsis;
      max-width: 150px; /* Adjust as needed */
    }

    #biotab {
      table-layout: fixed; /* Ensures columns do not expand */
      width: 100%;
    }
    .centered-cell {
        text-align: center;
        vertical-align: middle;
    }

  </style>

<html lang="en" dir="ltr">
  <body>

    <!-- ======= Sidebar ======= -->

    <main>
      <div class="pagetitle" style="">
        <h1>SWM LGU Waste Report</h1>

        <a type="button" class="btn btn-success" href="swmdash"><i class="bi bi-arrow-left"> </i>Back</a>

        <!-- <a class="btn btn-secondary m-2" href="<?php echo base_url('Auth/wasrec2xl/'.$_SESSION['lgu']); ?>" ><i class="bi bi-file-excel"></i> Export To Excel</a> -->
        <!-- <button type="button" class="btn btn-secondary" onclick="printTable()">Print Table</button> -->

      </div>
      <section>

        <!-- tab -->
        <div class="card">
          <div class="card-body">

            <div class="tab-content pt-2" id="myTabContent">
              <!-- Biodegradable starts-->
              <div class="tab-pane fade active show" id="bio" role="tabpanel" aria-labelledby="home-tab">
                <!-- card -->
                    <div class="row" style="">
                      <!-- table -->
                      <table id="biotab" class="display" style="">
                        <thead>
                          <tr>
                            <th class="centered-cell">#</th>
                            <th width="5%">LGU</th>
                            <th>Input Date</th>
                            <th>Collection Date</th>
                            <th>Type of Waste</th>
                            <th>Sub-Type</th>
                            <th>Category</th>
                            <th>Composting Facility/MRF(kg)</th>
                            <th>Disposed in SLF(kg)</th>
                            <th>RCA(kg)</th>
                            <th>Other(kg)</th>
                            <th>Specific</th>
                            <th>Total(kg)</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tfoot style="display:table-header-group;">
                          <tr>
                            <th width="5%"></th><th width="20%">LGU</th>
                            <th>Input Date</th><th>Collection Date</th>
                            <th>Waste Type</th><th>Waste Sub-Type</th>
                            <th>Comfac</th><th>disslf</th>
                            <th>rca</th>
                            <th>other</th><th>spcfy</th>
                            <th>biotot</th><th width="5%"></th>
                          </tr>
                        </tfoot>
                        <tbody>
                          <?php
                          // Define a mapping of session values to provinces
                          $provinceMap = array(
                              '8.5.1' => array('Palawan'),
                              '8.5.2' => array('Marinduque', 'Oriental'),
                              '8.5.3' => array('Romblon', 'Occidental'),
                              '8.4' => array('Romblon', 'Occidental', 'Marinduque', 'Oriental', 'Palawan'),
                              '1' => array('Romblon', 'Occidental', 'Marinduque', 'Oriental', 'Palawan'),
                              // Add more mappings as needed
                          );

                          // Create an array to store already outputted provinces
                          $outputtedProvinces = array();

                          $repcnt=0; foreach ($reslgwas as $rowwas) {

                          // foreach ($lgacc as $rowlgacc) {
                          $repcnt++;
                            //get prov
                            $words = explode(" ", $rowwas->lgu); $prov = $words[0];

                          // Check if the current session value exists in the mapping array
                          if (isset($provinceMap[$_SESSION['urights']])) {
                              $provinces = $provinceMap[$_SESSION['urights']];
                              // Check if the current province matches any province in the $provinces array
                              if (in_array($prov, $provinces) && !in_array($prov, $outputtedProvinces)) {
                                  ?>

                          <tr id="lgureg">
                            <td class="centered-cell"><?php echo $repcnt; ?></td>
                            <td title="<?php echo $rowwas->lgnam; ?> | <?php $wasindat = new DateTime($rowwas->wasindat); echo $wasindat->format('YMd'); ?> | <?php echo $rowwas->brgyname; ?>" style="width:1% important;"><?php echo $rowwas->lgu; ?></td>
                            <td><?php $wasindat = new DateTime($rowwas->wasindat); echo $wasindat->format('YMd'); ?></td>
                            <td><?php $wascoldat = new DateTime($rowwas->wascoldat); echo $wascoldat->format('YMd'); ?></td>
                            <td><?php echo $rowwas->wtyp; ?></td><td><?php echo $rowwas->wstyp; ?></td>
                            <td title="<?php echo $rowwas->wcat; ?>"><a href="#" style="cursor: pointer; text-decoration: none; color: inherit; pointer-events: none;"><?php echo $rowwas->wcat; ?></a></td>
                            <td class="centered-cell"><?php echo $rowwas->comfac; ?></td>
                            <td class="centered-cell"><?php echo $rowwas->disslf; ?></td><td class="centered-cell"><?php echo $rowwas->rca; ?></td>
                            <td class="centered-cell"><?php echo $rowwas->other; ?></td><td><?php echo $rowwas->spcfy; ?></td>
                            <td class="centered-cell" title="<?php echo 'in lbs: '.$rowwas->wastot*2.20462; ?>"><?php echo $rowwas->wastot; ?></td>
                            <td>
                              <?php if($rowwas->wasrem!='' && $rowwas->wasta!=4 && $rowwas->wasta!=2){ ?>
                                <!-- mail -->
                                <a class="open-lguEvents" data-id="wasrem" href="" data-bs-toggle="modal"  data-bs-toggle="" data-bs-target="#wasrem<?php echo $rowwas->wasid; ?>" id="lgedde"><span style="color:green;"><i class="bi bi-mailbox" title="Mailbox"></i></span></a>
                                <!-- mail -->
                              <?php } ?>
                                <!-- 1=lgu to eval, 0=eval to lgu, 2=eval to chief, chf to eval->1, 2-chf to approve -->
                              <?php
                              if($rowwas->wasta==1){ ?>
                                <!-- hourglass -->
                                <?php if ($_SESSION['urights']!=8.4){ ?>
                                  <button class="open-lguEvents btn btn-warning btn-sm" data-id="swmrtrnrply" href="" data-bs-toggle="modal"  data-bs-toggle="" data-bs-target="#swmrtrnrply<?php echo $rowwas->wasid; ?>" id="swmrtrnrply"><span style="color:black;"><i class="bi bi-hourglass-split" title="Pending"></i></span></button>
                                  <button class="open-lguEvents btn btn-success btn-sm" data-id="swmevalapprv" href="" data-bs-toggle="modal" data-bs-target="#swmevalapprv<?php echo $rowwas->wasid; ?>" id=""><span style="color:white;"><i class="bi bi-bookmark-check" title="Click to Approve"></i></span></button>
                                   <a class="open-lguEvents" data-id="swmrtrnrply" href="" data-bs-toggle="modal" data-bs-target="#swmrtrnrply<?php echo $rowwas->wasid; ?>" id=""><span style="color:green;"><i class="bi bi-bookmark-cross" title="Click to Approve"></i></span></a>
                                <?php } ?>
                              <?php }elseif($rowwas->wasta==0){ ?>
                                <!-- hourglass -->
                                <a class="open-lguEvents" data-id="wasrem" id="lgedde"><span style="color:red;"><i class="bi bi-clock" title="Pending"></i></span></a>
                              <?php }elseif($rowwas->wasta==2){ ?>
                                <!-- hourglass -->
                                <?php if ($_SESSION['urights']!=8.4){ ?>
                                  <a class="open-lguEvents" data-id="wasrem" href="" data-bs-toggle="modal"  data-bs-toggle="" data-bs-target="#wasrem<?php echo $rowwas->wasid; ?>" id="lgedde"><span style="color:red;"><i class="bi bi-arrow-up" title="SWM Chief"></i></span></a>
                                <?php }else{ ?>
                                  <a class="open-lguEvents" data-id="swmaprvchief" href="" data-bs-toggle="modal"  data-bs-toggle="" data-bs-target="#swmaprvchief<?php echo $rowwas->wasid; ?>" id="swmaprvchief"><span style="color:red;"><i class="bi bi-alarm-fill" title="For SWM Chief"></i></span></a>
                                <?php } ?>
                              <?php }elseif($rowwas->wasta==4){ ?>
                                <!-- starfill -->
                                <button class="open-lguEvents btn btn-success btn-sm" data-id="wasrem" href="" data-bs-toggle="modal"  data-bs-toggle="" data-bs-target="#wasrem<?php echo $rowwas->wasid; ?>" id="lgedde"><span style="color:gold;"><i class="bi bi-star-fill" title="Finish"></i></span></button>
                              <?php } ?>
                            </td>

                            <!-- swm chief modal appr-4 dis-2-->
                            <div class="modal fade" id="swmaprvchief<?php echo $rowwas->wasid; ?>" tabindex="-1" aria-hidden="true" style="display: none;">
                              <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header" style="background-color:orange;">
                                    <h5 class="modal-title" style="color:white;">For SWM Chief Approval</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <form class="row g-3 needs-validation" method="post" action="<?php echo site_url('Auth/embvrfy') ?>/<?php echo $rowwas->wasid; ?>" novalidate>
                                    <div class="modal-body">
                                      <div class="form-group" hidden>
                                        <input class="form-control" type="" name="varOne" id="eventlgu"/>
                                      </div>
                                      <div class="col-12">
                                        <div class="row">
                                          <div class="col-4" style="padding-top:10px;">
                                            <label for="">Composting Facilities</label>
                                            <input type="text" name="comfac" id="comfac1" class="form-control" value="<?php echo $rowwas->comfac; ?>" required readonly>
                                            <div class="invalid-feedback" id="feed">Required field!</div>
                                          </div>
                                          <div class="col-4" style="padding-top:10px;">
                                            <label for="">Disposed in SLFs</label>
                                            <input type="text" name="disslf" id="disslf1" class="form-control" value="<?php echo $rowwas->disslf; ?>" required readonly>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <div class="row">
                                          <div class="col-2" style="padding-top:10px;">
                                            <label for="">RCA</label>
                                            <input type="text" name="rca" id="rca1" class="form-control" value="<?php echo $rowwas->rca; ?>" required readonly>
                                          </div>
                                          <div class="col-2" style="padding-top:10px;">
                                            <label for="">Others</label>
                                            <input type="text" name="other" id="other1" class="form-control" value="<?php echo $rowwas->other; ?>" required readonly>
                                          </div>
                                          <div class="col-4" name="spcfy" id="cont1" style="padding-top:10px;">
                                            <div class="row">
                                              <label for="">If Others, pls. specify:</label>
                                              <div class="col-1" style="font-size:20px;margin-left:-18px;">
                                                <i class="bi bi-arrow-right-circle"></i>
                                              </div>
                                              <div class="col-11" style="margin-right:-50px;width:98%;">
                                                <input class="form-control" name="spcfy" id="spcfy1" type="text" value="<?php echo $rowwas->spcfy; ?>" readonly/>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-4" style="padding-top:10px;">
                                            <label for="">TOTAL</label>
                                            <input type="text" name="wastot" class="form-control" id="wastot1" value="<?php echo $rowwas->wastot; ?>" required readonly>
                                            <div class="invalid-feedback" id="feed">Required field!</div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <div class="row">
                                          <label for="" style="padding-top:10px;">Thread</label>
                                          <div class="col-12">
                                            <textarea name="" rows="4" cols="93" value="" disabled><?php echo $rowwas->wasrem; ?></textarea>
                                            <textarea name="messy" rows="4" cols="93" value="" hidden><?php echo $rowwas->wasrem; ?></textarea>
                                          </div>
                                          <label for="" style="padding-top:10px;">Remarks/Comments</label>
                                          <div class="col-12">
                                            <textarea name="messz" rows="4" cols="74" value="" style="font-size: 20px;"></textarea>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- 0 - Pending, 1 - Returned, 2 - Returned with Reply, 3 - Completed -->
                                      <div class="modal-footer" style="">
                                        <div class="col-12" style="">
                                          <div class="row">
                                            <div class="col-6" style="text-align:right;">
                                              <button type="submit" name="swmchfval" value="4" class="btn btn-success" data-bs-dismiss="modal">Approve</button>
                                            </div>
                                            <div class="col-6" style="text-align:right;">
                                              <button type="submit" name="swmchfval" value="1" class="btn btn-danger" data-bs-dismiss="modal">Disapprove</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div><!-- End Basic Modal-->
                            <!-- swm chief modal -->

                            <!-- rtrnrply modal -->
                            <div class="modal fade" id="swmrtrnrply<?php echo $rowwas->wasid; ?>" tabindex="-1" aria-hidden="true" style="display: none;">
                              <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header" style="background-color:orange;">
                                    <h5 class="modal-title" style="color:white;">Returned with Reply</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <form class="row g-3 needs-validation" method="post" action="<?php echo site_url('Auth/embvrfy') ?>/<?php echo $rowwas->wasid; ?>" novalidate>
                                    <div class="modal-body">
                                      <div class="form-group" hidden>
                                        <input class="form-control" type="" name="varOne" id="eventlgu"/>
                                      </div>
                                      <div class="col-12">
                                        <div class="row">
                                          <div class="col-4" style="padding-top:10px;">
                                            <label for="">Composting Facilities</label>
                                            <input type="text" name="comfac" id="comfac1" class="form-control" value="<?php echo $rowwas->comfac; ?>" required readonly>
                                            <div class="invalid-feedback" id="feed">Required field!</div>
                                          </div>
                                          <div class="col-4" style="padding-top:10px;">
                                            <label for="">Disposed in SLFs</label>
                                            <input type="text" name="disslf" id="disslf1" class="form-control" value="<?php echo $rowwas->disslf; ?>" required readonly>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <div class="row">
                                          <div class="col-2" style="padding-top:10px;">
                                            <label for="">RCA</label>
                                            <input type="text" name="rca" id="rca1" class="form-control" value="<?php echo $rowwas->rca; ?>" required readonly>
                                          </div>
                                          <div class="col-2" style="padding-top:10px;">
                                            <label for="">Others</label>
                                            <input type="text" name="other" id="other1" class="form-control" value="<?php echo $rowwas->other; ?>" required readonly>
                                          </div>
                                          <div class="col-4" name="spcfy" id="cont1" style="padding-top:10px;">
                                            <div class="row">
                                              <label for="">If Others, pls. specify:</label>
                                              <div class="col-1" style="font-size:20px;margin-left:-18px;">
                                                <i class="bi bi-arrow-right-circle"></i>
                                              </div>
                                              <div class="col-11" style="margin-right:-50px;width:98%;">
                                                <input class="form-control" name="spcfy" id="spcfy1" type="text" value="<?php echo $rowwas->spcfy; ?>" readonly/>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-4" style="padding-top:10px;">
                                            <label for="">TOTAL</label>
                                            <input type="text" name="wastot" class="form-control" id="wastot1" value="<?php echo $rowwas->wastot; ?>" required readonly>
                                            <div class="invalid-feedback" id="feed">Required field!</div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <div class="row">
                                          <label for="" style="padding-top:10px;">Remarks/Comments</label>
                                          <div class="col-12">
                                            <textarea name="" rows="4" cols="93" value="" disabled><?php echo $rowwas->wasrem; ?></textarea>
                                            <textarea name="messy" rows="4" cols="93" value="" hidden><?php echo $rowwas->wasrem; ?></textarea>
                                          </div>
                                          <label for="" style="padding-top:10px;">Remarks/Comments</label>
                                          <div class="col-12">
                                            <textarea name="messz" rows="4" cols="93" value=""></textarea>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- 0 - Pending, 1 - Returned, 2 - Returned with Reply, 3 - Completed -->
                                      <div class="modal-footer">
                                          <div class="">
                                            <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Submit</button>
                                          </div>
                                          <div class="">
                                            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                                          </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div><!-- End Basic Modal-->
                            <!-- rtrnrply modal -->

                            <!-- pndngvrfy modal -->
                            <div class="modal fade" id="pndngvrfy<?php echo $rowwas->wasid; ?>" tabindex="-1" aria-hidden="true" style="display: none;">
                              <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header" style="background-color:orange;">
                                    <h5 class="modal-title" style="color:white;">Verify</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <form class="row g-3 needs-validation" method="post" action="<?php echo site_url('Auth/embvrfy') ?>/<?php echo $rowwas->wasid; ?>" novalidate>
                                    <div class="modal-body">
                                      <div class="form-group" hidden>
                                        <input class="form-control" type="" name="varOne" id="eventlgu"/>
                                      </div>
                                      <div class="col-12">
                                        <div class="row">
                                          <div class="col-4" style="padding-top:10px;">
                                            <label for="">Type of Waste</label>
                                            <input type="text" name="comfac" id="comfac1" class="form-control" value="<?php echo $rowwas->wtyp; ?>" required readonly>
                                          </div>
                                          <div class="col-4" style="padding-top:10px;">
                                            <label for="">Sub-Type</label>
                                            <input type="text" name="disslf" id="disslf1" class="form-control" value="<?php echo $rowwas->wstyp; ?>" required readonly>
                                            <div class="invalid-feedback" id="feed">Required field!</div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <div class="row">
                                          <div class="col-4" style="padding-top:10px;">
                                            <label for="">Composting Facilities</label>
                                            <input type="text" name="comfac" id="comfac1" class="form-control" onkeydown="numFil(this);" onKeyUp="wassum1();" value="<?php echo $rowwas->comfac; ?>" required readonly>
                                            <div class="invalid-feedback" id="feed">Required field!</div>
                                          </div>
                                          <div class="col-4" style="padding-top:10px;">
                                            <label for="">Disposed in SLFs</label>
                                            <input type="text" name="disslf" id="disslf1" class="form-control" onkeydown="numFil(this);" onKeyUp="wassum1();" value="<?php echo $rowwas->disslf; ?>" required readonly>
                                            <div class="invalid-feedback" id="feed">Required field!</div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <div class="row">
                                          <div class="col-2" style="padding-top:10px;">
                                            <label for="">RCA</label>
                                            <input type="text" name="rca" id="rca1" class="form-control" onkeydown="numFil(this);" onKeyUp="wassum1();" value="<?php echo $rowwas->rca; ?>" required readonly>
                                            <div class="invalid-feedback" id="feed">Required field!</div>
                                          </div>
                                          <div class="col-2" style="padding-top:10px;">
                                            <label for="">Others</label>
                                            <input type="text" name="other" id="other1" class="form-control" onkeypress="showOth1();" onKeyUp="wassum1();" onkeydown="numFil(this);" value="<?php echo $rowwas->other; ?>" required readonly>
                                            <div class="invalid-feedback" id="feed">Required field!</div>
                                          </div>
                                          <div class="col-4" name="spcfy" id="cont1" style="padding-top:10px;">
                                            <div class="row">
                                              <label for="">If Others, pls. specify:</label>
                                              <div class="col-1" style="font-size:20px;margin-left:-18px;">
                                                <i class="bi bi-arrow-right-circle"></i>
                                              </div>
                                              <div class="col-11" style="margin-right:-50px;width:98%;">
                                                <input class="form-control" name="spcfy" id="spcfy1" type="text" value="<?php echo $rowwas->spcfy; ?>" readonly/>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-4" style="padding-top:10px;">
                                            <label for="">TOTAL</label>
                                            <input type="text" name="wastot" class="form-control" id="wastot1" value="<?php echo $rowwas->wastot; ?>" required readonly>
                                            <div class="invalid-feedback" id="feed">Required field!</div>
                                          </div>
                                        </div>
                                      </div>

                                      <label for="" style="padding-top:10px;">Remarks/Comments</label>
                                      <div class="col-12">
                                        <textarea name="messz" rows="4" cols="93" value=""></textarea>
                                      </div>
                                    </div>
                                    <!-- 0 - Pending, 1 - Returned, 2 - Returned with Reply, 3 - Completed -->
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-warning" data-bs-dismiss="modal">Return</button>
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div><!-- End Basic Modal-->
                            <!-- pndngvrfy modal -->

                            <!-- drctaprv modal -->
                            <div class="modal fade" id="swmevalapprv<?php echo $rowwas->wasid; ?>" tabindex="-1" aria-hidden="true" style="display: none;">
                              <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header" style="background-color:green;">
                                    <h5 class="modal-title" style="color:white;">Approve this record?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <form class="row g-3 needs-validation" method="post" action="<?php echo site_url('Auth/embvrfy') ?>/<?php echo $rowwas->wasid; ?>" novalidate>
                                    <div class="modal-body">
                                      <div class="" hidden>
                                        <input type="text" name="varOne" id="eventlgu" value="">
                                      </div>
                                      <div class="col-12">
                                        <div class="row">
                                          <div class="col-4" style="padding-top:10px;">
                                            <label for="">Composting Facilities</label>
                                            <input type="text" name="comfac" id="comfac1" class="form-control" value="<?php echo $rowwas->comfac; ?>" required readonly>
                                            <div class="invalid-feedback" id="feed">Required field!</div>
                                          </div>
                                          <div class="col-4" style="padding-top:10px;">
                                            <label for="">Disposed in SLFs</label>
                                            <input type="text" name="disslf" id="disslf1" class="form-control" value="<?php echo $rowwas->disslf; ?>" required readonly>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <div class="row">
                                          <div class="col-2" style="padding-top:10px;">
                                            <label for="">RCA</label>
                                            <input type="text" name="rca" id="rca1" class="form-control" value="<?php echo $rowwas->rca; ?>" required readonly>
                                          </div>
                                          <div class="col-2" style="padding-top:10px;">
                                            <label for="">Others</label>
                                            <input type="text" name="other" id="other1" class="form-control" value="<?php echo $rowwas->other; ?>" required readonly>
                                          </div>
                                          <div class="col-4" name="spcfy" id="cont1" style="padding-top:10px;">
                                            <div class="row">
                                              <label for="">If Others, pls. specify:</label>
                                              <div class="col-1" style="font-size:20px;margin-left:-18px;">
                                                <i class="bi bi-arrow-right-circle"></i>
                                              </div>
                                              <div class="col-11" style="margin-right:-50px;width:98%;">
                                                <input class="form-control" name="spcfy" id="spcfy1" type="text" value="<?php echo $rowwas->spcfy; ?>" readonly/>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-4" style="padding-top:10px;">
                                            <label for="">TOTAL</label>
                                            <input type="text" name="wastot" class="form-control" id="wastot1" value="<?php echo $rowwas->wastot; ?>" required readonly>
                                            <div class="invalid-feedback" id="feed">Required field!</div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <div class="row">
                                          <?php if($rowwas->wasrem!=''){ ?>
                                            <label for="" style="padding-top:10px;">Remarks/Comments</label>
                                            <div class="col-12">
                                              <textarea name="" rows="4" cols="93" value=""disabled><?php echo $rowwas->wasrem; ?></textarea>
                                              <textarea name="messy" rows="4" cols="93" value="" hidden><?php echo $rowwas->wasrem; ?></textarea>
                                            </div>
                                          <?php }else{ } ?>
                                          <label for="" style="padding-top:10px;">Remarks/Comments</label>
                                          <div class="col-12">
                                            <textarea name="messz" rows="4" cols="93" value=""></textarea>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Yes</button>
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                            <!-- drctaprv modal -->

                            <!-- message modal -->
                            <div class="modal fade" id="wasrem<?php echo $rowwas->wasid; ?>" tabindex="-1" aria-hidden="true" style="display: none;">
                              <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header" style="background-color:#9b59b6;">
                                    <h5 class="modal-title" style="color:white;">Thread</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                    <div class="modal-body" style="background-color:#9b59b6;">
                                      <div class="col-12">
                                        <div class="row">
                                          <div class="col-12">
                                            <textarea name="" rows="4" cols="49" value="" style="font-weight:bold;" disabled><?php echo $rowwas->wasrem; ?></textarea>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                              </div>
                            </div><!-- End Basic Modal-->
                            <!-- message modal -->
                          </tr>
                          <?php
                                    // $outputtedProvinces[] = $prov; // Mark the province as outputted
                                }//in_array
                              }//issetProvinceMap
                            }//foreach lgacc
                         ?>
                        </tbody>

                      </table>
                      <!-- table -->
                    </div>
                <!-- card -->
              </div>
              <!-- Biodegradable ends-->

            </div><!-- End Pills Tabs -->

          </div>
        </div>

      </section>
    </main>

  </body>
</html>

      <!-- edit all modal -->
      <script type="text/javascript">$(document).on("click", ".open-lguEvents", function () {
         var eventlgu = $(this).data('id');
         $(".modal-body #eventlgu").val( eventlgu );
         $('#idHolder').html( eventlgu );
      });</script>
      <!-- edit all modal -->

      <!-- biotab datab indi -->
      <script type="text/javascript">
        $(document).ready(function () {
          // Setup - add a text input to each footer cell
          $('#biotab tfoot th').each( function () { var title = $(this).text();
            //remove first column
            if (title != '') { $(this).html( '<input type="text" placeholder="Search '+title+'" />' ); } } );

          // DataTable
          var table = $('#biotab').DataTable({ initComplete: function () {
                  // Apply the search
                  this.api() .columns() .every(function () { var that = this;

                          $('input', this.footer()).on('keyup change clear', function () { if (that.search() !== this.value) { that.search(this.value).draw(); } }); }); }, }); });
      </script>
      <!-- bio datab indi -->

      <!-- show adlgu form -->
      <script type="text/javascript"> function adlgu() { $("#tow").slideToggle("slow"); } </script>
      <!-- show adlgu form -->

      <!-- <script src="<?php echo base_url(); ?>assets/js/jquery-3.5.1.js"></script> -->

      <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
