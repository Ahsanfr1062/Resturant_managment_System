<?php

$confirm = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_GET['delivery_id'];
  include 'partials/_connectdb.php';
    // $category = $_POST['Category'];
    $select = $_POST['select'];
    $sql = "UPDATE `delivery` SET `status` = '$select' WHERE `delivery`.`delivery_id` = $id";
    $result =  mysqli_query($conn, $sql);
    // echo $select;
    // $result1 =  mysqli_query($conn, $sql1);
    if($result){
      $confirm = true;
    }
    // INSERT INTO `order_data` (`order_no`, `product_id`, `Name`, `Email`, `Address`, `City`, `zip_code`, `order_date`) VALUES (NULL, '10', 'ahsan', 'darklfij@fmold', 'ihacked', 'mutlsnm', '6070', current_timestamp());
}


?>

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

<?php
if($confirm){

  echo '<div id="alert-3" class="flex p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
  <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
  <span class="sr-only">Info</span>
<div class="ml-3 text-sm font-medium">
  Success! Your Delivery Status has been Updates Successfully
</div>
<button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
  <span class="sr-only">Close</span>
  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
</button>
</div>';
}

?>
   <div class="m-16">

       <section class="bg-white dark:bg-gray-900 rounded">
           <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Update Delivery Status</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">You can check your all ongoing stats here so you must enjoy it with full charm</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
            <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                Update
            </a>  
        </div>
    </div>
</section>
</div>

<table class="min-w-full leading-normal">
						<thead>
							<tr>
								<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Order No.
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Title
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Ordered at
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Price
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Status
								</th>
							</tr>
						</thead>
						<tbody>

                        <?php
                        $id = $_GET['delivery_id'];
                        include 'partials/_connectdb.php';
                        $sql = "SELECT * FROM `order_data` o, `products_data` p, `delivery` d WHERE o.product_id = p.sno AND d.order_no = o.order_no AND d.delivery_id = '$id'";
                        $result =  mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result)) {
echo '
<tr>
<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        <div class="flex items-center">
										<div class="flex-shrink-0 w-10 h-10">
											<img class="w-full h-full rounded-full"
                                                src="img/'.$row['image'].'"
                                                alt="" />
											</div>
											<div class="ml-3">
												<p class="text-gray-900 whitespace-no-wrap">
													Order #AKPM'.$row['order_no'].'
												</p>
											</div>
										</div>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">'.$row['title'].'</p>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">
										'.$row['order_date'].'
									</p>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p> $'.$row['price'].'</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
								<span
								class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
								<span aria-hidden
								class="absolute inset-0 bg-pink-200 opacity-50 rounded-full"></span>
								<span class="relative">'.$row['status'].'</span>
                            </span>
                        </td>
                    </tr>
                    
                    ';
                        }
                    ?>
                </tbody>
            </table>


    <div class= 'm-16'>
    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-grey-800 mb-8">Update Delivery Status</h1>
    <form method="POST" action="">
    <select name="select" class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-200 dark:border-gray-700 dark:text-gray-900 mb-6">
  <option selected >Change Delivery Status</option>
  <option>DELIVERED</option>
  <option>OUT FOR DELIVERY</option>
  <option>IN PROGRESS</option>
  <option>CANCELLED</option>
</select>
  <div class="flex items-start mb-6">
    <div class="flex items-center h-5">
      <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
    </div>
    <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-500">Remember me</label>
  </div>
  <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>
</div>
</form>
</div>  



</body>
</html>