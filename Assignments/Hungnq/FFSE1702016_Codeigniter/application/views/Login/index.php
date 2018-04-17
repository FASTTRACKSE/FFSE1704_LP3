<html>
<body>
	<?php echo validation_errors(); ?>
	<h3><?=$this->session->msg?></h3>
	<form method="post" action="">
		Tên đăng nhập: <input type="text" name="username">
		Mật khẩu: <input type="password" name="password">
		<button name="submit">Gửi</button>	
	</form>
</body>
</html>