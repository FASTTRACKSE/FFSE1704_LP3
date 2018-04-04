<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP1</title>
</head>
<body>
<?php
	$a1 = 5;
	$b1 = 6;
	if($a1==0){
		if($b1==0){
			$y1= "pt vô số nghiệm";
		}else{
			$x1= " <h3 style='color:red'> Vô Nghiệm</h3>";
			$y1=  "<h3 style='color:red'>Không hợp lệ </h3>";
		}
	}else{
		$x1 = -$b1/$a1;
		$y1=  "pt có nghiệm";
	}
?>
<?php
	$a2 = 0;
	$b2 = 6;
	if($a2==0){
		if($b2==0){
			$y2=  "pt vô số nghiệm";
		}else{
			$x2= " <h3 style='color:red'> Vô Nghiệm</h3>";
			$y2=  "<h3 style='color:red'>Không hợp lệ </h3>";
		}
	}else{
		$x2 = -$b2/$a2;
		$y2=  "pt có nghiệm ";
	}
?>
<?php
	$a3 = 5;
	$b3 = 6;
	if($a3==0){
		if($b3==0){
			$y3=  "pt vô số nghiệm";
		}else{
			$x3= " <h3 style='color:red'> Vô Nghiệm</h3>";
			$y3=  "<h3 style='color:red'>Không hợp lệ </h3>";
		}
	}else{
		$x3 = -$b3/$a3;
		$y3=  "pt có nghiệm ";
	}
?>
<?php
	$a4 = 5;
	$b4 = 6;
	if($a4==0){
		if($b4==0){
			$y4= "pt vô số nghiệm";
		}else{
			$x4= " <h3 style='color:red'> Vô Nghiệm</h3>";
			$y4= "<h3 style='color:red'>Không hợp lệ </h3>";
		}
	}else{
		$x4 = -$b4/$a4;
		$y4= "pt có nghiệm ";
	}
?>
<?php
	$a5 = 5;
	$b5 = 6;
	if($a5==0){
		if($b5==0){
			$y5= "pt vô số nghiệm";
		}else{
			$x5= " <h3 style='color:red'> Vô Nghiệm</h3>";
			$y5= "<h3 style='color:red'>Không hợp lệ </h3>";
		}
	}else{
		$x5 = -$b5/$a5;
		$y5= "pt có nghiệm ";
	}
?>
<?php
	$a6 = 5;
	$b6 = 6;
	if($a6==0){
		if($b6==0){
			$x6= " <h3 style='color:red'> Vô Nghiệm</h3>";
			$y6= "pt vô số nghiệm";
		}else{
			$y6= "<h3 style='color:red'>Không hợp lệ </h3>";
		}
	}else{
		$x6 = -$b6/$a6;
		$y6= "pt có nghiệm ";
	}
?><?php
	$a7 = 5;
	$b7 = 6;
	if($a7==0){
		if($b7==0){
			$y7= "pt vô số nghiệm";
		}else{
			$x7= "  <h3 style='color:red'> Vô Nghiệm</h3>";
			$y7= "<h3 style='color:red'>Không hợp lệ </h3>";
		}
	}else{
		$x7 = -$b7/$a7;
		$y7= "pt có nghiệm ";
	}
?>
<?php
	$a8 = 5;
	$b8 = 6;
	if($a8==0){
		if($b8==0){
			$y8= "pt vô số nghiệm";
		}else{
			$x8= " <h3 style='color:red'> Vô Nghiệm</h3>";
			$y8= "<h3 style='color:red'>Không hợp lệ </h3>";
		}
	}else{
		$x8 = -$b8/$a8;
		$y8= "pt có nghiệm ";
	}
?>
<?php
	$a9 = 5;
	$b9 = 6;
	if($a9==0){
		if($b9==0){
			$y9= "pt vô số nghiệm";
		}else{
			$x9= " <h3 style='color:red'> Vô Nghiệm</h3>";
			$y9= "<h3 style='color:red'>Không hợp lệ </h3>";
		}
	}else{
		$x9 = -$b9/$a9;
		$y9= "pt có nghiệm ";
	}
?>
<?php
	$a10 = 5;
	$b10 = 6;
	if($a10==0){
		if($b10==0){
			$y10= "pt vô số nghiệm";
		}else{
			$x10= " <h3 style='color:red'> Vô Nghiệm</h3>";
			$y10= "<h3 style='color:red'>Không hợp lệ </h3>";
		}
	}else{
		$x10 = -$b10/$a10;
		$y10= "pt có nghiệm ";
	}
?>
<h1 style="text-align: center; color: red;">Giải Phương Trình Bậc Nhất 1 Ẩn Số</h1>
<table border="1px" cellspacing="0px" style="width: 50%; margin: auto;">	
	<tr>
		<th>TT</th>
		<th>a</th>
		<th>b</th>
		<th>x</th>
		<th>Ghi Chú</th>
	</tr>
	<tr>
		<td>1</td>
		<td><p><?=$a1?></p></td>
		<td><p><?=$b1?></p></td>
		<td><p><?=$x1?></p></td>
		<td><p><?=$y1?></p></td>
	</tr>
	<tr>
		<td>2</td>
		<td><p><?=$a2?></p></td>
		<td><p><?=$b2?></p></td>
		<td><p><?=$x2?></p></td>
		<td><p><?=$y2?></p></td>
	</tr>
	<tr>
		<td>3</td>
		<td><p><?=$a3?></p></td>
		<td><p><?=$b3?></p></td>
		<td><p><?=$x3?></p></td>
		<td><p><?=$y3?></p></td>
	</tr>
	<tr>
		<td>4</td>
		<td><p><?=$a4?></p></td>
		<td><p><?=$b4?></p></td>
		<td><p><?=$x4?></p></td>
		<td><p><?=$y4?></p></td>
	</tr>
	<tr>
		<td>5</td>
		<td><p><?=$a5?></p></td>
		<td><p><?=$b5?></p></td>
		<td><p><?=$x5?></p></td>
		<td><p><?=$y5?></p></td>
	</tr>
	<tr>
		<td>6</td>
		<td><p><?=$a6?></p></td>
		<td><p><?=$b6?></p></td>
		<td><p><?=$x6?></p></td>
		<td><p><?=$y6?></p></td>
	</tr>
	<tr>
		<td>7</td>
		<td><p><?=$a7?></p></td>
		<td><p><?=$b7?></p></td>
		<td><p><?=$x7?></p></td>
		<td><p><?=$y7?></p></td>
	</tr>
	<tr>
		<td>8</td>
		<td><p><?=$a8?></p></td>
		<td><p><?=$b8?></p></td>
		<td><p><?=$x8?></p></td>
		<td><p><?=$y8?></p></td>
	</tr>
	<tr>
		<td>9</td>
		<td><p><?=$a9?></p></td>
		<td><p><?=$b9?></p></td>
		<td><p><?=$x9?></p></td>
		<td><p><?=$y9?></p></td>
	</tr>
	<tr>
		<td>10</td>
		<td><p><?=$a10?></p></td>
		<td><p><?=$b10?></p></td>
		<td><p><?=$x10?></p></td>
		<td><p><?=$y10?></p></td>
	</tr>
</table>
</body>
</html>