<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment PHP 4</title>
</head>
<body>
	

	<form method="post" action="php-asm-04b.php" enctype="multipart/form-data">
		<table width="500" border="0" align="center" bordercolor="#FFFF99" bgcolor="#FFFF99">
			<tr>
				<td colspan="2" align="center" bgcolor="#FF9900"><h1 class="style1">Phiếu Đăng Nhập </h1></td>
			</tr>
			<tr>
				<td width="111"><strong>Tên Đăng Nhập </strong></td>
				<td width="379">
				<input name="name" type="text"  value="" >
				</td>
			</tr>
			<tr>
				<td><strong>Mật Khẩu</strong></td>
				<td width="379">
				<input name="pass" type="password"  value="" >
				</td>
			</tr>
			<tr>
				<td><strong>Họ và tên</strong></td>
				<td width="379">
				<input name="hoten" type="text"  value=" " >
				</td>
			</tr>
			<tr>
				<td><strong>Ảnh đại diện </strong></td>
				<td width="379">
				<input name="0410DT" type="file"  value="" >
				</td>
			</tr>
			<tr>
				<td><strong>Địa chỉ </strong></td>
				<td width="379">
				<select name="diachi" >
					<option value="Hà Nội">Hà Nội</option>
					<option value="Thanh Hóa">Thanh Hóa</option>
					<option value="Đà Nẵng">Đà Nẵng</option>
					<option value="TP.HCM">TP.HCM</option>
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
				<td><strong>Sở thích </strong></td>
				<td width="379">
				<input name="xem phim" type="checkbox"  value=" " >Xem Phim<br>
				<input name="xemphim" type="checkbox"  value=" " >Nghe Nhạc<br>
				<input name="docbao" type="checkbox"  value=" " >Đọc Báo<br>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><label>
				<input type="submit" name="post" value="Thực Hiện">
				<input type="reset" name="cancer" value="hủy">
				</label></td>
			</tr>
		</table>
	</form>
</body>
</html>