<?php session_start(); ?>

<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Registration without DB</title>
		<style type="text/css">
			/*h1, p {
				text-align: center;
			}*/
			input {
				display: block;
				width: 500px;
				height: 40px;
				font-size: 20px;
				margin-bottom: 5px;
			}
			.errors {
				background-color: #ffffe0;
			}
		</style>
	</head>
	<body>
		<h1>Registration</h1>
		<p>(* are fields that are required)</p>
			<?php 
				if (isset($_SESSION['errors'])) {
					foreach ($_SESSION['errors'] as $error) {
						echo $error. "<br>";
					}
					$_SESSION = array();
				}
			?>
			<form method="post" action="process.php" enctype="multipart/form-data">
					First Name: * <input type='text' name='first_name'>
					Last Name: * <input type='text' name='last_name'>
					Email: * <input type='text' name='email'>
					Password: *<input type='password' name='password'>
					Confirm Password: *<input type='password' name='confirm_password'>
					Birth Date: <input type='date' name='birth_date'>
					Profile Picture: <input type='file' name='profile_pic'>
					<input type="submit">
			</form>
	</body>
</html>
























