<!DOCTYPE html>
<html>
<body>
<h1>Bảng điểm lớp 10A1</h1>
</body>
</html>
<?php
	$lop10A1 = array(
		array(
				'stt'=>1,
				'hovaten'=>"Nguyễn Văn A",
				'diemtoan'=>10,
				'diemly'=>9,
				'diemhoa'=>10),
		array( 
				'stt'=>2,
				'hovaten'=>"Nguyễn Văn B",
				'diemtoan'=>10,
				'diemly'=>8,
				'diemhoa'=>10
			),
		array( 
				'stt'=>3,
				'hovaten'=>"Nguyễn Văn C",
				'diemtoan'=>10,
				'diemly'=>7,
				'diemhoa'=>10
			),
		array(	'stt'=>4,
				'hovaten'=>"Nguyễn Văn D",
				'diemtoan'=>10,
				'diemly'=>8,
				'diemhoa'=>10),
	);
  ?>
<?php
echo "<pre>";
print_r($lop10A1);
echo "</pre>";
?>
<table border='1px' cellpadding='5px' cellspacing='0px' style='width:50%;'>
	<tr>
		<th style='text-align: center;'>TT</th>
		<th style='text-align: right;'>Họ và tên</th>
		<th style='text-align: right;'>Điểm Toán</th>
		<th style='text-align: right;'>Điểm Lý</th>
		<th style='text-align: right;'>Điểm Hoá</th>
	</tr>
	<?php for ($i=0; $i < count($lop10A1); $i++) { ?>
		<tr>
			<td><?=$lop10A1[$i]['stt'];?></td>
			<td><?=$lop10A1[$i]['hovaten'];?></td>
			<td><?=$lop10A1[$i]['diemtoan'];?></td>
			<td><?=$lop10A1[$i]['diemly'];?></td>
			<td><?=$lop10A1[$i]['diemhoa'];?></td>
			<td><?=$lop10A1[$i]['dtbtoan'];?></td>
		</tr>
	<?php }?>
		
</table>