<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload File</title>
</head>
<body>
    <h2>Upload File</h2>
    <form method="post" action="<?= base_url('StockController/upload') ?>" enctype="multipart/form-data">
        <input type="file" name="userfile" required>
        <input type="submit" value="Upload">
    </form>

    <?php foreach ($files as $file) : ?>
        <a href="<?= base_url('StockController/download/' . $file['file_name']) ?>" download>
            <?= $file['file_name'] ?>
        </a>
        <br>
    <?php endforeach; ?>

</body>
</html>