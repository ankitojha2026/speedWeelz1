<?php include '../includes/common.php'; ?>
<?php
	session_start();
	
	if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
		header("location: ../login.php");
	}
?>
<div class="rounded-full">
<h1 class="logo flex "><img class="h-10" src="../img/wheel.png"></h1>
			<div id="top-navigation">
				Welcome <a href="#"><strong>Admin</strong></a>
				<span>|</span>
				
				<a class="hover:bg-red-800 rounded-md text-lg p-2" href="logout.php">Log out</a>
			</div>
		</div>
<div class=" p-5 rounded-3xl  bg-black text-white">
			<ul class="flex space-x-5 font-bold ">
			    <li><a href="index.php"><span>Dashboard</span></a></li>
			    <li><a href="add_vehicles.php"><span>Vehicle Management</span></a></li>
			    <li><a href="client_requests.php"><span>Booking Requests</span></a></li>
			    <li><a href="index.php"><span>Customer's Feedback</span></a></li>
			</ul>
		</div>