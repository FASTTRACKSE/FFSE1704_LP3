<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thêm sự kiện</title>
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
        <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/user/index">Fasttrack SE</a>
      </div>
      <div style="color: white;
      padding: 15px 50px 5px 50px;
      float: right;
      font-size: 16px;"> &nbsp; <a href='<?php echo base_url();?>index.php/login/logout' class="btn btn-danger square-btn-adjust">Đăng xuất</a> </div>
    </nav>
    <!-- /. NAV TOP  --><nav class="navbar-default navbar-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
          <li class="text-center">
            <img src="<?php echo base_url();?>assets/img/find_user1.png" class="user-image img-responsive" />
          </li>

          <li>
            <a class="active-menu" href="<?php echo base_url(); ?>index.php/user/index"><i class="fa fa-dashboard fa-3x"></i> Trang chủ</a>
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
          <div class="content">
            <div class="col-md-4 add-dm">
              <h2 class="text-center">Thêm bài viết</h2>
            </div>
            <div class="clearfix"></div>
            <form method="post" enctype="multipart/form-data">
              <div class="form">
                <table class="table">
                  <tr>
                    <td><P>Ngày bắt đầu</p></td>
                      <td><input type="text" name="bat_dau" class="form-control"></td>
                    </tr>
                    <tr>
                      <td><P>Ngày kết thúc</p></td>
                        <td><input type="text" name="ket_thuc" class="form-control"></td>
                      </tr>
                      <tr>
                        <td><P>Tiêu đề bài viết</p></td>
                          <td><input type="text" name="tieu_de" class="form-control"></td>
                        </tr>
                        <tr>
                          <td><P>Nội dung bài viết</p></td>
                            <td><textarea name="noi_dung" class="form-control" id="" cols="30" rows="10"></textarea></td>
                          </tr>
                          <tr>
                            <td><P>Hình ảnh bài viết</p></td>
                              <td><input type="file" name="picture" class="form-control"></td>
                            </tr>
                            <tr>
                              <td><P>Mô tả</p></td>
                                <td><textarea name="mo_ta" class="form-control" id="" cols="30" rows="10"></textarea></td>
                              </tr>

                              <td><p>Tin nổi bật</p></td>
                                <td class="checkbox">
                                 <?php echo form_checkbox("noibat[]", "1", set_checkbox("noibat[]","1")); ?>
                                </td>
                              </tr>

                            </table>
                          </div>
                          <div class="col-md-3 form-group pull-right">
                           <input type="submit" name="btnadd" value="Lưu" class="btn btn-primary btn-block">
                         </div>
                       </form>
                     </div>
                   </div>
                   <!-- /. ROW  -->
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