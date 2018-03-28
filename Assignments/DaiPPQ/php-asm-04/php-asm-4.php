<form action="php-asm-4b.php" method="POST" enctype="multipart/form-data">
	<table border="1px" cellspacing="0px" width="50%">
	<tr>
		<div>
			<th colspan="2" style="text-align: left; background: #dfdfdf">Đăng ký tài khoản</th>
		</div>
	</tr>
	<tr>
		<td>Tên đăng nhập (*)</td>
		<td>
			<input type="text" name="username">
		</td>
	</tr>
	<tr>
		<td>Mật khẩu (*)</td>
		<td>
			<input type="text" name="password">
		</td>
	</tr>
	<tr>
		<td>Họ và tên (*)</td>
		<td>
			<input type="text" name="fullname">
		</td>
	</tr>
	<tr>
		<td>Ảnh đại diện (*)</td>
		<td>
			<input type="file" name="avatar" value="Chọn tệp">
		</td>
	</tr>
	<tr>
		<td>Địa chỉ (*)</td>
		<td>
			<select name="address">
				<option>Hà Nội</option>
				<option>Đà Nẵng</option>
				<option>Hồ Chí Minh</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Giới tính</td>
		<td>
			<input type="radio" name="gender" value="Nam" checked>Nam<br>
			<input type="radio" name="gender" value="Nữ">Nữ
		</td>
	</tr>
	<tr>
		<td>Sở thích</td>
		<td>
			<input type="checkbox" value="Xem phim" name="favorite[]" checked>Xem phim<br>
			<input type="checkbox"  value="Nghe nhạc" name="favorite[]">Nghe nhạc<br>
			<input type="checkbox" value="Đọc báo" name="favorite[]">Đọc báo
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			<input type="submit" name="submit" value="Xác nhận"> 
			<input type="reset" name="cancel" value="Hủy bỏ">
		</td>
	</tr>
	
</table>
</form>
