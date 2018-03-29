<?php
		$FFSE1704=array(
		  array(
		  	'id'=>1,
		  	'name'=>"nguyen van a",
		  	'lp0'=>8.2,
		  	'lp1'=>7.6,
		  	'lp2'=>8.8,
		  	),
		  array(
		  	'id'=>2,
		  	'name'=>"nguyen van b",
		  	'lp0'=>9.9,
		  	'lp1'=>7.5,
		  	'lp2'=>8.9,
		  	),
		  array(
		  	'id'=>3,
		  	'name'=>"nguyen van c",
		  	'lp0'=>9.9,
		  	'lp1'=>9.8,
		  	'lp2'=>8.9,
		  	)
		);
	?>
<table border="1px" width="50%">
	<tr>
		<th>id</th>
		<th>name</th>
		<th>lp1</th>
		<th>lp2</th>
		<th>lp3</th>
		<th>điểm trung bình</th>
	</tr>
	<?php foreach ($FFSE1704 as $key => $value) {?>
	<tr>		
		<td><?=$value['id']?></td>
		<td><?=$value['name']?></td>
		<td><?=$value['lp0']?></td>
		<td><?=$value['lp1']?></td>
		<td><?=$value['lp2']?></td>
		<td><?=$diem=($value['lp0']+$value['lp1']+$value['lp2'])/3?></td>
	</tr>
	<?php }?>
</table>