
<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];

	
	include '../includes/config.php';
	$sel = "SELECT * FROM client WHERE client_id ='$id'";
	$rs = $conn->query($sel);
	$rws = $rs->fetch_assoc()
							;
						
	if($rws['status']=='1'){
		$query = "UPDATE client SET status = '0' WHERE client_id = '$id'";
		$result = $conn->query($query);
		echo 'User has been banned!';
	}else{
		$query = "UPDATE client SET status = '1' WHERE client_id = '$id'";
	$result = $conn->query($query);
	echo 'User has been un-banned!';
	}

	


	if($result === TRUE){
		echo 'Do not refresh the page. You will automatically redirect!';
	?>
		<meta content="4; view-users.php" http-equiv="refresh" />
	<?php
	}
?>
