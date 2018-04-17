<!-- /. NAV SIDE  --><div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>Thêm tài khoản</h2>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />
		<div class="row">
			<div class="col-md-12">
				<!-- Form Elements -->
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<?php foreach ($user as $value) { ?>
								<form role="form" action="" method="POST" enctype="multipart/form-data">
									<div class="form-group">
										<label>Tên tài khoản</label>
										<input type="text" name="user_name" class="form-control" value="<?php echo $value['user_name'] ?>" />
									</div>
									<div class="form-group">
										<label>Họ và tên </label>
										<input type="text" name="user_fullname" class="form-control" value="<?php echo $value['user_fullname'] ?>" />
									</div>
									<div class="form-group">
										<label>Email </label>
										<input type="text" name="user_email" class="form-control" value="<?php echo $value['user_email'] ?>" />
									</div>
									<div class="form-group">
										<label>Mật Khẩu </label>
										<input type="text" name="user_password" class="form-control" value="<?php echo $value['user_password'] ?>" />
									</div>
									<div class="form-group">
										<label>Ảnh đại diện</label>
										<input type="file" name="hinhanh" />
									</div>
									<input type="submit" name="submit">
									
								</form>
								<?php } ?>

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
</div>
<!-- /. PAGE WRAPPER  -->