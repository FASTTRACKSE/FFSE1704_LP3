<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet"

  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();  ?>assets/css/bootstrap.min.css">
</head>
<body>
  <div class="container" style="width: 420px">
   <br /><br /><br />
   <h3 align="center" >Đăng nhập bằng tài khoản của bạn</h3>
   <form method="post" action="<?php echo base_url(); ?>index.php/Login">
       <div class="form-group">
     <label>Username</label>
     <input type="text" name="username" class="form-control" />
     <span class="text-danger"><?php echo form_error('username');?></span>
   </div>
   <div class="form-group">
     <label>Password</label>
     <input type="password" name="password" class="form-control" />
     <span class="text-danger"><?php echo form_error('password'); ?></span>
   </div>
   <div class="form-group">
     <input type="submit" name="submit" value="Đăng nhập" class="btn btn-info" />
     <div> <a href='<?php echo base_url();?>index.php/user/registration' class="btn btn-danger square-btn-adjust">Đăng ký</a> </div>
     <?php
     echo '<label class="text-danger">'.$this->session->flashdata

     ("error").'</label>';
     ?>
   </div>
 </form>
</div>
</body>
</html>