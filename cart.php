<?php

$confirm = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include 'partials/_connectdb.php';
  $email = $_POST['email'];
    $sql = "SELECT * FROM `order_data` WHERE cust_email = '$email'";
    $result =  mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) >= 1 ){
      $confirm = true;
    }
    // INSERT INTO `order_data` (`order_no`, `product_id`, `Name`, `Email`, `Address`, `City`, `zip_code`, `order_date`) VALUES (NULL, '10', 'ahsan', 'darklfij@fmold', 'ihacked', 'mutlsnm', '6070', current_timestamp());
}

  ?>


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


  
<div class="2xl:mx-auto 2xl:container mx-4">
            <div class="w-full relative flex items-center justify-center">
                <!-- <img src="https://i.ibb.co/4sYZ8gC/img-2.png" alt="dining" class="w-full h-full absolute z-0 hidden xl:block" /> -->
                <!-- <img src="https://i.ibb.co/bbS3J9C/pexels-max-vakhtbovych-6301182-1.png" alt="dining" class="w-full h-full absolute z-0 hidden sm:block xl:hidden" /> -->
                <!-- <img src="https://i.ibb.co/JKkzGDs/pexels-max-vakhtbovych-6301182-1.png" alt="dining" class="w-full h-full absolute z-0 sm:hidden" /> -->
                <div class="bg-gray-800 bg-opacity-80 md:my-16 lg:py-16 py-10 w-full md:mx-24 md:px-12 px-4 flex flex-col items-center justify-center relative z-40">
                    <form action="" method="POST">
                    <h1 class="text-4xl font-semibold leading-9 text-white text-center">Check Your Products!</h1>
                    <p class="text-base leading-normal text-center text-white mt-6">
                        Add your email that you added by making a purchase <br />
                        on our store, your all items will be fetched here & you can check your delivery updates!
                    </p>
                    <div class="ml-[9rem] sm:border border-white flex-col sm:flex-row flex items-center lg:w-5/12 w-full mt-12 ml-24 space-y-4 sm:space-y-0">
                            <input class="border border-white sm:border-transparent text-base w-full font-medium leading-none text-white p-4 focus:outline-none bg-transparent placeholder-white" placeholder="Email Address" name="email"/>
                            <button class="focus:outline-none focus:ring-offset-2 focus:ring border border-white sm:border-transparent w-full sm:w-auto bg-white py-4 px-6 hover:bg-opacity-75">Find</button>
                        </div>
                    </div>
                </div>
            </div> 
        </form>
        <?php
        if($confirm){
            $sql = "SELECT * FROM `order_data`o, `products_data` p WHERE o.product_id = p.sno AND o.cust_email = '$email'";
  $result =  mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_array($result)) {
            echo '<div class=" mb-16 px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto">
            <div class="mt-10 flex flex-col xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0">
                <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">
                    <div class="flex flex-col justify-start items-start dark:bg-gray-800 bg-gray-50 px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full">
                        <p class="text-lg md:text-xl dark:text-white font-semibold leading-6 xl:leading-5 text-gray-800">Order #AKPM'.$row['order_no'].'</p>
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
                                        <p class="text-sm dark:text-white leading-none text-gray-800"><span class="dark:text-gray-400 text-gray-300">Time: </span>'.$row['created'].'</p>
                                    </div>
                                </div>
                                <div class="flex justify-between space-x-8 items-start w-full">
                                    <p class="text-base dark:text-white xl:text-lg leading-6">$'.$row['price'].'</p>
                                    <a href="delivery_update.php?product_id='.$row['product_id'].'&order_id='.$row['order_no'].'"><button class="mt-6 md:mt-0 dark:border-white dark:hover:bg-gray-900 dark:bg-transparent dark:text-white py-5 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 border border-gray-800 font-medium w-[10rem] 2xl:w-full text-base font-medium leading-4 text-gray-800">Delivery Status</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 md:mt-0 flex justify-start flex-col md:flex-row items-start md:items-center space-y-4 md:space-x-6 xl:space-x-8 w-full">
                            </div>
                        </div>
</div>
                </div>
            </div>
        </div> ';
  }
        }
        else{
            echo '
            <section class="bg-white dark:bg-gray-900">
                <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">No products in the Cart</h1>
                    <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">Buy the Products Now or Enter your Gmail to Check Your Cart</p>
                    <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                        <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                            Shop Now
                        </a>  
                    </div>
                </div>
            </section>
            ';
        }
        
        
        ?>
        
        
        <?php
include('partials/_footer.php');
  ?>

    
</body>
</html>