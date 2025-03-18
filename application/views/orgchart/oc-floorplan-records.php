<?php $is_admin = $this->session->userdata('is_admin');
  if (!$is_admin) { redirect("ojt-index"); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://kit.fontawesome.com/4c890c6a79.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/orgchart/oc-floorplan-records.css" media="all">
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
    <a href="ojt-home"><i class="fa fa-home"></i></a>
    <a class="active" id="active"><i class="fa-sharp fa-solid fa-map-location-dot"></i></a>
    <a href="ojt-floorplan-chief"><i class="fa-solid fa-users"></i></a>
    <!-- <a href="frlogs"><i class="fa-solid fa-clock-rotate-left"></i></a> -->
  </div>

  <a href="ojt-floorplan-technical"><i id="left" class="fa-solid fa-chevron-left"></i></a>
  <a href="ojt-floorplan-pismu"><i id="right" class="fa-solid fa-chevron-right"></i></a>

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
      <!-- <div id="prompt">
        <i class="fa-solid fa-circle-xmark" onClick="closePrompt()" style="font-size: 20px;"></i>
        <h4>Maintain the page in 100% zoom to see the designated position.</h4>
      </div> --> 

      <?php if($this->session->tempdata('post_block')){?>
          <?= '<p id="alert-edit"><img src="assets/img/check.gif" id="check">&nbsp;'.$this->session->tempdata('post_block').'</p>'?>
      <?php } else if($this->session->tempdata('post_blockcancel')){?>
          <?= '<p id="alert-edit" style="background-color:#3a3b3a;">&nbsp;'.$this->session->tempdata('post_blockcancel').'</p>' ?>
      <?php } ?>

      <div class="modal-content" id="contentfloor" time-format="<?= $timezonefr ?>">
      <div href="" id="recordshead1" class="ttip">
        <?php $highest_id=0; 
          foreach($orgchart as $row){
            if($row['block'] == "rcrdsblock5" && $row['showhide'] == "1"){ 
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
      
      <div href="" id="recordshead2" class="ttip">
        <?php $highest_id=0; 
          foreach($orgchart as $row){
            if($row['block'] == "rcrdsblock4" && $row['showhide'] == "1"){ 
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

      <div href="" id="recordshead3" class="ttip">
        <?php $highest_id=0; 
          foreach($orgchart as $row){
            if($row['block'] == "rcrdsblock3" && $row['showhide'] == "1"){ 
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

      <div href="" id="recordshead4" class="ttip">
        <?php $highest_id=0; 
          foreach($orgchart as $row){
            if($row['block'] == "rcrdsblock2" && $row['showhide'] == "1"){ 
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

      <div href="" id="recordshead5" class="ttip">
        <?php $highest_id=0; 
          foreach($orgchart as $row){
            if($row['block'] == "rcrdsblock1" && $row['showhide'] == "1"){ 
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

      <div href="" id="recordshead6" class="ttip">
        <?php $highest_id=0; 
          foreach($orgchart as $row){
            if($row['block'] == "rcrdsblock6" && $row['showhide'] == "1"){ 
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

      <div href="" id="recordshead7" class="ttip">
        <?php $highest_id=0; 
          foreach($orgchart as $row){
            if($row['block'] == "rcrdsblock7" && $row['showhide'] == "1"){ 
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

      <div id="downprompt">
        <!-- <i class="fa-solid fa-circle-xmark" onClick="closeDownPrompt()" style="font-size: 20px;"></i> -->
        <h5><b>Records</b></h5>
      </div>

      <img id="recordsimg" src="https://i.ibb.co/d5GsXML/records.jpg" alt="" draggable="false">
      </div>