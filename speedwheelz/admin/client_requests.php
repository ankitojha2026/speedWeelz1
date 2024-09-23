<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to Approve this request?")){
				window.location.href ='approve.php?id='+id;
			}
		}
		function sureToDiscard(id){
			if(confirm("Are you sure you want to Discard this request?")){
				window.location.href ='discard.php?id='+id;
			}
		}
	</script>
</head>
<body class="bg-[url('../img/bg/handle.jpg')] bg-cover no-repeat">
<!-- Header -->
<div id="header">
	<div class="">
	<div class="shell">
		<?php
			include 'menu.php';
		?>
		</div>
		<!-- End Main Nav -->
	</div>
	</div>
</div>
<div id="container">
	<div class="p-20">
	<div class="small-nav bg-orange-600 rounded-3xl p-3 font-bold text-white">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Client Requests
		</div>
		<br />
		<div id="main">
			<div class="cl">&nbsp;</div>
			<div id="content">
				<div class="box rounded-3xl">
					<!-- Box Head -->
					<div class="box-head rounded-xl bg-black">
						<h2 class="left">Client Requests</h2>
						<div class="right">
							<label>Search Requests</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="search" />
						</div>
					</div>
					<div class="table">
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<th width="13"><input type="checkbox" class="checkbox" /></th>
								
								<th>Client Email</th>
								<th>Vehicle Booked</th>
								<th>Vehicle Type</th>
								<th>Booking ID</th>
								<th>Price Paid</th>
								<th>Status</th>
								<th width="110" class="ac">Control</th>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM bookings";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td><h3><a href="#"><?php echo $row['bookedby'] ?></a></h3></td>
								
								<td><?php echo $row['car_model'] ?></td>
								<td><?php echo $row['car_type'] ?></td>
								<td><a href="#"><?php echo $row['booking_id'] ?></a></td>
								<td><a href="#"><?php echo $row['pricepaid'] ?></a></td>
								<td><a href="#"><?php echo $row['status'] ?></a></td>
								<td><a href="javascript:sureToApprove(<?php echo $row['booking_id'];?>)" class="ico del">Approve</a><a href="javascript:sureToDiscard(<?php echo $row['booking_id'];?>)" class="ico edit">DISCARD</a></td>
							</tr>
							<?php
								}
							?>
						</table>
					</div>
					<h2 class="text-center p-2 m-1 bg-green-300 rounded-3xl"><input type="submit" onclick="window.print()" value="Print Here" /></h2>
				</div>
				<!-- End Box -->s
			</div>
			<!-- End Content -->
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->
<!-- Footer -->
<div class="footer bg-black p-10">
	<div class="text-center font-bold text-md">
		<span class="text-center">&copy; <?php echo date("Y");?> Copyright SpeedWheelz</span>
	</div>
</div>
<!-- End Footer -->
</body>
</html>