<?php
require 'connect.php';
$order_id = $_POST['order_id']; ?>
<h4>Order details</h4>
<table class="striped responsive-table">
	<thead>
		<tr>
			<!-- <th>Item no.</th> -->
			<th>Item Name</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Subtotal</th>
		</tr>
	</thead>

	<tbody>
		<?php
		$sql = "SELECT * FROM order_details LEFT JOIN items ON item_id = items.id WHERE order_id = $order_id";
		$order_details = mysqli_query($conn, $sql);
		foreach ($order_details as $order_detail): ?>
			<tr>
				<!-- <td><?php echo $order_detail['item_id'] ?></td> -->
				<td><?php echo $order_detail['name'] ?></td>
				<td><?php echo $order_detail['quantity'] ?></td>
				<td>PHP <?php echo $order_detail['price'] ?></td>
				<td>PHP <?php echo $order_detail['price']*$order_detail['quantity'] ?></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>