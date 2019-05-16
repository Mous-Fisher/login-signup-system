<?php
if(isset($_POST['submit'])){
	include_once "dbh.inc.php";

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//error handlers
	if(empty($first)||empty($last)||empty($email)||empty($uid)||empty($pwd)){
		header("Location: ../signup.php?signup=empty");
		exit();
	}else{
		//check the characters
		if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
			header("Location: ../signup.php?signup=name");
			exit();
		}else{
			//check email
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: ../signup.php?signup=email");
				exit();
			}else{
				//check if the user already exist
				$sql = "SELECT * FROM users WHERE user_uid='$uid'";
				$result = mysqli_query($conn, $sql);
				$checkResult = mysqli_num_rows($result);
				if($checkResult > 0){
					header("Location: ../signup.php?signup=user");
					exit();
				}else{
					//hash password
					$hashedPass = password_hash($pwd, PASSWORD_DEFAULT);
					//insert user into the DB
					$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
					VALUE ('$first','$last','$email','$uid','$hashedPass');";
					mysqli_query($conn, $sql);
					header("Location: ../signup.php?signup=success");
					exit();
				}
			}
		}
		}
	}else{
		header ("Location: ../signup.php?tryagain");
		exit();
}










