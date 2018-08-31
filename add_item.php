<?php 
	require_once 'template_products.php' ;
	function get_content() {
	require 'controllers/connect.php' ;
		// echo 'Main Content';
	
	
 ?>




<!-- start form -->
 <form enctype="multipart/form-data" method="post" action="controllers/add_products.php">
 	<div class="form-group">
 		<label>Product Name:</label>
 		<input type="text" name="productname">

 	</div>

 	<div class="form-group">
 		<label>Product Categories:</label>
 		<select name="productcategories">
 			<?php 
 				$categoriesQuery = "SELECT * FROM categorys";
 				$categories = mysqli_query($conn, $categoriesQuery);

 				foreach ($categories as $category) {
 					extract($category); //function can be used to any associative array

 					// while convert mysqli obj to associative
 						// for each auto converts to associative 
 							// extract php function can be used to any associative array

 					echo "<option value=".$id.">".$name."</option>";
 				// foreach ($categories as $category) {
 				// 	extract($category); //function can be used to any associative array

 				// 	// while convert mysqli obj to associative
 				// 		// for each auto converts to associative 
 				// 			// extract php function can be used to any associative array

 				// 	echo "<option value=".$id.">".$name."</option>";
		

 			 ?>
 		<?php } ?>
 			
 		</select>

 	</div>

 	<div class="form-group">
 		<label>Product Price: Php</label>
 		<input type="text" name="productprice">

 	</div>

 	<div class="form-group">
 		<label>Product Description:</label>
 		<input type="text" name="productdescription">

 	</div>

 	<div class="form-group">
 		<label>Product Image:</label>
 		<input type="file" name="productimage">

 	</div>

 	<div class="form-group">
 		<button class="btn btn-primary">Submit</button>

 	</div>

 </form>

 <?php } ?>