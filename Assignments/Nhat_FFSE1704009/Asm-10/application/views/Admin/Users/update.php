<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <?php

	 // $Bug1= "";
	 // $name = $_GET['name'];
  //   if(isset($_POST['submit'])){
  //   require_once('ket_noi_MySQL.php');
  //   $MYSQLi = connectDB('localhost','Zeref','941505','ffse1704009_mysql_02');

  //           $fullname = $_POST['fullname'];
  //           $email= $_POST['email'];
  //           $id = $_GET['id'];

  //       	 		$SQL = "UPDATE lms_users SET user_fullname='$fullname',user_email='$email' WHERE user_id = $id";


  //           		$result = $MYSQLi -> query($SQL);

  //         			if($result==true){
  //            			 header('Location: index.php');
  //         			}else{
  //          				 $Bug1= "them that bai";
  //         			}

  //            		$MYSQLi -> close();
  //        	}


  ?>


  <h1 style=" margin-left: 375px;">Update User</h1>
  <hr style="width: 50%; margin: auto;">
<?php echo validation_errors();?>
  <form method="POST"  style="width: 50%; margin: auto;">
    <small id="emailHelp" class="form-text text-muted" style="font-size: 20px;">Please edit the input values and submit  to update the record.</small>
    <br>
    <table>
     <!-- <div>
      <label>User Name</label>
      <input type="text" name="username"  class="form-control" value="" >
    </div> -->
    <div>
      <label>Full Name</label>
      <input type="text" name="fullname"  class="form-control" required>
    </div>
    <div>
      <label>Email</label>
      <input type="mail" name="email"  class="form-control" required>
    </div>
    <br>
    <div>

      <input type="submit" name="submit" value="Submit" class="btn btn-primary"> 
      <input type="reset" name="cancel" value="Cancer" class="btn btn-light">

    </div>
    <br>
            <!-- <div>
                <label><?php echo "<strong>". $Bug1."</strong>" ?></label>
              </div> -->


            </table>
          </form>
          <a href="<?= base_url() ?>index.php/Admin/Users/index"><button type="button" class="btn btn-primary" style="margin-top: 20px; margin-left: 380px;">Back</button></a>
        </body>
        </html>