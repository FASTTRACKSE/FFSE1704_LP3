	<?php 
	session_start();
	
?>
<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Age</th>
	</tr>
	<?php $sum=0; ?>
	<?php foreach($_SESSION['danhsach'] as $key=>$value){
		$sum+=$value['age'];
	?>
		<tr>
			<td><?=$key ?></td>
			<td><?=$value['name']?></td>
			<td><?=$value['age']?></td>
		</tr>
	<?php }?>
</table>
<h2>Tong so tuoi la: <?=$sum?></h2>