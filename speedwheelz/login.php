<!DOCTYPE html>
<html lang="en">
<head>
	<title>SpeedWheelz</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
</head>
<body class="bg-[url('img/bg/listing-bg.jpg')] bg-contain">
<?php
						include 'header.php';
                        ?>
	<section class="">
		<div class="bg-red-300 rounded-3xl m-5 p-5">
		<div class=" flex justify-center">
			<form method="post">
			<h3 class="text-3xl text-center">Admin Login</h3>
				<table height="100" align="center">
					<tr class="p-2 m-2">
						<td class="p-3">Email Address:</td>
						<td class="p-3"><input class="rounded-full p-2" type="text" name="uname" placeholder="Enter Username" required></td>
					</tr>
					<tr class="p-2 m-2">
						<td class="p-3">Password:</td>
						<td class="p-3"><input class="rounded-full p-2" type="password" name="pass" placeholder="Enter Password" required></td>
					</tr>
					<tr >
						<td colspan="2"class="text-center font-bold bg-yellow-300 p-2 rounded-2xl p-3"><input type="submit" name="login" value="Login Here"></td>
					</tr>
				</table>
			</form>
			<?php
				if(isset($_POST['login'])){
					include 'includes/config.php';
					
						$uname = $_POST['uname'];
						$pass = $_POST['pass'];
			
						$query = "SELECT * FROM admin WHERE uname = '$uname' AND pass = '$pass'";
						$rs = $conn->query($query);
						$num = $rs->num_rows;
						$rows = $rs->fetch_assoc();
						if($num > 0){
							session_start();
							$_SESSION['uname'] = $rows['uname'];
							$_SESSION['pass'] = $rows['pass'];

							echo "<script type = \"text/javascript\">
										alert(\"Login Successful...\");
										window.location = (\"admin/index.php\")
										</script>";

										include_once "login.php";

						} else{
							echo "<script type = \"text/javascript\">
										alert(\"Login Failed. Try Again...\");
										window.location = (\"login.php\")
										</script>";
						}}
			?>
			</div>
		</div>
	</section>

	<?php include_once "includes/footer.php" ?>