
<body>



	<?php
		$name =" ";
		if (isset($_GET['post'])){	
			$name = $_GET['name'];
		}
	?>

	<form action="" method="GET">
		<table width="500" border="0" align="center" bordercolor="#FFFF99" bgcolor="#FFFF99">
			<tr>
				<td colspan="2" align="center" bgcolor="#FF9900"><h1 class="style1">In câu chào  </h1></td>
			</tr>
			<tr>
				<td width="111"><strong>Nhập tên </strong></td>
				<td width="379"><label>
				<input name="name" type="text"  value="<?php echo $name;?>" >
				</label></td>
			</tr>
			<tr>
				<td><strong>Xin Chào: <?php echo $name;?></strong></td>
				
			</tr>
			<tr>
				<td colspan="2" align="center"><label>
				<input type="submit" name="post" value="In câu chào">
				</label></td>
			</tr>
		</table>
	</form>
	<br>

	<?php
		$dien_tich = " ";
		$ban_kinh = " ";
		if(isset($_POST['ban_kinh'])){
			$ban_kinh=$_POST['ban_kinh'];
			define('PI',3.14);
			// cách khai báo giá trị mặc định ban đầu
			$dien_tich=PI*pow($ban_kinh,2);
			//pi nhan ban kinh binh phuong
			// pow = tính số mũ

		}
	?>
	<form method="post" action="">
		<table width="500" border="0" align="center" bordercolor="#FFFF99" bgcolor="#FFFF99">
			<tr>
				<td colspan="2" align="center" bgcolor="#FF9900"><h1 class="style1">Diện Tích Hình Tròn </h1></td>
			</tr>
			<tr>
				<td width="111"><strong>Bán Kính </strong></td>
				<td width="379"><label>
				<input name="ban_kinh" type="text"  value="<?php echo $ban_kinh;?>" />
				</label></td>
			</tr>
			<tr>
				<td><strong>Diện Tích Là: <?php echo $dien_tich;?> </strong></td>
				
			</tr>

			<tr>
				<td colspan="2" align="center"><label>
				<input type="submit" name="Submit" value="tính">
				</label></td>
			</tr>
		</table>
	</form>
	<br>
	
</body>
</html>