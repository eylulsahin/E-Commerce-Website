<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
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
      </style>

<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style_login.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

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
                    <li><a href="filter_coffee_products.php">filter coffee</a></li>
                    <li><a href="turkish_coffee_products.php">turkish coffee</a></li>
                    <li><a href="espresso_products.php">espresso</a></li>
                    <li><a href="hot_chocolate_products.php">hot chocolate</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Coffee Machines</li>
                    <li><a href="filter_coffee_machines_products.php">filter coffee Machine</a></li>
                    <li><a href="turkish_coffee_machine.php">turkish coffee machine</a></li>
                    <li><a href="espresso_coffee_machine.php">espresso machine</a></li>
                    <li><a href="hot_chocolate_products.php">hot chocolate machine</a></li>
                  </ul>
                
                </li>
                <li><a href="status.html">My Account</a></li>
                <li><a href="new.php">My Cart</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

      <h4 style="color:white">Your order is accepted, <?=$_SESSION['name']?>!</h4>
      <h4 style="color:white">Order number is: 89034167403</h4>

    </div> <!-- /container -->
  
  </body>
</html>