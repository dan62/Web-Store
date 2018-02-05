<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop_updated";

$conn = new mysqli($servername, $username, $password, $dbname);
$product_id    = $conn->real_escape_string($_POST['pID']);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM products WHERE product_id = $product_id";

if ($conn->query($sql) === TRUE) {
    echo "Product deleted successfully";
} else {
    echo "Error deleting product: " . $conn->error;
}

$conn->close();
?>