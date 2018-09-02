<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
  
  <!-- Latest compiled and minified bootstrap 4 CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/style.css">
  <!-- font -->
  <link href="https://fonts.googleapis.com/css?family=Arizonia|Leckerli+One" rel="stylesheet">
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body>

<div>

  <div class="countdownMarquee">
   
    <center><label class="countdown" >"Free Standard Shipping on any Php1000.00 up Purchase."</label></center>

  </div>


  <!-- nav start -->
<div>
  
<nav class=" navbar navbar-expand-lg navbar-light navcolor nav justify-content-center">
  <center><a class="navbar-brand" id="logo" href="index.php"><h2>Jovita</h2> Belleza Manila</a></center>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="productlist.php">List of Products</a>
      </li>
      <?php if ((isset($_SESSION['logged_in']) && $_SESSION['logged_in']['role_id'] == 1)): ?>
        <li class="nav-item">
          <a class="nav-link" href="orders.php">Orders</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-bag">Checkout<span class="badge badge-light">4</i></a>
        </li> -->
      <?php endif ?>
      <?php if (isset($_SESSION['logged_in'])): ?>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      <?php endif ?>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
    </ul>

  </div>
  <?php if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in']['role_id'] == 1)): ?>
    <span class="nav-item" >
            <a class="nav-link" href="cart.php"><i class="fas fa-shopping-bag" id="bag">Checkout
              <span id="cart-count">
                <?php
                if (isset($_SESSION['cart'])): // if cart exists
                  $count = array_sum($_SESSION['cart']);
                  if ($count > 0) { // if cart is not empty ?>
                    <span class="badge badge-dark">
                        <?= isset($_SESSION['cart']) ? $count: '';?>
                    </span>
                  <?php } ?>
                <?php endif ?>
              </span>
            </i></a>
    </span>
  <?php endif ?>
</nav>
</div>	
<!-- nav end -->



<!-- my first navbar -->

<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="productlist.php">List of Products</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="productlist.php">List of Products</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
 -->
   <!-- start jumbotron -->
<?php if (isset($_SESSION['error_login'])) {
  echo $_SESSION['error_login'];
  unset($_SESSION['error_login']);
} ?>

<div class="jumbotron container jumbofont">
  <h1 class="display-4">Hello, <?php if (!isset($_SESSION['logged_in'])) { // not logged in
    echo "Guest";
  } else { // logged in
    if ($_SESSION['logged_in']['role_id'] == 1) { // admin
      echo "Admin";
    } else { // regular user
      echo $_SESSION['logged_in']['username'];
    }
  }
   ?>!</h1>
  <p class="lead jumbtext">"Beauty is power; a smile is its sword." -John Ray
</p>
  <hr class="my-4">
  <p class="jumbtext">It uses utility classes for typography and spacing to space content out within the larger container.</p>

  <?php if (!isset($_SESSION['logged_in'])): ?>
    <!-- Button trigger modal -->
    <a class="btn btn-dark btn-lg" id="sign" href="#exampleModal" data-toggle="modal" data-target="#exampleModal" role="button">Sign In / Sign Up</a>
  <?php endif ?>

</div>

<?php if (!isset($_SESSION['logged_in'])): ?>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="controllers/authenticate.php" method="POST">
          <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputusername1">Username</label>
              <input name="username" type="text" class="form-control" id="exampleInputusername1" aria-describedby="usernameHelp" placeholder="Enter username">
              <!-- <small id="usernameHelp" class="form-text text-muted">We'll never share your username with anyone else.</small> -->
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <span>Not registered? <a href="register.php">Sign up here.</a></span>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endif ?>



  <div class="container">
    <!-- <h1>Welcome!</h1> -->

 

		<?php 
			get_content();
		 ?>
		

	</div>

  <footer>
    <div >
      <img src="assets/images/paypal.jpg"  class="payp">
    </div>
  </footer>

</div>

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <!-- external custom js -->
  <script src="assets/js/script.js"></script>
</body>
</html>