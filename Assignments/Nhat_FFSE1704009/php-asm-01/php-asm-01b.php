<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP1b</title>
</head>
<body>
<?php
	$tt1 = 1;
	$a1 = 0;
	$b1 = 0;
	$c1 = 3;
	$delta1 = ($b1*$b1)-4*$a1*$c1;
	if($a1==0){
		if($b1!=0){
			$x11= -$c1/$b1;
			$x21= -$c1/$b1;
			$y11= "phương trình có nghiệm";
		}else{
			$tt1 = "<h3 style='color:red'>$tt1</h3>";
			$a1 = "<h3 style='color:red'>$a1</h3>";
			$b1 = "<h3 style='color:red'>$b1</h3>";
			$c1 = "<h3 style='color:red'>$c1</h3>";
			$x11= "<h3 style='color:red'>vô nghiệm</h3>";
			$x21= "<h3 style='color:red'>vô nghiệm</h3>";
			$y1= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
		}
	}else{
		if($delta1==0){
			$x1 = -$b1/2*$a1;
			$y1= "phương trình có nghiệm kép  ";
		}else{
			if($delta1>0){
				$x11 = (-$b1+$delta1)/2*$a1;
				$x21 = (-$b1-$delta1)/2*$a1;
				$y1= "phương trình có 2 nghiệm ";
			}else{
				$tt1 = "<h3 style='color:red'>$tt1</h3>";
				$a1 = "<h3 style='color:red'>$a1</h3>";
				$b1 = "<h3 style='color:red'>$b1</h3>";
				$c1 = "<h3 style='color:red'>$c1</h3>";
				$x11= "<h3 style='color:red'>vô nghiệm</h3>";
				$x21= "<h3 style='color:red'>vô nghiệm</h3>";
				$y1= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
			}
		}
		
	}

?>
<?php
	$tt2 = 2;
	$a2 = 2;
	$b2 = 6;
	$c2 = 3;
	$delta2 = ($b2*$b2)-4*$a2*$c2;
	if($a2==0){
		if($b2!=0){
			$x12= -$c2/$b2;
			$x22= -$c2/$b2;
			$y12= "phương trình có nghiệm";
		}else{
			$tt2 = "<h3 style='color:red'>$tt2</h3>";
			$a2 = "<h3 style='color:red'>$a2</h3>";
			$b2 = "<h3 style='color:red'>$b2</h3>";
			$c2 = "<h3 style='color:red'>$c2</h3>";
			$x12= "<h3 style='color:red'>vô nghiệm</h3>";
			$x22= "<h3 style='color:red'>vô nghiệm</h3>";
			$y2= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
		}
	}else{
		if($delta2==0){
			$x2 = -$b2/2*$a2;
			$y2= "phương trình có nghiệm kép  ";
		}else{
			if($delta2>0){
				$x12 = (-$b2+$delta2)/2*$a2;
				$x22 = (-$b2-$delta2)/2*$a2;
				$y2= "phương trình có 2 nghiệm ";
			}else{
				$tt2 = "<h3 style='color:red'>$tt2</h3>";
				$a2 = "<h3 style='color:red'>$a2</h3>";
				$b2 = "<h3 style='color:red'>$b2</h3>";
				$c2 = "<h3 style='color:red'>$c2</h3>";
				$x12= "<h3 style='color:red'>vô nghiệm</h3>";
				$x22= "<h3 style='color:red'>vô nghiệm</h3>";
				$y2= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
			}
		}
		
	}

?>
<?php
	$tt3 = 3;
	$a3 = 2;
	$b3 = 6;
	$c3 = 3;
	$delta3 = ($b3*$b3)-4*$a3*$c3;
	if($a3==0){
		if($b3!=0){
			$x13= -$c3/$b3;
			$x23= -$c3/$b3;
			$y13= "phương trình có nghiệm";
		}else{
			$tt3 = "<h3 style='color:red'>$tt3</h3>";
			$a3 = "<h3 style='color:red'>$a3</h3>";
			$b3 = "<h3 style='color:red'>$b3</h3>";
			$c3 = "<h3 style='color:red'>$c3</h3>";
			$x13= "<h3 style='color:red'>vô nghiệm</h3>";
			$x23= "<h3 style='color:red'>vô nghiệm</h3>";
			$y3= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
		}
	}else{
		if($delta3==0){
			$x3 = -$b3/2*$a3;
			$y3= "phương trình có nghiệm kép  ";
		}else{
			if($delta3>0){
				$x13 = (-$b3+$delta3)/2*$a3;
				$x23 = (-$b3-$delta3)/2*$a3;
				$y3= "phương trình có 2 nghiệm ";
			}else{
				$tt3 = "<h3 style='color:red'>$tt3</h3>";
				$a3 = "<h3 style='color:red'>$a3</h3>";
				$b3 = "<h3 style='color:red'>$b3</h3>";
				$c3 = "<h3 style='color:red'>$c3</h3>";
				$x13= "<h3 style='color:red'>vô nghiệm</h3>";
				$x23= "<h3 style='color:red'>vô nghiệm</h3>";
				$y3= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
			}
		}
		
	}

?>
<?php
	$tt4 = 4;
	$a4 = 2;
	$b4 = 6;
	$c4 = 3;
	$delta4 = ($b4*$b4)-4*$a4*$c4;
	if($a4==0){
		if($b4!=0){
			$x14= -$c4/$b4;
			$x24= -$c4/$b4;
			$y14= "phương trình có nghiệm";
		}else{
			$tt4 = "<h3 style='color:red'>$tt4</h3>";
			$a4 = "<h3 style='color:red'>$a4</h3>";
			$b4 = "<h3 style='color:red'>$b4</h3>";
			$c4 = "<h3 style='color:red'>$c4</h3>";
			$x14= "<h3 style='color:red'>vô nghiệm</h3>";
			$x24= "<h3 style='color:red'>vô nghiệm</h3>";
			$y4= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
		}
	}else{
		if($delta4==0){
			$x4 = -$b4/2*$a4;
			$y4= "phương trình có nghiệm kép  ";
		}else{
			if($delta4>0){
				$x14 = (-$b4+$delta4)/2*$a4;
				$x24 = (-$b4-$delta4)/2*$a4;
				$y4= "phương trình có 2 nghiệm ";
			}else{
				$tt4 = "<h3 style='color:red'>$tt4</h3>";
				$a4 = "<h3 style='color:red'>$a4</h3>";
				$b4 = "<h3 style='color:red'>$b4</h3>";
				$c4 = "<h3 style='color:red'>$c4</h3>";
				$x14= "<h3 style='color:red'>vô nghiệm</h3>";
				$x24= "<h3 style='color:red'>vô nghiệm</h3>";
				$y4= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
			}
		}
		
	}

?>
<?php
	$tt5 = 5;
	$a5 = 2;
	$b5 = 6;
	$c5 = 3;
	$delta5 = ($b5*$b5)-4*$a5*$c5;
	if($a5==0){
		if($b5!=0){
			$x15= -$c5/$b5;
			$x25= -$c5/$b5;
			$y15= "phương trình có nghiệm";
		}else{
			$tt5 = "<h3 style='color:red'>$tt5</h3>";
			$a5 = "<h3 style='color:red'>$a5</h3>";
			$b5 = "<h3 style='color:red'>$b5</h3>";
			$c5 = "<h3 style='color:red'>$c5</h3>";
			$x15= "<h3 style='color:red'>vô nghiệm</h3>";
			$x25= "<h3 style='color:red'>vô nghiệm</h3>";
			$y5= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
		}
	}else{
		if($delta5==0){
			$x5 = -$b5/2*$a5;
			$y5= "phương trình có nghiệm kép  ";
		}else{
			if($delta5>0){
				$x15 = (-$b5+$delta5)/2*$a5;
				$x25 = (-$b5-$delta5)/2*$a5;
				$y5= "phương trình có 2 nghiệm ";
			}else{
				$tt5 = "<h3 style='color:red'>$tt5</h3>";
				$a5 = "<h3 style='color:red'>$a5</h3>";
				$b5 = "<h3 style='color:red'>$b5</h3>";
				$c5 = "<h3 style='color:red'>$c5</h3>";
				$x15= "<h3 style='color:red'>vô nghiệm</h3>";
				$x25= "<h3 style='color:red'>vô nghiệm</h3>";
				$y5= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
			}
		}
		
	}

?>
<?php
	$tt6 = 6;
	$a6 = 2;
	$b6 = 6;
	$c6 = 3;
	$delta6 = ($b6*$b6)-4*$a6*$c6;
	if($a6==0){
		if($b6!=0){
			$x16= -$c6/$b6;
			$x26= -$c6/$b6;
			$y16= "phương trình có nghiệm";
		}else{
			$tt6 = "<h3 style='color:red'>$tt6</h3>";
			$a6 = "<h3 style='color:red'>$a6</h3>";
			$b6 = "<h3 style='color:red'>$b6</h3>";
			$c6 = "<h3 style='color:red'>$c6</h3>";
			$x16= "<h3 style='color:red'>vô nghiệm</h3>";
			$x26= "<h3 style='color:red'>vô nghiệm</h3>";
			$y6= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
		}
	}else{
		if($delta6==0){
			$x6 = -$b6/2*$a6;
			$y6= "phương trình có nghiệm kép  ";
		}else{
			if($delta6>0){
				$x16 = (-$b6+$delta6)/2*$a6;
				$x26 = (-$b6-$delta6)/2*$a6;
				$y6= "phương trình có 2 nghiệm ";
			}else{
				$tt6 = "<h3 style='color:red'>$tt6</h3>";
				$a6 = "<h3 style='color:red'>$a6</h3>";
				$b6 = "<h3 style='color:red'>$b6</h3>";
				$c6 = "<h3 style='color:red'>$c6</h3>";
				$x16= "<h3 style='color:red'>vô nghiệm</h3>";
				$x26= "<h3 style='color:red'>vô nghiệm</h3>";
				$y6= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
			}
		}
		
	}

?>
<?php
	$tt7 = 7;
	$a7 = 2;
	$b7 = 6;
	$c7 = 3;
	$delta7 = ($b7*$b7)-4*$a7*$c7;
	if($a7==0){
		if($b7!=0){
			$x17= -$c7/$b7;
			$x27= -$c7/$b7;
			$y17= "phương trình có nghiệm";
		}else{
			$tt7 = "<h3 style='color:red'>$tt7</h3>";
			$a7 = "<h3 style='color:red'>$a7</h3>";
			$b7 = "<h3 style='color:red'>$b7</h3>";
			$c7 = "<h3 style='color:red'>$c7</h3>";
			$x17= "<h3 style='color:red'>vô nghiệm</h3>";
			$x27= "<h3 style='color:red'>vô nghiệm</h3>";
			$y7= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
		}
	}else{
		if($delta7==0){
			$x7 = -$b7/2*$a7;
			$y7= "phương trình có nghiệm kép  ";
		}else{
			if($delta7>0){
				$x17 = (-$b7+$delta7)/2*$a7;
				$x27 = (-$b7-$delta7)/2*$a7;
				$y7= "phương trình có 2 nghiệm ";
			}else{
				$tt7 = "<h3 style='color:red'>$tt7</h3>";
				$a7 = "<h3 style='color:red'>$a7</h3>";
				$b7 = "<h3 style='color:red'>$b7</h3>";
				$c7 = "<h3 style='color:red'>$c7</h3>";
				$x17= "<h3 style='color:red'>vô nghiệm</h3>";
				$x27= "<h3 style='color:red'>vô nghiệm</h3>";
				$y7= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
			}
		}
		
	}

?>
<?php
	$tt8 = 8;
	$a8 = 2;
	$b8 = 6;
	$c8= 3;
	$delta8 = ($b8*$b8)-4*$a8*$c8;
	if($a8==0){
		if($b8!=0){
			$x18= -$c8/$b8;
			$x28= -$c8/$b8;
			$y18= "phương trình có nghiệm";
		}else{
			$tt8 = "<h3 style='color:red'>$tt8</h3>";
			$a8 = "<h3 style='color:red'>$a8</h3>";
			$b8 = "<h3 style='color:red'>$b8</h3>";
			$c8 = "<h3 style='color:red'>$c8</h3>";
			$x18= "<h3 style='color:red'>vô nghiệm</h3>";
			$x28= "<h3 style='color:red'>vô nghiệm</h3>";
			$y8= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
		}
	}else{
		if($delta8==0){
			$x8 = -$b8/2*$a8;
			$y8= "phương trình có nghiệm kép  ";
		}else{
			if($delta8>0){
				$x18 = (-$b8+$delta8)/2*$a8;
				$x28 = (-$b8-$delta8)/2*$a8;
				$y8= "phương trình có 2 nghiệm ";
			}else{
				$tt8 = "<h3 style='color:red'>$tt8</h3>";
				$a8 = "<h3 style='color:red'>$a8</h3>";
				$b8 = "<h3 style='color:red'>$b8</h3>";
				$c8 = "<h3 style='color:red'>$c8</h3>";
				$x18= "<h3 style='color:red'>vô nghiệm</h3>";
				$x28= "<h3 style='color:red'>vô nghiệm</h3>";
				$y8= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
			}
		}
		
	}

?>
<?php
	$tt9 = 9;
	$a9 = 2;
	$b9 = 6;
	$c9 = 3;
	$delta9 = ($b9*$b9)-4*$a9*$c9;
	if($a9==0){
		if($b9!=0){
			$x19= -$c9/$b9;
			$x29= -$c9/$b9;
			$y19= "phương trình có nghiệm";
		}else{
			$tt9 = "<h3 style='color:red'>$tt9</h3>";
			$a9 = "<h3 style='color:red'>$a9</h3>";
			$b9 = "<h3 style='color:red'>$b9</h3>";
			$c9 = "<h3 style='color:red'>$c9</h3>";
			$x19= "<h3 style='color:red'>vô nghiệm</h3>";
			$x29= "<h3 style='color:red'>vô nghiệm</h3>";
			$y9= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
		}
	}else{
		if($delta9==0){
			$x9 = -$b9/2*$a9;
			$y9= "phương trình có nghiệm kép  ";
		}else{
			if($delta9>0){
				$x19 = (-$b9+$delta9)/2*$a9;
				$x29 = (-$b9-$delta9)/2*$a9;
				$y9= "phương trình có 2 nghiệm ";
			}else{
				$tt9 = "<h3 style='color:red'>$tt9</h3>";
				$a9 = "<h3 style='color:red'>$a9</h3>";
				$b9 = "<h3 style='color:red'>$b9</h3>";
				$c9 = "<h3 style='color:red'>$c9</h3>";
				$x19= "<h3 style='color:red'>vô nghiệm</h3>";
				$x29= "<h3 style='color:red'>vô nghiệm</h3>";
				$y9= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
			}
		}
		
	}

?>
<?php
	$tt10 = 10;
	$a10 = 2;
	$b10 = 6;
	$c10 = 3;
	$delta10 = ($b10*$b10)-4*$a10*$c10;
	if($a10==0){
		if($b10!=0){
			$x110= -$c10/$b10;
			$x210= -$c10/$b10;
			$y10= "phương trình có nghiệm";
		}else{
			$tt10 = "<h3 style='color:red'>$tt10</h3>";
			$a10 = "<h3 style='color:red'>$a10</h3>";
			$b10 = "<h3 style='color:red'>$b10</h3>";
			$c10 = "<h3 style='color:red'>$c10</h3>";
			$x110= "<h3 style='color:red'>vô nghiệm</h3>";
			$x210= "<h3 style='color:red'>vô nghiệm</h3>";
			$y10= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
		}
	}else{
		if($delta10==0){
			$x10 = -$b10/2*$a10;
			$y10= "phương trình có nghiệm kép  ";
		}else{
			if($delta10>0){
				$x110 = (-$b10+$delta10)/2*$a10;
				$x210 = (-$b10-$delta10)/2*$a10;
				$y10= "phương trình có 2 nghiệm ";
			}else{
				$tt10 = "<h3 style='color:red'>$tt10</h3>";
				$a10 = "<h3 style='color:red'>$a10</h3>";
				$b10 = "<h3 style='color:red'>$b10</h3>";
				$c10 = "<h3 style='color:red'>$c10</h3>";
				$x110= "<h3 style='color:red'>vô nghiệm</h3>";
				$x210= "<h3 style='color:red'>vô nghiệm</h3>";
				$y10= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
			}
		}
		
	}

?>

<h1 style="text-align: center; color: red;">Giải Phương Trình Bậc Hai 2 Ẩn Số</h1>
<table border="1px" cellspacing="0px" style="width: 50%; margin: auto;">	
	<tr>
		<th>TT</th>
		<th>a</th>
		<th>b</th>
		<th>c</th>
		<th>x1</th>
		<th>x2</th>
		<th>Ghi Chú</th>
	</tr>
	<tr>
		<td><p><?=$tt1?></p></td>
		<td><p><?=$a1?></p></td>
		<td><p><?=$b1?></p></td>
		<td><p><?=$c1?></p></td>
		<td><p><?=$x11?></p></td>
		<td><p><?=$x21?></p></td>
		<td><p><?=$y1?></p></td>
	</tr>
	<tr>
		<td><p><?=$tt2?></p></td>
		<td><p><?=$a2?></p></td>
		<td><p><?=$b2?></p></td>
		<td><p><?=$c2?></p></td>
		<td><p><?=$x12?></p></td>
		<td><p><?=$x22?></p></td>
		<td><p><?=$y2?></p></td>
	</tr>
	<tr>
		<td><p><?=$tt3?></p></td>
		<td><p><?=$a3?></p></td>
		<td><p><?=$b3?></p></td>
		<td><p><?=$c3?></p></td>
		<td><p><?=$x13?></p></td>
		<td><p><?=$x23?></p></td>
		<td><p><?=$y3?></p></td>
	</tr>
	<tr>
		<td><p><?=$tt4?></p></td>
		<td><p><?=$a4?></p></td>
		<td><p><?=$b4?></p></td>
		<td><p><?=$c4?></p></td>
		<td><p><?=$x14?></p></td>
		<td><p><?=$x24?></p></td>
		<td><p><?=$y4?></p></td>
	</tr>
	<tr>
		<td><p><?=$tt5?></p></td>
		<td><p><?=$a5?></p></td>
		<td><p><?=$b5?></p></td>
		<td><p><?=$c5?></p></td>
		<td><p><?=$x15?></p></td>
		<td><p><?=$x25?></p></td>
		<td><p><?=$y5?></p></td>
	</tr>
	<tr>
		<td><p><?=$tt6?></p></td>
		<td><p><?=$a6?></p></td>
		<td><p><?=$b6?></p></td>
		<td><p><?=$c6?></p></td>
		<td><p><?=$x16?></p></td>
		<td><p><?=$x26?></p></td>
		<td><p><?=$y6?></p></td>
	</tr>
	<tr>
		<td><p><?=$tt7?></p></td>
		<td><p><?=$a7?></p></td>
		<td><p><?=$b7?></p></td>
		<td><p><?=$c7?></p></td>
		<td><p><?=$x17?></p></td>
		<td><p><?=$x27?></p></td>
		<td><p><?=$y7?></p></td>
	</tr>
	<tr>
		<td><p><?=$tt8?></p></td>
		<td><p><?=$a8?></p></td>
		<td><p><?=$b8?></p></td>
		<td><p><?=$c8?></p></td>
		<td><p><?=$x18?></p></td>
		<td><p><?=$x28?></p></td>
		<td><p><?=$y8?></p></td>
	</tr>
	<tr>
		<td><p><?=$tt9?></p></td>
		<td><p><?=$a9?></p></td>
		<td><p><?=$b9?></p></td>
		<td><p><?=$c9?></p></td>
		<td><p><?=$x19?></p></td>
		<td><p><?=$x29?></p></td>
		<td><p><?=$y9?></p></td>
	</tr>
	<tr>
		<td><p><?=$tt10?></p></td>
		<td><p><?=$a10?></p></td>
		<td><p><?=$b10?></p></td>
		<td><p><?=$c10?></p></td>
		<td><p><?=$x110?></p></td>
		<td><p><?=$x210?></p></td>
		<td><p><?=$y10?></p></td>
	</tr>
</table>
</body>
</html>