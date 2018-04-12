<!-- <h2><?= $id ?></h2>
<h3><?= $name ?></h3> -->

<form action="user.php" method="POST" enctype="multipart/form-data">
	<table border="0" width="500px" bordercolor="#FFFF99" bgcolor="#FFFF99" align="center" >
		<tr >
			<td colspan="2" bgcolor="#FF9900" align="center">Phiếu đăng nhập</td>
		</tr>
		<tr>
			<td width="111"><strong>Tên Đăng Nhập</strong></td>
			<td width="379"><input type="text" name="username" required></td>
			
		</tr>
		<tr>
			<td width="111"><strong>Mật khẩu</strong></td>
			<td width="379"><input type="password" name="password" required></td>
			
		</tr>
		
				<td colspan="2" align="center">
					
					<input type="submit" name="post" value="Thực Hiện">
					<input type="reset" name="cancer" value="Hủy">
				
				</td>
			</tr>
	</table>
</form>

<a href="<?php echo base_url(). 'index.php/' . $this->uri->segment(1). '/Home/' ?>">
	<?php echo $this->uri->segment(1) ?>
</a>
->
<a href="<?php echo base_url().'index.php/'.$this->uri->segment(1).'/'.$this->uri->segment(2) ?> ">
	<?php echo $this->uri->segment(2) ?>
</a>
->
<?php echo $this->uri->segment(3) ?>
