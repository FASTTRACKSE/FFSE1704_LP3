<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
		$FFSE1704=array(
		  array(
		  	'id'=>1,
		  	'name'=>"nguyen van a",
		  	'lp0'=>8.2,
		  	'lp1'=>7.6,
		  	'lp2'=>8.8,
		  	),
		  array(
		  	'id'=>2,
		  	'name'=>"nguyen van b",
		  	'lp0'=>9.9,
		  	'lp1'=>7.5,
		  	'lp2'=>8.9,
		  	),
		  array(
		  	'id'=>3,
		  	'name'=>"nguyen van c",
		  	'lp0'=>9.9,
		  	'lp1'=>9.8,
		  	'lp2'=>8.9,
		  	)
		);
	?>
<h3>DTB < 5 yếu</h3>
<h3>ĐTB <= 7 : Trung bình</h3>
<h3>ĐTB <= 8.5 : Khá</h3>
<h3>ĐTB > 8.5 : Giỏi</h3>
<table border="1px">
	<tr>
		<th>id</th>
		<th>name</th>
		<th>lp1</th>
		<th>lp2</th>
		<th>lp3</th>
		<th>điểm trung bình</th>
		<th>xếp loại</th>
	</tr>
	<?php
		foreach ($FFSE1704 as $key => $v) {
			echo "<tr>";
			echo "<td>$v[id]</td>";
			echo "<td>$v[name]</td>";
			echo "<td>$v[lp0]</td>";
			echo "<td>$v[lp1]</td>";
			echo "<td>$v[lp2]</td>";
			$diem = ($v['lp0'] + $v['lp1'] + $v['lp2'])/3;
			echo "<td>$diem</td>";
			if ($diem < 5) {
				$xeploai = "yếu";
			}else{
				if ($diem <= 7) {
					$xeploai = "trung bình";
				}else{
					if ($diem <=8.0) {
						$xeploai = "khá";
					}else{
						$xeploai = "Giỏi";
					}
					echo "<td>$xeploai</td>";
					echo "</tr>";
				}
			}
		}
	?>
</table>
<br>
	<?php
	$max = 0;
	$ten = "";
	for ($i=0; $i < count($FFSE1704); $i++) { 
		$tb[$i] = ($FFSE1704[$i]['lp0'] + $FFSE1704[$i]['lp1'] + $FFSE1704[$i]['lp2'])/3;
		if ($tb[$i] > $max) {
			$max = $tb[$i];
			$ten = $FFSE1704[$i]['name'];
		}
	}
	echo "Người có điểm trung bình cao nhất là: " .$ten ." với số điểm là: ".$max;
?>
</body>
</html>