<!DOCTYPE html>
<html lang="en">
<head>
	<title>SpeedWheelz - Vehicles</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
</head>
<body class="bg-[url('img/bg/whitecar.jpg')] bg-cover">
<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="font-bold text-center text-2xl text-white">Details for Choosen Vehicle:</h2>
				
			</section>
	</section>
	<section class="listings">
		<div class="m-20 bg-black rounded-3xl grid grid-cols-2 place-items-center font-bold">
			<div>
			<ul class="m-10">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE id = '$_GET[id]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li class="bg-orange-500 rounded-2xl p-2 text-2xl">
					<a href="book_car.php?id=<?php echo $rws['id'] ?>">
						<img class="h-64 rounded-2xl" src="cars/<?php echo $rws['image'];?>">
					</a>
					<span class="text-center bg-yellow-300 rounded-md p-3 font-bold"><?php echo 'Rs.'.$rws['hire_cost'];?>/day</span>
					<div class=" grid place-items-center">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['id'] ?>"><?php echo 'Brand: '.$rws['car_brand'];?></a>
						</h1>
						<h2>Name/Model: <span class="bg-white p-1 rounded-md"><?php echo $rws['car_model'];?></span></h2><br>
						<h2>Type: <span class="bg-white p-1 rounded-md"><?php echo $rws['car_type'];?></span></h2><br>
						<h2>Capacity: <span class="bg-white p-1 rounded-md"><?php echo $rws['capacity'];?></span></h2><br>
					</div>
				</li>
			</ul>
			</div>
			<div><h3 class="text-white text-2xl">Proceed To Book you Vehicle <?php echo $rws['car_brand'] ;echo $rws['car_model'];?>. </h3><br>
				<?php
					if(!$_SESSION['email'] && (!$_SESSION['pass'])){
				?>
				<form method="post">
					<table >
						<tr>
							<td class="text-white">Full Name:</td>
							<td><input class="p-2 rounded-full m-2" type="text" name="fname" required></td>
						</tr>
						<tr>
							<td class="text-white">Phone Number:</td>
							<td><input class="p-2 rounded-full m-2" type="text" name="phone" required></td>
						</tr>
						<tr>
							<td class="text-white">Email Address:</td>
							<td><input class="p-2 rounded-full m-2" type="email" name="email" required></td>
						</tr>
						<tr>
							<td class="text-white">Choose Password:</td>
							<td><input class="p-2 rounded-full m-2" type="text" name="id_no" required></td>
						</tr>
						<tr>
							<td class="text-white">Driving License Number:</td>
							<td><input class="p-2 rounded-full m-2" type="text" name="dl_no" required></td>
						</tr>
						<tr>
							<td class="text-white">Gender:</td>
							<td>
								<select class="p-2 m-2 rounded-full" name="gender">
									<option> Select Gender </option>
									<option> Male </option>
									<option> Female </option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="text-white">Location:</td>
							<td><input class="p-2 rounded-full m-2" type="text" name="location" required></td>
						</tr>
						<tr>
							<td class="text-white">No. of days to book:</td>
							<td><input class="p-2 rounded-full m-2" type="number" name="days" required></td>
						</tr>
						<tr>
							<td colspan="2" Class="font-bold text-xl bg-yellow-300 p-2 m-2 rounded-lg text-center"><input type="submit" name="save" value="Submit"></td>
						</tr>
					</table>
				</form></div>

				<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$fname = $_POST['fname'];
							$id_no = $_POST['id_no'];
							$dl_no = $_POST['dl_no'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$location = $_POST['location'];
							$days = $_POST['days'];

							$qry = "INSERT INTO client (fname,id_no,gender,email,dl_no,phone,location,status)
							VALUES('$fname','$id_no','$gender','$email','$dl_no','$phone','$location','1')";
							$result = $conn->query($qry);

						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE id = '$_GET[id]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
		
							$totalpaid= $days*$rws['hire_cost'];
							
							$booking_id =mt_rand(1111111,9999999);
							$qry = "INSERT INTO bookings (srno,booking_id,car_id,bookedby,car_brand,car_model,car_type,image,capacity,priceperday,bookedfor,pricepaid,status)
							VALUES('',$booking_id,'$_GET[id]','$email','$rws[car_brand]','$rws[car_model]','$rws[car_type]','$rws[image]','$rws[capacity]','$rws[hire_cost]','$days','$totalpaid','0')";
							$res = $conn->query($qry);
							
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered. Proceed to pay\");
											window.location = (\"pay.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"book_car.php\")
											</script>";
							}
						}
					  ?>
				<?php
					} else
						 {
							$localId=$_GET['id'];
							?>
								<a class="bg-yellow-300 rounded-md p-3 font-bold text-black" href="days.php?id=<?php echo $localId?>">Click to Book</a>
							<?php
						}
				?>
			</ul>
		</div>
	</section>
<?php include_once "includes/footer.php" ?>