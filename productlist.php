<?php 
	require_once 'template_products.php';
	function get_content() {
 		require 'controllers/connect.php';
 		// $_SESSION['sort'] = 0;
 		// $_SESSION['order'] = 0;
 ?>
<!-- Sort and Filter -->
 <div class="container-fluid">
 	<div class="row">
		<div class="col-lg-3 accordion" id="accordionExample">
		  <div class="card">
		    <div class="card-header" id="headingOne">
		      <h5 class="mb-0">
		        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		          Filter and Sort
		        </button>
		      </h5>
		    </div>

		    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
		      <div class="card-body">
			 		<?php if ((isset($_SESSION['logged_in']) && $_SESSION['logged_in']['role_id'] == 1)): ?>
			 			<a class="btn btn-primary" href="add_item.php" role="button">Add item</a>
			 		<?php endif ?>
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
		      </div>
		    </div>
		  </div>
		</div> <!-- end left col -->
 		<div class="col-lg-9">
		 	<div class="row" id="productlist">

		 		<?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']['role_id'] == 1):
				 			// admin is logged in ?>
					<!-- Modal -->
					<div class="modal fade" id="form-edit-item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body" id="form-edit-item-modal-body">
					        ...
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <button id="btn-edit-item" type="button" class="btn btn-primary">Save changes</button>
					      </div>
					    </div>
					  </div>
					</div>
				<?php endif ?>
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


				 			<?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']['role_id'] == 1):
				 			// admin is logged in ?>
						 		<!-- Button trigger modal -->
							    <button data-id=<?php echo $id ?> class="admin-btn-edit-item btn btn-primary" data-toggle="modal" data-target="#form-edit-item">Edit</button>

							    <button data-id=<?php echo $id ?> class="admin-btn-delete-item btn btn-danger">Delete</button>
					 		<?php else: ?>
							    <form data-id=<?php echo $id ?> class="form-add-to-cart" action="controllers/add_to_cart.php" method="post">
							    	<div class="form-group">
									  <label for="quantity<?php echo($id) ?>">Quantity:</label>
									  <input name="quantity" min="1" type="number" class="form-control" id="quantity<?php echo($id) ?>">
									</div>
								    <button class="btn btn-success">Add to cart</button>
							    </form>
				 			<?php endif ?>

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