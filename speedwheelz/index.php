
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SpeedWheelz</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	

	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  <script>
    var cont=0;
function loopSlider(){
  var xx= setInterval(function(){
        switch(cont)
        {
        case 0:{
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-purple-800");
            $("#sButton2").addClass("bg-purple-800");
        cont=1;
        break;
        }
        case 1:
        {
            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-purple-800");
            $("#sButton1").addClass("bg-purple-800");
        cont=0;
        break;
        }
        }},2000);
}
function reinitLoop(time){
clearInterval(xx);
setTimeout(loopSlider(),time);
}

function sliderButton1(){

    $("#slider-2").fadeOut(400);
    $("#slider-1").delay(400).fadeIn(400);
    $("#sButton2").removeClass("bg-purple-800");
    $("#sButton1").addClass("bg-purple-800");
    reinitLoop(4000);
    cont=0
    }
    function sliderButton2(){
    $("#slider-1").fadeOut(400);
    $("#slider-2").delay(400).fadeIn(400);
    $("#sButton1").removeClass("bg-purple-800");
    $("#sButton2").addClass("bg-purple-800");
    reinitLoop(4000);
    cont=1
    }
    $(window).ready(function(){
        $("#slider-2").hide();
        $("#sButton1").addClass("bg-purple-800");
        loopSlider();
    });
  </script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
			include 'includes/common.php';
		?>

			<section class="caption">
			<div class="flex flex-col sm:flex-row justify-evenly ">
        <div>
            <div class="flex flex-col sm:flex-row place-items-center">
                <div class="text-center">
                    <span class="text-3xl font-bold">SpeedWheels<br>Where your journey Starts!</span><br>
                    <span class="text-3xl h-font">
                        A seamless experience that will stay with you forever...
                        <br>
                        SpeedWheelz provides you the economic <br>& luxary cars at a justified rate.</span><br><br><a href="listings.php"
                        class="text-white font-bold bg-yellow-400 rounded-full p-2"><span
                            class="align-middle"></span>See Vehicles</a>
                </div>
                <div class="text-center"><img class="rounded-2xl" style="height: 300px; width: 500px" src="img/landing.jpg" alt="Home">
                </div>
            </div>
        </div>
    </div>
			</section>
	</section>


  <div class="sliderAx h-auto m-2">
      <div id="slider-1" class="container mx-auto">
        <div class="bg-cover bg-center rounded-3xl h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1520050206274-a1ae44613e6d?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)">
       <div class="md:w-1/2">
        <p class="font-bold text-sm uppercase">Epic Peoples</p>
        <p class="text-3xl font-bold">Deserves</p>
        <p class="text-2xl mb-10 leading-none">Epic Cars</p>
        <a href="listings.php" class="bg-orange-500 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">View Vehicles</a>
        </div>  
    </div> <!-- container -->
      <br>
      </div>

      <div id="slider-2" class="container mx-auto">
        <div class="bg-cover bg-top rounded-3xl h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://roaringtoyz.com/wp-content/uploads/2019/02/suzuki-gsxr1300-hayabusa-330-osd-orang-black-kanji_0575.jpg)">
       
  <p class="font-bold text-sm uppercase">Our Vision</p>
        <p class="text-3xl font-bold">Is to serve you</p>
        <p class="text-2xl mb-10 leading-none">Better</p>
         
    </div> <!-- container -->
      <br>
      </div>
    </div>
 <div  class="flex justify-between w-12 mx-auto pb-2">
        <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2 " ></button>
    <button id="sButton2" onclick="sliderButton2() " class="bg-purple-400 rounded-full w-4 p-2"></button>
  </div>
<!--Carausel-->

<div>

    <!--Hero-->
    
    <section class="bg-gray-200 border-b py-8">
      <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          Rent Vehicle with 3 simple steps:
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink bg-black rounded-3xl">
          <div class="flex-1 bg-orange-500 rounded-t rounded-b-none overflow-hidden shadow">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
             
              <div class="w-full font-bold text-5xl text-gray-800 px-6">
                Signup
              </div>
              <p class="text-gray-800 text-base px-6 mb-5">
                Signup on SpeedWheels with just few Clicks and little details. No cridit card required for signingup
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b-full rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-center">
              <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <img class="h-28 w-30" src="img/signup.webp">
              </button>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink bg-black rounded-3xl">
          <div class="flex-1 bg-orange-500 rounded-t rounded-b-none overflow-hidden shadow">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              
              <div class="w-full font-bold text-5xl text-gray-800 px-6">
                Choose
              </div>
              <p class="text-gray-800 text-base px-6 mb-5">
                Choose whatever vehicle you want from our collection. All are well maintained vehicles.
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b-full rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-center">
              <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
			  <img class="h-28" src="img/choose.webp">
              </button>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col  bg-black rounded-3xl">
          <div class="flex-1 bg-orange-500 rounded-t rounded-b-none overflow-hidden shadow p-3">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              
              <div class="w-full font-bold text-5xl text-gray-800 px-6">
                Book
              </div>
              <p class="text-white  px-6 mb-5">
                Book and get your car by visiting our center with no Hickups!
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b-full rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-center">
              <button class="mx-auto lg:mx-0 hover:underline gradient text-orange-500 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
			  <img class="h-28" src="img/book.webp">
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="bg-white py-12">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-5xl lg:text-center flex flex-col justify-center items-center">
      <h2 class="text-base font-semibold leading-7 text-white bg-orange-600 px-3 rounded-lg uppercase mb-4 lg:mb-8">
        Key Features</h2>
      <h1 class="lg:text-7xl text-4xl md:text-5xl font-bold tracking-tight text-gray-900 text-center">Why
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-700 via-orange-800 to-gray-900">Choose SpeedWheelz</span>
      </h1>
     
    </div>
    <div class="mx-auto  max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
      <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
        <div class="relative pl-16">
          <dt class="text-base font-semibold leading-7 text-gray-900">
            <div class="absolute left-0 top-0 flex h-12 w-12 items-center justify-center rounded-lg bg-blue-700"><img src="img/car5.png"></div>Vehicle Inventory Management:
          </dt>
          <dd class="mt-2 text-base leading-7 text-gray-600"># Efficiently track and organize available vehicles.
<br># Categorize cars by type, make, and model.
<br># Manage maintenance schedules to ensure the fleet remains in optimal condition.</dd>
        </div>
        <div class="relative pl-16">
          <dt class="text-base font-semibold leading-7 text-gray-900">
            <div class="absolute left-0 top-0 flex h-12 w-12 items-center justify-center rounded-lg bg-blue-700"><img src="img/db.png"></div>Customer Database:
          </dt>
          <dd class="mt-2 text-base leading-7 text-gray-600"># Maintain a comprehensive database of customer information.<br>
# Store details such as contact information, rental history, preferences, and loyalty program participation.
          </dd>
        </div>
        <div class="relative pl-16">
          <dt class="text-base font-semibold leading-7 text-gray-900">
            <div class="absolute left-0 top-0 flex h-12 w-12 items-center justify-center rounded-lg bg-blue-700"><img src="img/dollar.png"></div>Cost-Efficient:
          </dt>
          <dd class="mt-2 text-base leading-7 text-gray-600"># Experience cost-effective vehicle ranting solutions. We keep our
            price competitive, ensuring you receive optimal coverage without breaking the bank.</dd>
        </div>
        <div class="relative pl-16">
          <dt class="text-base font-semibold leading-7 text-gray-900">
            <div class="absolute left-0 top-0 flex h-12 w-12 items-center justify-center rounded-lg bg-blue-700"><img src="img/cs.png"></div>24/7 Customer Support
          </dt>
          <dd class="mt-2 text-base leading-7 text-gray-600">Our dedicated support team is available around the clock to
            assist you. Whether it's day or night, we're here to address your insurance-related queries promptly.</dd>
        </div>
      </dl>
    </div>
  </div>
</div>

    <section class="bg-gray-100 py-8">
      <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          Pricing 
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto w-64 opacity-25 my-0 py-0 rounded-3xl bg-orange-500 "></div>
        </div>
        <div class="flex flex-col sm:flex-row justify-center pt-12 my-12 sm:my-4">
          <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0  lg:rounded-l-lg bg-green-200 mt-4 rounded-3xl">
            
          </div>
          <div class="flex flex-col w-5/6 lg:w-1/3 mx-auto lg:mx-0 rounded-lg bg-white mt-4 sm:-mt-6 shadow-lg z-10">
            <div class="flex-1 bg-white rounded-t-3xl rounded-b-none overflow-hidden shadow">
              <div class="w-full p-8 text-3xl font-bold text-center">Starts from</div>
              <div class="h-1 w-full gradient my-0 py-0 rounded-t"></div>
              <ul class="w-full text-center text-base font-bold bg-orange-500 rounded-3xl">
    
                <li class="border-b py-4">Economic friendly Vehicles</li>
              </ul>
            </div>
            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
              <div class="w-full pt-6 text-4xl font-bold text-center">
                Rs.350
                <span class="text-base">/ DAY</span>
              </div>
              <div class="flex items-center justify-center">
                <a href="listings.php" class="mx-auto lg:mx-0 hover:underline gradient text-orange-500 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                  View Vehicles</a>
              </div>
            </div>
          </div>
          <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-3xl lg:rounded-l-lg bg-orange-200 mt-4">
          </div>
        </div>
      </div>
    </section>
    <!-- Change the colour #f8fafc to match the previous section colour -->
    <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
          <g class="wave" fill="#f8fafc">
            <path
              d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"
            ></path>
          </g>
          <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
            <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
              <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
              <path
                d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                opacity="0.100000001"
              ></path>
              <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
            </g>
          </g>
        </g>
      </g>
    </svg>
    <section class="container mx-auto text-center py-6 mb-12">
      <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-orange-500">
        Ready to HAVE NITROS?
      </h2>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
      </div>
      <h3 class="my-4 text-3xl leading-tight">
        Get you vehicle now!
      </h3>
      <a href="signup.php" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
        Signup
            </a>
    </section>
</div>
				<?php include "includes/footer.php"; ?>
</body>
