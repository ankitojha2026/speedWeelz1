<!DOCTYPE html>
<html lang="en">
<head>
	<title>SpeedWheels</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />


</head>
<body class="bg-[url('img/bg/handle.jpg')] bg-cover">
<section class="">
		<?php
			include 'header.php';
		?>
		<?php
						include 'includes/config.php';
						$sele = "SELECT * FROM client WHERE email = '$_SESSION[email]'";
						$estcon = $conn->query($sele);
						$naam = $estcon->fetch_assoc();
			?>
			<section class="text-3xl">
				<h2 class="font-bold" style="text-align: center">Hello:<?php echo $naam['fname'];?></h2>
			</section>
	</section>
	<section class="font-bold text-xl">
		<div class="text-white">
		<h2 style="text-decoration:underline">Client Details:</h2>
			<div class="grid grid-cols-1 sm:grid-cols-2 place-items-center">
				<div>
				<ul class="bg-blue-300 m-10 p-10 rounded-2xl">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM client WHERE email = '$_SESSION[email]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li>
						<h2><span style="font-size:25px; color: #FF0000"></span>Name : <span style="color:#003333; 
						font-weight: bold; font-size: 25px;"><?php echo $rws['fname'];?></span></h2>
				</li>
				<li>
						<h2><span style="font-size:25px; color: #FF0000"></span>Email : <span style="color:#003333; 
						font-weight: bold; font-size: 25px;"><?php echo $rws['email'];?></span></h2>
				</li>
				<li>
						<h2><span style="font-size:25px; color: #FF0000"></span>Phone : <span style="color:#003333; 
						font-weight: bold; font-size: 25px;"><?php echo $rws['phone'];?></span></h2>
				</li>
				<li>
						<h2><span style="font-size:25px; color: #FF0000"></span>Location : <span style="color:#003333; 
						font-weight: bold; font-size: 25px;"><?php echo $rws['location'];?></span></h2>
				</li>
				<li>
						<h2><span style="font-size:25px; color: #FF0000"></span>Gender : <span style="color:#003333; 
						font-weight: bold; font-size: 25px;"><?php echo $rws['gender'];?></span></h2>
				</li>
				<li>
						<h2><span style="font-size:25px; color: #FF0000"></span>Your DL Numer : <span style="color:#003333; 
						font-weight: bold; font-size: 25px;"><?php echo $rws['dl_no'];?></span></h2>
				</li>
			</ul>
				</div>
				<div>
					<h2>Password:</h2><br>
					<a class="bg-red-300 rounded-xl p-2 font-bold text-white" href="change_password.php">Change Password</a>
				</div>
			</div>
		</div>
	</section>
<?php include_once "includes/footer.php" ?>