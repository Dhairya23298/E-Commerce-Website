<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class = "main-wrapper">
		<h2>Home</h2>
		<?php
			if(isset($_SESSION['u_id'])){
				echo "You are logged in ";
				#ob_start();
			    #header('Location: C:/xampp/htdocs/loginsystem/E-Commerce/index1.php');
			    #ob_end_flush();
    			#exit(); 
			}
		?>
	</div>
</section>

<?php
	include_once 'footer.php';
?>