<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class = "main-wrapper">
		<h2>Sign-in</h2>
		<form class = "signup-form" action="includes/signup.inc.php" method = "POST">
			<input type="text" name="first" placeholder="Firstname">
			<input type="text" name="last" placeholder="Lastname">
			<input type="text" name="email" placeholder="Email">
			<input type="text" name="uid" placeholder="Username">
			<input type="password" name="pwd" placeholder="Password">
			<button type="submit" name="submit">Sign Up</button>
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="my1.jpg" alt="alternative sign-in options">
		</div>
		</form>
	</div>
</section>

<?php
	include_once 'footer.php';
?>