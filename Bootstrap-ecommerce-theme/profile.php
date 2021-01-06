<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'coffeeshop';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password, first_name,last_name FROM USERS WHERE user_id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $first_name,$last_name);
$stmt->fetch();
$stmt->close();



//SEN YAZDIN
$stmt2 = $con->prepare('SELECT order_id, time,amount,status FROM ORDERS WHERE customer_id = ?');
// In this case we can use the account ID to get the account info.
$stmt2->bind_param('i', $_SESSION['id']);
$stmt2->execute();
$stmt2->bind_result($order_id, $time,$amount,$status);
$stmt2->fetch();
$stmt2->close();





?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link href="style_login.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Website Title</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Profile Page</h2>
			<div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?=$password?></td>
					</tr>
					<tr>
						<td>First Name:</td>
						<td><?=$first_name?></td>
                    </tr>
                    <tr>
						<td>Last Name:</td>
						<td><?=$last_name?></td>
                    </tr>
                </table>
            </div>
            <div>
				<p>Your Orders are below DEVAMET:</p>
				<table>
					<tr>
						<th>Order_id</th>
                        <th>Time</th>
                        <th>Amount</th>
                        <th>Status</th>
					</tr>
					<tr>
						<td><?=$order_id?></td>
                        <td><?=$time?></td>
                        <td><?=$amount?></td>
                        <td><?=$status?></td>
					</tr>
					<tr>
		
                    </tr>
                    <tr>

                    </tr>
                </table>
			</div>
		</div>
	</body>
</html>