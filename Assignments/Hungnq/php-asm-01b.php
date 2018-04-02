<?php
	$a=1;
	$b=4;
	$c=4;
	$d= ($b*$b) - (4*$a*$c);
	echo "phương trình bậc hai : $a*x*x + $b*x + $c = 0 ."."<br>";
	echo "deta = $d. "."<br>";
	if($d < 0){
		echo "phương trình vô nghiệm. ";
	}
	else{
		if($d == 0){
			$x= (-$b)/(2*$a);
			echo"phương trình có nghiệm kép x = $x. ";
		}
		else{
			$x1=((-$b)-sqrt($d))/(2*$a);
			$x2=((-$b)+sqrt($d))/(2*$a);
			echo "phương trình có hai nghiệm x1 = $x1. "."<br>";
			echo "x2 = $x2.";
		}
	}
?>