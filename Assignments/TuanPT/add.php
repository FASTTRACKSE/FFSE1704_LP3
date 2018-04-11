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
        <h2 style="display: inline-block;margin-left: 10%">Create New User</h2>
        <h5 style="display: inline-block;margin-left: 10%;">Please fill this form and submit to add a new user record to the database.</h5>
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

<?php

if (isset($_POST['out'])) {
  header('location: php-asm-08.php');

};
require 'php-asm-8b.php';
$mysqli=connectDB('localhost','tuanpt','123456','masinhvien');
if(isset($_POST['submit'])){
    $name=$_POST['user_name'];
    $fullname=$_POST['user_fullname'];
    $password=md5($_POST['user_name']);
    $email = $_POST['user_email'];
$sql = "INSERT INTO lms_users(user_name,user_fullname, user_password, user_email) VALUES('$name','$fullname','$password', '$email')";
$result=$mysqli->query($sql);

    header('location: php-asm-08.php');
};
 
$mysqli->close();
?>