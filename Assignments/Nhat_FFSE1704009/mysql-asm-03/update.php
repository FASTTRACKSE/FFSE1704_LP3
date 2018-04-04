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
<?php 
    if(isset($_POST['submit'])){
    require_once('ket_noi_MySQL.php');
    $MYSQLi = connectDB('localhost','Zeref','941505','ffse1704009_mysql_02');
            $name = $_POST['username'];
            $fullname = $_POST['fullname'];
            $password= $_POST['password'];
            $email= $_POST['email'];
            $id = $_GET['id'];
         $SQL = "UPDATE lms_users SET user_name ='$name',user_fullname='$fullname',user_email='$email', user_password='$password' WHERE user_id = $id";
      
           
            $result = $MYSQLi -> query($SQL);

          if($result==true){
              header('Location: index.php');
          }else{
            echo "them that bai". $result -> error;
          }
        
             $MYSQLi -> close();
    }

    ?>

    <form method="POST" enctype="multipart/form-data">
        <table>
            <tr >
                <th colspan="2">Chỉnh sửa tài khoản</th>
            </tr>
          <tr>
                <td>Tên đăng nhập (*)</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Họ và tên (*)</td>
                <td><input type="text" name="fullname" required></td>
            </tr>
            <tr>
                <td>email (*)</td>
                <td><input type="mail" name="email" required></td>
            </tr>
            <tr>
                <td>Mật khẩu (*)</td>
                <td><input type="password" name="password" required></td>
            </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Xác nhận"> 
                    <input type="reset" name="cancel" value="Hủy bỏ">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>