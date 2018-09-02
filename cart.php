<?php 
	require_once 'template_products.php';
	function get_content() {
 		require 'controllers/connect.php';
 		// $_SESSION['sort'] = 0;
 		// $_SESSION['order'] = 0;
 ?>


  <hr>

 		<div class="col-lg-9">
		 	<div class="row" id="productlist">
		 		<?php
		 		if (isset($_SESSION['cart'])) {
		 		$total = 0; 
		 		foreach ($_SESSION['cart'] as $id => $quantity):
			 		$sql = "SELECT * FROM items WHERE id = $id";
			 		$result = mysqli_query($conn, $sql);
			 		$item = mysqli_fetch_assoc($result);
		 			extract($item);
		 			$subtotal = $price*$quantity;
		 			$total += $subtotal; ?>
				 	<div class="card col-3" style="width: 18rem;">
					  <img height="150" class="card-img-top" src="<?php echo $image; ?>" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title"><?php echo $name; ?></h5>
					    <p class="card-text">PHP <?php echo number_format($price,2); ?></p>

					    <!-- modal can be used here: onclick, modal will display -->
					    <!-- <p class="card-text"><?php echo "description";//echo $description; ?></p> -->

					    <!-- <p class="card-text">Category: <?php echo $category_id; ?></p> -->
					    <form data-id=<?php echo $id ?> class="form-update-cart" action="controllers/add_to_cart.php" method="post">
					    	<div class="form-group">
							  <label for="quantity<?php echo($id) ?>">Quantity:</label>
							  <input name="quantity" min="1" type="number" class="form-control" id="quantity<?php echo($id) ?>" value="<?php echo $quantity ?>">
							  <p class="mb-0">Subtotal:</p><span>Php <?php echo number_format($subtotal,2); ?></span>
							</div>
						    <button class="btn btn-light btn-update">Update Quantity</button>
					    </form>
					    <button data-id="<?php echo $id ?>" class="btn btn-light btn-remove-from-cart">Remove</button>
					  </div>
					</div>
		 		<?php endforeach ?>
		 	</div>
		 		<div>
			 		<p><strong>Total:</strong> Php <?php echo number_format($total,2) ?></p>
			 		<button type="button" class="btn btn-light btn-proceed" data-toggle="modal" data-target="#exampleModal">Proceed to Checkout</button>

		 		<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Jovita Belleza Manila</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<p><strong>Your Total Bill is</strong> Php <?php echo number_format($total,2) ?></p>
	  </div>
      <div class="modal-footer">
      	<p>How would you like to process your payment?</p>
      	 <?php 
			echo "<a href='controllers/checkout.php' class='btn btn-primary'>Pay with PayPal </a>";

  				?>	
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="button" class="btn btn-primary">Cash on Delivery</button>
      </div>
    </div>
  </div>
</div>



<!-- end Modal -->
			 		<button class="btn btn-light btn-empty-cart btn">Empty Cart</button>
		 		</div>
		 		<!-- paypal btn -->

		 		 
		 		<?php } else {
		 			echo "Cart is empty";
		 		} ?>
 		</div> <!-- end right col -->
	</div> <!-- end row -->
 </div>

 <script type="text/javascript">
 	// let sort = <?php //echo $_SESSION['sort']; ?>;
 	// let order = <?php //echo $_SESSION['order']; ?>;
 </script>

 <!--  <table class="table">
 	<thead>
 		<tr>
 			<th>Product Name:</th>
 			<th>Product Price:</th>
 			<th>Product Description:</th>
 			<th>Product Category:</th>
 			<th>Product Image:</th>
 		</tr>
 	</thead>

 	<tbody>
 		<tr>
 			<td></td>
 		</tr>
 	</tbody>

 </table> -->

 


<?php  } ?>