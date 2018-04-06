<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			if (isset($_POST['submit'])) {
				require_once('libaries.php');
				$mysqli = connectDB('localhost','mido','0933237480','ffse1704002');

				$id = $_GET['id'];
				$sql = "DELETE FROM lms_users WHERE user_id = $id";
				$result = $mysqli->query($sql);
				
				header('Location: index.php');		

				//đống kết nối
				$mysqli -> close();
			}
		?>
		
		<h1 style=" margin-left: 375px;">Delete User</h1>
 		<hr style="width: 50%; margin: auto;">
		<form  method="POST"  style="width: 50%; margin: auto; background-color:#FFC0CB; ">
			<small id="emailHelp" class="form-text text-muted" style="font-size: 20px;margin: 25px;padding-top: 25px;">Are you sure you want to delete this user ?</small><br>
			<table>
				<div>
					<button type="submit" name="submit" class="btn btn-primary" style="margin: 30px;">Yes</button>  
            		<a href="index.php">
						<button type="button" class="btn btn-primary">No</button>
					</a>
        		</div>
			</table>		
		</form>
	</body>
</html>