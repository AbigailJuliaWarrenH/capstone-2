<?php
require 'connect.php';

$id = $_POST['id'];
$sql = "SELECT * FROM items WHERE id = $id";
$result = mysqli_query($conn, $sql);
$item = mysqli_fetch_assoc($result); ?>
<!-- start form -->
 <form enctype="multipart/form-data" method="post" action="controllers/edit_item.php?id=<?php echo $item['id'] ?>">
 	<div class="form-group">
 		<label>Product Name:</label>
 		<input type="text" name="productname" value="<?php echo $item['name'] ?>">

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
 					if ($id == $item['category_id']) {
	 					echo "<option value=".$id." selected>".$name."</option>";
 					} else {
	 					echo "<option value=".$id.">".$name."</option>";
 					}
 					
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
 		<input type="number" min="0" name="productprice" value="<?php echo $item['price'] ?>">

 	</div>

 	<div class="form-group">
 		<label>Product Description:</label>
 		<input type="text" name="productdescription" value="<?php echo $item['description'] ?>">

 	</div>

 	<div class="form-group">
 		<label>Product Image:</label>
 		<input type="file" name="productimage">

 	</div>

 </form>