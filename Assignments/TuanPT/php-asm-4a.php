<body>
    <?php 
session_start();


if(isset($_POST['submit'])){
    $namefile='avt';
    $username= $_POST['username'];
    $password=$_POST['password'];
    $fullname=$_POST['fullname'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $favorite=$_POST['sothich'];
   
            $name = $_FILES['avt']['name'];
        	
        	$arname = explode('.', $name);
        	$duoifile = end($arname);
        	$newname = time();
        	$namenew = $newname.'.'.$duoifile;
        	$tmp_name = $_FILES['avt']['tmp_name'];

        	$part = $_SERVER['DOCUMENT_ROOT'];
        	$part_upload = $part.'/FFSE1704_LP3/Assignments/TuanPT/images/'.$namenew;

        	move_uploaded_file($tmp_name, $part_upload);  
            
           
            if($name!='false'){
                $_POST['avt']=$namenew;
            }else{
                $_POST['avt']="";
            }           
            
            $_SESSION[$username]=$_POST;
            
           
            header("location: php-asm-4b.php");
        
    }
    
    ?>
    
    
    <form action='php-asm-4b.php' method = 'POST' enctype="multipart/form-data">
    <table border="1" >
        <tr>
            <td colspan="2" align="center"><h1>Đăng kí tài khoản</h1></td>
        </tr>
        <tr>
            <td width="150"><strong>Tên đăng nhập(*)</strong></td>
            <td width="380">
                <input type="text" name="username" required>
            </td>
        </tr>
        <tr>
            <td width="150"><strong>Mật khẩu(*)</strong></td>
            <td width="380">
                <input type="password" name="password" required>
            </td>
        </tr>
        <tr>
            <td width="150"><strong>Họ và tên(*)</strong></td>
            <td width="380">
                <input type="text" name="fullname" required>
            </td>
        </tr>
        <tr>
            <td width="150"><strong>Ảnh đại diện(*)</strong></td>
            <td width="380">
                <input type= 'file' name="avt" value="Chọn tệp"/>
            </td>
        </tr>
        <tr>
            <td width="150"><strong>Địa chỉ</strong></td>
            <td width="380" name="address">
                <select>
                    <option value=”92″>Quảng Nam</option>
                    <option value=”43″>Đà Nẵng</option>
                    <option value=”75″>Thừa Thiên - Huế</option>
                    <option value=”77″>Bình Định</option>
                    <option value=”47″>Đăk Lăk</option>
                 </select>
            </td>
        </tr>
        <tr>
            <td><strong>Giới tính</strong></td>
            <td width="380">
                <input type="radio" name="gender" value="Nam"/>Nam<br>
                <input type="radio" name="gender" value="Nữ"/>Nữ
            </td>
        </tr>
        <tr>
            <td><strong>Sở thích</strong></td>
            <td width="380">
                <input type="checkbox" name="sothich" value="Xem phim"/>Xem phim<br>
                <input type="checkbox" name="sothich" value="Nghe nhạc"/>Nghe nhạc<br>
                <input type="checkbox" name="sothich" value="Đọc báo"/>Đọc báo
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <label>
                    <input type="submit" name="submit" value="Xác nhận"/>
                    <input type="reset" name="cancer" value="Hủy">
                </label>
            </td>
        </tr>
    </table>
    </form>
</body>
