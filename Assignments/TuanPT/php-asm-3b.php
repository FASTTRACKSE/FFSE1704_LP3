<?php
  $S=" ";
  $R=" ";
if(isset($_POST['submit'])){
    $R=$_POST['R'];
    define("pi",3.14);
    $S=pi*pow($R,2);
}
?>
<form action="" method="POST">
    <table width="300"  align="left" cellspacing="0" cellpadding="5" bordercolor="#009999">
        <tr align="left" bgcolor="##87CEFA">
            <td colspan="2" align="left">Diện tích hình tròn</td>
        </tr>
        <tr>
            <td width="99">Diện tích:</td>
            <td width="231"><label for="S"></label>
            <input type="text" name="S" value="<?= $S ?> " size="20" readonly="true"/></td>
        </tr>
        <tr>
            <td width="99">Bán kính:</td>
            <td width="231"><label for="R"></label>
            <input type="text" name="R" value="<?= $_POST[R]?> " size="20"/></td>
        </tr>
        <tr>
				<td colspan="2" align="left"><label>
				<input type="submit" name="submit" value="Submit">
				</label></td>
			</tr>
    </table>    
</form>