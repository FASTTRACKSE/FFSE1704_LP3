<?php
	$FFSE1701 = array(
		array(
			'id' => 1,
			'name' => "Nguyễn Văn A",
			'lp0' => 9.2,
			'lp1' => 8.7,
			'lp2' => 7.8,
		),
		array(
			'id' => 2,
			'name' => "Nguyễn Văn B",
			'lp0' => 7.3,
			'lp1' => 9.7,
			'lp2' => 8.8,
		),
		array(
			'id' => 3,
			'name' => "Nguyễn Văn C",
			'lp0' => 9.5,
			'lp1' => 8,
			'lp2' => 9,
		)
	);

	echo "<pre>";
	print_r($FFSE1701);

	
	echo "</pre>";
?>

<h1>Câu a: Tạo bảng table với các cột là các key đã cho</h1>
<table border='1px' cellpadding='5px' cellspacing='0px' style='width:50%;'>
	<tr bgcolor = #d6d6d6>
		<th style='text-align: center;'>id</th>
		<th style='text-align: right;'>name</th>
		<th style='text-align: right;'>lp1</th>
		<th style='text-align: right;'>lp2</th>
		<th style='text-align: right;'>lp3</th>
	</tr>
	<?php for ($i=0; $i < count($FFSE1701); $i++) { ?>
		<tr>
			<td><?=$FFSE1701[$i]['id'];?></td>
			<td><?=$FFSE1701[$i]['name'];?></td>
			<td><?=$FFSE1701[$i]['lp0'];?></td>
			<td><?=$FFSE1701[$i]['lp1'];?></td>
			<td><?=$FFSE1701[$i]['lp2'];?></td>
		</tr>
	<?php }?>
</table>

<h1>Câu b: Chèn thêm 1 cột "điểm trung bình" của các môn học"</h1>
<table border='1px' cellpadding='5px' cellspacing='0px' style='width:50%;'>
	<tr bgcolor = #d6d6d6>
		<th style='text-align: center;'>id</th>
		<th style='text-align: right;'>name</th>
		<th style='text-align: right;'>lp1</th>
		<th style='text-align: right;'>lp2</th>
		<th style='text-align: right;'>lp3</th>
		<th style='text-align: right;'>Điểm trung bình</th>
	</tr>

	<?php foreach ($FFSE1701 as $key => $value) {?>
		<tr>
			<td><?=$value['id']?></td>
			<td><?=$value['name']?></td>
			<td><?=$value['lp0']?></td>
			<td><?=$value['lp1']?></td>
			<td><?=$value['lp2']?></td>
			<td><?=$diem=($value['lp0']+$value['lp1']+$value['lp2'])/3?></td>
		</tr>
	<?php }?>
</table>

<h1>Câu c: Chèn thêm 1 cột "xếp loại" vào bảng với"</h1>
<h3>ĐTB < 5 : yếu</h3>
<h3>ĐTB <= 7 : Trung bình</h3>
<h3>ĐTB <= 8.5 : Khá</h3>
<h3>ĐTB > 8.5 : Giỏi</h3>
<table border='1px' cellpadding='5px' cellspacing='0px' style='width:50%;'>
	<tr bgcolor = #d6d6d6>
		<th style='text-align: center;'>id</th>
		<th style='text-align: right;'>name</th>
		<th style='text-align: right;'>lp1</th>
		<th style='text-align: right;'>lp2</th>
		<th style='text-align: right;'>lp3</th>
		<th style='text-align: center;'>Điểm trung bình</th>
		<th style='text-align: center;'>Xếp loại</th>
	</tr>

	<?php
		foreach ($FFSE1701 as $k => $v) {
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
					$xeploai = "Trung bình";
				}else{
					if ($diem <= 8.5) {
						$xeploai = "khá";
					}else{
						$xeploai = "giỏi";
					}
				}
			}
			echo "<td>$xeploai</td>";
			echo "</tr>";
		}
	?>
</table>

<h1>Câu d: Hiển thị tên người có điểm trung bình cao nhất</h1>
<?php
	$max = 0;
	$ten = "";
	for ($i=0; $i < count($FFSE1701); $i++) { 
		$tb[$i] = ($FFSE1701[$i]['lp0'] + $FFSE1701[$i]['lp1'] + $FFSE1701[$i]['lp2'])/3;
		if ($tb[$i] > $max) {
			$max = $tb[$i];
			$ten = $FFSE1701[$i]['name'];
		}
	}
	echo "Người có điểm trung bình cao nhất là: " .$ten ." với số điểm là: ".$max;
?>