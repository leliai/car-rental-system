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


	<section class="search">
		<div class="wrapper">
			<form action="#" method="post">
				<input type="text" id="search" name="search" placeholder="We are delighted of your move to pay"  autocomplete="off"/>
				<input type="submit" id="submit_search" name="submit_search"/>
			</form>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

		<div class="advanced_search">
			<div class="wrapper">
				<span class="arrow"></span>
				<form action="#" method="post">
					<div class="search_fields">
						<input type="text" class="float" id="check_in_date" name="check_in_date" placeholder="Check In Date"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="check_out_date" name="check_out_date" placeholder="Check Out Date"  autocomplete="off">
					</div>
					<div class="search_fields">
						<input type="text" class="float" id="min_price" name="min_price" placeholder="Min. Price"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="max_price" name="max_price" placeholder="Max. price"  autocomplete="off">
					</div>
					<input type="text" id="keywords" name="keywords" placeholder="Keywords"  autocomplete="off">
					<input type="submit" id="submit_search" name="submit_search"/>
				</form>
			</div>
		</div><!--  end advanced search section  -->
	</section><!--  end search section  -->


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<h3 style="text-decoration: underline">Make Payments Here</h3>
				<h5>Paybill Number: 98967</h5>
				<h6>Account: Pata Gari</h6>
				<form method="post">
					<table>
						<tr>
							<td>MPESA Transaction ID:</td>
							<td><input type="text" name="mpesa" required></td>
						</tr>
						<tr>
							<td>National ID Number:</td>
							<td><input type="text" name="id_no" value="<?php echo $_SESSION['identityid']; ?>"required></td>
						</tr>
						
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="pay" value="Submit Details"></td>
						</tr>
					</table>
				</form>
				<?php
						if(isset($_POST['pay'])){
							include 'dbconnect.php';
							$mpesa = $_POST['mpesa'];
							$id_no = $_POST['id_no'];
							
							$qry = "UPDATE client SET mpesa = '$mpesa' WHERE id_no = '$id_no'";
							$result = $con->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Payment Successfully Done. Wait for Admin Approval\");
											window.location = (\"wait.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"pay.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
			<div class="more_listing">
				<a href="#" class="more_listing_btn">Enjoy our services</a>
			</div>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		

		<div class="copyrights wrapper">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by stephen leliai mbagathei.
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>