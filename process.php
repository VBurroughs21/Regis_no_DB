<?php 
	session_start();

	$errors = array();

	if (isset($_POST['first_name']) && $_POST['first_name'] != null ) {
		if (is_numeric($_POST['first_name'])) {
			$errors[] = "Enter a valid First Name.";
		}
	} else {
		$errors[] = "Enter a valid First Name.";
	}

	if (isset($_POST['last_name']) && $_POST['last_name'] != null ) {
		if (is_numeric($_POST['last_name'])) {
			$errors[] = "Enter a valid last name.";
		}	
	} else {
		$errors[] = "Enter a last name.";
	}

	if (isset($_POST['email']) && $_POST['email'] != null ) {
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errors[] = "Enter a valid email address.";
		}
	} else {
		$errors[] = "Enter an email address.";
	}

	if (isset($_POST['password']) && $_POST['password'] != null ) {
		if (strlen($_POST['password']) <= 6) {
			$errors[] = "Password must be 7 or more characters.";
		}
	} else {
		$errors[] = "Enter a valid email address.";
	}

	if (isset($_POST['confirm_password']) && $_POST['confirm_password'] != null ) {
		if ($_POST['confirm_password'] != $_POST['password']) {
			$errors[] = "Passwords do not match.";
		}
	} else {
		$errors[] = "Confirm password";
	}

	if (isset($_POST['birth_date']) && $_POST['birth_date'] != null ) {
		// if (//valid birthdate) {
			// $errors[] = "Incorrect date (02/05/2013)";
		//}
	}

	$uploaded_pics = 'images/';


	if (isset($_POST['profile_pic']) && $_POST['profile_pic'] != null ) {
		if ($_FILES['profile_pic']['type'] == "image/gif") {
			move_uploaded_file($_POST['profile_pic'], $uploaded_pics);
		}
	}

	if (!empty($errors)) {
		$_SESSION['errors'] = $errors;
		header('Location: index.php');
	} else {
		echo "Thanks for submitting your information.";
	}

	
	
	die();

?>













