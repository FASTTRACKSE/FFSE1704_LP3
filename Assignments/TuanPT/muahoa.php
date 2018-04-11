<?php 
  session_start();

if(isset($_POST['id']) ||
   isset($_POST['ten']) ||
   isset($_POST['sl']) ||
   isset($_POST['don']) 
  ){
    $id=$_POST['id'];
    $ten=$_POST['ten'];
    $sl=$_POST['sl'];
    $don=$_POST['don'];
    if(isset($_SESSION['giohang'][$id])){
        $_SESSION['giohang'][$id]['sl']=$sl;
    }else{
        $_SESSION['giohang'][$id]=array(
            'id'=>$id,
            'ten'=>$ten,
            'sl'=>$sl,
            'don'=>$don
        );
    }
    header("location: giohang.php");
}
?>
<form action="" method="POST" style="background:#20B2AA; width:180px">
    <h3 style="background:#008080">Cửa hàng Sunflower</h3>
    Id hoa:<br>
    <input type="text" name="id" /><br><br>
    Tên hoa:<br>
    <input type="text" name="ten" /><br><br>
    Số lượng:<br>
    <input type="text" name="sl" /><br><br>
    Đơn giá:<br>
    <input type="text" name="don" /><br><br>
    <input style="margin-left: 50px" type="submit" name="muahoa" value="Mua hoa"/>
</form>
