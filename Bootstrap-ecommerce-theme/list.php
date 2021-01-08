

<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            $.fn.stars = function() {
    		return $(this).each(function() {
		        // Get the value
		        var val = parseFloat($(this).html());
		        // Make sure that the value is in 0 - 5 range, multiply to get width
		        var size = Math.max(0, (Math.min(5, val))) * 16;
		        // Create stars holder
		        var $span = $('<span />').width(size);
		        // Replace the numerical value with stars
		        $(this).html($span);
    });
    	$(function() {
	    	$('span.stars').stars();
		});
        </script>

	<style>
		span.stars, span.stars span {
	    display: block;
	    background: url(stars.png) 0 -16px repeat-x;
	    width: 80px;
	    height: 16px;
		}

		span.stars span {
		    background-position: 0 0;
		}
		</style>
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
          <?php
          if(isset($_SESSION['loggedin'])) {
           ?>
           <li><a href="status.php">My Account</a></li>
          <?php
              }
            ?> 
          <li><a href="new.php">My Cart</a></li>
          <li><a href="list.php">All Products</a></li>
          <?php
          if(isset($_SESSION['loggedin']) && ($_SESSION['sm']!=0)) {
           ?>
           <li><a href="sm_order.php">Admin Orders</a></li>
          <?php
              }
            ?> 



          <?php
          if(isset($_SESSION['loggedin'])) {
           ?>
           <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
          <?php
              }
            ?> 
          


        </ul>
      </div>
    </div>
  </div><!-- /.navbar -->
</div>

      <!-- Example row of columns -->
      <?php

      include "config.php";

      $sql_statement = "SELECT * FROM PRODUCT P, CATEGORY C WHERE P.category_id=C.category_id";

      $result = mysqli_query($db, $sql_statement);

      while($row = mysqli_fetch_assoc($result))
      {
        $name = $row['name'];
        $price = $row['price'];
        $image = $row['image_path'];
        $category = $row['category_name'];
        $rating = $row['rating'];
	    

        echo "	<div class=\"row-fluid\">
        			<ul class=\"thumbnails\">
        				<li class=\"span3\">
        					<div class=\"thumbnail\">
					         	<img alt=\"230x200\" src=\"". $image. "\">
					         	<div class=\"caption\">".
						         	"<h3>" . $category  ."</h3>". 
						         	"<p>" . $name . "</p>" .
						         	"<p> <span class=\"stars\"". $rating. "</span> </p>".
						         	"<p><a href=\"send_cart.php\" class=\"btn btn-primary\">Add To Cart</a></p>".
					         	"</div>".
				         	"</div>".
	        			"</li>".
	         		"</ul>".
	         	"</div>";
      }

      ?>

      <hr>

      <div class="footer">
        <p>&copy; Company 2021</p>
      </div>

    </div> 


  </body>
</html>
