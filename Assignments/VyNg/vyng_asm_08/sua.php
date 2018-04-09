<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
    
    if(isset($_POST['submit'])){
    require_once('bai90.php');
    $MYSQLi = connectDB('localhost','giavy1995','123456789','sinhvienffse1704');

            
                    $user_name=$_POST['username'];
                    $user_fullname=$_POST['fullname'];
                    $user_email=$_POST['email'];
                    $id=$_GET['id'];
                    $user_password=$_POST['password'];

                    $SQL="UPDATE masinhvienffse1704 SET user_name='$user_name',user_fullname='$user_fullname',user_password='$user_password',user_email='$user_email'WHERE user_id='$id'";
      
                   
                      $rs=$MYSQLi->query($SQL);
                    
                    if($rs==true){
                         header("location: lms_users.php");
                    }else{
                        echo "không thành công". $rs-> error;
                    }
                    $MYSQLi->close();
        };

    ?>
<table>
    <form method="POST" enctype="multipart/form-data">
            <tr >
                <h1>create new user</h1>
            </tr>
            <tr>
                <td>Tên đăng nhập</td>
                <td><input type="text" name="username" value="" required></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Họ và tên</td>
                <td><input type="text" name="fullname" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Xác nhận"> 
                    <input type="reset" name="cancel" value="Hủy bỏ">
                </td>
            </tr>
    </form>
</table>
</body>
</html>