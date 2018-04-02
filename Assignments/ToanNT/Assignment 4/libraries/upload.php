<?php
    function upload($file){
        $name= time().$file['name'];
        $tmp_name= $file['tmp_name'];
        $path_root = $_SERVER['DOCUMENT_ROOT'];//C:/htdocs
        $path_upload= $path_root.'/Asm4/images/'.$name;
        if(move_uploaded_file($tmp_name, $path_upload)){
           return $name;
        }else{
            return 'false';
        }
   }
?>

