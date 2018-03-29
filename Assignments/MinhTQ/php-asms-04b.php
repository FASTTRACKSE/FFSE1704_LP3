<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            table {
                border-collapse: collapse;
            }
            table tr td,
            th {
                border: 1px solid black;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <h1>Danh sách tài khoản</h1>
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
                    <td>  <?= $value['tentaikhoan'] ?> </td>
                    <td>  <?= $value['hovaten'] ?> </td>
                    <td> <img style="width: 50px;height: 50px; padding-left: 20px;" src="<?='http://localhost/FFSE1704_LP3/Assignments/MinhTQ/img/'.$value['anhdaidien'] ?>"/></td>
                    <td>  <?= $value['gioitinh'] ?> </td>
                    <td>  <?= $value['diachi'] ?> </td>
                    <td> <a href="">Xóa </a> </td>
                </tr>

                <?php
            }
            ?>
        </table>
    </body>
</html>