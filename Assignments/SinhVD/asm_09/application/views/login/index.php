<html >
<?php echo validation_errors();?>
<h3><?php echo $this->session->mgs ?></h3>
	<form action="" method="post">
		username:
		<input type="text" name="username">
		passwork:
		<input type="password" name="passwork">
		<input type="submit" name="login" value="login">
	</form>
</html>