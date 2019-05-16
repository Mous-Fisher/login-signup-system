<?php include "header.php"?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Sign Up</h2>
		<form class="signup-form" method="POST" action="includes/signup.inc.php">
			<input type="text" name="first" placeholder="firstName">
			<input type="text" name="last" placeholder="LastName">
			<input type="email" name="email" placeholder="Email">
			<input type="text" name="uid" placeholder="UserName">
			<input type="password" name="pwd" placeholder="Password">
			<button type="submit" name="submit">SignUp</button>
		</form>
	</div>
</section>