<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to delete this car?")){
				window.location.href ='delete_car.php?id='+id;
			}
		}
	</script>
</head>
<body class="bg-[url('../img/bg/bluecar.jpg')] bg-cover">
<!-- Header -->
<div id="header">
	<div class="">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
	
	</div>
	</div>
</div>

<div id="container">
	<div class="p-20">
	<div class="small-nav bg-orange-600 rounded-3xl p-3 font-bold text-white">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Vehicle Management
		</div>
		<br />
		<div id="main">
			<div class="cl">&nbsp;</div>
			<div id="content">
				<div class="box rounded-3xl">
					<!-- Box Head -->
					<div class="box-head rounded-xl bg-black">
						<h2 class="text-center">Our Vehicles</h2>
					</div>
					
					<div class="flex justify-center"><div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="13"><input type="checkbox" class="checkbox" /></th>
								<th>Vehicle Type</th>
								<th>Brand</th>
								<th>Model/Name</th>
								<th>Booking Price/Hr</th>
								<th width="110" class="ac">Content Control</th>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM cars WHERE status = 'Available'";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td><h3><a href="#"><?php echo $row['car_type'] ?></a></h3></td>
								<td><?php echo $row['car_brand'] ?></td>
								<td><?php echo $row['car_model'] ?></td>
								<td><a href="#"><?php echo $row['hire_cost'] ?></a></td>
								<td ><a class="bg-red-300 rounded-full p-2 m-1" href="javascript:sureToApprove(<?php echo $row['car_id'];?>)" class="ico del">Delete</a></td>
							</tr>
							<?php
								}
							?>
						</table>
						<h2 class="text-center p-2 m-1 bg-green-300 rounded-3xl"><input type="submit" onclick="window.print()" value="Print Here" /></h2>
					</div></div>
				</div>
			</div>
	
			<div id="sidebar">
				
				<!-- Box -->
				<div class="box rounded-3xl">
					
					<!-- Box Head -->
					<div class="box-head bg-black rounded-3xl">
						<h2>Management</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content rounded-full text-center">
						<a href="add_cars.php" class=" m-3 p-3 rounded-full font-bold bg-green-300"><span >Add new Vehicles</span></a>
						<div class="cl">&nbsp;</div>
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
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