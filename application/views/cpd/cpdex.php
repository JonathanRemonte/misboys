<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link collapsed" href="index">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <?php if($_SESSION['urights']==7){ ?>
      <li class="nav-item">
        <a class="nav-link " href="cpdex">
          <i class="bi bi-speedometer2"></i><span>CPD Express</span>
        </a>
      </li><!-- End Tables Nav -->
    <?php } ?>

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

    <li class="nav-item">
      <a class="nav-link collapsed" href="arcgis">
        <i class="bi bi-globe"></i><span>ArcGIS</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
    </li><!-- End Tables Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="arcgis">
        <i class="bi bi-app-indicator"></i><span>Ozone Depleting Substances</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
    </li><!-- End Tables Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="arcgis">
        <i class="bi bi-patch-exclamation"></i><span>GHG Inventory</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
    </li><!-- End Tables Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="arcgis">
        <i class="bi bi-wind"></i><span>Air Quality</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
    </li><!-- End Tables Nav -->

    <?php if($_SESSION['urights']==1||$_SESSION['urights']==3.1||$_SESSION['urights']==4||$_SESSION['urights']==5||$_SESSION['urights']==5.1||$_SESSION['urights']==5.2||$_SESSION['urights']==5.3||$_SESSION['urights']==5.4||$_SESSION['urights']==5.5){ ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="isscon">
          <i class="bi bi-chat-right-dots"></i>
          <span>Issues and Concerns</span>
        </a>
      </li><!-- End isscon Page Nav -->
    <?php } ?>

    <?php if($_SESSION['urights']==3){ ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="req2op">
          <i class="bi bi-fingerprint"></i>
          <span style="padding-right:10px;">Access Request</span>
          <?php
            foreach($result8 as $row8){ if($row8->foi>0){ ?> <div class="spinner-grow text-danger" role="status" style="width:20px;height:20px;"> <span class="visually-hidden"></span> </div>
              <?php }else{ } } ?>
        </a>
      </li><!-- End isscon Page Nav -->
    <?php } ?>

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

    <?php if($_SESSION['urights']==1){ ?>
    <li class="nav-item">
      <a class="nav-link collapsed" href="testpage">
        <i class="bi bi-pie-chart"></i><span>Test Page</span>
      </a>
    </li><!-- End Tables Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="list">
        <i class="bi bi-pie-chart"></i><span>List</span>
      </a>
    </li><!-- End Tables Nav -->
    <?php } ?>

</aside><!-- End Sidebar-->

<main id="main" class="main">

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4">
                  <h5 class="card-title">Last Input</h5>
                </div>
                <div class="col-md-4" style="padding-top:10px;">
                  <span class="card-title" style="font-size:20px;font-weight:bold;">CPD Express</span>
                </div>
              </div>
            </div>

            <div class="" style="margin-top:-10px;">
              <?php foreach($cpdex as $rowx) { ?>
                <div class="col-md-12" style="margin-bottom:-13px;">
                  <div class="row">
                    <div class="col-md-3">
                      <label for="">FID: <span style="font-weight:bold;"><?php echo $rowx->fid; ?></span></label>
                    </div>
                    <div class="col-md-3">
                      <label for="">Firm: <span style="font-weight:bold;"><?php echo $rowx->firm; ?></span></label>
                    </div>
                    <div class="col-md-6">
                      <label for="">Proponent: <span style="font-weight:bold;"><?php echo $rowx->fown; ?></span></label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="col-md-12" style="margin-top:-13px;margin-bottom:-13px;">
                  <div class="row">
                    <div class="col-md-3">
                      <label for="">Category: <span style="font-weight:bold;"><?php echo $rowx->fcat; ?></span></label>
                    </div>
                    <div class="col-md-3">
                      <label for="">Sub-Category: <span style="font-weight:bold;"><?php echo $rowx->subcat; ?></span></label>
                    </div>
                    <div class="col-md-3">
                      <label for="">Specific Category: <span style="font-weight:bold;"><?php echo $rowx->specat; ?></span></label>
                    </div>
                    <div class="col-md-3">
                      <label for="">Sub-Specific Category: <span style="font-weight:bold;"><?php echo $rowx->subspec; ?></span></label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="col-md-12" style="margin-top:-13px;margin-bottom:-13px;">
                  <div class="row">
                    <div class="col-md-3">
                      <label for="">Province: <span style="font-weight:bold;"><?php echo $rowx->fprov; ?></span></label>
                    </div>
                    <div class="col-md-3">
                      <label for="">Municipality: <span style="font-weight:bold;"><?php echo $rowx->fmun; ?></span></label>
                    </div>
                    <div class="col-md-3">
                      <label for="">Barangay: <span style="font-weight:bold;"><?php echo $rowx->fbrgy; ?></span></label>
                    </div>
                    <div class="col-md-2">
                      <label for="">Street: <span style="font-weight:bold;"><?php echo $rowx->fstret; ?></span></label>
                    </div>
                    <div class="col-md-1">
                      <label for="">
                        <a href="<?php echo site_url('Auth/firmprof'); ?>/<?php echo $rowx->fid; ?>"><button type="button" class="btn-group-xs btn-xs btn-primary" title="Add an Address"><i class="fa fa-search" aria-hidden="true"></i></button></a>
                      </label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="col-md-12" style="margin-top:-13px;margin-bottom:-13px;">
                  <div class="row">
                    <div class="col-md-3">
                      <label for="">ECC: <span style="font-weight:bold;"><?php echo $rowx->eccn; ?></span>
                        <?php if ($_SESSION['urights']==7||$_SESSION['urights']==7.1): ?><a class="open-cpdexEvents" data-id="upeccn" href="" data-bs-toggle="modal" data-bs-target="#upcpd<?php echo $rowx->fid; ?>" id="upeccn"><i class="fa fa-upload" aria-hidden="true"></i></a><?php endif; ?>
                      </label>

                      <!-- cpd upload-->
                      <div class="modal fade" id="upcpd<?php echo $rowx->fid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color:#f8a532;">
                              <h5 class="modal-title" id="exampleModalLabel"><b>CPD Upload</b></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="<?php echo site_url('Auth/upcpdexeccn') ?>/<?php echo $rowx->fid; ?>" enctype="multipart/form-data">
                                <div class="form-group" hidden>
                                  <input class="form-control" type="text" name="userid" value="<?php echo $_SESSION['userid']; ?>" required>
                                  <input class="form-control" type="text" name="fid" value="<?php echo $rowx->fid; ?>" required>
                                  <input class="form-control" type="" name="varOne" id="eventcpd"/>
                                </div>
                                <div class="varTwo" style="padding-top:12px;">
                                  <input type="file" class="form-control" name='files[]' multiple >
                                </div>
                                <div class="form-group" hidden>
                                  <?php date_default_timezone_set('Asia/Manila'); $curdat = date('dMY H:i:s'); ?>
                                  <input type="text" class="form-control" name='updat' value="<?php echo $curdat; ?>">
                                </div>
                                <div class="footer" style="text-align:right;">
                                  <button type="submit" class="btn btn-primary" value='Upload' name='upload'>Submit</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>


                      <script type="text/javascript">$(document).on("click", ".open-cpdexEvents", function () {
                         var eventcpd = $(this).data('id');
                         $(".modal-body #eventcpd").val( eventcpd );
                         $('#idHolder').html( eventcpd );
                      });</script>

                    </div>
                    <div class="col-md-3">
                      <label for="">Issue Date: <span style="font-weight:bold;"><?php echo $rowx->ecisdat; ?></span></label>
                    </div>
                    <div class="col-md-3">
                      <label for="">Attachment: <span style="font-weight:bold;">
                        <?php foreach($reseccnlast as $rowe){ ?>
                            <a href="<?php echo base_url().'upglobal/upcpd/'.$rowe->upcpdfil; ?>" rel="nofollow" target="_blank">
                              <?php echo ' *'.$rowe->upcpdfil; ?>
                            </a>
                        <?php } ?>
                      </span></label>
                    </div>
                  </div>
                </div>
                <hr>
              <?php } ?>
            </div>

            <!-- add firm info -->
            <div class="">
              <h5 class="card-title" style="margin-bottom:-15px;">Add Firm Basic Info &nbsp;<span>(next FID is <?php foreach($cpdex as $rowx) { $nextfid=$rowx->fid+1; echo $nextfid; } ?>)</span></h5>

              <!-- Add firm basic info -->
              <!-- <form class="row g-3"> -->
              <div class="" >
                <form name="cpdexform" class="row g-3" id="firmcontrol" method="post" action="<?php echo site_url('Auth/create') ?>">
                <div class="col-md-6" hidden>
                  <input type="text" class="form-control" name="fid" value="<?php echo $nextfid; ?>" required readonly>
                </div>
                <div class="col-md-4" style="padding-bottom:-20px;">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" name="firm" placeholder="Firm Name">
                    <label for="floatingName">Firm Name</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" name="fown" placeholder="Proponent">
                    <label for="floatingName">Proponent</label>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" name="eccn" placeholder="ECC">
                    <label for="floatingName">ECC</label>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-floating">
                    <input type="date" class="form-control" id="floatingName" name="ecisdat" placeholder="Proponent">
                    <label for="floatingName">Issue Date</label>
                  </div>
                </div>
                <div class="col-md-6" >
                  <div class="form-floating mb-3">
                    <select class="form-select" id="fcat" name="fcat" aria-label="State" required>
                      <option value="">Choose Category</option>
                    </select>
                    <label for="floatingSelect">Category</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="subcat" name="subcat" aria-label="State" required>
                      <option value="">Choose Subcat</option>
                    </select>
                    <label for="floatingSelect">Sub-Category</label>
                  </div>
                </div>
                <div class="col-md-6" style="margin-top:-1px;">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="specat" name="specat" aria-label="State">
                      <option value="">Choose SpecCat</option>
                    </select>
                    <label for="floatingSelect">Specific Category</label>
                  </div>
                </div>
                <div class="col-md-6" style="margin-top:-1px;">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="subspec" name="subspec" placeholder="N/A">
                    <label for="floatingName">Sub-Specific Category</label>
                  </div>
                </div>

                <div class="col-md-2" style="margin-top:-1px;">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="flat" name="flat" placeholder="0">
                    <label for="floatingName">Latitude</label>
                  </div>
                </div>
                <div class="col-md-2" style="margin-top:-1px;">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="flon" name="flon" placeholder="0">
                    <label for="floatingName">Longitude</label>
                  </div>
                </div>


                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->
              </div>
              <!-- Add firm basic info -->

            </div>
          </div>
        <!-- card -->
      </div>
    </div>
  </section>

</main><!-- End #main -->

<!-- cascading dropdown firm cat -->
<script>
  var subobjcat = {
  "Golf Course and other Tourism Projects": {
    "Golf Course Projects/Complex":["N/A"],
    "Golf Course Projects/Complex (Driving Range Only)":["N/A"],
    "Resort and Other Tourism/Leisure":["N/A"]
  },
  "Heavy and Other Processing/Manufacturing Industries": {
    "Agriculture, Food and Related Industries": ["Processing of Dairy Products (Liquid)", "Processing of Dairy Products (Solid)", "Agricultural Processing Including Rice, Corn, Vegetables, Fruits, and other Agricultural Products", "Animal Products Processing (Fish/Meat Processing, Canning, Slaughterhouses, etc.) Including other Marine Products, Crabmeat etc.", "Coconut Processing Plants (Including Production of Other Coconut Based Products)", "Distillation and Fermentation Plants (E.G. Bio-Ethanol Project)", "Food Preservation (E.G., Drying, Freezing) and Similar Methods Aside from Canning. (For Canning, Refer to Other (Applicable) Category)", "Ice Plant/Processing", "Other Types of Food (and Other Food By-Products, Additives, Etc.) Processing Industries", "Rice/Corn Mill (With Polishing)", "Rice/Corn Mill (Without Polishing)", "Sugar Mills"],
    "Chemical Industries": ["Manufacture of Agri-Chemicals, Industrial Chemicals and Other Substance not in the PCL or CCO", "Manufacture of Explosives, Propellants, and Industrial Gases", "Manufacturing, Processing and/or Use of Substance Included in the Priority Chemical List (PCL) and Chemical Control Order (CCO) Per RA 6969 IRR", "Pharmaceutical Industries and Manufacture of Soap and Detergents, Health and Beauty Products, and Other Consumer Products", "Surface Coating Industries (Paints, Pigments, Varnishes, Lacquers, Anti-Capacity Fouling Coating, Printing Inks)"],
    "Iron and Steels Mills": ["N/A"],
    "Non-Ferrous Metal Industries": ["N/A"],
    "Other Processing/Manufacturing Industries": ["Car and Trucks Assembly", "Garment Manufacturing/Industries with Dyeing", "Garment Manufacturing/Industries with Dyeing and Only Involves Spinning, Cutting and Sewing", "Glass-Based Products Manufacturing", "Leather and Related Industries", "Metal-Based Products Manufacturing (Including Semiconductors, Electronics) Does Not Involve the Use of PCL or CCO Substance", "Metal-Based Products Manufacturing (Including Semiconductors, Electronics) Involving Use of < 1.0 MT Per Year of PCL and CCO Substance", "Metal-Based Products Manufacturing (Including Semiconductors, Electronics) Involving Use of >= 1.0 MT Per Year of PCL and CCO Substance", "Paper and Plastic-Based Products", "Pulp and Paper Industries", "Shipbuilding, Boatbuilding and Other Marine Vessel Manufacturing/Fabrication (Including Ship Breaking and Salvaging)", "Textile, Wood, Rubber and Fiber Glass Industries", "Wood and Metal Furniture Assembly with Processing (Bleaching, Sanding, etc.)", "Wood and Metal Furniture Assembly Without Processing"],
    "Petroleum and Petrochemical Industries (This category includes Hydrocarbon Products such as LNG/CNG, etc.)": ["LPG/LNG/CNG/Similar Products Storage and Refilling", "Petrochemical or Petroleum-Based Projects", "Recycling of Oil and Other Petroleum-Based Chemical", "Refilling Station Projects/Gasoline Station Projects", "Refineries", "Storage of Petroleum, Petrochemical or Related Products Including Blending)"],
    "Smelting": ["N/A"]
  },
  "Infrastructure Projects": {
      "Buildings Including Housing, Storage Facilities and Other Structures": ["All Office and Residential Building Such as Motels, Condominiums, Schools, etc. Including Storage Facilities with No Hazardous or Toxic Materials", "Cemetery, Memorial Park, and Similar Projects", "Columbarium and Similar Projects (Including Funeral Parlor and Crematorium)", "Commercial, [Business Centers with Residential Units (Mixed Use), Malls, Supermarkets, Public Markets", "Family Dwellings/Apartment Type", "Industrial Parks (Horizontal Development) with Critical Slopes", "Industrial Parks (Horizontal Development) in Flat Areas", "Institutional and Other Structures with Laboratory Facilities", "Storage Facilities for Toxic or Hazardous Materials, Substance or Products (Including Those for Those in PCL)", "Subdivision and Other Housing Projects in Areas with Critical Slopes", "Subdivision and Other Housing Projects in Flat Areas"],
      "Dams, Water Supply and Flood Control Projects": ["DAMS (Including Those for Irrigation, Flood Control, Water Source and Hydropower Projects) Including Run-Or-River Type", "Irrigation Projects (Distribution System Only)", "Water Supply Projects (Without Dam) Level II/Level I (Water Refilling Station)", "Water Supply Projects (Without Dam) Level III (Distribution System Only)", "Water Supply Projects (Without Dam) With Water Source (E.G., Infiltration Gallery, Etc.) and Water Treatment Facilities Including Desalination, Reverse Osmosis (RO)"],
      "Other Transport Facilities": ["Airports", "Land Transport Terminal (For Buses, Jeepneys and Other Modes of Transportation) With Service Facilities", "Land Transport Terminal (For Buses, Jeepneys and Other Modes of Transportation) Without Service Facilities", "Sea Port, Causeways, and Harbors (Including -RO-RO Facilities) With Reclamation", "Sea Port, Causeways, and Harbors (Including RO-RO Facilities) Without Reclamation"],
      "Pipeline and similar Projects": ["Fuel Pipelines", "Other Pipelines/Cables", "Submarine Pipelines/Cables"],
      "Power Plants": ["Fuel Cell", "Gas-Fired Thermal Power Plants", "Geothermal Facilities", "Hydropower Facilities with Tunneling Project", "Hydropower Facilities Without Tunneling Project", "Other Thermal Power Plants (e.g., Coal, Diesel, Bunker, etc.)", "Power Barges", "Power Transmission Lines", "Renewable Energy Projects Such as Ocean, Solar, Wind, Tidal Power Except Waste-To-Energy and Biogas Projects", "Substation/Switchyard", "Waste-To-Energy Biogas Projects", "Waste-To-Energy Power Projects"],
      "Reclamation and Other Land Restoration Projects": ["N/A"],
      "Roads and Bridges": ["Bridges and Viaducts (Including Elevated Roads), New Construction", "Bridges and Viaducts (Including Elevated Roads), New Construction Footbridges or Pedestrian Only", "Bridges and Viaducts (Including Elevated Roads), Rehabilitation and/or Improvement with <=50% Increase in Capacity (or in Terms of Length/Width)", "Bridges and Viaducts (Including Elevated Roads), Rehabilitation and/or Improvement with >=50% Increase in Capacity (or in Terms of Length/Width)", "On-Grade Railways System, New", "Pedestrian Passages", "Roads Flyover/Cloverleaf/Interchanges", "Roads, New Construction", "Roads, Widening, Rehabilitation and/or Improvement with Critical Slope", "Roads, Widening, Rehabilitation and/or Improvement with Critical Slope with <= 50% Increase in Capacity (or in Terms of Length/Width)", "Roads, Widening, Rehabilitation and/or Improvement with Critical Slope with > 50% Increase in Capacity (or in Terms of Length/Width)", "Tunnels and Sub-Grade Roads and Railways"],
      "Waste Management Projects": ["Compost/Fertilizer Making", "Domestic Wastewater Treatment Facility (Including Septage Treatment Facility)", "Hazardous Waste Treatment, Recycling, and/or Disposal Facilities (For Recycling of Lead, See Details in Heavy Industries) With Radioactive Materials", "Hazardous Waste Treatment, Recycling, and/or Disposal Facilities (For Recycling of Lead, See Details in Heavy Industries) Without Radioactive Materials", "Industrial and Hospital Waste (Non-Hazardous) Materials Treatment Facilities", "Material Recovery Using Pyrolysis or Similar Technology (E.G., Tire Pyrolysis)", "Material Receiving and Recovery (For Paper, Plastics and Other Materials) No Composting Facility (Material Segregation/Sorting Only)", "Material Receiving and Recovery (For Paper, Plastics and Other Materials) With Composting Facilities", "Recycling Facilities for Paper, Plastic and Other Non-Hazardous Material Does Not Involve the Use of Chemicals", "Recycling Facilities for Paper, Plastic and Other Non-Hazardous Material Involving the Use of Chemicals", "Sanitary Landfill for Domestic Waste Only Categories 2 To 4 Disposal Facilities", "Sanitary Landfill for Domestic Waste Only Categories 1 Disposal Facilities", "Sanitary Landfill for Industrial and Other Waste"],
  },
  "Other Resources": {
    "Cottage Industries": ["N/A"],
    "Cut-Flower Industry/Projects": ["N/A"],
    "Demonstration and Pilot Projects": ["N/A"],
    "Energy Projects and Non-Commercial and Fossil Mining Projects Involving Seismic Survey, Gravity Survey, Geoscientific, Geophysical Surveys, Reconnaissance, Exploration Feasibility Studies, Piloting, Core Drilling/Sampling Research and Development": ["N/A"],
    "Facilities For Barangay Micro-Business Enterprises (BMBE) Projects": ["N/A"],
    "Retesting of Old/Existing Wells in Indigenous Resources Locations for Purposes of Data Gathering and/or Verification of Validity of Historical Energy Resource Information": ["N/A"],
    "Service Industries": ["N/A"],
    "Telecommunication Projects": ["N/A"]
    },
    "Resources Extractive": {
      "Agriculture Industy": ["Agricultural plantation - Animal Feed Mill", "Agricultural Plantation - e.g. Orchards, Including Rubber Plantation"],
      "Fishery Projects - Dike for/and Fishpond Development Projects": ["Fishery/Aquaculture Projects using Fresh or Brackish Water Including Pearl Farm and Similar Activities"],
      "Forestry Projects": ["Breeding/Propagation of Any Philippine Threatened Species, Exotic Species, or Non-Threatened/Indigenous Species", "Community Based Forest Resources Utilization (CBFRU); Integrated Forest Management Agreement (IFMA) Projects; Timber License Agreement (TLA); Private Land Timber Utilization (PLTU); Other Forestry Projects; Forestry Projects Co-Managed With DENR", "Grazing Projects", "Grazing Projects of <=10 Animal Units", "Introduction of Exotic Fauna and Flora in Public and Private Forests", "Livestock Animal Industries", "Wildlife Farming or Any Related Projects as Defined By BMB", "Wood Processing Projects"],
      "Mining and Quarrying Projects": ["Extraction of Oil and Gas (Land-Based) Commercial Extraction of Gas", "Extraction of Oil and Gas (Land-Based) Commercial Extraction of Oil", "Coal Mining", "Extraction of Metallic and Non-Metallic Minerals Including Extraction of Oil and Gas, Deuterium (Off-Shore)", "Extraction of Metallic Ores/Minerals (On-Shore) With Area < 25 Hectares", "Extraction of Metallic Ores/Minerals (On-Shore) With Area >= 25 Hectares", "Extraction of Non-Metallic Minerals Such as Limestone/Shale/Silica/Clay/Placer and Other Non-Metal Minerals/Ores", "Extraction of Non-Metallic Minerals Such as Limestone/Shale/Silica/Clay/Placer and Other Non-Metal Minerals/Ores < 20 Hectares", "Extraction of Non-Metallic Minerals Such as Limestone/Shale/Silica/Clay/Placer and Other Non-Metal Minerals/Ores >= 20 Hectares", "Mineral Processing Projects Batching and Crushing Plant; Sand and Gravel Washing Mobile or To Be Operated < 1 Year", "Mineral Processing Projects Batching and Crushing Plant; Sand and Gravel Washing Non-Mobile or To Be Operated >= 1 Year", "Mineral Processing Projects Metallic Mineral or Ore Processing", "Mineral Processing Projects Natural Stone (E.G., Marble) Processing Plant", "Mineral Processing Projects Non-Metallic Mineral Processing Plants Like Cement, Other Cement Products", "Mineral Processing Projects Non-Metallic Mineral Processing Plants Like Clinker, Limestone, Ceramic Industries", "Mineral Processing Projects Non-Metallic Mineral Processing Plants Like Manufacture and Processing of Calcium", "Mineral Processing Projects Non-Metallic Mineral Processing Plants Like Manufacture of Glass and Glass Products", "Mineral Processing Projects Precious/Noble Metal Refining (Including Jewelry-Making) Does Not Use PCL or CCO Substance", "Mineral Processing Projects Precious/Noble Metal Refining (Including Jewelry -Making) Involving < 1.0 MT Per Year PCL or CCO Substance", "Mineral Processing Projects Precious/Noble Metal Refining (Including Jewelry -Making) Involving >= 1.0 MT Per Year PCL or CCO Substance"]
    }
  }
  window.onload = function() {
    var fcatsel = document.getElementById("fcat");
    var subcatsel = document.getElementById("subcat");
    var specatsel = document.getElementById("specat");
    for (var a in subobjcat) {
      fcatsel.options[fcatsel.options.length] = new Option(a, a);
    }
    fcatsel.onchange = function() {
      //empty Chapters- and Topics- dropdowns
      specatsel.length = 1;
      subcatsel.length = 1;
      //display correct values
      for (var b in subobjcat[this.value]) {
        subcatsel.options[subcatsel.options.length] = new Option(b, b);
      }
    }
    subcatsel.onchange = function() {
      //empty Chapters dropdown
      specatsel.length = 1;
      //display correct values
      var c = subobjcat[fcatsel.value][this.value];
      for (var i = 0; i < c.length; i++) {
        specatsel.options[specatsel.options.length] = new Option(c[i], c[i]);
      }
    }
  }
</script>
<!-- cascading dropdown firm cat -->
