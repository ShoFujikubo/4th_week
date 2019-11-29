<?php
$file = "upload1.php";

if (file_exists($file)){

    $handle = fopen($file, "r") or die("ERROR: Cannot open the file.");

    $content = fread($handle, filesize($file));

    fclose($handle);

    echo $content;
}else{

echo "ERROR: File does not exist.";
}

?>