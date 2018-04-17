<!DOCTYPE html>
<html>
<head>
	<title>Read</title>
</head>
<body>
	<a href="<?php echo base_url() . 'index.php/' . $this->uri->segment(1). '/home/' ?>">
		<?php echo $this->uri->segment(1) ?>
	</a>->

	<a href="<?php echo base_url() . 'index.php/' . $this->uri->segment(1). '/users/' ?>">
		<?php echo $this->uri->segment(2) ?>
	</a>->

	<a href="<?php echo base_url() . 'index.php/' . $this->uri->segment(1). '/users/add' ?>">
		<?php echo $this->uri->segment(3) ?>
	</a>
	<?php echo isset($error) ? $error :''; ?>
	<?php echo form_open("Admin/home/read"); ?>
	<table cellpadding="2" cellspacing="2" border="0">
		<tr>
			<td>Name</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="Password" name="password"></td>
		</tr>
		<tr>
			<td><button>Submit</button></td>
		</tr>
	</table>
	<?php echo form_close(); ?>
</body>
</html>