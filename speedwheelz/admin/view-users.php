<!DOCTYPE html>
<html lang="en">
<head>
	<title>SpeedWheelz</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" href="css/style.css" />

</head>
<body class="bg-[url('../img/bg/status.jpg')] bg-cover">
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
	<section class="caption m-10 p-10">
			<h2 class="font-bold text-3xl font-red-500" style="text-align: center">List Of Clients</h2>
			<h3 class="text-2xl" style="text-align: center">These are the users present in the database...</h3>
		</section>
<section class="listings flex justify-center">
		<div class="">
			<ul class="sm:flex-row flex flex-col justify-around p-1 flex-wrap">

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
				<th scope="col" class="px-6 py-3">
                    DL Number.
                </th>
                <th scope="col" class="px-6 py-3">
                    Gender
                </th>
				<th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
		<?php
						include '../includes/config.php';
						$sel = "SELECT * FROM client";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>

            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
				<?php echo $rws['client_id'];?>
                </th>
                <td class="px-6 py-4">
				<?php echo $rws['fname'];?>
                </td>
                <td class="px-6 py-4">
				<?php echo $rws['email'];?>
                </td>
		
                <td class="px-6 py-4">
				<?php echo $rws['dl_no'];?>
                </td>
				<td class="px-6 py-4">
				<?php echo $rws['gender'];?>
                </td>
				<td class="px-6 py-4">
				<?php if($rws['status']=='0'){
						echo "Banned";
				} else{
					echo "Un-banned";
				};?>
                </td>
                <td class="px-6 py-4">
                    <a href="toggle_ban.php?id=<?php echo $rws['client_id'];?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Toggle-Ban</a>
                </td>
            </tr>
			<?php
				}
			?>
			</ul>
			<script type="text/javascript">
		function sureToApprove(client_id){
			if(confirm("Are you sure you want to Toggle Ban or Un-ban This user? If you are banning then He/she will not be able to login anymore... or if Un-Banning He/she will be again able to log-in")){
				window.location.href ='toggle_ban.php?id='+client_id;
			}
		}
	</script>
            
        </tbody>
    </table>
</div>	
		</div>
	</section>
</body>