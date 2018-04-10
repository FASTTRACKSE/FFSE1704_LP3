<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

</head>
<body>
<?php
$a1 = 2.5;
$b1 = 2.00	;
//th a=0
if($a1==0){
	if($b1==0){
		$d1 = "pt vo so nghiệm";
	}
	else{
		$d1 = "pt vô nghiệm";
	}

}else{
		$x1= -$b1/$a1;
		$d1 = "pt co nghiệm ";
	}

?>
<?php
$a2 = 0;
$b2 = 1	;
//th a=0
if($a2==0){
	if($b2==0){
		$d2 = "pt vo so nghiệm";
	}
	else{
		$x2 = " vô nghiệm";
		$d2 = "pt vô nghiệm";
	}

}else{
		$x2= -$b2/$a2;
		$d2 = "pt co nghiệm ";
	}

?>
<?php
$a3 = -1.7;
$b3 = -9.6	;
//th a=0
if($a3==0){
	if($b3==0){
		$d3 = "pt vo so nghiệm";
	}
	else{
		$d3 = "pt vô nghiệm";
	}

}else{
		$x3= -$b3/$a3;
		$d3 = "pt co nghiệm ";
	}

?>
<?php
$a4 = 0.2;
$b4 = 0.5	;
//th a=0
if($a4==0){
	if($b4==0){
		$d4 = "pt vo so nghiệm";
	}
	else{
		$d4 = "pt vô nghiệm";
	}

}else{
		$x4= -$b4/$a4;
		$d4 = "pt co nghiệm ";
	}

?>
<?php
$a5 = -6.2;
$b5 = 0.3	;
//th a=0
if($a5==0){
	if($b5==0){
		$d5 = "pt vo so nghiệm";
	}
	else{
		$d5 = "pt vô nghiệm";
	}

}else{
		$x5= -$b5/$a5;
		$d5 = "pt co nghiệm ";
	}

?>
<?php
$a6 = 0.2;
$b6 = 3.0	;
//th a=0
if($a6==0){
	if($b6==0){
		$d6 = "pt vo so nghiệm";
	}
	else{
		$d6 = "pt vô nghiệm";
	}

}else{
		$x6= -$b6/$a6;
		$d6 = "pt co nghiệm ";
	}

?>
<?php
$a7 = 9.5;
$b7 = 6.0;
//th a=0
if($a7==0){
	if($b7==0){
		$d7 = "pt vo so nghiệm";
	}
	else{
		$d7 = "pt vô nghiệm";
	}

}else{
		$x7= -$b7/$a7;
		$d7 = "pt co nghiệm ";
	}

?>
<?php
$a8 = -3.9;
$b8 = -0.3;
//th a=0
if($a8==0){
	if($b8==0){
		$d8 = "pt vo so nghiệm";
	}
	else{
		$d8 = "pt vô nghiệm";
	}

}else{
		$x8= -$b8/$a8;
		$d8 = "pt co nghiệm ";
	}

?>	
<?php
$a9 = 02.5;
$b9 = 2;
//th a=0
if($a9==0){
	if($b9==0){
		$d9 = "pt vo so nghiệm";
	}
	else{
		$d9 = "pt vô nghiệm";
	}

}else{
		$x9= -$b9/$a9;
		$d9 = "pt co nghiệm ";
	}

?>	
<h1>Giải phương trình bâc nhất 1 ẩn số	</h1>
	<table border="1px" width="900px" border-collapse= "collapse">
		<tr>
			<th>TT</th>
			<th>a</th>
			<th>b</th>
			<th>x</th>
			<th>Ghi chú</th>

		</tr>
		<tr>
			<td>1</td>
			<td><?=$a1?></td>
			<td><?=$b1?></td>
			<td><?=$x1?></td>
			<td><?=$d1?></td>
		</tr>
		<tr style="color: red">
			<td>2</td>
			<td><?=$a2?></td>
			<td><?=$b2?></td>
			<td><?=$x2?></td>
			<td><?=$d2?></td>
		</tr>
		<tr>
			<td>3</td>
			<td><?=$a3?></td>
			<td><?=$b3?></td>
			<td><?=$x3?></td>
			<td><?=$d3?></td>
		</tr>
		<tr>
			<td>4</td>
			<td><?=$a4?></td>
			<td><?=$b4?></td>
			<td><?=$x4?></td>
			<td><?=$d4?></td>
		</tr>
		<tr>
			<td>5</td>
			<td><?=$a5?></td>
			<td><?=$b5?></td>
			<td><?=$x5?></td>
			<td><?=$d5?></td>
		</tr>
		<tr>
			<td>6</td>
			<td><?=$a6?></td>
			<td><?=$b6?></td>
			<td><?=$x6?></td>
			<td><?=$d6?></td>
		</tr>
		<tr>
			<td>7</td>
			<td><?=$a7?></td>
			<td><?=$b7?></td>
			<td><?=$x7?></td>
			<td><?=$d7?></td>
		</tr>
		<tr>
			<td>8</td>
			<td><?=$a8?></td>
			<td><?=$b8?></td>
			<td><?=$x8?></td>
			<td><?=$d8?></td>
		</tr>
		<tr>
			<td>9</td>
			<td><?=$a9?></td>
			<td><?=$b9?></td>
			<td><?=$x9?></td>
			<td><?=$d9?></td>
		</tr>
	</table>
</body>
</html>