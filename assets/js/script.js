// $('#sort').val(sort);
// $('#order').val(order);

$('[name="category"]').click(function() {
	$.get('controllers/filter_sort.php?category='+$(this).val(), function(data) {
		$('#productlist').html(data);
	});
});

$('#sort').change(function() {
	$.get('controllers/filter_sort.php?sort='+$(this).val()+'&order='+$('#order').val(), function(data) {
		$('#productlist').html(data);
	});
});

$('#order').change(function() {
	$.get('controllers/filter_sort.php?order='+$(this).val()+'&sort='+$('#sort').val(), function(data) {
		$('#productlist').html(data);
	});
});

const updateCartBadge = function() {
	$.ajax({ url: 'controllers/update_cart_badge.php' }).done(function(data) {
		$('#cart-count').html(data);
	});
};

$('.form-add-to-cart').submit(function() {
	const id = $(this).data('id');
	const quantity = Number($('#quantity'+id).val());

	if (quantity <= 0 || !Number.isInteger(quantity)) {
		alert('Please enter valid quantity.')
	} else {
		$.post('controllers/add_to_cart.php',
			{ item_id: id, item_quantity: quantity },
			function(data) {
				// call back function
				// do this when you are done passing the data to the server
				console.log('Added to cart successfully!');
				// console.log(data);
				updateCartBadge();
			});
	}
	return false;
});

$('.btn-remove-from-cart').click(function() {
	const id = $(this).data('id');
	$.ajax({
		url: 'controllers/remove_from_cart.php',
		method: 'post',
		data: {id: id}
	}).done(function() {
		location.reload();
	});
});

$('.btn-empty-cart').click(function() {
	$.ajax({
		url: 'controllers/empty_cart.php'
	}).done(function() {
		location.reload();
	});
});

$('.form-update-cart').submit(function() {
	const id = $(this).data('id');
	const quantity = Number($('#quantity'+id).val());

	if (quantity <= 0 || !Number.isInteger(quantity)) {
		alert('Please enter valid quantity.')
	} else {
		$.post('controllers/update_cart.php',
			{ item_id: id, item_quantity: quantity },
			function(data) {
				// call back function
				// do this when you are done passing the data to the server
				console.log('Updated cart successfully!');
				// console.log(data);
				location.reload();
			});
	}
	return false;
});




$('#register_form').submit( () => {
	const username = $('#username').val();
	let	errorFlag = false;
	console.log(errorFlag);
	if (username.length == 0) { // empty username
		$('#username').next().css('color', 'red');
		$('#username').next().html('this field is required');
		errorFlag = true;
	} else { // non-empty username
		$.ajax({
			url: 'controllers/check_username.php',
			data: { 'username': username },
			method: 'post',
			async: false,
			success: function(data) {
				console.log(data);
				if (data === 'username already exists') {
					errorFlag = true;
				}

				if(errorFlag == true) {
					$('#username').next().css('color' , 'red');
					$('#username').next().html('Username already exist');
					

					// console.log ('username already exist');
				} else {
					$('#username').next().css('color' , 'green');
					$('#username').next().html('Username still available');
					// console.log ('username still available');
				}	
			}
		});
	}
	const password = $('#password').val();
	const confirmPassword = $('#confirmpassword').val();
	if (password.length == 0) {
	// if (password !== confirmpassword) {
		$('#password').next().css('color','red');
		$('#password').next().html('This field is required.');
		errorFlag = true;
	} else {
		$('#password').next().html('');
	}

	if(password !== confirmPassword) {
		$('#confirmpassword').next().css('color','red');
		$('#confirmpassword').next().html('passwords did not match');
		errorFlag = true;
	}else {
		$('#confirmpassword').next().html('');
	}

	return !errorFlag;
});

$('.admin-btn-delete-item').click(function() {
	const id = $(this).data('id');
	$.ajax({
		url: 'controllers/delete_item.php',
		data: { id: id },
		method: 'post',
		success: function() {
			location.reload();
		}
	});
});

$('.admin-btn-edit-item').click(function() {
	const id = $(this).data('id');
	$.ajax({
		url: 'controllers/get_item_data.php',
		data: { id: id },
		method: 'post',
		success: function(data) {
			$('#form-edit-item-modal-body').html(data);
		}
	});
});

$('#btn-edit-item').click(function() {
	// tapos na si user mag-edit
	// save changes
	$('#form-edit-item-modal-body form').submit();
});