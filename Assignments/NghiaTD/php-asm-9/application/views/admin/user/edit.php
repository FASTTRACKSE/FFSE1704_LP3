    
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
            <div class="col-md-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <?php echo $this->session-> msg; ?>
                    
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form role="form" action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Tên tài khoản</label>
                                        <input  value="<?php echo $users['user_name'];?>" type="text" name="username" class="form-control" disabled />
                                    </div>
									<div class="form-group">
                                        <label>Họ và tên </label>
                                        <input type="text" name="fullname" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label>Pass word </label>
                                        <input type="password" name="password" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" />
                                    </div>
									<div class="form-group">
                                        <label>Phân quyền</label>
                                        <select class="form-control">
                                                <option value='1'>Administator</option>
                                                <option value='2'>Author</option>
										</select>
                                    </div>
                                    <div class="form-group">
                                        <label>Ảnh đại diện</label>
                                        <input type="file" name="hinhanh" />
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-success btn-md">Thêm</button>
                                </form>



                            </div>

                        </div>
                    </div>
                   
                </div>
                <!-- End Form Elements -->
            </div>
        </div>
        <!-- /. ROW  -->
    </div>
    <!-- /. PAGE INNER  -->