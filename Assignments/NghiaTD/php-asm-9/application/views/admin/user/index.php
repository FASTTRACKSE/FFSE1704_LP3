<!-- /. NAV SIDE  --><div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Quản lý danh mục</h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="<?php echo base_url() ?>index.php/admin/user/add" class="btn btn-success btn-md" id="">
                                        <i class="fa fa-plus"></i>&nbsp;Thêm
                                    </a>
                                </div>
                                <div class="col-sm-6" style="text-align: right;">
                                    <form method="post" action="">
                                        <input type="submit" name="search" value="Tìm kiếm" class="btn btn-warning btn-sm" style="float:right" />
                                        <input type="search" class="form-control input-sm" placeholder="Nhập họ tên" style="float:right; width: 300px;" />
                                        <div style="clear:both"></div>
                                    </form><br />
                                </div>
                            </div>

                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên tài khoản</th>
                                        <th>Họ và tên</th>
                                        <th>Email</th>
                                        <th width="160px">Chức năng</th>
                                    </tr>
                                </thead>
                                <?php foreach ($items as $value) {
                                    
                                 ?>
                                <tr>
                                    <td><?php echo $value['user_id']; ?></td>
                                    <td><a href="<?php echo base_url() ?>index.php/admin/user/add>"><?php echo $value['user_name']; ?></a></td>
                                    <td><?php echo $value['user_fullname']; ?></td>
                                    <td><?php echo $value['user_email']; ?></td>
                                    <td><a href="" class="btn btn-primary">Sửa</a>
                                        <a href="" class="btn btn-danger">Xóa</a></td>

                                </tr>
                                <?php } ?>
                            </table>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="dataTables_info" id="dataTables-example_info" style="margin-top:27px">Hiển thị từ 1 đến 3 của 10 tài khoản</div>
                                </div>
                                <div class="col-sm-6" style="text-align: right;">
                                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                                     <?php  echo $this->pagination->create_links(); ?>  
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </div>

</div>
<!-- /. PAGE INNER  -->
</div>