<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
 	<nav>
 		<div class = "main-wrapper">
 			<ul>
 				<li><a href="E-Commerce/index.html">Home</a></li>
 			</ul>
 			<div class = "nav-login">
 				<?php
 					if (isset($_SESSION['u_id'])) {
 						echo '<form action="includes/logout.inc.php" 	method="POST">
 							  <button type = "submit" name="submit">Logout</button>
 							  </form>';
 					}
 					else{
 						echo '<form action="includes/login.inc.php" method="POST">
 							<input type="text" name="uid" placeholder="Username/Email">
 							<input type="password" name="pwd" placeholder="Password">
 							<button type="submit" name="submit">LogIn</button>
 							</form>';
 					}
 				?>
 				<a href="signup.php">SignUp</a>
 			</div>
 		</div>
 	</nav>
</header>