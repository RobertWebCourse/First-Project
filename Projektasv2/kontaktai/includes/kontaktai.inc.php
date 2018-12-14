<?php 
	if(isset($_POST['action'])) {
		include_once 'db.inc.php';
		$first = mysqli_real_escape_string($conn, $_POST['first']);
		$last = mysqli_real_escape_string($conn, $_POST['last']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$uid = mysqli_real_escape_string($conn, $_POST['uid']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


		if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
			header("Location: ../kontaktai.php?kontaktai=empty");
			exit();
		} else {
			if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
				header("Location: ../kontaktai.php?kontaktai=invalid");
				exit();
			} else {
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					header("Location: ../kontaktai.php?kontaktai=invalidemail");
					exit();
				} else {
					$sql = "SELECT * FROM klientai WHERE user_uid = '$uid'";
					$result = mysqli_query($conn, $sql);
					$result_check = mysqli_num_rows($result);
					if($result_check > 0) {
						header("Location: ../kontaktai.php?kontaktai=usertaken");
						exit();
					} else {
						$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
						$sql = "INSERT INTO klientai (user_first, user_last, user_email, user_uid, user_pwd) VALUES('$first', '$last', '$email', '$uid', '$hashedPwd');";
						mysqli_query($conn, $sql);
						header("Location: ../kontaktai.php?kontaktai=success");
						exit();
					}
				}
			}
		}

	} else {
		header("Location: ../kontaktai.php?kontaktai.php");
		exit();
	}
?>