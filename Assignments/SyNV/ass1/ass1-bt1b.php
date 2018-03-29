<?php
	$tt1 = 1;
	$a1 = 1;
	$b1 = 2;
	$c1 = 1;

	if ($a1 != 0) {
		$d1 = $b1*$b1 - 4*$a1*$c1;
		if ($d1 > 0) {
			$x11 = (-$b1+sqrt($d1))/(2*$a1);
			$x12 = (-$b1-sqrt($d1))/(2*$a1);
			$ghi_chu1 = "Phương trình có nghiệm ";
		}else{
			if ($d1 == 0){
				$x11 = -$b1/(2*$a1);
				$x12 = -$b1/(2*$a1);
				$ghi_chu1 = "Phương trình có nghiệm kép";
			}else{
				$tt1 = "<p style='color:red'>$tt1</p>";
				$a1	= "<p style='color:red'>$a1</p>";
				$b1	= "<p style='color:red'>$b1</p>";
				$c1	= "<p style='color:red'>$c1</p>";
				$x11 = "<p style='color:red'>-</p>";
				$x12 = "<p style='color:red'>-</p>";
				$ghi_chu1 = "<p style='color:red'>Phương trình vô nghiệm</p";
			}	
		}
	}else{
		$tt1 = "<p style='color:red'>$tt1</p>";
		$a1	= "<p style='color:red'>$a1</p>";
		$b1	= "<p style='color:red'>$b1</p>";
		$c1	= "<p style='color:red'>$c1</p>";
		$x11 = "<p style='color:red'>-</p>";
		$x12 = "<p style='color:red'>-</p>";
		$ghi_chu1 = "<p style='color:red'> Hệ số không hợp lệ, a=0 </p";
	}
?>

<?php
	$tt2 = 2;
	$a2 = 3;
	$b2 = 5;
	$c2 = 2;

	if ($a2 != 0) {
		$d2 = $b2*$b2 - 4*$a2*$c2;
		if ($d2 > 0) {
			$x21 = (-$b2+sqrt($d2))/(2*$a2);
			$x22 = (-$b2-sqrt($d2))/(2*$a2);
			$ghi_chu2 = "Phương trình có nghiệm ";
		}else{
			if ($d2 == 0){
				$x21 = -$b2/(2*$a2);
				$x22 = -$b2/(2*$a2);
				$ghi_chu2 = "Phương trình có nghiệm kép";
			}else{
				$tt2 = "<p style='color:red'>$tt2</p>";
				$a2	= "<p style='color:red'>$a2</p>";
				$b2	= "<p style='color:red'>$b2</p>";
				$c2	= "<p style='color:red'>$c2</p>";
				$x21 = "<p style='color:red'>-</p>";
				$x22 = "<p style='color:red'>-</p>";
				$ghi_chu2 = "<p style='color:red'>Phương trình vô nghiệm</p";
			}	
		}
	}else{
		$tt2 = "<p style='color:red'>$tt2</p>";
		$a2	= "<p style='color:red'>$a2</p>";
		$b2	= "<p style='color:red'>$b2</p>";
		$c2	= "<p style='color:red'>$c2</p>";
		$x21 = "<p style='color:red'>-</p>";
		$x22 = "<p style='color:red'>-</p>";
		$ghi_chu2 = "<p style='color:red'> Hệ số không hợp lệ, a=0 </p";
	}
?>

<?php
	$tt3 = 3;
	$a3 = 1;
	$b3 = 4;
	$c3 = 3;

	if ($a3 != 0) {
		$d3 = $b3*$b3 - 4*$a3*$c3;
		if ($d3 > 0) {
			$x31 = (-$b1+sqrt($d3))/(2*$a3);
			$x32 = (-$b1-sqrt($d3))/(2*$a3);
			$ghi_chu3 = "Phương trình có nghiệm ";
		}else{
			if ($d3 == 0){
				$x31 = -$b3/(2*$a3);
				$x32 = -$b3/(2*$a3);
				$ghi_chu3 = "Phương trình có nghiệm kép";
			}else{
				$tt3 = "<p style='color:red'>$tt3</p>";
				$a3	= "<p style='color:red'>$a3</p>";
				$b3	= "<p style='color:red'>$b3</p>";
				$c3	= "<p style='color:red'>$c3</p>";
				$x31 = "<p style='color:red'>-</p>";
				$x32 = "<p style='color:red'>-</p>";
				$ghi_chu3 = "<p style='color:red'>Phương trình vô nghiệm</p";
			}	
		}
	}else{
		$tt3 = "<p style='color:red'>$tt3</p>";
		$a3	= "<p style='color:red'>$a3</p>";
		$b3	= "<p style='color:red'>$b3</p>";
		$c3	= "<p style='color:red'>$c3</p>";
		$x31 = "<p style='color:red'>-</p>";
		$x32 = "<p style='color:red'>-</p>";
		$ghi_chu3 = "<p style='color:red'> Hệ số không hợp lệ, a=0 </p";
	}
?>

<?php
	$tt4 = 4;
	$a4 = 0;
	$b4 = 2;
	$c4 = 2;

	if ($a4 != 0) {
		$d4 = $b4*$b4 - 4*$a4*$c4;
		if ($d4 > 0) {
			$x41 = (-$b4+sqrt($d4))/(2*$a4);
			$x42 = (-$b4-sqrt($d4))/(2*$a4);
			$ghi_chu2 = "Phương trình có nghiệm ";
		}else{
			if ($d4 == 0){
				$x41 = -$b2/(2*$a4);
				$x42 = -$b2/(2*$a4);
				$ghi_chu4 = "Phương trình có nghiệm kép";
			}else{
				$tt4 = "<p style='color:red'>$tt4</p>";
				$a4	= "<p style='color:red'>$a4</p>";
				$b4	= "<p style='color:red'>$b4</p>";
				$c4	= "<p style='color:red'>$c4</p>";
				$x41 = "<p style='color:red'>-</p>";
				$x42 = "<p style='color:red'>-</p>";
				$ghi_chu4 = "<p style='color:red'>Phương trình vô nghiệm</p";
			}	
		}
	}else{
		$tt4 = "<p style='color:red'>$tt4</p>";
		$a4	= "<p style='color:red'>$a4</p>";
		$b4	= "<p style='color:red'>$b4</p>";
		$c4	= "<p style='color:red'>$c4</p>";
		$x41 = "<p style='color:red'>-</p>";
		$x42 = "<p style='color:red'>-</p>";
		$ghi_chu4 = "<p style='color:red'> Hệ số không hợp lệ, a=0 </p";
	}
?>

<?php
	$tt5 = 5;
	$a5 = 4;
	$b5 = 2;
	$c5 = 2;

	if ($a5 != 0) {
		$d5 = $b5*$b5 - 4*$a5*$c5;
		if ($d5 > 0) {
			$x51 = (-$b5+sqrt($d5))/(2*$a5);
			$x52 = (-$b5-sqrt($d5))/(2*$a5);
			$ghi_chu5 = "Phương trình có nghiệm ";
		}else{
			if ($d5 == 0){
				$x51 = -$b5/(2*$a5);
				$x52 = -$b5/(2*$a5);
				$ghi_chu5 = "Phương trình có nghiệm kép";
			}else{
				$tt5 = "<p style='color:red'>$tt5</p>";
				$a5	= "<p style='color:red'>$a5</p>";
				$b5	= "<p style='color:red'>$b5</p>";
				$c5	= "<p style='color:red'>$c5</p>";
				$x51 = "<p style='color:red'>-</p>";
				$x52 = "<p style='color:red'>-</p>";
				$ghi_chu5 = "<p style='color:red'>Phương trình vô nghiệm</p";
			}	
		}
	}else{
		$tt5 = "<p style='color:red'>$tt5</p>";
		$a5	= "<p style='color:red'>$a5</p>";
		$b5	= "<p style='color:red'>$b5</p>";
		$c5	= "<p style='color:red'>$c5</p>";
		$x51 = "<p style='color:red'>-</p>";
		$x52 = "<p style='color:red'>-</p>";
		$ghi_chu5 = "<p style='color:red'> Hệ số không hợp lệ, a=0 </p";
	}
?>

<?php
	$tt6 = 6;
	$a6 = 10;
	$b6 = 12;
	$c6 = 2;

	if ($a6 != 0) {
		$d6 = $b6*$b6 - 4*$a6*$c6;
		if ($d6 > 0) {
			$x61 = (-$b6+sqrt($d6))/(2*$a6);
			$x62 = (-$b6-sqrt($d6))/(2*$a6);
			$ghi_chu6 = "Phương trình có nghiệm ";
		}else{
			if ($d6 == 0){
				$x61 = -$b6/(2*$a6);
				$x62 = -$b6/(2*$a6);
				$ghi_chu6 = "Phương trình có nghiệm kép";
			}else{
				$tt6 = "<p style='color:red'>$tt6</p>";
				$a6	= "<p style='color:red'>$a6/p>";
				$b6	= "<p style='color:red'>$b6</p>";
				$c6	= "<p style='color:red'>$c6</p>";
				$x61 = "<p style='color:red'>-</p>";
				$x62 = "<p style='color:red'>-</p>";
				$ghi_chu6 = "<p style='color:red'>Phương trình vô nghiệm</p";
			}	
		}
	}else{
		$tt6 = "<p style='color:red'>$tt6</p>";
		$a6	= "<p style='color:red'>$a6/p>";
		$b6	= "<p style='color:red'>$b6</p>";
		$c6	= "<p style='color:red'>$c6</p>";
		$x61 = "<p style='color:red'>-</p>";
		$x62 = "<p style='color:red'>-</p>";
		$ghi_chu6 = "<p style='color:red'> Hệ số không hợp lệ, a=0 </p";
	}
?>

<?php
	$tt7 = 7;
	$a7 = 1;
	$b7 = 2;
	$c7 = 8;

	if ($a7 != 0) {
		$d7 = $b7*$b7 - 4*$a7*$c7;
		if ($d7 > 0) {
			$x71 = (-$b1+sqrt($d7))/(2*$a7);
			$x72 = (-$b1-sqrt($d7))/(2*$a7);
			$ghi_chu7 = "Phương trình có nghiệm ";
		}else{
			if ($d7 == 0){
				$x71 = -$b7/(2*$a7);
				$x72 = -$b7/(2*$a7);
				$ghi_chu7 = "Phương trình có nghiệm kép";
			}else{
				$tt7 = "<p style='color:red'>$tt7</p>";
				$a7	= "<p style='color:red'>$a7</p>";
				$b7	= "<p style='color:red'>$b7</p>";
				$c7	= "<p style='color:red'>$c7</p>";
				$x71 = "<p style='color:red'>-</p>";
				$x72 = "<p style='color:red'>-</p>";
				$ghi_chu7 = "<p style='color:red'>Phương trình vô nghiệm</p";
			}	
		}
	}else{
		$tt7 = "<p style='color:red'>$tt7</p>";
		$a7	= "<p style='color:red'>$a7</p>";
		$b7	= "<p style='color:red'>$b7</p>";
		$c7	= "<p style='color:red'>$c7</p>";
		$x71 = "<p style='color:red'>-</p>";
		$x72 = "<p style='color:red'>-</p>";
		$ghi_chu7 = "<p style='color:red'> Hệ số không hợp lệ, a=0 </p";
	}
?>

<?php
	$tt8 = 8;
	$a8 = 5;
	$b8 = 7;
	$c8 = 2;

	if ($a8 != 0) {
		$d8 = $b8*$b8 - 4*$a8*$c8;
		if ($d8 > 0) {
			$x81 = (-$b8+sqrt($d8))/(2*$a8);
			$x82 = (-$b8-sqrt($d8))/(2*$a8);
			$ghi_chu8 = "Phương trình có nghiệm ";
		}else{
			if ($d8 == 0){
				$x81 = -$b8/(2*$a8);
				$x82 = -$b8/(2*$a8);
				$ghi_chu8 = "Phương trình có nghiệm kép";
			}else{
				$tt8 = "<p style='color:red'>$tt8</p>";
				$a8	= "<p style='color:red'>$a8</p>";
				$b8	= "<p style='color:red'>$b8</p>";
				$c8	= "<p style='color:red'>$c8</p>";
				$x81 = "<p style='color:red'>-</p>";
				$x82 = "<p style='color:red'>-</p>";
				$ghi_chu8 = "<p style='color:red'>Phương trình vô nghiệm</p";
			}	
		}
	}else{
		$tt8 = "<p style='color:red'>$tt8</p>";
		$a8	= "<p style='color:red'>$a8</p>";
		$b8	= "<p style='color:red'>$b8</p>";
		$c8	= "<p style='color:red'>$c8</p>";
		$x81 = "<p style='color:red'>-</p>";
		$x82 = "<p style='color:red'>-</p>";
		$ghi_chu8 = "<p style='color:red'> Hệ số không hợp lệ, a=0 </p";
	}
?>

<?php
	$tt9 = 9;
	$a9 = 10;
	$b9 = 12;
	$c9 = 2;

	if ($a9 != 0) {
		$d9 = $b9*$b9 - 4*$a9*$c9;
		if ($d9 > 0) {
			$x91 = (-$b9+sqrt($d9))/(2*$a9);
			$x92 = (-$b9-sqrt($d9))/(2*$a9);
			$ghi_chu9 = "Phương trình có nghiệm ";
		}else{
			if ($d9 == 0){
				$x91 = -$b9/(2*$a9);
				$x92 = -$b9/(2*$a9);
				$ghi_chu9 = "Phương trình có nghiệm kép";
			}else{
				$tt9 = "<p style='color:red'>$tt9</p>";
				$a9	= "<p style='color:red'>$a9</p>";
				$b9	= "<p style='color:red'>$b9</p>";
				$c9	= "<p style='color:red'>$c9</p>";
				$x91 = "<p style='color:red'>-</p>";
				$x92 = "<p style='color:red'>-</p>";
				$ghi_chu9 = "<p style='color:red'>Phương trình vô nghiệm</p";
			}	
		}
	}else{
		$tt9 = "<p style='color:red'>$tt9</p>";
		$a9	= "<p style='color:red'>$a9</p>";
		$b9	= "<p style='color:red'>$b9</p>";
		$c9	= "<p style='color:red'>$c9</p>";
		$x91 = "<p style='color:red'>-</p>";
		$x92 = "<p style='color:red'>-</p>";
		$ghi_chu9 = "<p style='color:red'> Hệ số không hợp lệ, a=0 </p";
	}
?>

<?php
	$tt10 = 10;
	$a10 = 9;
	$b10 = 7;
	$c10 = 5;

	if ($a10 != 0) {
		$d10 = $b10*$b10 - 4*$a10*$c10;
		if ($d10 > 0) {
			$x101 = (-$b1+sqrt($d10))/(2*$a10);
			$x102 = (-$b1-sqrt($d10))/(2*$a10);
			$ghi_chu10 = "Phương trình có nghiệm ";
		}else{
			if ($d10 == 0){
				$x101 = -$b10/(2*$a10);
				$x102 = -$b10/(2*$a10);
				$ghi_chu10 = "Phương trình có nghiệm kép";
			}else{
				$tt10 = "<p style='color:red'>$tt10</p>";
				$a10	= "<p style='color:red'>$a10</p>";
				$b10	= "<p style='color:red'>$b10</p>";
				$c10	= "<p style='color:red'>$c10</p>";
				$x101 = "<p style='color:red'>-</p>";
				$x102 = "<p style='color:red'>-</p>";
				$ghi_chu10 = "<p style='color:red'>Phương trình vô nghiệm</p";
			}	
		}
	}else{
		$tt10 = "<p style='color:red'>$tt10</p>";
		$a10	= "<p style='color:red'>$a10</p>";
		$b10	= "<p style='color:red'>$b10</p>";
		$c10	= "<p style='color:red'>$c10</p>";
		$x101 = "<p style='color:red'>-</p>";
		$x102 = "<p style='color:red'>-</p>";
		$ghi_chu10 = "<p style='color:red'> Hệ số không hợp lệ, a=0 </p";
	}
?>

<h1>Giải phương trình bậc hai(có dạng ax2 + bx + c =0 𝑣ớ𝑖 a ≠ 0)</h1>
<table border="1px" cellpadding="5px" cellspacing="0px" style="width:50%;">
	<tr bgcolor = #d6d6d6>
		<th style="text-align: center;">TT</th>
		<th style="text-align: right;">a</th>
		<th style="text-align: right;">b</th>
		<th style="text-align: right;">c</th>
		<th style="text-align: right;">x1</th>
		<th style="text-align: right;">x2</th>
		<th style="text-align: center;">Ghi chú</th>
	</tr>
	<tr>
		<td style="text-align: center;"><?=$tt1?></td>
		<td style="text-align: right;"><?=$a1?></td>
		<td style="text-align: right;"><?=$b1?></td>
		<td style="text-align: right;"><?=$c1?></td>
		<td style="text-align: right;"><?=$x11?></td>
		<td style="text-align: right;"><?=$x12?></td>
		<td style="text-align: left;"><?=$ghi_chu1?></td>
	</tr>
	<tr>
		<td style="text-align: center;"><?=$tt2?></td>
		<td style="text-align: right;"><?=$a2?></td>
		<td style="text-align: right;"><?=$b2?></td>
		<td style="text-align: right;"><?=$c2?></td>
		<td style="text-align: right;"><?=$x21?></td>
		<td style="text-align: right;"><?=$x22?></td>
		<td style="text-align: left;"><?=$ghi_chu2?></td>
	</tr>
	<tr>
		<td style="text-align: center;"><?=$tt3?></td>
		<td style="text-align: right;"><?=$a3?></td>
		<td style="text-align: right;"><?=$b3?></td>
		<td style="text-align: right;"><?=$c3?></td>
		<td style="text-align: right;"><?=$x31?></td>
		<td style="text-align: right;"><?=$x32?></td>
		<td style="text-align: left;"><?=$ghi_chu3?></td>
	</tr>
	<tr>
		<td style="text-align: center;"><?=$tt4?></td>
		<td style="text-align: right;"><?=$a4?></td>
		<td style="text-align: right;"><?=$b4?></td>
		<td style="text-align: right;"><?=$c4?></td>
		<td style="text-align: right;"><?=$x41?></td>
		<td style="text-align: right;"><?=$x42?></td>
		<td style="text-align: left;"><?=$ghi_chu4?></td>
	</tr>
	<tr>
		<td style="text-align: center;"><?=$tt5?></td>
		<td style="text-align: right;"><?=$a5?></td>
		<td style="text-align: right;"><?=$b5?></td>
		<td style="text-align: right;"><?=$c5?></td>
		<td style="text-align: right;"><?=$x51?></td>
		<td style="text-align: right;"><?=$x52?></td>
		<td style="text-align: left;"><?=$ghi_chu5?></td>
	</tr>
	<tr>
		<td style="text-align: center;"><?=$tt6?></td>
		<td style="text-align: right;"><?=$a6?></td>
		<td style="text-align: right;"><?=$b6?></td>
		<td style="text-align: right;"><?=$c6?></td>
		<td style="text-align: right;"><?=$x61?></td>
		<td style="text-align: right;"><?=$x62?></td>
		<td style="text-align: left;"><?=$ghi_chu6?></td>
	</tr>
	<tr>
		<td style="text-align: center;"><?=$tt7?></td>
		<td style="text-align: right;"><?=$a7?></td>
		<td style="text-align: right;"><?=$b7?></td>
		<td style="text-align: right;"><?=$c7?></td>
		<td style="text-align: right;"><?=$x71?></td>
		<td style="text-align: right;"><?=$x72?></td>
		<td style="text-align: left;"><?=$ghi_chu7?></td>
	</tr>
	<tr>
		<td style="text-align: center;"><?=$tt8?></td>
		<td style="text-align: right;"><?=$a8?></td>
		<td style="text-align: right;"><?=$b8?></td>
		<td style="text-align: right;"><?=$c8?></td>
		<td style="text-align: right;"><?=$x81?></td>
		<td style="text-align: right;"><?=$x82?></td>
		<td style="text-align: left;"><?=$ghi_chu8?></td>
	</tr>
	<tr>
		<td style="text-align: center;"><?=$tt9?></td>
		<td style="text-align: right;"><?=$a9?></td>
		<td style="text-align: right;"><?=$b9?></td>
		<td style="text-align: right;"><?=$c9?></td>
		<td style="text-align: right;"><?=$x91?></td>
		<td style="text-align: right;"><?=$x92?></td>
		<td style="text-align: left;"><?=$ghi_chu9?></td>
	</tr>
	<tr>
		<td style="text-align: center;"><?=$tt10?></td>
		<td style="text-align: right;"><?=$a10?></td>
		<td style="text-align: right;"><?=$b10?></td>
		<td style="text-align: right;"><?=$c10?></td>
		<td style="text-align: right;"><?=$x101?></td>
		<td style="text-align: right;"><?=$x102?></td>
		<td style="text-align: left;"><?=$ghi_chu10?></td>
	</tr>
</table>