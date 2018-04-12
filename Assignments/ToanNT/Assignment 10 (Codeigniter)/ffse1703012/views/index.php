<?php 
$this->session->userdata('username');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AdminCP | Fasttrack SE</title>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" />
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
                        <img src="<?php echo base_url(); ?>assets/img/find_user1.png" class="user-image img-responsive" />
                    </li>

                    <li>
                        <a class="active-menu" href="<?php echo base_url();?>index.php/user/index"><i class="fa fa-dashboard fa-3x"></i> Trang chủ</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/events/index"><i class="fa fa-list fa-3x"></i> Quản lý sự kiện</a>
                    </li>
                    
                </ul>
            </div>
        </nav>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Quản lý người dùng</h2>
                    </div>
                </div>
                <hr />

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="<?php echo base_url();?>index.php/user/add" class="btn btn-success btn-md" id="">
                                                <i class="fa fa-plus"></i>&nbsp;Thêm
                                            </a>
                                        </div>
                                        <div class="col-sm-6" style="text-align: right;">
                                            <?=form_open('user/search');?>
                                            <?php $search = array('name'=>'search','id'=>'search');?>
                                            <?=form_input($search);?><input type=submit value='Search' /></p>
                                            <?=form_close();?><br />
                                        </div>
                                    </div>

                                    <table class="table table-striped table-bordered">
                                        <tr>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Email</th>
                                            <th>Actions</th>
                                        </tr>
                                        <?php
                                        $i=1;
                                        foreach($user as $u){ ?>
                                        <tr>
                                            <td> <?php echo $i++; ?> </td>
                                            <td><?php echo $u['username']; ?></td>
                                            <td><?php echo $u['firstname']; ?></td>
                                            <td><?php echo $u['lastname']; ?></td>
                                            <td><?php echo $u['email']; ?></td>
                                            <td>
                                                <a href="<?php echo site_url('user/edit/'.$u['id']); ?>" class="btn btn-info btn-xs">Sửa</a> 
                                                <a href="<?php echo site_url('user/remove/'.$u['id']); ?>" onclick="return confirm('Bạn có chắc chắn muốn tài khoản này?')" class="btn btn-danger btn-xs">Xóa</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </table>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="dataTables_info" id="dataTables-example_info" style="margin-top:27px">Hiển thị từ 1 đến 3 của 10 tài khoản</div>
                                        </div>
                                        <div class="col-sm-6" style="text-align: right;">
                                            <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Trang trước</a></li>
                                                    <li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li>
                                                    <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">2</a></li>
                                                    <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">3</a></li>
                                                    <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">4</a></li>
                                                    <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">5</a></li>
                                                    <li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Trang tiếp</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>


</body>

</html>