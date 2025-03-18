<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/orgchart/oc-promptblock.css'); ?>">
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>" type="image/x-icon">
    <title>Prompt Block</title>
</head>
<body>
    <div class="container">
        <div class="delete-container">
            <p>Block : <i><b><?= $block; ?></b></i> &nbsp;has already been taken.<br>Proceed?<br><br>
            <i style="font-size:12px;"><b>Note:</b> &nbsp;If 'Yes', The existing employee who is already seated in the block will be removed.</i></p>

            <form method="post" name="controlForm" enctype="multipart/form-data" action="insert_secblock" required>
                <input name="id" type="hidden" value="<?= $id ?>">
                <input name="name" type="hidden" value="<?= $name ?>">
                <input name="block" type="hidden" value="<?= $block ?>">
                <input name="existid" type="hidden" value="<?= $existid ?>">
        
                <button type="submit" name="submit" value="yes" id="submityes">Yes</button>
                <button type="submit" name="submit" value="no" id="submitno">No</button>
            </form>
        </div>
    </div>
</body>
</html>