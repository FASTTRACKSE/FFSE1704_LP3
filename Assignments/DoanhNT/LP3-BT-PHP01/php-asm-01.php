<!DOCTYPE html>
<html>
<head>
	<title>php-asm-01</title>
	<style>
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}
th {
  background-color: green;
}
.red {
    color: red;
}
</style>
</head>
<body>

  	<?php 
  		
  	$a = array(
  	1 => 2,
  	2 => 2.5,
  	3 => 1.25,
  	4 => 0,
  	5 => 1.5,
  	6 => 0.25,
  	7 => 0.5,
  	8 => 1.6,
  	9 => 1.7,
  	10 => 3
  );
  	$b = array(
  	1 => 3.25,
  	2 => 3,
  	3 => 0,
  	4 => 1.2,
  	5 => 1.8,
  	6 => 2.7,
  	7 => 3.1,
  	8 => 0.6,
  	9 => 0.4,
  	10 =>2.4
  );
    $style = 'style="color:red;"';
    $counta = count($a);
    $countb = count($b);

  	?>	

  	<h1> Giải phương trình bậc nhất (ax + b = 0, a≠0) </h1>

<table>

    <tr> 
        <th>TT</th> 
        <th>a</th>
        <th>b</th>
        <th>x</th>
        <th>Ghi chú</th>
        <th>Chức Năng</th>
    </tr> 

    <?php for ($i=1; $i <= 10; $i++) { ?>       
        <?php	$red = 'class = "red"'; ?>
               
  		<tr>
    		<td <?php if ($a[$i]==0) { echo $red; } ?> ><? echo $i ?></td>
    		<td <?php if ($a[$i]==0) { echo $red; } ?> ><? echo $a[$i]; ?></td>  
    		<td <?php if ($a[$i]==0) { echo $red; } ?> ><? echo $b[$i]; ?></td>  
    		<td <?php if ($a[$i]==0) { echo $red; } ?> >
    			<?php 
    			if ($a[$i] == 0) {
    				echo "-";
    			} else {
    				$x = -$b[$i]/$a[$i] ;
    				echo $x;} 
    			?> 
    		</td>
    		<td <?php if ($a[$i]==0) { echo $red; } ?> >
    			<?php 
    			if ($a[$i] == 0) {
    				echo "Gía trị gán không hợp lệ a=0";
    			} else {
    				echo "Phương trình có nghiệm x= $x";
    			}
    			?>
    		</td>
    		<td ><a href="#"  class="delete">Xóa</a></td>
           
    	</tr>
 	    
	<?php } ?>
   
</table> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>  
  $('.delete').click(function(){
    
    var cf=  confirm("Bạn có muốn xóa dòng này hay không!");
    if(cf==true){
      $(this).parent().parent().remove();
    }
  
  })
</script>

</body>
</html>
