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
	<style>
	#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}</style

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
				<h3 class="properties" style="text-align: center">Check your inbox</h3>
			</section>
	</section>
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to delete this message?")){
				window.location.href ='delete_msg.php?id='+id;
			}
		}
	</script>
	<table id="customers">
	<tr>
	<th width="13"><input type="checkbox"/></th>
	<th>Sender</th>
	<th>Receiver</th>
	<th>Message content</th>
	<th>Time sent</th>
	<th>Status</th>
	<th width="110">Content control</th>
	</tr>
	<?php
	include 'dbconnect.php';
	$select="SELECT * FROM sma WHERE id_no='".$_SESSION['identityid']."'";
	$result=$con->query($select);
	while ($row=$result->fetch_assoc()){ ?>
	<tr>
	<td><input type="checkbox"/></td>
	<td><?php echo $row['name1']?></td>
	<td><?php echo $row['id_no']?></td>
	<td><?php echo $row['message']?></td>
	<td><?php echo $row['time']?></td>
	<td><a href="read_msg.php"><?php echo $row['status']?></a></td>
	<td><a href="javascript:sureToApprove(<?php echo $row['msg_id'];?>)">Delete</a></td>
	</tr>
	<?php
	}  ?>
	</table>
	
	</body>
	</html>