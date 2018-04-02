
<form action="php-asm-bai4b.php" method="POST" enctype="multipart/form-data">
	<table border="0" width="500px" bordercolor="#FFFF99" bgcolor="#FFFF99" align="center" >
		<tr >
			<td colspan="2" bgcolor="#FF9900" align="center">Phiếu đăng nhập</td>
		</tr>
		<tr>
			<td width="111"><strong>Tên Đăng Nhập</strong></td>
			<td width="379"><input type="text" name="name" required></td>
			
		</tr>
		<tr>
			<td width="111"><strong>Mật khẩu</strong></td>
			<td width="379"><input type="password" name="pass" required></td>
			
		</tr>
		<tr>
			<td width="111"><strong>Họ và tên</strong></td>
			<td width="379"><input type="text" name="hoten" required></td>
			
		</tr>
		<tr>
			<td width="111"><strong>Ảnh đại diện</strong></td>
			<td width="379"><input type="file" name="fileanh"></td>
			
		</tr>
		<tr>
			<td width="111"><strong>Địa chỉ</strong></td>
			<td width="379">
				<select name="diachi" >
					<option value="Đà Nẵng">Đà Nẵng</option>
					<option value="Quảng NAm">Quảng NAm</option>
					<option value="Hội An">Hội An</option>
					<option value="Hà Nội">Hà Nội</option>
					<option value="Tp.HCM">Tp.HCM</option>

				</select>
			</td>
			
		</tr>
		<tr>
				<td><strong>Giới tính</strong></td>
				<td width="379">
				<select name="gioitinh" >
					<option value="Nam">Nam</option>
					<option value="Nữ">Nữ</option>
				</select>
				</td>
			</tr>
			<tr>
				<td><strong>Sở thích</strong></td>
				<td>
					<input type="checkbox" name="sothich[]"> xemphim<br>
					<input type="checkbox" name="sothich[]"> Nghe nhạc<br>
					<input type="checkbox" name="sothich[]">  Đọc báo<br>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					
					<input type="submit" name="post" value="Thực Hiện">
					<input type="reset" name="cancer" value="Hủy">
				
				</td>
			</tr>
	</table>
</form>

