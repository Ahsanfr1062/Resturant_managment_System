<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link
    href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes:regular" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php
    include('partials/_header.php');
    ?>




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

      <h1 class="text-gray-100 text-6xl mb-3 font-bold">Menu</h1>
        <h2 class="font-semibold text-3xl mb-4 "><a class="hover:text-[#C8A97E]" href="home.php"> Home > </a> <a class="hover:text-[#C8A97E]" href="about.php">Menu</a></h2>
      </div>
    </div>
  </div>
</div>
    <!-- component -->
<link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />


<!-- This is an example component -->


<div class="max-w-[2000px] mx-auto">
<h1 class=" goodFont  text-[#C8A97E] mb-4 mt-24  md:text[4rem] text-[4rem] text-center font-bold">Specialties</h1>
      <div class="flex mb-4 justify-center">
        <div class="w-16 h-1 rounded-full bg-[#C8A97E] inline-flex"></div>
      </div>
        <h1 class="text-center  leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-black font-bold text-[3rem] mt-[-1rem] text-gray-500">
          Our Menu
        </h1>

    
    <div class="border-b border-gray-200 dark:border-gray-700 mb-4">
        <ul class="flex flex-wrap -mb-px" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
            <li class="mr-2" role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300 text-[10rem]" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">BreakFast</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300 active" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="true">Lunch</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Dinner</button>
            </li>
        </ul>
    </div>
    <div id="myTabContent">
        <div class=" w-auto bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <section class="text-gray-600 mt-[-1rem] body-font">

<div class="container px-5 py-24 mx-auto">
  <div class="flex flex-wrap -m-4">

  <?php

  require('partials/_connectdb.php');
  $sql = 'SELECT * FROM `products_data` WHERE category = "BreakFast";';
  $result =  mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_array($result)) {
    echo '<div class="lg:w-1/4 text-gray-700 md:w-1/2 p-4 w-full">
    <a class="block relative h-48 rounded overflow-hidden">
      <img alt="ecommerce" class=" hover:scale-125 transition-all duration-700 object-cover object-center w-full h-full block" src="img/' . $row['image'] . '">
    </a>
    <div class="mt-4">
      <h3 class="text-purple-500 text-xs uppercase tracking-widest title-font mb-1">' . $row['category'] . '</h3>
      <h2 class="text-gray-900  title-font text-lg font-medium hover:text-[#C8A97E] cursor-pointer">' . $row['title'] . '</h2>
      <p class="mt-1">' . $row['price'] . '$</p>
    </div>
  </div>';

  }

  ?>
     <!-- <div class="lg:w-1/4 text-gray-700 md:w-1/2 p-4 w-full">
      <a class="block relative h-48 rounded overflow-hidden">
        <img alt="ecommerce" class=" hover:scale-125 transition-all duration-700 object-cover object-center w-full h-full block" src="img/bbqBurger.jpg">
      </a>
      <div class="mt-4">
        <h3 class="text-purple-500 text-xs tracking-widest title-font mb-1">FAST FOOD</h3>
        <h2 class="text-gray-900 title-font text-lg font-medium hover:text-[#C8A97E] cursor-pointer">Juicy Beef Burger</h2>
        <p class="mt-1">$5.99</p>
      </div>
     </div> -->
 <!-- <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
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
</section>
 </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
        <section class="text-gray-600 mt-[-1rem] body-font">

<div class="container px-5 py-24 mx-auto">
  <div class="flex flex-wrap -m-4">
  <?php

require('partials/_connectdb.php');
$sql = 'SELECT * FROM `products_data` WHERE category = "Lunch";';
$result =  mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
  echo '<div class="lg:w-1/4 text-gray-700 md:w-1/2 p-4 w-full">
  <a class="block relative h-48 rounded overflow-hidden">
    <img alt="ecommerce" class=" hover:scale-125 transition-all duration-700 object-cover object-center w-full h-full block" src="img/' . $row['image'] . '">
  </a>
  <div class="mt-4">
    <h3 class="text-purple-500 text-xs uppercase tracking-widest title-font mb-1">' . $row['category'] . '</h3>
    <h2 class="text-gray-900  title-font text-lg font-medium hover:text-[#C8A97E] cursor-pointer">' . $row['title'] . '</h2>
    <p class="mt-1">' . $row['price'] . '$</p>
  </div>
</div>';

}

?>
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
</section>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="settings" role="tabpanel" aria-labelledby="settings-tab">
        <section class="text-gray-600 mt-[-1rem] body-font">

<div class="container px-5 py-24 mx-auto">
  <div class="flex flex-wrap -m-4">
  <?php

require('partials/_connectdb.php');
$sql = 'SELECT * FROM `products_data` WHERE category = "Dinner";';
$result =  mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
  echo '<div class="lg:w-1/4 text-gray-700 md:w-1/2 p-4 w-full">
  <a class="block relative h-48 rounded overflow-hidden">
    <img alt="ecommerce" class=" hover:scale-125 transition-all duration-700 object-cover object-center w-full h-full block" src="img/' . $row['image'] . '">
  </a>
  <div class="mt-4">
    <h3 class="text-purple-500 text-xs uppercase tracking-widest title-font mb-1">' . $row['category'] . '</h3>
    <h2 class="text-gray-900  title-font text-lg font-medium hover:text-[#C8A97E] cursor-pointer">' . $row['title'] . '</h2>
    <p class="mt-1">' . $row['price'] . '$</p>
  </div>
</div>';

}

?>
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
    </div> -->
  </div>
</div>
</section>
        </div>
        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
        </div>
    </div>
</div>

<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
    
    <?php
    include('partials/_footer.php');
    ?>


    
</body>
</html>