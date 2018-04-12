<div class="content-wrapper" style="min-height: 775px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="data.html#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="data.html#">Tables</a></li>
        <li class="breadcrumb-item active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
         
         <div class="box">
            <a href="<?=base_url()?>index.php/admin/user/add" class="btn btn-primary" >Add</a>
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="list_user1" class="table table-bordered table-striped table-responsive dataTable" role="grid" aria-describedby="example1_info">
                <thead>
					<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 169px;">ID</th>
						<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 266px;">Tên tài khoản</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 127px;">Họ tên</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 162px;">Hình ảnh</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 250px;">Chức năng</th>
				</thead>
				<tbody>			
				<tr role="row" class="odd">
						<td class="sorting_1">1</td>
						<td>ffse1701001</td>
						<td>No name</td>
						<td><img src=""/></td>
						<td><a href="" class="btn btn-primary">Sửa</a>
							<a href="" class="btn btn-danger">Xóa</a>
						</td>
				</tr>
				<tr role="row" class="even">
						<td class="sorting_1">2</td>
						<td>ffse1701002</td>
						<td>No name</td>
						<td><img src=""/></td>
						<td><a href="" class="btn btn-primary">Sửa</a>
							<a href="" class="btn btn-danger">Xóa</a>
						</td>
				</tr>
				<tr role="row" class="odd">
						<td class="sorting_1">3</td>
						<td>ffse1701003</td>
						<td>No name</td>
						<td><img src=""/></td>
						<td><a href="" class="btn btn-primary">Sửa</a>
							<a href="" class="btn btn-danger">Xóa</a>
						</td>
				</tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->      
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>