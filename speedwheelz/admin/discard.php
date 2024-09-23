<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
								include '../includes/config.php';
								$select = "SELECT * FROM bookings";
								$result = $conn->query($select);
								$row = $result->fetch_assoc();
									$booking_id =$row['booking_id'];

	$query = "UPDATE bookings SET status = '2' WHERE booking_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo 'Request has been Discarded';
	?>
		<meta content="4; client_requests.php" http-equiv="refresh" />
	<?php
	}
?>