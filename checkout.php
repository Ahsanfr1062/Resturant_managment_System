<?php 
session_start();
include('partials/_header.php'); 
include('partials/header.php');
?>
<title>Stripe Payment Gateway Integration in PHP</title>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-creditcardvalidator/1.0.0/jquery.creditCardValidator.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script type="text/javascript" src="script/payment.js"></script>


<?php include('partials/container.php');?>
<div class="container">	
	<div class="row">	
		<h2>Stripe Payment Gateway Integration in PHP</h2>	

		<?php 
		if(isset($_SESSION["message"]) && $_SESSION["message"] && $_SESSION["message"] == 'failed') {
		?>			
			<div class="alert alert-danger">
			  <?php 
			  echo "Error : Payment failed!"; 
			  $_SESSION["message"] = '';
			  ?>
			</div>
		<?php 
		} elseif(isset($_SESSION["message"]) && $_SESSION["message"]) {
		?>
			<div class="alert alert-success">
			  <?php 
			  echo $_SESSION["message"]; 
			  $_SESSION["message"] = '';
			  ?>
			</div>
		<?php } ?>
		<div class="panel panel-default">			
			<div class="panel-heading">Order Process</div>
			<div class="panel-body">
				<form action="process.php" method="POST" id="paymentForm">	
					<div class="row">
						<div class="col-md-8" style="border-right:1px solid #ddd;">
							<h4 align="center">Customer Details</h4>
							<div class="form-group">
								<label><b>Card Holder Name <span class="text-danger">*</span></b></label>
								<input type="text" name="customerName" id="customerName" class="form-control" value="">
								<span id="errorCustomerName" class="text-danger"></span>
							</div>
							<div class="form-group">
								<label><b>Email Address <span class="text-danger">*</span></b></label>
								<input type="text" name="emailAddress" id="emailAddress" class="form-control" value="">
								<span id="errorEmailAddress" class="text-danger"></span>
							</div>
							<div class="form-group">
								<label><b>Address <span class="text-danger">*</span></b></label>
								<textarea name="customerAddress" id="customerAddress" class="form-control"></textarea>
								<span id="errorCustomerAddress" class="text-danger"></span>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label><b>City <span class="text-danger">*</span></b></label>
										<input type="text" name="customerCity" id="customerCity" class="form-control" value="">
										<span id="errorCustomerCity" class="text-danger"></span>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label><b>Zip <span class="text-danger">*</span></b></label>
										<input type="text" name="customerZipcode" id="customerZipcode" class="form-control" value="">
										<span id="errorCustomerZipcode" class="text-danger"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label><b>State </b></label>
										<input type="text" name="customerState" id="customerState" class="form-control" value="">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label><b>Country <span class="text-danger">*</span></b></label>
										<input type="text" name="customerCountry" id="customerCountry" class="form-control">
										<span id="errorCustomerCountry" class="text-danger"></span>
									</div>
								</div>
							</div>
							<hr>
							<h4 align="center">Payment Details</h4>
							<div class="form-group">
								<label>Card Number <span class="text-danger">*</span></label>
								<input type="text" name="cardNumber" id="cardNumber" class="form-control" placeholder="1234 5678 9012 3456" maxlength="20" onkeypress="">
								<span id="errorCardNumber" class="text-danger"></span>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
										<label>Expiry Month</label>
										<input type="text" name="cardExpMonth" id="cardExpMonth" class="form-control" placeholder="MM" maxlength="2" onkeypress="return validateNumber(event);">
										<span id="errorCardExpMonth" class="text-danger"></span>
									</div>
									<div class="col-md-4">
										<label>Expiry Year</label>
										<input type="text" name="cardExpYear" id="cardExpYear" class="form-control" placeholder="YYYY" maxlength="4" onkeypress="return validateNumber(event);">
										<span id="errorCardExpYear" class="text-danger"></span>
									</div>
									<div class="col-md-4">
										<label>CVC</label>
										<input type="text" name="cardCVC" id="cardCVC" class="form-control" placeholder="123" maxlength="4" onkeypress="return validateNumber(event);">
										<span id="errorCardCvc" class="text-danger"></span>
									</div>
								</div>
							</div>
							<br>

              <?php
              $id = $_GET['id'];
              require('partials/_connectdb.php');
              $sql = "SELECT * FROM `products_data` WHERE sno = $id";
              $result =  mysqli_query($conn, $sql);
              $unique = uniqid();
              while ($row = mysqli_fetch_array($result)) {
                $price = $row['price']*100;
                echo $price;
                echo '
                <div align="center">
                <input type="hidden" name="price" value="'.$price.'">
                <input type="hidden" name="total_amount" value="'.$price.'">
                <input type="hidden" name="currency_code" value="USD">
                <input type="hidden" name="item_details" value="'.$row['title'].'">
                <input type="hidden" name="item_number" value="'. $row['sno'].'">
                <input type="hidden" name="order_number" value="'. $unique .'">
                <input type="button" name="payNow" id="payNow" class="btn btn-success btn-sm" onclick="stripePay(event)" value="Pay Now" />
                </div>
                <br>
              </div>
              <div class="col-md-4">
                <h4 align="center">Order Details</h4>
                <div class="table-responsive" id="order_table">
                  <table class="table table-bordered table-striped">
                    <tbody>
                      <tr>  
                        <th>Product Name</th>  
                        <th>Quantity</th>  
                        <th>Price</th>  
                        <th>Total</th>  
                      </tr>
                      <tr>
                        <td><strong>'.$row['title'].'</strong></td>
                        <td>1</td>
                        <td align="right">$'.$row['price'].'</td>
                        <td align="right">$ '.$row['price'].'</td>
                      </tr>
                      <tr>  
                        <td colspan="3" align="right">Total</td>  
                        <td align="right"><strong>$ '.$row['price'].'</strong></td>
                      </tr>
                    </tbody>
                  </table>									
                </div>
              </div>
                ';
              }


?>
					</div>
				</form>
			</div>
		</div>			
	</div>		
</div>
<?php include('partials/footer.php');?>
  <?php
  include('partials/_footer.php');
  ?>

  </body>
  </html>
<!-- 
  <script>
    let closeIcon = document.getElementById("closeIcon");
    let openIcon = document.getElementById("openIcon");
    let dropdown = document.getElementById("dropdown");
    let text = document.getElementById("changetext");

    const showMenu = (flag) => {
      if (flag) {
        closeIcon.classList.toggle("hidden");
        openIcon.classList.toggle("hidden");
        dropdown.classList.toggle("hidden");
      } else {
        closeIcon.classList.toggle("hidden");
        openIcon.classList.toggle("hidden");
        dropdown.classList.toggle("hidden");
      }
    };

    const changeText = (country) => {
      text.innerHTML = country;
      closeIcon.classList.toggle("hidden");
      openIcon.classList.toggle("hidden");
      dropdown.classList.toggle("hidden");
    };
  </script> -->

</body>

</html>