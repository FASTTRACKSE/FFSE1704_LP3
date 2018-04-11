<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
           <style type="text/css">
        .wrapper{
            width: 700px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 20px;
        }
        table tr th {text-align: center;}
    </style>
    </head>
    <body >
        <div class="wrapper">
        <div class="col-md-12">
        <div class="container-fluid">
                        <div class="page-header clearfix">
                           <h2 class="pull-left"><b>Users List</b></h2>
                           <a href="add.php" class="btn btn-success pull-right">Add New User</a>
                        </div>
        </div>
    <?php
        require_once('php-asm-8b.php');       
        $per_page=5     ;
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            if($page<0){
                $page=1;
            }
        }else{
            $page=1;
        }
        $current_page= ($page-1)*$per_page;
        if(isset($_GET['search'])){
            $search = $_GET['search'];
        }else{
            $search = '';
        }
        $MYSQLi = connectDB('localhost','tuanpt','123456','masinhvien');
        $sql1 = "SELECT * FROM lms_users WHERE user_fullname LIKE '%$search%'";
        $result1 = $MYSQLi -> query($sql1);
        $total_rows= $result1->num_rows;
        $rows= ceil($total_rows/$per_page);
        $SQL = "SELECT * FROM lms_users WHERE user_fullname LIKE '%$search%' LIMIT $current_page,$per_page";
        $result = $MYSQLi -> query($SQL);
    ?>
<form action='' method="GET">
    <input type = "text" name='search' value='<?=$search?>' placeholder="Tim kiem"/>
</form>

<table  class='table table-bordered '>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Fullname</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
<?php
    while ($arTT=$result ->fetch_assoc()) {
        # code... 
?>
    <tr>
        <td><?= $arTT['user_id']?></td>
        <td><?= $arTT['user_name']?></td>
        <td><?= $arTT['user_fullname']?></td>
        <td><?= $arTT['user_email']?></td>
        <td> 
            <a href="http://localhost/FFSE1704_Lp3/assignments/TuanPT/info.php?id=<?= $arTT['user_id']?>"><span class="glyphicon glyphicon-eye-open"></span></a>
            <a href="http://localhost/FFSE1704_Lp3/assignments/TuanPT/edit.php?id=<?= $arTT['user_id']?>"><span class="glyphicon glyphicon-pencil"> </span> </a>
            <a href="http://localhost/FFSE1704_Lp3/assignments/TuanPT/delete.php?id=<?= $arTT['user_id']?>"><span class="glyphicon glyphicon-trash"> </span></a>
        </td>      
    </tr>
<?php
}
$MYSQLi->close();
?>



</table>


<ul>
        <?php for($i=1;$i<=$rows;$i++){ ?>
            <li> <a href="http://localhost/FFSE1704_Lp3/php-asm-08.php?page=<?=$i?>&search=<?=$search?>"> Trang <?=$i?></a> </li>
        <?php } ?>
        <?php
            if($page>1&&$page<$rows){
        ?>
                <a href="http://localhost/FFSE1704_Lp3/php-asm-08.php?page=<?=$page+1?>&search=<?=$search?>"> next 
                <a href="http://localhost/FFSE1704_Lp3/php-asm-08.php?page=<?=$page-1?>&search=<?=$search?>"> previous 
        <?php   
            }elseif($page==$rows){
        ?>
                <a href="http://localhost/FFSE1704_Lp3/php-asm-08.php?page=<?=$page-1?>&search=<?=$search?>"> previous 
            <?php 
            }else{
            ?>
                <a href="http://localhost/FFSE1704_Lp3/php-asm-08.php?page=<?=$page+1?>&search=<?=$search?>"> next 
                <?php
            }
        ?>
</ul>


</div>

</div>

    </body>

</html>