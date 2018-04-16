<?php echo validation_errors(); ?>
<form action="" method="POST" enctype="multipart/form-data">
	<h3><?php $this->session->msg ?></h3>
	<table border="0" width="500px" bordercolor="#FFFF99" bgcolor="#FFFF99" align="center" >
		<tr >
			<td colspan="2" bgcolor="#FF9900" align="center">Phiếu đăng nhập</td>
		</tr>
		<tr>
			<td width="111"><strong>Tên Đăng Nhập</strong></td>
			<td width="379"><input type="text" name="username" ></td>
			
		</tr>
		<tr>
			<td width="111"><strong>Mật khẩu</strong></td>
			<td width="379"><input type="password" name="password" ></td>
			
		</tr>
		
				<td colspan="2" align="center">
					
					<input type="submit" name="post" value="Thực Hiện">
					<input type="reset" name="cancer" value="Hủy">
				
				</td>
			</tr>
	</table>
</form>