<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Assignment 10</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    </head>
    <body>



        <h1 style="margin-left: 380px;">User List</h1> 
        <a href="<?= base_url() ?>index.php/Admin/Users/add"><button type="button" class="btn btn-success" style="float: right; margin-top:-45px;margin-right:385px; border: 1px; ">Add New User</button></a>
        <table class="table table-striped" style="width: 50%; margin: auto;">


            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
 <?php 
        $query = $this->db->get('lms_users');

        foreach ($query->result_array() as $row)
        {
?>
            <tr>
                <td><?= $row['user_id']; ?></td>
                <td><?= $row['user_name'] ?></td>
                <td><?= $row['user_fullname']; ?></td>
                <td><?= $row['user_email']; ?></td>
                <td>
                    <a href="<?= base_url() ?>index.php/Admin/Users/read/<?= $row['user_id']; ?>"  style="padding-right: 10px;"><span class="glyphicon glyphicon-eye-open"></span></a>
                    <a href="<?= base_url() ?>index.php/Admin/Users/update/<?= $row['user_id']; ?>" style="padding-right: 10px;"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a href="<?= base_url() ?>index.php/Admin/Users/delete/<?= $row['user_id']; ?>" ><span class="glyphicon glyphicon-trash"></span></a>
                </td>
            </tr>





   <?php
       
        } ?>




        </table>

     


        <nav class="navbar navbar-light bg-light">
          <form class="form-inline" method="GET">
            <input class="form-control mr-sm-2" type="text" placeholder="Search Name" name="search">
            <input class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit"></input>
        </form>
    </nav>

</body>
</html>