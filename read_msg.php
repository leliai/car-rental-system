
	<?php
	include 'dbconnect.php';
	
	$query = "UPDATE sma SET status = 'read'";
	$result = $con->query($query);
	if($result === TRUE){
		echo 'message has Successfully been read';
	?>
		<meta content="4; retrieve.php" http-equiv="refresh" />
	<?php
	}
?>