<h3>GIVE RATING</h3>

<form method="POST">
  <input type="float" name="rating" min="0" max="5" value="" placeholder="Enter a Rating " Required>
  <input type="submit" name="add" value="ADD">
</form>

<?php

include "config.php"; // Using database connection file here
session_start();

$order_id = $_GET['order_id']; // get id through query string
$user_id= $_SESSION["id"];
//$qry = mysqli_query($db,"SELECT * FROM PRODUCT WHERE product_id='$product_id'"); // select query

//$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['add'])) // when click on Update button
{
    $rate = $_POST['rating'];

    if (0<=$rate && $rate<5)
    {
      $qry = mysqli_query($db,"SELECT C.product_id AS A FROM ORDERS O , CART C WHERE  O.cart_id=C.cart_id  AND O.order_id=$order_id ");
      $product_id = mysqli_fetch_assoc($qry)["A"]; 
      
      $add = mysqli_query($db,"INSERT INTO RATES (rate,customer_id,product_id) VALUES ('$rate', '$user_id', '$product_id')");
    
      if($add && $qry)
      {
         // mysqli_close($db); // Close connection
          header("location:list.php"); // redirects to all records page
          exit;
      } 
      else {echo "You already gave rating for this product!";}
    }
    else {echo "Please rate between 0 and 5! ";}
  	
}
?>