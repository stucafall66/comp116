<html>
<head>
<meta charset="utf-8">
<title>upload_file1</title>
</head>
<body>

<form action="upload_file1.php" method="post" enctype="multipart/form-data" id="test-form" onsubmit="return checkForm()">
    <label for="file">File: </label>
    <input type="file" name="file" id="file"><br>
	<input type="hidden" name="filepath" value="upload/">
    <input type="submit" name="submit" value="submit">
</form>

<script>
function checkForm()
{
	var files = document.getElementById('file').files;
	var filetype = files[0].type;
	alert(filetype);
	
	var arr = ['image/jpeg', 'image/png', 'image/gif'];
	if(arr.includes(filetype))
	{
		return true;
	}
	else
	{
		return false;
	}
}
</script>
</body>
</html>