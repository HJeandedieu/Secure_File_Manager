<?php
if (isset($_POST['download'])) {
    $file = "uploads/" . $_POST['filename'];

    if (file_exists($file)) {
        // Clear output buffer to prevent corruption
        if (ob_get_level()) ob_end_clean();//gets available buffers, if any it cleans it/formats it

        header("Content-Type: document/jpeg");//category/subtype
        header("Content-Disposition: attachment; filename=" . basename($file));//content-disposition: how the browser handles the file, also attachment: it forces the browser to immediately download it.
        header("Content-Length: " . filesize($file));//to get the file size in bytes

        readfile($file);
        exit;
    } else {
        echo "File not found.";
    }
}