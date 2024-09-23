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
			<section>
				<h2 class="text-center text-2xl font-bold">For how many days you want to rent our vehicle?</h2>
				
	</section>
	<section class="bg-yellow-500 rounded-3xl p-3 m-10">
		<div class="flex justify-center">
			<ul class="properties_lis">
			<form method="post">
				<table>
					<tr>
						<td style="color: #003300; font-weight: bold; font-size: 24px">Enter number of days you want to book our vehicle:</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>
                            <input type="number" name="days" placeholder="Enter no. of days here" class="txt rounded-xl p-3"></input>
                       <input class="bg-red-400 rounded-md p-3 m-2 font-bold" type="submit" name="send" value="Proceed to Pay"> </td>
					</tr>
					
				</table>
			</form>
				<?php
					if(isset($_POST['send'])){
						include 'includes/config.php';

						$sel = "SELECT * FROM cars WHERE id = '$_GET[id]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
								
$booking_id =mt_rand(1111111,9999999);
$query = "INSERT INTO bookings (srno,booking_id,car_id,bookedby,car_brand,car_model,car_type,image,capacity,priceperday,bookedfor,pricepaid,status)
VALUES('',$booking_id,'$_GET[id]','$_SESSION[email]','$rws[car_brand]','$rws[car_model]','$rws[car_type]','$rws[image]','$rws[capacity]','$rws[hire_cost]','0','0','Pending')";
$res = $conn->query($query);
						
						$days = $_POST['days'];
						$updatedays = "SELECT MAX(srno) AS lastno FROM bookings";
							$run = $conn->query($updatedays);
							$last=mysqli_fetch_assoc($run);
							$lastno=$last['lastno'];

							$sel = "SELECT * FROM bookings WHERE srno = '$lastno'";
							$rs = $conn->query($sel);
							$rws = $rs->fetch_assoc();

$totalpaid= $days*$rws['priceperday'];

						$qry = "UPDATE bookings SET bookedfor = $days WHERE srno = '$lastno'";
							$result = $conn->query($qry);
							$query = "UPDATE bookings SET pricepaid = $totalpaid WHERE srno = '$lastno'";
							$result = $conn->query($query);

							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Prodeed to Pay\");
											window.location = (\"pay.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Something Went wrong. Try Again\");
											window.location = (\"days.php\")
											</script>";
							}
					}
				?>
			</ul>
		</div>
	</section>
	<?php include_once "includes/footer.php" ?>