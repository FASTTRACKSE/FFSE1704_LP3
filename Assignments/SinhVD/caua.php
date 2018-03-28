<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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
<table border="1px" width="50% ">
	<tr>
		<th>id</th>
		<th>name</th>
		<th>lp0</th>
		<th>lp1</th>
		<th>lp2</th>
	</tr>
	<?php for ($i=0; $i <count($FFSE1704) ; $i++) { ?>
		<tr>
			<td><?=$FFSE1704[$i]['id'];?></td>
			<td><?=$FFSE1704[$i]['name'];?></td>
			<td><?=$FFSE1704[$i]['lp0'];?></td>
			<td><?=$FFSE1704[$i]['lp1'];?></td>
			<td><?=$FFSE1704[$i]['lp2'];?></td>
		</tr>
		<?php }?>
</table>
<br>
</body>
</html>