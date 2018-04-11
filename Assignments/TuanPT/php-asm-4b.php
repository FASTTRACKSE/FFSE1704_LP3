<h1>Danh sách tài khoản</h1>
<table border="1" cellspacing=0 cellpading=0>
	<tr align="center">
		<th>TT </th>
		<th>Tên tài khoản </th>
		<th>Họ và tên</th>
		<th>Ảnh đại diện</th>
		<th>Giới tính </th>
        <th>Địa chỉ</th>
        <th>Chức năng</th>
	</tr>
    <?php
        session_start();
        $i=0;
        foreach($_SESSION as $value){
        $i++;
            
    ?>
	 <tr>
         
        <td>  <?= $i ?> </td>
        <td>  <?= $value['username'] ?> </td>
        <td>  <?= $value['fullname'] ?> </td>
        <td> <img style="width: 50px;height: 50px; padding-left: 20px;" src="<?='FFSE1704_LP3/Assignments/TuanPT/images/'.$value['avatar'] ?>"/></td>
        <td>  <?= $value['gender'] ?> </td>
        <td>  <?= $value['address'] ?> </td>
        <td> <a href="">Xóa </a> </td>
    </tr>
    <?php } ?>


</table>