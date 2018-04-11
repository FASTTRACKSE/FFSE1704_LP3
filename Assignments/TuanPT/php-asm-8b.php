<?php 
function connectDB($server,$username,$password,$database_name){
    $no_name = new mysqli($server,$username,$password,$database_name);
    $no_name->set_charset("utf8");
    if($no_name->connect_errno){
    echo"Kết nối bị lỗi:".$no_name->connect_error();
}
    return $no_name;
}
?>