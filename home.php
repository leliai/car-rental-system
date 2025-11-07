<?php 
include('admin/dbcon.php');
include('admin/session.php'); 

$result=mysqli_query($con, "select * from admin where admin_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>

<html>
<head>

<title>Home | Pata Gari</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />

	
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


    <center><h3>Welcome: <?php echo $row['name']; ?> </h3></center>
	 
    <li><a href="adminlogout.php">Log Out</a></li>
				</ul>
		</div>
	</div>
</nav>

 <footer>
		<div style="text-align:center;">

		
			Copyright &copy; 2017 All Rights Reserved | Designed by MBAGETHEI STEPHEN LELIAI.
		</div>
	</footer><!--  end footer  --><hr> 


</body>
</html>