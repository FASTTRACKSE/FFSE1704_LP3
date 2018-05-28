<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quản lý sự kiện</title>
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url() ?>scripts/fullcalendar/fullcalendar.min.css" />
    <script src="<?php echo base_url() ?>scripts/fullcalendar/lib/moment.min.js"></script>
    <script src="<?php echo base_url() ?>scripts/fullcalendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url() ?>scripts/fullcalendar/gcal.js"></script>


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
                <a class="navbar-brand" href="http://localhost/ffse1703012/index.php/user/index">Fasttrack SE</a>
            </div>
            <div style="color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;"><a href='<?php echo base_url();?>index.php/login/logout' class="btn btn-danger square-btn-adjust">Đăng xuất</a> </div>
        </nav>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="<?php echo base_url(); ?>assets/img/find_user1.png" class="user-image img-responsive" />
                    </li>

                    <li>
                        <a  href="http://localhost/ffse1703012/index.php/user/index"><i class="fa fa-dashboard fa-3x"></i> Trang chủ</a>
                    </li>
                    <li>
                        <a class="active-menu" href="http://localhost/ffse1703012/index.php/sukien/index"><i class="fa fa-list fa-3x"></i> Quản lý sự kiện</a>
                    </li>

                </ul>
            </div>
        </nav>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">

                    <div class="col-md-12">
                        <h2>Quản lý sự kiện</h2>
                        <div class="col-sm-6">
                            <a href="<?php echo base_url();?>index.php/sukien/add" class="btn btn-success btn-md" id="">
                                <i class="fa fa-plus"></i>&nbsp;Thêm
                            </a>
                        </div>


                        <div class="clearfix"></div>
                        <table class="table table-bordered" style="margin-top:20px;" width="360">
                            <tr class="bg-info" >
                                <td>STT</td>
                                <td>Ngày bắt đầu</td>
                                <td>Ngày kết thúc</td>
                                <td>Tiêu đề</td>
                                <td width="50" height="20">Nội dung</td>
                                <td>Hình ảnh</td>
                                <td >Mô Tả</td>
                                <td>Tác vụ</td>

                            </tr>
                            <?php
                            $i=1;
                            foreach($list as $u){ ?>
                            <tr style="height:20px; width: 20px ">
                                <td> <?php echo $i++; ?> </td>
                                <td><?php echo $u['start']; ?></td>
                                <td><?php echo $u['end']; ?></td>
                                <td><?php echo $u['title']; ?></td>
                                <td width="50" height="20" ><?php echo $u['noi_dung']; ?></td>
                                <td><img src="<?=base_url()?>upload/<?= $u['hinh_anh']; ?>" width="80px" height="80px" ></td>
                                <td  ><?php echo $u['description']; ?></td>

                                <td>
                                    <a href="<?php echo site_url('sukien/edit/'.$u['ID']); ?>" class="btn btn-info btn-xs">Sửa</a> 
                                    <a href="<?php echo site_url('sukien/remove/'.$u['ID']); ?>"  onclick="return confirm('Bạn có chắc chắn muốn xóa mục này?')" class="btn btn-danger btn-xs">Xóa</a>
                                </td>

                            </tr>
                            <?php } ?>
                        </table>



                    </div>

                </div>
                <div class="col-md-9" style="font-size:18px;text-align:center;">
                 <br><?php echo $this->pagination->create_links();?>
             </div>
         </div>

     </div>
 </div>


</body>
</html>