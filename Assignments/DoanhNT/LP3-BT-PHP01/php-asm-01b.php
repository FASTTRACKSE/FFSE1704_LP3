<!DOCTYPE html>
<html>
<head>
	<title>php-asm-01b</title>
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
  	8 => 2.8,
  	9 => 4,
  	10 =>4.2
  );
    $c = array(
    1 => 0.2,
    2 => 2.1,
    3 => 1.3,
    4 => 1.2,
    5 => 0,
    6 => 2.6,
    7 => 0.45,
    8 => 0.8,
    9 => 1.45,
    10 =>2.2
  );
  
    $style = 'style="color:red;"';
    $counta = count($a);
    $countb = count($b);

  	?>	

  	<h1> Giải phương trình bậc 2 (ax2 + bx + c = 0, a≠0) </h1>

<table>

    <tr> 
        <th>TT</th> 
        <th>a</th>
        <th>b</th>
        <th>c</th>
        <th>x1</th>
        <th>x2</th>
        <th>Ghi chú</th>
        <th>Chức Năng</th>
    </tr> 

    <?php for ($i=1; $i <= 10; $i++) { ?>     
      <?php 
        $delta = $b[$i]*$b[$i] - 4*$a[$i]*$c[$i];           //tính delta
        $candelta = sqrt($b[$i]*$b[$i] - 4*$a[$i]*$c[$i]);  //tính căn delta 
      ?>  
        <?php	$red = 'class = "red"'; ?>
 
  		<tr>
    		<td <?php if ($a[$i]==0 || $delta <0) { echo $red; } ?> ><? echo $i; ?></td>         <!-- TT -->
    		<td <?php if ($a[$i]==0 || $delta <0) { echo $red; } ?> ><? echo $a[$i]; ?></td>     <!-- a -->
    		<td <?php if ($a[$i]==0 || $delta <0) { echo $red; } ?> ><? echo $b[$i]; ?></td>     <!-- b -->
        <td <?php if ($a[$i]==0 || $delta <0) { echo $red; } ?> ><? echo $c[$i]; ?></td>     <!-- c -->
        <td <?php if ($a[$i]==0 || $delta <0) { echo $red; } ?> >                            <!-- x1 -->
          
          <?php
            if($delta > 0 && $a[$i] != 0){
              $x1 = (-$b[$i] - $candelta)/(2*$a[$i]);
              echo $x1;     
            }
            elseif($delta == 0 && $a[$i] != 0) {
              $x1 = -$b[$i]/(2*$a[$i]);
              echo $x1;
            }
            elseif ($delta < 0 || $a[$i] == 0) {
              echo "-";
            }                   
          ?>  

        </td>        
        <td <?php if ($a[$i]==0 || $delta <0) { echo $red; } ?> >                            <!-- x2 -->
          
          <?php
            if($delta > 0 && $a[$i] != 0){
              $x2 = (-$b[$i] + $candelta)/(2*$a[$i]);
              echo $x2;     
            }
            elseif($delta == 0 && $a[$i] != 0) {
              $x1 = -$b[$i]/(2*$a[$i]);
              echo $x1;
            }
            elseif ($delta < 0 || $a[$i] == 0) {
              echo "-";
            }                   
          ?>  

        </td>        
    		<td <?php if ($a[$i]==0 || $delta <0) { echo $red; } ?> >                            <!-- GHI CHÚ -->                    

    			<?php 
    			  if ($a[$i] == 0) {
    				  echo "Gía trị gán không hợp lệ a=0";
    			  } elseif ($a[$i] != 0 && $delta > 0) {
    				  echo "Phương trình có nghiệm x1 = $x1, x2 = $x2";
    			  } elseif ($delta < 0) {
              echo "Phương trình vô nghiệm";
            } elseif ($delta == 0) {
              echo "Phương trình có nghiệm kép x = $x1";
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
