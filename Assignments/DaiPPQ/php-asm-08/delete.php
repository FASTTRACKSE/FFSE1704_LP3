<!DOCTYPE html>
<html>
	<head>
		<title></title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
		<div style="width: 30%; margin: auto;">
			<div>
				<h1>Delete User</h1>
			</div>
			<div class="bg-warning">
				<form  method="POST">
					<p  style="margin: 20px; color: red;">Are you sure you want to delete this user ?</p>
					<table>
						<div>
							<button type="submit" name="submit" class="btn btn-default" style="margin: 20px;">Yes</button>  
		            		<a href="index.php">
								<button type="button" class="btn btn-default">No</button>
							</a>
		        		</div>
					</table>		
				</form>
			</div>
		</div>
	</body>
</html>