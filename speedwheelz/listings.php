<!DOCTYPE html>
<html lang="en">
<head>
	<title>SpeedWheelz</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

</head>
<body class="bg-[url('img/bg/list.jpg')] bg-cover no-repeat">
<?php
						include 'header.php';
                        ?>
	<section class="caption">
			<h2 class="font-bold text-3xl" style="text-align: center">Find Your Vehicles Here For Rent</h2>
			<h3 class="text-2xl" style="text-align: center">We have Wide range of vehicles in our collection...</h3>
		</section>
<section class=" flex justify-center">
		<div class="text-white">
			<ul class="sm:flex-row flex flex-col justify-around p-1 flex-wrap">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE status = 'Available'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
				<li class=" bg-black border border-2 rounded-2xl h-50 w-72 m-2 text-center p-2">
					<a href="book_car.php?id=<?php echo $rws['id'] ?>">
						<img class="rounded-2xl h-50 w-72 " src="cars/<?php echo $rws['image'];?>" width="300px" height="200">
					</a>
					<span class="font-bold bg-yellow-200 p-2 text-black rounded-md"><?php echo 'Rs.'.$rws['hire_cost'];?>/day</span>
					<div class="text-center font-bold">
						<h1 class="mt-4">
							<a href="book_car.php?id=<?php echo $rws['id'] ?>"><?php echo 'Brand: '.$rws['car_brand'];?></a>
						</h1>
						
						<h2 >Name/Model: <span class="bg-white text-black p-1 rounded-xl"><?php echo $rws['car_model'];?></span></h2><br>
						<h2 >Type: <span class="bg-white text-black p-1 rounded-xl"><?php echo $rws['car_type'];?></span></h2>
						<br><h2>Capacity: <span class="bg-white text-black p-1 rounded-xl"><?php echo $rws['capacity'];?></span></h2>
					</div>
				</li>
			<?php
				}
			?>
			</ul>
		</div>
	</section>

    <?php include_once "includes/footer.php"; ?>
</body>