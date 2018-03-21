<?php
	// tìm ước số của a, đếm có bao nhiêu
	$a = 21;
	$dem = 0;

	echo "Danh sách các ước số của a ($a) là: <br>";
	for ($i=1; $i <= $a; $i++) { 
		if ($a % $i == 0) {
			echo $i . "<br>";
			$dem += 1;
		}
	}
	echo "<br> Số nguyên a ($a) có $dem ước số";

	if ($dem == 2) {
		echo "<br> Số nguyên a ($a) là số nguyên tố";
	}else{
		echo "<br> Số nguyên a ($a) không phải là số nguyên tố";
	}
?>