   <!DOCTYPE html>
   <html>
   <head>
    <title>FFSE1703012</title>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/zerogrid.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/cropped-cropped-fasttrack-icon-420-180x180.png"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/index.css">

  </head>
  <body >
    <script rel="stylesheet" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script rel="stylesheet" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><img src="<?php echo base_url();?>assets/images/fasttrack-title-logo-color-new-1.png" style="width: 100px"></a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url();?>index.php">Trang chủ</a></li>    
          <li><a href="<?php echo base_url();?>gioithieu.php">Giới thiệu về Đà Nẵng</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">Điểm đến tại Đà Nẵng
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="diadanhnoitieng.html">Địa danh nổi tiếng</a></li>
                <li><a href="monannoitieng.html">Ẩm thực</a></li>
              </ul>
            </li>
            <li>
              <a href="khachsan.html">Khách sạn Đà Nẵng</a>
            </li>
            <li  class="active"><a href="<?php echo base_url();?>index.php/sukien/index">Sự kiện</a></li>
            <li><a href="<?php echo base_url();?>Album.php">Thư viện ảnh</a></li>
            <li><a href="thongtinlienhe.html">Thông tin liên hệ</a></li>

          </ul>
          <div style="color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;"> &nbsp; <a href='<?php echo base_url();?>index.php/login/index' class="btn btn-danger square-btn-adjust">Đăng nhập</a> </div>
        </div>
        
      </nav>