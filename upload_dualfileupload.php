<?php
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
echo $extension;
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
		$filepath = $_POST['filepath'];
        if (file_exists($filepath . $_FILES["file"]["name"]))
        {
            echo $_FILES["file"]["name"] . " already exist. ";
        }
        else
        {
			foreach($_FILES as $afile)
			{
				move_uploaded_file($afile["tmp_name"], $filepath . $afile["name"]);
				echo "File store in " . $filepath . $afile["name"];
			}
        }
    }
}
else
{
    echo "Error!";
}
?>