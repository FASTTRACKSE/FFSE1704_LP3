<?php 
$tuthe=" ";
$ketqua=" ";
if(isset($_POST['tu'])){
    $caugoc='Tôi yêu Việt Nam';
    $tugoc='Tôi';
    $tu=$_POTS["tu"];
    $ketqua= str_replace($tugoc,$tu,$goc);
}
?>
<form action="" method="POST" style="background:#FFFFCC;width:550px;">
    <h2 style="text-align: center; background:#0033FF; color:#FFCC00;">Thay thế chuỗi</h2>
    <p  style="text-align: center;">Đoạn văn gốc:</p>
    <input type="text" name="goc" value="Tôi yêu Việt Nam"><br>
    Từ gốc <input style="width"  type="text" name="tugoc" value="Tôi"> thay thế bằng <input type="text" name="tu" value="<?= $_POST[tu]?>">
    <input type="text" name="kq" value="<?= $ketqua ?>"><br>
    <input type="submit" name="thuchien" value="Thực hiện" align="center">
</form>