<?php 

include "config.php";

?>
<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <style>
      body {
        background-image: url('./images/sign in:up alternative.png');
        background-repeat: no-repeat;
        background-attachment: fixed;  
        background-size: cover;
      }

      .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background-color: white;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
      </style>

    <meta charset="utf-8">
    <title>Coffee House</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <![endif]-->
  </head>

<!--style="background-image: url('./images/sign in:up alternative.png');" background-size: cover;   background-repeat: no-repeat;
    background-attachment: fixed; -->

  <body>


  <div class="container" >

<div class="masthead">
  <h3 class="muted" style="color:white">Coffee House</h3>
  <div class="navbar">
    <div class="navbar-inner">
      <div class="container">


        <ul class="nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              Categories
              <b class="caret"></b>
            </a>

            <ul class="dropdown-menu">
              <li class="nav-header">Coffees</li>
              <li><a href="filter_coffee_products.php">Filter coffee</a></li>
              <li><a href="turkish_coffee_products.php">Turkish coffee</a></li>
              <li><a href="espresso_products.php">Espresso</a></li>
              <li><a href="hot_chocolate_products.php">Hot chocolate</a></li>
              <li class="divider"></li>
              <li class="nav-header">Coffee Machines</li>
              <li><a href="filter_coffee_machines_products.php">Filter coffee Machine</a></li>
              <li><a href="turkish_coffee_machine.php">Turkish coffee machine</a></li>
              <li><a href="espresso_coffee_machine.php">Espresso machine</a></li>
            </ul>
          
          </li>
          <li><a href="status.php">My Account</a></li>
          <li><a href="new.php">My Cart</a></li>
          <li><a href="contactus.html">Contact Us</a></li>
          <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
        </ul>
      </div>
    </div>
  </div><!-- /.navbar -->
</div>

      <div class="card">
        
        <img src="./images/t_c 150g d_r.png"  style="width:100%">
        <h2>Double Roasted Turkish Coffee 150g </h2>
        <p class="price">$15</p>
        <form action="send_cart.php" method="POST">
  <input type="hidden" id="fname" name="name" value="Double Roasted Turkish Coffee 150g" placeholder="Type your name"><br>
  <input type="hidden" id="fname" name="customer_id" value="3" placeholder="Type your name"><br>
  <input type="hidden" id="fname" name="product_id" value="4" placeholder="Type your name"><br>
  <input type="number" min="1" id="fname" name="quantity" placeholder="Enter Quantity"><br>
  <input type="hidden" id="fname" name="price" value="15" placeholder="Type your name"><br>
	<button class="button2">Add to Cart</button>
</form>    
      
    
        <img src="./images/t_c_150g r.png"  style="width:100%">
        <h2>Roasted Turkish Coffee 150g </h2>
        <p class="price">$12</p>
        <form action="send_cart.php" method="POST">
  <input type="hidden" id="fname" name="name" value="Roasted Turkish Coffee 150g" placeholder="Type your name"><br>
  <input type="hidden" id="fname" name="customer_id" value="3" placeholder="Type your name"><br>
  <input type="hidden" id="fname" name="product_id" value="7" placeholder="Type your name"><br>
  <input type="number" min="1" id="fname" name="quantity" placeholder="Enter Quantity"><br>
  <input type="hidden" id="fname" name="price" value="12" placeholder="Type your name"><br>
	<button class="button2">Add to Cart</button>
</form>    


        <img src="./images/t_c 250 g d_r.png"  style="width:100%">
        <h2>Double Roasted Turkish Coffee 250g </h2>
        <p class="price">$18</p>
        <form action="send_cart.php" method="POST">
  <input type="hidden" id="fname" name="name" value="Double Roasted Turkish Coffee 250g " placeholder="Type your name"><br>
  <input type="hidden" id="fname" name="customer_id" value="3" placeholder="Type your name"><br>
  <input type="hidden" id="fname" name="product_id" value="5" placeholder="Type your name"><br>
  <input type="number" min="1" id="fname" name="quantity" placeholder="Enter Quantity"><br>
  <input type="hidden" id="fname" name="price" value="18" placeholder="Type your name"><br>
	<button class="button2">Add to Cart</button>
</form>    


        <img src="./images/t_c 250g r.png" style="width:100%">
        <h2>Roasted Turkish Coffee 250g </h2>
        <p class="price">$15</p>
        <form action="send_cart.php" method="POST">
  <input type="hidden" id="fname" name="name" value="Roasted Turkish Coffee 250g" placeholder="Type your name"><br>
  <input type="hidden" id="fname" name="customer_id" value="3" placeholder="Type your name"><br>
  <input type="hidden" id="fname" name="product_id" value="6" placeholder="Type your name"><br>
  <input type="number" min="1" id="fname" name="quantity" placeholder="Enter Quantity"><br>
  <input type="hidden" id="fname" name="price" value="15" placeholder="Type your name"><br>
	<button class="button2">Add to Cart</button>
</form>    
    
        
      </div>
      
  </body>
</html>
