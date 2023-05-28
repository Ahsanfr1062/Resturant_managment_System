<?php
$showError = false;
$success = false;
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'partials/_connectdb.php';
    $category = $_POST['Category'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['message'];
    $image = $_FILES['upload']['name'];
    $tmp_name = $_FILES['upload']['tmp_name'];
    $sql = "INSERT INTO `products_data` (`sno`, `title`, `category`, `description`, `price`, `date`, `image`) VALUES (NULL, '$title', '$category', '$description', '$price', current_timestamp(), '$image')";
    $result =  mysqli_query($conn, $sql);
    move_uploaded_file($tmp_name, "img/$image");
    if($result){
        $success = "Product has been added successfully";
    }
    else{
        $showError = "Product has no been added successfully";
    }



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
    <!-- component -->

    <?php
    include 'partials/_dashboard.php';
    ?>
   
        <?php
    if($showError){
            echo '<div class="alert bg-red-100 rounded-lg py-5 px-6 mb-3 text-base text-yellow-700 inline-flex items-center w-full alert-dismissible fade show" role="alert">
            <strong class="mr-1">ERROR!'. $showError . '
            <button type="button" class="btn-close box-content w-4 h-4 p-1 ml-auto text-yellow-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
    }
    if($success){
        echo '<div class="alert bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-yellow-700 inline-flex items-center w-full alert-dismissible fade show" role="alert">
            <strong class="mr-1">Success!'. $success . '
            <button type="button" class="btn-close box-content w-4 h-4 p-1 ml-auto text-yellow-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';

    }



    ?>


        <!-- Jumbotron -->
        <div class="p-6 shadow-lg  mt-10 rounded-lg bg-gray-100 text-gray-700">
            <h2 class="font-semibold text-3xl mb-5">Hello <?php echo $_SESSION["username"] ?></h2>
            <p>
                This is a simple hero unit, a simple jumbotron-style component for calling extra attention
                to featured content or information.
            </p>
            <hr class="my-6 border-gray-300" />
            <button type="button" class="inline-block px-6 py-2.5 mt-4 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">
                Add Product
            </button>
        </div>
        <!-- Jumbotron -->
        <!-- component -->
        <div class=" mt-10 bg-grey-lighter min-h-screen flex flex-col">
            <h1 class="text-center font-bold text-4xl mb-3 ">Add Product </h1>
            <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                    <h1 class="mb-8 text-3xl text-center">Product</h1>
                    <form action="index.php" method="post" enctype="multipart/form-data">
                        <label for="message" class="leading-7 text-sm text-gray-500 font-bold">Category</label>
                        <div class="relative mb-4">
                            <select name="Category" class="block border border-grey-light w-full p-3 rounded mb-4" id="Category">
                                <option value="BreakFast">BreakFast</option>
                                <option value="Lunch">Lunch</option>
                                <option value="Dinner">Dinner</option>
                            </select>
                        </div>
                        <label for="message" class="leading-7 text-sm text-gray-500 font-bold">Title</label>

                        <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="title" placeholder="Title" />

                        <label for="message" class="leading-7 text-sm text-gray-500 font-bold">Price</label>

                        <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="price" placeholder="Price $$" />

                        <label for="message" class="leading-7 text-sm text-gray-500 font-bold">Description</label>
                        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" data-gramm="false" wt-ignore-input="true"></textarea>

                        <!-- component -->
                        <div class="flex mt-10 mb-10 items-center justify-center bg-grey-lighter">
                            <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue-400 hover:text-white">
                                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                </svg>
                                <span class="mt-2 text-base leading-normal">Select a file</span>
                                <input type='file' name="upload" accept=".png,.jpg" required  class="hidden" />
                            </label>
                        </div>





                        <div class=" flex text-center justify-center">
                            <button type="submit" class="block rounded bg-[#C8A97E] px-12 py-3 text-sm font-medium text-white shadow hover:bg-transparent hover:text-[#C8A97E] hover:border-solid hover:border-[1px] hover:border-[#C8A97E] focus:outline-none focus:ring active:bg-rose-500 sm:w-auto" name="submit">
                                Add a Product
                            </button>
                        </div>

                    </form>
                    <div class="text-center text-sm text-grey-dark mt-4">
                        By signing up, you agree to the
                        <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                            Terms of Service
                        </a> and
                        <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                            Privacy Policy
                        </a>
                    </div>
                </div>
            </div>
        </div>

</body>

</body>

</html>