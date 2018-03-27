<body>

    <?php
	$t1=1;
	$a1=1;
	$b1=2;
	$c1=1;
	$delta1=($b1*$b1)-(4*$a1*$c1);
    if($a1==0){
        if($b1!=0){
            $x11= -$c1/$b1;
            $x21= -$c1/$b1;
            $y11= "phương trình có nghiệm";
        }else{
            $t1 = "<h3 style='color:red'>$t1</h3>";
            $a1 = "<h3 style='color:red'>$a1</h3>";
            $b1 = "<h3 style='color:red'>$b1</h3>";
            $c1 = "<h3 style='color:red'>$c1</h3>";
            $x11= "<h3 style='color:red'>-</h3>";
            $x21= "<h3 style='color:red'>-</h3>";
            $y11= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
        }
    }else{
        if($delta1==0){
            $x11=-$b1/(2*$a1);
            $x21=-$b1/(2*$a1);
            $y11="<p>Phương trình có nghiệm kép </p>";
        }else{
            if($delta1>0){
                $x11=-($b1-sqrt($delta1))/(2*$a1);
                $x21=-($b1+sqrt($delta1))/(2*$a1);
                $y11= "<p>Phương trình có 2 nghiệm phân biệt</p>";
            }else{
            $t1="<p style='color:red'>$t1</p>";
            $a1="<p style='color:red'>$a1</p>";
            $b1="<p style='color:red'>$b1</p>";
            $c1="<p style='color:red'>$c1</p>";
            $x11="<p style='color:red'>-</p>";
            $x21="<p style='color:red'>-</p>";
            $y11= "<p>Phương trình vô nghiệm</p>";
            }
        }
    }
?>


<?php
    $t2=2;
    $a2=3;
    $b2=8;
    $c2=10;
    $delta2=($b2*$b2)-(4*$a2*$c2);
    if($a2==0){
        if($b2!=0){
            $x12= -$c2/$b2;
            $x22= -$c2/$b2;
            $y12= "phương trình có nghiệm";
        }else{
            $t2 = "<h3 style='color:red'>$t2</h3>";
            $a2 = "<h3 style='color:red'>$a2</h3>";
            $b2 = "<h3 style='color:red'>$b2</h3>";
            $c2 = "<h3 style='color:red'>$c2</h3>";
            $x12= "<h3 style='color:red'>-</h3>";
            $x22= "<h3 style='color:red'>-</h3>";
            $y12= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
        }
    }else{
        if($delta2==0){
            $x12=-$b2/(2*$a2);
            $x22=-$b2/(2*$a2);
            $y12="<p>Phương trình có nghiệm kép </p>";
        }else{
            if($delta2>0){
                $x12=-($b2-sqrt($delta2))/(2*$a2);
                $x22=-($b2+sqrt($delta2))/(2*$a2);
                $y12= "<p>Phương trình có 2 nghiệm phân biệt</p>";
            }else{
                $t2="<p style='color:red'>$t2</p>";
                $a2="<p style='color:red'>$a2</p>";
                $b2="<p style='color:red'>$b2</p>";
                $c2="<p style='color:red'>$c2</p>";
                $x12="<p style='color:red'>-</p>";
                $x22="<p style='color:red'>-</p>";
                $y12= "<p>Phương trình vô nghiệm</p>";
            }
        
        }
    }
?>

<?php
    $t3=3;
    $a3=13;
    $b3=23;
    $c3=16;
    $delta3=($b3*$b3)-(4*$a3*$c3);
    if($a3==0){
        if($b3!=0){
            $x13= -$c3/$b3;
            $x23= -$c3/$b3;
            $y13= "phương trình có nghiệm";
        }else{
            $t3 = "<h3 style='color:red'>$t3</h3>";
            $a3 = "<h3 style='color:red'>$a3</h3>";
            $b3 = "<h3 style='color:red'>$b3</h3>";
            $c3 = "<h3 style='color:red'>$c3</h3>";
            $x13= "<h3 style='color:red'>-</h3>";
            $x23= "<h3 style='color:red'>-</h3>";
            $y13= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
        }
    }else{
        if($delta3==0){
            $x13=-$b3/(2*$a3);
            $x23=-$b3/(2*$a3);
            $y13="<p>Phương trình có nghiệm kép </p>";
        }else{
            if($delta3>0){
                $x13=-($b3-sqrt($delta3))/(2*$a3);
                $x23=-($b3+sqrt($delta3))/(2*$a3);
                $y13= "<p>Phương trình có 2 nghiệm phân biệt</p>";
            }else{
                $t3="<p style='color:red'>$t3</p>";
                $a3="<p style='color:red'>$a3</p>";
                $b3="<p style='color:red'>$b3</p>";
                $c3="<p style='color:red'>$c3</p>";
                $x13="<p style='color:red'>-</p>";
                $x23="<p style='color:red'>-</p>";
                $y13= "<p>Phương trình vô nghiệm</p>";
            }
        }
    }
?>


<?php
    $t4=4;
    $a4=2;
    $b4=7;
    $c4=10;
    $delta4=($b4*$b4)-(4*$a4*$c4);
    if($a4==0){
        if($b4!=0){
            $x14= -$c4/$b4;
            $x24= -$c4/$b4;
            $y14= "phương trình có nghiệm";
        }else{
            $t4 = "<h3 style='color:red'>$t4</h3>";
            $a4 = "<h3 style='color:red'>$a4</h3>";
            $b4= "<h3 style='color:red'>$b4</h3>";
            $c4 = "<h3 style='color:red'>$c4</h3>";
            $x14= "<h3 style='color:red'>-</h3>";
            $x24= "<h3 style='color:red'>-</h3>";
            $y14= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
        }
    }else{
        if($delta4==0){
            $x14=-$b4/(2*$a4);
            $x24=-$b4/(2*$a4);
            $y14="<p>Phương trình có nghiệm kép </p>";
        }else{
            if($delta4>0){
                $x14=-($b4-sqrt($delta4))/(2*$a4);
                $x24=-($b4+sqrt($delta4))/(2*$a4);
                $y14= "<p>Phương trình có 2 nghiệm phân biệt</p>";
            }else{
                $t4="<p style='color:red'>$t4</p>";
                $a4="<p style='color:red'>$a4</p>";
                $b4="<p style='color:red'>$b4</p>";
                $c4="<p style='color:red'>$c4</p>";
                $x14="<p style='color:red'>-</p>";
                $x24="<p style='color:red'>-</p>";
                $y14= "<p>Phương trình vô nghiệm</p>";
            }
        }
    }
?>

<?php
    $t5=5;
    $a5=1;
    $b5=5;
    $c5=9;
    $delta5=($b5*$b5)-(4*$a5*$c5);
    if($a5==0){
        if($b5!=0){
            $x15= -$c5/$b5;
            $x25= -$c5/$b5;
            $y15= "phương trình có nghiệm";
        }else{
            $t5 = "<h3 style='color:red'>$t5</h3>";
            $a5 = "<h3 style='color:red'>$a5</h3>";
            $b5= "<h3 style='color:red'>$b5</h3>";
            $c5 = "<h3 style='color:red'>$c5</h3>";
            $x15= "<h3 style='color:red'>-</h3>";
            $x25= "<h3 style='color:red'>-</h3>";
            $y15= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
        }
    }else{
        if($delta5==0){
            $x15=-$b5/(2*$a5);
            $x25=-$b5/(2*$a5);
            $y15="<p>Phương trình có nghiệm kép </p>";
        }else{
            if($delta5>0){
                $x15=-($b5-sqrt($delta5))/(2*$a5);
                $x25=-($b5+sqrt($delta5))/(2*$a5);
                $y15= "<p>Phương trình có 2 nghiệm phân biệt</p>";
            }else{
                $t5="<p style='color:red'>$t5</p>";
                $a5="<p style='color:red'>$a5</p>";
                $b5="<p style='color:red'>$b5</p>";
                $c5="<p style='color:red'>$c5</p>";
                $x15="<p style='color:red'>-</p>";
                $x25="<p style='color:red'>-</p>";
                $y15= "<p>Phương trình vô nghiệm</p>";
            }
        }
    }
?>

<?php
    $t6=6;
    $a6=3;
    $b6=9;
    $c6=3;
    $delta6=($b6*$b6)-(4*$a6*$c6);
    if($a6==0){
        if($b6!=0){
            $x16= -$c6/$b6;
            $x26= -$c6/$b6;
            $y16= "phương trình có nghiệm";
        }else{
            $t6 = "<h3 style='color:red'>$t6</h3>";
            $a6 = "<h3 style='color:red'>$a6</h3>";
            $b6= "<h3 style='color:red'>$b6</h3>";
            $c6 = "<h3 style='color:red'>$c6</h3>";
            $x16= "<h3 style='color:red'>-</h3>";
            $x26= "<h3 style='color:red'>-</h3>";
            $y16= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
        }
    }else{
        if($delta6==0){
            $x16=-$b6/(2*$a6);
            $x26=-$b6/(2*$a6);
            $y16="<p>Phương trình có nghiệm kép </p>";
        }else{
            if($delta6>0){
                $x16=-($b6-sqrt($delta6))/(2*$a6);
                $x26=-($b6+sqrt($delta6))/(2*$a6);
                $y16= "<p>Phương trình có 2 nghiệm phân biệt</p>";
            }else{
                $t6="<p style='color:red'>$t6</p>";
                $a6="<p style='color:red'>$a6</p>";
                $b6="<p style='color:red'>$b6</p>";
                $c6="<p style='color:red'>$c6</p>";
                $x16="<p style='color:red'>-</p>";
                $x26="<p style='color:red'>-</p>";
                $y16= "<p>Phương trình vô nghiệm</p>";
            }
        }
    }
?>

<?php
    $t7=7;
    $a7=13;
    $b7=22;
    $c7=11;
    $delta7=($b7*$b7)-(4*$a7*$c7);
    if($a7==0){
        if($b7!=0){
            $x17= -$c7/$b7;
            $x27= -$c7/$b7;
            $y17= "phương trình có nghiệm";
        }else{
            $t7 = "<h3 style='color:red'>$t7</h3>";
            $a7 = "<h3 style='color:red'>$a7</h3>";
            $b7= "<h3 style='color:red'>$b7</h3>";
            $c7 = "<h3 style='color:red'>$c7</h3>";
            $x17= "<h3 style='color:red'>-</h3>";
            $x27= "<h3 style='color:red'>-</h3>";
            $y17= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
        }
    }else{
        if($delta7==0){
            $x17=-$b7/(2*$a7);
            $x27=-$b7/(2*$a7);
            $y17="<p>Phương trình có nghiệm kép </p>";
        }else{
            if($delta7>0){
                $x17=-($b7-sqrt($delta7))/(2*$a7);
                $x27=-($b7+sqrt($delta7))/(2*$a7);
                $y17= "<p>Phương trình có 2 nghiệm phân biệt</p>";
            }else{
                $t7="<p style='color:red'>$t7</p>";
                $a7="<p style='color:red'>$a7</p>";
                $b7="<p style='color:red'>$b7</p>";
                $c7="<p style='color:red'>$c7</p>";
                $x17="<p style='color:red'>-</p>";
                $x27="<p style='color:red'>-</p>";
                $y17= "<p>Phương trình vô nghiệm</p>";
            }
        }
    }
?>

<?php
    $t8=8;
    $a8=7;
    $b8=5;
    $c8=9;
    $delta8=($b8*$b8)-(4*$a8*$c8);
    if($a8==0){
        if($b8!=0){
            $x18= -$c8/$b8;
            $x28= -$c8/$b8;
            $y18= "phương trình có nghiệm";
        }else{
            $t8 = "<h3 style='color:red'>$t8</h3>";
            $a8 = "<h3 style='color:red'>$a8</h3>";
            $b8= "<h3 style='color:red'>$b8</h3>";
            $c8 = "<h3 style='color:red'>$c8</h3>";
            $x18= "<h3 style='color:red'>-</h3>";
            $x28= "<h3 style='color:red'>-</h3>";
            $y18= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
        }
    }else{
        if($delta8==0){
            $x18=-$b8/(2*$a8);
            $x28=-$b8/(2*$a8);
            $y18="<p>Phương trình có nghiệm kép </p>";
        }else{
            if($delta8>0){
                $x18=-($b8-sqrt($delta8))/(2*$a8);
                $x28=-($b8+sqrt($delta8))/(2*$a8);
                $y18= "<p>Phương trình có 2 nghiệm phân biệt</p>";
            }else{
                $t8="<p style='color:red'>$t8</p>";
                $a8="<p style='color:red'>$a8</p>";
                $b8="<p style='color:red'>$b8</p>";
                $c8="<p style='color:red'>$c8</p>";
                $x18="<p style='color:red'>-</p>";
                $x28="<p style='color:red'>-</p>";
                $y18= "<p>Phương trình vô nghiệm</p>";
            }
        }
    }
?>

<?php
    $t9=9;
    $a9=2;
    $b9=2;
    $c9=5;
    $delta9=($b9*$b9)-(4*$a9*$c9);
    if($a9==0){
        if($b9!=0){
            $x19=-$c9/$b9;
            $x29= -$c9/$b9;
            $y19= "phương trình có nghiệm";
        }else{
            $t9 = "<h3 style='color:red'>$t9</h3>";
            $a9 = "<h3 style='color:red'>$a9</h3>";
            $b9= "<h3 style='color:red'>$b9</h3>";
            $c9 = "<h3 style='color:red'>$c9</h3>";
            $x19= "<h3 style='color:red'>-</h3>";
            $x29= "<h3 style='color:red'>-</h3>";
            $y19= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
        }
    }else{
        if($delta9==0){
            $x19=-$b9/(2*$a9);
            $x29=-$b9/(2*$a9);
            $y19="<p>Phương trình có nghiệm kép </p>";
        }else{
            if($delta9>0){
                $x19=-($b9-sqrt($delta9))/(2*$a9);
                $x29=-($b9+sqrt($delta9))/(2*$a9);
                $y19= "<p>Phương trình có 2 nghiệm phân biệt</p>";
            } else{
                 $t9="<p style='color:red'>$t9</p>";
                 $a9="<p style='color:red'>$a9</p>";
                 $b9="<p style='color:red'>$b9</p>";
                 $c9="<p style='color:red'>$c9</p>";
                 $x19="<p style='color:red'>-</p>";
                 $x29="<p style='color:red'>-</p>";
                 $y19= "<p>Phương trình vô nghiệm</p>";
            }
        }
    }
?>

<?php
    $t10=10;
    $a10=1;
    $b10=8;
    $c10=5;
    $delta10=($b10*$b10)-(4*$a10*$c10);
    if($a10==0){
        if($b10!=0){
            $x110= -$c10/$b10;
            $x210= -$c10/$b10;
            $y110= "phương trình có nghiệm";
        }else{
            $t10 = "<h3 style='color:red'>$t10</h3>";
            $a10 = "<h3 style='color:red'>$a10</h3>";
            $b10= "<h3 style='color:red'>$b10</h3>";
            $c10= "<h3 style='color:red'>$c10</h3>";
            $x110= "<h3 style='color:red'>-</h3>";
            $x210= "<h3 style='color:red'>-</h3>";
            $y110= "<h3 style='color:red'>phương trình vô nghiệm</h3>";
        }
    }else{
        if($delta10==0){
            $x110=-$b10/(2*$a10);
            $x210=-$b10/(2*$a10);
            $y110="<p>Phương trình có nghiệm kép </p>";
        }else{
            if($delta4>0){
                $x110=-($b10-sqrt($delta10))/(2*$a10);
                $x210=-($b10+sqrt($delta10))/(2*$a10);
                $y110= "<p>Phương trình có 2 nghiệm phân biệt</p>";
            } else{
                 $t10="<p style='color:red'>$t10</p>";
                 $a10="<p style='color:red'>$a10</p>";
                 $b10="<p style='color:red'>$b10</p>";
                 $c10="<p style='color:red'>$c10</p>";
                 $x110="<p style='color:red'>-</p>";
                 $x210="<p style='color:red'>-</p>";
                 $y110= "<p>Phương trình vô nghiệm</p>";
            }
        }
    }
?>

    
    
    <h2>Giải phương trình bậc hai, 1 ẩn số</h2>
    <table border="1px" cellpadding="4px" cellspacing="0px"style="width:50%;">
        <tr bgcolor=#cccccc>
            <th style="text-align: center;">TT</th>
            <th style="text-align: right;">a</th>
            <th style="text-align: right;">b</th>
            <th style="text-align: right;">c</th>
            <th style="text-align: right;">x1</th>
            <th style="text-align: right;">x2</th>
            <th style="text-align: center;">Ghi chú</th>
            <th style="text-align: center;">Chức năng</th>
        </tr>
        <tr>
            <td style="text-align: center;"><?=$t1?></td>
             <td style="text-align: right;"><p><?=$a1 ?></p></td>
             <td style="text-align: right;"><p><?=$b1 ?></p></td>
             <td style="text-align: right;"><p><?=$c1 ?></p></td>
             <td style="text-align: right;"><p><?=$x11 ?></p></td>
            <td style="text-align: right;"><p><?=$x21?></p></td>
             <td style="text-align: left;"><p><?=$y11?></p></td>
            <td style="text-align: center;"><a href="#" class="delete">Xóa</a></td>
        </tr>
        <tr>
            <td style="text-align: center;"><?=$t2?></td>
             <td style="text-align: right;"><p><?=$a2?></p></td>
             <td style="text-align: right;"><p><?=$b2?></p></td>
             <td style="text-align: right;"><p><?= $c2 ?></p></td>
             <td style="text-align: right;"><p><?=$x12?></p></td>
            <td style="text-align: right;"><p><?= $x22?></p></td>
             <td style="text-align: left;"><p><?=$y12?></p></td>
            <td style="text-align: center;"><a href="#" class="delete">Xóa</a></td>
        </tr>
        <tr>
            <td style="text-align: center;"><?=$t3?></td>
             <td style="text-align: right;"><p><?=$a3?></p></td>
             <td style="text-align: right;"><p><?=$b3?></p></td>
             <td style="text-align: right;"><p><?= $c3?></p></td>
             <td style="text-align: right;"><p><?=$x13?></p></td>
            <td style="text-align: right;"><p><?= $x23?></p></td>
             <td style="text-align: left;"><p><?=$y13?></p></td>
            <td style="text-align: center;"><a href="#" class="delete">Xóa</a></td>
        </tr>
        <tr>
            <td style="text-align: center;"><?=$t4?></td>
             <td style="text-align: right;"><p><?=$a4?></p></td>
             <td style="text-align: right;"><p><?=$b4?></p></td>
             <td style="text-align: right;"><p><?= $c4 ?></p></td>
             <td style="text-align: right;"><p><?=$x14?></p></td>
            <td style="text-align: right;"><p><?= $x24?></p></td>
             <td style="text-align: left;"><p><?=$y14?></p></td>
            <td style="text-align: center;"><a href="#" class="delete">Xóa</a></td>
        </tr>
        <tr>
            <td style="text-align: center;"><?=$t5?></td>
             <td style="text-align: right;"><p><?=$a5?></p></td>
             <td style="text-align: right;"><p><?=$b5?></p></td>
             <td style="text-align: right;"><p><?= $c5 ?></p></td>
             <td style="text-align: right;"><p><?=$x15?></p></td>
            <td style="text-align: right;"><p><?= $x25?></p></td>
             <td style="text-align: left;"><p><?=$y15?></p></td>
            <td style="text-align: center;"><a href="#" class="delete">Xóa</a></td>
        </tr>
        <tr>
            <td style="text-align: center;"><?=$t6?></td>
             <td style="text-align: right;"><p><?=$a6?></p></td>
             <td style="text-align: right;"><p><?=$b6?></p></td>
             <td style="text-align: right;"><p><?= $c6 ?></p></td>
             <td style="text-align: right;"><p><?=$x16?></p></td>
            <td style="text-align: right;"><p><?= $x26?></p></td>
             <td style="text-align: left;"><p><?=$y16?></p></td>
            <td style="text-align: center;"><a href="#" class="delete">Xóa</a></td>
        </tr>
        <tr>
            <td style="text-align: center;"><?=$t7?></td>
             <td style="text-align: right;"><p><?=$a7?></p></td>
             <td style="text-align: right;"><p><?=$b7?></p></td>
             <td style="text-align: right;"><p><?= $c7 ?></p></td>
             <td style="text-align: right;"><p><?=$x17?></p></td>
            <td style="text-align: right;"><p><?= $x27 ?></p></td>
             <td style="text-align: left;"><p><?=$y17?></p></td>
            <td style="text-align: center;"><a href="#" class="delete">Xóa</a></td>
        </tr>
        <tr>
            <td style="text-align: center;"><?=$t8?></td>
             <td style="text-align: right;"><p><?=$a8?></p></td>
             <td style="text-align: right;"><p><?=$b8?></p></td>
             <td style="text-align: right;"><p><?= $c8 ?></p></td>
             <td style="text-align: right;"><p><?=$x18?></p></td>
            <td style="text-align: right;"><p><?= $x28 ?></p></td>
             <td style="text-align: left;"><p><?=$y18?></p></td>
            <td style="text-align: center;"><a href="#" class="delete">Xóa</a></td>
        </tr>
        <tr>
            <td style="text-align: center;"><?=$t9?></td>
             <td style="text-align: right;"><p><?=$a9?></p></td>
             <td style="text-align: right;"><p><?=$b9?></p></td>
             <td style="text-align: right;"><p><?= $c9?></p></td>
             <td style="text-align: right;"><p><?=$x19?></p></td>
            <td style="text-align: right;"><p><?= $x29 ?></p></td>
             <td style="text-align: left;"><p><?=$y19?></p></td>
            <td style="text-align: center;"><a href="#" class="delete">Xóa</a></td>
        </tr>
        <tr>
            <td style="text-align: center;"><?=$t10?></td>
             <td style="text-align: right;"><p><?=$a10?></p></td>
             <td style="text-align: right;"><p><?=$b10?></p></td>
             <td style="text-align: right;"><p><?= $c10 ?></p></td>
             <td style="text-align: right;"><p><?=$x110?></p></td>
            <td style="text-align: right;"><p><?= $x210 ?></p></td>
             <td style="text-align: left;"><p><?=$y110?></p></td>
            <td style="text-align: center;"><a href="#" class="delete">Xóa</a></td>
        </tr>
    </table>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>	
			$('.delete').click(function(){
				
				var cf=  confirm("Bạn có muốn xóa dòng này hay không???");
				if(cf==true){
					$(this).parent().parent().remove();
				}
			
			})
		</script>
</body>

