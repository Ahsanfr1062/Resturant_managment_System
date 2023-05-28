<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
    href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes:regular" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</head>
<body>


    <?php
    include('partials/_header.php');
    ?>

    <!-- Jumbotron -->
<div
  class="p-12 text-center relative overflow-hidden bg-no-repeat bg-center bg-cover rounded-lg"
  style="
    background-image: url('img/banner2.jpg');
    height: 400px;
  "
>
  <div
    class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
    style="background-color: rgba(0, 0, 0, 0.6)"
  >
    <div class="flex justify-center items-center h-full">
      <div class="text-white">

      <h1 class="text-gray-100 text-6xl mb-3 font-bold">About</h1>
        <h2 class="font-semibold text-3xl mb-4 hover:text-purple-400"><a class="hover:text-purple-400" href="home.php">Home > </a> <a class="hover:text-purple-400" href="about.php">About</a></h2>
      </div>
    </div>
  </div>
</div>
<!-- Jumbotron -->

<section class="text-gray-600 mt-[-1rem] body-font mb-8">

    <div class="container px-5 py-24 mx-auto">
      <h1 class=" goodFont text-[#C8A97E] mb-4  md:text-[4rem] text-[4rem] text-center font-bold">Chefs</h1>
      <div class="flex mb-4 justify-center">
        <div class="w-16 h-1 rounded-full bg-[#C8A97E] inline-flex"></div>
      </div>
        <h1 data-aos="fade-in" class="text-center  leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-black font-bold text-[3rem] mt-[-1rem] mb-4 text-gray-500">
          Our Master Chefs
        </h1>
      <div class="flex flex-wrap -m-4">
        <div class="lg:w-1/4 text-gray-700 md:w-1/2 p-4 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class=" hover:scale-125 transition-all duration-700 object-cover object-center w-full h-full block" src="img/chef4.jpg">
          </a>
          <div class="mt-4">
            <h3 class="text-purple-500 text-xs tracking-widest title-font mb-1">FAST FOOD CHEF</h3>
            <h2 class="text-gray-900 title-font text-lg font-medium hover:text-[#C8A97E] cursor-pointer">John smith</h2>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-10 justify-center sm:justify-start">
          <a class="text-[#C8A97E] mt-3">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-[#C8A97E] mt-3">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-[#C8A97E] mt-3">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3 text-[#C8A97E] mt-3">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
              <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
          </div>
        </div>
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class=" hover:scale-125 transition-all duration-700 object-cover object-center w-full h-full block" src="img/chef1.jpg">
          </a>
          <div class="mt-4">
            <h3 class="text-purple-500 text-xs tracking-widest title-font mb-1">DESI FOOD CHEF</h3>
            <h2 class="text-gray-900 title-font text-lg font-medium">Steven Maven</h2>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-10 justify-center sm:justify-start">
          <a class="text-[#C8A97E] mt-3">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-[#C8A97E] mt-3">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-[#C8A97E] mt-3">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3 text-[#C8A97E] mt-3">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
              <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
          </div>
        </div>
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class=" hover:scale-125 transition-all duration-700 object-cover object-center w-full h-full block" src="img/chef2.jpg">
          </a>
          <div class="mt-4">
            <h3 class="text-purple-500 text-xs tracking-widest title-font mb-1">DESI FOOD CHEF</h3>
            <h2 class="text-gray-900 title-font text-lg font-medium"> Carla Browan</h2>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-10 justify-center sm:justify-start">
          <a class="text-[#C8A97E] mt-3">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-[#C8A97E] mt-3">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-[#C8A97E] mt-3">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3 text-[#C8A97E] mt-3">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
              <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
          </div>
        </div>
        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class=" hover:scale-125 transition-all duration-700 object-cover object-center w-full h-full block" src="img/chef3.jpg">
          </a>
          <div class="mt-4">
            <h3 class="text-purple-500 text-xs tracking-widest title-font mb-1">FAST FOOD CHEF</h3>
            <h2 class="text-gray-900 title-font text-lg font-medium">Darlie rash</h2>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-10 justify-center sm:justify-start">
          <a class="text-[#C8A97E] mt-3">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-[#C8A97E] mt-3">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-[#C8A97E] mt-3">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3 text-[#C8A97E] mt-3">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
              <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
          </div>
        </div>
      </div>
    </div>
    <div class=" flex text-center justify-center mt-[-3rem]">
    </div>
  </section>


  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();

    AOS.init({
      offset: 150,
      duration: 800,
    })
  </script>



<?php
include('partials/_footer.php');
?>




    
</body>
</html>