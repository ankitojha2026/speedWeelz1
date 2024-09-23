<!DOCTYPE html>
<html lang="en">
<head>
	<title>SpeedWheels</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	
	<script type="text/javascript">
		
		function sureToCancel(id){
			if(confirm("Are you sure you want to Cancel this request?")){
				window.location.href ='cancel.php?id='+id;
			}
		}
	</script>

</head>
<body class="bg-[url('img/bg/st.jpg')] bg-cover">
<section class="">
		<?php
			include 'header.php';
		?>

			<section class="text-3xl font-bold text-center text-white">
				<h2 ">List of Cars that you have booked:</h2>
				
			</section>
	</section><!--  end hero section  -->



	<section class="">
		<div class="text-white font-bold">
		<h2 style="text-decoration:underline">List of Your Bookings</h2>
			
		</div>
	</section>	<!--  end listing section  -->

	<div class="table">
						
							<section class="flex justify-center flex-wrap">
			<?php

include 'includes/config.php';






						
						$sel = "SELECT * FROM bookings WHERE bookedby = '$_SESSION[email]'";
						$rs = $conn->query($sel);

					

						while($rws = $rs->fetch_assoc()){
			?>
		<div class=" bg-orange-600 rounded-3xl flex justify-center m-2">
			<div>
			<ul class="m-2">
			
				<li class="bg-black rounded-2xl p-3">
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="h-64 rounded-2xl" src="cars/<?php echo $rws['image'];?>">
					</a>
					<span class="text-center bg-yellow-300 rounded-md p-3 font-bold"><?php echo 'Price Paid: '.$rws['pricepaid'].' for '.$rws['bookedfor'];?> day(s)</span>
					<div class=" grid place-items-center text-white  font-bold">
						
						<h2 class="m-2">Name/Model: <span class="bg-white text-black p-1 rounded-md"><?php echo $rws['car_model'];?></span></h2>
						<h2 class="m-2">Type: <span class="bg-white text-black p-1 rounded-md"><?php echo $rws['car_type'];?></span></h2>
						<h2 class="m-2">Capacity: <span class="bg-white text-black p-1 rounded-md"><?php echo $rws['capacity'];?></span></h2>
						<?php 
						if($rws['status']=="0")
						{?>
							<h2 class="m-2">Status: <span class="bg-white text-black p-1 rounded-md">Pending</span></h2>
						<?php
						
						}
						else if($rws['status']=="1") {?>
							<h2>Status: <span class="property_size">Approved</span></h2>
						<?php
						}
					
						else if($rws['status']=="2") {?>
							<h2>Status: <span class="property_size">Admin Discarded</span></h2>
						<?php
						}
						
						else if($rws['status']=="3") {?>
							<h2>Status: <span class="property_size">Cancelled</span></h2>
						<?php
						}
						if($rws['status']=='0'){
						?>
						<a class="bg-yellow-500 p-2 font-bold rounded-md" href="javascript:sureToCancel(<?php echo $rws['booking_id'];?>)">Cancel</a>
						<?php
						}
						?>
					</div>
				</li>
			</ul>
			</div>
								</div>
							<?php
								}
							?>
						</table>
						
						
					
						
					</div>
							</section>
				<?php include_once "includes/footer.php" ?>