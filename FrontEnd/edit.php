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
        <input type="text" name="filename" placeholder="Enter file name" required>
        <button type="submit">Edit</button>
    </form>
</div>

</body>
</html>
