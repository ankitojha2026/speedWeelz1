<!DOCTYPE html >
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body class="bg-[url('../img/bg/handle.jpg')] bg-cover no-repeat">
<?php
	include '../includes/config.php';
?>
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
	</div>
</div>

<div id="container">
	<div class="shell">
	<div class="small-nav bg-orange-600 rounded-3xl p-3 font-bold text-white">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Add New Vehicles
		</div>
		<br />
		<div id="main">
			<div class="cl">&nbsp;</div>
			<div id="content">
				<div class="box rounded-3xl p-3">
					<div class="box-head bg-black rounded-3xl font-bold text-center">
						<h2>Add New Vehicles</h2>
					</div>
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form">
								<p>
									<span class="req">Max 100 Characters</span>
									<label>Vehicle Brand <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="car_brand" required />
								</p>	
								<p>
									<span class="req">Max 20 Characters</span>
									<label>Vehicle Model <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="car_model" required />
								</p>
								<p>
									<span class="req">Max 20 Characters</span>
									<label>Vehicle Type <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="car_type" required />
								</p>
								<p>
									<span class="req">Max 20 Characters</span>
									<label>Vehicle Hire Price <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="hire_cost" required />
								</p>
								<p>
									<span class="req">Front Image</span>
									<label>Vehicle Image <span>(Required Field)</span></label>
									<input type="file" class="field size1" name="image" required />
								</p>
								<p>
									<span class="req">In Terms of Passenger Seats</span>
									<label>Vehicle Capacity<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="capacity" required />
								</p>	
						</div>
			
						<div class="text-right">
					
							<input type="submit" class="p-2 font-bold text-white bg-green-600 rounded-full" value="Add New Vehicle" name="send" />
						</div>
						
					</form>
					<?php
							if(isset($_POST['send'])){
								
								$target_path = "../cars/";
								$target_path = $target_path . basename ($_FILES['image']['name']);
								if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
								
								$image = basename($_FILES['image']['name']);
								$car_brand = $_POST['car_brand'];
								$car_model = $_POST['car_model'];  
								$car_type = $_POST['car_type'];
								$hire_cost = $_POST['hire_cost'];
								$capacity = $_POST['capacity'];
								
								$qr = "INSERT INTO cars (image, car_brand,car_model,car_type,hire_cost,capacity,status) 
													VALUES ('$image','$car_brand','$car_model','$car_type','$hire_cost','$capacity','Available')";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Vehicle Succesfully Added\");
											window.location = (\"add_vehicles.php\")
											</script>";
									}
								}
								else 'Failed';
							}
						?>
				</div>
			</div>
			
			<div id="sidebar">
				<div class="box rounded-3xl p-5">
					<div class="box-head rounded-3xl bg-black font-bold">
						<h2>Management</h2>
					</div>
					<div class="box-content ">
						<a href="../listings.php" class="add-button"><span>View Our Vehicles</span></a>	
					</div>
				</div>
			</div>
			<div class="cl">&nbsp;</div>			
		</div>
	</div>
</div>
<div class="footer bg-black p-10">
	<div class="text-center font-bold text-md">
		<span class="text-center">&copy; <?php echo date("Y");?> Copyright SpeedWheelz</span>
	</div>
</div>
</body>
</html>