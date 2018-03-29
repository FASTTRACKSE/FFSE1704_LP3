<?php
	$Lop10A1 = array(
		array(
			'name' => "Trần Nguyễn Nhật Nam",
			'D_toan' => 9,
			'D_ly' => 8.5,
			'D_hoa' => 8.9,
		),
		array(
			'name' => "Bùi Ngọc Quỳnh Nhi",
			'D_toan' => 7,
			'D_ly' => 8.8,
			'D_hoa' => 7.8,
		),
		array(
			'name' => "Nguyễn Hoàng Thanh Mai",
			'D_toan' => 8.5,
			'D_ly' => 9.2,
			'D_hoa' => 7.5,
		),
		array(
			'name' => "Trần Thị Thu Minh",
			'D_toan' => 6.5,
			'D_ly' => 6,
			'D_hoa' => 7,
		),
		array(
			'name' => "Nguyễn Thị Nguyên Thảo",
			'D_toan' => 4,
			'D_ly' => 4.1,
			'D_hoa' => 3.2,
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
			$diem = round(($v['D_toan'] + $v['D_ly'] + $v['D_hoa'])/3, 2);
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
			echo "<td style='text-align: right;'>$v[D_toan]</td>";
			echo "<td style='text-align: right;'>$v[D_ly]</td>";
			echo "<td style='text-align: right;'>$v[D_hoa]</td>";
			echo "<td style='text-align: right;'>$diem</td>";		
			echo "<td style='text-align: center;'>$xeploai</td>";
			echo "</tr>";
		}
	?>
</table>