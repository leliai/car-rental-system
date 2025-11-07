<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
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
<section class="caption">
				<h2 class="caption" style="text-align: center">AFFORDABLE CARS FOR HIRE</h2>
				<h3 class="properties" style="text-align: center">SUV- SALOON - HATCHBACK</h3>
			</section>
			<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'dbconnect.php';
						$sel = "SELECT * FROM cars WHERE status = 'Available'";
						$rs = $con->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'Kshs.'.$rws['hire_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Car Make>'.$rws['car_type'];?></a>
						</h1>
						<h2>Car Name/Model: <span class="property_size"><?php echo $rws['car_name'];?></span></h2>
						<h2>vehicle registration number: <span class="property_size"><?php echo $rws['plate'];?></span></h2>
					</div>
				</li>
			<?php
				}
			?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->
<footer>
		<div style="text-align:center;">

		
			Copyright &copy; 2017 All Rights Reserved | Designed by MBAGETHEI STEPHEN LELIAI.
		</div>
	</footer><!--  end footer  --><hr>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>