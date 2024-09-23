<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body class="bg-[url('img/bg/list.jpg')] bg-cover no-repeat">
<?php
	include "header.php";
	
?>

<main class="  w-screen h-screen flex justify-center items-center ">
  <div class="max-w-7xl  rounded-3xl">
    <form class=" rounded-3xl bg-stone-700 opacity-4 w-full p-4 rounded shadow-md" action="contact.php" method="post">
      <h2 class="text-xl mb-4 tracking-wider font-lighter text-gray-900 dark:text-gray-200">Share With Us That what you want?</h2>
      <p class=" mb-4">Your email address will not be published. Required fields are marked *</p>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
        <div class="mb-4 col-span-1 md:col-span-3">
          <textarea
        id="comment"
        name="comment"
        class="text-white w-full rounded-full px-3 py-2 dark:bg-gray-900 rounded-sm border dark:border-none border-gray-300 focus:outline-none border-solid focus:border-dashed resize-none"
        placeholder="Type Your Lovely Words...*"
        rows="5"

        required
      ></textarea>
        </div>

        <div class="mb-4">
          <input
        type="text"
        id="name"
        name="name"
        class="text-white w-full px-3 py-2 dark:bg-gray-900 rounded-sm border dark:border-none border-gray-300 focus:outline-none border-solid focus:border-dashed"
        placeholder="Name*"
        required
      />
        </div>
        <div class="mb-4">
          <input
        type="email"
        id="email"
        name="email"
        class="text-white w-full px-3 py-2 dark:bg-gray-900 rounded-sm border dark:border-none border-gray-300 focus:outline-none border-solid focus:border-dashed"
        placeholder="Email*"
        required
      />
        </div>
        <div class="mb-4">
          <input
        type="number"
        id="phone"
        name="phone"
        class="text-white w-full px-3 py-2 dark:bg-gray-900 rounded-sm border dark:border-none border-gray-300 focus:outline-none border-solid focus:border-dashed"
        placeholder="Phone"
      />
        </div>
      </div>
      <div class="flex justify-end">
        <button
        type="submit" name="submit"
        class="py-4 px-6 bg-blue-950 text-white rounded-sm hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-800"
      >
        Get in Touch →
      </button>
      </div>
    </form>
  </div>
</main>



<?php
						if(isset($_POST['submit'])){
							include 'includes/config.php';
							$comment = $_POST['comment'];
							$name = $_POST['name'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];

							$qry = "INSERT INTO contacts (sr_no,comment,name,email,phone)
							VALUES('','$comment','$name','$email','$phone')";
							$result = $conn->query($qry);
            
              if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Send Sucessful\");
											window.location = (\"contact.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Something went wrong! Try Again\");
											window.location = (\"contact.php\")
											</script>";
							}
            
            }





?>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
<?php include "includes/footer.php"; ?>
</body>
</html>