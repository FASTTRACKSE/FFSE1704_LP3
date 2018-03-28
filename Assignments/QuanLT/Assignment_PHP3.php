
<h2>Bảng điểm tổng kết môn của lớp FFSE1704 </h2>
<?php 
$FFSE1704=array(
	array(
		'id' => 1, 
		'ten' => "Nguyễn Văn A" ,
		'toan' => 4.2,
		'ly' => 7.8,
		'hoa' => 6.7
	),
	array(
		'id' => 2 , 
		'ten' => "Nguyễn Văn B" ,
		'toan' => 7.3,
		'ly' => 8.7,
		'hoa' => 8.8
	),
	array(
		'id' => 3 , 
		'ten' => "Nguyễn Văn C" ,
		'toan' => 3,
		'ly' => 4,
		'hoa' => 5
	),
	array(
		'id' => 3 , 
		'ten' => "Nguyễn Văn D" ,
		'toan' => 9,
		'ly' => 4,
		'hoa' => 5
	),
	array(
		'id' => 3 , 
		'ten' => "Nguyễn Văn E" ,
		'toan' => 9,
		'ly' => 8,
		'hoa' => 5
	)

);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1", cellspacing="0",  cellpadding="5">
		<tr style="background: #9fb6cd">
			<th>TT</th>
			<th>Họ và tên</th>
			<th>Điểm hóa</th>
			<th>Điểm lý</th>
			<th>Điểm toán</th>
			<th>Tổng điểm</th>
			<th>Xếp Loại</th>
		</tr>
		<?php
		$i = 0 ;

		foreach ($FFSE1704 as $key => $value) {
			$i++;
			$DTB = round((((($value['toan'])+($value['ly'])+($value['hoa']))/3)),3);
			if ($DTB < 5 ) {
				$xl  = "Yếu";
			}else{
				if ($DTB <=7 ) {
					$xl =  "Trung bình ";
				}else{
					if ($DTB <= 8) {
						$xl =  "Khâ";
					}else {
						$xl = "Giỏi";
					}
				}
			}
			if ($DTB > 5 ) {
				echo "<tr>";
				echo "<td>$i</td>";
				echo"<td>$value[ten]</td>";
				echo "<td>$value[toan]</td>";
				echo "<td>$value[ly]</td>";
				echo "<td>$value[hoa]</td>";
				echo "<td>$DTB</td>";
				echo "<td>$xl</td>";
				echo "</tr>";
			}else{
				echo "<tr style = 'color : red'>";
				echo "<td>$i</td>";
				echo"<td>$value[ten]</td>";
				echo "<td>$value[toan]</td>";
				echo "<td>$value[ly]</td>";
				echo "<td>$value[hoa]</td>";
				echo "<td>$DTB</td>";
				echo "<td>$xl</td>";
				echo "</tr>";
			}
		}
		?>	


	</table>
</br>
<?php 
$diemcao = 0 ; 
$name = "";
for ($i=0; $i<count($FFSE1704) ; $i++) { 
	$TB[$i] = ($FFSE1704[$i]['toan'] + $FFSE1704[$i]['ly']+ $FFSE1704[$i]['hoa'])/3;

	if ($TB[$i] > $diemcao ) {
		$diemcao = $TB[$i];
		$name = $FFSE1704[$i]["ten"];

	}
}
echo "Người có điểm trung bình cao nhất là : " . $name."  có số điểm là : " . $diemcao;
?>

</body>
</html>