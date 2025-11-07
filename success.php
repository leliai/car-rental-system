<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<title>Home | Pata Gari</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
     <link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Pata Gari Online Car Rental System</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text">Signed in as: <?php echo $_SESSION['usr_name']; ?></p></li>
				<li><p class="navbar-text">National ID:<?php echo $_SESSION['identityid']; ?></p></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
				<li><a href="login.php">Client Login</a></li>
				<li><a href="admin.php">Admin Login</a></li>
				<li><a href="register.php">Sign Up</a></li>
				<li><a href="website/index.html">companies website</a></li>
				
				<?php } ?>
			</ul>
		</div>
	</div>
	<?php
			include 'header.php';
		?>
</nav>


	<section class="listings">
		<div class="wrapper">
		<h2 style="text-align: center; color:#CC0000">Thank you for enquiring or giving a feedback.Our team will either call or inbox you</h2>
			<ul class="properties_list">
			
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		

		<div class="copyrights wrapper">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by Stephen leliai mbagathei.
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>