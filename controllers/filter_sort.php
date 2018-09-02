<?php
	session_start();
	require 'connect.php';
	$sort_array = $_SESSION['sort_array'];
	$order_array = $_SESSION['order_array'];

	if (isset($_GET['category'])) {
		$_SESSION['category'] = $_GET['category'];
	}


	if (isset($_GET['sort'])) {
		$_SESSION['sort'] = $_GET['sort'];
	}

	if (isset($_SESSION['sort']) && isset($_GET['order'])) {
		$_SESSION['order'] = $_GET['order'];
	}

	$filter = '';
	if (isset($_SESSION['category'])) {
		$filter .= $_SESSION['category'] ? " WHERE category_id = ".$_SESSION['category'] : "";
	}
	if (isset($_SESSION['sort'])) {
		$filter .= " ORDER BY ".$sort_array[$_SESSION['sort']];
	}
	if (isset($_SESSION['order'])) {
		$filter .= $order_array[$_SESSION['order']] == 'descending' ? " DESC" : "";
	}

	// echo $filter;
	
	$sql = "SELECT * FROM items".$filter;
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
		    <a href="#" class="btn btn-success">Add to cart</a>
		  </div>
		</div>
<?php } ?>




