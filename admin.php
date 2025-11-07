<?php session_start(); ?>
<?php include('admin/dbcon.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Login Script</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Pata Gari Online Car Rental System</a>
		</div>
		<!-- menu items -->
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="admin.php">admin Login</a></li>
				
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="" method="post" name="loginform">
				<fieldset>
					<legend>administrator Login</legend>
					
					<div class="form-group">
						<label for="name">username</label>
						<input type="text" name="username" placeholder="Your admin username" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Password</label>
						<input type="password" name="password" placeholder="Your Password" required class="form-control" />
					</div>

					<div class="form-group">
						<input type="submit" name="login" value="Login" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<?php
	if (isset($_POST['login']))
		{
			$email = mysqli_real_escape_string($con, $_POST['username']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$query = mysqli_query($con, "SELECT * FROM admin WHERE username = '" . $email. "' and password = '" . md5($password) . "'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['admin_id']=$row['admin_id'];
					echo "<script type = \"text/javascript\">
									alert(\"Login Successful.................\");
									window.location = (\"admin/dashboard.php\")
									</script>";
					
				}
			else
				{
					echo 'Invalid Username and Password Combination';
				}
		}
  ?>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		
		</div>
	</div>
</div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
