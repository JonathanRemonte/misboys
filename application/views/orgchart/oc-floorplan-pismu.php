<?php  $is_admin = $this->session->userdata('is_admin');
  if (!$is_admin) { redirect("ojt-index"); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1" /> -->
  <script src="https://kit.fontawesome.com/4c890c6a79.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/orgchart/oc-floorplan.css" media="all">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
  <title>OC Floorplan</title>
  <script>
    if (<?= $is_admin ?> == 1){
      const tooltipStyle = document.createElement('style')
      tooltipStyle.innerHTML = `
        .btnclick, .dropdown{
          display: unset;
        }
      `
      document.head.appendChild(tooltipStyle)
    }
  </script>
</head>
<body>
  <div class="sidebar" id="sidebar">
    <img id="logo" alt="" src="assets/img/logo.png" />
    <a href="ojt-home" title="Home"><i class="fa fa-home"></i></a>
    <a class="active" id="active" title="Floorplan"><i class="fa-sharp fa-solid fa-map-location-dot"></i></a>
    <a href="ojt-floorplan-chief"><i class="fa-solid fa-users"></i></a>
  </div>

  <a title="Floorplan Records" href="ojt-floorplan-records"><i id="left" class="fa-solid fa-chevron-left"></i></a>
  
  <div class="dropdown">
    <i class="fa-solid fa-users-viewfinder" data-toggle="dropdown" id="dropdownicon"></i>

    <div class="dropdown-menu" id="dropdown-menu">
      <span id="dropdown-title">ADD EMPLOYEE BLOCK</span>
      <div id="otherhead">
        <p id="noblock">Walang Laman</p>
          <?php $timezonefr=
            file_get_contents
            ("https://slug.vercel.app/s/cdn-js-moment-tz-min");
            foreach($orgchart as $row){
            $dv = $row['division'];
            if($row['block'] == "noblock" && $row['primarywork'] == "1" &&
               $dv != "Oriental Mindoro" && $dv != "Marinduque" && $dv != "Occidental Mindoro"
               && $dv != "Romblon" && $dv != "Palawan"){ ?>
              <div id="yesblock" style="margin-bottom:1em;">
                <?php if($row['img'] == null || !$row['img']){?>
                  <img src="img/userdefault.png" alt="" draggable="false">
                <?php } else { ?>
                  <img src="data:image/jpeg;base64, <?= $row['img'] ?>" alt="" draggable="false">
                <?php } ?>

                <span style="font-size:13px;"><?= $row['name'] ?></span>
                <button type="button" title="Add Block" class="btnclick" data-name="<?= $row['name'] ?>" data-id="<?= $row['id'] ?>"  data-toggle="modal" data-target="#myModal">
                  <i class="fa-solid fa-pen-to-square"></i>
                </button>
              </div>
          <?php }} ?>
        <p style="margin-bottom: 1em;"></p>
      </div>
    </div>
  </div>

  <div class="content" id="content">
    <div class="container" id="container">
      <?php if($this->session->tempdata('post_block')){?>
          <?= '<p id="alert-edit"><img src="assets/img/check.gif" id="check">&nbsp;'.$this->session->tempdata('post_block').'</p>'?>
      <?php } else if($this->session->tempdata('post_blockcancel')){?>
          <?= '<p id="alert-edit" style="background-color:#3a3b3a;">&nbsp;'.$this->session->tempdata('post_blockcancel').'</p>' ?>
      <?php } ?>

      <div id="downprompt">
        <h5><b>Planning and Information Systems and Management</b></h5>
      </div>

      <div class="modal-content" id="contentfloor" style="outline:none;border:none;" time-format="<?= $timezonefr ?>">
        <div id="hoverhead1" class="ttip" >
          <?php $highest_id=0; 
            foreach($orgchart as $row){
              if($row['block'] == "pismublock1" && $row['showhide'] == "1"){ 
                if($row['img'] == null || !$row['img']){?>
                  <img src="img/userdefault.png" alt="" draggable="false">
                  <?php } else { ?>
                  <img src="data:image/jpeg;base64, <?= $row['img'] ?>" alt="" draggable="false">
                <?php } ?>

                <?php foreach($fr as $frow) {
                  if ($row['frname'] == $frow['empName']){
                    $highest_id = max($highest_id, $frow['id']);
                  }
                }?>

                <span id="status-container" high-date="<?= $highest_id ?>" fr-name="<?php echo $row['frname']; ?>" >
                  <i class="fa-solid fa-circle fa-beat-fade" style="color:gray;"></i>
                </span>

                <span class="ttiptext">
                  <?= $row['name'] ?>
                  <button class="btnclick" data-name="<?= $row['name'] ?>" data-id="<?= $row['id'] ?>"  data-toggle="modal" data-target="#myModal">
                  <i class="fa-solid fa-pen-to-square"></i>
                  </button><br>
                </span>
          <?php }} ?>
        </div>

        <div id="hoverhead2" class="ttip">
            <?php $highest_id=0; 
              foreach($orgchart as $row){
                if($row['block'] == "pismublock2" && $row['showhide'] == "1"){
                  if($row['img'] == null || !$row['img']){?>
                    <img src="img/userdefault.png" alt="" draggable="false">
                    <?php } else { ?>
                    <img src="data:image/jpeg;base64, <?= $row['img'] ?>" alt="" draggable="false">
                  <?php } ?>

                  <span id="status-container" high-date="<?= $highest_id ?>" fr-name="<?php echo $row['frname']; ?>" >
                    <i class="fa-solid fa-circle fa-beat-fade" style="color:gray;"></i>
                  </span>

                  <span class="ttiptext">
                    <?= $row['name'] ?>
                    <button class="btnclick" data-name="<?= $row['name'] ?>" data-id="<?= $row['id'] ?>" data-toggle="modal" data-target="#myModal">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button><br>
                  </span>
            <?php }} ?>
        </div>

        <div id="hoverhead3" class="ttip">
          <?php $highest_id=0; 
            foreach($orgchart as $row){
              if($row['block'] == "pismublock3" && $row['showhide'] == "1"){
                if($row['img'] == null || !$row['img']){?>
                  <img src="img/userdefault.png" alt="" draggable="false">
                  <?php } else { ?>
                  <img src="data:image/jpeg;base64, <?= $row['img'] ?>" alt="" draggable="false">
                <?php } ?>

                <span id="status-container" high-date="<?= $highest_id ?>" fr-name="<?php echo $row['frname']; ?>" >
                  <i class="fa-solid fa-circle fa-beat-fade" style="color:gray;"></i>
                </span>

                <span class="ttiptext">
                  <?= $row['name'] ?>
                  <button class="btnclick" data-name="<?= $row['name'] ?>" data-id="<?= $row['id'] ?>" data-toggle="modal" data-target="#myModal">
                    <i class="fa-solid fa-pen-to-square"></i>
                  </button><br>
                </span>
          <?php }} ?>
        </div>

        <div id="hoverhead4" class="ttip">
          <?php $highest_id=0; 
            foreach($orgchart as $row){
              if($row['block'] == "pismublock4" && $row['showhide'] == "1"){
                if($row['img'] == null || !$row['img']){?>
                  <img src="img/userdefault.png" alt="" draggable="false">
                  <?php } else { ?>
                  <img src="data:image/jpeg;base64, <?= $row['img'] ?>" alt="" draggable="false">
                <?php } ?>

                <span id="status-container" high-date="<?= $highest_id ?>" fr-name="<?php echo $row['frname']; ?>" >
                  <i class="fa-solid fa-circle fa-beat-fade" style="color:gray;"></i>
                </span>

                <span class="ttiptext">
                  <?= $row['name'] ?>
                  <button class="btnclick" data-name="<?= $row['name'] ?>" data-id="<?= $row['id'] ?>" data-toggle="modal" data-target="#myModal">
                    <i class="fa-solid fa-pen-to-square"></i>
                  </button><br>
                </span>
          <?php }} ?>
        </div>

        <div id="hoverhead5" class="ttip">
          <?php $highest_id=0; 
            foreach($orgchart as $row){
              if($row['block'] == "pismublock5" && $row['showhide'] == "1"){ ?> 
                <?php if($row['img'] == null || !$row['img']){?>
                  <img src="img/userdefault.png" alt="" draggable="false">
                  <?php } else { ?>
                  <img src="data:image/jpeg;base64, <?= $row['img'] ?>" alt="" draggable="false">
                <?php } ?>

                <span id="status-container" high-date="<?= $highest_id ?>" fr-name="<?php echo $row['frname']; ?>" >
                  <i class="fa-solid fa-circle fa-beat-fade" style="color:gray;"></i>
                </span>

                <span class="ttiptext">
                  <?= $row['name'] ?>
                  <button class="btnclick" data-name="<?= $row['name'] ?>" data-id="<?= $row['id'] ?>" data-toggle="modal" data-target="#myModal">
                    <i class="fa-solid fa-pen-to-square"></i>
                  </button><br>
                </span>
          <?php }} ?>
        </div>

        <div id="hoverhead6" class="ttip">
          <?php $highest_id=0; 
            foreach($orgchart as $row){
              if($row['block'] == "pismublock6" && $row['showhide'] == "1"){  
                if($row['img'] == null || !$row['img']){?>
                  <img src="img/userdefault.png" alt="" draggable="false">
                  <?php } else { ?>
                  <img src="data:image/jpeg;base64, <?= $row['img'] ?>" alt="" draggable="false">
                <?php } ?>

                <span id="status-container" high-date="<?= $highest_id ?>" fr-name="<?php echo $row['frname']; ?>" >
                  <i class="fa-solid fa-circle fa-beat-fade" style="color:gray;"></i>
                </span>

                <span class="ttiptext">
                  <?= $row['name'] ?>
                  <button class="btnclick" data-name="<?= $row['name'] ?>" data-id="<?= $row['id'] ?>" data-toggle="modal" data-target="#myModal">
                    <i class="fa-solid fa-pen-to-square"></i>
                  </button><br>
                </span>
          <?php }} ?>
        </div>

        <div id="hoverhead7" class="ttip">
          <?php $highest_id = 0; 
            foreach($orgchart as $row){
              if($row['block'] == "pismublock7" && $row['showhide'] == "1"){
                  if($row['img'] == null || !$row['img']){?>
                    <img src="img/userdefault.png" alt="" draggable="false">
                    <?php } else { ?>
                    <img src="data:image/jpeg;base64, <?= $row['img'] ?>" alt="" draggable="false">
                  <?php } ?>

                  <span id="status-container" high-date="<?= $highest_id ?>" fr-name="<?php echo $row['frname']; ?>">
                    <i class="fa-solid fa-circle fa-beat-fade" style="color:gray;"></i>
                  </span>

                  <span class="ttiptext">
                    <?= $row['name'] ?>
                    <button class="btnclick" data-name="<?= $row['name'] ?>" data-id="<?= $row['id'] ?>" data-toggle="modal" data-target="#myModal">
                      <i class="fa-solid fa-pen-to-square"></i>
                    </button><br>
                    </span>
          <?php }} ?>
        </div>

        <div id="hoverhead8" class="ttip">
          <?php $highest_id=0; 
            foreach($orgchart as $row){
              if($row['block'] == "pismublock8" && $row['showhide'] == "1"){
                if($row['img'] == null || !$row['img']){?>
                  <img src="img/userdefault.png" alt="" draggable="false">
                  <?php } else { ?>
                  <img src="data:image/jpeg;base64, <?= $row['img'] ?>" alt="" draggable="false">
                <?php } ?>

                <span id="status-container" fr-name="<?php echo $row['frname']; ?>">
                  <i class="fa-solid fa-circle fa-beat-fade" style="color:gray;"></i>
                </span>

                <span class="ttiptext">
                  <?= $row['name'] ?>
                  <button class="btnclick" data-name="<?= $row['name'] ?>" data-id="<?= $row['id'] ?>" data-toggle="modal" data-target="#myModal">
                    <i class="fa-solid fa-pen-to-square"></i>
                  </button><br>
                </span>
          <?php }} ?>
        </div>
        
        <div id="hoverhead9" class="ttip">
          <?php $highest_id=0; 
            foreach($orgchart as $row){
              if($row['block'] == "pismublock9" && $row['showhide'] == "1"){ 
                if($row['img'] == null || !$row['img']){?>
                  <img src="img/userdefault.png" alt="" draggable="false">                    
                  <?php } else { ?>
                  <img src="data:image/jpeg;base64, <?= $row['img'] ?>" alt="" draggable="false">
                <?php } ?>

                <span id="status-container" high-date="<?= $highest_id ?>" fr-name="<?php echo $row['frname']; ?>" >
                  <i class="fa-solid fa-circle fa-beat-fade" style="color:gray;"></i>
                </span>

                <span class="ttiptext">
                  <?= $row['name'] ?>
                  <button class="btnclick" data-name="<?= $row['name'] ?>" data-id="<?= $row['id'] ?>" data-toggle="modal" data-target="#myModal">
                    <i class="fa-solid fa-pen-to-square"></i>
                  </button><br>
                </span>
          <?php }} ?>
        </div>
      </div>

      <img id="pismuimg" src="https://i.ibb.co/YB7KVTK/pismu.jpg" alt="" draggable="false">
