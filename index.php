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
	<style> 
div.img {
        margin: 5px;
		border: 1px solid #2cc;
		float:left;
		width: 200px;
		}
div.img:hover{
      border: 1px solid #477;
}
div.img img{
     width:100%;
	 height:"";
	 
}
div.desc {
      padding:15px;
	  text-align:center;
}
</style>
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
</nav>
<h2 style="text-align: center">Your Desired cars for hire</h2>
<h3 style="text-align: center">Upcoming Models-Latest cars - luxurious car - futuristic cars </h3>
<div class="container">

<div class="img">
<a target="_blank" href="img/1.jpg">
<img src="img/1.jpg" width="300" height=200">

</a>
<div class="desc">this is a nice car</div>
</div>
<div class="img">
<a target="_blank" href="img/2.jpg">
<img src="img/2.jpg" width="300" height=200">
</a>
<div class="desc">this is a nice car</div>
</div>
<div class="img">
<a target="_blank" href="img/3.jpg">
<img src="img/3.jpg" width="300" height=200">
</a>
<div class="desc">this is a nice car</div>
</div>
<div class="img">
<a target="_blank" href="img/4.jpg">
<img src="img/4.jpg" width="300" height=200">
</a>
<div class="desc">this is a nice car</div>
</div>
<div class="img">
<a target="_blank" href="img/5.jpg">
<img src="img/5.jpg" width="300" height=200">
</a>
<div class="desc">this is a nice car</div>
</div>
<div class="img">
<a target="_blank" href="img/6.jpg">
<img src="img/6.jpg" width="300" height=200">
</a>
<div class="desc">this is a nice car</div>
</div>
<div class="img">
<a target="_blank" href="img/7.jpg">
<img src="img/7.jpg" width="300" height=200">
</a>
<div class="desc">this is a nice car</div>
</div>
<div class="img">
<a target="_blank" href="img/8.jpg">
<img src="img/8.jpg" width="300" height=200">
</a>
<div class="desc">this is a nice car</div>
</div>
<div class="img">
<a target="_blank" href="img/9.jpg">
<img src="img/9.jpg" width="300" height=200">
</a>
<div class="desc">this is a nice car</div>
</div>
<div class="img">
<a target="_blank" href="img/10.jpg">
<img src="img/10.jpg" width="300" height=200">
</a>
<div class="desc">this is a nice car</div>
</div>
<div class="img">
<a target="_blank" href="img/11.jpg">
<img src="img/11.jpg" width="300" height=200">
</a>
<div class="desc">this is a nice car</div>
</div>
<div class="img">
<a target="_blank" href="img/12.jpg">
<img src="img/12.jpg" width="300" height=200">
</a>
<div class="desc">this is a nice car</div>
</div>
<div class="img">
<a target="_blank" href="img/13.jpg">
<img src="img/13.jpg" width="300" height=200">
</a>
<div class="desc">this is a nice car</div>
</div>
<div class="img">
<a target="_blank" href="img/14.png">
<img src="img/14.png" width="300" height=200">
</a>
<div class="desc">this is a nice car</div>
</div>
<div class="img">
<a target="_blank" href="img/15.jpg">
<img src="img/15.jpg" width="300" height=200">
</a>
<div class="desc">this is a nice car</div>
</div>
<div class="img">
<a target="_blank" href="img/16.jpg">
<img src="img/16.jpg" width="300" height=200">
</a>
<div class="desc">this is a nice car</div>
</div>
<div class="img">
<a target="_blank" href="img/17.jpg">
<img src="img/17.jpg" width="300" height=200">
</a>
<div class="desc">this is a nice car</div>
</div>
<div class="img">
<a target="_blank" href="img/18.jpg">
<img src="img/18.jpg" width="300" height=200">
</a>
<div class="desc">this is a nice car</div>
</div>
<div class="img">
<a target="_blank" href="img/19.jpg">
<img src="img/19.jpg" width="300" height=200">
</a>
<div class="desc">this is a nice car</div>
</div>
<div class="img">
<a target="_blank" href="img/20.jpg">
<img src="img/20.jpg" width="300" height=200">
</a>
<div class="desc">this is a nice car</div>
</div>
<div class="img">
<a target="_blank" href="img/21.png">
<img src="img/21.png" width="300" height=200">
</a>
<div class="desc">this is a nice car</div>
</div>
<div class="img">
<a target="_blank" href="img/22.jpg">
<img src="img/22.jpg" width="300" height=200">
</a>
<div class="desc">this is a nice car</div>
</div>
<div class="img">
<a target="_blank" href="img/23.jpg">
<img src="img/23.jpg" width="300" height=200">
</a>
<div class="desc">this is a nice car</div>
</div>
<div class="img">
<a target="_blank" href="img/24.jpg">
<img src="img/24.jpg" width="300" height=200">
</a>
<div class="desc">this is a nice car</div>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr><hr>
<footer>
		<div style="text-align:center;">

		
			Copyright &copy; 2017 All Rights Reserved | Designed by MBAGETHEI STEPHEN LELIAI.
		</div>
	</footer><!--  end footer  --><hr>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

