<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    
<?php
  include('partials/_header.php');
  ?>

<p class="text-lg md:text-xl dark:text-white font-semibold leading-6 xl:leading-5 text-gray-800">Customer’s Cart</p>

  <?php
   $id = $_GET['product_id'];
   include 'partials/_connectdb.php';
   $sql = "SELECT * FROM `delivery`d, `products_data` p WHERE p.sno = d.product_id AND p.sno = '$id'";
   $result =  mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
  echo ' <div class="mt-[7rem] px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto">
  <div class="mt-10 flex flex-col xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0">
      <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">
          <div class="flex flex-col justify-start items-start dark:bg-gray-800 bg-gray-50 px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full">
              <p class="text-lg md:text-xl dark:text-white font-semibold leading-6 xl:leading-5 text-gray-800">Customer’s Delivery Update</p>
              <div class="mt-4 md:mt-6 flex flex-col md:flex-row justify-start items-start md:items-center md:space-x-6 xl:space-x-8 w-full">
                  <div class="pb-4 md:pb-8 w-full md:w-40">
                      <img class="w-full hidden md:block" src="img/'.$row['image'].'" alt="dress" />
                  </div>
                  <div class="border-b border-gray-200 md:flex-row flex-col flex justify-between items-start w-full pb-8 space-y-4 md:space-y-0">
                      <div class="w-full flex flex-col justify-start items-start space-y-8">
                          <h3 class="text-xl dark:text-white xl:text-2xl font-semibold leading-6 text-gray-800">'.$row['title'].'</h3>
                          <div class="flex justify-start items-start flex-col space-y-2">
                          <p class="text-sm dark:text-white leading-none text-gray-800"><span class="dark:text-gray-400 text-gray-300">Category: </span>'.$row['category'].'</p>
                              <p class="text-sm dark:text-white leading-none text-gray-800"><span class="dark:text-gray-400 text-gray-300">Method: </span>COD</p>
                          </div>
                      </div>
                      <div class="flex justify-between space-x-8 items-start w-full">
                          <p class="text-base dark:text-white xl:text-lg leading-6">$'.$row['price'].'</p>
                          <button class="mt-6 md:mt-0 dark:border-white dark:hover:bg-gray-900 dark:bg-transparent dark:text-white py-5 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 border border-gray-800 font-medium w-[10rem] 2xl:w-full text-base font-medium leading-4 text-gray-800">'.$row['status'].'</button>
                      </div>
                  </div>
              </div>
              <div class="mt-6 md:mt-0 flex justify-start flex-col md:flex-row items-start md:items-center space-y-4 md:space-x-6 xl:space-x-8 w-full">
                  </div>
              </div>
</div>
</div>
</div>';
    }

  ?>
 
        
        
        <?php
include('partials/_footer.php');
  ?>

    
</body>
</html>