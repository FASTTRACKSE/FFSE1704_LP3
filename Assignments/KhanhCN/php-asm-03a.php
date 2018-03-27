<?php
session_start();

if
  (


    isset($_POST["idHoa"])  ||  
    isset($_POST["Tênhoa"])||
    isset($_POST["Sốlượng"]) ||
    isset($_POST["Đơngiá"]) 


  ){
    $id = $_POST['idHoa'];
    $ten = $_POST['Tênhoa'];
    $soluong = $_POST['Sốlượng'];
    $dongia = $_POST['Đơngiá']; 

    if (isset($_SESSION['GIOHOA'][$id])) {
      $_SESSION['GIOHOA'][$id]['sl']= $soluong;
    }else{
      $_SESSION['GIOHOA'][$id] = array(
        'id' => $id,
       'ten' => $ten,
       'sl' => $soluong,
       'dg' => $dongia

     );
    } 
    header("location: giohoa.php");
  } 
  ?>

  <!DOCTYPE html>
  <html>
  <body >

    <form action='' method="POST"  style="background:#99CCCC;width:300px" >
      <h1 style= "background:#008B8B; width:300px; color: white "; >Mua hoa</h1>
    Id hoa:</br> <input type="text" name="idHoa"> <br/><br/>
  Tên hoa: </br><input type="text" name="Tênhoa"><br/><br/>
Số lượng:</br> <input type="number" name="Sốlượng"><br/><br/>
Đơn giá:</br> <input type="number" name="Đơngiá"><br/><br/>
<input style="text-align: center;" type="submit" value="Mua hoa">
</form>
</body>
</html>
