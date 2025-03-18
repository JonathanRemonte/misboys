<!--location-->
  <script>
  var catobj = {
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
    var fcatSel = document.getElementById("fcat");
    var subcatSel = document.getElementById("subcat");
    var specatSel = document.getElementById("specat");
    for (var a in catobj) {
      fcatSel.options[fcatSel.options.length] = new Option(a, a);
    }
    fcatSel.onchange = function() {
      //empty Chapters- and Topics- dropdowns
      specatSel.length = 1;
      subcatSel.length = 1;
      //display correct values
      for (var b in catobj[this.value]) {
        subcatSel.options[subcatSel.options.length] = new Option(b, b);
      }
    }
    subcatSel.onchange = function() {
      //empty Chapters dropdown
      specatSel.length = 1;
      //display correct values
      var c = catobj[fcatSel.value][this.value];
      for (var m = 0; m < c.length; m++) {
        specatSel.options[specatSel.options.length] = new Option(c[m], c[m]);
      }
    }
  }
  </script>
  <!--location-->
