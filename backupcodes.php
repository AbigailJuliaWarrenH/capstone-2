<?php

	require_once 'template_products.php' ;
	function get_content() {
		require 'controllers/connect.php' ;
		if (!(isset($_SESSION['logged_in']) && ($_SESSION['logged_in']['role_id'] == 1))) {
			echo "Unauthorized."; exit;
		}
		// echo 'Main Content';
?>






	<table class="table table-hover">
		<thead>



			<tr>
				<th scope="col">Transaction Code</th>
				<th scope="col">User Name</th>
				<th scope="col">Date Created</th>
				<th scope="col">Order Status </th>
				<th scope="col">Payment Method</th>
				<th scope="col">Details</th>
				<!-- <th scope="col">User ID</th>
				<th scope="col">Status ID</th>
				<th scope="col"> ID</th> -->

			</tr>
		</thead>
		<tbody>
				<?php
				$sql = "
					SELECT orders.id id, transaction_code, username, date_created, status_id, name payment_method FROM orders
					JOIN users ON user_id = users.id LEFT JOIN payment_methods ON payment_method_id = payment_methods.id
				";
				$orders = mysqli_query($conn, $sql) or die(mysqli_error($conn));
				foreach ($orders as $order): ?>
	        <tr>
	        	<td><?php echo $order['transaction_code']; ?></td>
	        	<td><?php echo $order['username']; ?></td>
	        	<td><?php echo $order['date_created']; ?></td>
	        	<td>
	        		<!-- <label>Browser Select</label> -->
						  <select class="browser-default admin-select-order-status" data-order-id=<?php echo $order['id']; ?>>
	        		<?php
							$sql = "SELECT * FROM statuss ORDER BY id";
							$statuss = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	        		foreach ($statuss as $status): ?>
						    <option value=<?php echo $status['id']; ?><?php
							    echo ($order['status_id'] == $status['id']) ? " selected" : '' ;
							    echo ($order['status_id'] > $status['id']) ? " disabled" : '' ;
						    ?>><?php echo $status['name']; ?></option>
	        		<?php endforeach ?>
						  </select>
	        	</td>
	        	<td><?php echo $order['payment_method']; ?></td>
	        	
	        	<td>
					    <!-- Modal Trigger -->
						  <!-- <a class="modal-trigger" href="#view-order-details" data-target="#exampleModal" data-order-id=<?php echo $order['id']; ?>>View details</a>
 -->
						  	<!-- Button trigger modal -->

<a type="button" class="btn btn-primary modal-trigger" href="#view-order-details" data-toggle="modal" data-target="#exampleModal" data-order-id=<?php echo $order['id']; ?>>
  View details
 </a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="orderinfo">
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Item ID</th>
      <th scope="col">Quantity</th>
      <th scope="col">Orders</th>
    </tr>
  </thead>
  <!-- <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
		        		
						  
	        	</td>
	        </tr>
      	<?php endforeach ?>
			
			</tr>
		</tbody>
	</table>
<?php } ?>


<?php
// <!-- <tr>
// 				<th scope="row">1</th>
// 				<td>Mark</td>
// 				<td>Otto</td>
// 				<td>@mdo</td>
// 			</tr> -->
// 			<!-- <tr>
// 				<th scope="row">2</th>
// 				<td>Jacob</td>
// 				<td>Thornton</td>
// 				<td>@fat</td>
// 			</tr>
// 			<tr>
// 				<th scope="row">3</th>
// 				<td colspan="2">Larry the Bird</td>
// 				<td>@twitter</td> -->
// session_start();
// if(isset($_SESSION['role']) && $_SESSION['role'] != 'admin') {
// 	header('locaion: index.php');
// }

// function get_title() {
// 	echo "Orders";
// }

// function get_admin_content() {};
// function get_content() {
// 	require 'connection.php';
// 	$sql = "SELECT * FROM orders";
// 	$orders = mysqli_query($conn,$sql) or die(mysqli_error($conn));
// 	echo '<div id="accordion">';
// 	foreach ($orders as $order) {
// 		extract($order);
// 		echo "<div class='card'>
// 			    <div class='card-header'>
// 			      <a class='card-link' data-toggle='collapse' href='#collapseOne$id'>
// 			        $transaction_code $date_created  
// 			      </a>
// 			    </div>
// 			    <div id='collapseOne$id' class='collapse' data-parent='#accordion'>
// 	      			<div class='card-body'>";
// 		$sql = "SELECT * FROM order_details od, items i 
// 			WHERE od.item_id = i.id AND od.order_id = $id";
// 		$order_details = mysqli_query($conn,$sql) or die(mysqli_error($conn));
// 		foreach ($order_details as $order_detail) {
// 			extract($order_detail);
// 			echo "<img src='$image' width='150'>";
// 			echo "$name $quantity<br>";
// 		}
// 		echo '</div></div></div>';

// 	}
// 	echo '</div>'; //accordion
// }

// require 'template.php';
// ?>
