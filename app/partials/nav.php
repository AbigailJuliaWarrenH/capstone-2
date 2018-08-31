<?php
    session_start();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">I'm A Billionaire</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
       <?php 
      if (isset($_SESSION['logged_in_user'])){
        echo "<li class = 'nav-item'>
        <a class='nav-link' href='logout.php'>Logout </a>
        </li>"; 
      } else {
        echo "
          <li class = 'nav-item'>
        <a class='nav-link' href='register.php'>Register </a>
        </li>
        <li class = 'nav-item'>
        <a class='nav-link' href='index.php'>Login </a>
        </li>";}
       ?>

      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mylist.php">My List</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Makeup</a>
          <a class="dropdown-item" href="#">Perfume</a>
          <a class="dropdown-item" href="#">Toiletries</a>
        </div>
      </li>

     

    </ul>
  </div>
</nav>



