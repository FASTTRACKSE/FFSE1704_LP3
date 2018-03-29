<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 4</title>
	<style type="text/css">
  table {
      border-collapse: collapse;
  }
  table tr td,
  th {
   border: 1px solid black;
   padding: 10px;
   padding-right: 100px;
}
table th {
   text-align: left;
}
table tr:first-child {
   background: #d6d5d5;
}
</style>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <table>
            <tr >
                <th colspan="2">Dang ki tai khoan</th>
            </tr>
            <tr>
                <td>Ten dang nhap (*)</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Mat khau (*)</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>H? và tên (*)</td>
                <td><input type="text" name="fullname" required></td>
            </tr>
            <tr>
                <td>?nh d?i di?n (*)</td>
                <td><input type="file" name="avatar" value="Ch?n t?p"></td>
            </tr>
            <tr>
                <td>Ð?a ch?</td>
                <td>
                    <select name="address">
                        <option value="Ðà N?ng">Ðà N?ng</option>
                        <option value="Hà N?i">Hà N?i</option>
                        <option value="H? Chí Minh">H? Chí Minh</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Gi?i tính</td>
                <td>
                    <input type="radio" name="gender" value="Nam" checked>Nam<br>
                    <input type="radio" name="gender" value="N?">N?<br>
                </td>
            </tr>
            <tr>
                <td>S? thích</td>
                <td>
                    <input type="checkbox" value="Xem phim" name="favorite[]" checked>Xem phim<br>
                    <input type="checkbox"  value="Nghe nh?c" name="favorite[]">Nghe nh?c<br>
                    <input type="checkbox" value="Ð?c báo" name="favorite[]">Ð?c báo
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Xác nh?n"> 
                    <input type="reset" name="cancel" value="H?y b?">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php 
session_start();
  

if(isset($_POST['submit'])){
    $namefile='avatar';
    $username= $_POST['username'];
    $password=$_POST['password'];
    $fullname=$_POST['fullname'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $favorite=$_POST['favorite'];
    $mess=array();

        //validation
    if(empty($username)){
        $mess[]="Vui long nhap username";
    }
    if(empty($password)){
        $mess[]="Vui long nhap password";
    }
    if(empty($fullname)){
        $mess[]="Vui long nhap fullname";
    }
    if(empty($address)){
        $mess[]="Vui long nhap address";
    }
    if(empty($gender)){
        $mess[]="Vui long chon gender";
    }
    if(count($favorite)==0){
        $mess[]="Vui long chon favorite";
    }
    if(empty($_FILES['avatar']['name'])){
        $mess[]="Vui long chon avatar";
    }
        if(count($mess)==0){//ko co loi 
            //upload file
            $name= $_FILES['avatar']['name'];
            $tmp_name= $_FILES['avatar']['tmp_name'];
            //L?y du?ng d?n góc c?a host
            $path_root = $_SERVER['DOCUMENT_ROOT'];//C:/htdocs
            //T?o du?ng d?n d?y d? d? upload file
            $path_upload= $path_root.'/lab2.1/image/'.$name;
            //Th?c hi?n úp upload files lên host
            move_uploaded_file($tmp_name, $path_upload);  
            
            //tao phan tu moi cho mang $_POST
            if($name!='false'){
                $_POST['avatar']=$name;
            }else{
                $_POST['avatar']="";
            }           
            //Them phan tu vao session
            $_SESSION[$username]=$_POST;
            
            //chuyen huong qua trang danhsach
            header("location: danhsach.php");
        }
    }
    ?>