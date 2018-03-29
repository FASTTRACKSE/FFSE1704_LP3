<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment PHP 2</title>
</head>
<body>
	<?php
	$Lop10A1 = array(
		array(
			'name' => "Trần Nguyễn Nhật Nam",
			'toan' => 9,
			'ly' => 8.5,
			'hoa' => 8.9,
		),
		array(
			'name' => "Bùi Ngọc Quỳnh Nhi",
			'toan' => 7,
			'ly' => 8.8,
			'hoa' => 7.8,
		),
		array(
			'name' => "Nguyễn Hoàng Thanh Mai",
			'toan' => 8.5,
			'ly' => 9.2,
			'hoa' => 7.5,
		),
		array(
			'name' => "Trần Thị Thu Minh",
			'toan' => 6.5,
			'ly' => 6,
			'hoa' => 7,
		),
		array(
			'name' => "Nguyễn Thị Nguyên Thảo",
			'toan' => 4,
			'ly' => 4.1,
			'hoa' => 3.2,
		)
	);
?>

<h1>Bảng điểm tổng kết môn của lớp 10A1</h1>
<table border='1px' cellpadding='5px' cellspacing='0px' style='width:50%;'>
	<tr bgcolor = #f5f5f5>
		<th style='text-align: center;'>TT</th>
		<th style='text-align: left;'>Họ tên</th>
		<th style='text-align: right;'>Điểm toán</th>
		<th style='text-align: right;'>Điểm lý</th>
		<th style='text-align: right;'>Điểm hóa</th>
		<th style='text-align: right;'>Tổng điểm</th>
		<th style='text-align: center;'>Xếp loại</th>
	</tr>

	<?php
		foreach ($Lop10A1 as $k => $v) {
			$diem = round(($v['toan'] + $v['ly'] + $v['hoa'])/3, 2);
			$style = "";
			if ($diem < 5) {
				$xeploai = "Loại yếu";
				$style = "style= 'color: red;'";
			}else{
				if ($diem <= 7) {
					$xeploai = "Loại trung bình";
				}else{
					if ($diem <= 8.5) {
						$xeploai = "Loại khá";
					}else{
						$xeploai = "Loại giỏi";
					}
				}
			}
			$k += 1;
			echo "<tr $style>";
			echo "<td style='text-align: center;'>$k</td>";
			echo "<td style='text-align: left;'>$v[name]</td>";
			echo "<td style='text-align: right;'>$v[toan]</td>";
			echo "<td style='text-align: right;'>$v[ly]</td>";
			echo "<td style='text-align: right;'>$v[hoa]</td>";
			echo "<td style='text-align: right;'>$diem</td>";		
			echo "<td style='text-align: center;'>$xeploai</td>";
			echo "</tr>";
		}
	?>
</table>
<br>
<h1>Bảng điểm tổng kết môn của lớp 10A1 đã được sắp xếp theo thứ tự từ cao xuống thấp</h1>
<table border='1px' cellpadding='5px' cellspacing='0px' style='width:50%;'>
	<tr bgcolor = #f5f5f5>
		<th style='text-align: center;'>TT</th>
		<th style='text-align: left;'>Họ tên</th>
		<th style='text-align: right;'>Điểm toán</th>
		<th style='text-align: right;'>Điểm lý</th>
		<th style='text-align: right;'>Điểm hóa</th>
		<th style='text-align: right;'>Tổng điểm</th>
		<th style='text-align: center;'>Xếp loại</th>
	</tr>

	<?php
		for ($i=0; $i < count($Lop10A1); $i++) { 
			$diem1 = round(($Lop10A1[$i]['toan'] + $Lop10A1[$i]['ly'] + $Lop10A1[$i]['hoa'])/3, 2);
			for ($j= $i + 1; $j < count($Lop10A1); $j++) { 
				$diem2 = round(($Lop10A1[$j]['toan'] + $Lop10A1[$j]['ly'] + $Lop10A1[$j]['hoa'])/3, 2);
				if ($diem1 < $diem2) {
					$luu = $Lop10A1[$i];
					$Lop10A1[$i] = $Lop10A1[$j];
					$Lop10A1[$j] = $luu;
				}
			}
		}

		foreach ($Lop10A1 as $k => $v) {
			$diem = round(($v['toan'] + $v['ly'] + $v['hoa'])/3, 2);
			$style = "";
			if ($diem < 5) {
				$xeploai = "Loại yếu";
				$style = "style= 'color: red;'";
			}else{
				if ($diem <= 7) {
					$xeploai = "Loại trung bình";
				}else{
					if ($diem <= 8.5) {
						$xeploai = "Loại khá";
					}else{
						$xeploai = "Loại giỏi";
					}
				}
			}
			$k += 1;
			echo "<tr $style>";
			echo "<td style='text-align: center;'>$k</td>";
			echo "<td style='text-align: left;'>$v[name]</td>";
			echo "<td style='text-align: right;'>$v[toan]</td>";
			echo "<td style='text-align: right;'>$v[ly]</td>";
			echo "<td style='text-align: right;'>$v[hoa]</td>";
			echo "<td style='text-align: right;'>$diem</td>";		
			echo "<td style='text-align: center;'>$xeploai</td>";
			echo "</tr>";
		}
	?>
</table>

<?php
	$max = 0;
	$ten = "";
	for ($i=0; $i < count($Lop10A1); $i++) { 
		$diem = round(($Lop10A1[$i]['toan'] + $Lop10A1[$i]['ly'] + $Lop10A1[$i]['hoa'])/3, 2);
		if ($diem > $max) {
			$max = $diem;
			$ten = $Lop10A1[$i]['name'];
		}
	}
	echo "<br>";
	echo "Bạn <strong>" .$ten ."</strong> có điểm trung bình cao nhất là: <strong>".$max ."</strong>";
?>
</body>
</html>