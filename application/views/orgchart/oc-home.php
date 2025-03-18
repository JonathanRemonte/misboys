<?php ob_start(); $is_admin = $this->session->userdata('is_admin'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://kit.fontawesome.com/4c890c6a79.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/orgchart/oc-home.css" media="all">
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
  <title>OC Home</title>
</head>
<body dA="<?= $is_admin ?>">
<div class="sidebar">
    <img id="logo" alt="" src="assets/img/logo.png" draggable="false"/>
 
    <a class="active"><div class="nav-icon" >
      <i class="fa fa-home"></i>
      <span>Home</span>
    </div></a>
    
    <a id="showadmin" href="ojt-control"><div class="nav-icon">
      <i class="fa-solid fa-user-plus"></i>
      <span>Add Employee</span>
    </div></a>
 
    <a href="ojt-landscape-chart"><div class="nav-icon">
      <i class="fa-sharp fa-solid fa-sitemap"></i>
      <span>Landscape Chart</span>
    </div></a>
 
    <a id="showadmin" href="ojt-history"><div class="nav-icon">
      <i class="fa-solid fa-clock-rotate-left"></i>
      <span>History</span>
    </div></a>
 
    <a href="ojt-floorplan-list"><div class="nav-icon">
      <i class="fa-sharp fa-solid fa-map-location-dot"></i>
      <span>Floorplan</span>
    </div></a>
 
    <a id="showadmin" href="ojt-signctrl"><div class="nav-icon">
      <i class="fa-solid fa-right-from-bracket"></i>
      <span>Sign Out</span>
    </div></a>
 
    <a id="showuser" href="ojt-signctrl"><div class="nav-icon">
      <i class="fa-solid fa-right-to-bracket"></i>
      <span>Sign In</span>
    </div></a>
    
  </div>
 
  <div class="content">
    <img draggable="false" id="denrlogo" alt="" src="assets/img/denr1.jpg" />
 
    <div class="main-content">
      <div>
        <span id="mainword">4BHive</span><br>
        <span id="statusword">
        </span><br><br>
        <span id="sameword">On The Job Training System Project</span>
        <br><br>
        <!-- <div id="text-below">The project aims to provide the employees with the necessary skills and knowledge to perform their jobs efficiently, enhance their career growth opportunities, and contribute to the overall success of the department. The job training system project in DENR reflects the department's commitment to investing in its employees' growth and development and maintaining high standards of excellence in its operations.<br><br>- Patrick William Lofranco -->
        <div id="text-below">Developing a web-based organizational chart system and floorplan locator system for the DENR EMB could bring significant benefits to the organization. An organizational chart system would provide a visual representation of the company's hierarchy, making it easier for employees to understand the chain of command and who they report to. Meanwhile, a floorplan locator system would allow employees to easily locate the office or workspace of their colleagues and superiors, which could enhance communication and collaboration within the organization. <br><br>- Patrick William Lofranco
      </div>
    </div>
  </div>
</body>
<script src="assets/jsOJT/oc-home.js"></script>
</html>