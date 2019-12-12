<?php
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
echo 55;
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 204800)
&& in_array($extension, $allowedExts))
{
    if ($_FILES["file"]["error"] > 0)
    {
        echo "error code: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
		//echo "933";
		$filepath = $_POST['filepath'];
		if(!is_readable($filepath))
			mkdir($filepath);
        if (file_exists($filepath . $_FILES["file"]["name"]))
        {
            echo $_FILES["file"]["name"] . " already exist. ";
        }
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"], $filepath . $_FILES["file"]["name"]);
            echo "File store in " . $filepath . $_FILES["file"]["name"];
        }
    }
}
else
{
    echo "Error!";
}
?>