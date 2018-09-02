<?php 
// session_start();
// require 'connect.php';

require_once 'template_products.php' ;
	function get_content() {
		require 'controllers/connect.php' ;
		if (!(isset($_SESSION['logged_in']) && ($_SESSION['logged_in']['role_id'] == 1))) {
			echo "Unauthorized."; exit;
		}

 ?>





<?php } ?>