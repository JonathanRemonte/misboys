<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/4c890c6a79.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/orgchart/oc-promptdouble.css'); ?>" media="all">
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>" type="image/x-icon">
    <title>Prompt Double Entry</title>
</head>
<body>
    <div class="container">
        <div class="delete-container">
            <a href="javascript:history.back()" ><i class="fa-solid fa-xmark" id="xmark"></i></a>
            <p><?= $name; ?> is already existing.<br>Is this a secondary work?</p>
            
            <form method="post" name="controlForm" enctype="multipart/form-data" action="<?php echo site_url('Auth_modelOC/insert_secdata'); ?> "required>
                <input name="embid" type="hidden" value="<?= $embid ?>">
                <input name="division" type="hidden" value="<?= $division ?>">
                <input name="section" type="hidden" value="<?= $section ?>">
                <input name="unit" type="hidden" value="<?= $unit ?>">
                <input name="enmo" type="hidden" value="<?= $enmo ?>">
                <input name="role" type="hidden" value="<?= $role ?>">
                <input name="name" type="hidden" value="<?= $name ?>">
                <input name="empstatus" type="hidden" value="<?= $empstatus ?>">
                <input name="date" type="hidden" value="<?= $date ?>">
                <input name="remarks" type="hidden" value="<?= $remarks ?>">

                <button type="submit" name="submit" value="yes" id="submityes">Yes</button>
                <button type="submit" name="submit" value="no" id="submitno">No</button>
            </form>
        </div>
    </div>
</body>
</html>
