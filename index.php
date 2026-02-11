<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Secure File Handler</title>
</head>
<body>
<h1>Secure File Manager</h1>
<section>
    <h2>Upload File</h2>
    <form method="post" enctype="multipart/form-data" action="upload.php">
        <input type="file" name="file">
        <button type="submit">Upload</button>
    </form>
</section>

<section>
    <h2>Available Files</h2>
    <?php
    $files = scandir("C:\Users\HP\Downloads");
    foreach($files as $file){
        echo $file."<br>";
    }
    ?>
</section>
</body>
</html>