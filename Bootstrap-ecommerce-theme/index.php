<?php

session_start();
if (!isset($_SESSION['loggedin'])) {
  $_SESSION['name'] = "guest";
  $_SESSION['id']=-1;
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

      <h4 style="color:white">Welcome <?=$_SESSION['name']?>!</h4>
      <!-- Jumbotron -->
      <div class="jumbotron">
        <h3 style="color:white">Take a break, drink some coffee :)</h3>
      
        <a class="btn btn-large btn-success" href="login.html">Sign in</a>
        <a class="btn btn-large btn-success" href="register.html">Sign up</a>
      </div>

    </div> <!-- /container -->
  
  </body>
</html>
