<!DOCTYPE html>
<html lang="en">
<head>
	<title>SpeedWheelz</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

</head>
<body class="bg-[url('img/bg/listing-bg.jpg')] bg-contain">
<section class="">
		<?php
			include 'header.php';
		?>

			<section class="text-2xl font-bold">
				<h2 class="caption" style="text-align: center">We never disclose your personal details to anyone.</h2>
				<h3 class="properties" style="text-align: center">Be free and choose whatever car you want...</h3>
			</section>
	</section>

	<section class="bg-blue-300 m-10 rounded-3xl">
		<div class="p-3">
		<div class="flex justify-center">
			<form method="post">
			<h3 class="text-3xl text-center">Customer Login</h3>
				<table>
					<tr>
						<td class="p-2 m-1">Email:</td>
						<td class="p-2 m-1"><input class="rounded-full p-2 border border-2" type="email" name="email" placeholder="Enter Email Address" required></td>
					</tr>
					<tr>
						<td class="p-2 m-1">Password:</td>
						<td class="p-2 m-1"><input class="rounded-full p-2 border border-2" type="password" name="pass" placeholder="Enter ID Number" required></td>
					</tr>
					<tr>
						<td><input class="bg-green-300 rounded-xl p-3" type="submit" name="log" value="Login Here"></td>
						<td class="p-10" style="text-align:right;"><a class="bg-yellow-500 text-white font-bold m-3 rounded-xl p-3" href="signup.php">Sigup Here</a></td>
					</tr>
				</table>
			</form>
			<?php
				if(isset($_POST['log'])){
					include 'includes/config.php';
					
					$uname = $_POST['email'];
					$pass = $_POST['pass'];
					
					$qy = "SELECT * FROM client WHERE email = '$uname' AND id_no = '$pass'";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();

					if($num > 0 && $row['status']=='1'){
						session_start();
						$_SESSION['email'] = $row['email'];
						$_SESSION['pass'] = $row['id_no'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful.................\");
									window.location = (\"index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Invalid Credentials or You Have Been Blocked\");
									window.location = (\"account.php\")
									</script>";
					}
				}
			?>
			</div>
		</div>

	</section>

			<?php include_once "includes/footer.php"; ?>