
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap e-Commerce Theme</title>
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

    <div class="container">

      <div class="masthead">
        <h3 class="muted">Store Title</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li class="active"><a href="index.html">Home</a></li>
                
                <li><a href="checkout.html">Checkout</a></li>
                <li><a href="new.html">Order Placement</a></li>
                <li><a href="status.html">Order Status</a></li>

                <li class="dropdown">
				  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
				    Categories
				    <b class="caret"></b>
				  </a>
				  <ul class="dropdown-menu">
				    <li class="nav-header">Men</li>
				    <li><a href="list.html">Hot Chocolate</a></li>
				    <li><a href="list.html">Espresso</a></li>
				    <li><a href="list.html">Turkish coffee</a></li>
				    <li><a href="list.html">Coffee Machine</a></li>
				    
				  </ul>
				</li>

                <li class="dropdown">
				  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
				    Pages
				    <span class="caret"></span>
				  </a>
				  <ul class="dropdown-menu">
				    <li><a href="aboutus.html">About Us</a></li>
				    <li><a href="contactus.html">Contact Us</a></li>
				  </ul>
				</li>

              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

      <!-- Example row of columns -->
      <div class="row-fluid">
        <ul class="thumbnails">
          <li class="span3">
            <div class="thumbnail">
              <img alt="230x200" src="images/hot-c-50.png">
              <div class="caption">
                <h3>Hot Chocolate</h3>
                <p>Chocolate with Plant Protein 50 grams</p>
                <p><a href="send_cart.php" class="btn btn-primary">Add To Cart</a></p>
              </div>	
            </div>
          </li>
          <!-- 
          <li class="span3">
            <div class="thumbnail">
              <img alt="230x200" src="http://placehold.it/230x200">
              <div class="caption">
                <h3>Product D</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a href="checkout.html" class="btn btn-primary">Add To Cart</a> <a href="view.html" class="btn">View</a></p>
              </div>
            </div>
          </li>  -->
        </ul>
      </div>

      <hr>

      <div class="footer">
        <p>&copy; Company 2021</p>
      </div>

    </div> <!-- /container -->
    <?php

      include "config.php";

      $sql_statement = "SELECT * FROM PRODUCT";

      $result = mysqli_query($db, $sql_statement);

      while($row = mysqli_fetch_assoc($result))
      {
        $id = $row['product_id'];
        $price = $row['price'];
        $image = $row['image_path'];
        $category = $row['category_id'];

        echo "<td class=\"thumbnails\"" ."<h3>" . $category . "</h3>". "<p>" . $id . "</p>" . "<p>" ."</p>" ."<ul";
      }

      ?>

  </body>
</html>
