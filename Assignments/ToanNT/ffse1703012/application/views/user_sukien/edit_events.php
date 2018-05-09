<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sửa sự kiện</title>
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
                            <h2 class="text-center">Sửa bài viết</h2>
                        </div>
                        <div class="clearfix"></div>
                        <form role="form" action="<?=base_url('index.php/sukien/update/'.$user['ID']) ?>" method="POST" enctype="multipart/form-data">
                            <div class="form">
                                <table class="table">
                                  <tr>
                                    <td><P>Ngày bắt đầu</p></td>
                                    <td><input type="text" name="bat_dau" value="<?=$user['start']?>" class="form-control" id="datepicker"></td>
                                  </tr>
                                  <tr>
                                    <td><P>Ngày kết thúc</p></td>
                                    <td><input type="text" name="ket_thuc" value="<?=$user['end']?>" class="form-control" id="datepicker2"></td>
                                  </tr>
                                  <tr>
                                    <td><P>Tiêu đề bài viết</p></td>
                                    <td><input type="text" name="tieu_de" value="<?=$user['title']?>" class="form-control"></td>
                                  </tr>
                                  <tr>
                                    <td><P>Nội dung bài viết</p></td>
                                    <td><textarea name="noi_dung"  value="" class="form-control" id="" cols="30" rows="10"><?=$user['noi_dung']?></textarea></td>
                                  </tr>
                                  <tr>
                                    <td><P>Hình ảnh bài viết</p></td>
                                    <td><input type="file" name="picture" class="form-control" value=""><img src="<?=base_url()?>upload/<?=$user['hinh_anh']?>" width='100px' height='100px'></td>
                                  </tr>
                                  <tr>
                                    <td><P>Mô tả</p></td>
                                    <td><textarea name="mo_ta" value="" class="form-control" id="" cols="30" rows="10"><?=$user['description']?></textarea></td>
                                  </tr>
                                  <tr>
                                  <td><p>Tin nổi bật</p></td>
                                <td class="checkbox">
                                 <?php echo form_checkbox("noibat[]", "1", set_checkbox("noibat[]","1")); ?>
                                </td>
                              </tr>

                              </table>
                            </div>
                            <div class="col-md-3 form-group pull-right">
                                 <input type="submit" name="btnedit" value="Sửa" class="btn btn-primary btn-block">
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
              <script>
                 $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
              </script>
              <script>
                 $( function() {
    $( "#datepicker2" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
              </script>



</body>

</html>
