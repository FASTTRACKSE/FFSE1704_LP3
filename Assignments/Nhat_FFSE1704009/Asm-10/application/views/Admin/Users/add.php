<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
    //     $Bug1= "";
    //     $Bug2= "";
    // if(isset($_POST['submit'])){
    // require_once('ket_noi_MySQL.php');
    // $MYSQLi = connectDB('localhost','Zeref','941505','ffse1704009_mysql_02');
    //         $name = $_POST['username'];
    //         $fullname = $_POST['fullname'];
    //         $password= $_POST['password'];
    //         $email= $_POST['email'];
   
  
    //   mysqli_query($MYSQLi,"SELECT * FROM lms_users WHERE user_name= '$name'");


    //             if( mysqli_affected_rows($MYSQLi)>0){
    //               $Bug1= "User Name trùng.";
    //             }else{

    //               $SQL = "INSERT INTO lms_users(user_name,user_fullname,user_email,user_password) VALUES ('$name','$fullname','$email','$password')";

    //                $result = $MYSQLi -> query($SQL);
            
    //               if($result==true){
                   
    //               header('Location: index.php');
    //               }else{
    //                 $Bug2= "Thêm Thất Bại.";
    //               }
        
    //          $MYSQLi -> close();
    //             }
    // }


    ?>
 <h1 style=" margin-left: 375px;">Create New User</h1>
 <hr style="width: 50%; margin: auto;">
<?php echo validation_errors();?>       
<h3><?= $this->session->msg ?></h3>
    <form method="POST"  style="width: 50%; margin: auto;">
      <small id="emailHelp" class="form-text text-muted" style="font-size: 20px;">Please fill this form and submit to add to new user record to the database.</small>
      <br>
        <table>
            <div>
                <label>Name</label>
                <input type="text" name="username"  class="form-control" required>
            </div>
            <div>
                <label>Full Name</label>
                <input type="text" name="fullname"  class="form-control" required>
            </div>
            <div>
                <label>Email</label>
                <input type="mail" name="email"  class="form-control" required>
            </div>
            <div>
                <label>Pass word</label>
                <input type="password" name="password"  class="form-control" required>
            </div>
            <br>
            <div>
                
                <input type="submit" name="submit" value="Submit" class="btn btn-primary"> 
                <input type="reset" name="cancel" value="Cancer" class="btn btn-light">
                
            </div>
            <br>
            <!-- <div>
                <label><?php echo "<strong>". $Bug1."</strong>" ?></label>
            </div>
            <div>
                <label><?php echo "<strong>".$Bug2."</strong>" ?></label>
            </div> -->

        </table>

    </form>

<br>



</body>
</html>