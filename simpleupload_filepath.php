<html>
<head>
<meta charset="utf-8">
<title>upload_file1</title>
</head>
<body>

<form action="upload_file_filepath.php" method="post" enctype="multipart/form-data" id="test-form">
    <label for="file">File: </label>
    <input type="file" name="file" id="file"><br>
	<input type="hidden" name="filepath" value="upload/">
    <input type="submit" name="submit" value="submit">
</form>

</body>
</html>