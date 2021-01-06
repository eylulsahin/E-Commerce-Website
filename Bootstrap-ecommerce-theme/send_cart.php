<?php

include "config.php";

if (isset($_POST['name'])){

$customer_id = $_POST['customer_id'];
$quantity = $_POST['quantity'];
$product_id = $_POST['product_id'];
$price = $_POST['price'];
$name = $_POST['name'];

if ($quantity == 0){
	$quantity  = 1;
}


$sql_statement = "INSERT INTO BASKET(cost, quantity,product_name ,product_id, customer_id)
					VALUES ('$price','$quantity', '$name','$product_id','$customer_id')";

$result = mysqli_query($db, $sql_statement);

header ("Location: index.php");

}

else
{

	echo "The form is not set.";

}


?>