<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop_updated";

$conn = new mysqli($servername, $username, $password, $dbname);
$cat_id    = $conn->real_escape_string($_POST['cID']);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM categories WHERE cat_id = $cat_id";

if ($conn->query($sql) === TRUE) {
    echo "Category deleted successfully";
} else {
    echo "Error deleting category: " . $conn->error;
}

$conn->close();
?>