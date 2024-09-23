<!DOCTYPE html >
<html>
<head>
	<link rel="stylesheet" href="css/style.css" />
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to delete this message?")){
				window.location.href ='delete_msg.php?id='+id;
			}
		}
	</script>
	<style>
		#header h1{ float:left; display:inline; padding-top:12px; };
	</style>
</head>
<body class="bg-[url('../img/bg/listing-bg.jpg')] bg-cover bg-no-repeat">
<!-- Header -->
<div id="header">
	<div class="bg-transparent">
	<div class="shell">
		<?php
			include 'menu.php';
		?>
		</div>
		<!-- End Main Nav -->
	</div>
	</div>
</div>
<div id="container ">
	<div class="shel p-20">
		
		<div class="small-nav bg-orange-600 rounded-3xl p-3 font-bold text-white">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Customer's Feedbacks
		</div>
		<br />
		<div id="main">
			<div class="cl">&nbsp;</div>
			<div id="content">
				<div class="box rounded-xl flex justify-center">
					<!-- Box Head -->
					<div>
					<div class="box-head rounded-xl bg-black">
						<h2 class="text-center">Customer's Feedbacks</h2>
					</div>
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="13"><input type="checkbox" class="checkbox" /></th>
								<th>Client Email</th>
								<th>Feedback</th>
								<th>Time</th>
								<th>Status</th>
								<th width="110" class="ac">Control</th>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM message";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td><h3><a href="#"><?php echo $row['client_email'] ?></a></h3></td>
								<td><h3><a href="#"><?php echo $row['message'] ?></a></h3></td>
								<td><?php echo $row['time'] ?></td>
								<td><a href="#"><?php echo $row['status'] ?></a></td>
								<td><a href="javascript:sureToApprove(<?php echo $row['msg_id'];?>)" class="ico del">Delete</a></td>
							</tr>
							<?php
								}
							?>
						</table>
					</div>
					<h2 class="text-center p-2 m-1 bg-green-300 rounded-3xl"><input type="submit" onclick="window.print()" value="Print Here" /></h2>
					</div>
				</div>
			</div>
			<div id="sidebar">
				<!-- Box -->
				<div class="box rounded-3xl">
					<div class="box-head bg-black rounded-3xl font-bold text-center text-sm">
						<h2>Management</h2>
					</div>
					<div class="box-content p-3">
						<h1 class="text-center bg-red-800 rounded-2xl font-bold m-3">Registered Users Here<br><br><br>
						<a href="view-users.php" class="bg-green-300 text-center p-3 m-10 font-bold text-md rounded-xl">View Users</a>
					</h1>	
					</div>
				</div>
			</div>
			<div class="cl">&nbsp;</div>			
		</div>
	</div>
</div>
<!-- Footer -->
<div class="footer bg-black p-10">
	<div class="text-center font-bold text-md">
		<span class="text-center">&copy; <?php echo date("Y");?> Copyright SpeedWheelz</span>
	</div>
</div>
<!-- End Footer -->
</body>
</html>