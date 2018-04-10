<?php
$name = $_FILES['hinhanh']['name'];//name.jpg
$arname = explde('.',name);
$duoiFile = end($arname);
$newname = time();
$name_new = $newname.'.'.$duoiFile;
$tmp_name= $_FILES[ 'hinhanh']['tmp_name'];

//tạo đường dẫn gốc
$part= $_SEVER['DOCUMENT_ROOT'];//D:/xampp/htdocs

?>