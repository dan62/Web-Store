<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop_updated";

$conni = new mysqli($servername, $username, $password, $dbname);
$O_id    = $conni->real_escape_string($_POST['oID']);
$status = "Completed";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE orders SET p_status='$status' WHERE order_id='$O_id'";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
	header('Location: orders.php');
   // echo $stmt->rowCount() . " Category UPDATED successfully";
	$message = "Order has been approved!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>