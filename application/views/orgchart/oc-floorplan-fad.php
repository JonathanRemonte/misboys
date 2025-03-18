<?php $is_admin = $this->session->userdata('is_admin');
  if (!$is_admin) { redirect("ojt-index"); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://kit.fontawesome.com/4c890c6a79.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/orgchart/oc-floorplan-fad.css" media="all">
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

        #content{
          margin-top:-2.1em;
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

  <a href="ojt-floorplan-ord"><i id="left" class="fa-solid fa-chevron-left"></i></a>
  <a href="ojt-floorplan-technical"><i id="right" class="fa-solid fa-chevron-right"></i></a>

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

      <?php if($this->session->tempdata('post_block')) :?>
          <?= '<p id="alert-edit"><img src="assets/img/check.gif" id="check">&nbsp;'.$this->session->tempdata('post_block').'</p>'?>
      <?php endif;?>
      
      <div class="modal-content" id="contentfloor" style="outline:none;border:none;" time-format="<?= $timezonefr ?>">
      <div href="" id="fadhead1" class="ttip">
        <?php $highest_id=0; 
          foreach($orgchart as $row){
            if($row['block'] == "fadblock1" && $row['showhide'] == "1"){ 
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

      <div href="" id="fadhead2" class="ttip">
        <?php $highest_id=0; 
          foreach($orgchart as $row){
            if($row['block'] == "fadblock2" && $row['showhide'] == "1"){ 
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

      <div href="" id="fadhead3" class="ttip">
        <?php $highest_id=0; 
          foreach($orgchart as $row){
            if($row['block'] == "fadblock3" && $row['showhide'] == "1"){ 
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

      <div href="" id="fadhead4" class="ttip">
        <?php $highest_id=0; 
          foreach($orgchart as $row){
            if($row['block'] == "fadblock4" && $row['showhide'] == "1"){ 
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

      <div href="" id="fadhead5" class="ttip">
        <?php $highest_id=0; 
          foreach($orgchart as $row){
            if($row['block'] == "fadblock5" && $row['showhide'] == "1"){ 
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

      <div href="" id="fadhead6" class="ttip">
        <?php $highest_id=0; 
          foreach($orgchart as $row){
            if($row['block'] == "fadblock6" && $row['showhide'] == "1"){ 
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

      <div href="" id="fadhead7" class="ttip">
        <?php $highest_id=0; 
          foreach($orgchart as $row){
            if($row['block'] == "fadblock7" && $row['showhide'] == "1"){ 
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

      <div href="" id="fadhead8" class="ttip">
        <?php $highest_id=0; 
          foreach($orgchart as $row){
            if($row['block'] == "fadblock8" && $row['showhide'] == "1"){ 
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

      <div href="" id="fadhead9" class="ttip">
        <?php $highest_id=0; 
          foreach($orgchart as $row){
            if($row['block'] == "fadblock9" && $row['showhide'] == "1"){ 
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

      <div href="" id="fadhead10" class="ttip">
        <?php $highest_id=0; 
          foreach($orgchart as $row){
            if($row['block'] == "fadblock10" && $row['showhide'] == "1"){ 
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

      <div href="" id="fadhead11" class="ttip">
        <?php $highest_id=0; 
          foreach($orgchart as $row){
            if($row['block'] == "fadblock11" && $row['showhide'] == "1"){ 
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

      <div href="" id="fadhead12" class="ttip">
        <?php $highest_id=0; 
          foreach($orgchart as $row){
            if($row['block'] == "fadblock12" && $row['showhide'] == "1"){ 
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
      </div>

      <div id="downprompt">
        <!-- <i class="fa-solid fa-circle-xmark" onClick="closeDownPrompt()" style="font-size: 20px;"></i> -->
        <h5><b>Finance and Administrative Division</b></h5>
      </div>

      <img id="fadimg" src="https://i.ibb.co/CQmTgsK/fad.jpg" alt="" draggable="false">