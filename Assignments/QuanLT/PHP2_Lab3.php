<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$FFSE1701 = array(
    array(
        'id' => 1,
        'name' => "Nguyen Van A",
        'lp0' => 2,
        'lp1' => 1,
        'lp2' => 0
    ), array(
        'id' => 2,
        'name' => "Nguyen Van B",
        'lp0' => 8,
        'lp1' => 9,
        'lp2' => 0
    ), array(
        'id' => 3,
        'name' => "Nguyen Van C",
        'lp0' => 9.5,
        'lp1' => 8,
        'lp2' => 9
    )
);
?>
<html>
    <table border="1" cellpadding="15" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>LP0</th>
            <th>LP1</th>
            <th>LP2</th>
            <th>Tong diem</th>
            <th>Xep loai</th>
        </tr>
        <?php
        foreach ($FFSE1701 as $key => $value) {
            ?>
            <tr>
                <td><?php echo $value['id'] ?></td>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['lp0'] ?></td>
                <td><?php echo $value['lp1'] ?></td>
                <td><?php echo $value['lp2'] ?></td>
                <td><?php echo $dtb = ROUND((($value['lp2'] + $value['lp1'] + $value['lp0']) / 3),2) ?></td>
                <td><?php
                    if ($dtb < 5) {
                        echo "Yeu";
                    } elseif ($dtb > 5 && $dtb <= 8.5) {
                        echo "Trung Binh";
                    } else {
                        echo "Gioi";
                        
                    }
                    ?></td>
            <?php }
            ?>            
        </tr>
    </table>
</html>
