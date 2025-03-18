<style>
  .spechide{ visibility: hidden; }
  .varTwo{ padding-bottom:30px; }
  .labmar{ margin-bottom: -8px; }
  .divmodal{ padding-top: 5px; }
</style>
<!-- **************************cat********************************* -->

<!-- actdat for activity -->
<?php date_default_timezone_set('Asia/Manila'); // CDT
  $actdat = date('YMd H:i:s');
 ?>

 <!-- Profile upload-->
 <div class="modal fade" id="upprof<?php echo $row->fid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-md modal-dialog-centered">
     <div class="modal-content">
       <div class="modal-header" style="background-color:#f8a532;">
         <h5 class="modal-title" id="exampleModalLabel">Upload Profile Picture</h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
         <form method="post" action="<?php echo site_url('Auth/upfirmprof') ?>/<?php echo $row->fid; ?>" enctype="multipart/form-data">
           <div class="form-group" hidden>
             <input type="text" class="form-control" name="<?php echo $row->fid; ?>" value="<?php echo $row->fid; ?>">
           </div>
           <div class="form-group" style="padding-bottom:18px;">
             <input type="file" class="form-control" name="userfile" >
           </div>
           <div class="form-group">
             <button type="submit" size="20" class="btn btn-primary">Upload</button>
           </div>
         </form>
       </div>
     </div>
   </div>
 </div>
 <!-- Profile upload-->

 <!-- photo upload-->
 <div class="modal fade" id="upphovid<?php echo $row->fid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-md modal-dialog-centered">
     <div class="modal-content">
       <div class="modal-header" style="background-color:#f8a532;">
         <h5 class="modal-title" id="exampleModalLabel"><b>Upload Gallery Photo</b></h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
         <form method="post" action="<?php echo site_url('Auth/upemed') ?>/<?php echo $row->fid; ?>" enctype="multipart/form-data">
           <div class="form-group" hidden>
             <input class="form-control" type="text" name="fid" value="<?php echo $row->fid; ?>" required>
             <input class="form-control" type="" name="varOne" id="eventcpd"/>
           </div>
           <div class="varTwo" style="padding-top:12px;">
             <input type="file" class="form-control" name='files[]' multiple >
           </div>
           <div class="form-group" hidden>
             <?php date_default_timezone_set('Asia/Manila'); $updat=date('Y-m-d H:i:s'); ?>
             <input type="text" class="form-control" name='updat' value="<?php echo $updat; ?>">
           </div>
           <div class="footer" style="text-align:right;">
             <button type="submit" class="btn btn-primary" value='Upload' name='upload'>Upload</button>
           </div>
         </form>
       </div>
     </div>
   </div>
 </div>
 <!-- photo upload-->

<!-- video upload-->
<div class="modal fade" id="upvideo<?php echo $row->fid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#f8a532;">
                <h5 class="modal-title" id="exampleModalLabel"><b>Upload Video</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo site_url('Auth/upfirmgvid') ?>/<?php echo $row->fid; ?>" enctype="multipart/form-data" onsubmit="return validateForm()">
                    <div class="form-group" hidden>
                        <input class="form-control" type="text" name="fid" value="<?php echo $row->fid; ?>" required>
                        <input class="form-control" type="text" name="varOne" id="eventcpd"/>
                    </div>
                    <div class="varTwo" style="padding-top:12px;">
                        <input type="file" class="form-control" id="video" name='video' accept="video/*" required>
                        <small class="form-text text-muted">Maximum file size: 10 MB. Allowed file types: MP4</small>
                        <!-- <small class="form-text text-muted">Maximum file size: 10 MB. Allowed file types: MP4, AVI, MOV, MPEG.</small> -->
                    </div>
                    <div class="form-group" hidden>
                        <?php date_default_timezone_set('Asia/Manila'); $updat=date('Y-m-d H:i:s'); ?>
                        <input type="text" class="form-control" name='updat' value="<?php echo $updat; ?>">
                    </div>
                    <div class="footer" style="text-align:right;">
                        <button type="submit" class="btn btn-primary" value='Upload' name='upload'>Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function validateForm() {
    var video = document.getElementById("video");
    if (video.files.length === 0) {
        alert("Please select a video file.");
        return false;
    }
    var file = video.files[0];
    var fileType = file.type.toLowerCase();
    if (fileType !== "video/mp4" && fileType !== "video/avi" && fileType !== "video/mov" && fileType !== "video/mpeg") {
        alert("Invalid file type. Allowed file types: MP4, AVI, MOV, MPEG.");
        return false;
    }
    var fileSize = file.size / 1024 / 1024; // in MB
    if (fileSize > 10) {
        alert("File size too large. Maximum file size: 10 MB.");
        return false;
    }
    return true;
}
</script>
<!-- video upload-->

 <!-- firm -->
 <div class="modal fade" id="edfirm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-md modal-dialog-centered">
     <div class="modal-content">
       <div class="modal-header" style="background-color:#f8a532;">
         <h5 class="modal-title" id="exampleModalLabel"><b>Edit Establishment Name</b></h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
         <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
             <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
             <input class="spechide" type="" name="varOne" id="eventId"/>
           <div class="mb-3 varTwo">
             <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
           </div>
           <div class="" hidden>
             <input type="text" class="form-control" name="former" value="<?php echo $row->firm; ?>" required>
           </div>
           <div class="" hidden>
             <input type="text" class="form-control" name="firm0" value="<?php echo $row->firm; ?>" required>
           </div>
           <div class="col-md-6" hidden>
             <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
           </div>
          <div class="footer" style="text-align:right;">
             <button type="submit" class="btn btn-primary">Submit</button>
           </div>
         </form>
       </div>
     </div>
   </div>
 </div>

 <!-- fown -->
 <div class="modal fade" id="edfown" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-md modal-dialog-centered">
     <div class="modal-content">
       <div class="modal-header" style="background-color:#f8a532;">
         <h5 class="modal-title" id="exampleModalLabel"><b>Edit Proponent</b></h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
         <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
             <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
             <input class="spechide" type="" name="varOne" id="eventId"/>
           <div class="mb-3 varTwo">
             <input type="text" class="form-control" name="fown" value="<?php echo $row->firm; ?>" required>
           </div>
           <div class="" hidden>
             <input type="text" class="form-control" name="former" value="<?php echo $row->firm; ?>" required>
           </div>
           <div class="" hidden>
             <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
           </div>
           <div class="col-md-6" hidden>
             <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
           </div>
          <div class="footer" style="text-align:right;">
             <button type="submit" class="btn btn-primary">Submit</button>
           </div>
         </form>
       </div>
     </div>
   </div>
 </div>

attprof
 <!-- cat -->
 <div class="modal fade" id="edfcat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-md modal-dialog-centered">
     <div class="modal-content">
       <div class="modal-header" style="background-color:#f8a532;">
         <h5 class="modal-title" id="exampleModalLabel"><b>Edit Category</b></h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
         <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
             <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
             <input class="spechide" type="" name="varOne" id="eventId"/>
           <div class="mb-3 varTwo">
             <select class="form-select" name="fcat">
               <option value="<?php echo $row->fcat; ?>"><?php echo $row->fcat; ?></option>
               <option value="Golf Course and other Tourism Projects">Golf Course and other Tourism Projects</option>
               <option value="Heavy and Other Processing/Manufacturing Industries">Heavy and Other Processing/Manufacturing Industries</option>
               <option value="Infrastructure Projects">Infrastructure Projects</option>
               <option value="Other Resources">Other Resources</option>
               <option value="Resources Extractive">Resources Extractive</option>
             </select>
           </div>
           <div class="" hidden>
             <input type="text" class="form-control" name="former" value="<?php if($row->fcat!=''){ echo $row->fcat; }else{ echo 'null'; } ?>" required>
           </div>
           <div class="" hidden>
             <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
           </div>
           <div class="col-md-6" hidden>
             <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
           </div>
          <div class="footer" style="text-align:right;">
             <button type="submit" class="btn btn-primary">Submit</button>
           </div>
         </form>
       </div>
     </div>
   </div>
 </div>

<!-- subcat -->
<div class="modal fade" id="edsubcat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Sub-Category</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
          <div class="mb-3 varTwo">
            <input type="text" class="form-control" name="" value="<?php echo $row->fcat; ?>" disabled>
          </div>
          <div class="mb-3 varTwo">
            <select class="form-select" name="subcat" required>
              <option value="<?php echo $row->subcat; ?>"><?php echo $row->subcat; ?></option>
              <?php if($row->fcat=='Golf Course and other Tourism Projects'){ ?>
              <option value="Golf Course Projects/Complex">Golf Course Projects/Complex</option>
              <option value="Golf Course Projects/Complex (Driving Range Only)">Golf Course Projects/Complex (Driving Range Only)</option>
              <option value="Resort and Other Tourism/Leisure">Resort and Other Tourism/Leisure</option>
              <?php }else if($row->fcat=='Heavy and Other Processing/Manufacturing Industries'){ ?>
              <option value="Agriculture, Food and Related Industries">Agriculture, Food and Related Industries</option>
              <option value="Chemical Industries">Chemical Industries</option>
              <option value="Iron and Steels Mills">Iron and Steels Mills</option>
              <option value="Non-Ferrous Metal Industries">Non-Ferrous Metal Industries</option>
              <option value="Other Processing/Manufacturing Industries">Other Processing/Manufacturing Industries</option>
              <option value="Petroleum and Petrochemical Industries (This category includes Hydrocarbon Products such as LNG/CNG, etc.)">Petroleum and Petrochemical Industries (This category includes Hydrocarbon Products such as LNG/CNG, etc.)</option>
              <option value="Smelting">Smelting</option>
              <?php }else if($row->fcat=='Infrastructure Projects'){ ?>
              <option value="Buildings Including Housing, Storage Facilities and Other Structures">Buildings Including Housing, Storage Facilities and Other Structures</option>
              <option value="Dams, Water Supply and Flood Control Projects">Dams, Water Supply and Flood Control Projects</option>
              <option value="Other Transport Facilities">Other Transport Facilities</option>
              <option value="Pipeline and similar Projects">Pipeline and similar Projects</option>
              <option value="Power Plants">Power Plants</option>
              <option value="Reclamation and Other Land Restoration Projects">Reclamation and Other Land Restoration Projects</option>
              <option value="Roads and Bridges">Roads and Bridges</option>
              <option value="Waste Management Projects">Waste Management Projects</option>
              <?php }else if($row->fcat=='Other Resources'){ ?>
              <option value="Cottage Industries">Cottage Industries</option>
              <option value="Cut-Flower Industry/Projects">Cut-Flower Industry/Projects</option>
              <option value="Demonstration and Pilot Projects">Demonstration and Pilot Projects</option>
              <option value="Energy Projects and Non-Commercial and Fossil Mining Projects Involving Seismic Survey, Gravity Survey, Geoscientific, Geophysical Surveys, Reconnaissance, Exploration Feasibility Studies, Piloting, Core Drilling/Sampling Research and Development">Energy Projects and Non-Commercial and Fossil Mining Projects Involving Seismic Survey, Gravity Survey, Geoscientific, Geophysical Surveys, Reconnaissance, Exploration Feasibility Studies, Piloting, Core Drilling/Sampling Research and Development</option>
              <option value="Facilities For Barangay Micro-Business Enterprises (BMBE) Projects">Facilities For Barangay Micro-Business Enterprises (BMBE) Projects</option>
              <option value="Retesting of Old/Existing Wells in Indigenous Resources Locations for Purposes of Data Gathering and/or Verification of Validity of Historical Energy Resource Information">Retesting of Old/Existing Wells in Indigenous Resources Locations for Purposes of Data Gathering and/or Verification of Validity of Historical Energy Resource Information</option>
              <option value="Service Industries">Service Industries</option>
              <option value="Telecommunication Projects">Telecommunication Projects</option>
              <?php }else if($row->fcat=='Resources Extractive'){ ?>
              <option value="Agriculture Industy">Agriculture Industy</option>
              <option value="Fishery Projects - Dike for/and Fishpond Development Projects">Fishery Projects - Dike for/and Fishpond Development Projects</option>
              <option value="Forestry Projects">Forestry Projects</option>
              <option value="Mining and Quarrying Projects">Mining and Quarrying Projects</option>
              <?php } ?>
            </select>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->subcat!=''){ echo $row->subcat; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
         <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- specat -->
<div class="modal fade" id="edspecat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Specific Category</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
          <div class="mb-3 varTwo">
            <input type="text" class="form-control" name="" value="<?php echo $row->subcat; ?>" disabled>
          </div>
          <div class="mb-3 varTwo">
            <select class="form-select" name="specat" required>
              <option value="<?php echo $row->specat; ?>"><?php echo $row->specat; ?></option>
              <?php if($row->subcat=='Golf Course Projects/Complex'){ ?>
              <option value="N/A">N/A</option>
            <?php }else if($row->subcat=='Golf Course Projects/Complex (Driving Range Only)'){ ?>
              <option value="N/A">N/A</option>
            <?php }else if($row->subcat=='Resort and Other Tourism/Leisure'){ ?>
              <option value="N/A">N/A</option>
            <?php }else if($row->subcat=='Agriculture, Food and Related Industries'){ ?>
              <option value="Processing of Dairy Products (Liquid)">Processing of Dairy Products (Liquid)</option>
              <option value="Processing of Dairy Products (Solid)">Processing of Dairy Products (Solid)</option>
              <option value="Agricultural Processing Including Rice, Corn, Vegetables, Fruits, and other Agricultural Products">Agricultural Processing Including Rice, Corn, Vegetables, Fruits, and other Agricultural Products</option>
              <option value="Animal Products Processing (Fish/Meat Processing, Canning, Slaughterhouses, etc.) Including other Marine Products, Crabmeat etc.">Animal Products Processing (Fish/Meat Processing, Canning, Slaughterhouses, etc.) Including other Marine Products, Crabmeat etc.</option>
              <option value="Coconut Processing Plants (Including Production of Other Coconut Based Products)">Coconut Processing Plants (Including Production of Other Coconut Based Products)</option>
              <option value="Distillation and Fermentation Plants (E.G. Bio-Ethanol Project)">Distillation and Fermentation Plants (E.G. Bio-Ethanol Project)</option>
              <option value="Food Preservation (E.G., Drying, Freezing) and Similar Methods Aside from Canning. (For Canning, Refer to Other (Applicable) Category)">Food Preservation (E.G., Drying, Freezing) and Similar Methods Aside from Canning. (For Canning, Refer to Other (Applicable) Category)</option>
              <option value="Ice Plant/Processing">Ice Plant/Processing</option>
              <option value="Other Types of Food (and Other Food By-Products, Additives, Etc.) Processing Industries">Other Types of Food (and Other Food By-Products, Additives, Etc.) Processing Industries</option>
              <option value="Rice/Corn Mill (With Polishing)">Rice/Corn Mill (With Polishing)</option>
              <option value="Rice/Corn Mill (Without Polishing)">Rice/Corn Mill (Without Polishing)</option>
              <option value="Sugar Mills">Sugar Mills</option>
            <?php }else if($row->subcat=='Chemical Industries'){ ?>
              <option value="Manufacture of Agri-Chemicals, Industrial Chemicals and Other Substance not in the PCL or CCO">Manufacture of Agri-Chemicals, Industrial Chemicals and Other Substance not in the PCL or CCO</option>
              <option value="Manufacture of Explosives, Propellants, and Industrial Gases">Manufacture of Explosives, Propellants, and Industrial Gases</option>
              <option value="Manufacturing, Processing and/or Use of Substance Included in the Priority Chemical List (PCL) and Chemical Control Order (CCO) Per RA 6969 IRR">Manufacturing, Processing and/or Use of Substance Included in the Priority Chemical List (PCL) and Chemical Control Order (CCO) Per RA 6969 IRR</option>
              <option value="Pharmaceutical Industries and Manufacture of Soap and Detergents, Health and Beauty Products, and Other Consumer Products">Pharmaceutical Industries and Manufacture of Soap and Detergents, Health and Beauty Products, and Other Consumer Products</option>
              <option value="Surface Coating Industries (Paints, Pigments, Varnishes, Lacquers, Anti-Capacity Fouling Coating, Printing Inks)">Surface Coating Industries (Paints, Pigments, Varnishes, Lacquers, Anti-Capacity Fouling Coating, Printing Inks)</option>
            <?php }else if($row->subcat=='Iron and Steels Mills'){ ?>
              <option value="N/A">N/A</option>
            <?php }else if($row->subcat=='Non-Ferrous Metal Industries'){ ?>
              <option value="N/A">N/A</option>
            <?php }else if($row->subcat=='Other Processing/Manufacturing Industries'){ ?>
              <option value="Car and Trucks Assembly">Car and Trucks Assembly</option>
              <option value="Garment Manufacturing/Industries with Dyeing">Garment Manufacturing/Industries with Dyeing</option>
              <option value="Garment Manufacturing/Industries with Dyeing and Only Involves Spinning, Cutting and Sewing">Garment Manufacturing/Industries with Dyeing and Only Involves Spinning, Cutting and Sewing</option>
              <option value="Glass-Based Products Manufacturing">Glass-Based Products Manufacturing</option>
              <option value="Leather and Related Industries">Leather and Related Industries</option>
              <option value="Metal-Based Products Manufacturing (Including Semiconductors, Electronics) Does Not Involve the Use of PCL or CCO Substance">Metal-Based Products Manufacturing (Including Semiconductors, Electronics) Does Not Involve the Use of PCL or CCO Substance</option>
              <option value="Metal-Based Products Manufacturing (Including Semiconductors, Electronics) Involving Use of < 1.0 MT Per Year of PCL and CCO Substance">Metal-Based Products Manufacturing (Including Semiconductors, Electronics) Involving Use of < 1.0 MT Per Year of PCL and CCO Substance</option>
              <option value="Paper and Plastic-Based Products">Paper and Plastic-Based Products</option>
              <option value="Pulp and Paper Industries">Pulp and Paper Industries</option>
              <option value="Shipbuilding, Boatbuilding and Other Marine Vessel Manufacturing/Fabrication (Including Ship Breaking and Salvaging)">Shipbuilding, Boatbuilding and Other Marine Vessel Manufacturing/Fabrication (Including Ship Breaking and Salvaging)</option>
              <option value="Textile, Wood, Rubber and Fiber Glass Industries">Textile, Wood, Rubber and Fiber Glass Industries</option>
              <option value="Wood and Metal Furniture Assembly with Processing (Bleaching, Sanding, etc.)">Wood and Metal Furniture Assembly with Processing (Bleaching, Sanding, etc.)</option>
              <option value="Wood and Metal Furniture Assembly Without Processing">Wood and Metal Furniture Assembly Without Processing</option>
            <?php }else if($row->subcat=='Smelting'){ ?>
              <option value="N/A">N/A</option>
            <?php }else if($row->subcat=='Buildings Including Housing, Storage Facilities and Other Structures'){ ?>
              <option value="All Office and Residential Building Such as Motels, Condominiums, Schools, etc. Including Storage Facilities with No Hazardous or Toxic Materials">All Office and Residential Building Such as Motels, Condominiums, Schools, etc. Including Storage Facilities with No Hazardous or Toxic Materials</option>
              <option value="Cemetery, Memorial Park, and Similar Projects">Cemetery, Memorial Park, and Similar Projects</option>
              <option value="Columbarium and Similar Projects (Including Funeral Parlor and Crematorium)">Columbarium and Similar Projects (Including Funeral Parlor and Crematorium)</option>
              <option value="Commercial, [Business Centers with Residential Units (Mixed Use), Malls, Supermarkets, Public Markets">Commercial, [Business Centers with Residential Units (Mixed Use), Malls, Supermarkets, Public Markets</option>
              <option value="Family Dwellings/Apartment Type">Family Dwellings/Apartment Type</option>
              <option value="Industrial Parks (Horizontal Development) with Critical Slopes">Industrial Parks (Horizontal Development) with Critical Slopes</option>
              <option value="Industrial Parks (Horizontal Development) in Flat Areas">Industrial Parks (Horizontal Development) in Flat Areas</option>
              <option value="Institutional and Other Structures with Laboratory Facilities">Institutional and Other Structures with Laboratory Facilities</option>
              <option value="Storage Facilities for Toxic or Hazardous Materials, Substance or Products (Including Those for Those in PCL)">Storage Facilities for Toxic or Hazardous Materials, Substance or Products (Including Those for Those in PCL)</option>
              <option value="Subdivision and Other Housing Projects in Areas with Critical Slopes">Subdivision and Other Housing Projects in Areas with Critical Slopes</option>
              <option value="Subdivision and Other Housing Projects in Flat Areas">Subdivision and Other Housing Projects in Flat Areas</option>
            <?php }else if($row->subcat=='Dams, Water Supply and Flood Control Projects'){ ?>
              <option value="DAMS (Including Those for Irrigation, Flood Control, Water Source and Hydropower Projects) Including Run-Or-River Type">DAMS (Including Those for Irrigation, Flood Control, Water Source and Hydropower Projects) Including Run-Or-River Type</option>
              <option value="Irrigation Projects (Distribution System Only)">Irrigation Projects (Distribution System Only)</option>
              <option value="Water Supply Projects (Without Dam) Level II/Level I (Water Refilling Station)">Water Supply Projects (Without Dam) Level II/Level I (Water Refilling Station)</option>
              <option value="Water Supply Projects (Without Dam) Level III (Distribution System Only)">Water Supply Projects (Without Dam) Level III (Distribution System Only)</option>
              <option value="Water Supply Projects (Without Dam) With Water Source (E.G., Infiltration Gallery, Etc.) and Water Treatment Facilities Including Desalination, Reverse Osmosis (RO)">Water Supply Projects (Without Dam) With Water Source (E.G., Infiltration Gallery, Etc.) and Water Treatment Facilities Including Desalination, Reverse Osmosis (RO)</option>
            <?php }else if($row->subcat=='Other Transport Facilities'){ ?>
              <option value="Airports">Airports</option>
              <option value="Land Transport Terminal (For Buses, Jeepneys and Other Modes of Transportation) With Service Facilities">Land Transport Terminal (For Buses, Jeepneys and Other Modes of Transportation) With Service Facilities</option>
              <option value="Land Transport Terminal (For Buses, Jeepneys and Other Modes of Transportation) Without Service Facilities">Land Transport Terminal (For Buses, Jeepneys and Other Modes of Transportation) Without Service Facilities</option>
              <option value="Sea Port, Causeways, and Harbors (Including -RO-RO Facilities) With Reclamation">Sea Port, Causeways, and Harbors (Including -RO-RO Facilities) With Reclamation</option>
              <option value="Sea Port, Causeways, and Harbors (Including RO-RO Facilities) Without Reclamation">Sea Port, Causeways, and Harbors (Including RO-RO Facilities) Without Reclamation</option>
            <?php }else if($row->subcat=='Pipeline and similar Projects'){ ?>
              <option value="Fuel Pipelines">Fuel Pipelines</option>
              <option value="Other Pipelines/Cables">Other Pipelines/Cables</option>
              <option value="Submarine Pipelines/Cables">Submarine Pipelines/Cables</option>
            <?php }else if($row->subcat=='Power Plants'){ ?>
              <option value="Fuel Cell">Fuel Cell</option>
              <option value="Gas-Fired Thermal Power Plants">Gas-Fired Thermal Power Plants</option>
              <option value="Geothermal Facilities">Geothermal Facilities</option>
              <option value="Hydropower Facilities with Tunneling Project">Hydropower Facilities with Tunneling Project</option>
              <option value="Hydropower Facilities Without Tunneling Project">Hydropower Facilities Without Tunneling Project</option>
              <option value="Other Thermal Power Plants (e.g., Coal, Diesel, Bunker, etc.)">Other Thermal Power Plants (e.g., Coal, Diesel, Bunker, etc.)", "Power Barges">Power Barges</option>
              <option value="Power Transmission Lines">Power Transmission Lines</option>
              <option value="Renewable Energy Projects Such as Ocean, Solar, Wind, Tidal Power Except Waste-To-Energy and Biogas Projects">Renewable Energy Projects Such as Ocean, Solar, Wind, Tidal Power Except Waste-To-Energy and Biogas Projects</option>
              <option value="Substation/Switchyard">Substation/Switchyard</option>
              <option value="Waste-To-Energy Biogas Projects">Waste-To-Energy Biogas Projects</option>
              <option value="Waste-To-Energy Power Projects">Waste-To-Energy Power Projects</option>
            <?php }else if($row->subcat=='Reclamation and Other Land Restoration Projects'){ ?>
              <option value="N/A">N/A</option>
            <?php }else if($row->subcat=='Roads and Bridges'){ ?>
              <option value="Bridges and Viaducts (Including Elevated Roads), New Construction">Bridges and Viaducts (Including Elevated Roads), New Construction</option>
              <option value="Bridges and Viaducts (Including Elevated Roads), New Construction Footbridges or Pedestrian Only">Bridges and Viaducts (Including Elevated Roads), New Construction Footbridges or Pedestrian Only</option>
              <option value="Bridges and Viaducts (Including Elevated Roads), Rehabilitation and/or Improvement with <=50% Increase in Capacity (or in Terms of Length/Width)">Bridges and Viaducts (Including Elevated Roads), Rehabilitation and/or Improvement with <=50% Increase in Capacity (or in Terms of Length/Width)</option>
              <option value="Bridges and Viaducts (Including Elevated Roads), Rehabilitation and/or Improvement with >=50% Increase in Capacity (or in Terms of Length/Width)">Bridges and Viaducts (Including Elevated Roads), Rehabilitation and/or Improvement with >=50% Increase in Capacity (or in Terms of Length/Width)</option>
              <option value="On-Grade Railways System, New">On-Grade Railways System, New</option>
              <option value="Pedestrian Passages">Pedestrian Passages</option>
              <option value="Roads Flyover/Cloverleaf/Interchanges">Roads Flyover/Cloverleaf/Interchanges</option>
              <option value="Roads, New Construction">Roads, New Construction</option>
              <option value="Roads, Widening, Rehabilitation and/or Improvement with Critical Slope">Roads, Widening, Rehabilitation and/or Improvement with Critical Slope</option>
              <option value="Roads, Widening, Rehabilitation and/or Improvement with Critical Slope with <= 50% Increase in Capacity (or in Terms of Length/Width)">Roads, Widening, Rehabilitation and/or Improvement with Critical Slope with <= 50% Increase in Capacity (or in Terms of Length/Width)</option>
              <option value="Roads, Widening, Rehabilitation and/or Improvement with Critical Slope with > 50% Increase in Capacity (or in Terms of Length/Width)">Roads, Widening, Rehabilitation and/or Improvement with Critical Slope with > 50% Increase in Capacity (or in Terms of Length/Width)</option>
              <option value="Tunnels and Sub-Grade Roads and Railways">Tunnels and Sub-Grade Roads and Railways</option>
            <?php }else if($row->subcat=='Waste Management Projects'){ ?>
              <option value="Compost/Fertilizer Making">Compost/Fertilizer Making</option>
              <option value="Domestic Wastewater Treatment Facility (Including Septage Treatment Facility)">Domestic Wastewater Treatment Facility (Including Septage Treatment Facility)</option>
              <option value="Hazardous Waste Treatment, Recycling, and/or Disposal Facilities (For Recycling of Lead, See Details in Heavy Industries) With Radioactive Materials">Hazardous Waste Treatment, Recycling, and/or Disposal Facilities (For Recycling of Lead, See Details in Heavy Industries) With Radioactive Materials</option>
              <option value="Hazardous Waste Treatment, Recycling, and/or Disposal Facilities (For Recycling of Lead, See Details in Heavy Industries) Without Radioactive Materials">Hazardous Waste Treatment, Recycling, and/or Disposal Facilities (For Recycling of Lead, See Details in Heavy Industries) Without Radioactive Materials</option>
              <option value="Industrial and Hospital Waste (Non-Hazardous) Materials Treatment Facilities">Industrial and Hospital Waste (Non-Hazardous) Materials Treatment Facilities</option>
              <option value="Material Recovery Using Pyrolysis or Similar Technology (E.G., Tire Pyrolysis)">Material Recovery Using Pyrolysis or Similar Technology (E.G., Tire Pyrolysis)</option>
              <option value="Material Receiving and Recovery (For Paper, Plastics and Other Materials) No Composting Facility (Material Segregation/Sorting Only)">Material Receiving and Recovery (For Paper, Plastics and Other Materials) No Composting Facility (Material Segregation/Sorting Only)</option>
              <option value="Material Receiving and Recovery (For Paper, Plastics and Other Materials) With Composting Facilities">Material Receiving and Recovery (For Paper, Plastics and Other Materials) With Composting Facilities</option>
              <option value="Recycling Facilities for Paper, Plastic and Other Non-Hazardous Material Does Not Involve the Use of Chemicals">Recycling Facilities for Paper, Plastic and Other Non-Hazardous Material Does Not Involve the Use of Chemicals</option>
              <option value="Recycling Facilities for Paper, Plastic and Other Non-Hazardous Material Involving the Use of Chemicals">Recycling Facilities for Paper, Plastic and Other Non-Hazardous Material Involving the Use of Chemicals</option>
              <option value="Sanitary Landfill for Domestic Waste Only Categories 2 To 4 Disposal Facilities">Sanitary Landfill for Domestic Waste Only Categories 2 To 4 Disposal Facilities</option>
              <option value="Sanitary Landfill for Domestic Waste Only Categories 1 Disposal Facilities">Sanitary Landfill for Domestic Waste Only Categories 1 Disposal Facilities</option>
              <option value="Sanitary Landfill for Industrial and Other Waste">Sanitary Landfill for Industrial and Other Waste</option>
            <?php }else if($row->subcat=='Cottage Industries'){ ?>
              <option value="N/A">N/A</option>
            <?php }else if($row->subcat=='Cut-Flower Industry/Projects'){ ?>
              <option value="N/A">N/A</option>
            <?php }else if($row->subcat=='Demonstration and Pilot Projects'){ ?>
              <option value="N/A">N/A</option>
            <?php }else if($row->subcat=='Energy Projects and Non-Commercial and Fossil Mining Projects Involving Seismic Survey, Gravity Survey, Geoscientific, Geophysical Surveys, Reconnaissance, Exploration Feasibility Studies, Piloting, Core Drilling/Sampling Research and Development'){ ?>
              <option value="N/A">N/A</option>
            <?php }else if($row->subcat=='Facilities For Barangay Micro-Business Enterprises (BMBE) Projects'){ ?>
              <option value="N/A">N/A</option>
            <?php }else if($row->subcat=='Retesting of Old/Existing Wells in Indigenous Resources Locations for Purposes of Data Gathering and/or Verification of Validity of Historical Energy Resource Information'){ ?>
              <option value="N/A">N/A</option>
            <?php }else if($row->subcat=='Service Industries'){ ?>
              <option value="N/A">N/A</option>
            <?php }else if($row->subcat=='Telecommunication Projects'){ ?>
              <option value="N/A">N/A</option>
            <?php }else if($row->subcat=='Agriculture Industy'){ ?>
              <option value="Agricultural plantation - Animal Feed Mill">Agricultural plantation - Animal Feed Mill</option>
              <option value="Agricultural Plantation - e.g. Orchards, Including Rubber Plantation">Agricultural Plantation - e.g. Orchards, Including Rubber Plantation</option>
            <?php }else if($row->subcat=='Fishery Projects - Dike for/and Fishpond Development Projects'){ ?>
              <option value="Fishery/Aquaculture Projects using Fresh or Brackish Water Including Pearl Farm and Similar Activities">Fishery/Aquaculture Projects using Fresh or Brackish Water Including Pearl Farm and Similar Activities</option>
            <?php }else if($row->subcat=='Forestry Projects'){ ?>
              <option value="Breeding/Propagation of Any Philippine Threatened Species, Exotic Species, or Non-Threatened/Indigenous Species">Breeding/Propagation of Any Philippine Threatened Species, Exotic Species, or Non-Threatened/Indigenous Species</option>
              <option value="Community Based Forest Resources Utilization (CBFRU); Integrated Forest Management Agreement (IFMA) Projects; Timber License Agreement (TLA); Private Land Timber Utilization (PLTU); Other Forestry Projects; Forestry Projects Co-Managed With DENR\Community Based Forest Resources Utilization (CBFRU); Integrated Forest Management Agreement (IFMA) Projects; Timber License Agreement (TLA); Private Land Timber Utilization (PLTU); Other Forestry Projects; Forestry Projects Co-Managed With DENR">Community Based Forest Resources Utilization (CBFRU); Integrated Forest Management Agreement (IFMA) Projects; Timber License Agreement (TLA); Private Land Timber Utilization (PLTU); Other Forestry Projects; Forestry Projects Co-Managed With DENR\Community Based Forest Resources Utilization (CBFRU); Integrated Forest Management Agreement (IFMA) Projects; Timber License Agreement (TLA); Private Land Timber Utilization (PLTU); Other Forestry Projects; Forestry Projects Co-Managed With DENR</option>
              <option value="Grazing Projects">Grazing Projects</option>
              <option value="Grazing Projects of <=10 Animal Units">Grazing Projects of <=10 Animal Units</option>
              <option value="Introduction of Exotic Fauna and Flora in Public and Private Forests">Introduction of Exotic Fauna and Flora in Public and Private Forests</option>
              <option value="Livestock Animal Industries">Livestock Animal Industries</option>
              <option value="Wildlife Farming or Any Related Projects as Defined By BMB">Wildlife Farming or Any Related Projects as Defined By BMB</option>
              <option value="Wood Processing Projects">Wood Processing Projects</option>
            <?php }else if($row->subcat=='Mining and Quarrying Projects'){ ?>
              <option value="Extraction of Oil and Gas (Land-Based) Commercial Extraction of Gas">Extraction of Oil and Gas (Land-Based) Commercial Extraction of Gas</option>
              <option value="Extraction of Oil and Gas (Land-Based) Commercial Extraction of Oil">Extraction of Oil and Gas (Land-Based) Commercial Extraction of Oil</option>
              <option value="Coal Mining">Coal Mining</option>
              <option value="Extraction of Metallic and Non-Metallic Minerals Including Extraction of Oil and Gas, Deuterium (Off-Shore)">Extraction of Metallic and Non-Metallic Minerals Including Extraction of Oil and Gas, Deuterium (Off-Shore)</option>
              <option value="Extraction of Metallic Ores/Minerals (On-Shore) With Area < 25 Hectares">Extraction of Metallic Ores/Minerals (On-Shore) With Area < 25 Hectares</option>
              <option value="Extraction of Metallic Ores/Minerals (On-Shore) With Area >= 25 Hectares">Extraction of Metallic Ores/Minerals (On-Shore) With Area >= 25 Hectares</option>
              <option value="Extraction of Non-Metallic Minerals Such as Limestone/Shale/Silica/Clay/Placer and Other Non-Metal Minerals/Ores">Extraction of Non-Metallic Minerals Such as Limestone/Shale/Silica/Clay/Placer and Other Non-Metal Minerals/Ores</option>
              <option value="Extraction of Non-Metallic Minerals Such as Limestone/Shale/Silica/Clay/Placer and Other Non-Metal Minerals/Ores < 20 Hectares">Extraction of Non-Metallic Minerals Such as Limestone/Shale/Silica/Clay/Placer and Other Non-Metal Minerals/Ores < 20 Hectares</option>
              <option value="Extraction of Non-Metallic Minerals Such as Limestone/Shale/Silica/Clay/Placer and Other Non-Metal Minerals/Ores >= 20 Hectares">Extraction of Non-Metallic Minerals Such as Limestone/Shale/Silica/Clay/Placer and Other Non-Metal Minerals/Ores >= 20 Hectares</option>
              <option value="Mineral Processing Projects Batching and Crushing Plant; Sand and Gravel Washing Mobile or To Be Operated < 1 Year">Mineral Processing Projects Batching and Crushing Plant; Sand and Gravel Washing Mobile or To Be Operated < 1 Year</option>
              <option value="Mineral Processing Projects Batching and Crushing Plant; Sand and Gravel Washing Non-Mobile or To Be Operated >= 1 Year">Mineral Processing Projects Batching and Crushing Plant; Sand and Gravel Washing Non-Mobile or To Be Operated >= 1 Year</option>
              <option value="Mineral Processing Projects Metallic Mineral or Ore Processing">Mineral Processing Projects Metallic Mineral or Ore Processing</option>
              <option value="Mineral Processing Projects Natural Stone (E.G., Marble) Processing Plant">Mineral Processing Projects Natural Stone (E.G., Marble) Processing Plant</option>
              <option value="Mineral Processing Projects Non-Metallic Mineral Processing Plants Like Cement, Other Cement Products">Mineral Processing Projects Non-Metallic Mineral Processing Plants Like Cement, Other Cement Products</option>
              <option value="Mineral Processing Projects Non-Metallic Mineral Processing Plants Like Clinker, Limestone, Ceramic Industries">Mineral Processing Projects Non-Metallic Mineral Processing Plants Like Clinker, Limestone, Ceramic Industries</option>
              <option value="Mineral Processing Projects Non-Metallic Mineral Processing Plants Like Manufacture and Processing of Calcium">Mineral Processing Projects Non-Metallic Mineral Processing Plants Like Manufacture and Processing of Calcium</option>
              <option value="Mineral Processing Projects Non-Metallic Mineral Processing Plants Like Manufacture of Glass and Glass Products">Mineral Processing Projects Non-Metallic Mineral Processing Plants Like Manufacture of Glass and Glass Products</option>
              <option value="Mineral Processing Projects Precious/Noble Metal Refining (Including Jewelry-Making) Does Not Use PCL or CCO Substance">Mineral Processing Projects Precious/Noble Metal Refining (Including Jewelry-Making) Does Not Use PCL or CCO Substance</option>
              <option value="Mineral Processing Projects Precious/Noble Metal Refining (Including Jewelry -Making) Involving < 1.0 MT Per Year PCL or CCO Substance">Mineral Processing Projects Precious/Noble Metal Refining (Including Jewelry -Making) Involving < 1.0 MT Per Year PCL or CCO Substance</option>
              <option value="Mineral Processing Projects Precious/Noble Metal Refining (Including Jewelry -Making) Involving >= 1.0 MT Per Year PCL or CCO Substance">Mineral Processing Projects Precious/Noble Metal Refining (Including Jewelry -Making) Involving >= 1.0 MT Per Year PCL or CCO Substance</option>
            <?php } ?>
            </select>
          </div>

          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->specat!=''){ echo $row->specat; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
         <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- subspec -->
<div class="modal fade" id="edsubspec" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Sub-Specific Category</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
            <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
            <input class="spechide" type="" name="varOne" id="eventId"/>
          <div class="mb-3 varTwo">
            <input type="text" class="form-control" name="subspec" value="<?php echo $row->subspec; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->subspec!=''){ echo $row->subspec; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
         <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- **************************head********************************* -->
<!-- head -->
<div class="modal fade" id="edmanhead" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Managing Head</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form method="post" action="<?php echo site_url('Auth/edhead') ?>/<?php echo $row->fid; ?>">
            <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
            <div class="mb-3">
              <input type="text" class="form-control" name="headf" value="<?php echo $row->headl; ?>" placeholder="First Name" required>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" name="headm" value="<?php echo $row->headf; ?>" placeholder="Middle Name" required>
            </div>
            <div class="mb-3" varTwo>
              <input type="text" class="form-control" name="headl" value="<?php echo $row->headm; ?>" placeholder="Last Name">
            </div>
            <div class="" hidden>
              <input type="text" class="form-control" name="former" value="<?php echo $row->headf; ?> <?php echo $row->headm; ?> <?php echo $row->headl; ?>" required>
            </div>
            <div class="" hidden>
              <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
            </div>
            <div class="col-md-6" hidden>
              <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
            </div>
         <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- pcoval -->
<!--div class="modal fade" id="edpcoval" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit PCO Validity</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <input type="date" class="form-control" name="pcoval" value="<?php echo $row->pcoval; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->pcoval!=''){ echo $row->pcoval; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
          <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div-->

<!-- firdes -->
<div class="modal fade" id="edfirdes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Firm Description</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <textarea name="firdes" class="form-control" rows="8" cols="80"><?php echo $row->firdes; ?></textarea>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->firdes!=''){ echo $row->firdes; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
          <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- **************************adrs********************************* -->
<!-- adrs -->
<div class="modal fade" id="edadrs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Address</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edadrs') ?>/<?php echo $row->fid; ?>">
            <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
            <div class="col-md-12 mb-3">
                <div class="col-md-12">
                  <select class="form-control" name="fprov" id="fprov" required>
                    <option value="" selected="selected">Click here for Province</option>
                  </select>
                </div>
                <div class="col-md-12" style="padding-top:18px;">
                  <select class="form-control" name="fmun" id="fmun" required>
                    <option value="" selected="selected">Click here for Municipality</option>
                  </select>
                </div>
                <div class="col-md-12" style="padding-top:18px;">
                  <select class="form-control" name="fbrgy" id="fbrgy" required>
                    <option value="" selected="selected">Click here for Barangay</option>
                  </select>
                </div>
                <div class="col-md-12" style="padding-top:18px;">
                  <input type="text" class="form-control" name="fstret" value="<?php echo $row->fstret; ?>" >
                </div>
            </div>
         <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- **************************latlong********************************* -->
<!-- lat -->
<div class="modal fade" id="edflat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Latitude</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
            <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
            <input class="spechide" type="" name="varOne" id="eventId"/>
          <div class="mb-3 varTwo">
            <input type="text" class="form-control" name="flat" value="<?php echo $row->flat; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php echo $row->flat; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
         <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- lon -->
<div class="modal fade" id="edflon" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Latitude</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
            <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
            <input class="spechide" type="" name="varOne" id="eventId"/>
          <div class="mb-3 varTwo">
            <input type="text" class="form-control" name="flon" value="<?php echo $row->flon; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php echo $row->flon; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
         <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- **************************ECC********************************* -->
<!-- edecnc -->
<div class="modal fade" id="edeccn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit ECC/CNC</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <input type="text" class="form-control" name="eccn" value="<?php echo $row->eccn; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->eccn!=''){ echo $row->eccn; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
         <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- edecisdat -->
<div class="modal fade" id="edecisdat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit ECC Issued Date</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <input type="date" class="form-control" name="ecisdat" value="<?php echo $row->ecisdat; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->ecisdat!=''){ echo $row->ecisdat; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
          <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- **************************PTO********************************* -->
<!-- PTO -->
<div class="modal fade" id="edpto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit PTO</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <input type="text" class="form-control" name="pto" value="<?php echo $row->pto; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->pto!=''){ echo $row->pto; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
         <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- ptoisdat -->
<div class="modal fade" id="edptoisdat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit PTO Issued Date</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <input type="date" class="form-control" name="ptoisdat" value="<?php echo $row->ptoisdat; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->ptoisdat!=''){ echo $row->ptoisdat; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
          <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- ptoval -->
<div class="modal fade" id="edptoval" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit PTO Validity</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <input type="date" class="form-control" name="ptoval" value="<?php echo $row->ptoval; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->ptoval!=''){ echo $row->ptoval; }else{ echo 'null'; } ?><?php echo $row->ptoval; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
          <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- **************************PTO********************************* -->
<!-- apse -->
<div class="modal fade" id="edapse" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit APSE/APSI</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <textarea class="form-control" name="apse" rows="4" cols="80"><?php echo $row->apse; ?></textarea>
          </div>
         <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Fuel type -->
<div class="modal fade" id="edfltyp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Fuel Type</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <input type="text" class="form-control" name="fltyp" value="<?php echo $row->fltyp; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->fltyp!=''){ echo $row->fltyp; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
         <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Fuel type -->
<div class="modal fade" id="edopgeca" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Operational/Generated Capacity</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <input type="text" class="form-control" name="opgeca" value="<?php echo $row->opgeca; ?>" autofocus>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->opgeca!=''){ echo $row->opgeca; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
         <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- **************************PTO********************************* -->
<!-- dp -->
<div class="modal fade" id="eddp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit DP</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <input type="text" class="form-control" name="dp" value="<?php echo $row->dp; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->dp!=''){ echo $row->dp; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
         <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- ptoisdat -->
<div class="modal fade" id="eddpisdat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit DP Issued Date</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <input type="date" class="form-control" name="dpisdat" value="<?php echo $row->dpisdat; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->dpisdat!=''){ echo $row->dpisdat; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
          <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- dpval -->
<div class="modal fade" id="eddpval" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit DP Validity</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <input type="date" class="form-control" name="dpval" value="<?php echo $row->dpval; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->dpval!=''){ echo $row->dpval; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
          <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- **************************voldis********************************* -->
<!-- voldis -->
<div class="modal fade" id="edvoldis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Volume Discharge</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <input type="text" class="form-control" name="voldis" value="<?php echo $row->voldis; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->voldis!=''){ echo $row->voldis; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
         <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- edhazisdat -->
<div class="modal fade" id="edhazisdat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit HazWaste Issue Date</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <input type="date" class="form-control" name="hazisdat" value="<?php echo $row->hazisdat; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->hazisdat!=''){ echo $row->hazisdat; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
          <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- **************************PTT********************************* -->
<!-- PTT -->
<div class="modal fade" id="edptt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit PTT</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <input type="text" class="form-control" name="ptt" value="<?php echo $row->ptt; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->ptt!=''){ echo $row->ptt; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
         <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- edpttisdat -->
<div class="modal fade" id="edpttisdat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit PTT Issue Date</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <input type="date" class="form-control" name="pttisdat" value="<?php echo $row->pttisdat; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->pttisdat!=''){ echo $row->pttisdat; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
          <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- edpttisdat -->
<div class="modal fade" id="edpttval" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit PTT Validity</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <input type="date" class="form-control" name="pttval" value="<?php echo $row->pttval; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->pttisdat!=''){ echo $row->pttisdat; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
          <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- **************************emed add rec********************************* -->
<!-- emed add records -->
<div class="modal fade" id="addErec" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#2E9aC0;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Establishment Additional Record (EMED)</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/updmanyEMED') ?>/<?php echo $row->fid; ?>" enctype="multipart/form-data">
          <?php
            if (isset($error)){
              echo '<div class="alert alert-danger">'.$error.'</div>';
            }
          ?>
          <div class="mb-3" hidden>
            <input type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          </div>
          <div class="col-md-12" style="">
            <div class="row">
              <div class="col-md-4">
                <label for="wstwtr" class="form-label labmar">Type of Waste Water</label>
                <input type="text" class="form-control" name="wstwtr">
              </div>
              <div class="col-md-2" style="text-align:center;">
                <label for="wwtf" class="form-label labmar">With WWTF?</label>
                <div class="" style="font-weight:bold;padding-top:8px;">
                  <input type="radio" id="wwtftyp_no" value="no" name="wwtf" onclick="javascript:myFunction();" checked> No &nbsp;&nbsp;
                  <input type="radio" id="wwtftyp_yes" value="yes" name="wwtf" onclick="javascript:myFunction();" > Yes
                </div>
              </div>
              <div class="col-md-3" id="wwtftyp" style="display: none;">
                <label for="wwtftyp" class="form-label labmar">If yes, what type?</label>
                <input class="form-control" type="text" id="wwtftyp" name="wwtftyp" >
              </div>
              <div class="col-md-3">
                <label for="wwtfcap" class="form-label labmar">WWTF capacity</label>
                <input type="text" class="form-control" name="wwtfcap">
              </div>
            </div>
          </div>

          <div class="col-md-12 divmodal">
            <div class="row">
              <div class="col-md-3">
                <label for="toh2oco" class="form-label labmar" style="font-size:14px;">Total H<sub>2</sub>O Consumption</label>
                <input type="text" class="form-control" name="toh2oco">
              </div>

              <div class="col-md-2">
                <label for="wwtfcap" class="form-label labmar" style="font-size:14px;">Monthly Average</label>
                <input type="text" class="form-control" name="moave">
              </div>
              <div class="col-md-2">
                <label for="wwtfcap" class="form-label labmar" style="font-size:14px;">Flowrate per Day</label>
                <input type="text" class="form-control" name="floday">
              </div>
              <div class="col-md-3">
                <label for="toh2oco" class="form-label labmar" style="font-size:14px;">Discharge Ave. Rate/Day</label>
                <input type="text" class="form-control" name="avedisday">
              </div>
              <div class="col-md-2">
                <label for="hvymetal" class="form-label labmar" style="font-size:12px;">With Heavy Metals</label>
                <select class="form-select" name="hvymetal">
                  <option value="no">No</option>
                  <option value="yes">Yes</option>
                </select>
              </div>
            </div>
          </div>

          <!-- ************* param ********************* -->
          <hr>
          <!-- <div class="col-md-12 divmodal">
            <div class="row">
              <div class="col-md-12" id="dynamic_field">
                <div class="row">
                  <div class="col-md-5" style="margin-top:-10px;">
                    <label for="param" class="form-label labmar">Parameters</label>
                    <input type="text" name="param1" placeholder="Parameters1" class="form-control" /></td>
                  </div>
                  <div class="col-md-3" style="padding-top:14px;">
                    <input type="text" name="efflu1" placeholder="Effluent1" class="form-control" /></td>
                  </div>
                  <div class="col-md-3" style="padding-top:14px;">
                    <input type="text" name="stand1" placeholder="Standard1" class="form-control" /></td>
                  </div>
                  <div class="col-md-1" style="padding-top:14px;">
                    <a type="" name="add" id="add" class="btn btn-success" style="font-size:15px;font-weight:bold;">+</a>
                  </div>
                </div>
              </div>
            </div>
          </div> -->

      <!-- ********************************** -->
      <!-- <script>
        $(document).ready(function(){ var i=1;
          $('#add').click(function(){ if(i!=10){i++; -->
            <!-- $('#dynamic_field').append('<div id="row'+i+'" class="col-md-12" style="padding-top:10px;"><div class="row"><div class="col-md-5"><input type="text" name="param'+i+'" placeholder="Parameters'+i+'" class="form-control name_list" /></div><div class="col-md-3"><input type="text" name="efflu'+i+'" placeholder="Effluent'+i+'" class="form-control name_list" /></div><div class="col-md-3"><input type="text" name="stand'+i+'" placeholder="Standard'+i+'" class="form-control name_list" /></div><div class="col-md-1"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">x</button></div></div></div>'); } } ); -->
          <!-- $(document).on('click', '.btn_remove', function(){ var button_id = $(this).attr("id"); $('#row'+button_id+'').remove(); });
          $('#submit').click(function(){ $.ajax({ url:"name.php", method:"POST", data:$('#add_name').serialize(), success:function(data) { alert(data); $('#add_name')[0].reset(); } }); });
        });
      </script> -->
      <!-- ********************************** -->

          <hr>

          <!-- ************* outlet ********************* -->
          <hr>
          <div class="col-md-12 divmodal">
            <div class="row">
              <div class="col-md-12" id="outlet">
                <div class="row">
                  <div class="col-md-5" style="margin-top:-10px;">
                    <label for="locout" class="form-label labmar">Outlet</label>
                    <input type="text" name="locout1" placeholder="Location 1" class="form-control" /></td>
                  </div>
                  <div class="col-md-3" style="padding-top:14px;">
                    <input type="text" name="outlet1" placeholder="Outlet 1" class="form-control" /></td>
                  </div>
                  <div class="col-md-3" style="padding-top:14px;">
                    <input type="text" name="desout1" placeholder="Description 1" class="form-control" /></td>
                  </div>
                  <div class="col-md-1" style="padding-top:14px;">
                    <a type="" name="addout" id="addout" class="btn btn-success" style="font-size:15px;font-weight:bold;">+</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

      <!-- ********************************** -->
      <script>
        $(document).ready(function(){ var i=1;
          $('#addout').click(function(){ if(i!=5){i++;
            $('#outlet').append('<div id="row'+i+'" class="col-md-12" style="padding-top:10px;"><div class="row"><div class="col-md-5"><input type="text" name="locout'+i+'" placeholder="Location '+i+'" class="form-control name_list" /></div><div class="col-md-3"><input type="text" name="outlet'+i+'" placeholder="Outlet '+i+'" class="form-control name_list" /></div><div class="col-md-3"><input type="text" name="desout'+i+'" placeholder="Description '+i+'" class="form-control name_list" /></div><div class="col-md-1"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">x</button></div></div></div>'); } } );
          $(document).on('click', '.btn_remove', function(){ var button_id = $(this).attr("id"); $('#row'+button_id+'').remove(); });
          // $('#submit').click(function(){ $.ajax({ url:"name.php", method:"POST", data:$('#add_name').serialize(), success:function(data) { alert(data); $('#add_name')[0].reset(); } }); });
        });
      </script>
      <!-- ********************************** -->
          <hr>
          <div class="col-md-12 divmodal" style="padding-bottom:19px;">
            <div class="row">
              <div class="col-md-4" style="margin-top:-10px;">
                <label for="hazid" class="form-label labmar">HazWaste ID</label>
                <input type="text" class="form-control" name="hazid">
              </div>
              <div class="col-md-8" style="margin-top:-10px;">
                <label for="haztyp" class="form-label labmar">Type of HazWaste</label>
                <input type="text" class="form-control" name="haztyp">
              </div>
            </div>
          </div>

          <!--wwtf radio script-->
          <script> function myFunction() { var yes = document.getElementById("wwtftyp_yes"); var wwtftyp = document.getElementById("wwtftyp");
            if (yes.checked === true) { wwtftyp.style.display = "block"; } else { wwtftyp.style.display = "none"; } } </script>
          <!--radio script-->
          <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- emed add records -->

<!-- **************************hazid********************************* -->
<!-- hazid -->
<div class="modal fade" id="edhazid" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Hazardous Waste ID</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
          <div class="mb-3 varTwo">
            <input type="text" class="form-control" name="hazid" value="<?php echo $row->hazid; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->hazid!=''){ echo $row->hazid; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
         <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- haztyp -->
<div class="modal fade" id="edhaztyp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Hazardous Waste Type</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <input type="text" class="form-control" name="haztyp" value="<?php echo $row->haztyp; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->haztyp!=''){ echo $row->haztyp; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
         <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- **************************wstwtr typ********************************* -->
<!-- wstwtr typ -->
<div class="modal fade" id="edwstwtr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Waste Water Type</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <input type="text" class="form-control" name="wstwtr" value="<?php echo $row->wstwtr; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->wstwtr!=''){ echo $row->wstwtr; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
         <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- wwtf -->
<div class="modal fade" id="edwwtf" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Waste Water Treatment Facility</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edwwtf') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>

          <div class="row">
          <div class="col-md-5" style="text-align:center;">
            <label for="edwwtf" class="form-label">With WWTF?</label>
            <div class="" style="font-weight:bold;padding-top:8px;padding-bottom:20px;">
              <input type="radio" id="edwwtftyp_no" value="no" name="edwwtf" onclick="javascript:myFunctionRad();" checked> No &nbsp;&nbsp;
              <input type="radio" id="edwwtftyp_yes" value="yes" name="edwwtf" onclick="javascript:myFunctionRad();" > Yes
            </div>
          </div>
          <div class="col-md-7" id="edwwtftyp" style="display: none;">
            <label for="edwwtftyp" class="form-label">If yes, what type?</label>
            <input class="form-control" type="text" id="edwwtftyp" name="edwwtftyp" >
          </div>
        </div>
          <!--wwtf radio script-->
          <script> function myFunctionRad() { var edyes = document.getElementById("edwwtftyp_yes"); var edwwtftyp = document.getElementById("edwwtftyp");
            if (edyes.checked === true) { edwwtftyp.style.display = "block"; } else { edwwtftyp.style.display = "none"; } } </script>
          <!--radio script-->
          <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- dplab -->
<div class="modal fade" id="eddplab" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Upload DP Lab Result</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/updplab') ?>/<?php echo $row->fid; ?>" enctype="multipart/form-data">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <!-- <input class="spechide" type="" name="varOne" id="eventId"/> -->

          <div class="row">
            <div class="form-group" style="padding-bottom:28px;margin-top:-17px;">
              <input type="file" class="form-control" name="userfile" >
            </div>
          </div>
          <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- wwtf cap-->
<div class="modal fade" id="edwwtfcap" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit WWTF Capacity</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <input type="text" class="form-control" name="wwtfcap" value="<?php echo $row->wwtfcap; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->wwtfcap!=''){ echo $row->wwtfcap; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
         <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- toh2oco-->
<div class="modal fade" id="edtoh2oco" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Total Water Consumption</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <input type="text" class="form-control" name="toh2oco" value="<?php echo $row->toh2oco; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->toh2oco!=''){ echo $row->toh2oco; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
         <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- moave-->
<div class="modal fade" id="edmoave" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Monthly Average</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <input type="text" class="form-control" name="moave" value="<?php echo $row->moave; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->moave!=''){ echo $row->moave; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
         <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- floday-->
<div class="modal fade" id="edfloday" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Flowrate per Day</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <input type="text" class="form-control" name="floday" value="<?php echo $row->floday; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->floday!=''){ echo $row->floday; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
         <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- avedisday-->
<div class="modal fade" id="edavedisday" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Ave. Rate of Discharge/Day</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <input type="text" class="form-control" name="avedisday" value="<?php echo $row->avedisday; ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="former" value="<?php if($row->avedisday!=''){ echo $row->avedisday; }else{ echo 'null'; } ?>" required>
          </div>
          <div class="" hidden>
            <input type="text" class="form-control" name="firm" value="<?php echo $row->firm; ?>" required>
          </div>
          <div class="col-md-6" hidden>
            <input type="text" class="form-control" name="actdat" placeholder="" value="<?php echo $actdat; ?>">
          </div>
         <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- hvymetal-->
<div class="modal fade" id="edhvymetal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Heavy Metal</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/edone') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          <input class="spechide" type="" name="varOne" id="eventId"/>
        <div class="mb-3 varTwo">
            <!-- <input type="text" class="form-control" name="hvymetal" value="" required> -->
            <select class="form-control" name="hvymetal" id="hvymetal">
              <option value="no">No</option>
              <option value="yes">Yes</option>
            </select>
          </div>
         <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!--**************parameters***********************-->
<!-- param-->
<!-- <div class="modal fade" id="edparam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Parameter</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/updparam') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required> -->
          <!-- <input class="spechide" type="" name="varOne" id="eventId"/> -->
          <!-- param1 -->
          <!-- <div class="col-md-12" style="margin-top:-30px;padding-bottom:20px;">
            <div class="row">
              <div class="col-md-5">
                <label for="param">Parameter</label>
                <input type="text" class="form-control" name="param1" value="<?php echo $row->param1; ?>" placeholder="Parameter 1">
              </div>
              <div class="col-md-3">
                <label for="efflu">Effluent</label>
                <input type="text" class="form-control" name="efflu1" value="<?php echo $row->efflu1; ?>" placeholder="Effluent 1">
              </div>
              <div class="col-md-4">
                <label for="stand">Standard</label>
                <input type="text" class="form-control" name="stand1" value="<?php echo $row->stand1; ?>" placeholder="Standard 1">
              </div>
            </div>
          </div> -->
          <!-- param2 -->
          <!-- <div class="col-md-12" style="padding-bottom:20px;">
            <div class="row">
              <div class="col-md-5">
                <input type="text" class="form-control" name="param2" value="<?php echo $row->param2; ?>" placeholder="Parameter 2">
              </div>
              <div class="col-md-3">
                <input type="text" class="form-control" name="efflu2" value="<?php echo $row->efflu2; ?>" placeholder="Effluent 2">
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" name="stand2" value="<?php echo $row->stand2; ?>" placeholder="Standard 2">
              </div>
            </div>
          </div> -->
          <!-- param3 -->
          <!-- <div class="col-md-12" style="padding-bottom:20px;">
            <div class="row">
              <div class="col-md-5">
                <input type="text" class="form-control" name="param3" value="<?php echo $row->param3; ?>" placeholder="Parameter 3">
              </div>
              <div class="col-md-3">
                <input type="text" class="form-control" name="efflu3" value="<?php echo $row->efflu3; ?>" placeholder="Effluent 3">
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" name="stand3" value="<?php echo $row->stand3; ?>" placeholder="Standard 3">
              </div>
            </div>
          </div> -->
          <!-- param4 -->
          <!-- <div class="col-md-12" style="padding-bottom:20px;">
            <div class="row">
              <div class="col-md-5">
                <input type="text" class="form-control" name="param4" value="<?php echo $row->param4; ?>" placeholder="Parameter 4">
              </div>
              <div class="col-md-3">
                <input type="text" class="form-control" name="efflu4" value="<?php echo $row->efflu4; ?>" placeholder="Effluent 4">
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" name="stand4" value="<?php echo $row->stand4; ?>" placeholder="Standard 4">
              </div>
            </div>
          </div> -->
          <!-- param5 -->
          <!-- <div class="col-md-12" style="padding-bottom:20px;">
            <div class="row">
              <div class="col-md-5">
                <input type="text" class="form-control" name="param5" value="<?php echo $row->param5; ?>" placeholder="Parameter 5">
              </div>
              <div class="col-md-3">
                <input type="text" class="form-control" name="efflu5" value="<?php echo $row->efflu5; ?>" placeholder="Effluent 5">
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" name="stand5" value="<?php echo $row->stand5; ?>" placeholder="Standard 5">
              </div>
            </div>
          </div> -->
          <!-- param6 -->
          <!-- <div class="col-md-12" style="padding-bottom:20px;">
            <div class="row">
              <div class="col-md-5">
                <input type="text" class="form-control" name="param6" value="<?php echo $row->param6; ?>" placeholder="Parameter 6">
              </div>
              <div class="col-md-3">
                <input type="text" class="form-control" name="efflu6" value="<?php echo $row->efflu6; ?>" placeholder="Effluent 6">
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" name="stand6" value="<?php echo $row->stand6; ?>" placeholder="Standard 6">
              </div>
            </div>
          </div> -->
          <!-- param7 -->
          <!-- <div class="col-md-12" style="padding-bottom:20px;">
            <div class="row">
              <div class="col-md-5">
                <input type="text" class="form-control" name="param7" value="<?php echo $row->param7; ?>" placeholder="Parameter 7">
              </div>
              <div class="col-md-3">
                <input type="text" class="form-control" name="efflu7" value="<?php echo $row->efflu7; ?>" placeholder="Effluent 7">
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" name="stand7" value="<?php echo $row->stand7; ?>" placeholder="Standard 7">
              </div>
            </div>
          </div> -->
          <!-- param8 -->
          <!-- <div class="col-md-12" style="padding-bottom:20px;">
            <div class="row">
              <div class="col-md-5">
                <input type="text" class="form-control" name="param8" value="<?php echo $row->param8; ?>" placeholder="Parameter 8">
              </div>
              <div class="col-md-3">
                <input type="text" class="form-control" name="efflu8" value="<?php echo $row->efflu8; ?>" placeholder="Effluent 8">
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" name="stand8" value="<?php echo $row->stand8; ?>" placeholder="Standard 8">
              </div>
            </div>
          </div> -->
          <!-- param5 -->
          <!-- <div class="col-md-12" style="padding-bottom:20px;">
            <div class="row">
              <div class="col-md-5">
                <input type="text" class="form-control" name="param9" value="<?php echo $row->param9; ?>" placeholder="Parameter 9">
              </div>
              <div class="col-md-3">
                <input type="text" class="form-control" name="efflu9" value="<?php echo $row->efflu9; ?>" placeholder="Effluent 9">
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" name="stand9" value="<?php echo $row->stand9; ?>" placeholder="Standard 9">
              </div>
            </div>
          </div> -->
          <!-- param5 -->
          <!-- <div class="col-md-12" style="padding-bottom:20px;">
            <div class="row">
              <div class="col-md-5">
                <input type="text" class="form-control" name="param10" value="<?php echo $row->param10; ?>" placeholder="Parameter 10">
              </div>
              <div class="col-md-3">
                <input type="text" class="form-control" name="efflu10" value="<?php echo $row->efflu10; ?>" placeholder="Effluent 10">
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control" name="stand10" value="<?php echo $row->stand10; ?>" placeholder="Standard 10">
              </div>
            </div>
          </div> -->

          <!-- <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> -->

<!--**************outlet***********************-->
<!-- outlet-->
<!-- <div class="modal fade" id="edoutlet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#f8a532;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Edit Outlet</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/updoutlet') ?>/<?php echo $row->fid; ?>">
          <input class="spechide" type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required> -->
          <!-- <input class="spechide" type="" name="varOne" id="eventId"/> -->
        <!-- outlet1 -->
        <!-- <div class="col-md-12" style="margin-top:-30px;padding-bottom:20px;">
          <div class="row">
            <div class="col-md-5">
              <label for="param">Location of Outlet</label>
              <input type="text" class="form-control" name="locout1" value="<?php echo $row->locout1; ?>" placeholder="Location 1">
            </div>
            <div class="col-md-3">
              <label for="efflu">Outlet</label>
              <input type="text" class="form-control" name="outlet1" value="<?php echo $row->outlet1; ?>" placeholder="Outlet 1">
            </div>
            <div class="col-md-4">
              <label for="stand">Description of Outlet</label>
              <input type="text" class="form-control" name="desout1" value="<?php echo $row->desout1; ?>" placeholder="Description 1">
            </div>
          </div>
        </div> -->

        <!-- outlet2 -->
        <!-- <div class="col-md-12" style="padding-bottom:20px;">
          <div class="row">
            <div class="col-md-5">
              <input type="text" class="form-control" name="locout2" value="<?php echo $row->locout2; ?>" placeholder="Location 2">
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control" name="outlet2" value="<?php echo $row->outlet2; ?>" placeholder="Outlet 2">
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control" name="desout2" value="<?php echo $row->desout2; ?>" placeholder="Description 2">
            </div>
          </div>
        </div> -->

        <!-- outlet3 -->
        <!-- <div class="col-md-12" style="padding-bottom:20px;">
          <div class="row">
            <div class="col-md-5">
              <input type="text" class="form-control" name="locout3" value="<?php echo $row->locout3; ?>" placeholder="Location 3">
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control" name="outlet3" value="<?php echo $row->outlet3; ?>" placeholder="Outlet 3">
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control" name="desout3" value="<?php echo $row->desout3; ?>" placeholder="Description 3">
            </div>
          </div>
        </div> -->

        <!-- outlet4 -->
        <!-- <div class="col-md-12" style="padding-bottom:20px;">
          <div class="row">
            <div class="col-md-5">
              <input type="text" class="form-control" name="locout4" value="<?php echo $row->locout4; ?>" placeholder="Location 4">
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control" name="outlet4" value="<?php echo $row->outlet4; ?>" placeholder="Outlet 4">
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control" name="desout4" value="<?php echo $row->desout4; ?>" placeholder="Description 4">
            </div>
          </div>
        </div> -->

        <!-- outlet5 -->
        <!-- <div class="col-md-12" style="padding-bottom:20px;">
          <div class="row">
            <div class="col-md-5">
              <input type="text" class="form-control" name="locout5" value="<?php echo $row->locout5; ?>" placeholder="Location 5">
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control" name="outlet5" value="<?php echo $row->outlet5; ?>" placeholder="Outlet 5">
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control" name="desout5" value="<?php echo $row->desout5; ?>" placeholder="Description 5">
            </div>
          </div>
        </div> -->

        <!-- <div class="footer" style="text-align:right;">
           <button type="submit" class="btn btn-primary">Submit</button>
         </div>
       </form>
      </div>
    </div>
  </div>
</div> -->

<!-- **************************legal add rec********************************* -->
<!-- legal add records -->
<div class="modal fade" id="addLrec" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#2E9aC0;">
        <h5 class="modal-title" id="exampleModalLabel"><b>Add Legal Record</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('Auth/addLGL') ?>/<?php echo $row->fid; ?>" enctype="multipart/form-data">
          <?php if (isset($error)){ echo '<div class="alert alert-danger">'.$error.'</div>'; } ?>
          <div class="mb-3" hidden>
            <input type="text" class="form-control" name="fid" value="<?php echo $row->fid; ?>" required>
          </div>
          <div class="mb-3" hidden>
            <input type="text" class="form-control" name="cntlegal" value=" <?php foreach($result1 as $row){ } echo $row->cntlegal+1; ?> ">
          </div>
          <div class="col-md-12" style="">
            <div class="row">
              <div class="col-md-4">
                <label for="track" class="form-label labmar">Tracking Number</label>
                <input type="text" class="form-control" name="track" value="" required>
              </div>

              <div class="col-md-6" style="padding-top:30px;padding-left:;">
                <div class="" style="margin-top:-20px;">
                  <input type="checkbox" name="airlgl" value="Air" id="sum_e_0" onclick="UpdateChck()" style=""> Air &nbsp;
                  <input type="checkbox" name="wtrlgl" value="Water" id="sum_e_1" onclick="UpdateChck()" style=""> Water &nbsp;
                  <input type="checkbox" name="hazlgl" value="HazWaste" id="sum_e_2" onclick="UpdateChck()" style=""> HazWaste &nbsp;
                  <input type="checkbox" name="exclgl" value="Exceedance" id="sum_e_3" onclick="UpdateChck()" style=""> Exceedance <br/>
                </div>
                <div class="" style="padding-top:10px;">
                  <input type="checkbox" name="pd15lgl" value="PD1586" id="sum_e_4" onclick="UpdateChck()" style=""> PD1586 &nbsp;
                  <input type="checkbox" name="pdairlgl" value="PDAir" id="sum_e_5" onclick="UpdateChck()" style=""> PDAir &nbsp;
                  <input type="checkbox" name="pdwtrlgl" value="PDWater" id="sum_e_6" onclick="UpdateChck()" style=""> PDWater &nbsp;
                  <input type="checkbox" name="pdhazlgl" value="PDHaz" id="sum_e_7" onclick="UpdateChck()" style=""> PDHaz &nbsp;
                </div>
              </div>

              <div class="col-md-2">
                <label for="" class="form-label labmar">Count</label>
                <input type="text" class="form-control" name="novnum" id="chckup" value="" readonly="readonly">
              </div>
              <script type="text/javascript">
                function UpdateChck() { var esum = 0; var egn, elem; for (i=0; i<8; i++) { egn = 'sum_e_'+i; elem = document.getElementById(egn); if (elem.checked == true) { esum += 1; } } document.getElementById('chckup' ).value = esum.toFixed(0); } window.onload=UpdateCost
              </script>
            </div>
          </div>
          <div class="col-md-12" style="padding-bottom:15px;">
            <div class="row divmodal">
              <div class="col-md-6 divmodal">
                <label for="natvio" class="form-label labmar">Nature of Violation</label>
                <textarea class="form-control" name="natvio" rows="2" cols="43"></textarea>
              </div>
              <div class="col-md-3" style="padding-top:16px;">
                <label for="datinsrep" class="form-label labmar">Inspection Report Date</label>
                <input type="date" class="form-control" name="datinsrep" value="">
              </div>
              <div class="col-md-3" style="padding-top:16px;">
                <label for="datissnov" class="form-label labmar">NOV Issuance Date</label>
                <input type="date" class="form-control" name="datissnov" value="">
              </div>
            </div>
            <div class="row divmodal" style="padding-bottom:20px;">
              <div class="row" style="margin-bottom:-23px;">
                <div class="col-md-3" style="padding-top:8px;">
                  <label for="datrecnov" class="form-label labmar">NOV Copy Received</label>
                  <input type="date" class="form-control" name="datrecnov" value="">
                </div>
                <div class="col-md-5">
                  <label for="novpospap" class="form-label labmar">NOV Position Paper</label>
                  <textarea class="form-control" name="novpospap" rows="2" cols="31"></textarea>
                </div>
                <div class="col-md-4">
                  <label for="commit" class="form-label labmar">Commitment</label>
                  <textarea class="form-control" name="commit" rows="2" cols="32" style="width:110%;"></textarea>
                </div>
              </div>
            </div>
          </div>

          <div class="footer" style="text-align:right;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- legal add records -->
