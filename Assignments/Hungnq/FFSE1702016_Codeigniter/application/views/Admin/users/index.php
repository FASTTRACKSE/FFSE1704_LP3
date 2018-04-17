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
							<?php echo $this->pagination->create_links(); ?>
							<div class="row">
								<div class="col-sm-6">
									<a href="add" class="btn btn-success btn-md" id="">
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
										<td>ID</td>
										<td>Name</td>
										<td>Fullname</td>
										<td>Email</td>
										<td>Action</td>
									</tr>
								</thead>
						<?php foreach ($user as $value) { ?>
								<tbody>
									<tr class="odd gradeX">
										<td><?=$value['user_id'] ?></td>
										<td><?=$value['user_name'] ?></td>
										<td><?=$value['user_fullname'] ?></td>
										<td><?=$value['user_email'] ?></td>
										<td class="center">
											<a href="edit/<?= $value['user_id'] ?>" title="" class="btn btn-primary"><i class="fa fa-edit "></i> Sửa</a>
											<a href="info/<?= $value['user_id'] ?>" title="" class="btn btn-primary"><i class="fa fa-eye "></i> Xem</a>
											<a href="delete/<?= $value['user_id'] ?>" title="" class="btn btn-danger"><i class="fa fa-pencil"></i> Xóa</a>
										</td>
									</tr>
								</tbody>
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
				<!--End Advanced Tables -->
			</div>
		</div>
	</div>

</div>
<!-- /. PAGE INNER  -->