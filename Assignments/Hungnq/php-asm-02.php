<?php
$ffse1702=array(
	array(
		'tt'=>1,
		'hoten'=>"Nguyễn Văn A",
		'diemtoan'=>5,
		'diemly'=>4,
		'diemhoa'=>2
	),
	array(
		'tt'=>2,
		'hoten'=>"Nguyễn Văn B",
		'diemtoan'=>8,
		'diemly'=>8,
		'diemhoa'=>7
	),
	array(
		'tt'=>3,
		'hoten'=>"Nguyễn Văn C",
		'diemtoan'=>7,
		'diemly'=>8,
		'diemhoa'=>7
	),
)
?>

<h1>Bảng điểm tổng kết môn của học sinh lớp 1702</h1>
<table border="1px" width="100%">
	<tr>
		<td>TT</td>
		<td>Họ tên</td>
		<td>Điểm toán</td>
		<td>Điểm lý</td>
		<td>Điểm hóa</td>
		<td>Tổng điểm</td>
		<td>Xếp loại</td>
	</tr>
	<?php
	foreach ($ffse1702 as $key => $value) {
		$dtt = ($value['diemtoan'] + $value['diemly'] + $value['diemhoa'])/3;
		if ($dtt < 5) {
			$xeploai = "Yếu";
		}
		else{
			if ($dtt < 7) {
				$xeploai = "Trung bình";
			}else{
				if ($dtt < 8) {
					$xeploai = "Khá";
				}else{
					$xeploai = "Giỏi";
				}
			}
		}

		if($dtt >5){
			echo "<tr>";
			echo "<td>$value[tt]</td>";
			echo "<td>$value[hoten]</td>";
			echo "<td>$value[diemtoan]</td>";
			echo "<td>$value[diemly]</td>";
			echo "<td>$value[diemhoa]</td>";
			echo "<td>$dtt</td>";
			echo "<td>$xeploai</td>";
			echo "</tr>";
		}else{
			echo "<tr style='color:red'>";
			echo "<td>$value[tt]</td>";
			echo "<td>$value[hoten]</td>";
			echo "<td>$value[diemtoan]</td>";
			echo "<td>$value[diemly]</td>";
			echo "<td>$value[diemhoa]</td>";
			echo "<td>$dtt</td>";
			echo "<td>$xeploai</td>";
			echo "</tr>";
		}
		
		
		
	}
	?>
</table>
