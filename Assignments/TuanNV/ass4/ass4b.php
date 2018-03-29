+<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Danh sách tài khoản</title>
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
                    <td>  <?= $value['username'] ?> </td>
                    <td>  <?= $value['fullname'] ?> </td>
                    <td> <img style="width: 50px;height: 50px; padding-left: 20px;" src="<?='http://localhost/FFSE1702_LP1/images/'.$value['avatar'] ?>"/></td>
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