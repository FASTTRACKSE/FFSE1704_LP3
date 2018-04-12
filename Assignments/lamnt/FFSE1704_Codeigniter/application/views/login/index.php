<html>
<?php echo validation_errors(); ?>
	<h3><?=$this->session->msg ?></h3>
	<form action='' method="POST">
		Username: <input name='username' type="text">
		Username: <input name='password' type="password">
		<input type='submit' name='login' value='login'>
	</form>

</html>