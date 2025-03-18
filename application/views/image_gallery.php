<!-- application/views/image_gallery.php -->
<html>
<head>
    <title>Image Gallery</title>
</head>
<body>
    <h1>Image Gallery</h1>
    <form action="<?= base_url('Auth/upload') ?>" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="image" id="image">
        <input type="submit" value="Upload Image" name="submit">
    </form>
    <hr>
    <?php foreach ($images as $image): ?>
        <?php
        $user = $this->Auth_model->getUserInfo($image->userid);
        $filename = $user->fname . '_' . $user->lname . '.jpg';
        ?>
        <img src="<?= base_url('Auth/download/' . $image->userid) ?>" alt="Image">
        <a href="<?= base_url('Auth/download/' . $image->userid) ?>" download="<?= $filename ?>">Download</a>

        <form action="<?= base_url('Auth/update1/' . $image->userid) ?>" method="post" enctype="multipart/form-data">
            Update image:
            <input type="file" name="image" id="image">
            <input type="submit" value="Update Image" name="submit">
        </form>
        <hr>
    <?php endforeach; ?>
</body>
</html>
