<?php
get_required_once('uplot.php');
$mysqli=connectdb('localhost','sinhvien','99999','sinhvien');
//tạo câu lệnh sql và thực thi
$sql="SELECT * from 'tintuc'
inner join danhmuctin
on tintuc.id_danhmuctin=
?>