<!DOCTYPE html>
<html lang="en">
<head>
	<title>SpeedWheelz Waiting</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
<body>
<section class="">
		<?php
			include 'header.php';
		?>

			<section class="text-2xl font-bold">
				<h2 class="caption" style="text-align: center">We try our best to serve you better...</h2>
				<h3 class="properties" style="text-align: center">Hope You will not get disappointed...</h3>
			</section>
	</section><!--  end hero section  -->



	

	<?php
						include 'includes/config.php';
						$showid = "SELECT MAX(srno) AS lastno FROM bookings";
							$run = $conn->query($showid);
							$last=mysqli_fetch_assoc($run);
							$lastno=$last['lastno'];

							$sel = "SELECT * FROM bookings WHERE srno = '$lastno'";
							$rs = $conn->query($sel);
							$rws = $rs->fetch_assoc();
			?>
	<section class="text-center m-10">
		<div class="text-3xl font-bold">
			<ul class="properties_list bg-green-300 p-3 rounded-3xl">
				<h2 style="text-align:center; color:#FF0000; font-family: 'Courier New', Courier, monospace">Thank you for booking our vehicle(s).Your Booking ID is <span class="bg-black p-1 rounded-full"><?php echo $rws['booking_id'];?></span> . Also Request has be sent to our Team. 
				We will get back to you shortly once we verify your payment.<br>
				You can login to view the processing status of your request using your Email and Password.</h2>
			</ul>
			
		</div>

	</section>	<!--  end listing section  -->

	

<?php include_once "includes/footer.php" ?>