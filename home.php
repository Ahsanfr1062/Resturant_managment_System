<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes:regular" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <title>Ahsan Kitchen</title>

</head>

<body class="font-[poppins]">


  <?php

  use function PHPSTORM_META\argumentsSet;

  include('partials/_header.php');
  ?>
  <!-- ------------------Hero Section -------------------->
  <!-- <section class="hero2 relative bg-gray-100 md:h-[100vh] h-[200vh] max-h-[2000vh] md:max-h-[2000vh]">

    <div class="hero text-blue-400  flex justify-between">
      <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
        <div class="max-w-xl text-center sm:text-left mr-10 md:mr-28">
          <h1 class="goodFont text-3xl font-[Great Vibes] text-rose-700 sm:text-5xl">
            fresh and delisious Food
          </h1>

          <p class="mt-4 max-w-md sm:text-xl text-black sm:leading-relaxed">
            Find some of the best Food Right Over Here in the World! and spices plus Ashes
          </p>

          <div class="mt-8 flex flex-wrap gap-4 text-center"> -->
  <!-- <a href="#"
              class="block w-full rounded bg-[#C8A97E] px-12 py-3 text-sm font-medium text-white shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto">
              Book a Table
            </a>
          </div>
        </div>
      </div>
      <div class="h-1 w-0 border-x-8 border-x-transparent border-b-[16px] border-b-blue-600"></div>
      <div class="img-hero w-max-[15rem] h-[25rem] bg-rose-700 mr-10 rounded-full">
        <img src="img/chef.png" class="w-[21.6rem] ml-10  " alt="">
      </div>
    </div>
     Jumbotron -->



  <div class="w-full">
    <div class="p-12 mb-24 text-center relative overflow-hidden bg-no-repeat bg-center bg-cover" style="
    background-image: url('img/hero2.jpg');
    height: 100vh;
  ">
      <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.6)">
        <div class="flex justify-center items-center h-full">
          <div class="text-white md:mt-36 mt-10 ">
            <h1 class="goodFont md:text-[7rem] text-[4rem] md:mb-[-1rem] md:mt-[-6rem] mt-[0.5rem] ml-[-0.5rem] font-bold text-[#C8A97E]  ">Ahsan Kitchen</h1>
            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto mb-6 text-gray-500s">Blue bottle crucifix vinyl
              post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug.
            </p>
            <div class=" flex text-center justify-center">
              <a href="#" class="block rounded bg-[#C8A97E] px-12 py-3 text-sm font-medium text-white shadow hover:bg-transparent hover:text-[#C8A97E] hover:border-solid hover:border-[1px] hover:border-[#C8A97E] focus:outline-none focus:ring active:bg-rose-500 sm:w-auto">
                Book a Table
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- component -->
  <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />



  <!-- FFFFFF -->
  <section data-aos="fade-down" class="text-gray-600  bg-[#FFFFFF] body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:w-[30rem] md:flex hidden lg:w-[17rem]  md:w-[40rem] w-[30rem] md:mb-24 mb-10 mt-[-3rem] md:mr-36 mr-24  md:mb-0 md:ml-0 ml-[18rem]">
        <img class="object-cover object-center rounded md:w-[40rem] w-[10rem] md:ml-[-3rem]" alt="hero" src="img/about.jpg">
        <img class="object-cover object-center rounded md:w-[40rem] w-[10rem] md:mr-0 mr-24 md:ml-[1rem] mt-[2rem]" alt="hero" src="img/about2.jpg">
      </div>
      <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-left text-center ml-10">
        <h1 data-aos="fade-down" class="goodFont text-[6rem] md:mb-[-1rem] md:mt-[-6rem] mt-[0.5rem] ml-[-0.5rem] font-bold text-[#C8A97E] md:mr-0 mr-[4rem] ">About</h1>
        <h1 data-aos="fade-down" data-aos-offset="120" class="title-font text-center sm:text-4xl text-3xl mb-4 md:mr-0 mr-10 font-medium text-gray-900">Before they sold out
          <br class="hidden lg:inline-block">readymade gluten
        </h1>
        <p class="mb-4 leading-relaxed md:mr-0 mr-10">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant
          cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic
          tumeric truffaut hexagon try-hard chambray.</p>
        <p class="mb-2 md:mr-0 mr-14">Mon-Sunday <span class=" font-bold">9am - 12am</span></p>
        <h1 class="text-[#C8A97E] md:mr-0 mr-10 font-bold text-[2.5rem]">+92-310017-6215</h1>
      </div>
    </div>
  </section>

  <section data-aos="fade-down" class="text-gray-600 mt-[-6rem] mb-4 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap -m-4 text-center">
        <div class="p-4 sm:w-1/4 w-1/2">
          <h2 class="title-font text-[#C8A97E] font-medium sm:text-4xl text-3xl">2.7K</h2>
          <p class="leading-relaxed">10 Years of Experience</p>
        </div>
        <div class="p-4 sm:w-1/4 w-1/2">
          <h2 class="title-font text-[#C8A97E] font-medium sm:text-4xl text-3xl">1.8K</h2>
          <p class="leading-relaxed">Menu/Dish</p>
        </div>
        <div class="p-4 sm:w-1/4 w-1/2">
          <h2 class="title-font text-[#C8A97E] font-medium sm:text-4xl text-3xl">35</h2>
          <p class="leading-relaxed">STAFFS</p>
        </div>
        <div class="p-4 sm:w-1/4 w-1/2">
          <h2 class="title-font text-[#C8A97E] font-medium sm:text-4xl text-3xl">4</h2>
          <p class="leading-relaxed">Happy Customers</p>
        </div>
      </div>
    </div>
  </section>


  <section data-aos="fade-down" data-aos-offset="1" class=" text-gray-600 bg-[#FAFAFA] body-font mt-[-5rem]">
    <div class="container px-5 py-24 mx-auto">
      <div class="text-center mb-20">
        <h1 data-aos="fade-down" class=" goodFont sm:text-6xl md:text-6xl  text-[#C8A97E] mb-4  text-[5rem]">Services</h1>
        <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Blue bottle crucifix vinyl
          post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug.
        </p>
        <div class="flex mt-6 justify-center">
          <div class="w-16 h-1 rounded-full bg-[#C8A97E] inline-flex"></div>
        </div>
      </div>
      <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
        <div data-aos="zoom-in" class="p-4 md:w-1/3 flex flex-col text-center items-center hover:drop-shadow-xl">
          <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-purple-100 text-purple-500 mb-5 flex-shrink-0 shadow">
            <img src="img/birthday-cake.png" class="w-14 mb-2 opacity-70" alt="">
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Birthday Party</h2>
            <p class="leading-relaxed text-base">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            <a class="mt-3 text-purple-500 inline-flex items-center">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
        <div data-aos="zoom-in" class="p-4 hover:drop-shadow-xl md:w-1/3 flex flex-col text-center items-center">
          <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-purple-100 text-purple-500 mb-5 flex-shrink-0 shadow">
            <img src="img/meeting.png" class="w-14 mb-2 opacity-70" alt="">
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Business Meetings</h2>
            <p class="leading-relaxed text-base">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            <a class="mt-3 text-purple-500 inline-flex items-center">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
        <div data-aos="zoom-in" class=" hover:drop-shadow-xl p-4 md:w-1/3 flex flex-col text-center items-center">
          <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-purple-100 text-purple-500 mb-5 flex-shrink-0 shadow">
            <img src="img/couple.png" class="w-14 mb-2 opacity-65" alt="">
          </div>
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Wedding Party</h2>
            <p class="leading-relaxed text-base">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            <a class="mt-3 text-purple-500 inline-flex items-center">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section data-aos="fade-down" class="text-gray-600 mt-[-1rem] body-font">

    <div class="container px-5 py-24 mx-auto">
      <h1 data-aos="fade-down" class=" goodFont  text-[#C8A97E] mb-4  md:text-[5rem] text-[4rem] text-center font-bold">Specialties </h1>
      <div class="flex mb-4 justify-center">
        <div class="w-16 h-1 rounded-full bg-[#C8A97E] inline-flex"></div>
      </div>
      <h1 class="text-center  leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-black font-bold text-[3rem] mt-[-1rem] text-gray-500">
        Our Menu
      </h1>
      <div class="flex flex-wrap -m-4">

        <?php
        require('partials/_connectdb.php');
        $sql = 'SELECT * FROM `products_data` LIMIT 8';
        $result =  mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
          echo '<div class="lg:w-1/4 text-gray-700 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class=" hover:scale-125 transition-all duration-700 object-cover object-center w-full h-full block" src="img/' . $row['image'] . '">
        </a>
        <div class="mt-4">
          <h3 class="text-purple-500 text-xs uppercase tracking-widest title-font mb-1">' . $row['category'] . '</h3>
          <h2 class="text-gray-900  title-font text-lg font-medium hover:text-[#C8A97E] cursor-pointer"><a href="product.php?id=' . $row['sno'] . '">  ' . $row['title'] . ' </a></h2>
          <p class="mt-1">' . $row['price'] . '$</p>
        </div>
      </div>';
        }


        ?>

        <!-- $id = $_GET['threadid']; -->


        <!-- <div class="lg:w-1/4 text-gray-700 md:w-1/2 p-4 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class=" hover:scale-125 transition-all duration-700 object-cover object-center w-full h-full block" src="img/bbqBurger.jpg">
          </a>
          <div class="mt-4">
            <h3 class="text-purple-500 text-xs tracking-widest title-font mb-1">FAST FOOD</h3>
            <h2 class="text-gray-900 title-font text-lg font-medium hover:text-[#C8A97E] cursor-pointer">Juicy Beef Burger</h2>
            <p class="mt-1">$5.99</p>
          </div>
        </div>
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class=" hover:scale-125 transition-all duration-700 object-cover object-center w-full h-full block" src="img/biryani.jpg">
          </a>
          <div class="mt-4">
            <h3 class="text-purple-500 text-xs tracking-widest title-font mb-1">DESI FOOD</h3>
            <h2 class="text-gray-900 title-font text-lg font-medium">Chicken Biryani</h2>
            <p class="mt-1">$10.15</p>
          </div>
        </div>
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class=" hover:scale-125 transition-all duration-700 object-cover object-center w-full h-full block" src="img/broast.jpg">
          </a>
          <div class="mt-4">
            <h3 class="text-purple-500 text-xs tracking-widest title-font mb-1">DESI FOOD</h3>
            <h2 class="text-gray-900 title-font text-lg font-medium">Chicken Broast</h2>
            <p class="mt-1">$12.00</p>
          </div>
        </div>
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class=" hover:scale-125 transition-all duration-700 object-cover object-center w-full h-full block" src="img/fajitapizza.jpg">
          </a>
          <div class="mt-4">
            <h3 class="text-purple-500 text-xs tracking-widest title-font mb-1">FAST FOOD</h3>
            <h2 class="text-gray-900 title-font text-lg font-medium">Fajita Pizza</h2>
            <p class="mt-1">$20.40</p>
          </div>
        </div>
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class=" hover:scale-125 transition-all duration-700 object-cover object-center w-full h-full block" src="img/patty burger.jpg">
          </a>
          <div class="mt-4">
            <h3 class="text-purple-500 text-xs tracking-widest title-font mb-1">FAST FOOD</h3>
            <h2 class="text-gray-900 title-font text-lg font-medium">Chicken Patty Burger</h2>
            <p class="mt-1">$16.00</p>
          </div>
        </div>
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="hover:scale-125 transition-all duration-700 object-cover object-center w-full h-full block" src="img/pizza.jpg">
          </a>
          <div class="mt-4">
            <h3 class="text-purple-500 text-xs tracking-widest title-font mb-1">FAST FOOD</h3>
            <h2 class="text-gray-900 title-font text-lg font-medium">Juicy Chicken Pizza</h2>
            <p class="mt-1">$10.15</p>
          </div>
        </div>
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full hover:scale-125 transition-all duration-700 h-full block" src="img/pulao.jpg" >
          </a>
          <div class="mt-4">
            <h3 class="text-purple-500 text-xs tracking-widest title-font mb-1">DESI FOOD</h3>
            <h2 class="text-gray-900 title-font text-lg font-medium">Chicken Pulao</h2>
            <p class="mt-1">$9.59</p>
          </div>
        </div>
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="hover:scale-125 transition-all duration-700 object-cover object-center w-full h-full block" src="img/zingerburger.jpg">
          </a>
          <div class="mt-4">
            <h3 class="text-purple-500 text-xs tracking-widest title-font mb-1">FAST FOOD</h3>
            <h2 class="text-gray-900 title-font text-lg font-medium">Chicken Zinger Burger</h2>
            <p class="mt-1">$4.40</p>
          </div>
        </div> -->
      </div>
    </div>
    <div class=" flex text-center justify-center mt-[-3rem]">
      <a href="#" class="block rounded bg-[#C8A97E] px-12 py-3 text-sm font-medium text-white shadow hover:bg-transparent hover:text-[#C8A97E] hover:border-solid hover:border-[1px] hover:border-[#C8A97E] focus:outline-none focus:ring active:bg-rose-500 sm:w-auto">
        VIEW MORE
      </a>
    </div>
  </section>


  <!-- ---------------------------HOW TO ORDER----------------- -->


  <section data-aos="fade-down" class="text-gray-600 body-font">
    <h1 data-aos="fade-down" class="  mt-24 goodFont text-[#C8A97E] mb-4  md:text-[3.5rem] text-[4rem] text-center font-bold">Food Order</h1>
    <div class="flex mb-4 justify-center">
      <div class="w-16 h-1 rounded-full bg-[#C8A97E] inline-flex"></div>
    </div>
    <h1 class="text-center  leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-black font-bold text-[3rem] mt-[-1rem] text-gray-500">
      How to order
    </h1>
    <div class="container px-5 py-10 mx-auto flex flex-wrap">
      <div class="flex flex-wrap w-full">
        <div class="lg:w-2/5 md:w-1/2 md:pr-10 md:py-6">
          <div class="flex relative pb-12">
            <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-purple-500 inline-flex items-center justify-center text-white relative z-10">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
              </svg>
            </div>
            <div data-aos="fade-down" class="flex-grow pl-4">
              <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 1</h2>
              <p class="leading-relaxed">VHS cornhole pop-up, try-hard 8-bit iceland helvetica. Kinfolk bespoke try-hard cliche palo santo offal.</p>
            </div>
          </div>
          <div class="flex relative pb-12">
            <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-purple-500 inline-flex items-center justify-center text-white relative z-10">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
              </svg>
            </div>
            <div data-aos="fade-down" class="flex-grow pl-4">
              <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 2</h2>
              <p class="leading-relaxed">Vice migas literally kitsch +1 pok pok. Truffaut hot chicken slow-carb health goth, vape typewriter.</p>
            </div>
          </div>
          <div class="flex relative pb-12">
            <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-purple-500 inline-flex items-center justify-center text-white relative z-10">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <circle cx="12" cy="5" r="3"></circle>
                <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
              </svg>
            </div>
            <div data-aos="fade-down" class="flex-grow pl-4">
              <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 3</h2>
              <p class="leading-relaxed">Coloring book nar whal glossier master cleanse umami. Salvia +1 master cleanse blog taiyaki.</p>
            </div>
          </div>
          <div class="flex relative pb-12">
            <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-purple-500 inline-flex items-center justify-center text-white relative z-10">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
            </div>
            <div data-aos="fade-down" class="flex-grow pl-4">
              <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 4</h2>
              <p class="leading-relaxed">VHS cornhole pop-up, try-hard 8-bit iceland helvetica. Kinfolk bespoke try-hard cliche palo santo offal.</p>
            </div>
          </div>
          <div class="flex relative">
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-purple-500 inline-flex items-center justify-center text-white relative z-10">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                <path d="M22 4L12 14.01l-3-3"></path>
              </svg>
            </div>
            <div data-aos="fade-down" class="flex-grow pl-4">
              <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">FINISH</h2>
              <p class="leading-relaxed">Pitchfork ugh tattooed scenester echo park gastropub whatever cold-pressed retro.</p>
            </div>
          </div>
        </div>
        <img data-aos="zoom-in" class="lg:w-3/5 md:w-1/2 object-cover object-center rounded-lg md:mt-0 mt-12" src="img/delivery.jpg" alt="step">
      </div>
    </div>
  </section>





  <section data-aos="fade-down" class="text-gray-800 body-font relative">
    <h1 data-aos="fade-down" class=" mt-24 goodFont text-[#C8A97E] mb-4  md:text-[4rem] text-[4rem]  text-center font-bold">Book a table</h1>
    <div class="flex mb-4 justify-center">
      <div class="w-16 h-1 rounded-full bg-[#C8A97E] inline-flex"></div>
    </div>
    <h1 class="text-center  leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-black font-bold text-[3rem] mt-[-1rem] text-gray-500">
      Make Reservation
    </h1>
    <div data-aos="fade-down" class="container px-5 py-10 mx-auto flex sm:flex-nowrap flex-wrap">
      <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
        <!-- <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55227.668472372374!2d71.47075922478069!3d30.10193873059309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393b3976ac703765%3A0x6ea9198153dff46!2zWmF5dG9vbiBHYXJkZW4gUmVzdGF1cmFudCBNdWx0YW4g2LLbjNiq2YjZhiDar9in2LHaiNmGINix24zYs9m52YjYsdmG2bkg2YXZhNiq2KfZhg!5e0!3m2!1sen!2s!4v1674100046531!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" class="absolute inset-0" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
          <div class="lg:w-1/2 px-6">
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
            <p class="mt-1">Photo booth tattooed prism, portland taiyaki hoodie neutra typewriter</p>
          </div>
          <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
            <a class="text-indigo-500 leading-relaxed">example@email.com</a>
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
            <p class="leading-relaxed">123-456-7890</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
        <div class="relative mb-4">
          <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
          <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="name" class="leading-7 text-sm text-gray-600">Phone Number</label>
          <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
          <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="email" class="leading-7 text-sm text-gray-600">Date</label>
          <input type="date" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="message" class="leading-7 text-sm text-gray-600">Person</label>
          <select name="dog-names" id="dog-names">
            <option value="12am">12:00am</option>
            <option value="1am">1:00am</option>
            <option value="2am">2:00am</option>
            <option value="3am">3:00am</option>
            <option value="4am">4:00am</option>
            <option value="3pm">3:00pm</option>
            <option value="4pm">4:00pm</option>
            <option value="5pm">5:00pm</option>
            <option value="6pm">6:00pm</option>
            <option value="7pm">7:00pm</option>
            <option value="8pm">8:00pm</option>
            <option value="9pm">9:00pm</option>
            <option value="10pm">10:00pm</option>
            <option value="11pm">11:00pm</option>
          </select>
        </div>
        <div class="relative mb-4">
          <label for="message" class="leading-7 text-sm text-gray-600">Person</label>
          <select name="dog-names" id="dog-names">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4+</option>
          </select>


        </div>
        <div class=" flex text-center justify-center">
          <a href="#" class="block w-full rounded bg-[#C8A97E] px-12 py-3 text-sm font-medium text-white shadow hover:bg-transparent hover:text-[#C8A97E] hover:border-solid hover:border-[1px] hover:border-[#C8A97E] focus:outline-none focus:ring active:bg-rose-500 sm:w-auto">
            Make a Reservation
          </a>
        </div>
      </div>
    </div>
  </section>



  <section data-aos="fade-down" class="text-gray-600 body-font mb-14">
    <h1 data-aos="fade-down" class=" mt-24 goodFont  text-[#C8A97E] mb-4  md:text-[3.5rem] text-[4rem]  text-center font-bold">Testimony</h1>
    <div class="flex mb-4 justify-center">
      <div class="w-16 h-1 rounded-full bg-[#C8A97E] inline-flex"></div>
    </div>
    <h1 class="text-center  leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-black font-bold text-[3rem] mt-[-1rem] text-gray-500">
      Happy Customers
    </h1>
    <div class="container px-5 py-10 mx-auto">
      <div class="drop-shadow-xl hover:drop-shadow-2xl flex flex-wrap -m-4">
        <div data-aos="zoom-in" class="lg:w-1/3 lg:mb-0 mb-6 p-4 ">
          <div class="h-full text-center">
            <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="img/testi.jpg">
            <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
            <span class="inline-block h-1 w-10 rounded bg-[#C8A97E] mt-6 mb-4"></span>
            <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">HOLDEN CAULFIELD</h2>
            <p class="text-[#C8A97E]">Enterpenur</p>
          </div>
        </div>
        <div data-aos="zoom-in" class="lg:w-1/3 lg:mb-0 mb-6 p-4">
          <div class="h-full text-center">
            <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="img/testi3.jpg">
            <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
            <span class="inline-block h-1 w-10 rounded bg-[#C8A97E] mt-6 mb-4"></span>
            <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">ALPER KAMU</h2>
            <p class="text-[#C8A97E]">Ceo of RazTech</p>
          </div>
        </div>
        <div data-aos="zoom-in" class="lg:w-1/3 lg:mb-0 p-4">
          <div class="h-full text-center">
            <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="img/testi2.jpg">
            <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
            <span class="inline-block h-1 w-10 rounded bg-[#C8A97E] mt-6 mb-4"></span>
            <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">HENRY LETHAM</h2>
            <p class="text-[#C8A97E]">CTO</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer class="text-gray-600 bg-gray-200 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap md:text-left text-center order-first">
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-[#C8A97E] tracking-widest text-sm mb-3">Ahsan Kitchen</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">Quality Work</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Fresh Food</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">100% Licensed</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Always Quality</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-[#C8A97E] tracking-widest text-sm mb-3">Timings</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">Monday&nbsp;&nbsp;&nbsp;&nbsp;9:00-24:00</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Tuesday&nbsp;&nbsp;&nbsp;&nbsp;9:00-24:00</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Wednesday&nbsp;&nbsp;&nbsp;&nbsp;9:00-24:00</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Thrusday&nbsp;&nbsp;&nbsp;&nbsp;9:00-24:00</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Friday&nbsp;&nbsp;&nbsp;&nbsp;9:00-24:00</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Saturday&nbsp;&nbsp;&nbsp;&nbsp;9:00-24:00</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-[#C8A97E] tracking-widest text-sm mb-3">Works</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-600 hover:text-gray-800">Home</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">About</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Menu</a>
            </li>
            <li>
              <a class="text-gray-600 hover:text-gray-800">Contact Us</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font text-center font-medium text-gray-900 tracking-widest text-sm mb-3">Subscribe to News</h2>
          <div class="flex xl:flex-nowrap md:flex-nowrap lg:flex-wrap flex-wrap justify-center items-end md:justify-start">
            <div class="relative w-40 sm:w-auto xl:mr-4 lg:mr-0 sm:mr-4 mr-2">
              <input type="text" id="footer-field" name="footer-field" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class=" flex text-center justify-center mt-4 ml-6">
              <a href="#" class="block w-full rounded bg-[#C8A97E] px-12 py-3 text-sm font-medium text-white shadow hover:bg-transparent hover:text-[#C8A97E] hover:border-solid hover:border-[1px] hover:border-[#C8A97E] focus:outline-none focus:ring active:bg-rose-500 sm:w-auto">
                Subscribe
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-gray-100">
      <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
          <span class="ml-3 text-xl">Ahsan Kitchen</span>
        </a>
        <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 2023 Ahsan Kitchen —
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
          <a class="text-[#C8A97E]">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-[#C8A97E]">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-[#C8A97E]">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3 text-[#C8A97E]">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
              <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
      </div>
    </div>
  </footer>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();

    AOS.init({
      offset: 150,
      duration: 800,
    })
  </script>





</body>

</html>