<?php
	include 'dbconnect.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM sma WHERE msg_id = '$id'";
	$result = $con->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Message Successfully Send\");
					window.location = (\"retrieve.php\")
				</script>";
	}
?>
