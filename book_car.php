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
			<ul class="properties_list">
			<?php
						include 'dbconnect.php';
						$sel = "SELECT * FROM cars WHERE car_id = '$_GET[id]'";
						$rs = $con->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span  class="price"><?php echo 'Kshs.'.$rws['hire_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Car Make>'.$rws['car_type'];?></a>
						</h1>
						<h2>Car Name/Model: <span class="property_size"><?php echo $rws['car_name'];?></span></h2>
						<h2>Vehicle registration number: <span class="property_size"><?php echo $rws['plate'];?></span></h2>
					</div>
				</li>
				<h3>Proceed to Hire <?php echo $rws['car_name'];?>. </h3>
				<?php
					if(!$_SESSION['email'] && (!$_SESSION['pass'])){
				?>
				<form method="post">
					<table>
						<tr>
							<td>Full Name:</td>
							<td><input type="text" name="fname" value="<?php echo $_SESSION['usr_name']; ?>" required></td>
						</tr>
						<tr>
							<td>Car model:</td>
							<td><input type="text" name="model" value="<?php echo $rws['car_name'];?>" required></td>
						</tr>
						<tr>
							<td>Car registration number:</td>
							<td><input type="text" name="plate" value="<?php echo $rws['plate'];?>" required></td>
						</tr>
						
						<tr>
							<td>Number of days:</td>
							<td class="pri"><input type="text" name="days" required></td>
						</tr>
						<tr>
							<td>Total price:</td>
							<td><input type="text" name="totalprice" value=""required></td>
						</tr>
						<tr>
							<td>Phone Number:</td>
							<td><input type="text" name="phone" required></td>
						</tr>
						<tr>
							<td>Email Address:</td>
							<td><input type="email" name="email"  required></td>
						</tr>
						<tr>
							<td>ID Number:</td>
							<td><input type="text" name="id_no" value="<?php echo $_SESSION['identityid']; ?>"required></td>
						</tr>
						<tr>
							<td>Gender:</td>
							<td>
								<select name="gender">
									<option> Select Gender </option>
									<option> Male </option>
									<option> Female </option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Location:</td>
							<td><input type="text" name="location" required></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="save" value="Submit Details"></td>
						</tr>
					</table>
				</form>
				<?php
					} else
						{
							?>
								<a href="pay.php">Click to Book</a>
							<?php
						}
				?>
				<?php
						if(isset($_POST['save'])){
							include 'dbconnect.php';
							$fname = $_POST['fname'];
							$id_no = $_POST['id_no'];
							$model=$_POST['model'];
							$days=$_POST['days'];
							$totalprice=$_POST['totalprice'];
							$plate=$_POST['plate'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$location = $_POST['location'];
							
							$qry = "INSERT INTO client (fname,id_no,plate,model,days,totalprice,gender,email,phone,location,car_id,status)
							VALUES('$fname','$id_no','$plate','$model','$days','$totalprice','$gender','$email','$phone','$location','$_GET[id]','Pending')";
							$result = $con->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered. Proceed to pay\");
											window.location = (\"pay.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"book_car.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		

		<div class="copyrights wrapper">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by mbagathei stephen leliai.
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>