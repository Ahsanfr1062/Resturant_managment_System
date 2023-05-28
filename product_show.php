<?php
$showError = false;
$success = false;
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard</title>
</head>
<body>
    <?php
    include 'partials/_dashboard.php';
?>


<div class="text-center p-10">
  <h1 class="font-bold text-4xl mb-4">Edit your Products here</h1>
  <h1 class="text-3xl">Edit Now</h1>
</div>
<section class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

<?php
require 'partials/_connectdb.php';
$sql = "SELECT * FROM `products_data`";
$result =  mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                          echo '
                          <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                          <a href="#">
    <img src="img/'.$row['image'].'" alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
      <div class="px-4 py-3 w-72">
        <span class="text-gray-400 mr-3 uppercase text-xs">'.$row['category'].'</span>
        <p class="text-lg font-bold text-black truncate block capitalize">'.$row['title'].'</p>
        <div class="flex items-center">
          <p class="text-lg font-semibold text-black cursor-auto my-3">$'.$row['price'].'</p>
          <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
              <!-- component -->
    <div class="m-5">
        <button class="flex p-2.5 bg-yellow-500 rounded-xl hover:rounded-3xl hover:bg-yellow-600 transition-all duration-300 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
        </svg>
        </button>
        <!-- component -->
        <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
              <span class="sr-only">Close menu</span>
              <!-- Heroicon name: outline/x -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>

            </div>
            
            </svg></div>
            </div>
            </div>
            </a>
            </div>';
          }
          ?>
          
          </section>
</div>



<script>

kofiWidgetOverlay.draw("mohamedghulam", {
  type: "floating-chat",
  "floating-chat.donateButton.text": "Support me",
  "floating-chat.donateButton.background-color": "#323842",
  "floating-chat.donateButton.text-color": "#fff"
});

</script>
    
</body>
</html>