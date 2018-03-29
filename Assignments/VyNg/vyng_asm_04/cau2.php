<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>danh sách tài khoản</h1>
 <table>
            <tr>
                <th>TT</th>
                <th>Tên tài khoản</th>
                <th>Họ và tên</th>
                <th>Ảnh đại diện</th>
                <th>Giới tính</th>
                <th>Địa chỉ</th>
                <th>Chức năng</th>
            </tr>
            <?php
            session_start();

            $i = 0;
            foreach ($_SESSION as $value) {

                
                $i++;
                ?>
                <tr>
                    <td>  <?= $i ?> </td>
                    <td>  <?= $value['username'] ?> </td>
                    <td>  <?= $value['fullname'] ?> </td>
                    <td> <img style="width: 50px;height: 50px; padding-left: 20px;" src="<?='http://localhost/FFSE1704_LP3/Assignments/VyNg/vyng_asm_04/image/'.$value['avatar'] ?>"/></td>
                    <td>  <?= $value['gender'] ?> </td>
                    <td>  <?= $value['address'] ?> </td>
                    <td> <a href="">Xoa </a> </td>
                </tr>

                <?php
            }
            ?>
        </table>
</body>
</html>