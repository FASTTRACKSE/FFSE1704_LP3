<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AdminCP | Fasttrack SE</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>index.php/user/index">Fasttrack SE</a>
            </div>
            <div style="color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;"> &nbsp; <a href="<?php echo base_url();?>index.php/login/logout" class="btn btn-danger square-btn-adjust">Đăng xuất</a> </div>
        </nav>
        <!-- /. NAV TOP  --><nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="<?php echo base_url();?>assets/img/find_user1.png" class="user-image img-responsive" />
                    </li>

                    <li>
                        <a class="active-menu" href="<?php echo base_url();?>index.php/user/index"><i class="fa fa-dashboard fa-3x"></i> Trang chủ</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/sukien/index"><i class="fa fa-list fa-3x"></i> Quản lý sự kiện</a>
                    </li>

                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  --><div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Sửa tài khoản</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <!-- Form Elements -->
                    <form  method="post" action="" enctype="multipart/form-data">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="form-group">
                                      <label for="username" class="col-md-4 control-label">Username</label>
                                      <div class="col-md-4">
                                       <input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $user['username']); ?>" class="form-control" id="username" />
                                   </div>
                               </div> <br>
                               <div class="form-group">
                                  <label for="firstname" class="col-md-4 control-label">Họ </label>
                                  <div class="col-md-4">
                                   <input type="text" name="firstname" value="<?php echo ($this->input->post('firstname') ? $this->input->post('firstname') : $user['firstname']); ?>" class="form-control" id="firstname" />
                               </div>
                           </div><br>
                           <div class="form-group">
                              <label for="lastname" class="col-md-4 control-label">Tên</label>
                              <div class="col-md-4">
                               <input type="text" name="lastname" value="<?php echo ($this->input->post('lastname') ? $this->input->post('lastname') : $user['lastname']); ?>" class="form-control" id="lastname" />
                           </div>
                       </div><br>
                       <div class="form-group">
                          <label for="email" class="col-md-4 control-label">Email</label>
                          <div class="col-md-4">
                           <input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $user['email']); ?>" class="form-control" id="email" />
                       </div>
                   </div><br>
                   <div class="form-group">
                      <label for="password" class="col-md-4 control-label">Password</label>
                      <div class="col-md-4">
                       <input type="password" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $user['password']); ?>" class="form-control" id="password" />
                   </div>
               </div><br>
               <div class="form-group">
                <label for="password" class="col-md-4 control-label">Hình ảnh</label>
                  <div class="col-md-4">
                   <input type="file" name="image" value="<?php echo ($this->input->post('image') ? $this->input->post('image') : $user['image']); ?>" class="form-control" id="image" />
               </div>
           </div><br>
           <div class="form-group">
              <div class="col-sm-offset-4 col-sm-4">
               <button type="submit" class="btn btn-success">Save</button>
           </div>
       </div>
       <!-- End Form Elements -->
   </div>
</div>
<!-- /. ROW  -->
</form>
</div>
<!-- /. PAGE INNER  -->
<!-- /. PAGE WRAPPER  -->
</div>
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="<?php echo base_url();?>assets/js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="<?php echo base_url();?>assets/js/custom.js"></script>


</body>

</html>

