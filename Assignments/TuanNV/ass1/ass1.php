<?php
	$a=1;
	$b=0;
	//a == 0
	if($a==0){
		if($b==0){
			echo "vo so nghiem";
		}else{
			echo "vo nghiem";
		}
	}
	//a # 0
	else{
		$x = -$b/$a;
		echo "nghiem la $x";
	}
?>



<?php
	$a=1;
	$b=-2;
	$c=1;
	$d=$b*$b-4*$a*$c;
	if($d > 0){
		$x1=-$b-sqrt($d)/2*$a;
		$x2=-$b+sqrt($d)/2*$a;
		echo "2 nghiem $x1 , $x2";
	}else
	if($d == 0){
		$x=-$b/(2*$a);
		echo "1 nghiem kep $x";
	}else
	if($d < 0){
		echo "vo nghiem";
	}
?>