<?php
	
	function upload(){
		dump($_FILES);

	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>上传文件测试</title>
</head>
<body>
<form action="upload.php" enctype="multipart/formdata">
	<input type="file" name="file" value="">
	<input type="button" name="">
	
</form>
</body>
</html>