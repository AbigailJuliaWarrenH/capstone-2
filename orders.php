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
				<th scope="col">#</th>
				<th scope="col">First</th>
				<th scope="col">Last</th>
				<th scope="col">Handle</th>
			</tr>
		</thead>
		<tbody>
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
<?php } ?>