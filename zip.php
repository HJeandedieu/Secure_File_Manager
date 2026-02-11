<?php


if(isset($_POST['compress'])){

    $sourceFile = "uploads/". $_POST['filename'];
    $zipFile = "compressed/". $_POST['filename'];

    $zip = new ZipArchive();

    //check if source file exists

    if(!file_exists($sourceFile)){
        echo "<h5 style='color: red;'>File not found.</h5>";
    }else{
        //Try opening the zip
        $result = $zip->open($zipFile, ZipArchive::CREATE | ZipArchive::OVERWRITE);

        if ($result === TRUE){
            $zip->addFile($sourceFile,basename($sourceFile));
            $zip->close();

            echo "<h5 style='color: green;'>File compressed successfully!</h5>";
            echo "File at 'compressed/barca.zip' on the server.";
        }else{
            echo "<h5 style='color: red;'>Failed to compress the file.</h5>";
        }
    }
}