<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop_updated";

$conni = new mysqli($servername, $username, $password, $dbname);
$order_id    = $conni->real_escape_string($_POST['oID']);
$customer_id = $conni->real_escape_string($_POST['cID']) ;
$product_id =$conni->real_escape_string($_POST['pID']); 
$product_q = $conni->real_escape_string($_POST['quantity']);
$transaction = $conni->real_escape_string($_POST['trx_ID']);
$status = $conni->real_escape_string($_POST['oStatus']);

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   # $sql_update_orders = "UPDATE orders SET order_id='$order_id' , user_id='$customer_id' , trx_id ='$transaction', p_status ='$status'  WHERE order_id='$order_id'";
	#$sql_update_order_items = "UPDATE order_item SET , order_id='$order_id' , product_id ='$product_id', quantity ='$product_q'  WHERE order_id='$order_id'";
	$sql = "UPDATE orders, order_item
SET orders.order_id='$order_id',orders.user_id='$customer_id',
orders.trx_id='$transaction', orders.p_status ='$status', order_item.order_id='$order_id' , order_item.quantity ='$product_q'
WHERE orders.order_id='$order_id'
 AND order_item.order_id = '$order_id';";

    // Prepare statement
    $stmt = $conn->prepare($sql);
	#$stmt2 = $conn->prepare($sql_update_order_items);

    // execute the query
    $stmt->execute();
	#$stmt2->execute();

    // echo a message to say the UPDATE succeeded
	$message = "Sale Updated";
    echo "<script type='text/javascript'>alert('$message');</script>";
	header('Location: sales.php');
	
    }
catch(PDOException $e)
    {
    echo $sql_update_orders . "<br>" . $e->getMessage();
    }

$conn = null;
?>