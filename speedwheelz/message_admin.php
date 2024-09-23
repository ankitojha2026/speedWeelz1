<!DOCTYPE html>
<html lang="en">
<head>
	<title>Feedback</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

</head>
<body>
<section class="">
		<?php
			include 'header.php';
		?>
			<section class="font-bold">
				<h2 class="text-2xl" style="text-align: center">Curiously waiting for your Thoughts</h2>
				<h3 class="properties" style="text-align: center">Please let us know our faults and strenghts.</h3>
			</section>
	</section><!--  end hero section  -->

	<section class="bg-yellow-500 rounded-3xl p-3 m-10">
		<h2 style="text-decoration:underline">Feedback Section</h2>
		<div class="flex justify-center">
			<ul class="properties_lis">
			<form method="post">
				<table>
					<tr>
						<td style="color: #003300; font-weight: bold; font-size: 24px">Enter Your Message Here:</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>
							<textarea name="message" placeholder="Enter Message Here" class="txt p-2 rounded-xl h-20 w-72"></textarea>
						</td>
					</tr>
					<tr>
						<td><input class="bg-red-400 rounded-md p-3 m-2 font-bold" type="submit" name="send" value="Send Message"></td>
					</tr>
				</table>
			</form>
				<?php
					if(isset($_POST['send'])){
						include 'includes/config.php';
						
						$message = $_POST['message'];
						
						$qry = "INSERT INTO message (message,client_email,time,status)
							VALUES('$message','$_SESSION[email]',NOW(),'Unread')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Message Successfully Send\");
											window.location = (\"success.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Message Not Send. Try Again\");
											window.location = (\"message_admin.php\")
											</script>";
							}
					}
				?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	

							<?php include_once "includes/footer.php" ?>