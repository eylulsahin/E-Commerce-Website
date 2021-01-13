<h3>GIVE COMMENT</h3>

<form method="POST">
  <input type="text" name="comment" value="" placeholder="Enter your comment " Required>
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
    $comment = $_POST['comment'];

    
    $qry = mysqli_query($db,"SELECT C.product_id AS A FROM ORDERS O , CART C WHERE  O.cart_id=C.cart_id  AND O.order_id=$order_id ");
    $product_id = mysqli_fetch_assoc($qry)["A"]; 
    
    $add = mysqli_query($db,"INSERT INTO COMMENTS (product_id,customer_id,text,time) VALUES ('$product_id', '$user_id','$comment' ,'20:05:33')");
  
    if($add && $qry)
    {
       // mysqli_close($db); // Close connection
        header("location:list.php"); // redirects to all records page
        exit;
    } 
    else { echo "You already gave review for this product!";} 	
}
?>