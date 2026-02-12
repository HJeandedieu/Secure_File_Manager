
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit File</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="sidebar">
    <h2>File Manager</h2>
    <a href="index.html">Home</a>
    <a href="upload.html">Upload</a>
    <a href="download.html">Download</a>
    <a href="compress.html">Compress</a>
    <a href="edit.php" class="active">Edit</a>
    <a href="delete.php">Delete</a>
</div>

<div class="main">
    <h1>Edit File</h1>
    <form action="edit.php" method="post">




<?php
$file = "../trash/summer.txt";
if(is_file($file)){
    $fileContents = file_get_contents($file);
}else{
    file_put_contents($file, "Hello I am redBlue Inspired to change.\nMay the Lord lead the way.", FILE_APPEND);
    $fileContents = file_get_contents($file);
}

?>

        <?php
        if(isset($_POST['remove'])){
            $fileContents = "";
            file_put_contents($file, $fileContents);
        }

        if(isset($_POST['uppercase'])){
            $fileContents = strtoupper($fileContents);
            file_put_contents($file, $fileContents);
        }
        if(isset($_POST['lowercase'])){
            $fileContents = strtolower($fileContents);
            file_put_contents($file, $fileContents);
        }
        if(isset($_POST['trim'])){
            $fileContents = trim($fileContents);
            file_put_contents($file, $fileContents);
        }
        ?>
        <label>File content</label><br>
        <textarea name="content" rows="5" cols="50" style="background-color: transparent; color: white;"><?php echo htmlspecialchars($fileContents); ?></textarea><br>
        <button type="submit" name="trim">Trim</button>
        <button type="submit" name="remove">Remove</button>
        <button type="submit" name="uppercase">UpperCase</button>
        <button type="submit" name="lowercase">LowerCase</button>
    </form>
</div>
</body>
</html>
