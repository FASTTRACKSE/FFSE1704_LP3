<!DOCTYPE html>
<html>
<head>
	<title>php-asm-02</title>
<style type="text/css">
	table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}
th {
  background-color: green;
}
.red {
    color: red;
}
</style>
</head>
<body>

<h1>Bảng điểm tổng kết môn của lớp 10A1</h1>
<?php 
	$students = array(
		1 => array(
			'ten' => 'Trần Nguyễn Nhật Nam',
			'toan' => 9, 
			'ly' => 8.5,
			'hoa' => 8.9
		),
		2 => array(
			'ten' => 'Bùi Ngọc Quỳnh Nhi',
			'toan' => 7, 
			'ly' => 8.8,
			'hoa' => 7.8
		),
		3 => array(
			'ten' => 'Nguyễn Hoàng Thanh Mai',
			'toan' => 8.5, 
			'ly' => 9.2,
			'hoa' => 7.5
		),
		4 => array(
			'ten' => 'Trần Thị Thu Minh',
			'toan' => 6.5, 
			'ly' => 6,
			'hoa' => 7
		),
		5 => array(
			'ten' => 'Nguyễn Thị Nguyên Thảo',
			'toan' => 4, 
			'ly' => 4.1,
			'hoa' => 3.2
		)
    );
	$red = 'class = "red"';
?>

<table>
	
	<tr>
		<th>TT</th>
		<th>Họ tên</th>
		<th>Điểm toán</th>
		<th>Điểm lý</th>
		<th>Điểm hóa</th>
		<th>Tổng điểm</th>
		<th>Xếp loại</th>
	</tr>

	<?php for ($i=1; $i <= count($students) ; $i++) { 
		$diemtb = ($students[$i]['toan'] + $students[$i]['ly'] + $students[$i]['hoa'])/3;
	?>

		<tr <? if($diemtb < 5){echo $red;} ?> >
			<td><? echo $i; ?></td>		
			<td><? echo $students[$i]['ten']; ?></td>
			<td><? echo $students[$i]['toan']; ?></td>
			<td><? echo $students[$i]['ly']; ?></td>
			<td><? echo $students[$i]['hoa']; ?></td>
			<td>
				<?php 
					$diemtb = ($students[$i]['toan'] + $students[$i]['ly'] + $students[$i]['hoa'])/3;
					echo round($diemtb, 2);
					$diemtb = round($diemtb, 2);
				?>					
			</td>
			<td>
				<?php  
					if ($diemtb < 5) {
						echo "Loại yếu";
					}elseif (5 < $diemtb && $diemtb <= 7) {
						echo "Loại trung bình";
					}elseif (7 < $diemtb && $diemtb <= 8.5) {
						echo "Loại khá";
					}elseif ($diemtb > 8.5) {
						echo "Loại giỏi";
					}
				?>	
			</td>		
		</tr>

	<?php } ?>

</table>

</body>
</html>