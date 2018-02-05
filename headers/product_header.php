<?php
session_start();
if(isset($_SESSION["uid"])){
	$cart = "Cart";
	$cart_link = "cart.php";
	$u_name = "Hi,".$_SESSION["name"];
	$uname_link ="#";
} else {
	$cart = "Sign-Up";
	$cart_link = "sign-up.php.php";
	$u_name = "Login";
	$uname_link ="login.php";
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop_updated";

if (isset($_GET['id'])) {
$id = preg_replace('#[^0-9]#i', '', $_GET['id']);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM products WHERE product_id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $product_title = $row["product_title"];
	   $price = $row["product_price"];
	   $description = $row["product_desc"];
	   $image = $row["product_image"];
    }
} else {
    echo "0 results";
}
$conn->close();
}
?>