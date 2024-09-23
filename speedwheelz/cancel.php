<?php
	include 'includes/config.php';
	$id = $_REQUEST['id'];
								include 'includes/config.php';
								$select = "SELECT * FROM bookings";
								$result = $conn->query($select);
								$row = $result->fetch_assoc();
									$booking_id =$row['booking_id'];
						
	$query = "UPDATE bookings SET status = '3' WHERE booking_id = '$id'";
	$result = $conn->query($query);

	if($result === TRUE){
		echo 'Request has been Cancelled';
	?>
		<meta content="4; status.php" http-equiv="refresh" />
	<?php
	}
?>