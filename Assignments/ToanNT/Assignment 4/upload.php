<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div style="width: 200px; background-color:#11EDD6FF">
 	<h3 style="background-color: #41BDADFF">Upload Ảnh</h3>
<form method="post" enctype="multipart/form-data" action="upload.php">
    <input type="file" name="file_upload"><br><br>
    <input type="submit" name="submit_upload" value="Upload File"><br>
    <?php 

if (isset($_POST['submit_upload'])) {
	if(empty($_FILES['file_upload']['name'])){
		echo "Vui lòng chọn ảnh!";
	
}else{
		$file_path = $_FILES['file_upload']['tmp_name'];
$file_name = $_FILES['file_upload']['name'];
$file_size = $_FILES['file_upload']['size'];
$file_type = $_FILES['file_upload']['type'];
$file_error = $_FILES['file_upload']['error'];
$new_path = "upload/".$file_name;
if(move_uploaded_file($file_path,$new_path)){
    echo "Upload File thành công";
}else {
    echo "Upload file thất bại";
}
}
}

echo "<br>";

 ?>
</form>
</div>
</body>

 
</html>