<?php

include "config.php";

if (isset($_POST['name'])){

$name = $_POST['name'];
$price = $_POST['price'];

echo $name . " " . $price . "<br>";

$sql_statement = "INSERT INTO messages(sender,message)
					VALUES ('$name','$price')";

$result = mysqli_query($db, $sql_statement);

header ("Location: index.php");

}

else
{

	echo "The form is not set.";

}


?>