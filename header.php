<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Login | Signup</title>
<link rel="shortcut icon" type="image/png" href="imgs/favicon.png"/>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<body>
<header>
<nav>
	<div class="main-wrapper">
		<ul>
		<li><a href="index.php">Home</a></li>
		</ul>
		<div class="nav-login">
		<?php
			if(isset($_SESSION['u_id'])){
				echo '<form method="POST" action="includes/logout.inc.php">
					<button type="submit" name="submit">LogOut</button>
					</form>';
			}else{
				echo '<div class="nav-login">
						<form method="POST" action="includes/login.inc.php">
							<input type="text" name="uid" placeholder="UserName">
							<input type="text" name="pwd" placeholder="Password">
							<button type="submit" name="submit">LogIn</button>
						</form>
						<a href="signup.php">SignUp</a>
					</div>';
				}
		?>
		</div>
	</div>
</nav>
</header>