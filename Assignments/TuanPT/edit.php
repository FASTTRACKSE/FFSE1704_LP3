<?php
require_once('php-asm-8b.php');

$mysqli=connectDB('localhost','tuanpt','123456','masinhvien');
$id =$_GET['id'];
$sql="SELECT * FROM lms_users WHERE user_id=$id";
$result= $mysqli->query($sql);
$row = $result->fetch_assoc();
?>
<?php
// cập nhật dữ liệu
if(isset($_POST['update'])) {
	$name=$_POST['user_name'];
    $fullname=$_POST['user_fullname'];
    $email=$_POST['user_email'];
    $sql ="UPDATE lms_users 
    SET user_name='$name', user_fullname='$fullname',user_email='$email'
    WHERE user_id=$id";
    $result=$mysqli->query($sql);//ket qua tra? ve' la true hoaac ffalse
   
    header('location: php-asm-08.php');
}
if (isset($_POST['out'])) {
  header('location: php-asm-08.php');

}
?>



<html>
    <head>
        <style type="text/css">
form {
    margin: auto;
    
    width: 40%;
    border-collapse: collapse;
    border: 1px solid black;
    height: 52%;
}
b {
                margin-left: 10%;
            }


      </style>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>

 <form action="" method="POST" >
        
        <table >
        <h2 style="display: inline-block;margin-left: 10%">Update User Info</h2><hr>
        <h5 style="display: inline-block;margin-left: 10%;">Please fill this form and submit to update the record.</h5><br>
            <tr style="text-align: left;"><b style="margin-left: 10%">Name</b></tr><br>
            <tr>
            <input type="text" name="user_name"  style="margin-left: 10%;width: 75%" /><br>
            </tr>
            <tr style="text-align: left;"><b >Fullname</b></tr><br
            <tr> <input type="text" name="user_fullname"  style="margin-left: 10%;width:75%"/></tr><br>
            <tr style="text-align: left;"><b>Password</b></tr><br>
            <tr><input type="password" name="user_password"  style="margin-left: 10%;width:75%"/></tr><br>
            <tr style="text-align: left;"><b>Email</b></tr><br>
            <tr><input type="text" name="user_email"  style="margin-left: 10%;width:75%"/></tr><br>
            <tr style="width: 70%;margin-top: 15px;">
                
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit" style="margin-left: 10%;margin-top: 15px;">
                    <input type="submit" class="btn btn-default" name="out" value="Cancel" style="margin-left: 3%;margin-top: 15px;">
                </tr>
            </td>
        
        </table>
    </form>
</html>