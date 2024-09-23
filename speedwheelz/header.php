
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SpeedWheelz</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<style>
		.navbar ul div{
	list-style: none;
	display:inline-block;
	margin:0 20px;
	position:relative;
}
.navbar ul div a{
	text-decoration: none;
	color: #fff;
	text-transform:uppercase;
	margin-top: -10px;
}

.navbar ul div::after{
	content: "";
	height:4px;
	width: 0;
	position: absolute;
	left: 0;
	bottom: -10px;
	transition: 0.5s;
	background: #009698;
}
.navbar ul div:hover::after{
	width:100%;
}
	</style>
</head>
<body>

<?php
	session_start();
	include "includes/common.php";
	
?>
<header class="rounded-full bg-black m-2 border border-3 p-5">
			<div class="wrappe">
				<a href="#" class="hamburge"></a>
				<nav class="navbar">
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
							$_SESSION['email']='';
							$_SESSION['pass']='';
							?>
					<ul class="flex flex-col justify-around sm:grid  sm:grid-cols-7 items-center text-center font-bold" >
						<h1 class="logo flex text-white text-2xl"><img class="h-10" src="img/wheel.png"> SpeedWheelz</h1>
						<div><a class="p-2" href="index.php">Home</a></div>
						<div><a class="p-2" href="listings.php">Vehicles</a></div>
						<div><a class=" p-2" href="about.php">About</a></div>
						<div><a class="p-2" href="contact.php">Contact</a></div>
						<a class=" bg-yellow-300 rounded-full p-2 m-1" href="account.php">Customer Login</a>
						<a  class=" bg-orange-500 rounded-full p-2 m-1" href="login.php">Admin Login</a>
					</ul>
					<?php
						} else{
					?>
							<ul class=" flex flex-col justify-around sm:grid  sm:grid-cols-7 items-center text-center font-bold">
							<h1 class="logo flex text-white"><img class="h-10" src="img/wheel.png"> SpeedWheelz</h1>
								<div><a class=" p-2" href="index.php">Home</a></div>
								<div><a class=" p-2" href="listings.php">Vehicles</a></div>
								<div><a  class=" p-2" href="status.php">Status</a></div>
								<div><a class=" p-2" href="message_admin.php">Feedback</a></div>
								<div><a  class=" p-2" href="client.php">User Details</a></div>
								<a class="bg-red-400 hover:bg-red-500 rounded-full p-2" href="admin/logout.php">Logout</a>
							</ul>
					<?php
					$_SESSION['email'];
					$_SESSION['pass'];
						}
					?>
				</nav>
			</div>
		</header>
		</body>