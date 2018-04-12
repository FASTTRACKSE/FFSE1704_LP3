<div class="content-wrapper" style="min-height: 961px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Validation
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="form-validation.html#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="form-validation.html#">Forms</a></li>
        <li class="breadcrumb-item active">Form Validation</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     
     <!-- Basic Forms -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="card-title">Form Validation</h3>
          <h6 class="card-subtitle">Add new user <a href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col">
            	<form novalidate="" action="<?=base_url()?>index.php/admin/user/do_add" method="POST">
					<div class="form-group">
						<h5>Username <span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="text" name="username" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
						<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
					</div>
					<div class="form-group">
						<h5>Email Field <span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="email" name="email" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
					</div>
					<div class="form-group">
						<h5>Password Input Field <span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="password" name="password" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
					</div>
					<div class="form-group">
						<h5>Repeat Password Input Field <span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="password" name="password2" data-validation-match-match="password" class="form-control" required=""> <div class="help-block"></div></div>
					</div>
					<div class="form-group">
						<h5>File Input Field <span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="file" name="file" class="form-control" required=""> <div class="help-block"></div></div>
					</div>
					<div class="text-xs-right">
						<button type="submit" class="btn btn-info">Submit</button>
					</div>
				</form>
            	
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      
    </section>
    <!-- /.content -->
  </div>