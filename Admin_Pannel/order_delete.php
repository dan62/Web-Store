<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop_updated";

$conn = new mysqli($servername, $username, $password, $dbname);
$order_id    = $conn->real_escape_string($_POST['oID']);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM orders WHERE order_id = $order_id";

if ($conn->query($sql) === TRUE) {
    $message = "Order Deleted!";
    echo "<script type='text/javascript'>alert('$message');</script>";
	header('Location: orders.php');
} else {
    $message = "Order has not been deleted >>";
    echo "<script type='text/javascript'>alert('$message');</script>". $conn->error;
	header('Location: orders.php');
}

$conn->close();
?>