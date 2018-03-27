<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
</head>
<body>

	<?php
	if(isset($_POST['submit'])){

		$name= $_FILES['hinhanh']['name'];
		$tmp_name=$_FILES['hinhanh']['tmp_name'];
		$patch_root=$_SERVER['DOCUMENT_ROOT'];
		$patch_upload=$patch_root.'/Assignments/KhanhCN/image/'.$name;
		move_uploaded_file($tmp_name, $patch_upload);
	}
	echo("<pre>");
	print_r($_FILES);
	echo "<pre>";
	?>
	<form method="POST" enctype="multipart/from-data">
		<h3>Upload File</h3>
		<p><input type="file" name="hinhanh" value="Chọn tệp">
		</p>
		<p><input type="submit" name="submit" value="Upload"></p>
	</form>
</body>
</html>
