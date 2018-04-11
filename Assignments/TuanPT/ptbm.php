<form action="" method="post">
    Nhập a: <input type="number" name="a" ><br>
    Nhập b: <input type="number" name="b" ><br>
    <input type="submit" name="ketqua" value="Kết quả">
</form> 
<?php 
if(isset($_POST['ketqua'])){
    $a=$_POST['a'];
    $b=$_POST['b'];
    
    $x=Nghiem($a,$b);
    HienThiNghiem($x);
}
function Nghiem($a,$b){
    if($a==0 && $b==0){
        return "Phương trình có vô số nghiệm";
    }else{
       if($a==0 && $b!=0){
           return"Phương trình vô nghiệm";
       }else{
           $x=-$b/$a;
           return $x;
    }
    }
}
function HienThiNghiem($x){
    echo "Phương trình có nghiệm là $x";
}
?>