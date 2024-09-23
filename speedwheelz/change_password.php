<!DOCTYPE html>
<html lang="en">
<head>
	<title>Change Password</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
</head>
<body>
<section class="">
		<?php
			include 'header.php';
		?>
			<section class="text-xl font-bold">
				<h2 class="caption" style="text-align: center">Change Your Password for current user:</h2>
	</section>

	<section class="bg-yellow-500 rounded-3xl p-3 m-10">
		<div class="flex justify-center">
			<ul class="">
			<form method="post">
				<table>
					<tr>
						<td style="color: #003300; font-weight: bold; font-size: 24px">Change Your Password:</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>
                            <input type="password" name="oldpass" placeholder="Enter old password here" class="txt rounded-xl p-3"></input>
                       </tr>
					<tr>
						<td>
                            <input type="password" name="newpass" placeholder="Enter new password here" class="txt rounded-xl p-3"></input>
                       <input class="bg-red-400 rounded-md p-3 m-2 font-bold" type="submit" name="send" value="Proceed to Change"> </td>
					</tr>
					
				</table>
			</form>
				<?php
					if(isset($_POST['send'])){
						include 'includes/config.php';
						
						$oldpass = $_POST['oldpass'];
						$newpass = $_POST['newpass'];
							if($oldpass == $_SESSION['pass']){
								$qry = "UPDATE client SET id_no = $newpass WHERE email='$_SESSION[email]'";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Password Changed\");
											window.location = (\"client.php\")
											</script>";
										} 
									}else{
										echo "<script type = \"text/javascript\">
													alert(\"Old password didn't matched. Try Again\");
													window.location = (\"change_password.php\")
													</script>";
									}
							}	
				?>
			</ul>
		</div>
	</section>
	<?php include_once "includes/footer.php" ?>