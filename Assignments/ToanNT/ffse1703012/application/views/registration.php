<!DOCTYPE html>
<html lang="en">
<head>
  <link href="<?php echo base_url(); ?>assets/css/style" rel='stylesheet' type='text/css' />
</head>
<body>
  <div class="container">
    <h2>User Registration</h2>
    <form action="<?php base_url(); ?> " method="POST">
      <div class="form-group">
        <input type="text" class="form-control" name="username" placeholder="User Name" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
        <?php echo form_error('name','<span class="help-block">','</span>'); ?>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="firstname" placeholder="First Name" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
        <?php echo form_error('name','<span class="help-block">','</span>'); ?>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="lastname" placeholder="Last Name" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
        <?php echo form_error('name','<span class="help-block">','</span>'); ?>
      </div>
      <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Email" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
        <?php echo form_error('email','<span class="help-block">','</span>'); ?>
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password" required="">
        <?php echo form_error('password','<span class="help-block">','</span>'); ?>
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="conf_password" placeholder="Confirm password" required="">
        <?php echo form_error('conf_password','<span class="help-block">','</span>'); ?>
      </div>

      <div class="form-group">
        <input type="submit" name="submit" class="btn-primary" value="Submit"/>
      </div>
    </form>
    <p class="footInfo">Already have an account? <a href="<?php echo base_url(); ?>index.php/user/login">Login here</a></p>
  </div>
</body>
</html>