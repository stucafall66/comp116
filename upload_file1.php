<?php
if ($_FILES["file"]["error"] > 0)
{
    echo "Error code: " . $_FILES["file"]["error"] . "<br>";
}
else
{
    echo "File Name: " . $_FILES["file"]["name"] . "<br>";
    echo "File Type: " . $_FILES["file"]["type"] . "<br>";
    echo "File Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "File Temp Storage: " . $_FILES["file"]["tmp_name"];
}
?>