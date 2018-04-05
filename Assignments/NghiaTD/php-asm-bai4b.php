
<table border="1px" cellpadding="0" cellspacing="0"  >
            <tr bgcolor="#f6f6f6">
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
            $i=0;
            foreach ($_SESSION as $value) {
            	$i++;

            
             ?>
             <tr>
                    <td>  <?= $i ?> </td>
                    <td>  <?= $value['name'] ?> </td>
                    <td>  <?= $value['hoten'] ?> </td>
                    <td> <img style="width: 50px;height: 50px; padding-left: 20px;" src="<?='http://localhost/FFSE1704_LP3/Assignments/NghiaTD/img'.$value['fileanh'] ?>"/></td>
                    <td>  <?= $value['gioitinh'] ?> </td>
                    <td>  <?= $value['diachi'] ?> </td>
                    <td> <a href="v.php?id=$key">Xoa </a> </td>
                    
                </tr>
                <?php
            }

            
            ?>
 </table>