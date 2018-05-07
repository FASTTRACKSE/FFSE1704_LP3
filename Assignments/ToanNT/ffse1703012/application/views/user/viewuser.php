<!DOCTYPE html>
<html>
<head>
	<title>Chi tiết người dùng</title>
</head>
<body>
<div>
	<h1>Thông tin Người Dùng</h1>
	<form action="" method="POST">
		<?php foreach($user as $u){  		 ?>
		<input type="hidden" name="id" ><!-- value="<?php echo $u['id']; ?>" -->
		<div class="col-md-6">
	<table class="table table-bordered table-condensed" style="border-color: black;border: 1px">
		<tr>
			<td>Username</td>
			<td><p><?php echo $u['username']; ?></p></td>
		</tr>
		<tr>
			<td>First Name</td>
			<td><p><?php echo $u['firstname']; ?></p></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><p><?php echo $u['lastname']; ?></p></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><p><?php echo $u['email']; ?></p></td>
		</tr>
		<?php } ?>

	</table>
		<a href="<?php echo base_url();?>index.php/user/index"><input type="button" value="Trở về"></a>
</div>
</body>
</html>