<form action="" method="post">
    Chiều dài:   <input type="text" name="cd"><br>
    Chiều rộng:  <input type="text" name="cr"><br>
    <input type="submit" name="ketqua" value="Kết quả">
</form>
<?php 
if(isset($_POST['ketqua'])){
    $cd=$_POST['cd'];
    $cr=$_POST['cr'];
    $dientich=DienTichHCN($cd,$cr);
    HienThiDienTichHCN($dientich);
}
function DienTichHCN($cd,$cr){
    $dt=$cd*$cr;
    return $dt;
}
function HienThiDienTichHCN($dientich){
    echo "Diện tích hình chữ nhật là $dientich";
}
?>