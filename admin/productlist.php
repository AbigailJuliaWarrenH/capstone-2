<?php 
	require_once 'template_products.php';
	function get_content() {
 		require 'controllers/connect.php';
 		// $_SESSION['sort'] = 0;
 		// $_SESSION['order'] = 0;
 ?>

 <div class="container-fluid">
 	<div class="row">
 		<div class="col-lg-3">
		 	<div>
		 		<div>
					<label for="sort">Sort by:</label>
					<select class="form-control" id="sort">
						<?php
							$_SESSION['sort_array'] =  ['name','price'];
							$sort = $_SESSION['sort_array'];
							for ($i=0; $i < count($sort); $i++) { ?>
							    <option value="<?php echo $i; ?>"><?php echo $sort[$i]; ?></option>
						<?php } ?>
					</select>
					<label for="order">Order:</label>
					<select class="form-control" id="order">
						<?php
							$_SESSION['order_array'] =  ['ascending','descending'];
							$sort = $_SESSION['order_array'];
							for ($i=0; $i < count($sort); $i++) { ?>
							    <option value="<?php echo $i; ?>"><?php echo $sort[$i]; ?></option>
						<?php } ?>
					</select>
		 		</div>
		 		Filter by:
		 		<div>
		 			Category
		 			<div>
		 				<div class="form-check">
						  <input class="form-check-input" type="radio" name="category" id="category0" value="" checked>
						  <label class="form-check-label" for="category0">
						    All
						  </label>
						</div>
						<?php
							$sql = "SELECT * FROM categorys";
					 		$categorys = mysqli_query($conn, $sql);
						?>
						<?php foreach ($categorys as $category):
							extract($category); ?>
			 				<div class="form-check">
							  <input class="form-check-input" type="radio" name="category" id="category<?php echo $id; ?>" value="<?php echo $id; ?>">
							  <label class="form-check-label" for="category<?php echo $id; ?>">
							    <?php echo $name; ?>
							  </label>
							</div>				
						<?php endforeach ?>
		 			</div>
		 		</div>
		 	</div>
 		</div> <!-- end left col -->
 		<div class="col-lg-9">
		 	<div class="row" id="productlist">
			 	<?php
			 		$sql = "SELECT * FROM items";
			 		$items = mysqli_query($conn, $sql);

			 		foreach ($items as $item) {
			 			extract($item); ?>
					 	<div class="card col-3" style="width: 18rem;">
						  <img height="150" class="card-img-top" src="<?php echo $image; ?>" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title"><?php echo $name; ?></h5>
						    <p class="card-text">PHP <?php echo $price; ?></p>

						    <!-- modal can be used here: onclick, modal will display -->
						    <p class="card-text"><?php echo "description";//echo $description; ?></p>

						    <p class="card-text">Category: <?php echo $category_id; ?></p>
						    <button class="btn btn-primary">Edit</button>
						    <button class="btn btn-danger">Delete</button>
						  </div>
						</div>
			 	<?php } ?>
		 	</div>
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