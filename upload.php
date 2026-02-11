<?php
if (isset($_FILES['file'])){
    $fileName = $_FILES['file']['name'];
    $tmpName = $_FILES["file"]['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $uploadDir = "uploads/";

    //Create uploads folder once it doesn't exist
    if(!is_dir($uploadDir)){
        mkdir($uploadDir);
    }

    //Move file from temp location to uploads folder if it doesn't exist
    if (move_uploaded_file($tmpName, $uploadDir.$fileName)){
        echo "<p style='color:green;>File uploaded successfully</p>";
        echo "<p>File name: $fileName</p>";
        echo "<p>File size: $fileSize</p>";
    }else{
        echo "<p style='color:#ff0000;>File upload failed</p>";
    }
}