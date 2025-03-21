
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/1.12.1-jquery.dataTables.min.css"> -->

  <style media="screen">
    /* <!-- datab indi --> */
    tfoot input { width: 100%; padding: 3px; box-sizing: border-box; }
  </style>

  <style media="screen">
    .butcen { position: absolute; right: 0; background-color:#007EF2; width:170px; margin:0 auto; margin-top:-83px; }
  </style>

  <body>

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
          <a class="nav-link collapsed" href="index">
            <i class="bi bi-hexagon"></i>
            <span>Dashboard</span>
          </a>
        </li><!-- End Dashboard Nav -->

        <?php if($_SESSION['urights']==7){ ?>
          <li class="nav-item">
            <a class="nav-link collapsed" href="cpdex">
              <i class="bi bi-speedometer2"></i><span>CPD Express</span>
            </a>
          </li><!-- End Tables Nav -->
        <?php } ?>

        <li class="nav-item" hidden>
          <a class="nav-link collapsed" href="firmdash">
            <i class="ri-building-2-line"></i><span>Firms VS Permits (Temporary List)</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="firmdash">
            <i class="bi bi-building"></i><span>Firms</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="swmdash">
            <i class="bi bi-recycle"></i><span>SWM</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
        </li><!-- End Tables Nav -->

        <!------------------- GSU System --------------------------->

        <?php if($_SESSION['urights']==3.4 || $_SESSION['urights']=='3.4.1' || ($_SESSION['urights'] == 1)){?>
          <li class="nav-item">
          <a class="nav-link collapsed" href="userMR">
          <i class="bi bi-box-seam"></i><span>GSU Transaction</span>
          </a>
        <?php }else{ ?>
          <li class="nav-item">
          <a class="nav-link collapsed" href="userMR">
          <i class="bi bi-box-seam"></i><span>GSU Transaction</span>
          </a>
        <?php } ?>
        <!------------------- GSU System --------------------------->

        <li class="nav-item">
          <a class="nav-link collapsed" href="plan">
            <i class="bi bi-intersect"></i><span>Planning</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="req2op">
            <i class="bi bi-fingerprint"></i>
            <span style="padding-right:10px;">Access Request</span>
          </a>
        </li><!-- End isscon Page Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="arcgis">
            <i class="bi bi-globe"></i><span>ArcGIS</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
        </li><!-- End Tables Nav -->

        <li class="nav-item" hidden>
          <a class="nav-link collapsed" href="arcgis">
            <i class="bi bi-app-indicator"></i><span>Ozone Depleting Substances</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#tables-nav" href="ghgdash">
            <i class="bi bi-patch-exclamation"></i><span>Greenhouse Gas</span>
          </a>
        </li>

        <li class="nav-item" hidden>
          <a class="nav-link collapsed" href="airqdash">
            <i class="bi bi-wind"></i><span>Air Quality</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
        </li><!-- End Tables Nav -->

        <?php if($_SESSION['urights']==1||$_SESSION['urights']==4){ ?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="que">
            <i class="bi bi-people"></i><span>Queue</span>
          </a>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="form">
            <i class="bi bi-person-badge"></i><span>Client Que Form</span>
          </a>
        </li><!-- End Tables Nav -->
        <?php } ?>


        <li class="nav-heading">FAD</li>
        <li class="nav-item">
          <a class="nav-link collapse" data-bs-target="#tables-nav" href="findash">
            <i class="bi bi-cash-stack"></i><span>Finance</span>
          </a>
          <?php if($_SESSION['urights']==3.2||$_SESSION['urights']=='3.2.1'||$_SESSION['urights']=='1'){ ?>
            <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
              <li>
                <a href="casmon" class="active">
                  <i class="bi bi-cash"></i><span>Cash Monitoring</span>
                </a>
              </li>
              <!-- <li>
                <a href="fingaa" class="">
                  <i class="bi bi-people"></i><span>GAA</span>
                </a>
              </li>
              <li>
                <a href="finbrobps" class="">
                  <i class="bi bi-people"></i><span>Breakdown PS</span>
                </a>
              </li>
              <li>
                <a href="finbrobps2" class="">
                  <i class="bi bi-people"></i><span>Breakdown PS 2</span>
                </a>
              </li>
              <li>
                <a href="fintry" class="">
                  <i class="bi bi-people"></i><span>Fin Try 1</span>
                </a>
              </li> -->
            </ul>
          <?php } ?>
        </li>

        <li class="nav-heading">Upkeep</li>

        <?php if($_SESSION['urights']==1||$_SESSION['urights']==4||$_SESSION['urights']==5||$_SESSION['urights']==5.1||$_SESSION['urights']==5.2||$_SESSION['urights']==5.3||$_SESSION['urights']==5.4||$_SESSION['urights']==5.5){ ?>
          <li class="nav-item">
            <a class="nav-link collapsed" href="isscon">
              <i class="bi bi-chat-right-dots"></i>
              <span>Issues and Concerns</span>
            </a>
          </li><!-- End isscon Page Nav -->
          <li class="nav-item" hidden>
            <a class="nav-link collapsed" href="ojt-index">
              <i class="bi bi-chat-right-dots"></i>
              <span>Organizational Chart</span>
            </a>
          </li><!-- End isscon Page Nav -->
        <?php } ?>

        <li class="nav-item">
          <a class="nav-link collapsed" href="convention">
            <i class="bi bi-lightbulb"></i>
            <span style="padding-right:10px;">Convention of Ideas</span>
          </a>
        </li><!-- End isscon Page Nav -->

      </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
      <div class="pagetitle" style="">
        <div class="row" style="padding-top:20px;">
          <div class="col-12" style="">
            <div class="row">
              <div class="col-4"><h1>Cash Monitoring</h1></div>
              <div class="col-4"></div>
              <div class="col-4">
                <div class="row">
                  <div class = "col" style="text-align: right;font-weight: bold;font-size:40px;">P 1,000,000.00</div>
                  <button class = "col" style="text-align: right;font-weight: bold;font-size:40px;">+</button>
                  <button class = "col" style="text-align: right;font-weight: bold;font-size:40px;">pen</button>
                </div>
                <div class="row">
                  <div class = "col" style="text-align: right;font-weight: bold;font-size:40px;">P 2,000,000.00</div>
                  <button class = "col" style="text-align: right;font-weight: bold;font-size:40px;">+</button>
                  <button class = "col" style="text-align: right;font-weight: bold;font-size:40px;">pen</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      <!-- Form for Create/Update -->
      <section class="pt-3">
        <h1>Add New Check</h1>

          <!-- Display success message -->
          <?php if ($this->session->flashdata('success')): ?>
              <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
          <?php endif; ?>
          <!-- Display error message -->
          <?php if ($this->session->flashdata('error')): ?>
              <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
          <?php endif; ?>

          <div class="card border-primary">
            <form class="p-4" action= "<?= base_url('add_receipt') ?>" method="POST" style="background-color: #e5eaf3;">
              <!-- Start of Form -->
              <!-- <div class="d-flex justify-content-evenly mb-2">
                <div>
                  <input type="radio" name="mop" id="ada">
                  <label for="ada">ADA</label>
                </div>
                <div>
                  <input type="radio" name="mop" id="check">
                  <label for="check">Check</label>
                </div>
              </div> -->
              <!-- <div class="row mb-2" hidden>
                <label hidden>ID</label>
                <input type="integer" id="casid" name="casid" class="form-control" placeholder="ID" required>
              </div> -->
              <div class="row mb-2">
                  <label hidden>Date</label>
                  <input type="text" id="casdate" name="casdate" class="form-control" placeholder="Date" required>
              </div>
              <div class="row mb-2">
                  <label hidden>ORS</label>
                  <input type="text" id="casors" name="casors" class="form-control" placeholder="ORS number" required>
              </div>
              <!-- <div class="row mb-2">
                  <label hidden>DV</label>
                  <input type="integer" id="casdv" name="casdv" class="form-control" placeholder="DV number" required>
              </div>
              <div class="row mb-2">
                  <label hidden>Particulars</label>
                  <input type="text" id="casparticulars" name="casparticulars" class="form-control" placeholder="Particulars" required>
              </div>
              <div class="row mb-2">
                  <label hidden>Amount</label>
                  <input type="integer" id="casamount" name="casamount" class="form-control" placeholder="Amount" required>
              </div>
              <div class="row mb-2">
                  <label hidden>Tax</label>
                  <input type="integer" id="castax" name="castax" class="form-control" placeholder="Tax" required>
              </div>
              <div class="row mb-2">
                  <label hidden>Net Amount</label>
                  <input type="integer" id="casnet" name="casnet" class="form-control" placeholder="Net Amount" required>
              </div> -->

              <button type="submit" class="btn btn-primary">Save</button>
              <button type="button" id="resetBtn" class="btn btn-secondary">Cancel</button>
            </form>
          </div>
      </section>

      <!-- <section>
        <div class="modal fade" id="wasmod" tabindex="-1" aria-hidden="true" style="display: none;">
          <div class="modal-dialog custom-modal modal-dialog-top">
            <div class="modal-content">
              <div class="modal-header btn btn-primary" onclick="showNextDiv()" style="background-color:#0077fd;">
                <h5 class="modal-title" style="color:white;">Add Waste Record (Click the banner to add row)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <form id="wasterecord" class="row g-3 needs-validation" method="post" action="<?php echo site_url('Lgu/wasad'); ?>" onsubmit="return validateForm()">
                <div class="modal-body small-text">

                  allinfo
                  <div class="col-12">
                    <div class="row" style="padding-top:8px;">
                      <div class="col-3">
                        <input type="text" name="lgusid" class="form-control" value="" required>
                        <div class="invalid-feedback" id="feed">Please, enter your $%^lgusid%$^&!</div>
                      </div>
                      <div class="col-3">
                        <input type="text" name="lgnam" class="form-control" value="" required>
                        <div class="invalid-feedback" id="feed">Please, enter your Name!</div>
                      </div>
                      <div class="col-3">
                        <input type="text" name="lgu" class="form-control" value="" required>
                        <div class="invalid-feedback" id="feed">Please, enter your @#$%LGU@#$!</div>
                      </div>
                    </div>
                  </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Save changes</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section> -->

      <section>
        <!-- tab -->
        <div class="">
          <div class="">

            <!-- Pills Tabs -->
            <div class="tab-content pt-2" id="myTabContent">

              <!-- fuel starts-->
              <div class="tab-pane fade active show" id="fuel" role="tabpanel" aria-labelledby="home-tab">
                <!-- card -->

                  <!-- <div class="butcen">
                    <button type="button" class="btn float-right" style="color:white;" data-bs-toggle="modal" data-bs-target="#adghgfuel"><i class="bi bi-speedometer2"></i> Add record</button>
                  </div> -->

                  <!-- table -->
                  <table id="fueltab" class="display" style="width:100%">
                    <thead>
                    <tr>
                      <td>#</td>
                      <td>date</td>
                      <td>ors #</td>
                      <td>dv #</td>
                      <td>Particulars</td>
                      <td>amount</td>
                      <td>tax</td>
                      <td>net amount</td>
                      <td>per ppe</td>
                    </tr>
                    </thead>
                    <tfoot style="display:table-header-group;">
                    <tr>
                      <th width="5%"></th>
                      <th>Date</th>
                      <th>ors #</th>
                      <th>dv #</th>
                      <th>particulars</th>
                      <th>amount</th>
                      <th>tax</th>
                      <th>net amount</th>
                      <th>per ppe</th>
                    </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                          <td>#</td>
                          <td>date</td>
                          <td>ors #</td>
                          <td>dv #</td>
                          <td>Particulars</td>
                          <td>amount</td>
                          <td>tax</td>
                          <td>net amount</td>
                          <td>per ppe</td>
                          <!-- <td><?php echo $rowg->kgco2e; ?></td> -->


                        </tr>
                    </tbody>
                  </table>
                  <!-- table -->
                </div>
                <!-- card -->
              </div>
              <!-- fuel ends-->

              <!-- electricity starts-->
              <div class="tab-pane fade" id="elec" role="tabpanel" aria-labelledby="profile-tab">
                <!-- card -->
                <div class="row" style="padding-top:20px;">

                  <div class="butcen">
                    <button type="button" class="btn float-right" style="color:white;" data-bs-toggle="modal" data-bs-target="#adghgelec"><i class="bi bi-lightning"></i> Add record</button>
                  </div>

                  <!-- table -->
                  <table id="electab" class="display" style="width:100%">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Month</th>
                      <th>kWh</th>
                      <th>40% Usage</th>
                      <th>MWh - MIMAROPA</th>
                      <th>Luzon-Visayas EF</th>
                      <th>tCO2e</th>
                    </tr>
                    </thead>
                    <tfoot style="display:table-header-group;">
                    <tr>
                      <th width="5%"></th>
                      <th>Month</th>
                      <th>kWh</th>
                      <th>40% Usage</th>
                      <th>MWh - MIMAROPA</th>
                      <th>Luzon-Visayas EF</th>
                      <th>tCO2e</th>
                    </tr>
                    </tfoot>
                    <tbody>
                      <?php $elecnt=0; foreach ($resel as $rowel) {
                        $elecnt++; ?>
                        <tr>
                          <td><?php echo $elecnt; ?></td>
                          <td><a data-id="" href="" data-bs-toggle="modal" data-bs-target="#deelec<?php echo $rowel->elecid; ?>" title="Delete" style="font-weight:bold;color:535353;"><?php echo $rowel->month; ?></a></td>
                          <td><?php echo $rowel->kwh; ?></td>
                          <td><?php echo $rowel->eleuse; ?></td>
                          <td><?php echo $rowel->mwh; ?></td>
                          <td><?php echo $rowel->lvef; ?></td>
                          <td><?php echo $rowel->tco2e; ?></td>

                          <!-- deelec -->
                          <div class="modal fade" id="deelec<?php echo $rowel->elecid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color:#DF362D;">
                                  <h5 class="modal-title" id="exampleModalLabel"><b>Remove this Record?</b></h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form method="post" action="<?php echo site_url('Auth/delele') ?>/<?php echo $rowel->elecid; ?>">
                                    <div class="" hidden>
                                      <input type="text" class="form-control" name="elecid" value="<?php echo $rowel->elecid; ?>" required>
                                    </div>
                                    <div class="" style="margin-top:-15px;">
                                      <input type="text" class="form-control" name="" value="<?php echo $rowel->month; ?>" required>
                                    </div>
                                   <div class="footer" style="text-align:right;">
                                      <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- deelec -->

                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                  <!-- table -->
                </div>
                <!-- card -->
              </div>
              <!-- electricity ends-->

              <!-- air travel starts-->
              <div class="tab-pane fade" id="air" role="tabpanel" aria-labelledby="contact-tab">
                <!-- card -->
                <div class="card" >
                  <div class="card-body">
                    <div class="row" style="padding-top:20px;">

                      <div class="butcen">
                        <button type="button" class="btn float-right" style="color:white;" data-bs-toggle="modal" data-bs-target="#adghgair"><i class="bi bi-clouds"></i> Add record</button>
                      </div>

                      <!-- table -->
                      <table id="airtab" class="display" style="width:100%">
                        <thead>
                        <tr>
                          <th>#</th>
                          <th>Employee Name</th>
                          <th>Date</th>
                          <th>Destination</th>
                          <th>Miles Traveled</th>
                          <th>Category</th>
                          <th>CO2 Emitted</th>
                          <th>CH4 Emitted</th>
                          <th>N2O Emitted</th>
                          <th>Total Emitted</th>
                        </tr>
                        </thead>
                        <tfoot style="display:table-header-group;">
                        <tr>
                          <th width="5%"></th>
                          <th>Employee Name</th>
                          <th>Date</th>
                          <th>Destination</th>
                          <th>Miles Traveled</th>
                          <th>Category</th>
                          <th>CO2 Emitted</th>
                          <th>CH4 Emitted</th>
                          <th>N2O Emitted</th>
                          <th>Total Emitted</th>
                        </tr>
                        </tfoot>
                        <tbody>
                          <?php $aircnt=0; foreach ($resair as $rowa) {
                            $aircnt++; ?>
                            <tr>
                              <td><?php echo $aircnt; ?></td>
                              <td><a data-id="" href="" data-bs-toggle="modal" data-bs-target="#deair<?php echo $rowa->airid; ?>" title="Delete" style="font-weight:bold;color:535353;"><?php echo $rowa->staff; ?></a></td>
                              <td><?php $airdat = new DateTime($rowa->airdat); echo $airdat->format('YMd'); ?></td>
                              <td><?php echo $rowa->destin; ?></td>
                              <td><?php echo $rowa->miles; ?></td>
                              <td><?php echo $rowa->cathaul; ?></td>
                              <td><?php echo $rowa->co2em; ?></td>
                              <td><?php echo $rowa->ch4em; ?></td>
                              <td><?php echo $rowa->n2oem; ?></td>
                              <td><?php echo $rowa->totem; ?></td>

                              <!-- deair -->
                              <div class="modal fade" id="deair<?php echo $rowa->airid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-md modal-dialog-centered">
                                  <div class="modal-content">
                                    <div class="modal-header" style="background-color:#DF362D;">
                                      <h5 class="modal-title" id="exampleModalLabel"><b>Remove this Record?</b></h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <form method="post" action="<?php echo site_url('Auth/delair') ?>/<?php echo $rowa->airid; ?>">
                                        <div class="" hidden>
                                          <input type="text" class="form-control" name="elecid" value="<?php echo $rowa->airid; ?>" required>
                                        </div>
                                        <div class="" style="margin-top:-15px;">
                                          <input type="text" class="form-control" name="" value="<?php echo $rowa->staff; ?>" required>
                                        </div>
                                       <div class="footer" style="text-align:right;">
                                          <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- deair -->

                            </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                      <!-- table -->
                    </div>
                  </div>
                </div>
                <!-- card -->
              </div>
              <!-- air travel ends-->

            </div><!-- End Pills Tabs -->

          </div>
        </div>

      </section>
    </main>

  </body>
</html>


    <!-- add fuel -->
    <div class="modal fade" id="adghgfuel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add GHG Fuel</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form class="" action="<?php echo site_url('Auth/adfuel') ?>" method="post">
            <div class="modal-body">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:8px;">
                      <input class="form-control" type="date" name="ghgdat" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:8px;">
                      <input class="form-control" type="text" name="plate" placeholder="Plate Number" required>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12" style="padding-top:10px;padding-bottom:10px;">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:8px;">
                      <select class="form-select" name="model" required>
                        <option value="">-- Choose a Model --</option>
                        <option value="Crosswind">Crosswind</option>
                        <option value="Hilux">Hilux</option>
                        <option value="L300">L300</option>
                      </select>
                    </div>
                  </div>
                  <style media="screen">.diesel, .gasoline { display:none; }</style>
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:8px;">
                      <select class="form-select" name="fuel" id="fuel" required>
                        <option value="">-- Choose a Fuel --</option>
                        <option value="diesel">Diesel</option>
                        <option value="gasoline">Gasoline</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12" style="padding-top:10px;" >
                <div class="row">
                  <div class="diesel">
                    <!-- diesel Emmission factor -->
                    <div class="row">
                      <hr>
                      <label for="" style="margin-top:-10px;">Emmission Factor</label>
                      <div class="col-md-4"><span>CO2: 2.6765</span></div>
                      <div class="col-md-4"><span>CH4: 0.0003612</span></div>
                      <div class="col-md-4" style="padding-bottom:10px;"><span>N2O: 0.000021672</span></div>
                      <hr>
                      <label for="" style="margin-top:-8px;">GWP Factor</label>
                      <div class="col-md-4"><span>CO2: 1</span></div>
                      <div class="col-md-4"><span>CH4: 28</span></div>
                      <div class="col-md-4" style="padding-bottom:10px;"><span>N2O: 265</span></div>
                      <hr>
                    </div>
                    <div class="" hidden>
                      <input class="form-control" type="text" id="co2" value="2.6765">
                      <input class="form-control" type="text" id="ch4" value="0.0003612">
                      <input class="form-control" type="text" id="n2o" value="0.000021672">
                      <!-- diesel Emmission factor -->
                      <!-- diesel gwp -->
                      <input class="form-control" type="text" id="co2" value="1">
                      <input class="form-control" type="text" id="ch4" value="28">
                      <input class="form-control" type="text" id="n2o" value="265">
                      <!-- diesel gwp -->
                    </div>
                  </div>

                  <div class="gasoline">
                    <!-- gasoline Emmission factor -->
                    <div class="row">
                      <hr>
                      <label for="" style="margin-top:-10px;">Emmission Factor</label>
                      <div class="col-md-4"><span>CO2: 2.2718</span></div>
                      <div class="col-md-4"><span>CH4: 0.0003278</span></div>
                      <div class="col-md-4" style="padding-bottom:10px;"><span>N2O: 0.00001967</span></div>
                      <hr>
                      <label for="" style="margin-top:-8px;">GWP Factor</label>
                      <div class="col-md-4"><span>CO2: 1</span></div>
                      <div class="col-md-4"><span>CH4: 28</span></div>
                      <div class="col-md-4" style="padding-bottom:10px;"><span>N2O: 265</span></div>
                      <hr>
                    </div>
                    <div class="" hidden>
                      <input class="form-control" type="text" id="co2" value="2.2718">
                      <input class="form-control" type="text" id="ch4" value="0.0003278">
                      <input class="form-control" type="text" id="n2o" value="0.00001967">
                      <!-- gasoline Emmission factor -->
                      <!-- gasoline gwp -->
                      <input class="form-control" type="text" id="co2" value="1">
                      <input class="form-control" type="text" id="ch4" value="28">
                      <input class="form-control" type="text" id="n2o" value="265">
                      <!-- gasoline gwp -->
                    </div>
                  </div>
                </div>
              </div>

              <script type="text/javascript">
                $(document).ready(function(){ $("select").change(function(){ $( "select option:selected").each(function(){
                      if($(this).attr("value")=="diesel"){ $(".gasoline").hide(); $(".diesel").show(); }
                      if($(this).attr("value")=="gasoline"){ $(".diesel").hide(); $(".gasoline").show(); } }); }).change();
                });
              </script>

              <div class="col-md-12" style="padding-top:10px;">
                <div class="row">
                  <div class="col-md-6">
                    <label for="" style="margin-bottom:-5px;">Charged</label>
                    <div class="form-group" style="padding-top:8px;">
                      <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="charge" id="charge" onkeyup="sync()" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="" style="margin-bottom:-5px;">kgCO2</label>
                    <div class="form-group" style="padding-top:8px;">
                      <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="kgco2" id="kgco2" readonly>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12" style="padding-top:10px;">
                <div class="row">
                  <div class="col-md-6">
                    <label for="" style="margin-bottom:-5px;">kgCH4</label>
                    <div class="form-group" style="padding-top:8px;">
                      <input class="form-control" type="number" name="kgch4" id="kgch4" readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="" style="margin-bottom:-5px;">kgN2O</label>
                    <div class="form-group" style="padding-top:8px;">
                      <input class="form-control" type="number" name="kgn2o" id="kgn2o" readonly>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12" style="padding-top:10px;">
                <div class="row">
                  <div class="col-md-6">
                    <label for="" style="margin-bottom:-5px;">kgCO2E</label>
                    <div class="form-group" style="padding-top:8px;">
                      <input class="form-control" type="number" name="kgco2e" id="kgco2e" readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="" style="margin-bottom:-5px;">tCO2E</label>
                    <div class="form-group" style="padding-top:8px;">
                      <input class="form-control" type="number" name="tco2e" id="tco2e" readonly>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function sync(){
                var charge = document.getElementById('charge'); var kgco2 = document.getElementById('kgco2');
                var kgch4 = document.getElementById('kgch4'); var kgn2o = document.getElementById('kgn2o');
                var kgco2e = document.getElementById('kgco2e'); var tco2e = document.getElementById('tco2e');

                var a=document.getElementById("fuel").value;
                if(a=='diesel'){
                  kgco2.value = charge.value*2.6765*1;
                  kgch4.value = charge.value*0.0003612*28;
                  kgn2o.value = charge.value*0.000021672*265;
                  kgco2e.value = (charge.value*2.6765*1) + (charge.value*0.0003612*28) + (charge.value*0.000021672*265);
                  tco2e.value = ((charge.value*2.6765*1) + (charge.value*0.0003612*28) + (charge.value*0.000021672*265))/(1000);
                }else{
                  kgco2.value = charge.value*2.2718*1;
                  kgch4.value = charge.value*0.0003278*28;
                  kgn2o.value = charge.value*0.00001967*265;
                  kgco2e.value = (charge.value*2.2718*1) + (charge.value*0.0003278*28) + (charge.value*0.00001967*265);
                  tco2e.value = ((charge.value*2.2718*1) + (charge.value*0.0003278*28) + (charge.value*0.00001967*265))/(1000);
                }
              }
              </script>

            </div><!-- body modal -->

            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save changes</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- add fuel -->

    <!-- add elec -->
    <div class="modal fade" id="adghgelec" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add GHG Electricity</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form class="" action="<?php echo site_url('Auth/adelec') ?>" method="post">
            <div class="modal-body">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:8px;">
                      <input class="form-control" type="month" name="month" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:8px;">
                      <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" name="kwh" id="kwh" onkeyup="prodmwh();" placeholder="kWh" required>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12" style="padding-top:10px;">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:8px;">
                      <div class="input-group mb-3">
                        <input type="number" class="form-control" name="eleuse" id="eleuse" value="40" readonly>
                        <span class="input-group-text">%</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:8px;">
                      <input class="form-control" type="number" name="mwh" id="mwh" readonly>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12" style="padding-top:10px;">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:8px;">
                      <div class="input-group mb-3">
                        <input type="number" class="form-control" name="lvef" id="lvef" value="0.502" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:8px;">
                      <input class="form-control" type="number" name="etco2e" id="etco2e" readonly>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function prodmwh(){
                  var kwh = parseInt(document.getElementById("kwh").value);
                  var eleuse = parseInt(document.getElementById("eleuse").value);
                  var mwh = (kwh * (eleuse/100)) / (1000);
                  document.getElementById("mwh").value = mwh;
                  document.getElementById("etco2e").value  = (kwh * (eleuse/100)) / (1000)*(0.502);
                }
              </script>

            </div><!-- body modal -->

            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save changes</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- add elec -->

    <!-- add air -->
    <div class="modal fade" id="adghgair" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add GHG Air</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form class="" action="<?php echo site_url('Auth/adair') ?>" method="post">
            <div class="modal-body">

              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group" style="padding-top:8px;">
                      <input class="form-control" type="text" name="staff" placeholder="Employee Name" required>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12" style="padding-top:10px;">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group" style="padding-top:8px;">
                      <input class="form-control" type="text" name="destin" placeholder="Destination" required>
                    </div>
                  </div>
                </div>
              </div>

              <style media="screen"> #short,#medium,#long { display:none; } </style>
              <div class="col-md-12" style="padding-top:10px;">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:8px;">
                      <input class="form-control" type="date" name="airdat" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:8px;">
                      <input class="form-control" type="text" id="miles" name="miles" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" onkeyup="prodair();" placeholder="Miles Traveled" required>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12" id="short" style="padding-top:10px;">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:8px;">
                      <input type='text' class="form-control" name='cathaul' placeholder="Short Haul" value size='20' /readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:8px;">
                      <input type='text'  class="form-control" name='co2em' placeholder="0.277" value size='20' /readonly>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12" id="medium" style="padding-top:10px;">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:8px;">
                      <input type='text' class="form-control" name='cathaul' placeholder="Medium Haul" value size='20' /readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:8px;">
                      <input type='text' class="form-control" name='co2em' placeholder="0.229" value size='20' /readonly>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12" id="long" style="padding-top:10px;">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:8px;">
                      <input type='text' class="form-control" name='cathaul' placeholder="Long Haul" value size='20' /readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:8px;">
                      <input type='text' class="form-control" name='co2em' placeholder="0.185" value size='20' /readonly>
                    </div>
                  </div>
                </div>
              </div>

              <script type="text/javascript">
                $('#miles').on('keyup', function () {
                  var miles = parseInt(document.getElementById("miles").value);
                  if(this.value >= 700){ $("#short").hide(); $("#medium").hide(); $("#long").show(); var co2 = 0.185;
                  }else if(this.value >= 300) { $("#short").hide(); $("#medium").show(); $("#long").hide(); var co2 = 0.229;
                  }else if(this.value >= 1) { $("#short").show(); $("#medium").hide(); $("#long").hide(); var co2 = 0.277;
                  }else{ $("#short").hide(); $("#medium").hide(); $("#long").hide(); }
                  document.getElementById("co2em").value = miles*co2*1;
                  document.getElementById("ch4em").value = miles*0.0104*28;
                  document.getElementById("n2oem").value = miles*0.0085*265;
                  document.getElementById("totem").value = (miles*co2*1)+(miles*0.0104*28)+(miles*0.0085*265);
                });
              </script>

              <div class="col-md-12" style="padding-top:10px;">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:8px;">
                      <input type='text' class="form-control" name='co2em' id='co2em' placeholder="CO2 Emitted" readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:8px;">
                      <input type='text' class="form-control" name='ch4em' id='ch4em' placeholder="CH4 Emitted" value size='20' / readonly>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12" style="padding-top:10px;">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:8px;">
                      <input type='text' class="form-control" name='n2oem' id='n2oem' placeholder="N2O Emitted" value size='20' / readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group" style="padding-top:8px;">
                      <input type='text' class="form-control" name='totem' id='totem' placeholder="Total Emission" value size='20' / readonly>
                    </div>
                  </div>
                </div>
              </div>

            </div><!-- body modal -->

            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save changes</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- add air -->

    <!-- edit all modal -->
    <script type="text/javascript">$(document).on("click", ".open-lguEvents", function () {
       var eventlgu = $(this).data('id');
       $(".modal-body #eventlgu").val( eventlgu );
       $('#idHolder').html( eventlgu );
    });</script>
    <!-- edit all modal -->

    <!-- fuel datab indi -->
    <script type="text/javascript">
      $(document).ready(function () {
        // Setup - add a text input to each footer cell
        $('#fueltab tfoot th').each( function () { var title = $(this).text();
          //remove first column
          if (title != '') { $(this).html( '<input type="text" placeholder="Search '+title+'" />' ); } } );

        // DataTable
        var table = $('#fueltab').DataTable({ initComplete: function () {
                // Apply the search
                this.api() .columns() .every(function () { var that = this;

                        $('input', this.footer()).on('keyup change clear', function () { if (that.search() !== this.value) { that.search(this.value).draw(); } }); }); }, }); });
    </script>
    <!-- fuel datab indi -->

    <!-- electricity datab indi -->
    <script type="text/javascript">
      $(document).ready(function () {
        // Setup - add a text input to each footer cell
        $('#electab tfoot th').each( function () { var title = $(this).text();
          //remove first column
          if (title != '') { $(this).html( '<input type="text" placeholder="Search '+title+'" />' ); } } );

        // DataTable
        var table = $('#electab').DataTable({ initComplete: function () {
                // Apply the search
                this.api() .columns() .every(function () { var that = this;

                        $('input', this.footer()).on('keyup change clear', function () { if (that.search() !== this.value) { that.search(this.value).draw(); } }); }); }, }); });
    </script>
    <!-- electricity datab indi -->

    <!-- air travel datab indi -->
    <script type="text/javascript">
      $(document).ready(function () {
        // Setup - add a text input to each footer cell
        $('#airtab tfoot th').each( function () { var title = $(this).text();
          //remove first column
          if (title != '') { $(this).html( '<input type="text" placeholder="Search '+title+'" />' ); } } );

        // DataTable
        var table = $('#airtab').DataTable({ initComplete: function () {
                // Apply the search
                this.api() .columns() .every(function () { var that = this;

                        $('input', this.footer()).on('keyup change clear', function () { if (that.search() !== this.value) { that.search(this.value).draw(); } }); }); }, }); });
    </script>
    <!-- air travel datab indi -->

    <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
