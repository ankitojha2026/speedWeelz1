<!DOCTYPE html>
<html lang="en">
<head>
	<title>SpeedWheelz</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
</head>
<body>
<section>
		<?php
			include 'header.php';
		?>

			<section class="text-xl">
				<h2 class="" style="text-align: center">Signup and Explore The World Of Awsome Vehicles</h2>
				</section>
	</section><!--  end hero section  -->


	


	<section class="m-18 font-bold text-lg">
		<div class=" bg-yellow-300 m-10 p-10 rounded-xl">
			
				<h3>Signup Here</h3>
				<div class="grid grid-cols-1 place-items-center">
				<div>
				<form method="post">
					<table>
						<tr>
							<td>Full Name:</td>
							<td><input class="m-2 p-2 rounded-full" type="text" name="fname" required></td>
						</tr>
						<tr>
							<td>Phone Number:</td>
							<td><input class="m-2 p-2 rounded-full" type="text" name="phone" required></td>
						</tr>
						<tr>
							<td>Email Address:</td>
							<td><input class="m-2 p-2 rounded-full" type="email" name="email" required></td>
						</tr>
						<tr>
							<td>Choose Password:</td>
							<td><input class="m-2 p-2 rounded-full" type="password" name="id_no" required></td>
						</tr>
						<tr>
							<td>Driving License Number:</td>
							<td><input class="m-2 p-2 rounded-full" type="text" name="dl_no" required></td>
						</tr>
						<tr>
							<td>Gender:</td>
							<td>
								<select class="m-2 p-2 rounded-full" name="gender">
									<option> Select Gender </option>
									<option> Male </option>
									<option> Female </option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Location:</td>
							<td><input class="m-2 p-2 rounded-full" type="text" name="location" required></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right"><input class="m-2 p-2 rounded-full bg-green-300 font-bold hover:cursor-pointer" type="submit" name="save" value="Register"></td>
						</tr>
					</table>
				</form>
				</div>
				</div>
				<?php
						if(isset($_POST['save'])){
							
							include 'includes/config.php';
							
							$email = $_POST['email'];

							$check="SELECT * FROM client WHERE email = '$email'";
							$res = $conn->query($check);

							if(mysqli_num_rows($res)>0){

								 echo "<script >
								alert(\"Email Already Registered. Continue to Login?\");
								window.location = (\"account.php\")
								</script>";
							}else{



								$fname = $_POST['fname'];
								$id_no = $_POST['id_no'];
								$dl_no = $_POST['dl_no'];
								$gender = $_POST['gender'];
								$email = $_POST['email'];
								$phone = $_POST['phone'];
								$location = $_POST['location'];
								
								$qry = "INSERT INTO client (fname,id_no,gender,email,dl_no,phone,location,status)
								VALUES('$fname','$id_no','$gender','$email','$dl_no','$phone','$location','1')";
								$result = $conn->query($qry);
								if($result == TRUE){
									echo "<script >
												alert(\"Successfully Registered.\");
												window.location = (\"account.php\")
												</script>";
								}
							}

						}
							
						
						
					  ?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->



				<?php include_once "includes/footer.php" ?>