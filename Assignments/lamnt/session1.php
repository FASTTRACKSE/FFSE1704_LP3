<?php 
	session_start();

	if(isset($_POST['submit'])){
		$id= $_POST['id'];
		$hoa= $_POST['hoa'];
		$sl= $_POST['sl'];
		$gia= $_POST['sl'];
		if(isset($_SESSION['danhsach'][$id])){
			$_SESSION['danhsach'][$id]['sl']=$sl;
		}else{
			$_SESSION['danhsach'][$id]=array(
				'hoa'=>$hoa,
				'sl'=>$sl,
				'gia'=>$gia
			);
		}
	}
?>
<form action='' method='POST'>
	ID<input type='text' name='id'/>
	hoa<input type='text' name='hoa'/>
	sl<input type='text' name='sl'/>
	gia<input type='text' name='gia'/>
	<input type='submit' name='submit'/>
</form>