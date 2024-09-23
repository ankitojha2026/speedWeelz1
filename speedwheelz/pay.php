<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Pay SpeedWheelz</title>
    <!-- Add your CSS link here -->
</head>
<body class="bg-yellow-200">
    <?php include 'header.php'; ?>

    <section>
        <div class="text-xl font-bold text-center">
            <h2>Pay for your Vehicle:</h2>
            <h3>We do not store any of your Card Details on our end.</h3>
        </div>
    </section>

    <section>
        <div class="m-10 bg-white rounded-3xl p-10 border">
            <h3 class="text-3xl text-center">Make Payments Here</h3>
            <h5>Your Name:</h5>
            <h5>Paybill Number: 00000</h5>
            
            <form method="post">
                <table class="w-full">
                    <tr>
                        <td>Enter Transaction ID:</td>
                        <td><input class="rounded-full border border-black p-2 m-2" type="text" name="transaction_id" required></td>
                    </tr>
                    <tr>
                        <td>Confirm:</td>
                        <td><input class="rounded-full border border-black p-2 m-2" type="text" name="confirmation" placeholder="Type Yes / No" required></td>
                    </tr>
                </table>
                <div class="text-center">
                    <input class="bg-yellow-300 rounded-md p-3 text-green-800 font-bold hover:p-5" type="submit" name="pay" value="Submit Details">
                </div>
            </form>

            <?php
            if (isset($_POST['pay'])) {
                include 'includes/config.php';

                $transaction_id = $conn->real_escape_string($_POST['transaction_id']);
                $confirmation = $conn->real_escape_string($_POST['confirmation']);
                $id_no = $conn->real_escape_string($_POST['srno']); // Ensure $id_no is defined or obtained

                $qry = "UPDATE bookings SET mpesa = '$transaction_id' WHERE booking_id = '$id_no'";
                if ($conn->query($qry) === TRUE) {
                    echo "<script type='text/javascript'>
                            alert('Payment Successfully Done. Wait for Admin Approval');
                            window.location = 'wait.php';
                          </script>";
                } else {
                    echo "<script type='text/javascript'>
                            alert('Payment Failed. Try Again');
                            window.location = 'pay.php';
                          </script>";
                }
            }
            ?>
        </div>
    </section>    

    <?php include_once 'includes/footer.php'; ?>
</body>
</html>
