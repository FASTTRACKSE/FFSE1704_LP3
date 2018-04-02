<?php
$a=2.5;
$b=2;
if($a != 0){
	$x= (-$b)/$a;
	$kq="phương trình có nghiệm";
}
else{
	if($b!=0){
		$x="-";
		$kq=" Hệ số không hợp lệ . a=0";
	}
	else{
		$kq="phương trình vô số nghiệm";
	}
}
?>
<?php
$a1=0;
$b1=1;
if($a1 != 0){
	$x1= (-$b1)/$a1;
	$kq1="phương trình có nghiệm";
}
else{
	if($b1!=0){
		$x1="-";
		$kq1=" Hệ số không hợp lệ . a=0";
	}
	else{
		$kq1="phương trình vô số nghiệm";
	}
}
?>
<?php
$a2=(-1.7);
$b2=(-9.6);
if($a2 != 0){
	$x2= (-$b2)/$a2;
	$kq2="phương trình có nghiệm";
}
else{
	if($b2!=0){
		$x2="-";
		$kq2=" Hệ số không hợp lệ . a=0";
	}
	else{
		$kq2="phương trình vô số nghiệm";
	}
}
?>
<?php
$a3=0.2;
$b3=0.5;
if($a3 != 0){
	$x3= (-$b3)/$a3;
	$kq3="phương trình có nghiệm";
}
else{
	if($b3!=0){
		$x3="-";
		$kq3=" Hệ số không hợp lệ . a=0";
	}
	else{
		$kq3="phương trình vô số nghiệm";
	}
}
?>
<?php
$a4=-6.2;
$b4=0.3;
if($a4 != 0){
	$x4= (-$b4)/$a4;
	$kq4="phương trình có nghiệm";
}
else{
	if($b4!=0){
		$x4="-";
		$kq4=" Hệ số không hợp lệ . a=0";
	}
	else{
		$kq4="phương trình vô số nghiệm";
	}
}
?>
<?php
$a5=0.2;
$b5=3.6;
if($a5 != 0){
	$x5= (-$b5)/$a5;
	$kq5="phương trình có nghiệm";
}
else{
	if($b5!=0){
		$x5="-";
		$kq5=" Hệ số không hợp lệ . a=0";
	}
	else{
		$kq5="phương trình vô số nghiệm";
	}
}
?>
<?php
$a6=9.5;
$b6=6;
if($a6 != 0){
	$x6= (-$b6)/$a6;
	$kq6="phương trình có nghiệm";
}
else{
	if($b6!=0){
		$x6="-";
		$kq6=" Hệ số không hợp lệ . a=0";
	}
	else{
		$kq6="phương trình vô số nghiệm";
	}
}
?>
<?php
$a7=-3.9;
$b7=-0.3;
if($a7 != 0){
	$x7= (-$b7)/$a7;
	$kq7="phương trình có nghiệm";
}
else{
	if($b7!=0){
		$x7="-";
		$kq7=" Hệ số không hợp lệ . a=0";
	}
	else{
		$kq7="phương trình vô số nghiệm";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quốc Hưng</title>
</head>
<body>
	<h1>Giải phương trình bậc nhất, 1 ẩn số</h1>
	<table border="1px" cellspacing="0px" cellpadding="5px" style="width: 800px">
		<tr>
			<td><strong>TT</strong></td>
			<td><strong>a</strong></td>
			<td><strong>b</strong></td>
			<td><strong>x</strong></td>
			<td><strong>Ghi chú</strong></td>
		</tr>
		<tr>
			<td>1</td>
			<td><?=$a?></td>
			<td><?=$b?></td>
			<td><?=$x?></td>
			<td><?=$kq?></td>
		</tr>
		<tr style="color: red">
			<td>2</td>
			<td><?=$a1?></td>
			<td><?=$b1?></td>
			<td><?=$x1?></td>
			<td><?=$kq1?></td>
		</tr>
		<tr>
			<td>3</td>
			<td><?=$a2?></td>
			<td><?=$b2?></td>
			<td><?=$x2?></td>
			<td><?=$kq2?></td>
		</tr>
		<tr>
			<td>4</td>
			<td><?=$a3?></td>
			<td><?=$b3?></td>
			<td><?=$x3?></td>
			<td><?=$kq3?></td>
		</tr>
		<tr>
			<td>5</td>
			<td><?=$a4?></td>
			<td><?=$b4?></td>
			<td><?=$x4?></td>
			<td><?=$kq4?></td>
		</tr>
		<tr>
			<td>6</td>
			<td><?=$a5?></td>
			<td><?=$b5?></td>
			<td><?=$x5?></td>
			<td><?=$kq5?></td>
		</tr>
		<tr>
			<td>7</td>
			<td><?=$a6?></td>
			<td><?=$b6?></td>
			<td><?=$x6?></td>
			<td><?=$kq6?></td>
		</tr>
		<tr>
			<td>8</td>
			<td><?=$a7?></td>
			<td><?=$b7?></td>
			<td><?=$x7?></td>
			<td><?=$kq7?></td>
		</tr>
		
	</table>
</body>
</html>